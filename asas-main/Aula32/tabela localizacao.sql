CREATE TABLE localizacao
(
    id           INT             NOT NULL    AUTO_INCREMENT,
    nome         VARCHAR(150)    NOT NULL,
    preco        NUMERIC(10, 2)  NOT NULL,   
    urlfoto      VARCHAR(350)    NULL,    
    descricao    TEXT            NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
