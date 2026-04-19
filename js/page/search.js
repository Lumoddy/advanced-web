let previousSearchCancel = null;
const forMoviesForm = document.getElementById("search-for-movies");
const searchResultsContainer = document.getElementById("search-results");
let starFilledIcon = null;
let starIcon = null;
const starFilledIconRequest = fetch("./part/star_filled_icon.php").then((x) => x.text());
const starIconRequest = fetch("./part/star_icon.php").then((x) => x.text());
function updateAsMovies(movies) {
    searchResultsContainer.replaceChildren();
    for (const movie of movies) {
        const fragment = document.createElement("div");
        fragment.innerHTML = `
            <a
              class="glass panel"
              href="./media.php?id=${movie.id}"
              style="
                width: 140px;
                color: #FFFFFF;
                text-decoration: none">
              <img
                src="./img/${movie.cover_image_id}.jpg"
                style="width: 100%; aspect-ratio: 2/3">
              <div style="margin: 4px 8px 4px;">
                <h3
                  style="margin: 0; font-size: medium">
                  ${movie.title}
                </h3>
              </div>
              <div
                style="
                  display: flex;
                  flex-flow: row nowrap;
                  justify-content: end;
                  align-items: center">
                ${movie.rating === null
            ? `<span class="rating">(No ratings)</span>`
            : `<span
                          class="rating"
                          style="font-size: small">(${movie.rating.toFixed(1)})</span>
                        <rating-display class="small">
                          <svg${movie.rating >= 0.5 ? starFilledIcon : starIcon}svg>
                          <svg${movie.rating >= 1.5 ? starFilledIcon : starIcon}svg>
                          <svg${movie.rating >= 2.5 ? starFilledIcon : starIcon}svg>
                          <svg${movie.rating >= 3.5 ? starFilledIcon : starIcon}svg>
                          <svg${movie.rating >= 4.5 ? starFilledIcon : starIcon}svg>
                        </rating-display>`}
              </div>
            </a>`;
        searchResultsContainer.append(...fragment.children);
    }
}
function requestUpdateAsMovies() {
    if (previousSearchCancel !== null) {
        previousSearchCancel.abort();
        previousSearchCancel = null;
    }
    previousSearchCancel = new AbortController();
    const signal = previousSearchCancel.signal;
    const timeout = setTimeout(async () => {
        if (starFilledIcon === null)
            starFilledIcon = await starFilledIconRequest;
        if (starIcon === null)
            starIcon = await starIconRequest;
        const url = new URL(`${location.origin}${location.pathname.replace(/\/[^\/]+$/, "")}/json/search_media.php`);
        const replaceUrl = new URL(`${location.origin}${location.pathname}`);
        for (const [name, value] of new FormData(forMoviesForm)) {
            if (typeof value === "string") {
                url.searchParams.append(name, value);
                replaceUrl.searchParams.append(name, value);
            }
        }
        history.replaceState(undefined, "", replaceUrl);
        const response = await (await fetch(url, { signal, method: "get" }))
            .json();
        if (signal.aborted)
            return;
        if ("error" in response)
            throw new Error(`Error from server: ${response.message}.`);
        updateAsMovies(response);
    }, 100);
    signal.addEventListener("abort", () => clearTimeout(timeout));
}
document.addEventListener("change", (e) => {
    const target = e.target;
    if (target instanceof Element
        && forMoviesForm.contains(target))
        requestUpdateAsMovies();
});
document.addEventListener("input", (e) => {
    const target = e.target;
    if (target instanceof Element
        && forMoviesForm.contains(target)
        && target.matches("input, input *"))
        requestUpdateAsMovies();
});
document.addEventListener("click", (e) => {
    const target = e.target;
    if (target instanceof Element
        && forMoviesForm.contains(target)
        && target.matches("button[type=button], button[type=button] *"))
        requestUpdateAsMovies();
});
export {};
//# sourceMappingURL=search.js.map