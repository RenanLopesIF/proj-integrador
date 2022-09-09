-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: if_projeto_integrador
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carrinhos`
--

DROP TABLE IF EXISTS `carrinhos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrinhos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `carrinhos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrinhos`
--

LOCK TABLES `carrinhos` WRITE;
/*!40000 ALTER TABLE `carrinhos` DISABLE KEYS */;
INSERT INTO `carrinhos` VALUES (1,5);
/*!40000 ALTER TABLE `carrinhos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_carrinho` int(11) NOT NULL,
  `id_pagamento` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_carrinho` (`id_carrinho`),
  KEY `id_pagamento` (`id_pagamento`),
  CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_carrinho`) REFERENCES `carrinhos` (`id`),
  CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`id_pagamento`) REFERENCES `pagamentos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
INSERT INTO `compras` VALUES (1,5,1,3),(2,5,1,4),(3,5,1,5),(4,5,1,6),(7,5,1,9),(8,5,1,10),(9,5,1,11),(11,5,1,13),(12,5,1,14),(13,5,1,15),(14,5,1,16),(15,5,1,17),(16,5,1,18),(17,5,1,19),(18,5,1,20),(19,5,1,21),(20,5,1,22),(21,5,1,23),(22,5,1,24),(23,5,1,25),(24,5,1,26),(25,5,1,27),(26,5,1,28);
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credenciais`
--

DROP TABLE IF EXISTS `credenciais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credenciais` (
  `username` varchar(30) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `credenciais_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credenciais`
--

LOCK TABLES `credenciais` WRITE;
/*!40000 ALTER TABLE `credenciais` DISABLE KEYS */;
INSERT INTO `credenciais` VALUES ('admin',5,'admin','2022-09-09 12:34:32');
/*!40000 ALTER TABLE `credenciais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(30) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `rua` varchar(60) NOT NULL,
  `numero` varchar(8) NOT NULL,
  `cep` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecos`
--

LOCK TABLES `enderecos` WRITE;
/*!40000 ALTER TABLE `enderecos` DISABLE KEYS */;
INSERT INTO `enderecos` VALUES (5,'Brasil','Minas Gerais','Berilo','Pedreira','Rua das Pratas','1000','58742001'),(6,'Brasil','Minas Gerais','Francisco Badaró','Palmeira','Rua Horta','54','58742000'),(7,'Brasil','São Paulo','Osasco','Diamante Negro','Rua das Pratas','589','58742000'),(8,'Brasil','São Paulo','Osasco','Diamante Negro','Rua das Pratas','589','58742000'),(9,'Brasil','São Paulo','Osasco','Diamante Negro','Rua das Pratas','589','58742000'),(10,'Brasil','São Paulo','Itinga','Palmeira','Rua Osmar Viana','698','35877000');
/*!40000 ALTER TABLE `enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estoque_livros`
--

DROP TABLE IF EXISTS `estoque_livros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estoque_livros` (
  `cod` int(11) NOT NULL,
  `id_endereco` int(11) DEFAULT NULL,
  `preco` float NOT NULL,
  `qtd` int(11) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`cod`),
  KEY `id_endereco` (`id_endereco`),
  CONSTRAINT `estoque_livros_ibfk_1` FOREIGN KEY (`id_endereco`) REFERENCES `enderecos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estoque_livros`
--

LOCK TABLES `estoque_livros` WRITE;
/*!40000 ALTER TABLE `estoque_livros` DISABLE KEYS */;
INSERT INTO `estoque_livros` VALUES (999,10,20,45,'2022-09-08 11:50:51','2022-09-07 11:56:52'),(12345,6,55.9,45,'2022-09-08 11:50:51','2022-09-05 20:34:58');
/*!40000 ALTER TABLE `estoque_livros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formas_pagamento`
--

DROP TABLE IF EXISTS `formas_pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formas_pagamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formas_pagamento`
--

LOCK TABLES `formas_pagamento` WRITE;
/*!40000 ALTER TABLE `formas_pagamento` DISABLE KEYS */;
INSERT INTO `formas_pagamento` VALUES (1,'cartao','2022-09-06 11:23:35'),(2,'boleto','2022-09-06 11:23:39');
/*!40000 ALTER TABLE `formas_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `livros`
--

DROP TABLE IF EXISTS `livros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_lote` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `editora` varchar(60) NOT NULL,
  `edicao` varchar(30) NOT NULL,
  `ano_publicacao` int(4) NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `total_paginas` int(11) NOT NULL,
  `sinopse` text DEFAULT NULL,
  `url_capa` varchar(256) DEFAULT NULL,
  `tipo_de_capa` varchar(30) DEFAULT NULL,
  `conservacao` varchar(30) DEFAULT NULL,
  `genero` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_lote` (`cod_lote`),
  CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`cod_lote`) REFERENCES `estoque_livros` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livros`
--

LOCK TABLES `livros` WRITE;
/*!40000 ALTER TABLE `livros` DISABLE KEYS */;
INSERT INTO `livros` VALUES (1,12345,'O Homem que Fugiu pra Lua','Ivani Egalon','Modi','1',2015,'en-US',212,'História do homem que foi viver na lua após desistir da humanidade','https://m.media-amazon.com/images/I/513nNQj5WHL.jpg','dura','Novo','Ciência','2022-09-05 20:40:34','2022-09-08 21:06:58',NULL),(2,999,'Power','Guido','Modi','1',2022,'pt-BR',144,'A força do power','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfyE97wEgbQ_HWARY67SGNXkKlWglOZRxcFw&usqp=CAU','dura','Novo','ficção','2022-09-07 11:58:27','2022-09-07 11:58:27',NULL);
/*!40000 ALTER TABLE `livros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `livros_carrinho`
--

DROP TABLE IF EXISTS `livros_carrinho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `livros_carrinho` (
  `id_livro` int(11) NOT NULL,
  `id_carrinho` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `order` int(11) NOT NULL DEFAULT -1,
  PRIMARY KEY (`order`,`id_livro`,`id_carrinho`),
  KEY `id_livro` (`id_livro`),
  KEY `id_carrinho` (`id_carrinho`),
  CONSTRAINT `livros_carrinho_ibfk_1` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id`),
  CONSTRAINT `livros_carrinho_ibfk_2` FOREIGN KEY (`id_carrinho`) REFERENCES `carrinhos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livros_carrinho`
--

LOCK TABLES `livros_carrinho` WRITE;
/*!40000 ALTER TABLE `livros_carrinho` DISABLE KEYS */;
INSERT INTO `livros_carrinho` VALUES (2,1,6,-1),(1,1,2,0),(2,1,3,0),(1,1,3,1),(2,1,2,1);
/*!40000 ALTER TABLE `livros_carrinho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagamentos`
--

DROP TABLE IF EXISTS `pagamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_forma_pgt` int(11) NOT NULL,
  `valor` float NOT NULL,
  `parcelas` int(2) NOT NULL,
  `data_emissao` datetime DEFAULT current_timestamp(),
  `data_vencimento` date NOT NULL,
  `status` enum('pendente','vencido','pago') DEFAULT 'pendente',
  PRIMARY KEY (`id`),
  KEY `id_forma_pgt` (`id_forma_pgt`),
  CONSTRAINT `pagamentos_ibfk_1` FOREIGN KEY (`id_forma_pgt`) REFERENCES `formas_pagamento` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagamentos`
--

LOCK TABLES `pagamentos` WRITE;
/*!40000 ALTER TABLE `pagamentos` DISABLE KEYS */;
INSERT INTO `pagamentos` VALUES (1,2,111.8,1,'2022-09-06 11:24:19','2022-09-10','pendente'),(2,2,111.8,1,'2022-09-06 11:50:04','2022-09-10','pendente'),(3,2,111.8,1,'2022-09-06 11:51:17','2022-09-10','pendente'),(4,1,167.7,10,'2022-09-07 16:47:22','2022-09-13','pago'),(5,1,207.7,2,'2022-09-07 16:49:25','2022-09-13','pago'),(6,1,60,2,'2022-09-07 16:54:39','2022-09-13','pago'),(9,1,140,2,'2022-09-07 17:06:00','2023-05-10','pago'),(10,1,80,2,'2022-09-07 17:20:21','2022-09-13','pago'),(11,1,20,2,'2022-09-07 17:43:46','2022-09-13','pago'),(13,1,60,2,'2022-09-07 17:45:58','2023-05-10','pago'),(14,1,60,2,'2022-09-07 17:46:03','2023-05-10','pago'),(15,1,60,2,'2022-09-07 17:46:58','2023-05-10','pago'),(16,1,60,2,'2022-09-08 00:49:46','2023-05-10','pago'),(17,1,227.7,2,'2022-09-08 01:04:17','2023-05-10','pago'),(18,1,227.7,2,'2022-09-08 01:05:43','2023-05-10','pago'),(19,1,303.6,2,'2022-09-08 01:06:35','2023-05-10','pago'),(20,1,303.6,2,'2022-09-08 01:07:50','2023-05-10','pago'),(21,1,303.6,2,'2022-09-08 11:05:24','2023-05-10','pago'),(22,1,303.6,2,'2022-09-08 11:06:02','2023-05-10','pago'),(23,1,60,2,'2022-09-08 11:37:50','2023-05-10','pago'),(24,1,60,2,'2022-09-08 11:38:55','2023-05-10','pago'),(25,1,80,2,'2022-09-08 11:39:13','2023-05-10','pago'),(26,1,171.8,2,'2022-09-08 11:50:11','2023-05-10','pago'),(27,1,171.8,2,'2022-09-08 11:50:17','2023-05-10','pago'),(28,1,379.5,2,'2022-09-08 11:50:51','2023-05-10','pago');
/*!40000 ALTER TABLE `pagamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_de_usuario`
--

DROP TABLE IF EXISTS `tipos_de_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_de_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_de_usuario`
--

LOCK TABLES `tipos_de_usuario` WRITE;
/*!40000 ALTER TABLE `tipos_de_usuario` DISABLE KEYS */;
INSERT INTO `tipos_de_usuario` VALUES (1,'cliente','2022-09-08 20:16:27','2022-09-08 20:16:39'),(2,'admin','2022-09-05 20:21:25','2022-09-05 20:21:25');
/*!40000 ALTER TABLE `tipos_de_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_endereco` int(11) NOT NULL,
  `id_tipo_de_usuario` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` enum('M','F','IND') DEFAULT 'IND',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`),
  KEY `id_endereco` (`id_endereco`),
  KEY `id_tipo_de_usuario` (`id_tipo_de_usuario`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_endereco`) REFERENCES `enderecos` (`id`),
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_tipo_de_usuario`) REFERENCES `tipos_de_usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (5,5,2,'Admin','35999650054','rfl5@aluno.ifnmg.edu.br','33999999999','2010-10-10','M','2022-09-05 20:32:31','2022-09-09 09:32:12'),(6,7,2,'Teste','11122233345','teste@teste.com','33967542108','2022-09-04','M','2022-09-05 21:29:04','2022-09-05 21:29:04'),(7,8,2,'Teste2','11122233346','teste2@teste.com','33967542108','2022-09-04','M','2022-09-05 21:30:42','2022-09-05 21:30:42'),(8,9,2,'Teste3','11122233347','teste3@teste.com','33967542108','2022-09-04','M','2022-09-05 21:49:47','2022-09-05 21:49:47');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger gerar_carrinho after 
	insert on usuarios
		FOR EACH ROW 
        BEGIN
			insert into carrinhos
				values(default, NEW.id);
         END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Dumping routines for database 'if_projeto_integrador'
--
/*!50003 DROP PROCEDURE IF EXISTS `finalizar_compra` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `finalizar_compra`(
  in idUsuario integer,
  in formaPgt integer,
  in parcelas int(11),
  in vencimento date,
  in status enum('pendente','pago'))
begin
	  	set @carrinhoId = (select id from carrinhos where id_usuario = idUsuario);
		set @valorTotal = (select sum(el.preco*lc.qtd)
            from livros_carrinho lc
            inner join livros l on l.id = lc.id_livro
            inner join estoque_livros el on l.cod_lote=el.cod
            where lc.id_carrinho = @carrinhoId);
	  
       insert into pagamentos
       	values(default, formaPgt, @valorTotal, parcelas, default, vencimento, status);
       
       set @idPagamento = last_insert_id();
       
       insert into compras 
       values(default, idUsuario, @carrinhoId, @idPagamento);
      
      	update estoque_livros el 
			join livros l on l.cod_lote = el.cod 
			join livros_carrinho lc on lc.id_livro = l.id 
			join carrinhos c on c.id = lc.id_carrinho 
			set el.qtd = el.qtd - lc.qtd 
		where c.id_usuario = idUsuario and lc.`order`= -1;
      
      update livros_carrinho 
		set `order` = (SELECT `order`+1 FROM livros_carrinho where id_carrinho = @carrinhoId ORDER BY `order` DESC LIMIT 1)
		where id_carrinho = @carrinhoId and `order` = -1;
	
	end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-09 12:37:11
