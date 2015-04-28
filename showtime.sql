-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Abr-2015 às 19:02
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `showtime`
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
('1259c08f6f20070277c7b823c5fd8c69', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', 1428943727, 'a:4:{s:12:"nome_usuario";s:5:"admin";s:7:"usuario";s:5:"admin";s:10:"usuario_id";s:1:"6";s:8:"loggedin";b:1;}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `excursoes`
--

CREATE TABLE IF NOT EXISTS `excursoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `data` date NOT NULL,
  `local` varchar(255) NOT NULL,
  `horario` varchar(255) NOT NULL,
  `classificacao` varchar(255) NOT NULL,
  `saida_de` varchar(255) NOT NULL,
  `roteiro` text NOT NULL,
  `incluso` text NOT NULL,
  `investimento` text NOT NULL,
  `tipo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `excursoes`
--

INSERT INTO `excursoes` (`id`, `nome`, `descricao`, `data`, `local`, `horario`, `classificacao`, `saida_de`, `roteiro`, `incluso`, `investimento`, `tipo`) VALUES
(2, 'Foo Figthers', '<p>E foi confirmado! O Foo Fighteres ir&aacute; fazer quatro shows no Brasil, marcados para janeiro de 2015, de acordo com o an&uacute;ncio feito pela produtora Time 4 Fun.</p>\r\n\r\n<p>A banda passar&aacute; por Porto Alegre (21/01), S&atilde;o Paulo (23/01), Rio (25/01) e Belo Horizonte (28/01), os lugares das apresenta&ccedil;&otilde;es ainda n&atilde;o foram definidos. A &uacute;ltima vez que o grupo pisou em terras brasileiras foi no Lollapalooza em 2013 e antes disso, eles tocaram no Rock in Rio de 2001.</p>\r\n\r\n<p>A banda vir&aacute; ao pa&iacute;s divulgar o seu novo alb&uacute;m do est&uacute;dio, &quot;Sonic Highway&quot;, que ser&aacute; lan&ccedil;ado em 10 de novembro, na proposta de celebrar 20 anos de carreira do grupo.</p>\r\n\r\n<p>A pr&eacute;-venda exclusiva para f&atilde;s cadastros ocorre de 28 de setembro (meio dia) a 30 de setembro (meio - dia). Para os shows de S&atilde;o Paulo e Belo Horizonte, os ingressos ficam dispon&iacute;vies a partir de 1&ordm; de outubro pelo site da Tickets for Fun. O pre&ccedil;o das entradas para a apresenta&ccedil;&atilde;o da capital paulista varia entre R$ 100 (arquibancada 2, meia entrada) e R$ 640 (pista premium). J&aacute; para os eventos de Porto Alegre e Rio de Janeiro, os t&iacute;quetes poder&atilde;o ser adquiridos a partir de 2 de outubro pelo mesmo canal.</p>\r\n', '0000-00-00', 'Forqueta', '21:00', 'Maior de 18', 'Xurupita', '<p>Roteiro E foi confirmado! O Foo Fighteres ir&aacute; fazer quatro shows no Brasil, marcados para janeiro de 2015, de acordo com o an&uacute;ncio feito pela produtora Time 4 Fun.</p>\r\n\r\n<p>A banda passar&aacute; por Porto Alegre (21/01), S&atilde;o Paulo (23/01), Rio (25/01) e Belo Horizonte (28/01), os lugares das apresenta&ccedil;&otilde;es ainda n&atilde;o foram definidos. A &uacute;ltima vez que o grupo pisou em terras brasileiras foi no Lollapalooza em 2013 e antes disso, eles tocaram no Rock in Rio de 2001.</p>\r\n\r\n<p>A banda vir&aacute; ao pa&iacute;s divulgar o seu novo alb&uacute;m do est&uacute;dio, &quot;Sonic Highway&quot;, que ser&aacute; lan&ccedil;ado em 10 de novembro, na proposta de celebrar 20 anos de carreira do grupo.</p>\r\n\r\n<p>A pr&eacute;-venda exclusiva para f&atilde;s cadastros ocorre de 28 de setembro (meio dia) a 30 de setembro (meio - dia). Para os shows de S&atilde;o Paulo e Belo Horizonte, os ingressos ficam dispon&iacute;vies a partir de 1&ordm; de outubro pelo site da Tickets for Fun. O pre&ccedil;o das entradas para a apresenta&ccedil;&atilde;o da capital paulista varia entre R$ 100 (arquibancada 2, meia entrada) e R$ 640 (pista premium). J&aacute; para os eventos de Porto Alegre e Rio de Janeiro, os t&iacute;quetes poder&atilde;o ser adquiridos a partir de 2 de outubro pelo mesmo canal.</p>\r\n', '<p>Texto incluso A pr&eacute;-venda exclusiva para f&atilde;s cadastros ocorre de 28 de setembro (meio dia) a 30 de setembro (meio - dia). Para os shows de S&atilde;o Paulo e Belo Horizonte, os ingressos ficam dispon&iacute;vies a partir de 1&ordm; de outubro pelo site da Tickets for Fun. O pre&ccedil;o das entradas para a apresenta&ccedil;&atilde;o da capital paulista varia entre R$ 100 (arquibancada 2, meia entrada) e R$ 640 (pista premium). J&aacute; para os eventos de Porto Alegre e Rio de Janeiro, os t&iacute;quetes poder&atilde;o ser adquiridos a partir de 2 de outubro pelo mesmo cana</p>\r\n', '<p>Texto investimento A pr&eacute;-venda exclusiva para f&atilde;s cadastros ocorre de 28 de setembro (meio dia) a 30 de setembro (meio - dia). Para os shows de S&atilde;o Paulo e Belo Horizonte, os ingressos ficam dispon&iacute;vies a partir de 1&ordm; de outubro pelo site da Tickets for Fun. O pre&ccedil;o das entradas para a apresenta&ccedil;&atilde;o da capital paulista varia entre R$ 100 (arquibancada 2, meia entrada) e R$ 640 (pista premium). J&aacute; para os eventos de Porto Alegre e Rio de Janeiro, os t&iacute;quetes poder&atilde;o ser adquiridos a partir de 2 de outubro pelo mesmo cana</p>\r\n', 'show'),
(3, 'Lucas Baitola', '<p>asdasdsadasdas</p>\r\n', '2015-04-08', 'asdasd', 'asdasd', 'asdas', 'dasdasdasd', '<p>asdasd</p>\r\n', '<p>asdasdasdas</p>\r\n', '<p>dasdasdasdsad</p>\r\n', 'show'),
(4, 'Marcus Pau fino', '<p>Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;</p>\r\n\r\n<p>Lorem ipsuym&nbsp;</p>\r\n', '2015-04-08', 'asdsada', 'sadasd', 'asdsadasd', 'asdasd', '<p>Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;</p>\r\n', '<p>Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;</p>\r\n', '<p>Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;Lorem ipsuym&nbsp;</p>\r\n', 'teatrais'),
(5, 'Testando', '<p>asdasdasdasdasd</p>\r\n', '2015-04-08', 'asdasd', 'dasda', 'sdas', 'dasdasdas', '<p>asdasd</p>\r\n', '<p>asdasdasdasd</p>\r\n', '', 'diversos');

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
-- Estrutura da tabela `fotos_excursoes`
--

CREATE TABLE IF NOT EXISTS `fotos_excursoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_excursoes` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `fotos_excursoes`
--

INSERT INTO `fotos_excursoes` (`id`, `id_excursoes`, `nome`) VALUES
(6, 2, '536e241a55c2444a22e9f670fee8d158.jpg'),
(7, 3, 'f7d0e01af1e23d25d69a34163a361d75.jpg'),
(8, 4, 'fd2efce7ecd4d17eadfb3cc000978763.jpg'),
(9, 5, 'b2f420d362add17cef5629040448c625.jpg'),
(10, 2, '77071f5dbf733498105fe9c98fd76f7d.jpg'),
(11, 2, 'a7ee48e34533796626a239e2c66f7321.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `fotos_parceiros`
--

INSERT INTO `fotos_parceiros` (`id`, `id_parceiros`, `nome`) VALUES
(11, 10, 'bab68abdef70f55a4e71461546063a40.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_produto`
--

CREATE TABLE IF NOT EXISTS `fotos_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `tipo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`id`, `nome`, `tipo`, `descricao`) VALUES
(10, 'Tiago teste', 'musica', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
