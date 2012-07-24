/*!40101 SET NAMES utf8 */;

CREATE TABLE `acl_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aros_id` int(11) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `permission` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `aros_permission` (`aros_id`,`permission`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `acl_permissions` WRITE;
INSERT INTO `acl_permissions` VALUES (1,1,'controllers',1);
UNLOCK TABLES;


CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

LOCK TABLES `acos` WRITE;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,64),(2,1,NULL,NULL,'RegisterKeys',2,13),(3,2,NULL,NULL,'index',3,4),(4,2,NULL,NULL,'view',5,6),(5,2,NULL,NULL,'add',7,8),(6,2,NULL,NULL,'edit',9,10),(7,2,NULL,NULL,'delete',11,12),(8,1,NULL,NULL,'Groups',14,25),(9,8,NULL,NULL,'index',15,16),(10,8,NULL,NULL,'view',17,18),(11,8,NULL,NULL,'add',19,20),(12,8,NULL,NULL,'edit',21,22),(13,8,NULL,NULL,'delete',23,24),(14,1,NULL,NULL,'Posts',26,29),(15,14,NULL,NULL,'add',27,28),(16,1,NULL,NULL,'Thread',30,37),(17,16,NULL,NULL,'index',31,32),(18,16,NULL,NULL,'view',33,34),(19,16,NULL,NULL,'write',35,36),(20,1,NULL,NULL,'Pages',38,41),(21,20,NULL,NULL,'display',39,40),(22,1,NULL,NULL,'AclManagers',42,47),(23,22,NULL,NULL,'index',43,44),(24,22,NULL,NULL,'rewrite_acos',45,46),(25,1,NULL,NULL,'Users',48,63),(26,25,NULL,NULL,'index',49,50),(27,25,NULL,NULL,'login',51,52),(28,25,NULL,NULL,'logout',53,54),(29,25,NULL,NULL,'view',55,56),(30,25,NULL,NULL,'add',57,58),(31,25,NULL,NULL,'edit',59,60),(32,25,NULL,NULL,'delete',61,62);
UNLOCK TABLES;


CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;


LOCK TABLES `aros` WRITE;
INSERT INTO `aros` VALUE (1,NULL,'Group',1,NULL,1,12);
UNLOCK TABLES;

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


LOCK TABLES `aros_acos` WRITE;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1');
UNLOCK TABLES;

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

LOCK TABLES `groups` WRITE;
INSERT INTO `groups` VALUES (1,'Administratörer','2012-07-16 17:25:13'),(23,'Användare','2012-07-22 12:07:31'),(22,'Moderatorer','2012-07-22 12:07:25');
UNLOCK TABLES;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `thread_id` (`thread_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `register_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comment` text,
  `key` char(19) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`key`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;


LOCK TABLES `register_keys` WRITE;
INSERT INTO `register_keys` VALUES (1,1,'Test','1111-1111-1111-1111',1);
UNLOCK TABLES;

CREATE TABLE `threads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `topic` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
