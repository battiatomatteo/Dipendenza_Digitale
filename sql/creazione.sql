create DATABASE questionario;
use questionario;

CREATE TABLE risposte(
    id_persona int NOT NULL AUTO_INCREMENT ,
    username varchar(50),
    PRIMARY KEY (id_persona),
    domanda_1 VARCHAR(50),
    domanda_2 VARCHAR(50),
    domanda_3 VARCHAR(50),
    domanda_4 VARCHAR(50),
    domanda_5 VARCHAR(50),
    domanda_6 VARCHAR(50)
);