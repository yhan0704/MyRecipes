DROP TABLE IF EXISTS 'my_recipes';
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE 'my_recipes' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'food_name' varchar(255) NOT NULL,
  'description' varchar(255) NOT NULL,
  'steps' varchar(255) NOT NULL,
  PRIMARY KEY ('id')
)