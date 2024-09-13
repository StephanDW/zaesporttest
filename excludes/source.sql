# DB NAME toho

CREATE TABLE users (
    user_id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_name varchar(255) NOT NULL,
    user_password varchar(255) NOT NULL,
    user_email varchar(255) NOT NULL,
    team_id int DEFAULT 0,
    team_manager_yn tinyint(1) DEFAULT 0,
    team_captain_yn tinyint(1) DEFAULT 0
);

CREATE TABLE teams (
    team_id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    team_name varchar(255) DEFAULT '',
);

