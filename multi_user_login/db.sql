CREATE DATABASE multi_user_login;

USE multi_user_login;

CREATE TABLE user (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  level ENUM('admin', 'pegawai', 'pengurus') NOT NULL
);

INSERT INTO user(username, password, level) VALUES ('gatra', 'admin1', 'admin'), ('john', 'pegawai1', 'pegawai'), ('jane', 'pengurus1', 'pengurus');