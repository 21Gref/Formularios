CREATE DATABASE formulario;

USE formulario;

CREATE TABLE personas(
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidoP VARCHAR(20) NOT NULL,
    apellidoM VARCHAR(20) NOT NULL,
    edad INT NOT NULL,
    PRIMARY KEY (id)
);