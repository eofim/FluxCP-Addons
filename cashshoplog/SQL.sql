CREATE TABLE `cashshop_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameid` varchar(30) NOT NULL DEFAULT '',
  `qnt` int(11) NOT NULL DEFAULT '0',
  `account_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `char_id` int(11) UNSIGNED NOT NULL,
  `map` varchar(20) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE = MyISAM AUTO_INCREMENT = 1;