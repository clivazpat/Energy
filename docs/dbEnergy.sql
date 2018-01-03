DROP DATABASE IF EXISTS dbEnergy;
CREATE DATABASE dbEnergy;
USE dbEnergy;

CREATE TABLE type (
  id   INT         NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20) NOT NULL
);

CREATE TABLE city (
  id   INT         NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  npa  INT         NOT NULL
);

CREATE TABLE location (
  id     INT         NOT NULL AUTO_INCREMENT PRIMARY KEY,
  idCity INT         NOT NULL,
  street VARCHAR(50) NOT NULL,
  number VARCHAR(5)
);

CREATE TABLE installation (
  id              INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  idLocation      INT NOT NULL,
  idType          INT NOT NULL,
  integrationType TINYINT,
  PVCellsType     TINYINT,
  orientation     DECIMAL(5, 2),
  slope           DECIMAL(5, 2),
  length          DECIMAL(5, 2),
  width           DECIMAL(5, 2),
  area            DECIMAL(5, 2),
  number          INT NOT NULL
);

INSERT INTO type VALUES (NULL, 'Windmachine'), (NULL, 'Photovoltaik'), (NULL, 'Bio-gas'), (NULL, 'Mini-hydraulish');

INSERT INTO city VALUES (NULL, 'Sierre', 3960), (NULL, 'Sion', 1950), (NULL, 'Monthey', 1870), (NULL, 'Martigny', 1920);

INSERT INTO location
VALUES (NULL, 1, 'Avenue de France', '45'), (NULL, 1, 'Avenue du Rothorn', '32'), (NULL, 1, 'Avenue Max-Huber', '18'),
  (NULL, 1, 'Chemin de Castor', '2');

INSERT INTO installation VALUES
  (NULL, 1, 1, NULL, NULL, 12, 3, 3, 12, 36, 1001),
  (NULL, 2, 2, TRUE, FALSE, 0.35, 1.25, 3, 3, 9, 1002),
  (NULL, 3, 3, NULL, NULL, 0.78, 2.45, 4, 4, 16, 1003),
  (NULL, 4, 4, NULL, NULL, 1.23, 5.66, 5, 6, 30, 1004);