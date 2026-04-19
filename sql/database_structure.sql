
# This file was auto-generated based on ./build/database/database_structure.yaml.

START TRANSACTION;

CREATE TABLE `images` (
    `image_id` INT UNSIGNED NOT NULL,
    `image_description` TEXT NOT NULL);

CREATE TABLE `accounts` (
    `account_id` INT UNSIGNED NOT NULL,
    `account_username` VARCHAR(31) NOT NULL,
    `account_email` VARCHAR(320) NOT NULL,
    `account_password_hash` VARCHAR(255) NOT NULL);

CREATE TABLE `media` (
    `media_id` INT UNSIGNED NOT NULL,
    `media_title` VARCHAR(1023) NOT NULL,
    `media_description` TEXT NOT NULL,
    `media_cover_image_id` INT UNSIGNED NOT NULL,
    `media_release_date` DATE NOT NULL);

CREATE TABLE `movies` (
    `media_id` INT UNSIGNED NOT NULL,
    `movie_length_minutes` SMALLINT UNSIGNED NOT NULL);

CREATE TABLE `favorites_of_media` (
    `account_id` INT UNSIGNED NOT NULL,
    `media_id` INT UNSIGNED NOT NULL);

CREATE TABLE `people` (
    `person_id` INT UNSIGNED NOT NULL,
    `person_full_name` VARCHAR(255) NOT NULL,
    `person_description` TEXT NOT NULL);

CREATE TABLE `ratings` (
    `account_id` INT UNSIGNED NOT NULL,
    `media_id` INT UNSIGNED NOT NULL,
    `rating_rating` TINYINT UNSIGNED NOT NULL);

CREATE TABLE `reviews` (
    `account_id` INT UNSIGNED NOT NULL,
    `media_id` INT UNSIGNED NOT NULL,
    `review_content` TEXT NOT NULL);

CREATE TABLE `genres` (
    `genre_id` TINYINT UNSIGNED NOT NULL,
    `genre` VARCHAR(255) NOT NULL);

CREATE TABLE `genres_of_media` (
    `media_id` INT UNSIGNED NOT NULL,
    `genre` TINYINT UNSIGNED NOT NULL);

CREATE TABLE `people_in_media` (
    `person_id` INT UNSIGNED NOT NULL,
    `media_id` INT UNSIGNED NOT NULL,
    `person_in_media_job` TINYINT UNSIGNED NOT NULL);

CREATE TABLE `person_in_media_jobs` (
    `person_in_media_job_id` TINYINT UNSIGNED NOT NULL,
    `person_in_media_job` VARCHAR(255) NOT NULL);

ALTER TABLE `images`
    ADD PRIMARY KEY (`image_id`);

ALTER TABLE `accounts`
    ADD PRIMARY KEY (`account_id`),
    ADD UNIQUE KEY `unique_accounts_1` (`account_email`);

ALTER TABLE `media`
    ADD PRIMARY KEY (`media_id`),
    ADD KEY `key_media_1` (`media_cover_image_id`);

ALTER TABLE `movies`
    ADD PRIMARY KEY (`media_id`),
    ADD KEY `key_movies_1` (`media_id`);

ALTER TABLE `favorites_of_media`
    ADD PRIMARY KEY (`account_id`, `media_id`),
    ADD KEY `key_favorites_of_media_1` (`account_id`),
    ADD KEY `key_favorites_of_media_2` (`account_id`),
    ADD KEY `key_favorites_of_media_3` (`media_id`);

ALTER TABLE `people`
    ADD PRIMARY KEY (`person_id`);

ALTER TABLE `ratings`
    ADD PRIMARY KEY (`account_id`, `media_id`),
    ADD KEY `key_ratings_1` (`media_id`),
    ADD KEY `key_ratings_2` (`account_id`),
    ADD KEY `key_ratings_3` (`media_id`);

ALTER TABLE `reviews`
    ADD PRIMARY KEY (`account_id`, `media_id`),
    ADD KEY `key_reviews_1` (`media_id`),
    ADD KEY `key_reviews_2` (`account_id`, `media_id`);

ALTER TABLE `genres`
    ADD PRIMARY KEY (`genre_id`),
    ADD UNIQUE KEY `unique_genres_1` (`genre`);

ALTER TABLE `genres_of_media`
    ADD PRIMARY KEY (`media_id`, `genre`),
    ADD KEY `key_genres_of_media_1` (`media_id`),
    ADD KEY `key_genres_of_media_2` (`genre`);

ALTER TABLE `people_in_media`
    ADD PRIMARY KEY (`person_id`, `media_id`, `person_in_media_job`),
    ADD KEY `key_people_in_media_1` (`media_id`, `person_in_media_job`),
    ADD KEY `key_people_in_media_2` (`media_id`),
    ADD KEY `key_people_in_media_3` (`person_id`),
    ADD KEY `key_people_in_media_4` (`person_in_media_job`);

ALTER TABLE `person_in_media_jobs`
    ADD PRIMARY KEY (`person_in_media_job_id`),
    ADD UNIQUE KEY `unique_person_in_media_jobs_1` (`person_in_media_job`);

ALTER TABLE `media`
    ADD CONSTRAINT `fk_media_1`
        FOREIGN KEY (`media_cover_image_id`)
        REFERENCES `images` (`image_id`);

ALTER TABLE `movies`
    ADD CONSTRAINT `fk_movies_1`
        FOREIGN KEY (`media_id`)
        REFERENCES `media` (`media_id`);

ALTER TABLE `favorites_of_media`
    ADD CONSTRAINT `fk_favorites_of_media_1`
        FOREIGN KEY (`account_id`)
        REFERENCES `accounts` (`account_id`),
    ADD CONSTRAINT `fk_favorites_of_media_2`
        FOREIGN KEY (`media_id`)
        REFERENCES `media` (`media_id`);

ALTER TABLE `ratings`
    ADD CONSTRAINT `fk_ratings_1`
        FOREIGN KEY (`account_id`)
        REFERENCES `accounts` (`account_id`),
    ADD CONSTRAINT `fk_ratings_2`
        FOREIGN KEY (`media_id`)
        REFERENCES `media` (`media_id`);

ALTER TABLE `reviews`
    ADD CONSTRAINT `fk_reviews_1`
        FOREIGN KEY (`account_id`, `media_id`)
        REFERENCES `ratings` (`account_id`, `media_id`);

ALTER TABLE `genres_of_media`
    ADD CONSTRAINT `fk_genres_of_media_1`
        FOREIGN KEY (`media_id`)
        REFERENCES `media` (`media_id`),
    ADD CONSTRAINT `fk_genres_of_media_2`
        FOREIGN KEY (`genre`)
        REFERENCES `genres` (`genre_id`);

ALTER TABLE `people_in_media`
    ADD CONSTRAINT `fk_people_in_media_1`
        FOREIGN KEY (`media_id`)
        REFERENCES `media` (`media_id`),
    ADD CONSTRAINT `fk_people_in_media_2`
        FOREIGN KEY (`person_id`)
        REFERENCES `people` (`person_id`),
    ADD CONSTRAINT `fk_people_in_media_3`
        FOREIGN KEY (`person_in_media_job`)
        REFERENCES `person_in_media_jobs` (`person_in_media_job_id`);

# InfinityFree, I am speechless.

# CREATE VIEW `reviews_view` AS
# SELECT
#     `accounts`.`account_id` AS `account_id`,
#     `accounts`.`account_username` AS `account_username`,
#     `reviews`.`media_id` AS `media_id`,
#     `rating`.`rating_rating` AS `rating_rating`,
#     `reviews`.`review_content` AS `review_content`
# FROM `reviews`
# INNER JOIN `accounts`
#     ON `reviews`.`account_id` = `accounts`.`account_id`
# INNER JOIN `ratings` AS `rating`
#     ON `reviews`.`account_id` = `rating`.`account_id`
#     AND `reviews`.`media_id` = `rating`.`media_id`;

# CREATE VIEW `movies_view` AS
# SELECT
#     `media`.`media_id` AS `movie_id`,
#     `media`.`media_title` AS `movie_title`,
#     `media`.`media_description` AS `movie_description`,
#     `media`.`media_cover_image_id` AS `movie_cover_image_id`,
#     `media`.`media_release_date` AS `movie_release_date`,
#     `movies`.`movie_length_minutes` AS `movie_length_minutes`,
#     AVG(`ratings`.`rating_rating`) AS `movie_rating`,
#     COUNT(`ratings`.`account_id`) AS `movie_rating_count`,
#     COUNT(`reviews`.`account_id`) AS `movie_review_count`
# FROM `movies`
# INNER JOIN `media`
#     ON `movies`.`media_id` = `media`.`media_id`
# LEFT JOIN `ratings`
#     ON `movies`.`media_id` = `ratings`.`media_id`
# LEFT JOIN `reviews`
#     ON `movies`.`media_id` = `reviews`.`media_id`
#     AND `ratings`.`account_id` = `reviews`.`account_id`
# GROUP BY `movies`.`media_id`;

# CREATE VIEW `genres_of_media_view` AS
# SELECT
#     `genres_of_media`.`media_id` AS `media_id`,
#     `genres`.`genre` AS `genre`
# FROM `genres_of_media`
# INNER JOIN `genres`
#     ON `genres_of_media`.`genre` = `genres`.`genre_id`;

# CREATE VIEW `people_in_media_view` AS
# SELECT
#     `people`.`person_id` AS `person_id`,
#     `people`.`person_full_name` AS `person_full_name`,
#     `people`.`person_description` AS `person_description`,
#     `people_in_media`.`media_id` AS `media_id`,
#     `person_in_media_jobs`.`person_in_media_job` AS `person_in_media_job`
# FROM `people_in_media`
# INNER JOIN `people`
#     ON `people_in_media`.`person_id` = `people`.`person_id`
# INNER JOIN `person_in_media_jobs`
#     ON `people_in_media`.`person_in_media_job` = `person_in_media_jobs`.`person_in_media_job_id`;

COMMIT;
