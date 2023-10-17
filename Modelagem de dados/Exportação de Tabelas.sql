-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql205.infinityfree.com
-- Tempo de geração: 05/10/2023 às 20:28
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `epiz_33347322_DATABASE`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `SPECIE`
--

CREATE TABLE `SPECIE` (
  `ID_SPECIE` int(11) NOT NULL,
  `REINO_S` int(50) NOT NULL,
  `FILO_S` int(50) DEFAULT NULL,
  `CLASSE_S` int(50) DEFAULT NULL,
  `ORDEM_S` int(50) DEFAULT NULL,
  `FAMILY_S` int(50) DEFAULT NULL,
  `GENERO_S` int(50) DEFAULT NULL,
  `SPECIE` varchar(80) NOT NULL,
  `NOME_POPULAR` varchar(100) NOT NULL,
  `CIDADE_SPECIE` varchar(50) NOT NULL,
  `PHOTO_1` varchar(1000) DEFAULT NULL,
  `COMMENT` text NOT NULL,
  `DATA_COLETA` date NOT NULL,
  `COLETORES` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `USERS`
--

CREATE TABLE `USERS` (
  `ID_USER` int(11) NOT NULL,
  `NOME_USER` text NOT NULL,
  `EMAIL_USER` text NOT NULL,
  `HASH_USER` varchar(40) NOT NULL,
  `LATTES_USER` text NOT NULL,
  `DATA_USER` date NOT NULL,
  `HORA_USER` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `USERS`
--

INSERT INTO `USERS` (`ID_USER`, `NOME_USER`, `EMAIL_USER`, `HASH_USER`, `LATTES_USER`, `DATA_USER`, `HORA_USER`) VALUES
(1, 'Thiago Sousa', 'thiagosousa81@gmail.com', '0aa81ed32dd634a98e73f88f36ef345b29fbecfc', 'http://lattes.cnpq.br/4544179861150494', '2023-01-27', '00:40:00'),
(11, 'Thiala Fernandes da Paz ', 'thialapaz@yahoo.com.br', '175540c90bcb97e2bfe67b87d8a14098e0bff00b', '', '2023-02-27', '10:04:00');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `SPECIE`
--
ALTER TABLE `SPECIE`
  ADD PRIMARY KEY (`ID_SPECIE`);

--
-- Índices de tabela `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `SPECIE`
--
ALTER TABLE `SPECIE`
  MODIFY `ID_SPECIE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `USERS`
--
ALTER TABLE `USERS`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
