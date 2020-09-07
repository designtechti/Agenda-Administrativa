-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.13-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Linux Mint
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para agenda
CREATE DATABASE IF NOT EXISTS `agenda` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_520_ci */;
USE `agenda`;

-- Copiando estrutura para tabela agenda.compromissos
CREATE TABLE IF NOT EXISTS `compromissos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `compromisso` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela agenda.compromissos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `compromissos` DISABLE KEYS */;
INSERT INTO `compromissos` (`id`, `titulo`, `data`, `hora`, `compromisso`) VALUES
	(1, 'Festejar o aniversÃ¡rio', '0000-00-00', '19:00:00', '<p>O Prof&ordm; Paulo vai tomar ovada antes de sair!! muahahaha</p>\r\n'),
	(2, 'Compromisso do Marlon', '0000-00-00', '19:00:00', '<p>Quer dar a bunda</p>\r\n'),
	(8, 'Fermanco', '2017-06-22', '19:00:00', '<p>Quer parar de mancar hahaha</p>\r\n');
/*!40000 ALTER TABLE `compromissos` ENABLE KEYS */;

-- Copiando estrutura para tabela agenda.contatos
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGrupo` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela agenda.contatos: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` (`id`, `idGrupo`, `nome`, `telefone`) VALUES
	(1, 1, 'Fermanco', '(65) 465.46.46.50'),
	(2, 0, 'Fermanco', '(65) 465.46.54.65'),
	(3, 0, 'Fermanco', '(54) 545.45.45.45'),
	(4, 0, 'Fermanco', '(54) 545.45.45.45'),
	(5, 1, 'Fermanco', '(65) 465.46.54.65');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;

-- Copiando estrutura para tabela agenda.grupos
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela agenda.grupos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
INSERT INTO `grupos` (`id`, `nome`) VALUES
	(1, 'Gangue do Sabonete'),
	(8, '56.4564566'),
	(9, 'paulo');
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;

-- Copiando estrutura para tabela agenda.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela agenda.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`) VALUES
	(1, 'Marcelo Junior', 'Marcelo', 'e10adc3949ba59abbe56e057f20f883e');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
