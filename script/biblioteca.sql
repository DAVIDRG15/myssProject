CREATE DATABASE biblioteca;
USE biblioteca;

CREATE TABLE administrador (
id_admin int (10) not null primary key,
nombre_admin varchar (25) not null,
apellidos_admin varchar (50) not null,
contraseña varchar (7) not null); 

CREATE TABLE usuario (
matricula int (8) not null primary key,
nombre_usu varchar (25) not null,
apellidos_usu varchar (50) not null, 
contraseña varchar (8) not null);

CREATE TABLE libro (
codigo_libro int (10) not null primary key, 
titulo_lib varchar (50) not null, 
autor_libro varchar (50) not null,
editorial varchar (50) not null,
categoria_libro varchar (40) not null,
subcategoria_libro varchar (40) not null,
cantidad int(30) not null,
estatus ENUM ('PRESTAMO' , 'DISPONIBLE') not null);

CREATE TABLE reserva (
folio_rese int primary key auto_increment, 
nombre varchar (25) not null, 
matricula int (8) not null,
apellidos varchar (50) not null,
codigo_libro int (10) not null,
titulo_lib varchar (50) not null, 
fecha_rese date not null,
estatus_rese ENUM ('PENDIENTE' , 'COMPLETADA' , 'RESERVADA') not null,
FOREIGN KEY (codigo_libro) REFERENCES libro(codigo_libro),
FOREIGN KEY (matricula) REFERENCES usuario(matricula) 
);

CREATE TABLE prestamo (
folio_rese int auto_increment,
codigo_libro int (10) not null,
titulo_lib varchar (50) not null,
matricula int (8) not null,
nombre varchar (25) not null,
fecha_prestamo date, 
fecha_devolucion date,
estatus_prestamo ENUM('PRESTADO', 'DEVUELTO') NOT NULL,
FOREIGN KEY (folio_rese) REFERENCES reserva(folio_rese),
FOREIGN KEY (codigo_libro) REFERENCES libro(codigo_libro),
FOREIGN KEY (matricula) REFERENCES usuario(matricula)
);