create database gitphp;

use gitphp;

create table funcionario(
    idfuncionario integer auto_increment primary key,
    nome varchar(40) not null,
    email varchar(50) not null,
    salario double(10,2)
);
