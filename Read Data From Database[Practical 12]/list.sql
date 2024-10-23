CREATE DATABASE registerdb;

USE registerdb;

CREATE TABLE studentinfo
(
    id INT(60) PRIMARY KEY,
    name VARCHAR(60) NOT NULL,
    mobile VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL,
);