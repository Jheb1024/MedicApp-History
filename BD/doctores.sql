-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2021 a las 04:43:10
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

drop database if exists doctores;
create database doctores;
use doctores;
--
-- Base de datos: `doctores`
--

-- --------------------------------------------------------


-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(15) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `app` varchar(100) NOT NULL,
  `apm` varchar(100) NOT NULL,
  `edad` int(2) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `app` varchar(100) DEFAULT NULL,
  `apm` varchar(100) DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `FechaNacimiento` date NOT NULL,
  `peso` float DEFAULT NULL,
  `id_historial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE consulta (
`id` int primary key not null,
`id_paciente` int DEFAULT null,
`enfermedad` varchar(100) DEFAULT NULL,
`sintomas` varchar (500) NOT NULL,
 `fechaLlegada` date NOT NULL,
  `medicacion` varchar(300) DEFAULT NULL,
  `nombre_paciente` varchar(100) DEFAULT NULL,
  `presion_arterial` float DEFAULT NULL,
  `temperatura` float NOT NULL,
`coste` float DEFAULT NULL,
foreign key (id_paciente) references paciente (id_paciente)
);

--
-- Estructura de tabla para la tabla `historialmedico`
--

CREATE TABLE `historialmedico` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11),
  `id_consulta` int(11),
  `nombre_paciente` varchar(100) DEFAULT NULL,
  `alergias` varchar(200) DEFAULT NULL,
  `estudiosClinicos` varchar(100) DEFAULT NULL,
  `antecedentes` varchar(500) DEFAULT NULL,
  foreign key (id_paciente) references paciente (id_paciente),
  foreign key (id_consulta) references consulta (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `medico` AUTO_INCREMENT = 1000;

alter table `paciente` add foreign key (id_historial) references historialmedico (id); 

alter table `paciente` add no_seguro_social varchar(11) not null;


DELIMITER $$
CREATE PROCEDURE InsertarPaciente(nombre VARCHAR(100),app VARCHAR(100), apm VARCHAR(100),altura FLOAT, edad INT(2), FechaNacimiento VARCHAR(10), peso FLOAT, no_seguro_social VARCHAR(11))
BEGIN
insert into paciente (nombre, app, apm, altura, edad, FechaNacimiento, peso, no_seguro_social)
values (nombre, app, apm, altura, edad, FechaNacimiento, peso, no_seguro_social);
END $$

insert into medico (nombre, app, apm, edad, cedula, password) values ("Ileana", "Rivera", "Hernandez", 22, "1005e48S0", "doctor1");

use doctores
select * from medico
select * from paciente
select * from historialmedico

delete from paciente where id_paciente =3
delete from historialmedico where id =1





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
