create database SistemaDeReservas;

use SistemaDeReservas;



create table usuario (
id_usuario int auto_increment primary key,
nome varchar(30),
senha varchar(20)
);

create table locais(
id int auto_increment primary key,
nome varchar(20)
);

create table clientes(
id int auto_increment primary key,
nome varchar(30),
telefone int unique,
email varchar(40) unique
);

create table reservas(
id int auto_increment primary key,
id_cliente int,
id_local int,
data_reserva date
);

