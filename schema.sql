DROP DATABASE IF EXISTS estacionamientos;
CREATE DATABASE estacionamientos;
USE estacionamientos;

CREATE TABLE INGRESOS(
    ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    PLACA VARCHAR(6),
    NOMBRE VARCHAR(100),
    TELEFONO VARCHAR(15),
    FECHA_INGRESO DATE NOT NULL,
    HORA_INGRESO TIME NOT NULL
);

CREATE TABLE EGRESOS(
    ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    PLACA VARCHAR(6),
    NOMBRE VARCHAR(100),
    TELEFONO VARCHAR(15),
    FECHA_EGRESO DATE NOT NULL,
    HORA_EGRESO TIME NOT NULL,
    TOTAL FLOAT NOT NULL
);
