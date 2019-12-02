CREATE DATABASE taskforce
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE taskforce;

CREATE TABLE locations
(
    id        int AUTO_INCREMENT PRIMARY KEY,
    city      VARCHAR(64),
    latitude  FLOAT,
    longitude FLOAT
);

CREATE TABLE portfolio
(
    id        int AUTO_INCREMENT PRIMARY KEY,
    files     BLOB
);

CREATE TABLE profile
(
    id          int AUTO_INCREMENT PRIMARY KEY,
    avatar_file VARCHAR(128),
    address     VARCHAR(1000),
    location_id int,
    birthday    TIMESTAMP,
    about       TEXT,
    categories  BLOB,
    phone       VARCHAR(20),
    skype       VARCHAR(128),
    messenger   VARCHAR(128),
    portfolio_id   int,
    user_id     int,
    FOREIGN KEY (location_id) REFERENCES locations (id) ON DELETE CASCADE,
    FOREIGN KEY (portfolio_id) REFERENCES portfolio (id) ON DELETE CASCADE
);

CREATE TABLE users
(
    id                   int AUTO_INCREMENT PRIMARY KEY,
    registration_date    TIMESTAMP  DEFAULT CURRENT_TIMESTAMP,
    name                 VARCHAR(64)  NOT NULL,
    email                VARCHAR(128) NOT NULL,
    password             VARCHAR(128) NOT NULL,
    role                 TINYINT(1) DEFAULT 0,
    rating               FLOAT      DEFAULT 0,
    latest_activity_time TIMESTAMP,
    profile_id           int,
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


