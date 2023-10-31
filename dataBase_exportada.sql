-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: university
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumnos_clases`
--

DROP TABLE IF EXISTS `alumnos_clases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumnos_clases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clase_id` int(11) DEFAULT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clase_id` (`clase_id`),
  KEY `alumno_id` (`alumno_id`),
  CONSTRAINT `alumnos_clases_ibfk_1` FOREIGN KEY (`clase_id`) REFERENCES `clases` (`id`),
  CONSTRAINT `alumnos_clases_ibfk_2` FOREIGN KEY (`alumno_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos_clases`
--

LOCK TABLES `alumnos_clases` WRITE;
/*!40000 ALTER TABLE `alumnos_clases` DISABLE KEYS */;
INSERT INTO `alumnos_clases` VALUES (6,5,38),(13,4,38),(14,7,36),(15,4,36),(16,25,36),(17,24,36),(18,2,36),(19,6,36);
/*!40000 ALTER TABLE `alumnos_clases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clases`
--

DROP TABLE IF EXISTS `clases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materias` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clases`
--

LOCK TABLES `clases` WRITE;
/*!40000 ALTER TABLE `clases` DISABLE KEYS */;
INSERT INTO `clases` VALUES (1,'matematicas'),(2,'Biologia'),(3,'Literatura'),(4,'Literatura'),(5,'Contabilidad'),(6,'Estadistica'),(7,'Etica'),(24,'procesos'),(25,'geologia'),(31,'algebra'),(32,'astronomia'),(33,'Etica');
/*!40000 ALTER TABLE `clases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clases_maestros`
--

DROP TABLE IF EXISTS `clases_maestros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clases_maestros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clase_id` int(11) DEFAULT NULL,
  `maestro_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clase_id` (`clase_id`),
  KEY `maestro_id` (`maestro_id`),
  CONSTRAINT `clases_maestros_ibfk_1` FOREIGN KEY (`clase_id`) REFERENCES `clases` (`id`),
  CONSTRAINT `clases_maestros_ibfk_2` FOREIGN KEY (`maestro_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clases_maestros`
--

LOCK TABLES `clases_maestros` WRITE;
/*!40000 ALTER TABLE `clases_maestros` DISABLE KEYS */;
INSERT INTO `clases_maestros` VALUES (1,4,31),(9,25,41),(29,7,31),(30,25,31),(32,2,31),(33,25,40),(34,6,31),(35,24,31);
/*!40000 ALTER TABLE `clases_maestros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador'),(2,'Maestro'),(3,'Alumno');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` int(11) DEFAULT NULL,
  `nombre` text DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `contrasena` varchar(150) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rol_id` (`rol_id`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (7,67832,'Admin','admin@admin','$2y$10$wdx.BjgR18lkjbqfrmb.2OOkkNtRamlDZwk0Pll3m9EllzQvrDw5K','cl colombia','2010-06-11',1),(10,80938238,'Maria Gonzales','maria@maria','$2y$10$bZ5otbbN1XwcT0nmJTuSTu69CXupHD07NspXLweBlLiTm0mR3m.qm','cl empanada','1936-05-07',2),(31,67988,'Jose smith','maestro@maestro','$2y$10$SPZE0Ggh9g7vZ0xn9CNcPOfpDoMFLIMRVKeCnGnUW96OMkTDAju1m','cl la arboleda','2009-01-27',2),(34,67832,'profe parce','profesor@profesor','$2y$10$1CnEwMaq5dbcME/NfzJpH.31MDm4M/.nE0IhiQzYDTKLBS5151SHu','cl colombia','2010-06-11',2),(36,67832,'Alumno','alumno@alumno','$2y$10$gCD5d/WnLdZc6ZZ53k9iEO9UJtS68CerST3/pxojZMZqz24SMilgO','cl grande','2023-10-13',3),(38,6783287,'jorge','jorge@jorge','$2y$10$CjrbjbF6DU2/AsUEMyFIIeF2f/kIa5Q3uFYvkBx88W9h50/1CoQ0i','cl cordoba','2023-09-27',3),(40,80938238,'maestrorochi','maestrorochi@maestrorochi','$2y$10$RIpfQ9rIflEpxrFHm6QiL.qlEBc7T8Zhs64v8bBReXgqnZR9lgQqy','camehouse','2023-10-12',2),(41,628682,'carlos villagran','carlos@carlos','$2y$10$FqaTPJ4eUxEg8Y7QloqIRONsMy2nU9Ab4fl2JZ9j6LPr28q9f2EZm','cl cordoba','2018-06-06',2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'university'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-31 13:04:51
