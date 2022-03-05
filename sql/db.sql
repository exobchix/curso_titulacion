create database db_ajax_php;

use db_ajax_php;

create table usuarios(
    id int auto_increment primary key not null,
    nombre varchar(50) not null,
    apellido varchar(50) not null,
    edad int(2) not null,
    ciudad text not null,
    trabajo text not null
);


insert into usuarios(nombre,apellido,edad,ciudad,trabajo) values("Héctor","Bautista",28,"Tanlajás","Catedrático");
insert into usuarios(nombre,apellido,edad,ciudad,trabajo) values("Ximena","Bautista",3,"Tanlajás","Programadora");
insert into usuarios(nombre,apellido,edad,ciudad,trabajo) values("Santa","Martínez",25,"San Antonio","Diseñadora");