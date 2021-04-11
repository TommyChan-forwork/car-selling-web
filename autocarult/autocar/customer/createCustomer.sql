
CREATE TABLE `Customer` (
  `custid` int(10) unsigned NOT NULL  AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
PRIMARY KEY (custid)
)