CREATE DATABASE library_collection;

USE library_collection;

CREATE TABLE tb_buku (
  id_buku INT AUTO_INCREMENT,
  judul_buku VARCHAR(255),
  pengarang VARCHAR(255),
  tahun_terbit INT,
  kategori VARCHAR(255),
  PRIMARY KEY (id_buku)
);

