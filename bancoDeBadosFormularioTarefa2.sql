CREATE TABLE IF NOT EXISTS `mensagens_contatos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `endereco` varchar(64) NOT NULL,
  `telefone` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;