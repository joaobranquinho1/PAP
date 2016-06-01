-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jun-2015 às 18:28
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE IF NOT EXISTS `carrinho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `preco` double(10,2) NOT NULL,
  `qtd` int(11) NOT NULL,
  `sessao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `cod`, `nome`, `preco`, `qtd`, `sessao`) VALUES
(10, 25, 'Skip Sabão Natural 100D', 10.25, 10, '0vddfifgd9pt1nmv5eki1sacu7'),
(11, 11, 'Sardinha Pescador ', 2.30, 1, '0vddfifgd9pt1nmv5eki1sacu7'),
(12, 16, 'Lágrima Ramos Pinto', 7.99, 1, '0vddfifgd9pt1nmv5eki1sacu7'),
(13, 6, 'Óleo Fula', 7.89, 10, 'avtg50polajfup7s46i0pe6g90'),
(14, 13, 'Joi Laranja 1.5L', 1.00, 1, 'avtg50polajfup7s46i0pe6g90'),
(15, 8, 'Asus', 173.89, 1, 'avtg50polajfup7s46i0pe6g90'),
(16, 32, 'arroz', 4.36, 1, 'avtg50polajfup7s46i0pe6g90'),
(17, 11, 'Sardinha Pescador ', 2.30, 1, 'avtg50polajfup7s46i0pe6g90'),
(18, 5, 'Azeite Galo', 7.56, 1, 'avtg50polajfup7s46i0pe6g90'),
(19, 10, 'Atum Santa Catarina', 6.35, 20, '5rv0g2v0ol5vee537kskstsjq0'),
(20, 6, 'Óleo Fula', 7.89, 10, '5rv0g2v0ol5vee537kskstsjq0'),
(21, 11, 'Sardinha Pescador ', 2.30, 5, '5rv0g2v0ol5vee537kskstsjq0'),
(22, 25, 'Skip Sabão Natural 100D', 10.25, 2, '5rv0g2v0ol5vee537kskstsjq0'),
(23, 1, 'Arroz Malandrinho', 4.56, 2, '5rv0g2v0ol5vee537kskstsjq0'),
(35, 15, 'Velhotes ', 4.90, 1, 'boem8uv1nhbe6ppmi7efnnnd35'),
(41, 16, 'Lágrima Ramos Pinto', 7.99, 1, ''),
(42, 9, 'Atum Bom Petisco', 4.56, 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho_final`
--

CREATE TABLE IF NOT EXISTS `carrinho_final` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `preco` double(10,2) NOT NULL,
  `qtd` int(11) NOT NULL,
  `sessao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Extraindo dados da tabela `carrinho_final`
--

INSERT INTO `carrinho_final` (`id`, `cod`, `nome`, `preco`, `qtd`, `sessao`) VALUES
(54, 13, 'Joi Laranja 1.5L', 1.00, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(55, 13, 'Joi Laranja 1.5L', 1.00, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(56, 11, 'Sardinha Pescador ', 2.30, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(57, 20, 'Leite Nova Açores M/Gordo', 3.10, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(58, 13, 'Joi Laranja 1.5L', 1.00, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(59, 11, 'Sardinha Pescador ', 2.30, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(60, 20, 'Leite Nova Açores M/Gordo', 3.10, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(61, 25, 'Skip Sabão Natural 100D', 10.25, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(62, 13, 'Joi Laranja 1.5L', 1.00, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(63, 18, 'Leite Gresso M/Gordo', 3.60, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(64, 16, 'Lágrima Ramos Pinto', 7.99, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(65, 16, 'Lágrima Ramos Pinto', 7.99, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(66, 16, 'Lágrima Ramos Pinto', 7.99, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(67, 9, 'Atum Bom Petisco', 4.56, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(68, 10, 'Atum Santa Catarina', 6.35, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(69, 14, 'Ferreira ', 5.60, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(70, 13, 'Joi Laranja 1.5L', 1.00, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(71, 17, 'Real Companhia Velha', 4.80, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(72, 18, 'Leite Gresso M/Gordo', 3.60, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(73, 13, 'Joi Laranja 1.5L', 1.00, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(74, 18, 'Leite Gresso M/Gordo', 3.60, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(75, 15, 'Velhotes ', 4.90, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(76, 15, 'Velhotes ', 4.90, 1, 'o5k6mj3dlct5b3n09bvcatlri0'),
(77, 13, 'Joi Laranja 1.5L', 1.00, 1, 'o5k6mj3dlct5b3n09bvcatlri0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idcliente` int(9) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `morada` varchar(62) NOT NULL,
  `codpostal` varchar(8) NOT NULL,
  `telefone` int(9) NOT NULL,
  `nif` int(9) NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nome`, `morada`, `codpostal`, `telefone`, `nif`) VALUES
(2, 'tania', 'tondela	', '3460-594', 963258741, 123654789),
(3, 'Maria', 'Rua da Escola, nÂº123', '3460-596', 963258741, 123654789),
(4, 'Maria', 'Rua da Escola, nÂº123', '3460-596', 963258741, 123654789),
(5, 'Maria', 'Rua da Escola, nÂº123', '3460-596', 963258741, 123654789),
(6, 'Maria', 'Rua da Escola, nÂº123', '3460-596', 963258741, 123654789),
(7, 'Maria', 'Rua da Escola, nÂº123', '3460-596', 963258741, 123654789),
(8, 'Maria', 'Rua da Escola, nÂº123', '3460-596', 963258741, 123654789),
(9, 'Maria', 'Rua da Escola, nÂº123', '3460-596', 963258741, 123654789),
(10, 'Maria', 'Rua da Escola, nÂº123', '3460-596', 963258741, 123654789),
(11, 'Ana', 'Rua da Escola, nÂº234', '3460-598', 963214587, 123658974),
(12, 'Ana', 'Rua da Escola, nÂº234', '3460-598', 963214587, 123658974),
(13, 'Tania', 'Tondela', '3460-598', 963258741, 123654789),
(14, '', '', '', 0, 0),
(15, 'Bruno', 'Tondela', '3460-598', 232589647, 123654789);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `cod` int(9) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `preco` double NOT NULL,
  `stock` varchar(45) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  UNIQUE KEY `idprodutos` (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod`, `nome`, `preco`, `stock`, `marca`, `imagem`, `tipo`) VALUES
(1, 'Arroz Malandrinho', 4.56, '45', 'as', 'arroz.png', 'motherboard'),
(4, 'Farinha Branca de Neve', 4.56, '45', 'as', 'farinha.png', 'motherboard'),
(5, 'Azeite Galo', 7.56, '45', 'as', 'azeite.png', 'motherboard'),
(6, 'Óleo Fula', 7.89, '45', 'as', 'oleo.png', 'motherboard'),
(7, 'Massa Milaneza', 6.32, '45', 'as', 'massa3.png', 'motherboard'),
(8, 'Asus', 173.89, '45', 'AS', 'acucar.png', 'motherboard'),
(9, 'Atum Bom Petisco', 4.56, '45', 'as', 'atum1.png', 'conservas'),
(10, 'Atum Santa Catarina', 6.35, '45', 'as', 'atum.png', 'conservas'),
(11, 'Sardinha Pescador ', 2.3, '45', 'as', 'sardinha.png', 'conservas'),
(12, 'Água Luso 1.5L', 2.65, '45', 'AS', 'agua.png', 'bebidas'),
(13, 'Joi Laranja 1.5L', 1, '45', 'AS', 'joi.png', 'bebidas'),
(14, 'Ferreira ', 5.6, '45', 'as', 'ferreira.png', 'bebidas'),
(15, 'Velhotes ', 4.9, '45', 'as', 'velhotes.png', 'bebidas'),
(16, 'Lágrima Ramos Pinto', 7.99, '45', 'as', 'lagrima.png', 'bebidas'),
(17, 'Real Companhia Velha', 4.8, '45', 'as', 'real.png', 'bebidas'),
(18, 'Leite Gresso M/Gordo', 3.6, '45', 'as', 'gresso.png', 'lati'),
(19, 'Leite Mimosa M/Gordo', 3.4, '45', 'as', 'mimosa.png', 'lati'),
(20, 'Leite Nova Açores M/Gordo', 3.1, '45', 'as', 'acores.png', 'lati'),
(21, 'Papel Higiénico Colhogar 12R ', 10.95, '45', 'as', 'perfumado.png', 'higiene'),
(22, 'Papel Higiénico Colhogar 4R', 9.96, '45', 'AS', 'dermia.png', 'higiene'),
(23, 'Guardanapos Joker', 7.56, '45', 'as', 'guardanapos.png', 'higiene'),
(24, 'Fairy', 2.3, '45', 'as', 'fairy.png', 'limpeza'),
(25, 'Skip Sabão Natural 100D', 10.25, '45', 'AS', 'skip.png', 'limpeza'),
(26, 'Sonasol Amoniacal', 6.32, '45', 'as', 'sonasol.png', 'limpeza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE IF NOT EXISTS `utilizadores` (
  `idutilizadores` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(90) NOT NULL,
  `password` varchar(80) NOT NULL,
  `tipo` int(2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `nif` int(9) NOT NULL,
  `telefone` int(9) NOT NULL,
  `morada` varchar(60) NOT NULL,
  PRIMARY KEY (`idutilizadores`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`idutilizadores`, `username`, `password`, `tipo`, `email`, `nome`, `nif`, `telefone`, `morada`) VALUES
(1, 'utilizador', '123', 0, 'utilizador@gmail.com', 'uti', 1, 1, 'Tondela'),
(2, 'admin', '123', 1, 'admin@gmail.com', 'admin', 1, 1, 'Tondela'),
(37, 'Sousa', 'sousa', 0, 'taniasousa_12@hotmail.com', 'TÃ¢nia Sousa', 963258741, 963258741, 'Tondela');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
