# me
CREATE TABLE `people` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`first_name` TEXT ,
	`last_name` TEXT ,
	`email` TEXT ,
	`address` TEXT ,
	`type` TEXT ,
	`phone` TEXT ,
	`front` BLOB,
	`back` BLOB,
	`subject` TEXT,
	`message` TEXT,
	PRIMARY KEY (`id`)
);
