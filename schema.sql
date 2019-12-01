CREATE DATABASE taskforce
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE taskforce;

CREATE TABLE users
(
    id                int AUTO_INCREMENT PRIMARY KEY,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    email             VARCHAR(128) NOT NULL,
    password          VARCHAR(128) NOT NULL,
    role              int DEFAULT 0
);

create unique index users_email_uindex
    on users (email);
create index users_registration_date_index
    on users (registration_date);
create index users_role_index
    on users (role);
