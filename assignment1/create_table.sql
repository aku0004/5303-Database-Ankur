CREATE TABLE IF NOT EXISTS `user` (
  `gender` char(8) NOT NULL,
  `title` char(6) NOT NULL,
  `first` char(32) NOT NULL,
  `last` char(32) NOT NULL,
  `street` varchar(38) NOT NULL,
  `city` char(30) NOT NULL,
  `state` char(32) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL,
  `dob` int(16) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `picture` varchar(64) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;