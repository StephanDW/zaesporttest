alter table users add column team_id int DEFAULT 0;
alter table users add column team_manager_yn tinyint(1) DEFAULT 0;
alter table users add column team_captain_yn tinyint(1) DEFAULT 0;

CREATE TABLE teams (
    team_id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    team_name varchar(255) DEFAULT ''
);