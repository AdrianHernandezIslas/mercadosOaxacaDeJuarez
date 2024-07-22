-- PostgreSQL dump

-- Drop database if exists
DROP DATABASE IF EXISTS dbmercados;

-- Create database
CREATE DATABASE dbmercados;

-- Connect to database
\c dbmercados;

-- ------------------------------------------------------
-- Table structure for table `giro`
-- ------------------------------------------------------

DROP TABLE IF EXISTS giro;
CREATE TABLE giro (
  idGiro SERIAL PRIMARY KEY,
  nombreGiro VARCHAR(100)
);

-- Insert data into giro table
INSERT INTO giro (nombreGiro) VALUES ('Alimentos');

-- ------------------------------------------------------
-- Table structure for table `imagen`
-- ------------------------------------------------------

DROP TABLE IF EXISTS imagen;
CREATE TABLE imagen (
  idImagen SERIAL PRIMARY KEY,
  tipo VARCHAR(100),
  rutaAbsoluta VARCHAR(100),
  rutaMediana VARCHAR(100),
  nombre VARCHAR(100),
  peso VARCHAR(100),
  fechaCreacion DATE,
  idMercado INT REFERENCES mercado(idMercado)
);

-- Insert data into imagen table
INSERT INTO imagen (tipo, rutaAbsoluta, rutaMediana, nombre, peso, fechaCreacion, idMercado) 
VALUES 
('1', 'assets/recursos/img/original/General_005.JPG', 'assets/recursos/img/mediana/General_005.JPG', 'General_005.JPG', '9487.48', '2024-07-21', 1),
('1', 'assets/recursos/img/original/principal_sanchez.jpg', 'assets/recursos/img/mediana/principal_sanchez.jpg', 'principal_sanchez.jpg', '9487.48', '2024-07-21', 1),
('1', 'assets/recursos/img/original/principal_sanchez.jpg', 'assets/recursos/img/mediana/principal_sanchez.jpg', 'principal_sanchez.jpg', '9487.48', '2024-07-21', 1),
('2', 'assets/recursos/img/original/Malena.jpg', 'assets/recursos/img/mediana/Malena.jpg', 'Malena.jpg', '451.68', '2024-07-21', 2);

-- ------------------------------------------------------
-- Table structure for table `local`
-- ------------------------------------------------------

DROP TABLE IF EXISTS local;
CREATE TABLE local (
  idLocal SERIAL PRIMARY KEY,
  idMercado INT REFERENCES mercado(idMercado),
  nombre VARCHAR(100),
  eslogan VARCHAR(100),
  logo VARCHAR(100),
  historia VARCHAR(100),
  idGiro INT REFERENCES giro(idGiro),
  tags VARCHAR(100)
);

-- Insert data into local table
INSERT INTO local (idMercado, nombre, eslogan, logo, historia, idGiro, tags)
VALUES 
(2, 'Chuchita', 'Amas es convivir', NULL, 'Esta es una historia chida', 1, 'nieve'),
(2, 'Chuchita', 'Amas es convivir', NULL, 'Esta es una historia chida', 1, 'nieve');

-- ------------------------------------------------------
-- Table structure for table `mercado`
-- ------------------------------------------------------

DROP TABLE IF EXISTS mercado;
CREATE TABLE mercado (
  idMercado SERIAL PRIMARY KEY,
  nombre VARCHAR(100),
  descripcion VARCHAR(100),
  zona VARCHAR(100),
  latitud VARCHAR(100),
  longitud VARCHAR(100),
  direccion VARCHAR(100),
  horario VARCHAR(100),
  telefono VARCHAR(100),
  historia VARCHAR(100)
);

-- Insert data into mercado table
INSERT INTO mercado (nombre, descripcion, zona, latitud, longitud, direccion, horario, telefono, historia)
VALUES 
('Benito Juarez', 'es un mercado grandote que esta en el centro de oaxaca', 'CH', '10.5', '1.5', 'Colonia centro', '19:00', '9581065616', 'loreme isojkhocjkheiochoericer3w'),
('Paz Migueles', 'En el norte esta grandote que esta en el centro de oaxaca', 'N', '10.5', '1.5', 'Colonia centro', '19:00', '9581065616', 'loreme isojkhocjkheiochoericer3w'),
('Artesanias', 'es un mercado grandote que esta en el centro de oaxaca', 'CH', '10.5', '1.5', 'Colonia centro', '19:00', '9581065616', 'loreme isojkhocjkheiochoericer3w'),
('Merced', 'es un mercado grandote que esta en el centro de oaxaca', 'CH', '10.5', '1.5', 'Colonia centro', '19:44', '9581065616', '');

-- ------------------------------------------------------
-- Table structure for table `recurso`
-- ------------------------------------------------------

DROP TABLE IF EXISTS recurso;
CREATE TABLE recurso (
  idRecurso SERIAL PRIMARY KEY,
  idMercado INT REFERENCES mercado(idMercado),
  idLocal INT REFERENCES local(idLocal),
  nombre VARCHAR(100),
  tipo VARCHAR(100),
  rutaMiniatura VARCHAR(100),
  rutaMediana VARCHAR(100),
  rutaAbsoluta VARCHAR(100),
  extension VARCHAR(100),
  peso VARCHAR(100),
  medidas VARCHAR(100),
  fechaCreacion DATE
);

-- Insert data into recurso table
INSERT INTO recurso (idMercado, idLocal, nombre, tipo, rutaMiniatura, rutaMediana, rutaAbsoluta, extension, peso, medidas, fechaCreacion)
VALUES 
(2, 2, 'img_2_1721529994', 'image/jpeg', 'assets/recursos/img/miniatura/img_2_1721529994.JPG', 'assets/recursos/img/mediana/img_2_1721529994.JPG', 'assets/recursos/img/original/img_2_1721529994.JPG', '.JPG', '253.73', '1080x720', '2024-07-21');

-- End of dump
