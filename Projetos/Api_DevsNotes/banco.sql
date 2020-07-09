CREATE DATABASE DEVSNOTES;
USE DEVSNOTES;

CREATE TABLE NOTES(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    title varchar(100),
    body text
);

/* INSERÇÃO DE DADOS PARA TESTE */

INSERT INTO NOTES VALUES(NULL, "Registro para testes", "Conteúdo de testes apenas" );

