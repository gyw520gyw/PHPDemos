CREATE DATABASE article;

USE article;

CREATE TABLE articletable (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(10),
    author VARCHAR(30),
    description text,
    content text,
    create_time TIMESTAMP
);