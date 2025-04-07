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
('Straw Hat Pirates', 'A diverse crew with unique talents, united under the dream of their captain to become the Pirate King. Known for their loyalty and determination, they constantly challenge the odds.', 'Monkey D. Luffy', 'Episode 1', 'Chapter 1', 'Thousand Sunny', 'The Straw Hat Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/b/b1/Thousand_Sunny_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/8/87/Straw_Hat_Pirates%27_Jolly_Roger.png'),
('Blackbeard Pirates', 'A ruthless and ambitious pirate crew infamous for their treachery and pursuit of power. They aim to dominate the seas through cunning and overwhelming strength.', 'Marshall D. Teach', 'Episode 151', 'Chapter 223', 'The Saber of Xebec', 'The Blackbeard Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/e/e3/Blackbeard_Pirates_Post_Timeskip_Ships.png', 'https://static.wikia.nocookie.net/onepiece/images/b/b4/Blackbeard_Pirates%27_Jolly_Roger.png'),
('Red Hair Pirates', 'A carefree yet incredibly strong crew known for their camaraderie and respect for others. They symbolize the spirit of freedom and adventure on the seas.', 'Red-Haired Shanks', 'Episode 4', 'Chapter 1', 'The Red Force', 'The Red Hair Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/2/23/Red_Hair_Pirates%27_Old_Ship.png', 'https://static.wikia.nocookie.net/onepiece/images/8/81/Red_Hair_Pirates%27_Jolly_Roger.png'),
('Heart Pirates', 'A resourceful and tight-knit crew of pirates led by a skilled strategist. They excel in stealth and combat, navigating challenges with precision.', 'Trafalgar D. Water Law', 'Episode 376', 'Chapter 498', 'the Polar Tang', 'The Heart Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/f/f3/Polar_Tang_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/7/76/Heart_Pirates%27_Jolly_Roger.png'),
('Beasts Pirates', 'A massive and ferocious pirate crew known for their brute strength and Zoan Devil Fruit powers. They aim to establish dominance through raw power and intimidation.', 'Kaido', 'Episode 739', 'Chapter 795', 'Unknown', 'The Beasts Pirates'' fleet.', 'https://static.wikia.nocookie.net/onepiece/images/0/00/Beasts_Pirates%27_Fleet.png', 'https://static.wikia.nocookie.net/onepiece/images/f/f6/Beasts_Pirates%27_Jolly_Roger.png'),
('Big Mom Pirates', 'A powerful family-based crew known for their influence and alliances. They rule Totto Land and strive to create a utopia, albeit through fear and manipulation.', 'Charlotte Linlin', 'Episode 786', 'Chapter 651', 'Queen Mama Chanter', 'The Big Mom Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/2/2e/Totto_Land_Grand_Fleet_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/d/d8/Big_Mom_Pirates%27_Jolly_Roger.png'),
('Kid Pirates', 'A brash and ambitious crew that thrives on chaos and destruction. They relentlessly pursue their goals, taking on even the toughest adversaries.', 'Eustass Kid', 'Episode 393', 'Chapter 498', 'Victoria Punk', 'The Kid Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/e/e0/Victoria_Punk_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/a/ad/Kid_Pirates%27_Jolly_Roger.png'),
('On Air Pirates', 'An eccentric and unpredictable crew that thrives on music and chaos. They use sound-based attacks to confuse and overpower their enemies.', 'Scratchmen Apoo', 'Episode 793', 'Chapter 795', 'the Stay Tune', 'The On Air Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/4/4b/Stay_Tune_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/b/b4/On_Air_Pirates%27_Jolly_Roger.png'),
('Fire Tank Pirates', 'A well-organized and heavily armed crew known for their tactical prowess and mafia-like operations. They value loyalty and power.', 'Capone Bege', 'Episode 783', 'Chapter 812', 'the Nostra Castello', 'The Fire Tank Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/8/83/Nostra_Castello_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/5/54/Fire_Tank_Pirates%27_Jolly_Roger.png'),
('Hawkins Pirates', 'A mysterious and calculated crew that relies on predictions and strategic planning. Their captain uses his powers to ensure victory.', 'Basil Hawkins', 'Episode 793', 'Chapter 795', 'the Grudge Dolph', 'The Hawkins Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/1/10/Grudge_Dolph_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/d/d5/Hawkins_Pirates%27_Jolly_Roger.png'),
('Drake Pirates', 'A secretive and disciplined crew with a strong sense of duty. They operate with military precision, often working in the shadows.', 'X Drake', 'Episode 793', 'Chapter 795', 'The Golden Hinde', 'The Drake Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/d/dd/Liberal_Hind_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/4/4a/Drake_Pirates%27_Jolly_Roger.png'),
('Bonney Pirates', 'A lively and mischievous crew with a penchant for escaping trouble. They are often seen indulging in food and luxury.', 'Jewelry Bonney', 'Episode 793', 'Chapter 795', 'Jewelry Margherita', 'The Bonney Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/c/c1/Jewelry_Margherita_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/5/5e/Bonney_Pirates%27_Jolly_Roger.png'),
('Buggy Pirates', 'A colorful and comedic crew known for their persistence despite their captain’s antics. They often find themselves in unexpected situations.', 'Buggy', 'Episode 4', 'Chapter 9', 'Big Top', 'The Buggy Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/5/55/Big_Top_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/1/11/Buggy_Pirates%27_Jolly_Roger.png'),
('Roger Pirates', 'A legendary crew that conquered the Grand Line and discovered the One Piece. They are renowned for their unparalleled unity and strength.', 'Gol D. Roger', 'Episode 4', 'Chapter 1', 'Oro Jackson', 'The Roger Pirates'' main ship.', 'https://static.wikia.nocookie.net/onepiece/images/9/9b/Oro_Jackson_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/f/ff/Roger_Pirates%27_Jolly_Roger.png'),
('Whitebeard Pirates', 'A formidable crew known for their family-like bonds and their captain’s fatherly leadership. They protected many territories under their flag.', 'Edward Newgate', 'Episode 151', 'Chapter 234', 'Moby Dick', 'The main ship of the Whitebeard crew.', 'https://static.wikia.nocookie.net/onepiece/images/a/a1/Moby_Dick_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/4/45/Whitebeard_Pirates%27_Jolly_Roger.png'),
('Rocks Pirates', 'The crew of the Legendary Rocks D. Xebec also known as the most feared pirate in the Golden Pirate era.', 'Rocks D. Xebec', 'Episode 958', 'Chapter 957', 'Unknown', 'The main ship of the Rocks Pirates crew', 'https://static.wikia.nocookie.net/onepiece/images/3/36/Rocks_Pirates_Ship.png', 'https://static.wikia.nocookie.net/onepiece/images/2/2d/Rocks_Pirates_Infobox.png'),
('Donquixote Pirates', 'The crew led by the Shichibukai Donquixote Doflamingo, known for their power and influence in the underworld.', 'Donquixote Doflamingo', 'Episode 151', 'Chapter 233', 'Numancia Flamingo', 'The ship used by the Donquixote Pirates, named the "Numancia Flamingo".', 'https://static.wikia.nocookie.net/onepiece/images/4/47/Numancia_Flamingo_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/f/f5/Donquixote_Pirates%27_Jolly_Roger.png'),
('Kuja Pirates', 'An all-female pirate crew from Amazon Lily, led by the Pirate Empress Boa Hancock.', 'Boa Hancock', 'Episode 408', 'Chapter 516', 'Perfume Yuda', 'The Kuja Pirates use the ship "Perfume Yuda", propelled by sea serpents.', 'https://static.wikia.nocookie.net/onepiece/images/5/59/Perfume_Yuda_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/d/d8/Kuja_Pirates_Portrait.png'),
('Arlong Pirates', 'A Fish-Man crew led by Arlong, known for their tyranny in the East Blue.', 'Arlong', 'Episode 31', 'Chapter 69', 'Shark Superb', 'The Arlong Pirates use a shark-themed ship named "Shark Superior".', 'https://static.wikia.nocookie.net/onepiece/images/f/fa/Shark_Superb_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/3/37/Arlong_Pirates%27_Jolly_Roger.png'),
('New Fish-Man Pirates', 'A militant Fish-Man crew, founded by Hody Jones, promoting Fish-Man supremacy.', 'Hody Jones', 'Episode 530', 'Chapter 606', 'None', 'Their main ship is a giant sea creature named "Noah".', 'https://static.wikia.nocookie.net/onepiece/images/6/68/Noah_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/9/91/New_Fish-Man_Pirates%27_Jolly_Roger.png'),
('Sun Pirates', 'A legendary Fish-Man pirate crew founded by Fisher Tiger, later led by Jinbe.', 'Fisher Tiger', 'Episode 535', 'Chapter 621', 'Snapper Head', 'The Sun Pirates sail on a ship with a sun-themed design.', 'https://static.wikia.nocookie.net/onepiece/images/d/df/Snapper_Head_in_Totto_Land.png', 'https://static.wikia.nocookie.net/onepiece/images/4/44/Sun_Pirates%27_Jolly_Roger.png'),
('Revolutionary Army', 'A clandestine organization led by Monkey D. Dragon, aiming to overthrow the world goverment', 'Monkey D. Dragon', 'Episode 52', 'Chapter 100', 'Wind Granma', 'Wind Granma is a large ship that has a figurehead and theme of an actual dragon, complete with a small dragon tail.', 'https://static.wikia.nocookie.net/onepiece/images/3/38/Wind_Granma_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/2/27/Revolutionary_Army_Infobox.png'),
('Marines', 'The Marines are the seaborne military forces of the World Government.', 'Akainu', 'Episode 1', 'Chapter 1', 'Marine standard Ship', 'The standard ship is a cruiser-like vessel that has three masts.', 'https://static.wikia.nocookie.net/onepiece/images/d/d2/Standard_Marine_ship.png', 'https://static.wikia.nocookie.net/onepiece/images/d/dc/Marines_Infobox.png'),
('Cross Guild', 'An unconventional and powerful alliance of infamous pirates, known for placing bounties on Marines.', 'Buggy', 'Episode 1083', 'Chapter 1056', 'Big Top Blaster', 'The main ship of the Cross Guild, representing their bold and chaotic ambitions.', 'https://static.wikia.nocookie.net/onepiece/images/2/23/Big_Top_Blaster_Infobox.png', 'https://static.wikia.nocookie.net/onepiece/images/0/0a/Cross_Guild_Portrait.png');


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
    bounty BIGINT NOT NULL,
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
('Monkey D. Luffy', 'Straw Hat Luffy', 'Straw Hat', 'Human', 'Alive', 'East Blue', 17, 19, 'Pirate', TRUE, FALSE, 1, 3000000000, 'Gomu Gomu no Mi', TRUE, TRUE, TRUE, 'Episode 1', 'Chapter 1', 'The captain of the Straw Hat Pirates and future Pirate King.', 'https://static.wikia.nocookie.net/onepiece/images/6/6d/Monkey_D._Luffy_Anime_Post_Timeskip_Infobox.png'),
('Roronoa Zoro', 'Pirate Hunter Zoro', 'Pirate Hunter', 'Human', 'Alive', 'East Blue', 19, 21, 'Swordsman', TRUE, FALSE, 1, 1111000000, NULL, TRUE, TRUE, TRUE, 'Episode 1', 'Chapter 5', 'The swordsman of the Straw Hat Pirates and future World''s Greatest Swordsman.', 'https://static.wikia.nocookie.net/onepiece/images/5/52/Roronoa_Zoro_Anime_Post_Timeskip_Infobox.png'),
('Nami', 'Cat Burglar Nami', 'Navigator', 'Human', 'Alive', 'East Blue', 18, 20, 'Navigator', TRUE, FALSE, 1, 366000000, NULL, FALSE, FALSE, FALSE, 'Episode 1', 'Chapter 8', 'The navigator of the Straw Hat Pirates and future World''s Greatest Navigator.', 'https://static.wikia.nocookie.net/onepiece/images/6/68/Nami_Anime_Post_Timeskip_Infobox.png'),
('Usopp', 'Sogeking', 'Sniper King', 'Human', 'Alive', 'East Blue', 17, 19, 'Sniper', TRUE, FALSE, 1, 500000000, NULL, FALSE, TRUE, FALSE, 'Episode 9', 'Chapter 23', 'The sniper of the Straw Hat Pirates and future Brave Warrior of the Sea.', 'https://static.wikia.nocookie.net/onepiece/images/3/35/Usopp_Anime_Post_Timeskip_Infobox.png'),
('Sanji', 'Black Leg Sanji', 'Black Leg', 'Human', 'Alive', 'North Blue', 19, 21, 'Cook', TRUE, FALSE, 1, 1032000000, NULL, TRUE, TRUE, FALSE, 'Episode 20', 'Chapter 43', 'The cook of the Straw Hat Pirates and future All Blue.', 'https://static.wikia.nocookie.net/onepiece/images/b/b6/Sanji_Anime_Post_Timeskip_Infobox.png'),
('Tony Tony Chopper', 'Cotton Candy Lover Chopper', 'Cotton Candy Lover', 'Reindeer', 'Alive', 'Drum Island', 15, 17, 'Doctor', TRUE, FALSE, 1, 1000, 'Hito Hito no Mi', FALSE, FALSE, FALSE, 'Episode 81', 'Chapter 134', 'The doctor of the Straw Hat Pirates and future All Blue.', 'https://static.wikia.nocookie.net/onepiece/images/a/af/Tony_Tony_Chopper_Anime_Post_Timeskip_Infobox.png'),
('Nico Robin', 'Devil Child Robin', 'Devil Child', 'Human', 'Alive', 'West Blue', 28, 30, 'Archaeologist', TRUE, FALSE, 1, 930000000, 'Hana Hana no Mi', FALSE, FALSE, FALSE, 'Episode 67', 'Chapter 114', 'The archaeologist of the Straw Hat Pirates and future True History.', 'https://static.wikia.nocookie.net/onepiece/images/b/bc/Nico_Robin_Anime_Post_Timeskip_Infobox.png'),
('Brook', 'Soul King Brook', 'Soul King', 'Skeleton', 'Alive', 'West Blue', 88, 90, 'Musician', TRUE, FALSE, 1, 383000000, 'Yomi Yomi no Mi', FALSE, FALSE, FALSE, 'Episode 337', 'Chapter 442', 'The musician of the Straw Hat Pirates and future All Blue.', 'https://static.wikia.nocookie.net/onepiece/images/4/41/Brook_Anime_Post_Timeskip_Infobox.png'),
('Franky', 'Cyborg Franky', 'Cyborg', 'Human', 'Alive', 'South Blue', 34, 36, 'Shipwright', TRUE, FALSE, 1, 394000000, NULL, FALSE, FALSE, FALSE, 'Episode 329', 'Chapter 436', 'The shipwright of the Straw Hat Pirates and future All Blue.', 'https://static.wikia.nocookie.net/onepiece/images/8/8c/Franky_Anime_Post_Timeskip_Infobox.png'),
('Jinbe', 'Knight of the Sea Jinbe', 'Knight of the Sea', 'Fishman', 'Alive', 'Grand Line', 44, 46, 'Helmsman', TRUE, FALSE, 1, 1100000000, NULL, TRUE, TRUE, FALSE, 'Episode 439', 'Chapter 528', 'The helmsman of the Straw Hat Pirates and future All Blue.', 'https://static.wikia.nocookie.net/onepiece/images/8/81/Jinbe_Anime_Infobox.png'),
('Edward Newgate', 'Whitebeard', 'Whitebeard', 'Human', 'Deceased', 'Unknown', 72, 74, 'Pirate', TRUE, FALSE, 2, 5046000000, 'Gura Gura no Mi', TRUE, TRUE, TRUE, 'Episode 151', 'Chapter 234', 'The late captain of the Whitebeard Pirates and former Yonko.', 'https://static.wikia.nocookie.net/onepiece/images/b/b7/Edward_Newgate_Anime_Infobox.png'),
('Smoker', 'White Hunter Smoker', 'White Hunter', 'Human', 'Alive', 'Grand Line', 36, 38, 'Marine', FALSE, TRUE, 23, 0, 'Moku Moku no Mi', TRUE, TRUE, FALSE, 'Episode 48', 'Chapter 98', 'The Marine Vice Admiral and former Marine Captain.', 'https://static.wikia.nocookie.net/onepiece/images/c/c4/Smoker_Anime_Post_Timeskip_Infobox.png'),
('Portgas D. Ace', 'Fire Fist Ace', 'Fire Fist', 'Human', 'Deceased', 'South Blue', 20, 22, 'Pirate', TRUE, FALSE, 2, 550000000, 'Mera Mera no Mi', TRUE, TRUE, TRUE, 'Episode 94', 'Chapter 154', 'The late captain of the Spade Pirates and former Whitebeard Pirates 2nd Division Commander.', 'https://static.wikia.nocookie.net/onepiece/images/4/4f/Portgas_D._Ace_Anime_Infobox.png'),
('Monkey D. Garp', 'Garp the Fist', 'Garp the Fist', 'Human', 'Alive', 'Unknown', 78, 80, 'Marine', FALSE, TRUE, 23, 3000000000, NULL, TRUE, TRUE, TRUE, 'Episode 45', 'Chapter 91', 'The Marine Vice Admiral and former Marine Instructor.', 'https://static.wikia.nocookie.net/onepiece/images/e/e1/Monkey_D._Garp_Anime_Infobox.png'),
('Sabo', 'Lucy', 'Flame Emperor', 'Human', 'Alive', 'Unknown', 10, 22, 'Revolutionary', FALSE, FALSE, 22, 2500000000, 'Mera Mera no Mi', TRUE, TRUE, FALSE, 'Episode 663', 'Chapter 744', 'The Chief of Staff of the Revolutionary Army and former noble.', 'https://static.wikia.nocookie.net/onepiece/images/c/c2/Sabo_Anime_Infobox.png'),
('Trafalgar D. Water Law', 'Surgeon of Death Law', 'Surgeon of Death', 'Human', 'Alive', 'North Blue', 26, 28, 'Pirate', TRUE, FALSE, 4, 3000000000, 'Ope Ope no Mi', TRUE, TRUE, FALSE, 'Episode 376', 'Chapter 498', 'The captain of the Heart Pirates and future Warlord of the Sea.', 'https://static.wikia.nocookie.net/onepiece/images/4/4d/Trafalgar_D._Water_Law_Anime_Post_Timeskip_Infobox.png'),
('Kaido', 'Kaido of the Beasts', 'Kaido of the Beasts', 'Human', 'Alive', 'Unknown', 50, 52, 'Pirate', TRUE, FALSE, 5, 4611100000, 'Uo Uo no Mi', TRUE, TRUE, TRUE, 'Episode 739', 'Chapter 795', 'The captain of the Beasts Pirates and current Yonko.', 'https://static.wikia.nocookie.net/onepiece/images/2/2d/Kaidou_Anime_Infobox.png'),
('Charlotte Linlin', 'Big Mom', 'Big Mom', 'Human', 'Alive', 'Unknown', 68, 70, 'Pirate', TRUE, FALSE, 6, 4388000000, 'Soru Soru no Mi', TRUE, TRUE, TRUE, 'Episode 786', 'Chapter 651', 'The captain of the Big Mom Pirates and current Yonko.', 'https://static.wikia.nocookie.net/onepiece/images/d/d8/Charlotte_Linlin_Anime_Infobox.png'),
('Marshall D. Teach', 'Blackbeard', 'Blackbeard', 'Human', 'Alive', 'Unknown', 38, 40, 'Pirate', TRUE, FALSE, 2, 3996000000, 'Yami Yami no Mi', TRUE, TRUE, TRUE, 'Episode 151', 'Chapter 223', 'The captain of the Blackbeard Pirates and current Yonko.', 'https://static.wikia.nocookie.net/onepiece/images/f/ff/Marshall_D._Teach_Anime_Post_Timeskip_Infobox.png'),
('Buggy', 'Buggy the Clown', 'Buggy the Clown', 'Human', 'Alive', 'Grand Line', 37, 39, 'Pirate', TRUE, FALSE, 24, 3189000000, NULL, TRUE, TRUE, FALSE, 'Episode 4', 'Chapter 9', 'The captain of the Buggy Pirates and future Pirate King.', 'https://static.wikia.nocookie.net/onepiece/images/f/f7/Buggy_Anime_Post_Timeskip_Infobox.png'),
('Dracule Mihawk', 'Hawk-Eye Mihawk', 'Hawk-Eye', 'Human', 'Alive', 'Grand Line', 41, 43, 'Swordsman', TRUE, FALSE, 24, 359000000, NULL, TRUE, TRUE, FALSE, 'Episode 24', 'Chapter 49', 'The World''s Greatest Swordsman and former Warlord of the Sea.', 'https://static.wikia.nocookie.net/onepiece/images/b/bf/Dracule_Mihawk_Anime_Infobox.png'),
('Boa Hancock', 'Pirate Empress Hancock', 'Pirate Empress', 'Human', 'Alive', 'Grand Line', 29, 31, 'Pirate', TRUE, FALSE, 18, 1659000000, 'Mero Mero no Mi', TRUE, TRUE, TRUE, 'Episode 411', 'Chapter 516', 'The captain of the Kuja Pirates and future Pirate King.', 'https://static.wikia.nocookie.net/onepiece/images/f/f0/Boa_Hancock_Anime_Infobox.png'),
('Borsalino', 'Kizaru', 'Kizaru', 'Human', 'Alive', 'Grand Line', 58, 60, 'Marine', FALSE, TRUE, 23, 3000000000, NULL, TRUE, TRUE, TRUE, 'Episode 393', 'Chapter 514', 'The Marine Admiral and former Marine Vice Admiral.', 'https://static.wikia.nocookie.net/onepiece/images/1/14/Borsalino_Anime_Infobox.png'),
('Sengoku', 'Sengoku the Buddha', 'Sengoku the Buddha', 'Human', 'Alive', 'Grand Line', 77, 79, 'Marine', FALSE, TRUE, 23, 3000000000, NULL, TRUE, TRUE, TRUE, 'Episode 0', 'Chapter 0', 'The former Marine Fleet Admiral.', 'https://static.wikia.nocookie.net/onepiece/images/2/24/Sengoku_Anime_Post_Timeskip_Infobox.png'),
('Akainu', 'Sakazuki', 'Sakazuki', 'Human', 'Alive', 'Grand Line', 55, 57, 'Marine', FALSE, TRUE, 23, 5000000000, NULL, TRUE, TRUE, TRUE, 'Episode 0', 'Chapter 0', 'The Marine Fleet Admiral and former Marine Admiral.', 'https://static.wikia.nocookie.net/onepiece/images/d/d7/Sakazuki_Anime_Post_Timeskip_Infobox.png'),
('Kuzan', 'Aokiji', 'Aokiji', 'Human', 'Alive', 'Grand Line', 47, 49, 'Marine', FALSE, TRUE, 23, 3000000000, NULL, TRUE, TRUE, TRUE, 'Episode 0', 'Chapter 0', 'The Marine Admiral and former Marine Vice Admiral.', 'https://static.wikia.nocookie.net/onepiece/images/d/d6/Kuzan_Anime_Post_Timeskip_Infobox.png'),
('Gol D. Roger', 'Pirate King Roger', 'Pirate King', 'Human', 'Deceased', 'Unknown', 53, 55, 'Pirate', TRUE, FALSE, 14, 5564800000, NULL, TRUE, TRUE, TRUE, 'Episode 4', 'Chapter 1', 'The late captain of the Roger Pirates and former Pirate King.', 'https://static.wikia.nocookie.net/onepiece/images/2/24/Gol_D._Roger_Anime_Infobox.png'),
('Silvers Rayleigh', 'Dark King Rayleigh', 'Dark King', 'Human', 'Alive', 'Unknown', 78, 80, 'Pirate', TRUE, FALSE, 14, 3200000000, NULL, TRUE, TRUE, TRUE, 'Episode 4', 'Chapter 19', 'The first mate of the Roger Pirates and former Dark King.', 'https://static.wikia.nocookie.net/onepiece/images/b/b1/Silvers_Rayleigh_Anime_Infobox.png'),
('Shanks', 'Red-Haired Shanks', 'Red-Haired', 'Human', 'Alive', 'Unknown', 39, 41, 'Pirate', TRUE, FALSE, 3, 4048900000, NULL, TRUE, TRUE, TRUE, 'Episode 4', 'Chapter 1', 'The captain of the Red Hair Pirates and former Yonko.', 'https://static.wikia.nocookie.net/onepiece/images/6/66/Shanks_Anime_Infobox.png'),
('Benn Beckman', 'Benn Beckman', 'Benn Beckman', 'Human', 'Alive', 'Unknown', 50, 52, 'Pirate', TRUE, FALSE, 3, 2900000000, NULL, TRUE, TRUE, TRUE, 'Episode 4', 'Chapter 1', 'The first mate of the Red Hair Pirates and former Yonko.', 'https://static.wikia.nocookie.net/onepiece/images/1/12/Benn_Beckman_Anime_Infobox.png'),
('Lucky Roux', 'Lucky Roux', 'Lucky Roux', 'Human', 'Alive', 'Unknown', 50, 52, 'Pirate', TRUE, FALSE, 3, 150000000, NULL, TRUE, TRUE, TRUE, 'Episode 4', 'Chapter 1', 'The member of the Red Hair Pirates and former Yonko.', 'https://static.wikia.nocookie.net/onepiece/images/5/59/Lucky_Roux_Anime_Post_Timeskip_Infobox.png'),
('Yasopp', 'Yasopp', 'Yasopp', 'Human', 'Alive', 'Unknown', 50, 52, 'Pirate', TRUE, FALSE, 3, 1200000000, NULL, TRUE, TRUE, TRUE, 'Episode 4', 'Chapter 1', 'The sniper of the Red Hair Pirates and former Yonko.', 'https://static.wikia.nocookie.net/onepiece/images/1/15/Yasopp_Anime_Infobox.png'),
('Marco', 'Marco the Phoenix', 'Marco the Phoenix', 'Human', 'Alive', 'Unknown', 45, 47, 'Pirate', TRUE, FALSE, 15, 1374000000, NULL, TRUE, TRUE, TRUE, 'Episode 151', 'Chapter 234', 'The former 1st Division Commander of the Whitebeard Pirates and former Yonko Commander.', 'https://static.wikia.nocookie.net/onepiece/images/2/2c/Marco_Anime_Post_Timeskip_Infobox.png'),
('Jozu', 'Diamond Jozu', 'Diamond', 'Human', 'Alive', 'Unknown', 45, 47, 'Pirate', TRUE, FALSE, 15, 740000000, NULL, TRUE, TRUE, TRUE, 'Episode 151', 'Chapter 234', 'The former 3rd Division Commander of the Whitebeard Pirates and former Yonko Commander.', 'https://static.wikia.nocookie.net/onepiece/images/6/61/Jozu_Anime_Infobox.png'),
('X Drake', 'Red Flag Drake', 'Red Flag', 'Human', 'Alive', 'Unknown', 33, 35, 'Pirate', TRUE, FALSE, 11, 222000000, NULL, TRUE, TRUE, TRUE, 'Episode 793', 'Chapter 795', 'The captain of the Drake Pirates and former Warlord of the Sea.', 'https://static.wikia.nocookie.net/onepiece/images/0/04/X_Drake_Anime_Post_Timeskip_Infobox.png'),
('Hawkins', 'Magician Hawkins', 'Magician', 'Human', 'Alive', 'Unknown', 31, 33, 'Pirate', TRUE, FALSE, 10, 320000000, NULL, TRUE, TRUE, TRUE, 'Episode 793', 'Chapter 795', 'The captain of the Hawkins Pirates and former Warlord of the Sea.', 'https://static.wikia.nocookie.net/onepiece/images/f/f8/Basil_Hawkins_Anime_Post_Timeskip_Infobox.png'),
('Apoo', 'Roar of the Sea Apoo', 'Roar of the Sea', 'Human', 'Alive', 'Unknown', 31, 33, 'Pirate', TRUE, FALSE, 8, 350000000, NULL, TRUE, TRUE, TRUE, 'Episode 793', 'Chapter 795', 'The captain of the On Air Pirates and former Warlord of the Sea.', 'https://static.wikia.nocookie.net/onepiece/images/d/d0/Scratchmen_Apoo_Anime_Post_Timeskip_Infobox.png'),
('Bonney', 'Big Eater Bonney', 'Big Eater', 'Human', 'Alive', 'Unknown', 24, 26, 'Pirate', TRUE, FALSE, 12, 320000000, NULL, TRUE, TRUE, TRUE, 'Episode 793', 'Chapter 795', 'The captain of the Bonney Pirates and former Warlord of the Sea.', 'https://static.wikia.nocookie.net/onepiece/images/6/62/Jewelry_Bonney_Anime_Post_Timeskip_Infobox.png'),
('Kidd', 'Captain Kidd', 'Captain', 'Human', 'Alive', 'Unknown', 23, 25, 'Pirate', TRUE, FALSE, 7, 3000000000, NULL, TRUE, TRUE, TRUE, 'Episode 393', 'Chapter 498', 'The captain of the Kid Pirates and future Warlord of the Sea.', 'https://static.wikia.nocookie.net/onepiece/images/4/47/Eustass_Kid_Anime_Post_Timeskip_Infobox.png'),
('Bege', 'Gangster Gastino Bege', 'Gangster Gastino', 'Human', 'Alive', 'Unknown', 38, 40, 'Pirate', TRUE, FALSE, 9, 350000000, NULL, TRUE, TRUE, TRUE, 'Episode 783', 'Chapter 812', 'The captain of the Fire Tank Pirates and former Warlord of the Sea.', 'https://static.wikia.nocookie.net/onepiece/images/9/99/Capone_Bege_Anime_Post_Timeskip_Infobox.png'),
('Monkey D. Dragon', 'Dragon', 'The Revolutionary', 'Human', 'Alive', 'East Blue', 53, 55, 'Revolutionary', TRUE, TRUE, 22, 0, NULL, FALSE, FALSE, FALSE, 'Episode 45', 'Chapter 100', 'The Supreme Commander of the Revolutionary Army.', 'https://static.wikia.nocookie.net/onepiece/images/8/89/Monkey_D._Dragon_Anime_Infobox.png'),
('Ivankov', 'Emporio Ivankov', 'Miracle Worker', 'Human', 'Alive', 'Grand Line', 245, 53, 'Revolutionary', TRUE, FALSE, 22, 0, 'Horu Horu no Mi', TRUE, FALSE, FALSE, 'Episode 438', 'Chapter 537', 'The "Queen" of the Kamabakka Kingdom and commander of the Revolutionary Army.', 'https://static.wikia.nocookie.net/onepiece/images/3/34/Emporio_Ivankov_Anime_Infobox.png'),
('Bartholomew Kuma', 'Kuma', 'The Tyrant', 'Human', 'Alive', 'South Blue', 689, 47, 'Revolutionary', TRUE, FALSE, 22, 296000000, 'Nikyu Nikyu no Mi', TRUE, FALSE, FALSE, 'Episode 151', 'Chapter 233', 'A former Warlord of the Sea and now a cyborg weapon of the World Government.', 'https://static.wikia.nocookie.net/onepiece/images/7/7f/Bartholomew_Kuma_Anime_Infobox.png'),
('Koala', 'Koala', 'Koala', 'Human', 'Alive', 'Grand Line', 21, 23, 'Revolutionary', FALSE, FALSE, 22, 0, NULL, FALSE, FALSE, FALSE, 'Episode 541', 'Chapter 622', 'A Fish-Man Karate assistant instructor and former slave.', 'https://static.wikia.nocookie.net/onepiece/images/7/7d/Koala_Anime_Infobox.png'),
('Hack', 'Hack', 'Hack', 'Fish-Man', 'Alive', 'Grand Line', 36, 38, 'Revolutionary', FALSE, FALSE, 22, 0, NULL, FALSE, FALSE, FALSE, 'Episode 701', 'Chapter 705', 'A Fish-Man Karate instructor and member of the Revolutionary Army.', 'https://static.wikia.nocookie.net/onepiece/images/5/57/Hack_Anime_Infobox.png'),
('Belo Betty', 'Betty', 'The Cheerful Revolutionary', 'Human', 'Alive', 'East Blue', 190, 34, 'Revolutionary', TRUE, FALSE, 22, NULL, 'Kobu kobu no Mi', TRUE, FALSE, FALSE, 'Episode 878', 'Chapter 904', 'The commander of the Revolutionary Armys East Army.', 'https://static.wikia.nocookie.net/onepiece/images/e/e7/Belo_Betty_Anime_Infobox.png'),
('Karasu', 'Karasu', 'Karasu', 'Human', 'Alive', 'North Blue', 34, 36, 'Revolutionary', TRUE, FALSE, 22, 0, 'Susu Susu No Mi', TRUE, FALSE, FALSE, 'Episode 878', 'Chapter 904', 'The commander of the Revolutionary Armys North Army.', 'https://static.wikia.nocookie.net/onepiece/images/a/a2/Karasu_Anime_Infobox.png'),
('Lindbergh', 'Lindbergh', 'Lindbergh', 'Mink', 'Alive', 'Zou', 18, 20, 'Revolutionary', FALSE, FALSE, 22, 0, NULL, FALSE, FALSE, FALSE, 'Episode 878', 'Chapter 904', 'The commander of the Revolutionary Armys South Army.', 'https://static.wikia.nocookie.net/onepiece/images/f/f4/Lindbergh_Anime_Infobox.png'),
('Morley', 'Morley', 'The Mountain', 'Giant', 'Alive', 'Elbaf', 158, 160, 'Revolutionary', TRUE, FALSE, 22, 0, 'Oshi Oshi no Mi', TRUE, FALSE, FALSE, 'Episode 878', 'Chapter 904', 'The commander of the Revolutionary Armys West Army.', 'https://static.wikia.nocookie.net/onepiece/images/e/ef/Morley_Anime_Infobox.png');


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
('Moku Moku no Mi', 'モクモクの実', 'Logia', 'A Logia-type Devil Fruit that allows the user to become a smoke human.', 14, NULL, 'Episode 325', 'Chapter 441', 'https://static.wikia.nocookie.net/onepiece/images/8/8d/Moku_Moku_no_Mi_Infobox.png'),
('Ope Ope no Mi', 'オペオペの実', 'Paramecia', 'A Paramecia-type Devil Fruit that allows the user to perform surgery on anyone.', 16, NULL, 'Episode 376', 'Chapter 498', 'https://static.wikia.nocookie.net/onepiece/images/0/0e/Ope_Ope_no_Mi_Infobox.png'),
('Uo Uo no Mi', 'ウオウオの実', 'Mythical Zoan', 'A Mythical Zoan-type Devil Fruit that allows the user to become a dragon.', 17, NULL, 'Episode 739', 'Chapter 795', 'https://static.wikia.nocookie.net/onepiece/images/f/f9/Uo_Uo_no_Mi%2C_Model_Seiryu_Infobox.png'),
('Soru Soru no Mi', 'ソルソルの実', 'Paramecia', 'A Paramecia-type Devil Fruit that allows the user to take the soul of anyone.', 18, NULL, 'Episode 786', 'Chapter 651', 'https://static.wikia.nocookie.net/onepiece/images/9/9d/Soru_Soru_no_Mi_Infobox.png'),
('Yami Yami no Mi', 'ヤミヤミの実', 'Logia', 'A Logia-type Devil Fruit that allows the user to become darkness.', 19, NULL, 'Episode 151', 'Chapter 223', 'https://static.wikia.nocookie.net/onepiece/images/f/f5/Yami_Yami_no_Mi_Infobox.png'),
('Mero Mero no Mi', 'メロメロの実', 'Paramecia', 'A Paramecia-type Devil Fruit that allows the user to turn people into stone.', 20, NULL, 'Episode 411', 'Chapter 516', 'https://static.wikia.nocookie.net/onepiece/images/9/98/Mero_Mero_no_Mi_Infobox.png');

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
('Wano Country', 'ワノ国', 'New World', 'Country', 'The isolated country of Wano.', 'Episode 892', 'Chapter 909', 'https://static.wikia.nocookie.net/onepiece/images/e/e0/Wano_Country_Present.png');

INSERT INTO Ships (name, name_japanese, status, type, captain_name, crew_id, debut_anime, debut_manga, image_url)
VALUES
('Thousand Sunny', 'サウザンドサニー号', 'Active', 'Ship', 'Monkey D. Luffy', 1, 'Episode 317', 'Chapter 430', 'https://onepiece.fandom.com/wiki/Thousands_Sunny'),
('Moby Dick', 'モビーディック号', 'Destroyed', 'Large Battleship', 'Edward Newgate', 2, 'Episode 151', 'Chapter 234', 'https://onepiece.fandom.com/wiki/Moby_Dick');

CREATE TABLE Accounts (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR (100) NOT NULL,
    password VARCHAR (100) NOT NULL
);
