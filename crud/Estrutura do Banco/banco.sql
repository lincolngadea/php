CREATE TABLE USUARIO (
    id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL
);

INSERT INTO USUARIO VALUES(
    null,
    'Lincoln Gadéa',
    'lincoln@glinc.com.br'
);

INSERT INTO USUARIO VALUES(
    NULL,
    'Pedro Rolim Gadéa',
    'pedro@glinc.com.br'
);