
--- This file was auto-generated based on ./build/database/database_structure.yaml.

START TRANSACTION;

CREATE TABLE `images` (
    `image_id` INT UNSIGNED NOT NULL,
    `image_description` VARCHAR(65535) NOT NULL);

CREATE TABLE `accounts` (
    `account_id` INT UNSIGNED NOT NULL,
    `account_username` VARCHAR(31) NOT NULL,
    `account_email` VARCHAR(320) NOT NULL,
    `account_password_hash` VARCHAR(255) NOT NULL);

CREATE TABLE `media` (
    `media_id` INT UNSIGNED NOT NULL,
    `media_title` VARCHAR(1023) NOT NULL,
    `media_description` VARCHAR(65535) NOT NULL,
    `media_cover_image_id` INT UNSIGNED NOT NULL);

CREATE TABLE `people` (
    `person_id` INT UNSIGNED NOT NULL,
    `person_full_name` VARCHAR(255) NOT NULL,
    `person_description` VARCHAR(65535) NOT NULL);

CREATE TABLE `ratings` (
    `account_id` INT UNSIGNED NOT NULL,
    `media_id` INT UNSIGNED NOT NULL,
    `rating_rating` TINYINT UNSIGNED NOT NULL);

CREATE TABLE `movies` (
    `media_id` INT UNSIGNED NOT NULL,
    `movie_length_minutes` SMALLINT UNSIGNED NOT NULL);

CREATE TABLE `people_in_media` (
    `person_id` INT UNSIGNED NOT NULL,
    `media_id` INT UNSIGNED NOT NULL);

CREATE TABLE `reviews` (
    `account_id` INT UNSIGNED NOT NULL,
    `media_id` INT UNSIGNED NOT NULL,
    `review_content` VARCHAR(65535) NOT NULL);

ALTER TABLE `images`
    ADD PRIMARY KEY (`image_id`);

ALTER TABLE `accounts`
    ADD PRIMARY KEY (`account_id`),
    ADD UNIQUE KEY `unique_accounts_1` (`account_email`);

ALTER TABLE `media`
    ADD PRIMARY KEY (`media_id`),
    ADD KEY `from_fk_media_1` (`media_cover_image_id`);

ALTER TABLE `people`
    ADD PRIMARY KEY (`person_id`);

ALTER TABLE `ratings`
    ADD UNIQUE KEY `unique_ratings_1` (`account_id`, `media_id`),
    ADD KEY `from_fk_ratings_1` (`account_id`),
    ADD KEY `from_fk_ratings_2` (`media_id`);

ALTER TABLE `movies`
    ADD PRIMARY KEY (`media_id`),
    ADD KEY `from_fk_movies_1` (`media_id`);

ALTER TABLE `people_in_media`
    ADD UNIQUE KEY `unique_people_in_media_1` (`person_id`, `media_id`),
    ADD KEY `from_fk_people_in_media_1` (`media_id`),
    ADD KEY `from_fk_people_in_media_2` (`person_id`);

ALTER TABLE `reviews`
    ADD UNIQUE KEY `unique_reviews_1` (`account_id`, `media_id`),
    ADD KEY `from_fk_reviews_1` (`account_id`),
    ADD KEY `from_fk_reviews_2` (`media_id`);

ALTER TABLE `media`
    ADD CONSTRAINT `fk_media_1`
        FOREIGN KEY (`media_cover_image_id`)
        REFERENCES (`media_cover_image_id`);

ALTER TABLE `ratings`
    ADD CONSTRAINT `fk_ratings_1`
        FOREIGN KEY (`account_id`)
        REFERENCES (`account_id`),
    ADD CONSTRAINT `fk_ratings_2`
        FOREIGN KEY (`media_id`)
        REFERENCES (`media_id`);

ALTER TABLE `movies`
    ADD CONSTRAINT `fk_movies_1`
        FOREIGN KEY (`media_id`)
        REFERENCES (`media_id`);

ALTER TABLE `people_in_media`
    ADD CONSTRAINT `fk_people_in_media_1`
        FOREIGN KEY (`media_id`)
        REFERENCES (`media_id`),
    ADD CONSTRAINT `fk_people_in_media_2`
        FOREIGN KEY (`person_id`)
        REFERENCES (`person_id`);

ALTER TABLE `reviews`
    ADD CONSTRAINT `fk_reviews_1`
        FOREIGN KEY (`account_id`)
        REFERENCES (`account_id`),
    ADD CONSTRAINT `fk_reviews_2`
        FOREIGN KEY (`media_id`)
        REFERENCES (`media_id`);

COMMIT;
