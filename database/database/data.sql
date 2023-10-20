-- SENTENCIAS DDL
DROP TABLE IF EXISTS datos_usuario;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id smallserial PRIMARY KEY,
    username varchar(15),
    password varchar(10)
);

ALTER TABLE users ADD COLUMN last_update TIMESTAMP;

