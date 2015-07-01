

CREATE TABLE `student` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(250) DEFAULT NULL,
  `st_id` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`id`,`full_name`,`st_id`,`email`) values (1,'Osman','2011-14-20','osman@gmail.com'),(3,'Mahi','023-12-23','mahi@gmail.com'),(4,'Rafi Islam','23-43-23','rafi@yahoo.com'),(6,'Rifat','399303','rifat@gmail.com');

