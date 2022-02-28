DROP TABLE IF EXISTS users;

CREATE TABLE IF NOT EXISTS users(

    ID INT(8) UNSIGNED NOT NULL auto_increment,
    firstName varchar(30) NOT NULL DEFAULT '',
    lastName  varchar(40) NOT NULL DEFAULT '',
    email     varchar(50) NOT NULL DEFAULT '',
    username  varchar(50) NOT NULL DEFAULT '',
    password  CHAR(40)    NOT NULL DEFAULT '',
    PRIMARY KEY (ID)
)ENGINE = InnoDB, DEFAULT CHARSET=utf8;