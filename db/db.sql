CREATE DATABASE futebol_db;
USE escola

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (email, senha) VALUES ('professor@escola.com', MD5('12345'));