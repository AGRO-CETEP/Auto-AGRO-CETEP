-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/

-- --------------------------------------------------------

--
-- Estrutura para tabela `SPECIE`
--

CREATE TABLE `SPECIE` (
  `ID_SPECIE` int(50) NOT NULL,
  `REINO_S` varchar(50) NOT NULL,
  `FILO_S` varchar(50) DEFAULT NULL,
  `CLASSE_S` varchar(50) DEFAULT NULL,
  `ORDEM_S` varchar(50) DEFAULT NULL,
  `FAMILY_S` varchar(50) DEFAULT NULL,
  `GENERO_S` varchar(50) DEFAULT NULL,
  `SPECIE` varchar(80) NOT NULL,
  `NOME_POPULAR` varchar(100) NOT NULL,
  `CIDADE_SPECIE` varchar(50) NOT NULL,
  `PHOTO_1` varchar(1000) DEFAULT NULL,
  `COMMENT` text NOT NULL,
  `DATA_COLETA` date NOT NULL,
  `COLETORES` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `SPECIE`
--

INSERT INTO `SPECIE` (`ID_SPECIE`, `REINO_S`, `FILO_S`, `CLASSE_S`, `ORDEM_S`, `FAMILY_S`, `GENERO_S`, `SPECIE`, `NOME_POPULAR`, `CIDADE_SPECIE`, `PHOTO_1`, `COMMENT`, `DATA_COLETA`, `COLETORES`) VALUES
(1, 'UGxhbnRhZQ==', 'QW5naW9zcMOpcm1pY2Fz', 'RXVkaWNvdGlsZWTDs25lYXM=', 'Q2FyeW9waHlsbGFsZXM=', 'QW1hcmFudGhhY2VhZQ==', 'QW1hcmFudGh1cw==', 'c3Bpbm9zdXM=', 'Q2FydXJ1LWRlLUVzcGluaG8=', 'Q3J1eiBkYXMgQWxtYXM=', 'aW1hZ2VtXzY1MmRlYjkzMWU4N2JfLndlYnA=', 'Q29zdHVtYSBzZXIgdW1hIGVydmEgb3Ugc3ViYXJidXN0byBlcmV0bywgZGUgMjAgYSA4MCBjbSBkZSBhbHR1cmEsIGVzcGluaG9zby4gTyBzZXUgcHJpbmNpcGFsIGJpb21hIMOpIG8gc2VycmFkby4gRXN0YSBwbGFudGEgcmFyYW1lbnRlIGZyZXF1ZW50YSBsdWdhcmVzIMO6bWlkb3MuIEVsYSByZW5vdmEgbXVpdG8gcsOhcGlkbyBxdWFuZG8gY29ydGFkYSwgZW0gcmVsYcOnw6NvIGEgYWxndW1hcyBwbGFudGFzLiDDiSB1bWEgcGxhbnRhIHJlbGF0aXZhbWVudGUgdMOzeGljYSBwYXJhIG8gZ2FkbyE=', '2022-08-30', 'VGhpYWdvIFNvdXNhDQpUaGlhbGEgRmVybmFuZGVzIGRhIFBheg0K'),
(2, 'UGxhbnRhZQ==', 'TWFnbm9saW9waHl0YQ==', 'TWFnbm9saW9wc2lkYQ==', 'TGFtaWFsZXM=', 'VmVyYmVuYWNlYWU=', 'TGFudGFuYQ==', 'Y2FtYXJh', 'Q2FtYmFyw6E=', 'Q3J1eiBkYXMgQWxtYXM=', 'aW1hZ2VtXzY1MmRlYzU5NTExOGVfLmpwZw==', 'Q29zdHVtYSBzZXIgdW0gYXJidXN0byBvcm5hbWVudGFsIGNvbSBmbG9yZXMgcGVxdWVuYXMgZW0gY29sb3Jhw6fDo28gYW1hcmVsYS1hbGFyYW5qYWRhLg0KUHJvZHV6IHVtIHBlcXVlbm8gZnJ1dG8gbsOjbyBjb21lc3TDrXZlbCBxdWUgZmljYSBjb20gdW1hIGNvciBlc2N1cmEgcXVhbmRvIG1hZHVyby4=', '2022-08-30', 'VGhpYWdvIFNvdXNhDQpUaGlhbGEgRmVybmFuZGVzIGRhIFBheg0K'),
(3, 'UGxhbnRhZQ==', 'TWFnbm9saW9waHl0YQ==', 'TWFnbm9saW9wc2lkYQ==', 'U2FwaW5kYWxlcw==', 'QW5hY2FyZGlhY2VhZQ==', 'QW5hY2FyZGl1bQ==', 'b2NjaWRlbnRhbGU=', 'Q2FqdWVpcm8=', 'Q3J1eiBkYXMgQWxtYXM=', 'aW1hZ2VtXzY1MzdmODEzYmVmNTJfLmpwZw==', 'QSBtYWRlaXJhIMOpIGFwcm9wcmlhZGEgcGFyYSBjb25zdHJ1w6fDo28gY2l2aWwsIHNlcnZpw6dvcyBkZSB0b3JubywgY2FycGludGFyaWEgZSBtYXJjZW5hcmlhLCBjb25mZWPDp8OjbyBkZSBjYWJvcyBkZSBmZXJyYW1lbnRhcyBhZ3LDrWNvbGFzLCBjZXBhcyBkZSB0YW1hbmNvIGUgY2FpeG90YXJpYS4gQSDDoXJ2b3JlIMOpIG11aXRvIGN1bHRpdmFkYSBlbSBxdWFzZSB0b2RvIG8gQnJhc2lsIGUgbm8gZXh0ZXJpb3IgcGFyYSBhIG9idGVuw6fDo28gZGUgc2V1IHBzZXVkb2ZydXRvIChjYWp1KSBlIGRlIHN1YSBjYXN0YW5oYTsgb3MgZnJ1dG9zIHPDo28gbXVpdG8gY29uc3VtaWRvcyBlbSB0b2RvIG8gcGHDrXMsIGUgYSBjYXN0YW5oYSDDqSBiYXN0YW50ZSBwb3B1bGFyIGUgZXhwb3J0YWRhIHBhcmEgcXVhc2UgdG9kbyBvIG11bmRvLiBPcyBmcnV0b3Mgb3UgcGVkw7puY3Vsb3MgcG9kZW0gc2VyIGNvbnN1bWlkb3MgaW4gbmF0dXJhLCBuYSBmb3JtYSBkZSBzdWNvIGUgZGUgZG9jZXMgY2FzZWlyb3MuIE8gc3VjbyBkZSBzZXUgZnJ1dG8gw6kgYXByZWNpYWRvIGVtIHRvZG8gbyBwYcOtcy4gQSBjYXNjYSBkYSBjYXN0YW5oYSBmb3JuZWNlIHVtIMOzbGVvIGluZHVzdHJpYWwuIMOJIHBsYW50YSBpbmRpc3BlbnPDoXZlbCBub3MgcG9tYXJlcyBkYSBjb3N0YSBsaXRvcsOibmVhIGJyYXNpbGVpcmEu', '2022-08-30', 'VGhpYWdvIFNvdXNhDQpUaGlhbGEgRmVybmFuZGVzIGRhIFBheg0K');

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
(2, 'Thiala Fernandes da Paz ', 'thialapaz@yahoo.com.br', '175540c90bcb97e2bfe67b87d8a14098e0bff00b', '', '2023-02-27', '10:04:00');

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
  MODIFY `ID_SPECIE` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `USERS`
--
ALTER TABLE `USERS`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
