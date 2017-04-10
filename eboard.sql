/* Create database `eboard` */
CREATE DATABASE eboard;
/*Create table `accounts` */
CREATE TABLE IF NOT EXISTS accounts (
	`id` INTEGER AUTO_INCREMENT NOT NULL,
	`firstname` VARCHAR(100) NOT NULL,
	`lastname` VARCHAR(100) NOT NULL,
	`username` VARCHAR(100) NOT NULL,
	`email` VARCHAR(100) NOT NULL,
	`pass` VARCHAR(50) NOT NULL,
	`date_registered` DATETIME NOT NULL,
   	PRIMARY KEY(`id`)
);