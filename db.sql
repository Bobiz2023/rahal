CREATE DATABASE school;
USE school;

CREATE TABLE pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page VARCHAR(50) UNIQUE NOT NULL,
    content TEXT NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO pages (page, content) VALUES ('home', 'مرحبا بكم في مدرسة رحال بن أحمد الثانوية');
INSERT INTO users (username, password) VALUES ('admin', '$2y$10$R2xR9i54BupJtyzG06TS7Oye6/4Fj9I9AhDVs9KzqG/RGPueUqz0W'); -- كلمة المرور: password123
