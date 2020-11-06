create database projeto_squad_3;
use projeto_squad_3;

create table usuario(
id_usuario int auto_increment,
nome varchar(80) not null,
email varchar(200) not null unique,
senha varchar(255) not null,
telefone varchar(20) not null,
endereco varchar(255) not null,
primary key(id_usuario)
);

select * from usuario   ;

 -- drop table usuario;