This project was done within 2 months with the help of some group mates.

Here is the SQL code to be pasted into the websites server:

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE vehicles (
    id INT NOT NULL PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    type VARCHAR(255) NOT NULL,
    oil_change DATE 
);

CREATE TABLE jobs (
    id INT NOT NULL PRIMARY KEY,
    type VARCHAR(50) NOT NULL UNIQUE,
    location VARCHAR(255) NOT NULL,
    cost DOUBLE NOT NULL
);
