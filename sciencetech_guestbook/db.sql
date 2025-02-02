-- Membuat database
-- CREATE DATABASE IF NOT EXISTS sciencetech_guestbook;
-- USE sciencetech_guestbook;

-- Tabel tb_student untuk menyimpan data siswa
CREATE TABLE tb_student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    grade VARCHAR(50) NOT NULL,
    status ENUM('SISWA') NOT NULL,
    message TEXT,
    time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel tb_teacher untuk menyimpan data guru
CREATE TABLE tb_teacher (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    jabatan VARCHAR(50) NOT NULL,
    status ENUM('GURU') NOT NULL,
    message TEXT,
    time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel tb_visitor untuk menyimpan data pengunjung
CREATE TABLE tb_visitor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    status ENUM('PENGUNJUNG') NOT NULL,
    institute VARCHAR(50) NOT NULL,
    message TEXT,
    time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
