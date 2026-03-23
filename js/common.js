/**
 * Plays the shine effect animation on an element given than it has the class
 * `manual-shine`.
 */
export function manualShine(element, duration = 500) {
    return Element.prototype.animate.call(element, [{ "--shine": 0 }, { "--shine": 1 }], {
        duration,
        iterations: 1,
    });
}
//# sourceMappingURL=common.js.map