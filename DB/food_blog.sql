DROP TABLE IF EXISTS 'food_blog';
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE 'food_blog' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'user_id' varchar(255) NOT NULL,
  'tip_cook' varchar(255) NOT NULL,
  PRIMARY KEY ('id')
)