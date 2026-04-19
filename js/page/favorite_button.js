let previousSearchCancel = null;
document.addEventListener("change", (e) => {
    const target = e.target;
    if (target instanceof HTMLInputElement) {
        if (previousSearchCancel !== null) {
            previousSearchCancel.abort();
            previousSearchCancel = null;
        }
        previousSearchCancel = new AbortController();
        const signal = previousSearchCancel.signal;
        const checked = target.checked;
        const id = target.getAttribute("data-for-media");
        const timeout = setTimeout(async () => {
            const url = new URL(`${location.origin}/${location.pathname.replace(/\/[^\/]+\/?$/, "")}/json/set_favorite.php?id=${id}&set=${checked ? "on" : "off"}`);
            const response = await (await fetch(url, { signal, method: "get" }))
                .json();
            if (signal.aborted)
                return;
            if ("error" in response)
                throw new Error(`Error from server: ${response.message}.`);
        }, 100);
        signal.addEventListener("abort", () => clearTimeout(timeout));
    }
});
export {};
//# sourceMappingURL=favorite_button.js.map