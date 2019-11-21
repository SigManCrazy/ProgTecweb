SET TIME_ZONE = '+02:00';
USE `tecweb`;

DROP TABLE IF EXISTS `tecweb`.`comment`;
DROP TABLE IF EXISTS `tecweb`.`tour_subscription`;
DROP TABLE IF EXISTS `tecweb`.`product`;
DROP TABLE IF EXISTS `tecweb`.`tour`;
DROP TABLE IF EXISTS `tecweb`.`account`;

CREATE TABLE `product` (
  `ID` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(64) NOT NULL UNIQUE,
  `img_path` VARCHAR(8192) NOT NULL,
  `desc` VARCHAR(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `account` (
  `ID` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(32) NOT NULL UNIQUE,
  `password` VARCHAR(128) NOT NULL,
  `email` VARCHAR(128) NOT NULL UNIQUE,
  `type` SMALLINT UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `comment` (
  `ID` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fk_product` INTEGER NOT NULL,
  `fk_account` INTEGER NOT NULL,
  `rating` SMALLINT NOT NULL,
  `when` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` VARCHAR(1024),
  FOREIGN KEY (`fk_product`) REFERENCES `product` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`fk_account`) REFERENCES `account` (`ID`) ON DELETE CASCADE ON UPDATE cascade,
  CHECK (`rating` > 0 AND `rating` <= 10)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tour` (
  `ID` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `when` DATETIME NOT NULL,
  `desc` VARCHAR(32) NOT NULL,
  `max_partecipants` INTEGER NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tour_subscription` (
  `fk_tour` INTEGER NOT NULL,
  `fk_account` INTEGER NOT NULL,
  FOREIGN KEY (`fk_tour`) REFERENCES `tour` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`fk_account`) REFERENCES `account` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


