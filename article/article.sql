CREATE DATABASE article;

USE article;

CREATE TABLE articletable (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    author VARCHAR(30),
    disc text,
    content text,
    create_time TIMESTAMP
);