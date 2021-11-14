
DROP TABLE IF EXISTS `images` ;

CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userid` bigint(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `views` int(11) NOT NULL,
  `url_address` varchar(60) NOT NULL,
  `title` varchar(100) NOT NULL,
  `active` ENUM('1', '0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = 'available images';
