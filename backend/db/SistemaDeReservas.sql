create database SistemaDeReservas;
use SistemaDeReservas;

create table usuario (
id_usuario int auto_increment primary key,
nome varchar(30),
senha varchar(20)
);
insert into usuario (nome, senha)
values ("Mauricioo", "444");

drop trigger criptografar_senha;


insert into usuario values
(default, 'Bruna Gomes', 'bruninha2610'),
(default, 'Gustavo dos Santos', 'gusta123');

create table locais(
id int auto_increment primary key,
nome varchar(20)
);

create table clientes(
id int auto_increment primary key,
nome varchar(30),
telefone varchar(20),
email varchar(40) unique
);

create table reservas(
id int auto_increment primary key,
id_cliente int,
id_local int,
data_reserva date,
foreign key (id_cliente) references clientes(id),
foreign key (id_local) references locais(id)
);

select * from clientes;
select * from usuario;
select * from reservas;
drop table reservas;
drop table clientes;