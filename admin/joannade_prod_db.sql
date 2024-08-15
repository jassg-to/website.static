-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14/08/2024 às 15:58
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `joannade_prod_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` longtext COLLATE utf8_unicode_ci NOT NULL,
  `data_gerado` datetime NOT NULL,
  `permalink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(3, 'Eduardo', '...@peexell.com', 'md5'),
(12, 'Joanna', '...@example.com', 'md5'),
(13, 'Manager Joanna', '...@example.com', 'md5'),
(14, 'Brendon', '...@vibryt.com.br', 'md5'),
(15, 'Flávia', '...@jassg.ca', 'md5');
-- 2024-08-14 DADOS ANONIMIZADOS POR LIZ, nao parecem estar sendo usados (blog sem posts) (also unsalted md5 passwords?!?! smh)

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
