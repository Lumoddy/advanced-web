
/**
 * Plays the shine effect animation on an element given than it has the class
 * `manual-shine`.
@param {Animatable} element
@param {number} duration
@param {number} scale
@returns {Animation}
*/ export function manualShine(element, duration = 500, scale = 2)
{
    return element.animate(
    [
        { "--x": 0, "--w": scale },
        { "--x": 1, "--w": scale },
    ],
    {
        duration,
        iterations: 1,
    });
}