
START TRANSACTION;

CREATE TEMPORARY TABLE `review_source` (
    `review` VARCHAR(1023) NOT NULL);

INSERT INTO `review_source` (`review`)
VALUES
    ("This is a movie."),
    ("That is a movie."),
    ("I watched this movie."),
    ("I have watched this movie."),
    ("I saw this movie."),
    ("I have seen this movie."),
    ("This is a review."),
    ("This is a review for this movie."),
    ("I wrote a review for this movie.");

DELETE `reviews` FROM `reviews`
INNER JOIN `accounts`
    ON `accounts`.`account_id` = `reviews`.`account_id`
WHERE
    `accounts`.`account_username` LIKE "rand%";

DELETE `ratings` FROM `ratings`
INNER JOIN `accounts`
    ON `accounts`.`account_id` = `ratings`.`account_id`
WHERE
    `accounts`.`account_username` LIKE "rand%";

INSERT INTO `ratings` (`account_id`, `media_id`, `rating_rating`)
SELECT
    `accounts`.`account_id`,
    `media`.`media_id`,
    FLOOR((RAND() * 3.1) + 2.9)
FROM `media`
INNER JOIN `accounts`
    ON `accounts`.`account_username` LIKE "rand%"
WHERE
    RAND() < 0.8;

INSERT INTO `reviews` (`account_id`, `media_id`, `review_content`)
SELECT
    `accounts`.`account_id`,
    `media`.`media_id`,
    (SELECT
        `review_source`.`review`
    FROM `review_source`
    ORDER BY RAND()
    LIMIT 1)
FROM `media`
INNER JOIN `accounts`
    ON `accounts`.`account_username` LIKE "rand%"
INNER JOIN `ratings`
    ON `ratings`.`account_id` = `accounts`.`account_id`
    AND `ratings`.`media_id` = `media`.`media_id`
WHERE
    RAND() < 0.8;

COMMIT;