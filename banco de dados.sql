-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para tandorium
CREATE DATABASE IF NOT EXISTS `tandorium` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tandorium`;

-- Copiando estrutura para tabela tandorium.avaliacoes
CREATE TABLE IF NOT EXISTS `avaliacoes` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL DEFAULT '',
  `cod_filme` int(11) NOT NULL,
  PRIMARY KEY (`cod`),
  KEY `FK_avaliacoes_usuarios` (`usuario`),
  KEY `FK_avaliacoes_filmes` (`cod_filme`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tandorium.avaliacoes: 3 rows
/*!40000 ALTER TABLE `avaliacoes` DISABLE KEYS */;
INSERT INTO `avaliacoes` (`cod`, `usuario`, `cod_filme`) VALUES
	(1, 'admin@gmail.com', 8),
	(2, 'admin@gmail.com', 28),
	(3, 'admin@gmail.com', 1);
/*!40000 ALTER TABLE `avaliacoes` ENABLE KEYS */;

-- Copiando estrutura para tabela tandorium.filmes
CREATE TABLE IF NOT EXISTS `filmes` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path_poster` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path_teaser` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `curtidas` int(11) DEFAULT '0',
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela tandorium.filmes: 11 rows
/*!40000 ALTER TABLE `filmes` DISABLE KEYS */;
INSERT INTO `filmes` (`cod`, `nome`, `path_poster`, `path_teaser`, `categoria`, `curtidas`) VALUES
	(1, 'O contador', 'img/uploads/OContador.jpg', 'https://youtu.be/AP3fTyPoxgQ', 'matematica', 1),
	(2, '1917', 'img/uploads/1917.jpg', 'https://youtu.be/_3gy6K7LXHg', 'historia', 0),
	(3, 'Donald no País da Matemágica', 'img/uploads/DonaldNoPaisDaMatemagica.jpg', 'https://youtu.be/wbftu093Yqk', 'matematica', 0),
	(4, 'Uma Mente Brilhante', 'img/uploads/MenteBrilhante.jpg', 'https://youtu.be/q8vUMD1f0ss', 'matematica', 0),
	(5, 'Blade Runner 2049', 'img/uploads/BladeRunner2049.jpg', 'https://youtu.be/xGwe7D0RKWc', 'informatica', 0),
	(6, 'A Teoria de Tudo', 'img/uploads/ATeoriaDeTudo.jpg', 'https://youtu.be/SbUVNHdPE4w', 'matematica', 0),
	(7, 'Cruzada', 'img/uploads/Cruzada.jpg', 'https://youtu.be/KartNo8EDWY', 'historia', 0),
	(8, 'Diario de Anne Frank', 'img/uploads/DiarioDeAnneFrank.jpg', 'https://youtu.be/Tl3PmmgQvUo', 'historia', 1),
	(9, 'JOBS', 'img/uploads/JOBS.jpg', 'https://youtu.be/IeOxo7o9T8Q', 'informatica', 0),
	(10, 'Os Sete de Chicago', 'img/uploads/OsSeteDeChicago.jpg', 'https://youtu.be/hunYgcovmjQ', 'historia', 0),
	(11, 'The Imitation Game', 'img/uploads/OJogoDaImitacao.jpg', 'https://youtu.be/YIkKbMcJL_4', 'informatica', 0);
/*!40000 ALTER TABLE `filmes` ENABLE KEYS */;

-- Copiando estrutura para tabela tandorium.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `cod` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tandorium.usuarios: 4 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`cod`, `username`, `password`, `email`) VALUES
	(1, 'admin', 'admin', 'admin@gmail.com'),
	(3, 'Djulho', 'batatadoce', 'djulho@gmail.com'),
	(4, 'Guilherme Bonotto', '12345', 'gui@gmail.com'),
	(5, 'Usuario', '123', 'diegobresko@gmail.com');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
