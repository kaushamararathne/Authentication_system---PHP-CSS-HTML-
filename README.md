# Authentication_system---PHP-CSS-HTML-
This project is a demo for PHP dynamic login and register pages inter connected with mySQL. 
db name = attend_sys
ALTER TABLE `attend_sys`.`admin` DROP INDEX `user`, ADD FULLTEXT `user` (`user`, `NIC`, `PW`);//sql table code
