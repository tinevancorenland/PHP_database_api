CREATE DATABASE db_notes;

CREATE TABLE `db_notes`.`notes` ( 
  `note_id` INT NOT NULL AUTO_INCREMENT , 
  `title` VARCHAR(255) NOT NULL , 
  `content` TEXT NULL DEFAULT NULL , 
  PRIMARY KEY (`note_id`), 
  UNIQUE `title` (`title`)
  ) 
  
  ENGINE = InnoDB;