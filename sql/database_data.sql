
START TRANSACTION;

CREATE TEMPORARY TABLE `movies_source` (
    `media_id` INT UNSIGNED NOT NULL,
    `media_title` VARCHAR(1023) NOT NULL,
    `media_description` TEXT NOT NULL,
    `movie_length_minutes` SMALLINT UNSIGNED NOT NULL,
    `media_release_date` DATE NOT NULL);

CREATE TEMPORARY TABLE `people_source` (
    `media_title` VARCHAR(1023) NOT NULL,
    `person_full_name` VARCHAR(255) NOT NULL,
    `person_in_media_job` VARCHAR(255) NOT NULL);

CREATE TEMPORARY TABLE `genre_source` (
    `media_title` VARCHAR(1023) NOT NULL,
    `genre` VARCHAR(255) NOT NULL);

# https://www.imdb.com/title/tt12042730
SET @media_title = "Project Hail Mary";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (0 + 100, @media_title, (60 * 2) + 36, "2026-03-20", "A science teacher wakes up alone on a spaceship. As his memory returns, he uncovers a mission to stop a mysterious substance killing Earth's sun and that an unexpected friendship may be the key.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Ryan Gosling"),
    (@media_title, "cast", "Sandra Hüller"),
    (@media_title, "cast", "James Ortiz"),
    (@media_title, "cast", "Lionel Boyce"),
    (@media_title, "cast", "Milana Vayntrub"),
    (@media_title, "cast", "Ken Leung"),
    (@media_title, "cast", "Priya Kansara"),
    (@media_title, "cast", "Mia Soteriou"),
    (@media_title, "cast", "Annelle Olaleye"),
    (@media_title, "cast", "Maya Eva Hosein"),
    (@media_title, "cast", "Bastian Antonio Fuentes"),
    (@media_title, "cast", "Alice Brittain"),
    (@media_title, "cast", "Michael Akinsulire"),
    (@media_title, "cast", "Travis Jay"),
    (@media_title, "cast", "Geoffrey Lumb"),
    (@media_title, "cast", "Paul Lambert"),
    (@media_title, "cast", "Orion Lee"),
    (@media_title, "cast", "Aaron Neil"),
    (@media_title, "director", "Phil Lord"),
    (@media_title, "director", "Christopher Miller"),
    (@media_title, "writer", "Drew Goddard"),
    (@media_title, "writer", "Andy Weir");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "drama"),
    (@media_title, "sci-fi"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt15574124
SET @media_title = "Peaky Blinders: The Immortal Man";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (1 + 100, @media_title, (60 * 1) + 52, "2026-03-20", "During World War II, Tommy Shelby returns to a bombed Birmingham and becomes involved in secret wartime missions facing new threats as he reckons with his past.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Cillian Murphy"),
    (@media_title, "cast", "Rebecca Ferguson"),
    (@media_title, "cast", "Tim Roth"),
    (@media_title, "cast", "Sophie Rundle"),
    (@media_title, "cast", "Barry Keoghan"),
    (@media_title, "cast", "Stephen Graham"),
    (@media_title, "cast", "Packy Lee"),
    (@media_title, "cast", "Jay Lycurgo"),
    (@media_title, "cast", "Ned Dennehy"),
    (@media_title, "cast", "Ian Peck"),
    (@media_title, "cast", "Thomas Arnold"),
    (@media_title, "cast", "Kasper Hilton-Hille"),
    (@media_title, "cast", "Ruby Ashbourne Serkis"),
    (@media_title, "cast", "Bonnie Stott"),
    (@media_title, "cast", "Tom Mahy"),
    (@media_title, "cast", "Ava Hupperdine-Perrin"),
    (@media_title, "cast", "Iain Fletcher"),
    (@media_title, "cast", "Jasna Anderson"),
    (@media_title, "director", "Tom Harper"),
    (@media_title, "writer", "Steven Knight");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "crime"),
    (@media_title, "drama"),
    (@media_title, "history");

# https://www.imdb.com/title/tt30144839
SET @media_title = "One Battle After Another";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (2 + 100, @media_title, (60 * 2) + 41, "2025-09-26", "When their enemy resurfaces after 16 years, a group of ex-revolutionaries reunite to rescue the daughter of one of their own.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Leonardo DiCaprio"),
    (@media_title, "cast", "Sean Penn"),
    (@media_title, "cast", "Benicio Del Toro"),
    (@media_title, "cast", "Teyana Taylor"),
    (@media_title, "cast", "Regina Hall"),
    (@media_title, "cast", "Wood Harris"),
    (@media_title, "cast", "Alana Haim"),
    (@media_title, "cast", "Shayna McHayle"),
    (@media_title, "cast", "Paul Grimstad"),
    (@media_title, "cast", "Dijon Duenas"),
    (@media_title, "cast", "Brooklyn Demme"),
    (@media_title, "cast", "Sachi Diserafino"),
    (@media_title, "cast", "Melissa Dueñas"),
    (@media_title, "cast", "Starletta DuPois"),
    (@media_title, "cast", "Vanessa Ganter"),
    (@media_title, "cast", "Otillia Gupta"),
    (@media_title, "cast", "Nia Leon"),
    (@media_title, "cast", "Peter N. Lyas III"),
    (@media_title, "director", "Paul Thomas Anderson"),
    (@media_title, "writer", "Paul Thomas Anderson"),
    (@media_title, "writer", "Thomas Pynchon");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "crime"),
    (@media_title, "drama"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt31193180
SET @media_title = "Sinners";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (3 + 100, @media_title, (60 * 2) + 17, "2025-04-18", "Trying to leave their troubled lives behind, twin brothers return to their hometown to start again, only to discover that an even greater evil is waiting to welcome them back.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Michael B. Jordan"),
    (@media_title, "cast", "Jack O'Connell"),
    (@media_title, "cast", "Hailee Steinfeld"),
    (@media_title, "cast", "Miles Caton"),
    (@media_title, "cast", "Saul Williams"),
    (@media_title, "cast", "Andrene Ward-Hammond"),
    (@media_title, "cast", "Tenaj L. Jackson"),
    (@media_title, "cast", "Dave Maldonado"),
    (@media_title, "cast", "Aadyn Encalarde"),
    (@media_title, "cast", "Helena Hu"),
    (@media_title, "cast", "Yao"),
    (@media_title, "cast", "Sam Malone"),
    (@media_title, "cast", "Ja'Quan Monroe-Henderson"),
    (@media_title, "cast", "Li Jun Li"),
    (@media_title, "cast", "Delroy Lindo"),
    (@media_title, "cast", "Jayme Lawson"),
    (@media_title, "cast", "Percy Bell"),
    (@media_title, "cast", "Omar Benson Miller"),
    (@media_title, "director", "Ryan Coogler"),
    (@media_title, "writer", "Ryan Coogler");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "drama"),
    (@media_title, "horror"),
    (@media_title, "music"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt15940132
SET @media_title = "War Machine";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (4 + 100, @media_title, (60 * 1) + 46, "2026-03-06", "Follow the final recruits of a grueling special ops boot camp who encounter a mysterious deadly force.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Alan Ritchson"),
    (@media_title, "cast", "Stephan James"),
    (@media_title, "cast", "Blake Richardson"),
    (@media_title, "cast", "Dennis Quaid"),
    (@media_title, "cast", "Esai Morales"),
    (@media_title, "cast", "Jai Courtney"),
    (@media_title, "cast", "Alex King"),
    (@media_title, "cast", "Keiynan Lonsdale"),
    (@media_title, "cast", "Jack Patten"),
    (@media_title, "cast", "James Beaufort"),
    (@media_title, "cast", "Joshua Diaz"),
    (@media_title, "cast", "Jacob Hohua"),
    (@media_title, "cast", "Daniel Webber"),
    (@media_title, "cast", "Richard Cotta"),
    (@media_title, "cast", "Matt Testro"),
    (@media_title, "cast", "Victory Ndukwe"),
    (@media_title, "cast", "Heather Burridge"),
    (@media_title, "cast", "Justin Wang"),
    (@media_title, "director", "Patrick Hughes"),
    (@media_title, "writer", "Patrick Hughes"),
    (@media_title, "writer", "James Beaufort");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "sci-fi"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt33014583
SET @media_title = "Dhurandhar";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (5 + 100, @media_title, (60 * 3) + 34, "2025-12-05", "A mysterious traveler slips into the heart of Karachi's underbelly and rises through its ranks with lethal precision, only to tear the notorious ISI-Underworld nexus apart from within.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Ranveer Singh"),
    (@media_title, "cast", "Akshaye Khanna"),
    (@media_title, "cast", "Sanjay Dutt"),
    (@media_title, "cast", "Arjun Rampal"),
    (@media_title, "cast", "Madhavan"),
    (@media_title, "cast", "Sara Arjun"),
    (@media_title, "cast", "Rakesh Bedi"),
    (@media_title, "cast", "Danish Pandor"),
    (@media_title, "cast", "Saumya Tandon"),
    (@media_title, "cast", "Gaurav Gera"),
    (@media_title, "cast", "Manav Gohil"),
    (@media_title, "cast", "Bimal Oberoi"),
    (@media_title, "cast", "Asif Ali Haider Khan"),
    (@media_title, "cast", "Naveen Kaushik"),
    (@media_title, "cast", "Rohollah Ghazi"),
    (@media_title, "cast", "Mustafa Ahmed"),
    (@media_title, "cast", "Ashwin Dhar"),
    (@media_title, "cast", "Gitikka Ganju"),
    (@media_title, "director", "Aditya Dhar"),
    (@media_title, "writer", "Aditya Dhar"),
    (@media_title, "writer", "Ojas Gautam"),
    (@media_title, "writer", "Shivkumar V. Panicker");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "adventure"),
    (@media_title, "crime"),
    (@media_title, "drama"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt39139925
SET @media_title = "Dhurandhar The Revenge";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (6 + 100, @media_title, (60 * 3) + 50, "2026-03-19", "Jaskirat Singh Rangi descends deeper into his alias as Hamza Ali Mazari, rising through Karachi's criminal hierarchy to claim the feared title \"Sher-e-Baloch\" while balancing loyalty, betrayal, and survival in a ruthless underworld.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Ranveer Singh"),
    (@media_title, "cast", "Akshaye Khanna"),
    (@media_title, "cast", "Sanjay Dutt"),
    (@media_title, "cast", "Arjun Rampal"),
    (@media_title, "cast", "Madhavan"),
    (@media_title, "cast", "Yami Gautam"),
    (@media_title, "cast", "Sara Arjun"),
    (@media_title, "cast", "Rakesh Bedi"),
    (@media_title, "cast", "Gaurav Gera"),
    (@media_title, "cast", "Manav Gohil"),
    (@media_title, "cast", "Danish Pandor"),
    (@media_title, "cast", "Raj Zutshi"),
    (@media_title, "cast", "Udaybir Sandhu"),
    (@media_title, "cast", "Bhasha Sumbli"),
    (@media_title, "cast", "Saumya Tandon"),
    (@media_title, "cast", "Madhurjeet Sarghi"),
    (@media_title, "cast", "Bimal Oberoi"),
    (@media_title, "cast", "Asif Ali Haider Khan"),
    (@media_title, "director", "Aditya Dhar"),
    (@media_title, "writer", "Aditya Dhar"),
    (@media_title, "writer", "Ojas Gautam"),
    (@media_title, "writer", "Shivkumar V. Panicker");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "crime"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt26443597
SET @media_title = "Zootopia 2";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (7 + 100, @media_title, (60 * 1) + 48, "2025-11-26", "Brave rabbit cop Judy Hopps and her friend, the fox Nick Wilde, team up again to crack a new case, the most perilous and intricate of their careers.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Ginnifer Goodwin"),
    (@media_title, "cast", "Jason Bateman"),
    (@media_title, "cast", "Ke Huy Quan"),
    (@media_title, "cast", "Fortune Feimster"),
    (@media_title, "cast", "Andy Samberg"),
    (@media_title, "cast", "David Strathairn"),
    (@media_title, "cast", "Idris Elba"),
    (@media_title, "cast", "Shakira"),
    (@media_title, "cast", "Patrick Warburton"),
    (@media_title, "cast", "Quinta Brunson"),
    (@media_title, "cast", "Danny Trejo"),
    (@media_title, "cast", "Nate Torrence"),
    (@media_title, "cast", "Bonnie Hunt"),
    (@media_title, "cast", "Don Lake"),
    (@media_title, "cast", "Michelle Gomez"),
    (@media_title, "cast", "David Fane"),
    (@media_title, "cast", "Joe Anoa'i"),
    (@media_title, "cast", "CM Punk"),
    (@media_title, "director", "Jared Bush"),
    (@media_title, "director", "Byron Howard"),
    (@media_title, "writer", "Jared Bush");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "animation"),
    (@media_title, "action"),
    (@media_title, "adventure"),
    (@media_title, "comedy"),
    (@media_title, "crime"),
    (@media_title, "family"),
    (@media_title, "mystery");

# https://www.imdb.com/title/tt2948356
SET @media_title = "Zootopia";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (8 + 100, @media_title, (60 * 1) + 48, "2016-03-04", "In a city of anthropomorphic animals, a rookie bunny cop and a cynical con artist fox must work together to uncover a conspiracy.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Ginnifer Goodwin"),
    (@media_title, "cast", "Jason Bateman"),
    (@media_title, "cast", "Idris Elba"),
    (@media_title, "cast", "Jenny Slate"),
    (@media_title, "cast", "Nate Torrence"),
    (@media_title, "cast", "Bonnie Hunt"),
    (@media_title, "cast", "Don Lake"),
    (@media_title, "cast", "Tommy Chong"),
    (@media_title, "cast", "J.K. Simmons"),
    (@media_title, "cast", "Octavia Spencer"),
    (@media_title, "cast", "Alan Tudyk"),
    (@media_title, "cast", "Shakira"),
    (@media_title, "cast", "Raymond S. Persi"),
    (@media_title, "cast", "Della Saba"),
    (@media_title, "cast", "Maurice LaMarche"),
    (@media_title, "cast", "Phil Johnston"),
    (@media_title, "cast", "Fuschia!"),
    (@media_title, "cast", "John DiMaggio"),
    (@media_title, "director", "Jared Bush"),
    (@media_title, "director", "Byron Howard"),
    (@media_title, "director", "Rich Moore"),
    (@media_title, "writer", "Jared Bush"),
    (@media_title, "writer", "Phil Johnston"),
    (@media_title, "writer", "Byron Howard");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "animation"),
    (@media_title, "action"),
    (@media_title, "adventure"),
    (@media_title, "comedy"),
    (@media_title, "crime"),
    (@media_title, "family"),
    (@media_title, "mystery");

# https://www.imdb.com/title/tt33978029
SET @media_title = "Ready or Not 2: Here I Come";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (9 + 100, @media_title, (60 * 1) + 48, "2026-03-20", "After surviving one deadly game, Grace and her sister Faith must now outrun four rival families competing for a powerful throne - winner takes all.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Samara Weaving"),
    (@media_title, "cast", "Kathryn Newton"),
    (@media_title, "cast", "Elijah Wood"),
    (@media_title, "cast", "Sarah Michelle Gellar"),
    (@media_title, "cast", "Shawn Hatosy"),
    (@media_title, "cast", "David Cronenberg"),
    (@media_title, "cast", "Dan Beirne"),
    (@media_title, "cast", "Olivia Cheng"),
    (@media_title, "cast", "Antony Hall"),
    (@media_title, "cast", "Varun Saranga"),
    (@media_title, "cast", "Nadeem Umar-Khitab"),
    (@media_title, "cast", "Masa Lizdek"),
    (@media_title, "cast", "Nestor Carbonell"),
    (@media_title, "cast", "Maia Jae"),
    (@media_title, "cast", "Juan Pablo Romero"),
    (@media_title, "cast", "Kevin Durand"),
    (@media_title, "cast", "Kara Wooten"),
    (@media_title, "cast", "Grant Nickalls"),
    (@media_title, "director", "Matt Bettinelli-Olpin"),
    (@media_title, "director", "Tyler Gillett"),
    (@media_title, "writer", "Guy Busick"),
    (@media_title, "writer", "R. Christopher Murphy"),
    (@media_title, "writer", "Matt Bettinelli-Olpin");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "comedy"),
    (@media_title, "horror"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt14905854
SET @media_title = "Hamnet";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (10 + 100, @media_title, (60 * 2) + 5, "2025-12-05", "In late 16th-century England, Agnes, a healer sensitive to the world around her, builds a home with William, a local tutor and aspiring playwright. As their lives fracture, they are tested by distance, silence, and grief.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Jessie Buckley"),
    (@media_title, "cast", "Paul Mescal"),
    (@media_title, "cast", "Zac Wishart"),
    (@media_title, "cast", "James Lintern"),
    (@media_title, "cast", "Joe Alwyn"),
    (@media_title, "cast", "Justine Mitchell"),
    (@media_title, "cast", "Eva Wishart"),
    (@media_title, "cast", "Effie Linnen"),
    (@media_title, "cast", "Emily Watson"),
    (@media_title, "cast", "David Wilmot"),
    (@media_title, "cast", "Freya Hannan-Mills"),
    (@media_title, "cast", "Dainton Anderson"),
    (@media_title, "cast", "James Skinner"),
    (@media_title, "cast", "Louisa Harland"),
    (@media_title, "cast", "Elliot Baxter"),
    (@media_title, "cast", "Faith Delaney"),
    (@media_title, "cast", "Smylie Bradwell"),
    (@media_title, "cast", "Laura Guest"),
    (@media_title, "director", "Chloé Zhao"),
    (@media_title, "writer", "Chloé Zhao"),
    (@media_title, "writer", "Maggie O'Farrell");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "biography"),
    (@media_title, "drama"),
    (@media_title, "history"),
    (@media_title, "romance");

# https://www.imdb.com/title/tt26443616
SET @media_title = "Hoppers";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (11 + 100, @media_title, (60 * 1) + 44, "2026-03-06", "A 19-year-old animal lover uses technology that places her consciousness into a robotic beaver to uncover mysteries within the animal world beyond her imagination.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Piper Curda"),
    (@media_title, "cast", "Bobby Moynihan"),
    (@media_title, "cast", "Jon Hamm"),
    (@media_title, "cast", "Kathy Najimy"),
    (@media_title, "cast", "Dave Franco"),
    (@media_title, "cast", "Eduardo Franco"),
    (@media_title, "cast", "Aparna Nancherla"),
    (@media_title, "cast", "Tom Law"),
    (@media_title, "cast", "Sam Richardson"),
    (@media_title, "cast", "Melissa Villaseñor"),
    (@media_title, "cast", "Isiah Whitlock Jr."),
    (@media_title, "cast", "Steve Purcell"),
    (@media_title, "cast", "Ego Nwodim"),
    (@media_title, "cast", "Nichole Sakura"),
    (@media_title, "cast", "Meryl Streep"),
    (@media_title, "cast", "Karen Huie"),
    (@media_title, "cast", "Lila Liu"),
    (@media_title, "cast", "Eman Abdul-Razzak"),
    (@media_title, "director", "Daniel Chong"),
    (@media_title, "writer", "Daniel Chong"),
    (@media_title, "writer", "Jesse Andrews"),
    (@media_title, "writer", "Jordan Harrison");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "animation"),
    (@media_title, "adventure"),
    (@media_title, "comedy"),
    (@media_title, "family"),
    (@media_title, "sci-fi");

# https://www.imdb.com/title/tt32916440
SET @media_title = "Marty Supreme";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (12 + 100, @media_title, (60 * 2) + 29, "2025-12-25", "Marty Mauser, a young man with a dream no one respects, goes to hell and back in pursuit of greatness.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Timothée Chalamet"),
    (@media_title, "cast", "Gwyneth Paltrow"),
    (@media_title, "cast", "Odessa A'zion"),
    (@media_title, "cast", "Larry 'Ratso' Sloman"),
    (@media_title, "cast", "Mariann Tepedino"),
    (@media_title, "cast", "Ralph Colucci"),
    (@media_title, "cast", "Devorah Shubowitz"),
    (@media_title, "cast", "Tyler the Creator"),
    (@media_title, "cast", "George Gervin"),
    (@media_title, "cast", "Luke Manley"),
    (@media_title, "cast", "Marinel Tinnirello"),
    (@media_title, "cast", "Fran Drescher"),
    (@media_title, "cast", "Sandra Bernhard"),
    (@media_title, "cast", "Emory Cohen"),
    (@media_title, "cast", "John Catsimatidis"),
    (@media_title, "cast", "Géza Röhrig"),
    (@media_title, "cast", "Koto Kawaguchi"),
    (@media_title, "cast", "Nick Waplington"),
    (@media_title, "director", "Josh Safdie"),
    (@media_title, "writer", "Ronald Bronstein"),
    (@media_title, "writer", "Josh Safdie");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "drama"),
    (@media_title, "sport");

# https://www.imdb.com/title/tt1341338
SET @media_title = "Good Luck, Have Fun, Don't Die";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (13 + 100, @media_title, (60 * 2) + 14, "2026-02-13", "A \"Man From the Future\" arrives at a diner in Los Angeles where he must recruit the precise combination of disgruntled patrons to join him on a one-night quest to save the world from the terminal threat of a rogue artificial intelligence.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Sam Rockwell"),
    (@media_title, "cast", "Juno Temple"),
    (@media_title, "cast", "Haley Lu Richardson"),
    (@media_title, "cast", "Michael Peña"),
    (@media_title, "cast", "Zazie Beetz"),
    (@media_title, "cast", "Asim Chaudhry"),
    (@media_title, "cast", "Tom Taylor"),
    (@media_title, "cast", "Georgia Goodman"),
    (@media_title, "cast", "Daniel Barnett"),
    (@media_title, "cast", "Artie Wilkinson-Hunt"),
    (@media_title, "cast", "Riccardo Drayton"),
    (@media_title, "cast", "Dominique Maher"),
    (@media_title, "cast", "David Sturzaker"),
    (@media_title, "cast", "Adam Burton"),
    (@media_title, "cast", "Elly Condron"),
    (@media_title, "cast", "Meghan Oberholzer"),
    (@media_title, "cast", "Berenice Barbier"),
    (@media_title, "cast", "Tanya van Graan"),
    (@media_title, "director", "Gore Verbinski"),
    (@media_title, "writer", "Matthew Robinson");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "adventure"),
    (@media_title, "comedy"),
    (@media_title, "sci-fi");

# https://www.imdb.com/title/tt7798634
SET @media_title = "Ready or Not";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (14 + 100, @media_title, (60 * 1) + 35, "2019-08-21", "A bride's wedding night takes a sinister turn when her eccentric new in-laws force her to take part in a terrifying game.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Samara Weaving"),
    (@media_title, "cast", "Adam Brody"),
    (@media_title, "cast", "Mark O'Brien"),
    (@media_title, "cast", "Henry Czerny"),
    (@media_title, "cast", "Andie MacDowell"),
    (@media_title, "cast", "Melanie Scrofano"),
    (@media_title, "cast", "Kristian Bruun"),
    (@media_title, "cast", "Elyse Levesque"),
    (@media_title, "cast", "Nicky Guadagni"),
    (@media_title, "cast", "John Ralston"),
    (@media_title, "cast", "Liam MacDonald"),
    (@media_title, "cast", "Ethan Tavares"),
    (@media_title, "cast", "Hanneke Talbot"),
    (@media_title, "cast", "Celine Tsai"),
    (@media_title, "cast", "Daniela Barbosa"),
    (@media_title, "cast", "Chase Churchill"),
    (@media_title, "cast", "Etienne Kellici"),
    (@media_title, "cast", "Andrew Anthony"),
    (@media_title, "director", "Matt Bettinelli-Olpin"),
    (@media_title, "director", "Tyler Gillett"),
    (@media_title, "writer", "Guy Busick"),
    (@media_title, "writer", "R. Christopher Murphy");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "comedy"),
    (@media_title, "horror"),
    (@media_title, "mystery"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt26581740
SET @media_title = "Weapons";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (15 + 100, @media_title, (60 * 2) + 8, "2025-08-08", "When all but one child from the same class mysteriously vanish on the same night at exactly the same time, a community is left questioning who or what is behind their disappearance.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Julia Garner"),
    (@media_title, "cast", "Josh Brolin"),
    (@media_title, "cast", "Alden Ehrenreich"),
    (@media_title, "cast", "Scarlett Sher"),
    (@media_title, "cast", "Cary Christopher"),
    (@media_title, "cast", "Jason Turner"),
    (@media_title, "cast", "Benedict Wong"),
    (@media_title, "cast", "Anny Jules"),
    (@media_title, "cast", "Ali Burch"),
    (@media_title, "cast", "Michael Gene Conti"),
    (@media_title, "cast", "Austin Abrams"),
    (@media_title, "cast", "Eric Jepson"),
    (@media_title, "cast", "Whitmer Thomas"),
    (@media_title, "cast", "Callie Schuttera"),
    (@media_title, "cast", "June Diane Raphael"),
    (@media_title, "cast", "Ronny Mathew"),
    (@media_title, "cast", "Amy Madigan"),
    (@media_title, "cast", "Melissa Ponzio"),
    (@media_title, "director", "Zach Cregger"),
    (@media_title, "writer", "Zach Cregger");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "horror"),
    (@media_title, "mystery");

# https://www.imdb.com/title/tt27047903
SET @media_title = "Scream 7";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (16 + 100, @media_title, (60 * 1) + 49, "2026-02-27", "When a new Ghostface killer emerges in the town where Sidney Prescott has built a new life, her darkest fears are realized as her daughter becomes the next target.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Neve Campbell"),
    (@media_title, "cast", "Courteney Cox"),
    (@media_title, "cast", "Isabel May"),
    (@media_title, "cast", "Jasmin Savoy Brown"),
    (@media_title, "cast", "Mason Gooding"),
    (@media_title, "cast", "Roger Jackson"),
    (@media_title, "cast", "Anna Camp"),
    (@media_title, "cast", "Joel McHale"),
    (@media_title, "cast", "Celeste O'Connor"),
    (@media_title, "cast", "Sam Rechner"),
    (@media_title, "cast", "Asa Germann"),
    (@media_title, "cast", "Mckenna Grace"),
    (@media_title, "cast", "Matthew Lillard"),
    (@media_title, "cast", "Kraig Dane"),
    (@media_title, "cast", "Ethan Embry"),
    (@media_title, "cast", "Mark Consuelos"),
    (@media_title, "cast", "Victor Turpin"),
    (@media_title, "cast", "Amy Louise Pemberton"),
    (@media_title, "director", "Kevin Williamson"),
    (@media_title, "writer", "Kevin Williamson"),
    (@media_title, "writer", "Guy Busick"),
    (@media_title, "writer", "James Vanderbilt");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "horror"),
    (@media_title, "mystery");

# https://www.imdb.com/title/tt4729430
SET @media_title = "Klaus";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (17 + 100, @media_title, (60 * 1) + 36, "2019-11-15", "A simple act of kindness always sparks another, even in a frozen, faraway place. When Smeerensburg's new postman, Jesper, befriends toymaker Klaus, their gifts melt an age-old feud and deliver a sleigh full of holiday traditions.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Jason Schwartzman"),
    (@media_title, "cast", "J.K. Simmons"),
    (@media_title, "cast", "Rashida Jones"),
    (@media_title, "cast", "Will Sasso"),
    (@media_title, "cast", "Neda Margrethe Labba"),
    (@media_title, "cast", "Sergio Pablos"),
    (@media_title, "cast", "Norm MacDonald"),
    (@media_title, "cast", "Joan Cusack"),
    (@media_title, "cast", "Evan Agos"),
    (@media_title, "cast", "Sky Alexis"),
    (@media_title, "cast", "Jaeden Bettencourt"),
    (@media_title, "cast", "Teddy Blum"),
    (@media_title, "cast", "Mila Brener"),
    (@media_title, "cast", "Sydney Brower"),
    (@media_title, "cast", "Finn Carr"),
    (@media_title, "cast", "Kendall Joy Hall"),
    (@media_title, "cast", "Hailey Hermida"),
    (@media_title, "cast", "Lexie Holland"),
    (@media_title, "director", "Carlos Martínez López"),
    (@media_title, "director", "Sergio Pablos"),
    (@media_title, "writer", "Sergio Pablos"),
    (@media_title, "writer", "Jim Mahoney"),
    (@media_title, "writer", "Zach Lewis");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "animation"),
    (@media_title, "adventure"),
    (@media_title, "comedy"),
    (@media_title, "family"),
    (@media_title, "fantasy");

# https://www.imdb.com/title/tt27543632
SET @media_title = "The Housemaid";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (18 + 100, @media_title, (60 * 2) + 11, "2025-12-19", "A struggling young woman is relieved by the chance for a fresh start as a maid for a wealthy couple. Soon, she discovers that the family's secrets are far more dangerous than her own.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Sydney Sweeney"),
    (@media_title, "cast", "Amanda Seyfried"),
    (@media_title, "cast", "Brandon Sklenar"),
    (@media_title, "cast", "Peter Colandro"),
    (@media_title, "cast", "Don DiPetta"),
    (@media_title, "cast", "Lamar Baucom-Slaughter"),
    (@media_title, "cast", "Michele Morrone"),
    (@media_title, "cast", "Indiana Elle"),
    (@media_title, "cast", "Sarah Cooper"),
    (@media_title, "cast", "Kathy Costa McKeown"),
    (@media_title, "cast", "Ellen Tamaki"),
    (@media_title, "cast", "Elizabeth Perkins"),
    (@media_title, "cast", "Megan Ferguson"),
    (@media_title, "cast", "Amanda Joy Erickson"),
    (@media_title, "cast", "Alaina Surgener"),
    (@media_title, "cast", "Cailen Fu"),
    (@media_title, "cast", "Alexandra Seal"),
    (@media_title, "cast", "Brian D. Cohen"),
    (@media_title, "director", "Paul Feig"),
    (@media_title, "writer", "Rebecca Sonnenshine"),
    (@media_title, "writer", "Freida McFadden");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "drama"),
    (@media_title, "mystery"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt33714084
SET @media_title = "Reminders of Him";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (19 + 100, @media_title, (60 * 1) + 54, "2026-03-13", "After prison, a woman attempts to reconnect with her young daughter but faces resistance from everyone except a bar owner with ties to her child. As they grow closer, she must confront her past mistakes to build a hopeful future.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Maika Monroe"),
    (@media_title, "cast", "Tyriq Withers"),
    (@media_title, "cast", "Zoe Kosovic"),
    (@media_title, "cast", "Lauren Graham"),
    (@media_title, "cast", "Jennifer Robertson"),
    (@media_title, "cast", "Monika Myers"),
    (@media_title, "cast", "Hilary Jardine"),
    (@media_title, "cast", "Nicholas Duvernay"),
    (@media_title, "cast", "Maia Baraniecki"),
    (@media_title, "cast", "AnnaMarie Lea"),
    (@media_title, "cast", "Rudy Pankow"),
    (@media_title, "cast", "Skye MacDonald"),
    (@media_title, "cast", "Jillian Walchuck"),
    (@media_title, "cast", "Kim Ma"),
    (@media_title, "cast", "Sara Mattsson"),
    (@media_title, "cast", "Rick Koy"),
    (@media_title, "cast", "Gery Schubert"),
    (@media_title, "cast", "Laird Reghenas"),
    (@media_title, "director", "Vanessa Caswill"),
    (@media_title, "writer", "Colleen Hoover"),
    (@media_title, "writer", "Lauren Levine");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "drama"),
    (@media_title, "romance");

# https://www.imdb.com/title/tt12300742
SET @media_title = "Bugonia";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (20 + 100, @media_title, (60 * 1) + 58, "2025-10-31", "Two conspiracy-obsessed young men kidnap the high-powered CEO of a major company, convinced that she is an alien intent on destroying planet Earth.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Emma Stone"),
    (@media_title, "cast", "Jesse Plemons"),
    (@media_title, "cast", "Aidan Delbis"),
    (@media_title, "cast", "J. Carmen Galindez Barrera"),
    (@media_title, "cast", "Marc T. Lewis"),
    (@media_title, "cast", "Vanessa Eng"),
    (@media_title, "cast", "Cedric Dumornay"),
    (@media_title, "cast", "Alicia Silverstone"),
    (@media_title, "cast", "Stavros Halkias"),
    (@media_title, "cast", "Momma Cherri"),
    (@media_title, "cast", "Fredricka Whitfield"),
    (@media_title, "cast", "Rafael Lopez Bravo"),
    (@media_title, "cast", "Yaisa"),
    (@media_title, "cast", "Teneisha Ellis"),
    (@media_title, "cast", "Roger Carvalho"),
    (@media_title, "cast", "Atsushi Nishijima"),
    (@media_title, "cast", "Janlyn Bales"),
    (@media_title, "cast", "Andy Blackburn"),
    (@media_title, "director", "Yorgos Lanthimos"),
    (@media_title, "writer", "Will Tracy"),
    (@media_title, "writer", "Jang Joon-hwan");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "comedy"),
    (@media_title, "crime"),
    (@media_title, "sci-fi"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt29567915
SET @media_title = "Nuremberg";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (21 + 100, @media_title, (60 * 2) + 28, "2025-11-07", "A WWII psychiatrist evaluates Nazi leaders before the Nuremberg trials, growing increasingly obsessed with understanding evil as he forms a disturbing bond with Hermann Göring.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Rami Malek"),
    (@media_title, "cast", "Russell Crowe"),
    (@media_title, "cast", "Michael Shannon"),
    (@media_title, "cast", "Leo Woodall"),
    (@media_title, "cast", "John Slattery"),
    (@media_title, "cast", "Richard E. Grant"),
    (@media_title, "cast", "Mark O'Brien"),
    (@media_title, "cast", "Colin Hanks"),
    (@media_title, "cast", "Wrenn Schmidt"),
    (@media_title, "cast", "Andreas Pietschmann"),
    (@media_title, "cast", "Lydia Peckham"),
    (@media_title, "cast", "Lotte Verbeek"),
    (@media_title, "cast", "Dieter Riesle"),
    (@media_title, "cast", "Peter Jordan"),
    (@media_title, "cast", "Tom Keune"),
    (@media_title, "cast", "Fleur Bremmer"),
    (@media_title, "cast", "Ben Miles"),
    (@media_title, "cast", "Giuseppe Cederna"),
    (@media_title, "director", "James Vanderbilt"),
    (@media_title, "writer", "James Vanderbilt"),
    (@media_title, "writer", "Jack El-Hai");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "biography"),
    (@media_title, "drama"),
    (@media_title, "history"),
    (@media_title, "thriller"),
    (@media_title, "war");

# https://www.imdb.com/title/tt32897959
SET @media_title = "Wuthering Heights";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (22 + 100, @media_title, (60 * 2) + 16, "2026-02-13", "A passionate and tumultuous love story set against the backdrop of the Yorkshire moors, exploring the intense and destructive relationship between Heathcliff and Catherine Earnshaw.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Margot Robbie"),
    (@media_title, "cast", "Jacob Elordi"),
    (@media_title, "cast", "Hong Chau"),
    (@media_title, "cast", "Shazad Latif"),
    (@media_title, "cast", "Alison Oliver"),
    (@media_title, "cast", "Martin Clunes"),
    (@media_title, "cast", "Ewan Mitchell"),
    (@media_title, "cast", "Amy Morgan"),
    (@media_title, "cast", "Jessica Knappett"),
    (@media_title, "cast", "Charlotte Mellington"),
    (@media_title, "cast", "Owen Cooper"),
    (@media_title, "cast", "Vy Nguyen"),
    (@media_title, "cast", "Millie Kent"),
    (@media_title, "cast", "Vicki Pepperdine"),
    (@media_title, "cast", "Paul Rhys"),
    (@media_title, "cast", "Robert Cawsey"),
    (@media_title, "cast", "Gabriel Bisset-Smith"),
    (@media_title, "cast", "Louie Benjamin Potts"),
    (@media_title, "director", "Emerald Fennell"),
    (@media_title, "writer", "Emerald Fennell"),
    (@media_title, "writer", "Emily Brontë");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "drama"),
    (@media_title, "romance");

# https://www.imdb.com/title/tt27714581
SET @media_title = "Sentimental Value";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (23 + 100, @media_title, (60 * 2) + 13, "2025-08-20", "An intimate exploration of family, memories, and the reconciliatory power of art.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Renate Reinsve"),
    (@media_title, "cast", "Stellan Skarsgård"),
    (@media_title, "cast", "Inga Ibsdotter Lilleaas"),
    (@media_title, "cast", "Elle Fanning"),
    (@media_title, "cast", "Anders Danielsen Lie"),
    (@media_title, "cast", "Jesper Christensen"),
    (@media_title, "cast", "Lena Endre"),
    (@media_title, "cast", "Cory Michael Smith"),
    (@media_title, "cast", "Catherine Cohen"),
    (@media_title, "cast", "Andreas Stoltenberg Granerud"),
    (@media_title, "cast", "Øyvind Hesjedal Loven"),
    (@media_title, "cast", "Lars Väringer"),
    (@media_title, "cast", "Ida Marianne Vassbotn Klasson"),
    (@media_title, "cast", "Vilde Søyland"),
    (@media_title, "cast", "Sigrid Lorentzen Abelsnes"),
    (@media_title, "cast", "Mari Strand Ferstad"),
    (@media_title, "cast", "Eiril Tormodsdatter Solberg"),
    (@media_title, "cast", "Julia Küster"),
    (@media_title, "director", "Joachim Trier"),
    (@media_title, "writer", "Eskil Vogt"),
    (@media_title, "writer", "Joachim Trier");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "drama");

# https://www.imdb.com/title/tt32430579
SET @media_title = "Crime 101";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (24 + 100, @media_title, (60 * 2) + 20, "2026-02-13", "An elusive thief, eyeing his final score, encounters a disillusioned insurance broker at her own crossroads. As their paths intertwine, a relentless detective trails them hoping to thwart the multi-million dollar heist they are planning.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Chris Hemsworth"),
    (@media_title, "cast", "Mark Ruffalo"),
    (@media_title, "cast", "Barry Keoghan"),
    (@media_title, "cast", "Peter Banifaz"),
    (@media_title, "cast", "Babak Tafti"),
    (@media_title, "cast", "Payman Maadi"),
    (@media_title, "cast", "Halle Berry"),
    (@media_title, "cast", "Hossein Mardani"),
    (@media_title, "cast", "Jennifer Jason Leigh"),
    (@media_title, "cast", "Tate Donovan"),
    (@media_title, "cast", "Andra Nechita"),
    (@media_title, "cast", "Corey Hawkins"),
    (@media_title, "cast", "Crosby Fitzgerald"),
    (@media_title, "cast", "Patrick Mulvey"),
    (@media_title, "cast", "Nick Nolte"),
    (@media_title, "cast", "Hanako Footman"),
    (@media_title, "cast", "Paul Adelstein"),
    (@media_title, "cast", "Devon Bostick"),
    (@media_title, "director", "Bart Layton"),
    (@media_title, "writer", "Bart Layton"),
    (@media_title, "writer", "Don Winslow");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "crime"),
    (@media_title, "drama"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt1312221
SET @media_title = "Frankenstein";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (25 + 100, @media_title, (60 * 2) + 29, "2025-11-07", "Dr. Victor Frankenstein, a brilliant but egotistical scientist, brings a creature to life in a monstrous experiment that ultimately leads to the undoing of both the creator and his tragic creation.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Oscar Isaac"),
    (@media_title, "cast", "Jacob Elordi"),
    (@media_title, "cast", "Christoph Waltz"),
    (@media_title, "cast", "Mia Goth"),
    (@media_title, "cast", "Felix Kammerer"),
    (@media_title, "cast", "Charles Dance"),
    (@media_title, "cast", "David Bradley"),
    (@media_title, "cast", "Lars Mikkelsen"),
    (@media_title, "cast", "Christian Convery"),
    (@media_title, "cast", "Nikolaj Lie Kaas"),
    (@media_title, "cast", "Kyle Gatehouse"),
    (@media_title, "cast", "Lauren Collins"),
    (@media_title, "cast", "Sofia Galasso"),
    (@media_title, "cast", "Joachim Fjelstrup"),
    (@media_title, "cast", "Ralph Ineson"),
    (@media_title, "cast", "Peter Millard"),
    (@media_title, "cast", "Peter MacNeill"),
    (@media_title, "cast", "Burn Gorman"),
    (@media_title, "director", "Guillermo del Toro"),
    (@media_title, "writer", "Guillermo del Toro"),
    (@media_title, "writer", "Mary Shelley");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "drama"),
    (@media_title, "fantasy"),
    (@media_title, "horror"),
    (@media_title, "sci-fi");

# https://www.imdb.com/title/tt29768334
SET @media_title = "Train Dreams";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (26 + 100, @media_title, (60 * 1) + 42, "2025-11-21", "Based on Denis Johnson's beloved novella, Train Dreams is the moving portrait of Robert Grainier, a logger and railroad worker who leads a life of unexpected depth and beauty in the rapidly-changing America of the early 20th Century.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Joel Edgerton"),
    (@media_title, "cast", "Clifton Collins Jr."),
    (@media_title, "cast", "Felicity Jones"),
    (@media_title, "cast", "Alfred Hsing"),
    (@media_title, "cast", "David Paul Olsen"),
    (@media_title, "cast", "John Patrick Lowrie"),
    (@media_title, "cast", "Chuck Tucker"),
    (@media_title, "cast", "Rob Price"),
    (@media_title, "cast", "Paul Schneider"),
    (@media_title, "cast", "Brandon Lindsay"),
    (@media_title, "cast", "William H. Macy"),
    (@media_title, "cast", "Nathaniel Arcand"),
    (@media_title, "cast", "Eric Ray Anderson"),
    (@media_title, "cast", "John Diehl"),
    (@media_title, "cast", "Beau Charles"),
    (@media_title, "cast", "Rick Rivera"),
    (@media_title, "cast", "Taylor McKinley"),
    (@media_title, "cast", "Ashton Singer"),
    (@media_title, "director", "Clint Bentley"),
    (@media_title, "writer", "Clint Bentley"),
    (@media_title, "writer", "Greg Kwedar"),
    (@media_title, "writer", "Denis Johnson");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "drama");

# https://www.imdb.com/title/tt32880540
SET @media_title = "Zeta";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (27 + 100, @media_title, (60 * 2) + 13, "2026-03-20", "A Spanish spy must track down a former spy involved in an undercover mission decades ago, while a Colombian agent is also after him. Secrets from the past are uncovered.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Mario Casas"),
    (@media_title, "cast", "Luis Zahera"),
    (@media_title, "cast", "Mariela Garriga"),
    (@media_title, "cast", "Christian Tappan"),
    (@media_title, "cast", "Nieve de Medina"),
    (@media_title, "cast", "Cristina Umaña"),
    (@media_title, "cast", "Nora Navas"),
    (@media_title, "cast", "Ricardo de Barreiro"),
    (@media_title, "cast", "Luisa Vides"),
    (@media_title, "cast", "David Villamil"),
    (@media_title, "cast", "Fabián Aguilar"),
    (@media_title, "cast", "Sarah Cafaro"),
    (@media_title, "cast", "Miguel Brocca"),
    (@media_title, "cast", "Luis Carlos Ballestas"),
    (@media_title, "cast", "Noa Badía"),
    (@media_title, "cast", "Pilar Gómez"),
    (@media_title, "cast", "Amanda Goldsmith"),
    (@media_title, "cast", "Jhonathan Saenz"),
    (@media_title, "director", "Dani de la Torre"),
    (@media_title, "director", "Thriller"),
    (@media_title, "writer", "Oriol Paulo"),
    (@media_title, "writer", "Jordi Vallejo"),
    (@media_title, "writer", "Dani de la Torre"),
    (@media_title, "writer", "Add content advisory");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "thriller");

# https://www.imdb.com/title/tt31514146
SET @media_title = "I Swear";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (28 + 100, @media_title, (60 * 2) + 0, "2026-04-24", "John Davidson: diagnosed with Tourette's syndrome at a young age which alienated him from his peers, he struggled with a condition few people had witnessed.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Robert Aramayo"),
    (@media_title, "cast", "Peter Mullan"),
    (@media_title, "cast", "Maxine Peake"),
    (@media_title, "cast", "Shirley Henderson"),
    (@media_title, "cast", "Scott Ellis Watson"),
    (@media_title, "cast", "Paul Donnelly"),
    (@media_title, "cast", "Douglas Rankine"),
    (@media_title, "cast", "Adam McNamara"),
    (@media_title, "cast", "Chris Dixon"),
    (@media_title, "cast", "David Carlyle"),
    (@media_title, "cast", "Steven Cree"),
    (@media_title, "cast", "Anthony Capaldi"),
    (@media_title, "cast", "Andrea Bisset"),
    (@media_title, "cast", "Francesco Piacentini-Smith"),
    (@media_title, "cast", "Gordon Peaston"),
    (@media_title, "cast", "Christina Modestou"),
    (@media_title, "cast", "Isla Mercer"),
    (@media_title, "cast", "Andrew McPhail"),
    (@media_title, "director", "Kirk Jones"),
    (@media_title, "writer", "Kirk Jones");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "biography"),
    (@media_title, "drama");

# https://www.imdb.com/title/tt28996126
SET @media_title = "Nobody 2";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (29 + 100, @media_title, (60 * 1) + 29, "2025-08-15", "Suburban dad Hutch Mansell, a former lethal assassin, is pulled back into his violent past after thwarting a home invasion, setting off a chain of events.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Bob Odenkirk"),
    (@media_title, "cast", "Connie Nielsen"),
    (@media_title, "cast", "Christopher Lloyd"),
    (@media_title, "cast", "John Ortiz"),
    (@media_title, "cast", "RZA"),
    (@media_title, "cast", "Sharon Stone"),
    (@media_title, "cast", "Colin Hanks"),
    (@media_title, "cast", "Gage Munroe"),
    (@media_title, "cast", "Paisley Cadorath"),
    (@media_title, "cast", "Colin Salmon"),
    (@media_title, "cast", "Jacob Blair"),
    (@media_title, "cast", "Daniel Bernhardt"),
    (@media_title, "cast", "Lucius Hoyos"),
    (@media_title, "cast", "David MacInnis"),
    (@media_title, "cast", "David Lawrence Brown"),
    (@media_title, "cast", "Denesha Lee-Labiuk"),
    (@media_title, "cast", "Rodrigo Beilfuss"),
    (@media_title, "cast", "Joanne Rodriguez"),
    (@media_title, "director", "Timo Tjahjanto"),
    (@media_title, "writer", "Derek Kolstad"),
    (@media_title, "writer", "Aaron Rabin");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "comedy"),
    (@media_title, "crime"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt27847051
SET @media_title = "The Secret Agent";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (30 + 100, @media_title, (60 * 2) + 41, "2025-11-06", "Amid the political turmoil of 1977 Brazil, a technology expert is forced into hiding and seeks help from the underground resistance as he tries to flee the country with his young son.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Robson Andrade"),
    (@media_title, "cast", "Rubens Santos"),
    (@media_title, "cast", "Licínio Januário"),
    (@media_title, "cast", "Joálisson Cunha"),
    (@media_title, "cast", "Marcelo Valle"),
    (@media_title, "cast", "Fabiana Pirro"),
    (@media_title, "cast", "Hermila Guedes"),
    (@media_title, "cast", "Márcio De Paula"),
    (@media_title, "cast", "Gregorio Graziosi"),
    (@media_title, "cast", "Buda Lira"),
    (@media_title, "cast", "Suzy Lopes"),
    (@media_title, "cast", "Erivaldo Oliveira"),
    (@media_title, "cast", "Fafá Dantas"),
    (@media_title, "cast", "Geane Albuquerque"),
    (@media_title, "cast", "Isadora Ruppert"),
    (@media_title, "cast", "Wilson Rabelo"),
    (@media_title, "cast", "Aline Marta Maia"),
    (@media_title, "cast", "João Vitor Silva"),
    (@media_title, "director", "Kleber Mendonça Filho"),
    (@media_title, "writer", "Kleber Mendonça Filho");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "crime"),
    (@media_title, "drama"),
    (@media_title, "mystery"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt30851137
SET @media_title = "The Bride!";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (31 + 100, @media_title, (60 * 2) + 6, "2026-03-06", "In 1930s Chicago, Frankenstein asks Dr. Euphronius to help create a companion. They give life to a murdered woman as the Bride, sparking romance, police interest, and radical social change.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Jessie Buckley"),
    (@media_title, "cast", "Christian Bale"),
    (@media_title, "cast", "Annette Bening"),
    (@media_title, "cast", "Penélope Cruz"),
    (@media_title, "cast", "Peter Sarsgaard"),
    (@media_title, "cast", "Jake Gyllenhaal"),
    (@media_title, "cast", "John Magaro"),
    (@media_title, "cast", "Matthew Maher"),
    (@media_title, "cast", "Jeannie Berlin"),
    (@media_title, "cast", "Zlatko Buric"),
    (@media_title, "cast", "Louis Cancelmi"),
    (@media_title, "cast", "Julianne Hough"),
    (@media_title, "cast", "Massiel Mordan"),
    (@media_title, "cast", "Anthony Abbato"),
    (@media_title, "cast", "Neil Vincent Smith"),
    (@media_title, "cast", "Lydia Kelly"),
    (@media_title, "cast", "Tennessee King"),
    (@media_title, "cast", "Ethan Dubin"),
    (@media_title, "director", "Maggie Gyllenhaal"),
    (@media_title, "writer", "Maggie Gyllenhaal"),
    (@media_title, "writer", "Mary Shelley");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "drama"),
    (@media_title, "horror"),
    (@media_title, "romance"),
    (@media_title, "sci-fi");

# https://www.imdb.com/title/tt34381258
SET @media_title = "Heel";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (32 + 100, @media_title, (60 * 1) + 50, "2026-03-06", "A 19-year-old criminal, Tommy, is kidnapped and forced into a rehabilitation process by a dysfunctional couple, Chris and Kathryn, who try to make him a \"good boy.\" Tommy must find a way to escape.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Stephen Graham"),
    (@media_title, "cast", "Andrea Riseborough"),
    (@media_title, "cast", "Anson Boon"),
    (@media_title, "cast", "Kit Rakusen"),
    (@media_title, "cast", "Monika Frajczyk"),
    (@media_title, "cast", "Savannah Steyn"),
    (@media_title, "cast", "Mila Jankowska"),
    (@media_title, "cast", "Callum Booth-Ford"),
    (@media_title, "cast", "Noah Valentine"),
    (@media_title, "cast", "Noah Manzoor"),
    (@media_title, "cast", "Maciej Stepniak"),
    (@media_title, "cast", "Jessica Johnson"),
    (@media_title, "cast", "Austin Haynes"),
    (@media_title, "cast", "Helena Calvert"),
    (@media_title, "cast", "Jessica Polak"),
    (@media_title, "cast", "Katarzyna Adamczyk"),
    (@media_title, "cast", "Bazyli Mach"),
    (@media_title, "cast", "Adam Bilewicz"),
    (@media_title, "director", "Jan Komasa"),
    (@media_title, "writer", "Bartek Bartosik"),
    (@media_title, "writer", "Naqqash Khalid");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "crime"),
    (@media_title, "drama"),
    (@media_title, "horror"),
    (@media_title, "mystery");

# https://www.imdb.com/title/tt28083456
SET @media_title = "Is This Thing On?";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (33 + 100, @media_title, (60 * 2) + 1, "2025-12-19", "As their marriage unravels, Alex faces middle age and divorce, seeking new purpose in the New York comedy scene. Meanwhile, his wife Tess confronts sacrifices made for their family, forcing them to navigate co-parenting and identities.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Will Arnett"),
    (@media_title, "cast", "Laura Dern"),
    (@media_title, "cast", "Andra Day"),
    (@media_title, "cast", "Bradley Cooper"),
    (@media_title, "cast", "Blake Kane"),
    (@media_title, "cast", "Calvin Knegten"),
    (@media_title, "cast", "Scott Icenogle"),
    (@media_title, "cast", "Sean Hayes"),
    (@media_title, "cast", "Ciarán Hinds"),
    (@media_title, "cast", "Christine Ebersole"),
    (@media_title, "cast", "Amy Sedaris"),
    (@media_title, "cast", "Peyton Manning"),
    (@media_title, "cast", "Chloe Radcliffe"),
    (@media_title, "cast", "Jordan Jensen"),
    (@media_title, "cast", "James Tom"),
    (@media_title, "cast", "Reggie Conquest"),
    (@media_title, "cast", "Gabe Fazio"),
    (@media_title, "cast", "Elizabeth Furiati"),
    (@media_title, "director", "Bradley Cooper"),
    (@media_title, "writer", "Bradley Cooper"),
    (@media_title, "writer", "Will Arnett"),
    (@media_title, "writer", "Mark Chappell");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "comedy"),
    (@media_title, "drama");

# https://www.imdb.com/title/tt3515878
SET @media_title = "Do Not Enter";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (34 + 100, @media_title, (60 * 1) + 31, "2026-03-20", "A group of explorers investigate an old abandoned hotel, encountering a strange supernatural being and a competing group searching for a legendary hidden treasure.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Adeline Rudolph"),
    (@media_title, "cast", "Nicholas Hamilton"),
    (@media_title, "cast", "Jake Manley"),
    (@media_title, "cast", "Francesca Reale"),
    (@media_title, "cast", "Javier Botet"),
    (@media_title, "cast", "Laurence O'Fuarain"),
    (@media_title, "cast", "Brennan Keel Cook"),
    (@media_title, "cast", "Kai Caster"),
    (@media_title, "cast", "Shane Paul McGhie"),
    (@media_title, "cast", "Svilena Nikolova"),
    (@media_title, "cast", "Cat Shank"),
    (@media_title, "director", "Marc Klasfeld"),
    (@media_title, "writer", "Dikega Hadnot"),
    (@media_title, "writer", "Spencer Mandel"),
    (@media_title, "writer", "David Morrell");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "horror");

# https://www.imdb.com/title/tt31050594
SET @media_title = "Mercy";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (35 + 100, @media_title, (60 * 1) + 39, "2026-01-23", "Set in the near future, a detective accused of murdering his wife has 90 minutes to prove his innocence to an advanced AI judge.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Chris Pratt"),
    (@media_title, "cast", "Rebecca Ferguson"),
    (@media_title, "cast", "Kali Reis"),
    (@media_title, "cast", "Annabelle Wallis"),
    (@media_title, "cast", "Chris Sullivan"),
    (@media_title, "cast", "Kylie Rogers"),
    (@media_title, "cast", "Jeff Pierre"),
    (@media_title, "cast", "Rafi Gavron"),
    (@media_title, "cast", "Kenneth Choi"),
    (@media_title, "cast", "Jamie McBride"),
    (@media_title, "cast", "Ross Gosla"),
    (@media_title, "cast", "Mark Daneri"),
    (@media_title, "cast", "Haydn Dalton"),
    (@media_title, "cast", "Michael C. Mahon"),
    (@media_title, "cast", "Noah Fearnley"),
    (@media_title, "cast", "Konstantin Podprugin"),
    (@media_title, "cast", "Cully Pratt"),
    (@media_title, "cast", "Philicia Saunders"),
    (@media_title, "director", "Timur Bekmambetov"),
    (@media_title, "writer", "Marco van Belle");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "crime"),
    (@media_title, "drama"),
    (@media_title, "mystery"),
    (@media_title, "sci-fi"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt32357218
SET @media_title = "Shelter";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (36 + 100, @media_title, (60 * 1) + 47, "2026-01-30", "Michael Mason is a recluse on a remote Scottish island who rescues a girl from the sea, unleashing a perilous sequence of events that culminate in an attack on his home, compelling him to face his turbulent history.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Jason Statham"),
    (@media_title, "cast", "Bodhi Rae Breathnach"),
    (@media_title, "cast", "Michael Shaeffer"),
    (@media_title, "cast", "Anna Crilly"),
    (@media_title, "cast", "Bill Nighy"),
    (@media_title, "cast", "Harriet Walter"),
    (@media_title, "cast", "Eugenia Caruso"),
    (@media_title, "cast", "Celine Buckens"),
    (@media_title, "cast", "Naomi Ackie"),
    (@media_title, "cast", "Bally Gill"),
    (@media_title, "cast", "Bronson Webb"),
    (@media_title, "cast", "Laurent Buson"),
    (@media_title, "cast", "Bryan Vigier"),
    (@media_title, "cast", "Rodaidh Findlay"),
    (@media_title, "cast", "Ryan Fletcher"),
    (@media_title, "cast", "Tomi May"),
    (@media_title, "cast", "Ansko Pitkänen"),
    (@media_title, "cast", "Daniel Mays"),
    (@media_title, "director", "Ric Roman Waugh"),
    (@media_title, "writer", "Ward Parry");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt35892608
SET @media_title = "Undertone";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (37 + 100, @media_title, (60 * 1) + 34, "2026-03-13", "The host of a popular paranormal podcast becomes haunted by terrifying recordings mysteriously sent her way.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Nina Kiri"),
    (@media_title, "cast", "Adam DiMarco"),
    (@media_title, "cast", "Michèle Duquet"),
    (@media_title, "cast", "Keana Lyn Bastidas"),
    (@media_title, "cast", "Jeff Yung"),
    (@media_title, "cast", "Ryan Turner"),
    (@media_title, "cast", "Ari Millen"),
    (@media_title, "cast", "Marisol D'Andrea"),
    (@media_title, "cast", "Austin Tuason"),
    (@media_title, "cast", "Seled Calderon"),
    (@media_title, "cast", "Bianca Nugara"),
    (@media_title, "cast", "Jayda Woods"),
    (@media_title, "cast", "Sarah Beaudin"),
    (@media_title, "cast", "Christina Notto"),
    (@media_title, "director", "Ian Tuason"),
    (@media_title, "writer", "Ian Tuason");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "horror"),
    (@media_title, "sci-fi"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt15239678
SET @media_title = "Dune: Part Two";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (38 + 100, @media_title, (60 * 2) + 46, "2024-03-01", "Paul Atreides unites with the Fremen while on a warpath of revenge against the conspirators who destroyed his family. Facing a choice between the love of his life and the fate of the universe, he endeavors to prevent a terrible future.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Timothée Chalamet"),
    (@media_title, "cast", "Zendaya"),
    (@media_title, "cast", "Rebecca Ferguson"),
    (@media_title, "cast", "Javier Bardem"),
    (@media_title, "cast", "Josh Brolin"),
    (@media_title, "cast", "Austin Butler"),
    (@media_title, "cast", "Florence Pugh"),
    (@media_title, "cast", "Dave Bautista"),
    (@media_title, "cast", "Christopher Walken"),
    (@media_title, "cast", "Léa Seydoux"),
    (@media_title, "cast", "Stellan Skarsgård"),
    (@media_title, "cast", "Charlotte Rampling"),
    (@media_title, "cast", "Souheila Yacoub"),
    (@media_title, "cast", "Roger Yuan"),
    (@media_title, "cast", "Babs Olusanmokun"),
    (@media_title, "cast", "Alison Halstead"),
    (@media_title, "cast", "Giusi Merli"),
    (@media_title, "cast", "Kait Tenison"),
    (@media_title, "director", "Denis Villeneuve"),
    (@media_title, "writer", "Denis Villeneuve"),
    (@media_title, "writer", "Jon Spaihts"),
    (@media_title, "writer", "Frank Herbert");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "adventure"),
    (@media_title, "drama"),
    (@media_title, "sci-fi");

# https://www.imdb.com/title/tt39792948
SET @media_title = "Louis Theroux: Inside the Manosphere";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (39 + 100, @media_title, (60 * 1) + 31, "2026-03-11", "The acclaimed documentarian gains rare, unrestricted access to explore a rising ultra-masculine network and its polarizing influencers.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Louis Theroux"),
    (@media_title, "cast", "Harrison Sullivan"),
    (@media_title, "cast", "Kacey May"),
    (@media_title, "cast", "Ed Matthews"),
    (@media_title, "cast", "Justin Waller"),
    (@media_title, "cast", "Matty"),
    (@media_title, "cast", "Chris"),
    (@media_title, "cast", "Myron Gaines"),
    (@media_title, "cast", "Angie Camacho"),
    (@media_title, "cast", "Walter Weekes"),
    (@media_title, "cast", "Stirling Cooper"),
    (@media_title, "cast", "Icy"),
    (@media_title, "cast", "Ruby"),
    (@media_title, "cast", "Giselle"),
    (@media_title, "cast", "Caro"),
    (@media_title, "cast", "Ellie Nutts"),
    (@media_title, "cast", "Kristen Waller"),
    (@media_title, "cast", "Sneako"),
    (@media_title, "director", "Adrian Choa");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "documentary");

# https://www.imdb.com/title/tt16311594
SET @media_title = "F1: The Movie";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (40 + 100, @media_title, (60 * 2) + 35, "2025-06-27", "A Formula One driver comes out of retirement to mentor and team up with a younger driver.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Brad Pitt"),
    (@media_title, "cast", "Damson Idris"),
    (@media_title, "cast", "Javier Bardem"),
    (@media_title, "cast", "Kerry Condon"),
    (@media_title, "cast", "Tobias Menzies"),
    (@media_title, "cast", "Kim Bodnia"),
    (@media_title, "cast", "Sarah Niles"),
    (@media_title, "cast", "Will Merrick"),
    (@media_title, "cast", "Joseph Balderrama"),
    (@media_title, "cast", "Abdul Salis"),
    (@media_title, "cast", "Callie Cooke"),
    (@media_title, "cast", "Samson Kayo"),
    (@media_title, "cast", "Simon Kunz"),
    (@media_title, "cast", "Liz Kingsman"),
    (@media_title, "cast", "Simone Ashley"),
    (@media_title, "cast", "Ramona Von Pusch"),
    (@media_title, "cast", "Barney Smith"),
    (@media_title, "cast", "Poppy Smith"),
    (@media_title, "director", "Joseph Kosinski"),
    (@media_title, "writer", "Joseph Kosinski"),
    (@media_title, "writer", "Ehren Kruger");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "drama"),
    (@media_title, "sport");

# https://www.imdb.com/title/tt1160419
SET @media_title = "Dune: Part One";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (41 + 100, @media_title, (60 * 2) + 35, "2021-10-22", "Paul Atreides arrives on Arrakis after his father accepts the stewardship of the dangerous planet. However, chaos ensues after a betrayal as forces clash to control melange, a precious resource.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Timothée Chalamet"),
    (@media_title, "cast", "Rebecca Ferguson"),
    (@media_title, "cast", "Zendaya"),
    (@media_title, "cast", "Oscar Isaac"),
    (@media_title, "cast", "Jason Momoa"),
    (@media_title, "cast", "Stellan Skarsgård"),
    (@media_title, "cast", "Stephen McKinley Henderson"),
    (@media_title, "cast", "Josh Brolin"),
    (@media_title, "cast", "Javier Bardem"),
    (@media_title, "cast", "Sharon Duncan-Brewster"),
    (@media_title, "cast", "Chang Chen"),
    (@media_title, "cast", "Dave Bautista"),
    (@media_title, "cast", "David Dastmalchian"),
    (@media_title, "cast", "Charlotte Rampling"),
    (@media_title, "cast", "Babs Olusanmokun"),
    (@media_title, "cast", "Benjamin Clémentine"),
    (@media_title, "cast", "Souad Faress"),
    (@media_title, "cast", "Golda Rosheuvel"),
    (@media_title, "director", "Denis Villeneuve"),
    (@media_title, "writer", "Jon Spaihts"),
    (@media_title, "writer", "Denis Villeneuve"),
    (@media_title, "writer", "Eric Roth");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "adventure"),
    (@media_title, "drama"),
    (@media_title, "sci-fi");

# https://www.imdb.com/title/tt30387012
SET @media_title = "Border 2";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (42 + 100, @media_title, (60 * 3) + 20, "2026-01-23", "Young Indian fighters prepared to protect their homeland from a greater threat during the 1971 Indo-Pak war.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Sunny Deol"),
    (@media_title, "cast", "Varun Dhawan"),
    (@media_title, "cast", "Diljit Dosanjh"),
    (@media_title, "cast", "Ahan Shetty"),
    (@media_title, "cast", "Mona Singh"),
    (@media_title, "cast", "Sonam Bajwa"),
    (@media_title, "cast", "Medha Rana"),
    (@media_title, "cast", "Anya Singh"),
    (@media_title, "cast", "Puneet Issar"),
    (@media_title, "cast", "Suniel Shetty"),
    (@media_title, "cast", "Akshaye Khanna"),
    (@media_title, "cast", "Sudesh Berry"),
    (@media_title, "cast", "Paramvir Cheema"),
    (@media_title, "cast", "Azad Chauhan"),
    (@media_title, "cast", "Bhushan Vikas"),
    (@media_title, "cast", "Kartik Phogat"),
    (@media_title, "cast", "Vansh Bhardwaj"),
    (@media_title, "cast", "Saad Baba"),
    (@media_title, "director", "Anurag Singh"),
    (@media_title, "writer", "Sumit Arora"),
    (@media_title, "writer", "J.P. Dutta"),
    (@media_title, "writer", "Nidhi Dutta");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "history"),
    (@media_title, "war");

# https://www.imdb.com/title/tt0816692
SET @media_title = "Interstellar";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (43 + 100, @media_title, (60 * 2) + 49, "2014-11-07", "When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Matthew McConaughey"),
    (@media_title, "cast", "Anne Hathaway"),
    (@media_title, "cast", "Jessica Chastain"),
    (@media_title, "cast", "Ellen Burstyn"),
    (@media_title, "cast", "Mackenzie Foy"),
    (@media_title, "cast", "John Lithgow"),
    (@media_title, "cast", "Timothée Chalamet"),
    (@media_title, "cast", "David Oyelowo"),
    (@media_title, "cast", "Collette Wolfe"),
    (@media_title, "cast", "Francis X. McCarthy"),
    (@media_title, "cast", "Bill Irwin"),
    (@media_title, "cast", "Andrew Borba"),
    (@media_title, "cast", "Wes Bentley"),
    (@media_title, "cast", "William Devane"),
    (@media_title, "cast", "Michael Caine"),
    (@media_title, "cast", "David Gyasi"),
    (@media_title, "cast", "Josh Stewart"),
    (@media_title, "cast", "Casey Affleck"),
    (@media_title, "director", "Christopher Nolan"),
    (@media_title, "writer", "Jonathan Nolan"),
    (@media_title, "writer", "Christopher Nolan");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "adventure"),
    (@media_title, "drama"),
    (@media_title, "sci-fi");

# https://www.imdb.com/title/tt29781139
SET @media_title = "Lesbian Space Princess";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (44 + 100, @media_title, (60 * 1) + 27, "2025-11-18", "A space princess is thrust out of her sheltered life and into a galactic quest to save her bounty hunter ex-girlfriend from the Straight White Maliens.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Shabana Azeez"),
    (@media_title, "cast", "Bernie Van Tiel"),
    (@media_title, "cast", "Jordan Raskopoulos"),
    (@media_title, "cast", "Madeleine Sami"),
    (@media_title, "cast", "Sam Matthews"),
    (@media_title, "cast", "Annie Schofield"),
    (@media_title, "cast", "Stephanie Daughtry"),
    (@media_title, "cast", "Mark Samual Bonanno"),
    (@media_title, "cast", "Zachary Ruane"),
    (@media_title, "cast", "Broden Kelly"),
    (@media_title, "cast", "Arlen Velez"),
    (@media_title, "cast", "Richard Roxburgh"),
    (@media_title, "cast", "Reuben Kaye"),
    (@media_title, "cast", "Cheyenne Maher"),
    (@media_title, "cast", "Paul Howe"),
    (@media_title, "cast", "Max Garcia-Underwood"),
    (@media_title, "cast", "Lori Bell"),
    (@media_title, "cast", "Gemma Chua-Tran"),
    (@media_title, "director", "Emma Hough Hobbs"),
    (@media_title, "director", "Leela Varghese"),
    (@media_title, "writer", "Leela Varghese"),
    (@media_title, "writer", "Emma Hough Hobbs");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "animation"),
    (@media_title, "comedy"),
    (@media_title, "fantasy"),
    (@media_title, "romance"),
    (@media_title, "sci-fi");

# https://www.imdb.com/title/tt32141377
SET @media_title = "28 Years Later: The Bone Temple";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (45 + 100, @media_title, (60 * 1) + 49, "2026-01-16", "As Spike is inducted into Jimmy Crystal's gang on the mainland, Dr. Kelson makes a discovery that could alter the world.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Jack O'Connell"),
    (@media_title, "cast", "Alfie Williams"),
    (@media_title, "cast", "Connor Newall"),
    (@media_title, "cast", "Erin Kellyman"),
    (@media_title, "cast", "Maura Bird"),
    (@media_title, "cast", "Ghazi Al Ruffai"),
    (@media_title, "cast", "Robert Rhodes"),
    (@media_title, "cast", "Emma Laird"),
    (@media_title, "cast", "Sam Locke"),
    (@media_title, "cast", "Gareth Locke"),
    (@media_title, "cast", "Chi Lewis-Parry"),
    (@media_title, "cast", "Ralph Fiennes"),
    (@media_title, "cast", "Celi Crossland"),
    (@media_title, "cast", "Mirren Mack"),
    (@media_title, "cast", "Gordon Alexander"),
    (@media_title, "cast", "Louis Ashbourne Serkis"),
    (@media_title, "cast", "David Sterne"),
    (@media_title, "cast", "Elliot Benn"),
    (@media_title, "director", "Nia DaCosta"),
    (@media_title, "writer", "Alex Garland");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "horror"),
    (@media_title, "sci-fi"),
    (@media_title, "thriller");

# https://www.imdb.com/title/tt6791350
SET @media_title = "Guardians of the Galaxy Vol. 3";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (46 + 100, @media_title, (60 * 2) + 30, "2023-05-05", "Still reeling from the loss of Gamora, Peter Quill rallies his team to defend the universe and one of their own - a mission that could mean the end of the Guardians if not successful.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Chris Pratt"),
    (@media_title, "cast", "Chukwudi Iwuji"),
    (@media_title, "cast", "Bradley Cooper"),
    (@media_title, "cast", "Pom Klementieff"),
    (@media_title, "cast", "Dave Bautista"),
    (@media_title, "cast", "Karen Gillan"),
    (@media_title, "cast", "Vin Diesel"),
    (@media_title, "cast", "Austin Freeman"),
    (@media_title, "cast", "Stephen Blackehart"),
    (@media_title, "cast", "Terence Rosemore"),
    (@media_title, "cast", "Maria Bakalova"),
    (@media_title, "cast", "Sean Gunn"),
    (@media_title, "cast", "Sarah Alami"),
    (@media_title, "cast", "Jasmine Munoz"),
    (@media_title, "cast", "Giovannie Cruz"),
    (@media_title, "cast", "Will Poulter"),
    (@media_title, "cast", "Nico Santos"),
    (@media_title, "cast", "Miriam Shor"),
    (@media_title, "director", "James Gunn"),
    (@media_title, "writer", "James Gunn"),
    (@media_title, "writer", "Jim Starlin"),
    (@media_title, "writer", "Stan Lee");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "adventure"),
    (@media_title, "comedy"),
    (@media_title, "fantasy"),
    (@media_title, "sci-fi");

# https://www.imdb.com/title/tt14181714
SET @media_title = "The Bluff";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (47 + 100, @media_title, (60 * 1) + 43, "2026-02-25", "A Caribbean woman gets her secret past revealed when her island is invaded by vicious buccaneers.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Priyanka Chopra Jonas"),
    (@media_title, "cast", "Karl Urban"),
    (@media_title, "cast", "Safia Oakley-Green"),
    (@media_title, "cast", "Ismael Cruz Cordova"),
    (@media_title, "cast", "Temuera Morrison"),
    (@media_title, "cast", "Vedanten Naidoo"),
    (@media_title, "cast", "David Field"),
    (@media_title, "cast", "Greg Hatton"),
    (@media_title, "cast", "Pacharo Mzembe"),
    (@media_title, "cast", "Gideon Mzembe"),
    (@media_title, "cast", "Zack Morris"),
    (@media_title, "cast", "Gary Beadle"),
    (@media_title, "cast", "Jordan Mooney"),
    (@media_title, "cast", "Indy Urban"),
    (@media_title, "cast", "James Morrison"),
    (@media_title, "cast", "Mark Lemon"),
    (@media_title, "cast", "Vienna Baucke"),
    (@media_title, "cast", "Ronnie James Hughes"),
    (@media_title, "director", "Frank E. Flowers"),
    (@media_title, "writer", "Joe Ballarini"),
    (@media_title, "writer", "Frank E. Flowers");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "adventure"),
    (@media_title, "drama"),
    (@media_title, "history");

# https://www.imdb.com/title/tt0111161
SET @media_title = "The Shawshank Redemption";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (48 + 100, @media_title, (60 * 2) + 22, "1994-10-14", "A wrongfully convicted banker forms a close friendship with a hardened convict over a quarter century while retaining his humanity through simple acts of compassion.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Tim Robbins"),
    (@media_title, "cast", "Morgan Freeman"),
    (@media_title, "cast", "Bob Gunton"),
    (@media_title, "cast", "William Sadler"),
    (@media_title, "cast", "Clancy Brown"),
    (@media_title, "cast", "Gil Bellows"),
    (@media_title, "cast", "Mark Rolston"),
    (@media_title, "cast", "James Whitmore"),
    (@media_title, "cast", "Jeffrey DeMunn"),
    (@media_title, "cast", "Larry Brandenburg"),
    (@media_title, "cast", "Neil Giuntoli"),
    (@media_title, "cast", "Brian Libby"),
    (@media_title, "cast", "David Proval"),
    (@media_title, "cast", "Joseph Ragno"),
    (@media_title, "cast", "Jude Ciccolella"),
    (@media_title, "cast", "Paul McCrane"),
    (@media_title, "cast", "Renee Blaine"),
    (@media_title, "cast", "Scott Mann"),
    (@media_title, "director", "Frank Darabont"),
    (@media_title, "writer", "Stephen King"),
    (@media_title, "writer", "Frank Darabont");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "drama");

# https://www.imdb.com/title/tt32642706
SET @media_title = "The Rip";

INSERT INTO `movies_source` (`media_id`, `media_title`, `movie_length_minutes`, `media_release_date`, `media_description`)
VALUES
    (49 + 100, @media_title, (60 * 1) + 53, "2026-01-16", "A group of Miami cops discovers a stash of millions in cash, leading to distrust as outsiders learn about the huge seizure, making them question who to rely on.");

INSERT INTO `people_source` (`media_title`, `person_in_media_job`, `person_full_name`)
VALUES
    (@media_title, "cast", "Matt Damon"),
    (@media_title, "cast", "Ben Affleck"),
    (@media_title, "cast", "Steven Yeun"),
    (@media_title, "cast", "Teyana Taylor"),
    (@media_title, "cast", "Catalina Sandino Moreno"),
    (@media_title, "cast", "Sasha Calle"),
    (@media_title, "cast", "Kyle Chandler"),
    (@media_title, "cast", "Scott Adkins"),
    (@media_title, "cast", "Daisuke Tsuji"),
    (@media_title, "cast", "Nestor Carbonell"),
    (@media_title, "cast", "Lina Esco"),
    (@media_title, "cast", "Alex Hernandez"),
    (@media_title, "cast", "Cliff Chamberlain"),
    (@media_title, "cast", "Jose Pablo Cantillo"),
    (@media_title, "cast", "Marco Morales"),
    (@media_title, "cast", "Sal Lopez"),
    (@media_title, "cast", "Angel Rosario Jr."),
    (@media_title, "cast", "Jayson Merrill"),
    (@media_title, "director", "Joe Carnahan"),
    (@media_title, "writer", "Joe Carnahan"),
    (@media_title, "writer", "Michael McGrale");

INSERT INTO `genre_source` (`media_title`, `genre`)
VALUES
    (@media_title, "action"),
    (@media_title, "crime"),
    (@media_title, "drama"),
    (@media_title, "mystery"),
    (@media_title, "thriller");

INSERT INTO `images` (`image_id`, `image_description`)
SELECT
    `media_id`,
    CONCAT("The cover image for the movie \"", `media_title`, "\".")
FROM
    `movies_source`;

INSERT INTO `media` (`media_id`, `media_title`, `media_cover_image_id`, `media_description`, `media_release_date`)
SELECT
    `media_id`,
    `media_title`,
    `media_id`,
    `media_description`,
    `media_release_date`
FROM
    `movies_source`;

INSERT INTO `movies` (`media_id`, `movie_length_minutes`)
SELECT
    `media_id`,
    `movie_length_minutes`
FROM
    `movies_source`;

INSERT INTO `people` (`person_id`, `person_full_name`, `person_description`)
SELECT
    (ROW_NUMBER() OVER ()) - 1 + 200,
    `person_full_name`,
    ""
FROM `people_source`
GROUP BY `person_full_name`;

INSERT INTO `person_in_media_jobs` (`person_in_media_job_id`, `person_in_media_job`)
SELECT
    (ROW_NUMBER() OVER ()) - 1,
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

INSERT INTO `genres` (`genre_id`, `genre`)
SELECT
    (ROW_NUMBER() OVER ()) - 1,
    `genre`
FROM `genre_source`
GROUP BY `genre`;

INSERT INTO `genre_of_media` (`media_id`, `genre`)
SELECT
    `media`.`media_id`,
    `genres`.`genre_id`
FROM `genre_source`
LEFT JOIN `media`
    ON `media`.`media_title` = `genre_source`.`media_title`
LEFT JOIN `genres`
    ON `genres`.`genre` = `genre_source`.`genre`;

DROP TEMPORARY TABLE `movies_source`;
DROP TEMPORARY TABLE `people_source`;
DROP TEMPORARY TABLE `genre_source`;

COMMIT;
