DROP TABLE IF EXISTS 'guestbook1';
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE 'guestbook1' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'userID' varchar(255) NOT NULL,
  'userpw' varchar(255) NOT NULL,
  'username' varchar(255) NOT NULL,
  'phone' varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY ('id')
)