CREATE DATABASE taskforce
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE taskforce;

CREATE TABLE categories
(

);

CREATE TABLE profile
(
    id int AUTO_INCREMENT PRIMARY KEY,
    address VARCHAR(1000),
    birthday TIMESTAMP,
    about TEXT,


);

CREATE TABLE users
(
    id                int AUTO_INCREMENT PRIMARY KEY,
    registration_date TIMESTAMP  DEFAULT CURRENT_TIMESTAMP,
    name              VARCHAR(64)  NOT NULL,
    email             VARCHAR(128) NOT NULL,
    password          VARCHAR(128) NOT NULL,
    role              TINYINT(1) DEFAULT 0,
    profile_id        int,
    FOREIGN KEY (profile_id) REFERENCES profile (id) ON DELETE CASCADE
);

create index users_name_index
    on users (name);
create unique index users_email_index
    on users (email);
create index users_registration_date_index
    on users (registration_date);
create index users_role_index
    on users (role);


