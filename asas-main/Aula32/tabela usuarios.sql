CREATE TABLE usuarios
(
    id       INT             NOT NULL    AUTO_INCREMENT,
    email    VARCHAR(350)    NOT NULL,    
    senha    VARCHAR(150)    NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;