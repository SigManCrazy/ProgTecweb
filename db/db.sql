SET TIME_ZONE = '+02:00';
USE `tecweb`;

DROP TABLE IF EXISTS `tecweb`.`comment`;
DROP TABLE IF EXISTS `tecweb`.`account`;
DROP TABLE IF EXISTS `tecweb`.`product`;

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
  FOREIGN KEY (`fk_account`) REFERENCES `account` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CHECK (`rating` > 0 AND `rating` <= 10)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
