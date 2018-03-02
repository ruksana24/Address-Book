CREATE TABLE user(
	id int PRIMARY KEY AUTO_INCREMENT,
	userName varchar(20) not null,
	email varchar(50) not null,
	password varchar(30) not null);


CREATE TABLE people(
    id int PRIMARY KEY AUTO_INCREMENT,
    fullName varchar(50) not null,
    nickName varchar(50) not null,
    birthDate date not null,
    webSite  varchar(100),
    phone  varchar(20) not null,
    address varchar(100),
    userId int not null,
    FOREIGN KEY(userId) REFERENCES user(id));
