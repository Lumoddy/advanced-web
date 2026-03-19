/**
 * Plays the shine effect animation on an element given than it has the class
 * `manual-shine`.
 */
export function manualShine(element, duration = 500) {
    return element.animate([{ "--shine": 0 }, { "--shine": 1 }], {
        duration,
        iterations: 1,
    });
}
//# sourceMappingURL=common.js.map