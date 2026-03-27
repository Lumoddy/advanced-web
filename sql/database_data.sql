
START TRANSACTION;

# Scraped using the Javascript:
#
# // In image page:
# location.href = document.querySelector("div.sc-ee214c29-2:nth-child(6) > img:nth-child(1)").src

CREATE TEMPORARY TABLE `movies_source` (
    `media_title` VARCHAR(1023) NOT NULL,
    `media_description` TEXT NOT NULL,
    `movie_length_minutes` SMALLINT UNSIGNED NOT NULL,
    `media_release_date` DATE NOT NULL);

INSERT INTO `movies_source` (`media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    # https://www.imdb.com/title/tt12042730
    ("Project Hail Mary", (60 * 2) + 36, "2026-03-20", "Science teacher Ryland Grace wakes up alone on a spaceship light-years from Earth. As his memory returns, he uncovers a mission to stop a mysterious substance killing the sun, and save Earth. An unexpected friendship may be the key."),
    # https://www.imdb.com/title/tt15574124
    ("Peaky Blinders: The Immortal Man", (60 * 1) + 52, "2026-03-20", "During World War II, Tommy Shelby returns to a bombed Birmingham and becomes involved in secret wartime missions facing new threats as he reckons with his past."),

INSERT INTO `images` (`image_id`, `image_description`)
SELECT
    (ROW_NUMBER() OVER (ORDER BY 1)) - 1 + 100,
    CONCAT("The cover image for the movie \"", `media_title`, "\".")
FROM
    `movies_source`;

INSERT INTO `media` (`media_id`, `media_title`, `media_cover_image_id`, `media_description`, `media_release_date`)
SELECT
    (ROW_NUMBER() OVER (ORDER BY 1)) - 1 + 100,
    `media_title`,
    (ROW_NUMBER() OVER (ORDER BY 1)) - 1 + 100,
    `media_description`,
    `media_release_date`
FROM
    `movies_source`;

INSERT INTO `movies` (`media_id`, `movie_length_minutes`)
SELECT
    (ROW_NUMBER() OVER (ORDER BY 1)) - 1 + 100,
    `movie_length_minutes`
FROM
    `movies_source`;

DROP TEMPORARY TABLE `movies_source`;

CREATE TEMPORARY TABLE `people_source` (
    `media_title` VARCHAR(1023) NOT NULL,
    `person_full_name` VARCHAR(255) NOT NULL,
    `person_in_media_job` VARCHAR(255) NOT NULL);

INSERT INTO `people_source` (`media_title`, `person_full_name`, `person_in_media_job`)
VALUES
    ("Project Hail Mary", "director", "Phil Lord"),
    ("Project Hail Mary", "director", "Christopher Miller"),
    ("Project Hail Mary", "writer", "Drew Goddard"),
    ("Project Hail Mary", "writer", "Andy Weir"),
    ("Project Hail Mary", "star", "Ryan Gosling"),
    ("Project Hail Mary", "star", "Sandra Hüller"),
    ("Project Hail Mary", "star", "James Ortiz"),
    ("Peaky Blinders: The Immortal Man", "director", "Tom Harper"),
    ("Peaky Blinders: The Immortal Man", "writer", "Steven Knight"),
    ("Peaky Blinders: The Immortal Man", "star", "Cillian Murphy"),
    ("Peaky Blinders: The Immortal Man", "star", "Rebecca Ferguson"),
    ("Peaky Blinders: The Immortal Man", "star", "Tim Roth");

INSERT INTO `people` (`person_id`, `person_full_name`, `person_description`)
SELECT
    (ROW_NUMBER() OVER (ORDER BY 1)) - 1 + 200,
    `person_full_name`,
    ""
FROM `people_source`
GROUP BY `person_full_name`;

INSERT INTO `person_in_media_jobs` (`person_in_media_job_id`, `person_in_media_job`)
SELECT
    (ROW_NUMBER() OVER (ORDER BY 1)) - 1,
    `person_in_media_job`
FROM `people_source`
GROUP BY `person_in_media_job`;

INSERT INTO `people_in_media` (`person_id`, `media_id`, `person_in_media_job`)
SELECT
    `people`.`person_id`,
    `media`.`media_id`,
    `person_in_media_jobs`.`person_in_media_job_id`
FROM `people_source`
LEFT JOIN `people`
    ON `people`.`person_full_name` = `people_source`.`person_full_name`
LEFT JOIN `media`
    ON `media`.`media_title` = `people_source`.`media_title`
LEFT JOIN `person_in_media_jobs`
    ON `person_in_media_jobs`.`person_in_media_job` = `people_source`.`person_in_media_job`;

DROP TEMPORARY TABLE `people_source`;

COMMIT;
