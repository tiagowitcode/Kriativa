-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2014 às 19:52
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ana`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `last_log_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `last_log_date`) VALUES
(6, 'admin', '6JRuxpvyctfBFAOw/IH/efnFx2RpMXbOPuXwVRzNlrvtJZMfvPi0AaP4QfWFchHov9yN8xTdeHnh/f90f2k2iw==', NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `local` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `data`, `nome`, `descricao`, `local`, `endereco`) VALUES
(6, '2013-08-14', 'Caxias do Sul - RS', '<p>Descri&ccedil;&atilde;o do show</p>\r\n', 'Vagao ', 'Rua teste tal'),
(7, '2013-08-15', 'Caxias do Sul', '<p>Descrica&ccedil;aosdasdsadsadasd</p>\r\n', 'Aristos Rock Bar', 'Julio de castilhos bla bla'),
(8, '2013-08-01', 'Caxias do Sul', '<p>asdasdsadsadsadsad</p>\r\n', '', ''),
(9, '2013-08-22', 'Farroupilha - RS', '<p>asdasdsadasdasdas</p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `nome`) VALUES
(1, 'Banner 1'),
(2, 'Banner 2'),
(3, 'banner 3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(11) NOT NULL,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('b36b532b6ca4d1a875ef6b2a83dc6f5d', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:33.0) Gecko', 1416272942, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_banner`
--

CREATE TABLE IF NOT EXISTS `fotos_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_banner` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `fotos_banner`
--

INSERT INTO `fotos_banner` (`id`, `id_banner`, `nome`) VALUES
(1, 1, 'ccf556a7bd5b0de038c5070c8b7fe796.png'),
(2, 2, 'e0078bf5d7e0615b1afcffc9a22cf63f.png'),
(3, 3, '2fd95dcafe8f63e51f28c7f9760a8ba2.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_galeria`
--

CREATE TABLE IF NOT EXISTS `fotos_galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_galeria` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

--
-- Extraindo dados da tabela `fotos_galeria`
--

INSERT INTO `fotos_galeria` (`id`, `id_galeria`, `nome`) VALUES
(100, 13, '5ba0cd287a5ca50d5ea6a84ba81f3665.jpg'),
(102, 13, '7b6b6b92cab5910a76aded8f7390f8ca.jpg'),
(103, 13, '5a720211e6214b067e7398d388d854fe.jpg'),
(104, 13, '37dbb467f4f5e5ba89e25e4a9ca5511e.jpg'),
(105, 13, '07ecd895c2fcce1d212a06fdd692f679.jpg'),
(106, 13, '3bedda8b5cd884485342d75a30cc4119.jpg'),
(107, 13, '8ba1ab2d0a083efbcb4fac86c46a3c47.jpg'),
(108, 13, '5a29faffa7aa8ad1093cce89f94c6945.jpg'),
(109, 13, 'cdbd65ef2ce5b2904346d7f298dfaed5.jpg'),
(110, 13, '776a7f41e811804a43165cb299c3e17b.jpg'),
(111, 13, 'd5ca90d0b13fc6ee4d9d0e0a187706c8.jpg'),
(112, 13, 'f3c484c8cb3a844e1b1fc90b467903c0.jpg'),
(113, 13, '39afd0e4ae2bc2f01f569c78a3d04566.jpg'),
(114, 13, '08b7666abfab00ea29ae6160847524e3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_marca`
--

CREATE TABLE IF NOT EXISTS `fotos_marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_marca` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `fotos_marca`
--

INSERT INTO `fotos_marca` (`id`, `id_marca`, `nome`) VALUES
(1, 1, '5ced2db8e99eb8f5ec8d4fc1f66690bc.jpg'),
(5, 5, 'bb3f6bdea6a9c72ea83e63e70ae122a8.png'),
(6, 7, 'ed24fb68886dcbc45df3893f5129fc65.png'),
(7, 6, '529b533d7c07007ff21056eafbe1fbde.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_noticia`
--

CREATE TABLE IF NOT EXISTS `fotos_noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_noticia` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `fotos_noticia`
--

INSERT INTO `fotos_noticia` (`id`, `id_noticia`, `nome`) VALUES
(2, 9, '57ec8a1d9d437d5f4b63033040016ea8.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_parceiros`
--

CREATE TABLE IF NOT EXISTS `fotos_parceiros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_parceiros` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `fotos_parceiros`
--

INSERT INTO `fotos_parceiros` (`id`, `id_parceiros`, `nome`) VALUES
(7, 6, 'bb3bd5f9fa5002f1251d74d6a986a344.pdf'),
(8, 7, '40060bdc70eb3304d6dc2b0eb6e1b3cd.pdf'),
(9, 8, 'c17354bea9f3f2e38ded1913e152c19d.pdf'),
(10, 9, '1d8d5314a4137c6d844f74028ceaa279.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_produto`
--

CREATE TABLE IF NOT EXISTS `fotos_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Extraindo dados da tabela `fotos_produto`
--

INSERT INTO `fotos_produto` (`id`, `id_produto`, `nome`) VALUES
(75, 9, '6b1a37e45e27004206134683326bc5b9.jpg'),
(76, 10, 'ce365ed093051ef7ca7b5f3bb684e2e6.jpg'),
(77, 11, '204e1b549713e3f770a5eedddd5a615e.jpg'),
(78, 12, '9b954efb21207dc40a8a012bf52a76a1.jpg'),
(79, 13, 'e49dd675799b534510c84bfc36d6b091.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_servicos`
--

CREATE TABLE IF NOT EXISTS `fotos_servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_servicos` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `fotos_servicos`
--

INSERT INTO `fotos_servicos` (`id`, `id_servicos`, `nome`) VALUES
(1, 1, '7475c80edef2959be5c2ce89aac47b67.jpg'),
(2, 1, '7a894f744cf76bfe6fb25608f5368cd8.jpg'),
(3, 2, 'b99cb09d5f5f76725ec3d27c3e508a1c.jpg'),
(4, 3, '9f32a1143ed22013cae7e874a76b6bf0.jpg'),
(5, 1, '545425a118773417cc9cf8081a571684.jpg'),
(6, 1, '9eb0c02119b4a3abdec4f053fd92ba24.jpg'),
(7, 1, 'eb84910621172b15d9ab1be81581760d.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id`, `nome`) VALUES
(13, 'Galeria Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `link`
--

INSERT INTO `link` (`id`, `nome`) VALUES
(1, 'Sxe6IxbKP4U'),
(2, 'r9dWsSYStRM'),
(3, '-oPJ4B-m01w'),
(4, '2bqAdwRHxrc'),
(5, 'IUSack4LKAk'),
(6, 'XimIbnMbeRE'),
(7, 'iFiNlLt8sJw');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`id`, `nome`, `descricao`) VALUES
(5, 'Chapas', ''),
(6, 'Visores', ''),
(7, 'Urnas', ''),
(8, 'Peças Técnicas', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `newsletter`
--

INSERT INTO `newsletter` (`id`, `nome`, `email`) VALUES
(3, 'Tiago', 'sf13jason@hotmail.com'),
(4, 'Tiago 2', 'tiago_maggioni@hotmail.com'),
(11, 'tiago 3', 'asdasd@asd.com'),
(12, 'tiago', 'gabriela@hotmail.com'),
(13, '0', 'undefined'),
(14, '0', 'asd'),
(15, '0', 'email@emailteste'),
(16, '0', 'asdsadsadsadsad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `autor_id` int(11) NOT NULL,
  `atrativo_id` int(11) NOT NULL,
  `videos` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `data`, `autor_id`, `atrativo_id`, `videos`, `titulo`, `descricao`) VALUES
(8, '2013-09-13', 0, 0, '', 'Novo site esta no ar', '<p>Lorem ipsum Lorem ipsum Lorem ipsum</p>\r\n'),
(9, '2013-05-28', 0, 0, '', 'Noticia teste 2', '<p>Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsu.Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsu.Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsu.Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsu.Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsu.Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsu.Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsu.</p>\r\n'),
(10, '2013-05-28', 0, 0, '', 'Noticia teste 3', '<p>ASDIUhasidhsaDiusahduisadasdsadsadsadsad</p>\r\n'),
(11, '2013-05-28', 0, 0, '', 'Noticia teste 4', '<p>asdasdsadasdsadsa</p>\r\n'),
(12, '2013-05-28', 0, 0, '', 'Noticia teste 3', '<p>adasdsadsad</p>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE IF NOT EXISTS `parceiros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`id`, `nome`, `link`) VALUES
(6, '1. Catalogo de diversos produtos', ''),
(7, '2. Catalogo de Placas', ''),
(8, '3. Catalogo de peças Técnicas', ''),
(9, '4. Catalogo de P- Alimentação', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `id_marca` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `id_marca`) VALUES
(9, 'Urna Teste 1', '<p>10289 A4 Retratk<br />\r\n10016 A4 Paisagem<br />\r\n10289 A4 Retratk<br />\r\n10016 A4 Paisagem</p>\r\n\r\n<p>&nbsp;</p>\r\n', 7),
(10, 'Urna 2', '<p>10289 A4 Retratk<br />\r\n10016 A4 Paisagem<br />\r\n10289 A4 Retratk<br />\r\n10016 A4 Paisagem</p>\r\n', 7),
(11, 'Urna 3', '<p>10289 A4 Retratk<br />\r\n10016 A4 Paisagem<br />\r\n10289 A4 Retratk<br />\r\n10016 A4 Paisagem</p>\r\n', 7),
(12, 'Urna 4', '<p>10289 A4 Retratk<br />\r\n10016 A4 Paisagem<br />\r\n10289 A4 Retratk<br />\r\n10016 A4 Paisagem</p>\r\n', 7),
(13, 'Urna 5', '<p>10289 A4 Retratk<br />\r\n10016 A4 Paisagem<br />\r\n10289 A4 Retratk<br />\r\n10016 A4 Paisagem</p>\r\n', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `representante`
--

CREATE TABLE IF NOT EXISTS `representante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uf` varchar(5) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `representante`
--

INSERT INTO `representante` (`id`, `uf`, `nome`) VALUES
(1, 'RS', 'William teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`) VALUES
(1, 'Consultoria'),
(2, 'soldagens especiais'),
(3, 'mao de obra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `nome`) VALUES
(1, 'Nba3Tr_GLZU'),
(2, 'qFbQQYHLndM'),
(3, '7KV56kwxiHg'),
(4, 'pwT9G6t-SKI'),
(5, 'DJQQWbr4cXM'),
(6, 'THXzzoK7Mp4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
