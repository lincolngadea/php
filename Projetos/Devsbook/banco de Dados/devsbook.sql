CREATE DATABASE devsbook;
USE devsbook;

CREATE TABLE Users(
    id int AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    birthday DATE,
    city VARCHAR(100) NOT NULL,
    work VARCHAR(100),
    avatar VARCHAR(100),
    cover VARCHAR(100),
    token VARCHAR(255)

);

CREATE TABLE Userrelations(
    id int AUTO_INCREMENT PRIMARY KEY,
    user_from int,
    user_to int
);

CREATE TABLE Posts(
    id int AUTO_INCREMENT PRIMARY KEY,
    type varchar(20),
    created_at DATETIME,
    body TEXT
);

