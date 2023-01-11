-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 11-Jan-2023 às 01:55
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estoque_de_produtos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `id_estoque` int(11) NOT NULL AUTO_INCREMENT,
  `nroproduto` int(11) NOT NULL,
  `nomeproduto` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fornecedor` varchar(200) NOT NULL,
  PRIMARY KEY (`id_estoque`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES
(8, 5221, 'Caixa de som', 'PerifÃ©ricos', 15, 'Fornecedor A'),
(7, 5631, 'Placa HD', 'Softawers', 32, 'Fornecedor A'),
(3, 9014, 'Pen drive', 'PerifÃ©ricos', 65, 'Fornecedor A'),
(4, 9123, 'Headphones', 'Softawers', 41, 'Fornecedor C'),
(5, 134, 'Cadeira para PC', 'PerifÃ©ricos', 35, 'Fornecedor B'),
(6, 1845, 'Mesa Redonda', 'PerifÃ©ricos', 10, 'Fornecedor B');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
