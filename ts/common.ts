
/**
 * Plays the shine effect animation on an element given than it has the class
 * `manual-shine`.
 */
export function manualShine(element: Animatable, duration: number = 500): Animation
{
    return element.animate(
        [{ "--shine": 0 }, { "--shine": 1 }],
        {
            duration,
            iterations: 1,
        });
}