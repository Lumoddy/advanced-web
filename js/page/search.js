let previousSearchCancel = null;
const forMoviesForm = document.getElementById("search-for-movies");
const searchResultsContainer = document.getElementById("search-results");
function updateAsMovies(movies) {
    searchResultsContainer.replaceChildren();
    for (const movie of movies) {
        const movieCard = document.createElement("a");
        movieCard.setAttribute("class", "glass panel");
        movieCard.setAttribute("href", `./media.php?id=${movie.id}`);
        movieCard.setAttribute("style", "width: 140px; display: block");
        {
            const movieImg = document.createElement("img");
            movieImg.setAttribute("src", `./img/${movie.cover_image_id}.jpg`);
            movieImg.setAttribute("style", "width: 100%; aspect-ratio: 2/3");
            movieCard.appendChild(movieImg);
            const movieDiv = document.createElement("div");
            movieDiv.setAttribute("style", "margin: 4px 8px 4px");
            {
                const movieName = document.createElement("h3");
                movieName.setAttribute("style", "margin: 0; font-size: medium");
                {
                    movieName.appendChild(document.createTextNode(movie.title));
                }
                movieCard.appendChild(movieName);
            }
            movieCard.appendChild(movieDiv);
        }
        searchResultsContainer.appendChild(movieCard);
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
        const url = new URL(`${location.origin}/${location.pathname.replace(/\/[^\/]+\/?$/, "")}/json/search_media.php`);
        for (const [name, value] of new FormData(forMoviesForm)) {
            if (typeof value === "string")
                url.searchParams.append(name, value);
        }
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