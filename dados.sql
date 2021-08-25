--Banco de Bados: Usuarios
-- Estrutura da Tabela

CREATE TABLE `dadosUsuarios` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` varchar(64) NOT NULL,
    `cpf` varchar(11) NOT NULL,
    `email` varchar(64) NOT NULL,
    `dataNascimento` date
) ENGINE=MyISAM DEFAULT CHARSET=utf8;