CREATE DATABASE multi_user;

USE multi_user;

CREATE TABLE user (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  level ENUM('admin', 'pegawai', 'pengurus') NOT NULL
);

