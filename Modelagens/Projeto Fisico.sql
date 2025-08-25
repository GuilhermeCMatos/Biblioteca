CREATE DATABASE IF NOT EXISTS DB_BIBLIOTECA;
USE DB_BIBLIOTECA;


CREATE TABLE IF NOT EXISTS Autor (
Id int auto_increment,
Nome Varchar(255) not null,
Data_Nascimento Date not null,
CPF Char(11) not null,
PRIMARY KEY(Id)
);

CREATE TABLE IF NOT EXISTS Categoria (
Id int auto_increment,
Descricao Varchar(100) not null,
PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Livro (
Id int auto_increment ,
Id_Categoria int not null,
Titulo varchar(255) not null,
Editora varchar(150) not null,
Ano Year not null,
Isbn varchar(100) not null,
PRIMARY KEY (Id),
FOREIGN KEY (Id_Categoria) REFERENCES Categoria(Id)
);

CREATE TABLE IF NOT EXISTS Aluno (
Id int auto_increment,
Nome varchar(150),
RA int,
Curso varchar(150),
PRIMARY KEY(Id)
);

CREATE TABLE IF NOT EXISTS Usuario (
Id int auto_increment,
Nome varchar(150),
Email varchar(150),
Senha varchar(100),
PRIMARY KEY(Id)
);

CREATE TABLE IF NOT EXISTS Livro_Autor_Assoc (
Id_Livro int not null,
Id_Autor int not null,
FOREIGN KEY(Id_Livro) REFERENCES Livro (Id),
FOREIGN KEY(Id_Autor) REFERENCES Autor (Id),
PRIMARY KEY(Id_Livro, Id_Autor)
);

CREATE TABLE IF NOT EXISTS Emprestimo (
Id int auto_increment,
Data_Emprestimo Date not null,
Data_Devolucao Date not null,
Id_Usuario int not null,
Id_Aluno int not null,
Id_Livro int not null,
PRIMARY KEY(Id),
FOREIGN KEY(Id_Usuario) REFERENCES Usuario (Id),
FOREIGN KEY(Id_Livro) REFERENCES Livro (Id),
FOREIGN KEY(Id_Aluno) REFERENCES Aluno (Id)
);

INSERT INTO Usuario (nome , email , senha) values ("guilherme" , "gui@gmail.com" , sha1("123"));