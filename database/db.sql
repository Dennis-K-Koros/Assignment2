drop DATABASE if EXISTS conch;
CREATE DATABASE if not  EXISTS conch;

use conch;

drop TABLE if EXISTS users;
CREATE TABLE if not EXISTS users(
    userId tinyint(1) not null auto_increment,
    Firstname VARCHAR (50) not null DEFAULT '',
    Lastname VARCHAR (50) not null DEFAULT '',
    email VARCHAR (50) not null DEFAULT '',
    password VARCHAR (60) not null DEFAULT '',
    datecreated datetime not null DEFAULT CURRENT_TIMESTAMP,
    dateupdated datetime not null DEFAULT  CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP, 
    role VARCHAR (50) not null DEFAULT 'USER',   
    PRIMARY KEY `userId` (`userId`),
    unique key `email` (`email`)
);