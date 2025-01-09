DROP DATABASE IF EXISTS OnePiece;

CREATE DATABASE OnePiece;

USE OnePiece;

CREATE TABLE Crews (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    crew_description TEXT NOT NULL,
    captain_name VARCHAR(255) NOT NULL,
    debut_anime VARCHAR(255) NOT NULL,
    debut_manga VARCHAR(255) NOT NULL,
    main_ship_name VARCHAR(255) NOT NULL,
    main_ship_description TEXT NOT NULL,
    main_ship_image_url VARCHAR(255) NOT NULL,
    jolly_roger_image_url VARCHAR(255) NOT NULL
);

INSERT INTO Crews (name, crew_description, captain_name, debut_anime, debut_manga, main_ship_name, main_ship_description, main_ship_image_url, jolly_roger_image_url)
VALUES
('Straw Hat Pirates', 'The crew of the future Pirate King, Monkey D. Luffy.', 'Monkey D. Luffy', 'Episode 1', 'Chapter 1', 'Thousand Sunny', 'The Straw Hat Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/b/b1/Thousand_Sunny_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/8/87/Straw_Hat_Pirates%27_Jolly_Roger.png'),
('Whitebeard Pirates', 'The crew of the late Whitebeard, Edward Newgate.', 'Edward Newgate', 'Episode 151', 'Chapter 234', 'Moby Dick', 'The main ship of the Whitebeard crew.', 'https://static.wikia.nocookie.net/onepiece/images/a/a1/Moby_Dick_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/4/45/Whitebeard_Pirates%27_Jolly_Roger.png');


CREATE TABLE Characters (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    alias VARCHAR(255) NOT NULL,
    epithet VARCHAR(255) NOT NULL,
    race VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL,
    origin VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    age_post_timeskip INT NOT NULL,
    occupation VARCHAR(255) NOT NULL,
    is_pirate BOOLEAN NOT NULL,
    is_marine BOOLEAN NOT NULL,
    crew_id INT,
    FOREIGN KEY (crew_id) REFERENCES Crews(id) ON DELETE SET NULL,
    bounty INT NOT NULL,
    devil_fruit VARCHAR(255),
    armement_haki BOOLEAN NOT NULL,
    observation_haki BOOLEAN NOT NULL,
    conqueror_haki BOOLEAN NOT NULL,
    debut_anime VARCHAR(255) NOT NULL,
    debut_manga VARCHAR(255) NOT NULL,
    character_description TEXT NOT NULL,
    image_url VARCHAR(255) NOT NULL
);


INSERT INTO Characters (name, alias, epithet, race, status, origin, age, age_post_timeskip, occupation, is_pirate, is_marine, crew_id, bounty, devil_fruit, armement_haki, observation_haki, conqueror_haki, debut_anime, debut_manga, character_description, image_url)
VALUES
('Monkey D. Luffy', 'Straw Hat Luffy', 'Straw Hat', 'Human', 'Alive', 'East Blue', 17, 19, 'Pirate', TRUE, FALSE, 1, 1500000000, 'Gomu Gomu no Mi', TRUE, TRUE, TRUE, 'Episode 1', 'Chapter 1', 'The captain of the Straw Hat Pirates and future Pirate King.', 'https://static.wikia.nocookie.net/onepiece/images/6/6d/Monkey_D._Luffy_Anime_Post_Timeskip_Infobox.png'),
('Roronoa Zoro', 'Pirate Hunter Zoro', 'Pirate Hunter', 'Human', 'Alive', 'East Blue', 19, 21, 'Swordsman', TRUE, FALSE, 1, 320000000, NULL, TRUE, TRUE, TRUE, 'Episode 1', 'Chapter 5', 'The swordsman of the Straw Hat Pirates and future World''s Greatest Swordsman.', 'https://static.wikia.nocookie.net/onepiece/images/5/52/Roronoa_Zoro_Anime_Post_Timeskip_Infobox.png'),
('Nami', 'Cat Burglar Nami', 'Navigator', 'Human', 'Alive', 'East Blue', 18, 20, 'Navigator', TRUE, FALSE, 1, 66000000, NULL, FALSE, FALSE, FALSE, 'Episode 1', 'Chapter 8', 'The navigator of the Straw Hat Pirates and future World''s Greatest Navigator.', 'https://static.wikia.nocookie.net/onepiece/images/6/68/Nami_Anime_Post_Timeskip_Infobox.png'),
('Usopp', 'Sogeking', 'Sniper King', 'Human', 'Alive', 'East Blue', 17, 19, 'Sniper', TRUE, FALSE, 1, 200000000, NULL, FALSE, TRUE, FALSE, 'Episode 9', 'Chapter 23', 'The sniper of the Straw Hat Pirates and future Brave Warrior of the Sea.', 'https://static.wikia.nocookie.net/onepiece/images/3/35/Usopp_Anime_Post_Timeskip_Infobox.png'),
('Sanji', 'Black Leg Sanji', 'Black Leg', 'Human', 'Alive', 'North Blue', 19, 21, 'Cook', TRUE, FALSE, 1, 330000000, NULL, TRUE, TRUE, FALSE, 'Episode 20', 'Chapter 43', 'The cook of the Straw Hat Pirates and future All Blue.', 'https://static.wikia.nocookie.net/onepiece/images/b/b6/Sanji_Anime_Post_Timeskip_Infobox.png'),
('Tony Tony Chopper', 'Cotton Candy Lover Chopper', 'Cotton Candy Lover', 'Reindeer', 'Alive', 'Drum Island', 15, 17, 'Doctor', TRUE, FALSE, 1, 100, 'Hito Hito no Mi', FALSE, FALSE, FALSE, 'Episode 81', 'Chapter 134', 'The doctor of the Straw Hat Pirates and future All Blue.', 'https://static.wikia.nocookie.net/onepiece/images/a/af/Tony_Tony_Chopper_Anime_Post_Timeskip_Infobox.png'),
('Nico Robin', 'Devil Child Robin', 'Devil Child', 'Human', 'Alive', 'West Blue', 28, 30, 'Archaeologist', TRUE, FALSE, 1, 130000000, 'Hana Hana no Mi', FALSE, FALSE, FALSE, 'Episode 67', 'Chapter 114', 'The archaeologist of the Straw Hat Pirates and future True History.', 'https://static.wikia.nocookie.net/onepiece/images/b/bc/Nico_Robin_Anime_Post_Timeskip_Infobox.png'),
('Brook', 'Soul King Brook', 'Soul King', 'Skeleton', 'Alive', 'West Blue', 88, 90, 'Musician', TRUE, FALSE, 1, 94000000, 'Yomi Yomi no Mi', FALSE, FALSE, FALSE, 'Episode 337', 'Chapter 442', 'The musician of the Straw Hat Pirates and future All Blue.', 'https://static.wikia.nocookie.net/onepiece/images/4/41/Brook_Anime_Post_Timeskip_Infobox.png'),
('Franky', 'Cyborg Franky', 'Cyborg', 'Human', 'Alive', 'South Blue', 34, 36, 'Shipwright', TRUE, FALSE, 1, 83000000, NULL, FALSE, FALSE, FALSE, 'Episode 329', 'Chapter 436', 'The shipwright of the Straw Hat Pirates and future All Blue.', 'https://static.wikia.nocookie.net/onepiece/images/8/8c/Franky_Anime_Post_Timeskip_Infobox.png'),
('Jinbe', 'Knight of the Sea Jinbe', 'Knight of the Sea', 'Fishman', 'Alive', 'Grand Line', 44, 46, 'Helmsman', TRUE, FALSE, 1, 438000000, NULL, TRUE, TRUE, FALSE, 'Episode 439', 'Chapter 528', 'The helmsman of the Straw Hat Pirates and future All Blue.', 'https://static.wikia.nocookie.net/onepiece/images/8/81/Jinbe_Anime_Infobox.png'),
('Edward Newgate', 'Whitebeard', 'Whitebeard', 'Human', 'Deceased', 'Unknown', 72, 74, 'Pirate', TRUE, FALSE, 2, 550000000, 'Gura Gura no Mi', TRUE, TRUE, TRUE, 'Episode 151', 'Chapter 234', 'The late captain of the Whitebeard Pirates and former Yonko.', 'https://static.wikia.nocookie.net/onepiece/images/b/b7/Edward_Newgate_Anime_Infobox.png'),
('Smoker', 'White Hunter Smoker', 'White Hunter', 'Human', 'Alive', 'Grand Line', 36, 38, 'Marine', FALSE, TRUE, NULL, 0, 'Moku Moku no Mi', TRUE, TRUE, FALSE, 'Episode 48', 'Chapter 98', 'The Marine Vice Admiral and former Marine Captain.', 'https://static.wikia.nocookie.net/onepiece/images/c/c4/Smoker_Anime_Post_Timeskip_Infobox.png'),
('Portgas D. Ace', 'Fire Fist Ace', 'Fire Fist', 'Human', 'Deceased', 'South Blue', 20, 22, 'Pirate', TRUE, FALSE, 2, 550000000, 'Mera Mera no Mi', TRUE, TRUE, TRUE, 'Episode 94', 'Chapter 154', 'The late captain of the Spade Pirates and former Whitebeard Pirates 2nd Division Commander.', 'https://static.wikia.nocookie.net/onepiece/images/4/4f/Portgas_D._Ace_Anime_Infobox.png'),
('Monkey D. Garp', 'Garp the Fist', 'Garp the Fist', 'Human', 'Alive', 'Unknown', 78, 80, 'Marine', FALSE, TRUE, NULL, 0, NULL, TRUE, TRUE, TRUE, 'Episode 45', 'Chapter 91', 'The Marine Vice Admiral and former Marine Instructor.', 'https://static.wikia.nocookie.net/onepiece/images/e/e1/Monkey_D._Garp_Anime_Infobox.png'),
('Sabo', 'Lucy', 'Flame Emperor', 'Human', 'Alive', 'Unknown', 10, 22, 'Revolutionary', TRUE, FALSE, NULL, 550000000, 'Mera Mera no Mi', TRUE, TRUE, FALSE, 'Episode 663', 'Chapter 744', 'The Chief of Staff of the Revolutionary Army and former noble.', 'https://static.wikia.nocookie.net/onepiece/images/c/c2/Sabo_Anime_Infobox.png');

CREATE TABLE DevilFruits (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    name_japanese VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    devilfruit_description TEXT NOT NULL,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Characters(id) ON DELETE SET NULL,
    former_user_id INT,
    FOREIGN KEY (former_user_id) REFERENCES Characters(id) ON DELETE SET NULL,
    debut_anime VARCHAR(255) NOT NULL,
    debut_manga VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);


CREATE TABLE Ships (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    name_japanese VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    captain_name VARCHAR(255) NOT NULL,
    crew_id INT,
    FOREIGN KEY (crew_id) REFERENCES Crews(id) ON DELETE SET NULL,
    debut_anime VARCHAR(255) NOT NULL,
    debut_manga VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

CREATE TABLE Marines (
    id INT PRIMARY KEY AUTO_INCREMENT,
    character_id INT,
    FOREIGN KEY (character_id) REFERENCES Characters(id) ON DELETE SET NULL,
    rank VARCHAR(255) NOT NULL,
    base VARCHAR(255) NOT NULL
);

CREATE TABLE Pirates (
    id INT PRIMARY KEY AUTO_INCREMENT,
    character_id INT,
    FOREIGN KEY (character_id) REFERENCES Characters(id) ON DELETE SET NULL,
    crew_id INT,
    FOREIGN KEY (crew_id) REFERENCES Crews(id) ON DELETE SET NULL,
    bounty INT NOT NULL
);

CREATE TABLE Islands (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    name_japanese VARCHAR(255) NOT NULL,
    island_location VARCHAR(255) NOT NULL,
    island_type VARCHAR(255) NOT NULL,
    island_description TEXT NOT NULL,
    debut_anime VARCHAR(255) NOT NULL,
    debut_manga VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);


INSERT INTO DevilFruits (name, name_japanese, type, devilfruit_description, user_id, former_user_id, debut_anime, debut_manga, image_url)
VALUES
('Gomu Gomu no Mi', 'ゴムゴムの実', 'Paramecia', 'A Paramecia-type Devil Fruit that allows the user to become a rubber human.', 1, NULL, 'Episode 1', 'Chapter 1', 'https://static.wikia.nocookie.net/onepiece/images/1/12/Gomu_Gomu_no_Mi_Infobox.png'),
('Hito Hito no Mi', 'ヒトヒトの実', 'Zoan', 'A Zoan-type Devil Fruit that allows the user to become a human.', 6, NULL, 'Episode 81', 'Chapter 134', 'https://static.wikia.nocookie.net/onepiece/images/3/38/Hito_Hito_no_Mi_Infobox.png'),
('Hana Hana no Mi', 'ハナハナの実', 'Paramecia', 'A Paramecia-type Devil Fruit that allows the user to sprout body parts from any surface.', 7, NULL, 'Episode 67', 'Chapter 114', 'https://static.wikia.nocookie.net/onepiece/images/2/21/Hana_Hana_no_Mi_Infobox.png'),
('Yomi Yomi no Mi', 'ヨミヨミの実', 'Paramecia', 'A Paramecia-type Devil Fruit that allows the user to come back to life after dying.', 8, NULL, 'Episode 337', 'Chapter 442', 'https://static.wikia.nocookie.net/onepiece/images/3/3b/Yomi_Yomi_no_Mi_Infobox.png'),
('Gura Gura no Mi', 'グラグラの実', 'Paramecia', 'A Paramecia-type Devil Fruit that allows the user to create earthquakes.', 11, NULL, 'Episode 151', 'Chapter 234', 'https://static.wikia.nocookie.net/onepiece/images/e/e3/Gura_Gura_no_Mi_Infobox.png'),
('Mera Mera no Mi', 'メラメラの実', 'Logia', 'A Logia-type Devil Fruit that allows the user to become a fire human.', 15, 13, 'Episode 94', 'Chapter 154', 'https://static.wikia.nocookie.net/onepiece/images/8/8c/Mera_Mera_no_Mi_Infobox.png'),
('Moku Moku no Mi', 'モクモクの実', 'Logia', 'A Logia-type Devil Fruit that allows the user to become a smoke human.', 14, NULL, 'Episode 325', 'Chapter 441', 'https://static.wikia.nocookie.net/onepiece/images/8/8d/Moku_Moku_no_Mi_Infobox.png');

INSERT INTO Pirates (character_id, crew_id, bounty)
VALUES
(1, 1, 1500000000),
(2, 1, 320000000),
(3, 1, 66000000),
(4, 1, 200000000),
(5, 1, 330000000),
(6, 1, 100),
(7, 1, 130000000),
(8, 1, 94000000),
(9, 1, 83000000),
(10, 1, 438000000),
(11, 2, 550000000),
(13, 2, 550000000);



INSERT INTO Marines (character_id, rank, base)
VALUES
(12, 'Vice Admiral', 'Marineford'),
(14, 'Vice Admiral', 'G-5');


INSERT INTO Islands (name, name_japanese, island_location, island_type, island_description, debut_anime, debut_manga, image_url)
VALUES
('Alabasta', 'アラバスタ王国', 'Grand Line', 'Kingdom', 'The desert kingdom of Alabasta.', 'Episode 62', 'Chapter 155', 'https://static.wikia.nocookie.net/onepiece/images/2/29/Arabasta_Kingdom_Infobox.png'),
('Drum Island', 'ドクター王国', 'Grand Line', 'Kingdom', 'The snowy kingdom of Drum Island.', 'Episode 81', 'Chapter 134', 'https://static.wikia.nocookie.net/onepiece/images/1/15/Drum_Island_Infobox.png'),
('Enies Lobby', 'エニエス・ロビー', 'Grand Line', 'Judicial Island', 'The judicial island of Enies Lobby.', 'Episode 264', 'Chapter 367', 'https://static.wikia.nocookie.net/onepiece/images/a/ad/Enies_Lobby_Infobox.png'),
('Fishman Island', '魚人島', 'Grand Line', 'Island', 'The underwater island of Fishman Island.', 'Episode 526', 'Chapter 603', 'https://static.wikia.nocookie.net/onepiece/images/7/78/Fish-Man_Island_Infobox.png'),
('Marineford', 'マリンフォード', 'Grand Line', 'Island', 'The Marine Headquarters of Marineford.', 'Episode 457', 'Chapter 552', 'https://static.wikia.nocookie.net/onepiece/images/d/db/G-1_Infobox.png'),
('Punk Hazard', 'パンクハザード', 'New World', 'Island', 'The volcanic island of Punk Hazard.', 'Episode 579', 'Chapter 654', 'https://static.wikia.nocookie.net/onepiece/images/3/3a/Punk_Hazard_Infobox.png'),
('Sabaody Archipelago', 'シャボンディ諸島', 'Grand Line', 'Archipelago', 'The archipelago of Sabaody.', 'Episode 385', 'Chapter 498', 'https://static.wikia.nocookie.net/onepiece/images/c/ca/Sabaody_Archipelago_Infobox.png'),
('Skypiea', 'スカイピア', 'Grand Line', 'Island', 'The sky island of Skypiea.', 'Episode 144', 'Chapter 239', 'https://static.wikia.nocookie.net/onepiece/images/4/44/Skypiea_Infobox.png'),
('Water 7', 'ウォーターセブン', 'Grand Line', 'Island', 'The water city of Water 7.', 'Episode 229', 'Chapter 322', 'https://static.wikia.nocookie.net/onepiece/images/9/93/Water_7_Infobox.png'),
('Wano Country', 'ワノ国', 'New World', 'Country', 'The isolated country of Wano.', 'Episode 892', 'Chapter 909', 'https://static.wikia.nocookie.net/onepiece/images/4/4b/Wano_Country_Infobox.png');

INSERT INTO Ships (name, name_japanese, status, type, captain_name, crew_id, debut_anime, debut_manga, image_url)
VALUES
('Thousand Sunny', 'サウザンドサニー号', 'Active', 'Ship', 'Monkey D. Luffy', 1, 'Episode 317', 'Chapter 430', 'https://onepiece.fandom.com/wiki/Thousands_Sunny'),
('Moby Dick', 'モビーディック号', 'Destroyed', 'Large Battleship', 'Edward Newgate', 2, 'Episode 151', 'Chapter 234', 'https://onepiece.fandom.com/wiki/Moby_Dick');

CREATE TABLE Accounts (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR (100) NOT NULL,
    password VARCHAR (100) NOT NULL
);
