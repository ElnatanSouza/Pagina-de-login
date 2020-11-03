CREATE database sistema
    default character set utf8
    default collate utf8_general_ci;

CREATE TABLE usuarios (
    id int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(80) NOT NULL,
    imagem varchar(150),
    email varchar(80) NOT NULL UNIQUE,
    senha char(32) NOT NULL

) default charset = utf8;


CREATE TABLE postagens (
    id_postagens int PRIMARY KEY AUTO_INCREMENT,
    conteudo varchar(400) NOT NULL,
    
    fk_usuario int NOT NULL,
    
    FOREIGN KEY(fk_usuario) REFERENCES usuarios(id) ON DELETE CASCADE

) default charset = utf8;