CREATE DATABASE blood_donation;

USE blood_donation;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    blood_group VARCHAR(5),
    city VARCHAR(100)
);

CREATE TABLE requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    requester_name VARCHAR(100),
    blood_group VARCHAR(5),
    city VARCHAR(100),
    reason TEXT,
    contact_info VARCHAR(100),
    request_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);