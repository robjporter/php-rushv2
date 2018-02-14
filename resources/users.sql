CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `active` int(1) DEFAULT 1,
  `verified` int(1) DEFAULT 0,
  `created` varchar(150) DEFAULT 'current_timestamp()',
  `flogin` varchar(150) DEFAULT NULL,
  `llogin` varchar(150) DEFAULT NULL,
  `acl` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
