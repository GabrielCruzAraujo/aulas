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


-- Copiando estrutura do banco de dados para ponto
CREATE DATABASE IF NOT EXISTS `ponto` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ponto`;

-- Copiando estrutura para tabela ponto.abono
CREATE TABLE IF NOT EXISTS `abono` (
  `nr_abono` int(12) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(6) NOT NULL,
  `matricula` int(8) DEFAULT NULL,
  `nr_vinculo` int(1) DEFAULT NULL,
  `data_abono` datetime DEFAULT NULL,
  `periodo_abono` int(4) DEFAULT NULL,
  `justificativa` text,
  `id_pessoa_certificacao` int(6) DEFAULT NULL,
  `data_hora_certificacao` datetime DEFAULT NULL,
  `indicador_certificado` char(1) DEFAULT NULL,
  `id_pessoa_registro` int(6) NOT NULL,
  `data_hora_registro` datetime NOT NULL,
  `ip_registro` varchar(39) NOT NULL,
  `justificativa_certificacao` varchar(512) DEFAULT NULL,
  `nr_justificativa` int(2) DEFAULT NULL,
  `indicador_excluido` char(1) DEFAULT NULL,
  PRIMARY KEY (`nr_abono`),
  KEY `nr_justificativa` (`nr_justificativa`),
  KEY `matricula` (`matricula`,`nr_vinculo`),
  CONSTRAINT `abono_ibfk_2` FOREIGN KEY (`matricula`) REFERENCES `dado_funcional` (`matricula`),
  CONSTRAINT `abono_ibfk_5` FOREIGN KEY (`nr_justificativa`) REFERENCES `justificativa_ajuste` (`nr_justificativa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.ajuste
CREATE TABLE IF NOT EXISTS `ajuste` (
  `nr_ajuste` int(12) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(6) NOT NULL,
  `matricula` int(8) DEFAULT NULL,
  `nr_vinculo` int(1) DEFAULT NULL,
  `data_hora_ponto` datetime NOT NULL,
  `entrada_saida` char(1) NOT NULL,
  `id_pessoa_registro` int(6) NOT NULL,
  `data_hora_registro` datetime NOT NULL,
  `ip_registro` varchar(39) NOT NULL,
  `justificativa` text,
  `id_pessoa_certificacao` int(6) DEFAULT NULL,
  `data_hora_certificacao` datetime DEFAULT NULL,
  `indicador_certificado` char(1) DEFAULT NULL,
  `nr_ponto` int(12) DEFAULT NULL,
  `nr_justificativa` int(2) DEFAULT NULL,
  `justificativa_certificacao` varchar(512) DEFAULT NULL,
  `indicador_excluido` char(1) DEFAULT NULL,
  PRIMARY KEY (`nr_ajuste`),
  KEY `matricula` (`matricula`,`nr_vinculo`),
  KEY `nr_ponto` (`nr_ponto`),
  KEY `nr_justificativa` (`nr_justificativa`),
  CONSTRAINT `ajuste_ibfk_2` FOREIGN KEY (`matricula`) REFERENCES `dado_funcional` (`matricula`),
  CONSTRAINT `ajuste_ibfk_5` FOREIGN KEY (`nr_ponto`) REFERENCES `ponto` (`nr_ponto`),
  CONSTRAINT `ajuste_ibfk_6` FOREIGN KEY (`nr_justificativa`) REFERENCES `justificativa_ajuste` (`nr_justificativa`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.arquivo_ajuste
CREATE TABLE IF NOT EXISTS `arquivo_ajuste` (
  `nr_arquivo_ajuste` int(12) NOT NULL AUTO_INCREMENT,
  `nr_ajuste` int(12) DEFAULT NULL,
  `nr_abono` int(12) DEFAULT NULL,
  `cod_repositorio` varchar(12) NOT NULL,
  `descricao_arquivo` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`nr_arquivo_ajuste`),
  KEY `nr_ajuste` (`nr_ajuste`),
  KEY `nr_abono` (`nr_abono`),
  KEY `cod_repositorio` (`cod_repositorio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.calendario_feriados
CREATE TABLE IF NOT EXISTS `calendario_feriados` (
  `dia` int(2) NOT NULL,
  `mes` int(2) NOT NULL,
  `ano` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(3) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(255) NOT NULL,
  `regime_trabalho` char(2) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.ch_mes_servidor
CREATE TABLE IF NOT EXISTS `ch_mes_servidor` (
  `nr_cargahoraria` int(12) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(6) NOT NULL,
  `matricula` int(8) NOT NULL,
  `nr_vinculo` int(1) NOT NULL,
  `ano` int(4) NOT NULL,
  `mes` int(2) NOT NULL,
  `data_inicio_mes` datetime NOT NULL,
  `nr_minutos_trabalho` int(5) NOT NULL,
  `nr_minutos_abono` int(5) NOT NULL,
  `nr_minutos_afastamento` int(5) NOT NULL,
  `nr_minutos_previsto` int(5) NOT NULL,
  `nr_minutos_saldo` int(6) DEFAULT NULL,
  `id_pessoa_atualizacao` int(6) NOT NULL,
  `data_atualizacao` datetime NOT NULL,
  `ip_atualizacao` varchar(39) NOT NULL,
  `nr_minutos_compensacao` int(5) DEFAULT NULL,
  PRIMARY KEY (`nr_cargahoraria`),
  KEY `id_pessoa` (`id_pessoa`),
  KEY `matricula` (`matricula`,`nr_vinculo`),
  CONSTRAINT `ch_mes_servidor_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`),
  CONSTRAINT `ch_mes_servidor_ibfk_2` FOREIGN KEY (`matricula`) REFERENCES `dado_funcional` (`matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.compensacao
CREATE TABLE IF NOT EXISTS `compensacao` (
  `nr_compensacao` int(12) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(6) NOT NULL,
  `matricula` int(8) NOT NULL,
  `nr_vinculo` int(1) NOT NULL,
  `periodo_compensacao` int(5) NOT NULL,
  `data_compensacao` datetime DEFAULT NULL,
  `descricao_compensacao` varchar(512) DEFAULT NULL,
  `justificativa` varchar(512) DEFAULT NULL,
  `id_pessoa_registro` int(6) NOT NULL,
  `data_hora_registro` datetime NOT NULL,
  `ip_registro` varchar(39) NOT NULL,
  `id_pessoa_certificacao` int(6) DEFAULT NULL,
  `data_hora_certificacao` datetime DEFAULT NULL,
  `indicador_certificado` char(1) DEFAULT NULL,
  `justificativa_certificacao` varchar(512) DEFAULT NULL,
  `indicador_excluido` char(1) DEFAULT NULL,
  PRIMARY KEY (`nr_compensacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.dado_funcional
CREATE TABLE IF NOT EXISTS `dado_funcional` (
  `matricula` int(8) NOT NULL,
  `nr_vinculo` int(1) NOT NULL,
  `id_pessoa` int(6) NOT NULL,
  `regime_trabalho` char(2) NOT NULL,
  `id_grupo` int(2) NOT NULL,
  `id_categoria` int(3) NOT NULL,
  `orgao_lotacao` int(5) NOT NULL,
  `orgao_exercicio` int(5) NOT NULL,
  `data_ingresso` datetime NOT NULL,
  `data_desligamento` datetime DEFAULT NULL,
  `data_aposentadoria` datetime DEFAULT NULL,
  PRIMARY KEY (`matricula`,`nr_vinculo`),
  KEY `id_pessoa` (`id_pessoa`),
  KEY `id_grupo` (`id_grupo`),
  KEY `id_categoria` (`id_categoria`),
  KEY `orgao_lotacao` (`orgao_lotacao`),
  KEY `orgao_exercicio` (`orgao_exercicio`),
  CONSTRAINT `dado_funcional_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`),
  CONSTRAINT `dado_funcional_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `grupo_emprego` (`id_grupo`),
  CONSTRAINT `dado_funcional_ibfk_3` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  CONSTRAINT `dado_funcional_ibfk_4` FOREIGN KEY (`orgao_lotacao`) REFERENCES `orgao` (`id_orgao`),
  CONSTRAINT `dado_funcional_ibfk_5` FOREIGN KEY (`orgao_exercicio`) REFERENCES `orgao` (`id_orgao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.definicoes_orgao
CREATE TABLE IF NOT EXISTS `definicoes_orgao` (
  `id_orgao` int(5) NOT NULL,
  `hora_inicio_expediente` datetime DEFAULT NULL,
  `hora_fim_expediente` datetime DEFAULT NULL,
  `permite_ocorrencia` char(1) DEFAULT NULL,
  `id_pessoa_atualizacao` int(6) NOT NULL,
  `data_atualizacao` datetime NOT NULL,
  `hora_inicio_expediente_sabado` datetime DEFAULT NULL,
  `hora_fim_expediente_sabado` datetime DEFAULT NULL,
  `hora_inicio_expediente_domingo` datetime DEFAULT NULL,
  `hora_fim_expediente_domingo` datetime DEFAULT NULL,
  PRIMARY KEY (`id_orgao`),
  CONSTRAINT `definicoes_orgao_ibfk_1` FOREIGN KEY (`id_orgao`) REFERENCES `orgao` (`id_orgao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.frequencia
CREATE TABLE IF NOT EXISTS `frequencia` (
  `nr_frequencia` int(8) NOT NULL AUTO_INCREMENT,
  `matricula` int(8) NOT NULL,
  `nr_vinculo` int(1) NOT NULL,
  `nr_dias` int(11) NOT NULL,
  `data_frequencia` datetime NOT NULL,
  `data_fim_frequencia` datetime DEFAULT NULL,
  `cod_frequencia` int(3) NOT NULL,
  `data_inclusao` datetime NOT NULL,
  `data_atualizacao` datetime DEFAULT NULL,
  PRIMARY KEY (`nr_frequencia`),
  KEY `matricula` (`matricula`,`nr_vinculo`),
  KEY `tipo_frequencia` (`cod_frequencia`),
  CONSTRAINT `frequencia_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `dado_funcional` (`matricula`),
  CONSTRAINT `frequencia_ibfk_2` FOREIGN KEY (`cod_frequencia`) REFERENCES `tipo_frequencia` (`cod_frequencia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.grupo_emprego
CREATE TABLE IF NOT EXISTS `grupo_emprego` (
  `id_grupo` int(2) NOT NULL,
  `segmento_grupo` char(1) NOT NULL,
  `nome_grupo` varchar(150) NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.justificativa_ajuste
CREATE TABLE IF NOT EXISTS `justificativa_ajuste` (
  `nr_justificativa` int(2) NOT NULL AUTO_INCREMENT,
  `texto_justificativa` varchar(255) NOT NULL,
  `tipo_justificativa` char(1) DEFAULT NULL,
  PRIMARY KEY (`nr_justificativa`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.log_erro_acesso_registro
CREATE TABLE IF NOT EXISTS `log_erro_acesso_registro` (
  `nr_log` int(12) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(6) NOT NULL,
  `matricula` int(8) NOT NULL,
  `nr_vinculo` int(1) NOT NULL,
  `data_log` datetime NOT NULL,
  `mensagem_log` varchar(512) NOT NULL,
  `ip_log` varchar(39) NOT NULL,
  `host_log` varchar(100) NOT NULL,
  PRIMARY KEY (`nr_log`),
  KEY `id_pessoa` (`id_pessoa`),
  KEY `matricula` (`matricula`,`nr_vinculo`),
  CONSTRAINT `log_erro_acesso_registro_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`),
  CONSTRAINT `log_erro_acesso_registro_ibfk_2` FOREIGN KEY (`matricula`) REFERENCES `dado_funcional` (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.orgao
CREATE TABLE IF NOT EXISTS `orgao` (
  `id_orgao` int(5) NOT NULL AUTO_INCREMENT,
  `sigla_orgao` varchar(10) NOT NULL,
  `nome_orgao` varchar(255) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `matricula_dirigente` int(8) DEFAULT NULL,
  `matricula_substituto` int(8) DEFAULT NULL,
  `id_orgao_superior` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_orgao`),
  KEY `matricula_dirigente` (`matricula_dirigente`),
  KEY `matricula_substituto` (`matricula_substituto`),
  KEY `id_orgao_superior` (`id_orgao_superior`),
  CONSTRAINT `orgao_ibfk_1` FOREIGN KEY (`matricula_dirigente`) REFERENCES `dado_funcional` (`matricula`),
  CONSTRAINT `orgao_ibfk_2` FOREIGN KEY (`matricula_substituto`) REFERENCES `dado_funcional` (`matricula`),
  CONSTRAINT `orgao_ibfk_3` FOREIGN KEY (`id_orgao_superior`) REFERENCES `orgao` (`id_orgao`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.permissao
CREATE TABLE IF NOT EXISTS `permissao` (
  `id_aplicacao` int(6) NOT NULL,
  `id_pessoa` int(6) NOT NULL,
  `id_orgao` int(5) NOT NULL,
  `data_expiracao` datetime DEFAULT NULL,
  PRIMARY KEY (`id_aplicacao`,`id_pessoa`),
  KEY `id_pessoa` (`id_pessoa`),
  KEY `id_orgao` (`id_orgao`),
  CONSTRAINT `permissao_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`),
  CONSTRAINT `permissao_ibfk_2` FOREIGN KEY (`id_orgao`) REFERENCES `orgao` (`id_orgao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.pessoa
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id_pessoa` int(6) NOT NULL,
  `nome_pessoa` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tipo_foto` char(4) DEFAULT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.ponto
CREATE TABLE IF NOT EXISTS `ponto` (
  `nr_ponto` int(12) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(6) NOT NULL,
  `matricula` int(8) DEFAULT NULL,
  `nr_vinculo` int(1) DEFAULT NULL,
  `data_hora_ponto` datetime NOT NULL,
  `entrada_saida` char(1) NOT NULL,
  `id_pessoa_registro` int(6) NOT NULL,
  `data_hora_registro` datetime DEFAULT NULL,
  `ip_registro` varchar(39) NOT NULL,
  `ambiente_registro` text,
  PRIMARY KEY (`nr_ponto`),
  KEY `id_pessoa` (`id_pessoa`),
  KEY `matricula` (`matricula`,`nr_vinculo`),
  KEY `id_pessoa_registro` (`id_pessoa_registro`),
  CONSTRAINT `ponto_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`),
  CONSTRAINT `ponto_ibfk_2` FOREIGN KEY (`matricula`) REFERENCES `dado_funcional` (`matricula`),
  CONSTRAINT `ponto_ibfk_3` FOREIGN KEY (`id_pessoa_registro`) REFERENCES `pessoa` (`id_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=837 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.repositorio
CREATE TABLE IF NOT EXISTS `repositorio` (
  `cod_repositorio` int(6) NOT NULL AUTO_INCREMENT,
  `nome_arquivo` varchar(255) NOT NULL,
  `chave_repositorio` varchar(12) NOT NULL,
  `chave_autenticacao` varchar(50) DEFAULT NULL,
  `data_criacao` datetime NOT NULL,
  `data_expiracao` datetime DEFAULT NULL,
  PRIMARY KEY (`cod_repositorio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.restricao_relogio
CREATE TABLE IF NOT EXISTS `restricao_relogio` (
  `nr_restricao` int(12) NOT NULL AUTO_INCREMENT,
  `id_orgao` int(5) DEFAULT NULL,
  `escopo` char(1) DEFAULT NULL,
  `id_pessoa` int(6) DEFAULT NULL,
  `mascara_ip_v4` varchar(18) DEFAULT NULL,
  `mascara_ip_v6` varchar(45) DEFAULT NULL,
  `data_atualizacao` datetime NOT NULL,
  `id_pessoa_atualizacao` int(6) NOT NULL,
  `ip_atualizacao` varchar(39) NOT NULL,
  `matricula` int(8) DEFAULT NULL,
  `nr_vinculo` int(1) DEFAULT NULL,
  PRIMARY KEY (`nr_restricao`),
  KEY `id_orgao` (`id_orgao`),
  KEY `id_pessoa` (`id_pessoa`),
  KEY `matricula` (`matricula`,`nr_vinculo`),
  CONSTRAINT `restricao_relogio_ibfk_1` FOREIGN KEY (`id_orgao`) REFERENCES `orgao` (`id_orgao`),
  CONSTRAINT `restricao_relogio_ibfk_2` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`),
  CONSTRAINT `restricao_relogio_ibfk_3` FOREIGN KEY (`matricula`) REFERENCES `dado_funcional` (`matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.tb_ponto_professor
CREATE TABLE IF NOT EXISTS `tb_ponto_professor` (
  `nr_ponto` int(12) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(6) NOT NULL,
  `matricula` int(8) DEFAULT NULL,
  `nr_vinculo` int(1) DEFAULT NULL,
  `data_hora_ponto` datetime NOT NULL,
  `entrada_saida` char(1) NOT NULL,
  `id_pessoa_registro` int(6) NOT NULL,
  `data_hora_registro` datetime DEFAULT NULL,
  `ip_registro` varchar(39) NOT NULL,
  `ambiente_registro` text,
  PRIMARY KEY (`nr_ponto`),
  KEY `id_pessoa` (`id_pessoa`),
  KEY `matricula` (`matricula`,`nr_vinculo`),
  KEY `id_pessoa_registro` (`id_pessoa_registro`)
) ENGINE=InnoDB AUTO_INCREMENT=1312 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.tb_professores
CREATE TABLE IF NOT EXISTS `tb_professores` (
  `id` int(11) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `situacao` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela ponto.tipo_frequencia
CREATE TABLE IF NOT EXISTS `tipo_frequencia` (
  `cod_frequencia` int(3) NOT NULL AUTO_INCREMENT,
  `nome_frequencia` varchar(255) NOT NULL,
  PRIMARY KEY (`cod_frequencia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para view ponto.v_ponto_e_ajuste
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `v_ponto_e_ajuste` (
	`nr_seq` INT(12) NOT NULL,
	`id_pessoa` INT(11) NOT NULL,
	`matricula` INT(11) NULL,
	`nr_vinculo` INT(11) NULL,
	`data_hora_ponto` DATETIME NOT NULL,
	`entrada_saida` CHAR(1) NOT NULL COLLATE 'utf8_general_ci',
	`id_pessoa_registro` INT(11) NOT NULL,
	`data_hora_registro` DATETIME NULL,
	`ip_registro` VARCHAR(39) NOT NULL COLLATE 'utf8_general_ci',
	`justificativa` MEDIUMTEXT NULL COLLATE 'utf8_general_ci',
	`nr_justificativa` INT(11) NULL,
	`texto_justificativa` VARCHAR(255) NULL COLLATE 'utf8_general_ci',
	`id_pessoa_certificacao` INT(11) NULL,
	`data_hora_certificacao` DATETIME NULL,
	`indicador_certificado` CHAR(1) NULL COLLATE 'utf8_general_ci',
	`tipo` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para view ponto.v_ponto_e_ajuste
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `v_ponto_e_ajuste`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ponto_e_ajuste` AS select `p`.`nr_ponto` AS `nr_seq`,`p`.`id_pessoa` AS `id_pessoa`,`p`.`matricula` AS `matricula`,`p`.`nr_vinculo` AS `nr_vinculo`,`p`.`data_hora_ponto` AS `data_hora_ponto`,`p`.`entrada_saida` AS `entrada_saida`,`p`.`id_pessoa_registro` AS `id_pessoa_registro`,`p`.`data_hora_registro` AS `data_hora_registro`,`p`.`ip_registro` AS `ip_registro`,NULL AS `justificativa`,NULL AS `nr_justificativa`,NULL AS `texto_justificativa`,NULL AS `id_pessoa_certificacao`,NULL AS `data_hora_certificacao`,NULL AS `indicador_certificado`,'R' AS `tipo` from `ponto` `p` where (not(exists(select 1 from `ajuste` `a` where ((`a`.`nr_ponto` = `p`.`nr_ponto`) and (`a`.`indicador_certificado` = 'S'))))) union select `a`.`nr_ajuste` AS `nr_seq`,`a`.`id_pessoa` AS `id_pessoa`,`a`.`matricula` AS `matricula`,`a`.`nr_vinculo` AS `nr_vinculo`,`a`.`data_hora_ponto` AS `data_hora_ponto`,`a`.`entrada_saida` AS `entrada_saida`,`a`.`id_pessoa_registro` AS `id_pessoa_registro`,`a`.`data_hora_registro` AS `data_hora_registro`,`a`.`ip_registro` AS `ip_registro`,`a`.`justificativa` AS `justificativa`,`a`.`nr_justificativa` AS `nr_justificativa`,`j`.`texto_justificativa` AS `texto_justificativa`,`a`.`id_pessoa_certificacao` AS `id_pessoa_certificacao`,`a`.`data_hora_certificacao` AS `data_hora_certificacao`,`a`.`indicador_certificado` AS `indicador_certificado`,'A' AS `tipo` from (`ajuste` `a` left join `justificativa_ajuste` `j` on((`a`.`nr_justificativa` = `j`.`nr_justificativa`))) where (coalesce(`a`.`indicador_excluido`,'N') = 'N') ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
