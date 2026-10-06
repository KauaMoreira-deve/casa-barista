-- MySQL dump 10.13  Distrib 8.4.11, for Linux (x86_64)
--
-- Host: localhost    Database: casa_barista
-- ------------------------------------------------------
-- Server version	8.4.11

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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('tm609zW4khDF80K1czgHkZqSfap2esq5La28Js4X',NULL,'172.18.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJSazBseGVDRFpnU1U1SXZTbThIQXBHZ2s1ZkU0Q3BEYnpmRXZrY2p0IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1788893779),('x2tfTUjKwrcyZ274pzyOkgGgpy9H2wsuo0dYqpZc',NULL,'172.18.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJXT1dSTlI3dWpKcXlZZGJReEJMVWRvZnkzNkdJZ2xESGhpVjdRRml6IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1788974603);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_banner`
--

DROP TABLE IF EXISTS `tbl_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_banner` (
  `id_banner` int NOT NULL AUTO_INCREMENT,
  `titulo_banner` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_banner` varchar(65) COLLATE utf8mb4_general_ci NOT NULL,
  `status_banner` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_banner` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_banner` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_banner`
--

LOCK TABLES `tbl_banner` WRITE;
/*!40000 ALTER TABLE `tbl_banner` DISABLE KEYS */;
INSERT INTO `tbl_banner` VALUES (1,'Café especial da semana','banner/cafe_especial_da_semana.png','ATIVO','2026-05-13 14:02:25','2026-09-08 18:53:20'),(2,'Dia dos pais','banner/dia_pais.png','ATIVO','2026-05-15 14:47:09','2026-09-08 18:53:25'),(3,'Tome seu café da manhã em familia na casa do baris','banner/tome_seu_cafe_da_manha_em_familia.png','INATIVO','2026-05-15 14:49:57','2026-06-02 14:11:01'),(4,'Tome seu café da manhã em familia','banner/tome_seu_cafe_da_manha_em_familia.png','ATIVO','2026-05-15 14:50:19','2026-05-15 14:50:19'),(5,'Café preparado com amor','banner/cafe_preparado_com_amor.png','ATIVO','2026-05-15 14:53:47','2026-05-15 14:53:47'),(6,'Ambiente familiar e profissional','banner/ambiente_familiar_profissional.png','ATIVO','2026-05-15 14:56:08','2026-09-08 18:53:14'),(7,'Promoções Imperdíveis','banner/promocoes_Imperdíveis.png','ATIVO','2026-05-15 14:58:44','2026-05-15 14:58:44');
/*!40000 ALTER TABLE `tbl_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_categoria` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `status_categoria` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_categoria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_categoria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categoria`
--

LOCK TABLES `tbl_categoria` WRITE;
/*!40000 ALTER TABLE `tbl_categoria` DISABLE KEYS */;
INSERT INTO `tbl_categoria` VALUES (1,'CAFÉ','INATIVO','2026-05-13 14:52:57','2026-05-21 17:19:42'),(2,'Bolo','ATIVO','2026-05-15 16:36:50','2026-05-15 16:36:50'),(3,'Chá','ATIVO','2026-05-15 16:38:22','2026-05-15 16:38:22'),(4,'Salgados','ATIVO','2026-05-15 16:44:26','2026-05-15 16:44:26'),(5,'Bebidas','ATIVO','2026-05-15 16:45:35','2026-05-15 16:45:35'),(6,'Espressos','ATIVO','2026-05-15 16:46:27','2026-05-15 16:46:27');
/*!40000 ALTER TABLE `tbl_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cliente`
--

DROP TABLE IF EXISTS `tbl_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_cliente` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `senha_cliente` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_cliente` varchar(65) COLLATE utf8mb4_general_ci NOT NULL,
  `status_cliente` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cliente`
--

LOCK TABLES `tbl_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_cliente` DISABLE KEYS */;
INSERT INTO `tbl_cliente` VALUES (1,'Lucas Martins','lucas@gmail.com','senha123','cliente/martins_lucas.jpeg','ATIVO','2026-05-13 15:18:26','2026-05-22 14:18:16'),(2,'Arthur Silva','arthur@gmail.com','arthur123456','cliente/arthur_silva.png','ATIVO','2026-05-15 17:18:32','2026-05-15 17:18:32'),(3,'Rivaldo Souza','rivaldo@gmail.com','rivaldo12345','cliente/rivaldo_souza.png','ATIVO','2026-05-15 17:19:50','2026-05-15 17:19:50'),(4,'Ricardo Braga','ricardo@yahoo.com.br','braga1234','cliente/ricardo_braga.png','ATIVO','2026-05-15 17:21:07','2026-05-15 17:21:07'),(5,'Giovanna Nogueira','giovanna@gmail.com','giovanna1234','cliente/giovanna.png','ATIVO','2026-05-15 17:22:28','2026-05-15 17:22:28'),(6,'Cauã Souza','souza2008@gmail.com','souza123456','cliente/caua_souza.jpeg','ATIVO','2026-05-18 13:45:57','2026-05-18 13:45:57');
/*!40000 ALTER TABLE `tbl_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contato`
--

DROP TABLE IF EXISTS `tbl_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_contato` (
  `id_contato` int NOT NULL AUTO_INCREMENT,
  `nome_contato` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_contato` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone_contato` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `assunto_contato` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `mensagem_contato` text COLLATE utf8mb4_general_ci NOT NULL,
  `status_contato` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_contato` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_contato` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contato`
--

LOCK TABLES `tbl_contato` WRITE;
/*!40000 ALTER TABLE `tbl_contato` DISABLE KEYS */;
INSERT INTO `tbl_contato` VALUES (1,'Kauã Moreira da Silva','kaua@gmail.com','(11)92998-9999','DUVIDA','Gostaria de saber se vocês aceitam reservas para grupos','LIDO','2026-05-13 14:16:13','2026-05-22 14:15:05'),(2,'João Vitor de Oliveira','joaovitor@gmail.com','(11)98888-9999','DUVIDA','Gostaria de saber se faz eventos','NOVO','2026-05-15 16:23:46','2026-05-15 16:23:46'),(3,'Ricardo Palmeira dos Santos','palmeirasanto@gmail.com','(11)98888-9999','DUVIDA','Tenho interesse em trabalhar com vocês, tenho que estar pessoalmente?','NOVO','2026-05-15 16:27:05','2026-05-15 16:27:05'),(4,'Vilma Rosa','vilma@gmail.com','(11)97777-8888','DUVIDA','Vocês fazem entrega em grande quantidade?','NOVO','2026-05-15 16:29:50','2026-05-15 16:29:50'),(5,'Emily Jhulia','Jhulia@gmail.com','(11)92222-8889','DUVIDA','Tenho interesse em ir ao estabeecimento, da para fazer reserva??','NOVO','2026-05-15 16:31:48','2026-05-15 16:31:48'),(6,'Julia Silva','julia@yahoo.com.br','(11)97777-8888','DUVIDA','Fazem entrega?','NOVO','2026-05-15 16:35:33','2026-05-15 16:35:33');
/*!40000 ALTER TABLE `tbl_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_depoimentos`
--

DROP TABLE IF EXISTS `tbl_depoimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_depoimentos` (
  `id_depoimentos` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `titulo_depoimentos` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descricao_depoimentos` text COLLATE utf8mb4_general_ci NOT NULL,
  `nota_depoimentos` int NOT NULL,
  `status_depoimentos` varchar(10) COLLATE utf8mb4_general_ci DEFAULT 'PENDENTE',
  `data_criacao_depoimentos` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_depoimentos` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_depoimentos`),
  KEY `fk_depoimento_cliente` (`id_cliente`),
  CONSTRAINT `fk_depoimento_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_depoimentos`
--

LOCK TABLES `tbl_depoimentos` WRITE;
/*!40000 ALTER TABLE `tbl_depoimentos` DISABLE KEYS */;
INSERT INTO `tbl_depoimentos` VALUES (1,1,'Execelente café','O café estava perfeito e o atendimento foi muito acolhedor.',2,'APROVADO','2026-05-13 15:26:36','2026-05-22 14:23:58'),(2,1,'Otimo atendimento','Atendimento espetacular, sem palavras',5,'PENDENTE','2026-05-15 17:24:25','2026-05-15 17:24:25'),(3,3,'Otimo cafe','Tomei um café espresso com coração que até animou o meu dia',4,'PENDENTE','2026-05-15 17:25:37','2026-05-15 17:25:37'),(4,4,'Espaço','Que lugar maravilhoso, lindo, ate tirei algumas fotos',5,'PENDENTE','2026-05-15 17:27:02','2026-05-15 17:27:02'),(5,5,'Otimos salgados','Fui tomar café da manha, comi alguns salgados, muito bom',4,'PENDENTE','2026-05-15 17:27:53','2026-05-15 17:27:53');
/*!40000 ALTER TABLE `tbl_depoimentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_galeria`
--

DROP TABLE IF EXISTS `tbl_galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_galeria` (
  `id_galeria` int NOT NULL AUTO_INCREMENT,
  `nome_galeria` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_galeria` varchar(65) COLLATE utf8mb4_general_ci NOT NULL,
  `status_galeria` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_galeria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_galeria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_galeria`
--

LOCK TABLES `tbl_galeria` WRITE;
/*!40000 ALTER TABLE `tbl_galeria` DISABLE KEYS */;
INSERT INTO `tbl_galeria` VALUES (1,'Ambiente interno','galeria/ambiente_interno.png','INATIVO','2026-05-13 14:26:29','2026-05-21 17:09:59'),(2,'Nossos cafés','galeria/nossos_cafes.png','ATIVO','2026-05-15 15:09:30','2026-05-15 15:09:30'),(3,'Nossos funcionarios','galeria/nossos_funcionarios.png','ATIVO','2026-05-15 15:14:55','2026-09-08 18:51:14'),(4,'Nossos espaços','galeria/nossos_espacos.png','ATIVO','2026-05-15 15:16:35','2026-09-08 18:52:53'),(5,'Bolos','galeria/bolos.png','ATIVO','2026-05-15 15:18:40','2026-09-08 18:52:13'),(6,'Bebidas','galeria/bebidas.png','ATIVO','2026-05-15 15:22:20','2026-09-08 18:53:00');
/*!40000 ALTER TABLE `tbl_galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_horarios`
--

DROP TABLE IF EXISTS `tbl_horarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_horarios` (
  `id_horarios` int NOT NULL AUTO_INCREMENT,
  `dia_semana_horarios` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `hora_abertura_horarios` time NOT NULL,
  `hora_fechamento_horarios` time NOT NULL,
  `observacao_horarios` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status_horarios` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_horarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_horarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_horarios`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_horarios`
--

LOCK TABLES `tbl_horarios` WRITE;
/*!40000 ALTER TABLE `tbl_horarios` DISABLE KEYS */;
INSERT INTO `tbl_horarios` VALUES (1,'SEGUNDA-FEIRA','08:00:00','17:00:00','Atendimento por agendamento','ATIVO','2026-05-13 14:48:26','2026-05-22 14:09:22'),(2,'TERÇA-FEIRA','08:00:00','20:00:00','Atendimento por ordem de chegada','ATIVO','2026-05-15 16:12:24','2026-05-15 16:12:24'),(3,'QUARTA-FEIRA','08:00:00','20:00:00','Atendimento por ordem de chegada','ATIVO','2026-05-15 16:14:05','2026-05-15 16:14:05'),(4,'QUINTA-FEIRA','08:00:00','20:00:00','Atendimento por ordem de chegada','ATIVO','2026-05-15 16:15:27','2026-05-15 16:15:27'),(5,'SEXTA-FEIRA','08:00:00','20:00:00','Atendimento por ordem de chegada','ATIVO','2026-05-15 16:17:01','2026-05-15 16:17:01'),(6,'SÁBADO','08:00:00','22:00:00','Atendimento por ordem de chegada','ATIVO','2026-05-15 16:19:05','2026-05-15 16:19:05');
/*!40000 ALTER TABLE `tbl_horarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_itens_venda`
--

DROP TABLE IF EXISTS `tbl_itens_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_itens_venda` (
  `id_itens_venda` int NOT NULL AUTO_INCREMENT,
  `id_venda` int NOT NULL,
  `id_produto` int NOT NULL,
  `qtde_itens_venda` double(6,2) NOT NULL,
  `valor_unit_itens_venda` double(6,2) NOT NULL,
  `subtotal_itens_venda` double(6,2) NOT NULL,
  `status_itens_venda` varchar(12) COLLATE utf8mb4_general_ci DEFAULT 'CONFIRMADO',
  `data_criacao_itens_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_itens_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_itens_venda`),
  KEY `fk_itens_venda_venda` (`id_venda`),
  KEY `fk_itens_venda_produto` (`id_produto`),
  CONSTRAINT `fk_itens_venda_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`),
  CONSTRAINT `fk_itens_venda_venda` FOREIGN KEY (`id_venda`) REFERENCES `tbl_venda` (`id_venda`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_itens_venda`
--

LOCK TABLES `tbl_itens_venda` WRITE;
/*!40000 ALTER TABLE `tbl_itens_venda` DISABLE KEYS */;
INSERT INTO `tbl_itens_venda` VALUES (1,1,1,2.00,13.90,19.80,'CONFIRMADO','2026-05-13 17:04:46','2026-05-22 14:49:37'),(2,2,2,2.00,10.90,21.80,'CONFIRMADO','2026-05-18 14:22:08','2026-05-18 14:22:08'),(3,3,3,2.00,8.50,17.00,'CONFIRMADO','2026-05-18 14:27:01','2026-05-18 14:27:01'),(4,4,4,2.00,10.90,10.90,'CONFIRMADO','2026-05-18 14:29:37','2026-05-18 14:29:37'),(5,5,5,2.00,13.90,27.80,'CONFIRMADO','2026-05-18 14:32:02','2026-05-18 14:32:02'),(6,6,6,2.00,10.90,10.90,'CONFIRMADO','2026-05-18 14:34:34','2026-05-18 14:34:34');
/*!40000 ALTER TABLE `tbl_itens_venda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_linha_tempo`
--

DROP TABLE IF EXISTS `tbl_linha_tempo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_linha_tempo` (
  `id_linha_tempo` int NOT NULL AUTO_INCREMENT,
  `titulo_linha_tempo` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `ano_linha_tempo` date NOT NULL,
  `descricao_linha_tempo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_linha_tempo` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_linha_tempo` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_linha_tempo` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_linha_tempo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_linha_tempo`
--

LOCK TABLES `tbl_linha_tempo` WRITE;
/*!40000 ALTER TABLE `tbl_linha_tempo` DISABLE KEYS */;
INSERT INTO `tbl_linha_tempo` VALUES (1,'FUNDAÇÂO','2001-01-01','A casa do barista iniciou suas atividades oferecendo cafés especiais e atendimento acolhedor.','ATIVO','2026-05-13 14:34:43','2026-05-13 14:34:43'),(2,'NOSSOS ESPAÇOS','2003-05-04','Ao longo do tempo a casa do barista foi desenvolvendo varios outros espaços','ATIVO','2026-05-15 15:29:26','2026-05-15 15:29:26'),(3,'MÉTODO DE TRABALHO','2007-06-07','Desenvolvemos uma forma de trabalhar com classe e de forma diferenciada','ATIVO','2026-05-15 15:36:25','2026-05-15 15:36:25'),(4,'NOSSOS PARCEIROS','2010-02-05','Com o passar do tempo, a casa do barista foi conquistando parceiros que hoje nao vivemos sem','ATIVO','2026-05-15 16:07:54','2026-05-15 16:07:54'),(5,'NOSSO PRIMEIRO CAFÉ','2001-01-01','Nosso primeiro café foi o café longo, não apenas um café, faz parte da nossa historia','ATIVO','2026-05-15 16:10:23','2026-05-15 16:10:23');
/*!40000 ALTER TABLE `tbl_linha_tempo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_news` (
  `id_news` int NOT NULL AUTO_INCREMENT,
  `email_news` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `aceite_news` int NOT NULL DEFAULT '1',
  `data_criacao_news` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_news` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_news`),
  UNIQUE KEY `email_news` (`email_news`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_news`
--

LOCK TABLES `tbl_news` WRITE;
/*!40000 ALTER TABLE `tbl_news` DISABLE KEYS */;
INSERT INTO `tbl_news` VALUES (1,'pedro@gmail.com',1,'2026-05-13 14:20:58','2026-05-13 14:20:58'),(2,'joao@gmail.com',1,'2026-05-15 15:00:37','2026-05-15 15:00:37'),(3,'gabriela@yahoo.com',1,'2026-05-15 15:02:29','2026-05-15 15:02:29'),(4,'kauamoreira@gmail.com',1,'2026-05-15 15:03:38','2026-05-15 15:03:38'),(5,'thiago@gmail.com',1,'2026-05-15 15:05:32','2026-05-15 15:05:32'),(6,'edilso@gamil.com',1,'2026-05-15 15:06:48','2026-05-15 15:06:48');
/*!40000 ALTER TABLE `tbl_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produto`
--

DROP TABLE IF EXISTS `tbl_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_produto` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `id_categoria` int NOT NULL,
  `descricao_curta_produto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao_longa_produto` text COLLATE utf8mb4_general_ci,
  `valor_produto` double(6,2) NOT NULL,
  `imagem_produto` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `destaque_produto` int NOT NULL DEFAULT '0',
  `status_produto` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_produto`),
  KEY `fk_produto_categoria` (`id_categoria`),
  CONSTRAINT `fk_produto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `tbl_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produto`
--

LOCK TABLES `tbl_produto` WRITE;
/*!40000 ALTER TABLE `tbl_produto` DISABLE KEYS */;
INSERT INTO `tbl_produto` VALUES (1,'Café longo',1,'Café longo feito na maquina','Café Gourmert das montanhas frias do monte centro oeste',9.90,'produto/cafe_longo.png',1,'ATIVO','2026-05-13 15:02:56','2026-05-21 17:16:21'),(2,'Bolo de morango',2,'Bolo em fatia','Bolo feito especialmente para pessoas diabeticas. Bolo pensado para todos',10.90,'produto/bolo_morango.png',2,'ATIVO','2026-05-15 16:52:35','2026-05-15 16:52:35'),(3,'Chá gelado',3,'Chá gelado grande','Chá gelado tradicional da alemanha, relaxar a mente',8.50,'produto/cha_gelado_grande.png',3,'ATIVO','2026-05-15 16:56:52','2026-05-15 16:56:52'),(4,'Coxinha natural',4,'Coxinha natural grande','Coxinha natural grande, feita para pessoas que querem comer algo não tão calorico',10.90,'produto/coxinha_natural_grande.png',4,'ATIVO','2026-05-15 16:59:56','2026-05-15 16:59:56'),(5,'Suco de laranja',5,'Suco de laranja natural','Suco de laranja natural, suco dedicado a pessoas com o intuito de ser bom para a saúde',13.90,'produto/suco_laranja_natural.jpeg',5,'ATIVO','2026-05-15 17:03:09','2026-05-15 17:03:09'),(6,'Café espresso',6,'Café espresso com desenho de coração','Um café com o coração em cima, com o intuito de nao só um café, e sim a experiencia',10.90,'produto/cafe_espresso_com_coracao.jpeg',6,'ATIVO','2026-05-15 17:05:58','2026-05-15 17:05:58');
/*!40000 ALTER TABLE `tbl_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario_venda`
--

DROP TABLE IF EXISTS `tbl_usuario_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_usuario_venda` (
  `id_usuario_venda` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_venda` int NOT NULL,
  `data_criacao_usuario_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_usuario_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario_venda`),
  KEY `fk_usuario_venda_usuario` (`id_usuario`),
  KEY `fk_usuario_venda_venda` (`id_venda`),
  CONSTRAINT `fk_usuario_venda_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuarios`),
  CONSTRAINT `fk_usuario_venda_venda` FOREIGN KEY (`id_venda`) REFERENCES `tbl_venda` (`id_venda`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario_venda`
--

LOCK TABLES `tbl_usuario_venda` WRITE;
/*!40000 ALTER TABLE `tbl_usuario_venda` DISABLE KEYS */;
INSERT INTO `tbl_usuario_venda` VALUES (1,1,1,'2026-05-13 16:39:58','2026-05-13 16:39:58'),(2,2,2,'2026-05-18 13:55:48','2026-05-18 13:55:48'),(3,3,3,'2026-05-18 13:55:57','2026-05-18 13:55:57'),(4,4,4,'2026-05-18 13:56:04','2026-05-18 13:56:04'),(5,5,5,'2026-05-18 13:56:20','2026-05-18 13:56:20'),(6,6,6,'2026-05-18 13:56:28','2026-05-18 13:56:28');
/*!40000 ALTER TABLE `tbl_usuario_venda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_usuarios` (
  `id_usuarios` int NOT NULL AUTO_INCREMENT,
  `nome_usuarios` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email_usuarios` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `senha_usuarios` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_usuarios` varchar(65) COLLATE utf8mb4_general_ci NOT NULL,
  `nivel_usuarios` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `status_usuarios` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_usuarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_usuarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (1,'Pedro Silva','pedro@casadobarista.com','senha123','usuario/pedro_da_silva.png','ADMINISTRADOR','ATIVO','2026-05-13 15:07:54','2026-05-13 15:07:54'),(2,'Gabriel Hamer','gabriel@casadobarista.com','gabriel123','usuario/gabriel_hamer.png','ADMINISTRADOR','ATIVO','2026-05-15 17:08:43','2026-05-15 17:08:43'),(3,'Kauã Moreira','kaua@casadobarista.com','kaua123','usuario/kaua_moreira.png','ADMINISTRADOR','ATIVO','2026-05-15 17:10:18','2026-05-15 17:10:18'),(4,'Fernando Santos','fernando@casadobarista.com','fernando1234','usuario/fernando_santos.png','ADMINISTRADOR','ATIVO','2026-05-15 17:11:48','2026-05-15 17:11:48'),(5,'Junior de Souza','junior@casadobarista.com','junior123','usuario/junior_souza.png','ADMINISTRADOR','ATIVO','2026-05-15 17:13:39','2026-05-15 17:13:39'),(6,'Isabela Aguiar','isabela@casadobarista.com','isabela123','usuario/isabela.png','ADMINISTRADOR','ATIVO','2026-05-15 17:15:09','2026-05-15 17:15:09');
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_venda`
--

DROP TABLE IF EXISTS `tbl_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_venda` (
  `id_venda` int NOT NULL AUTO_INCREMENT,
  `data_hora_venda` datetime NOT NULL,
  `valor_total_venda` double(10,2) NOT NULL,
  `forma_pagamento_venda` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `id_cliente` int NOT NULL,
  `status_venda` varchar(12) COLLATE utf8mb4_general_ci DEFAULT 'EM ANDAMENTO',
  `observacao_venda` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_venda`),
  KEY `fk_venda_cliente` (`id_cliente`),
  CONSTRAINT `fk_venda_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_venda`
--

LOCK TABLES `tbl_venda` WRITE;
/*!40000 ALTER TABLE `tbl_venda` DISABLE KEYS */;
INSERT INTO `tbl_venda` VALUES (1,'2026-05-13 16:36:19',27.80,'DINHEIRO',1,'EM ANDAMENTO','Está na mesa 27.','2026-05-13 16:36:19','2026-05-22 14:28:26'),(2,'2026-05-18 13:47:57',21.80,'DÉBITO',2,'FINALIZADA','Está na mesa 02','2026-05-18 13:47:57','2026-05-18 14:37:36'),(3,'2026-05-18 13:49:00',17.00,'CRÉDITO',3,'FINALIZADA','Está na mesa 08','2026-05-18 13:49:00','2026-05-18 14:38:16'),(4,'2026-05-18 13:50:02',10.90,'DÉBITO',4,'FINALIZADA','Está na mesa 10','2026-05-18 13:50:02','2026-05-18 14:40:19'),(5,'2026-05-18 13:51:16',0.00,'CRÈDITO',4,'FINALIZADA','Está na mesa 10','2026-05-18 13:51:16','2026-05-18 14:40:50'),(6,'2026-05-18 13:52:02',0.00,'DÉBITO',5,'FINALIZADA','Está na mesa 11','2026-05-18 13:52:02','2026-05-18 14:41:08'),(7,'2026-05-18 13:53:01',0.00,'AGUARDANDO',6,'EM ANDAMENTO','Está na mesa 12','2026-05-18 13:53:01','2026-05-18 13:53:01');
/*!40000 ALTER TABLE `tbl_venda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-09-09 17:33:39
