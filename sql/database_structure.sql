--- This file was auto-generated based on ./database_structure.yaml

START TRANSACTION;

CREATE TABLE images (
    id INT UNSIGNED NOT NULL,
    description VARCHAR(1023) NOT NULL);

CREATE TABLE accounts (
    id INT UNSIGNED NOT NULL,
    username VARCHAR(127) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL);

CREATE TABLE media (
    id INT UNSIGNED NOT NULL,
    title VARCHAR(1023) NOT NULL,
    description VARCHAR(4095) NOT NULL,
    cover INT UNSIGNED NOT NULL);

CREATE TABLE people (
    id INT UNSIGNED NOT NULL,
    full_name VARCHAR(1023) NOT NULL,
    description VARCHAR(4095) NOT NULL);

CREATE TABLE ratings (
    account_id INT UNSIGNED NOT NULL,
    media_id INT UNSIGNED NOT NULL,
    rating TINYINT UNSIGNED NOT NULL);

CREATE TABLE movies (
    id INT UNSIGNED NOT NULL,
    minutes SMALLINT UNSIGNED NOT NULL);

CREATE TABLE people_in_media (
    person_id INT UNSIGNED NOT NULL,
    media_id INT UNSIGNED NOT NULL);

CREATE TABLE reviews (
    account_id INT UNSIGNED NOT NULL,
    media_id INT UNSIGNED NOT NULL,
    content VARCHAR(1023) NOT NULL);

ALTER TABLE images
    ADD PRIMARY KEY (id);

ALTER TABLE accounts
    ADD PRIMARY KEY (id),
        ADD UNIQUE KEY email (email);

ALTER TABLE media
    ADD PRIMARY KEY (id),
    ADD KEY cover (cover);

ALTER TABLE people
    ADD PRIMARY KEY (id),
    ADD KEY cover (cover);

ALTER TABLE ratings
    ADD UNIQUE KEY account_id_and_media_id (account_id, media_id),
    ADD KEY account_id (account_id),
    ADD KEY media_id (media_id);

ALTER TABLE movies
    ADD PRIMARY KEY (id),
    ADD KEY id (id);

ALTER TABLE people_in_media
    ADD UNIQUE KEY person_id_and_media_id (person_id, media_id),
    ADD KEY media_id (media_id),
    ADD KEY person_id (person_id);

ALTER TABLE reviews
    ADD UNIQUE KEY account_id_and_media_id (account_id, media_id),
    ADD KEY account_id (account_id),
    ADD KEY media_id (media_id);

ALTER TABLE media
    ADD CONSTRAINT cover_to_id_in_images FOREIGN KEY (cover) REFERENCES images (id);

ALTER TABLE people
    ADD CONSTRAINT cover_to_id_in_images FOREIGN KEY (cover) REFERENCES images (id);

ALTER TABLE ratings
    ADD CONSTRAINT account_id_to_id_in_accounts FOREIGN KEY (account_id) REFERENCES accounts (id),
    ADD CONSTRAINT media_id_to_id_in_media FOREIGN KEY (media_id) REFERENCES media (id);

ALTER TABLE movies
    ADD CONSTRAINT id_to_id_in_media FOREIGN KEY (id) REFERENCES media (id);

ALTER TABLE people_in_media
    ADD CONSTRAINT media_id_to_id_in_media FOREIGN KEY (media_id) REFERENCES media (id),
    ADD CONSTRAINT person_id_to_id_in_people FOREIGN KEY (person_id) REFERENCES people (id);

ALTER TABLE reviews
    ADD CONSTRAINT account_id_to_account_id_in_ratings FOREIGN KEY (account_id) REFERENCES ratings (account_id),
    ADD CONSTRAINT media_id_to_media_id_in_ratings FOREIGN KEY (media_id) REFERENCES ratings (media_id);

COMMIT;