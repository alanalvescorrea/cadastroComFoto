-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bd_debora`
--
CREATE DATABASE `bd_debora` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_debora`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL DEFAULT '',
  `email` varchar(200) DEFAULT NULL,
  `nome_mae` varchar(250) DEFAULT NULL,
  `nome_pai` varchar(250) DEFAULT NULL,
  `profissao` varchar(250) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `numero` varchar(250) DEFAULT NULL,
  `bairro` varchar(250) DEFAULT NULL,
  `estado` varchar(250) DEFAULT NULL,
  `cidade` varchar(250) DEFAULT NULL,
  `residencial` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `facebook` text,
  `datetime` datetime NOT NULL,
  `sacramento` varchar(200) NOT NULL,
  `estado_civil` varchar(200) NOT NULL,
  `filho` char(50) NOT NULL,
  `qtd_filhos` char(10) NOT NULL,
  `obs` text NOT NULL,
  `tempo_go` char(10) NOT NULL,
  `arquivo_nome` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `nome_mae`, `nome_pai`, `profissao`, `data_nascimento`, `endereco`, `numero`, `bairro`, `estado`, `cidade`, `residencial`, `celular`, `facebook`, `datetime`, `sacramento`, `estado_civil`, `filho`, `qtd_filhos`, `obs`, `tempo_go`, `arquivo_nome`) VALUES
(2, 'Alan Alves Correa', 'alan.sms@hotmail.com', 'Maria Luci Alves Correa', 'JosÃ© Joaquin Lagni Correa', 'Desenvolvedor de sistemas', '1981-09-12', 'Rua Marques do Herval', '105', 'Farroupilha', 'Rs', 'OsÃ³rio', '5136639024', '5199880070', 'https://www.facebook.com/alan.alvescorrea', '2014-02-28 11:00:45', 'NÃ£o informado', 'Nao', 'Solteiro', '0', 'Local de trabalho: Secretaria de SaÃºde de OsÃ³rio.\r\n                                      ', 'NÃ£o parti', ''),
(3, 'AndrÃ©ia de Ãvila', 'andreia@mail.com', 'Ilma Ãvila', 'Cleber Ãvila', 'Merendeira', '1978-02-15', 'Rua AntÃ´nio Bandeira', '563', 'Trindade', 'RS', 'OsÃ³rio', '51 36633311', '51 88770023', 'https://www.facebook.com/an.avila', '2014-02-28 11:23:19', 'Batismo,Eucaristia,Crisma', 'Sim', 'Solteiro', '2', 'VoluntÃ¡ria por 3 anos como missionÃ¡ria na amazÃ´nia.\r\n                                    ', '1 ano', 'arquivos/Saude.jpg'),
(4, 'Antonio Marques', 'antonio@gmail.com', 'Maria Marques', 'ClÃ¡udio Marques', 'Servente', '1952-09-05', 'Rua Padre RÃ©us', '45', 'Anhanbi', 'RS', 'OsÃ³rio', '51 36014587', '51 99887766', 'https://www.facebook.com/antonio.marques', '2014-02-28 11:29:20', 'Batismo', 'Casado', 'Sim', '3', 'Toca violÃ£o, baixo e bateria.           ', '1 mes', 'arquivos/prefeitura-osorio.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
