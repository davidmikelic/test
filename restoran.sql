-- Kreiranje baze
CREATE DATABASE IF NOT EXISTS restoran
  DEFAULT CHARACTER SET utf8mb4
  DEFAULT COLLATE utf8mb4_general_ci;

-- Aktiviraj bazu
USE restoran;

-- Kreiranje tablice
CREATE TABLE IF NOT EXISTS recenzije (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(255) NOT NULL,
    tekst TEXT NOT NULL,
    ocjena INT NOT NULL CHECK (ocjena BETWEEN 1 AND 5),
    datum TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
