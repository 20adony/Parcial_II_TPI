DROP TABLE IF EXISTS users;

CREATE TABLE users{
    id smallserial PRIMARY KEY,
    username varchar(25),
    password varchar(10)
}