DROP DATABASE IF EXISTS eshoe;
CREATE DATABASE IF NOT EXISTS eshoe;
USE eshoe;

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
	userId bigint(12) NOT NULL AUTO_INCREMENT,
	firstname varchar(50) NOT NULL DEFAULT '',
	lastname varchar(50) NOT NULL DEFAULT '',
	username varchar(50) NOT NULL DEFAULT '',
	email varchar(60) NOT NULL DEFAULT '',
	phonenumber varchar(60) NOT NULL DEFAULT '',
	password varchar(60) NOT NULL DEFAULT '',
	userType varchar(30) NOT NULL DEFAULT '',
	UNIQUE KEY (username),
	UNIQUE KEY (password),
	UNIQUE KEY (phonenumber),
	UNIQUE KEY (email),
	PRIMARY KEY (userId)
);
