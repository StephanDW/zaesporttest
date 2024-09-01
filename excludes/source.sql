# DB NAME toho

CREATE TABLE users (
    user_id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_name varchar(255) NOT NULL,
    user_password varchar(255) NOT NULL,
    user_email varchar(255) NOT NULL
);

INSERT INTO users (user_name, user_password, user_email)
VALUES ('Stephan', 'sdw', 'user_email');

INSERT INTO users (user_name, user_password, user_email)
VALUES ('Nico', 'no', 'user_email');