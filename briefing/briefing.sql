-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.31-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para briefing
CREATE DATABASE IF NOT EXISTS `briefing` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `briefing`;

-- Copiando estrutura para tabela briefing.ficha
CREATE TABLE IF NOT EXISTS `ficha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `campanha` varchar(100) DEFAULT NULL,
  `peca_banner` varchar(15) DEFAULT NULL,
  `peca_panfleto` varchar(15) DEFAULT NULL,
  `peca_outdoor` varchar(15) DEFAULT NULL,
  `peca_folder` varchar(10) DEFAULT NULL,
  `peca_camisa` varchar(15) DEFAULT NULL,
  `peca_cartaz` varchar(15) DEFAULT NULL,
  `outro_pecas` varchar(100) DEFAULT NULL,
  `ideia_central` varchar(150) DEFAULT NULL,
  `publico` varchar(100) DEFAULT NULL,
  `veiculo_site` varchar(10) DEFAULT NULL,
  `veiculo_rede_social` varchar(15) DEFAULT NULL,
  `veiculo_email` varchar(15) DEFAULT NULL,
  `veiculo_impresso` varchar(15) DEFAULT NULL,
  `veiculo_brinde` varchar(15) DEFAULT NULL,
  `outro_veiculo` varchar(50) DEFAULT NULL,
  `tamanho_a4` varchar(10) DEFAULT NULL,
  `tamanho_a3` varchar(10) DEFAULT NULL,
  `tamanho_a5` varchar(10) DEFAULT NULL,
  `tamanho_outdoor` varchar(10) DEFAULT NULL,
  `tamanho_quadrado` varchar(10) DEFAULT NULL,
  `tamanho_tv` varchar(10) DEFAULT NULL,
  `tamanho_stories` varchar(10) DEFAULT NULL,
  `outro_tamanho` varchar(20) DEFAULT NULL,
  `prazo` datetime DEFAULT NULL,
  `observacoes` varchar(150) DEFAULT NULL,
  `data_entrada` datetime DEFAULT NULL,
  `data_saida` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela briefing.ficha: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `ficha` DISABLE KEYS */;
INSERT INTO `ficha` (`id`, `nome`, `campanha`, `peca_banner`, `peca_panfleto`, `peca_outdoor`, `peca_folder`, `peca_camisa`, `peca_cartaz`, `outro_pecas`, `ideia_central`, `publico`, `veiculo_site`, `veiculo_rede_social`, `veiculo_email`, `veiculo_impresso`, `veiculo_brinde`, `outro_veiculo`, `tamanho_a4`, `tamanho_a3`, `tamanho_a5`, `tamanho_outdoor`, `tamanho_quadrado`, `tamanho_tv`, `tamanho_stories`, `outro_tamanho`, `prazo`, `observacoes`, `data_entrada`, `data_saida`, `status`) VALUES
	(4, 'Lucas Lucas', 'Fac', 'on', 'off', 'on', 'off', 'off', 'off', '', '', '', 'off', 'on', 'off', 'off', 'off', '', 'on', 'on', 'off', 'off', 'on', 'off', 'off', '', '2019-01-01 00:00:00', '', '2019-01-02 00:00:00', '2019-01-04 00:00:00', 'Finalizado'),
	(5, 'dad', 'ada', 'off', 'on', 'off', 'off', 'off', 'off', '', '', '', 'on', 'off', 'off', 'off', 'off', '', 'off', 'on', 'off', 'off', 'off', 'off', 'off', '', '2019-07-09 00:00:00', '', '2019-07-09 00:00:00', '2019-07-09 00:00:00', 'Pendente'),
	(6, 'dasa', 'da', 'off', 'on', 'off', 'off', 'off', 'off', '', '', '', 'on', 'off', 'off', 'off', 'off', '', 'off', 'on', 'off', 'off', 'off', 'off', 'off', '', '2019-07-13 00:00:00', '', '2019-07-11 00:00:00', '2019-07-24 00:00:00', 'Finalizado'),
	(7, 'ads', 'sdas', 'off', 'on', 'off', 'off', 'off', 'off', 'sdasas', '', '', 'on', 'off', 'off', 'off', 'off', '', 'off', 'on', 'off', 'off', 'off', 'off', 'off', '', '2019-07-12 00:00:00', '', '2019-07-18 00:00:00', '2019-07-26 00:00:00', 'Cancelado'),
	(8, 'adas', 'as', 'off', 'on', 'off', 'off', 'off', 'peca_cartaz', '', 'dasad', 'sdaas', 'on', 'off', 'off', 'off', 'off', '', 'off', 'on', 'off', 'off', 'off', 'off', 'off', '', '2019-07-03 00:00:00', '', '2019-07-20 00:00:00', '2019-07-17 00:00:00', 'Novo');
/*!40000 ALTER TABLE `ficha` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
