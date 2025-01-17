create database SistemaDeReservas;

use SistemaDeReservas;



create table usuario (
id_usuario int auto_increment primary key,
nome varchar(30),
senha varchar(20)
);

insert into usuario(nome,senha) values 
("Gusta", "123");

