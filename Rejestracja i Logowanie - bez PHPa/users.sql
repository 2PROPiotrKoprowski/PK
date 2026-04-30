-- CREATE DATABASE IF NOT EXISTS portal;
-- USE portal;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    hashHasla VARCHAR(255) NOT NULL
);

INSERT INTO users (email, hashHasla)
VALUES ('uczen1@live.zs1mm.edu.pl', '$2y$10$WyV0LDeP4iez9aE0bYWhk.94m/NHu0jrLpzWWtDpliUz0/lfx8hqy');