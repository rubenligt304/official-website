CREATE DATABASE IF NOT EXISTS ruben_ligtenstein_db;

USE ruben_ligtenstein_db;

-- Maak een tabel voor rijders
CREATE TABLE IF NOT EXISTS Rijders (
    rijder_id INT AUTO_INCREMENT PRIMARY KEY,
    voornaam VARCHAR(100),
    achternaam VARCHAR(100),
    geboortedatum DATE,
    nationaliteit VARCHAR(50)
);

-- Voeg een voorbeeldrijder toe
INSERT INTO Rijders (voornaam, achternaam, geboortedatum, nationaliteit) 
VALUES ('Ruben', 'Ligtenstein', '1995-01-01', 'Nederland');
