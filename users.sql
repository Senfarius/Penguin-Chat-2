CREATE TABLE IF NOT EXISTS `penguins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `string` text COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;