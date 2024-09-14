create database gamedata;
use gamedata;
CREATE TABLE logindata (
    srno int primary key not null AUTO_INCREMENT,
    username varchar(255) not null,
    password varchar(255) not null,
    dt DATETIME DEFAULT CURRENT_TIMESTAMP
);