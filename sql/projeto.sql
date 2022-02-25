-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 25-Fev-2022 às 19:20
-- Versão do servidor: 5.7.22
-- versão do PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `preco`
--

CREATE TABLE `preco` (
  `ID_PRECO` int(11) NOT NULL,
  `PRECO` decimal(4,2) DEFAULT NULL,
  `ID_PROD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `preco`
--

INSERT INTO `preco` (`ID_PRECO`, `PRECO`, `ID_PROD`) VALUES
(1, '50.99', 1),
(2, '1.99', 2),
(3, '10.90', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID_PROD` int(11) NOT NULL,
  `NOME` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COR` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ID_PROD`, `NOME`, `COR`) VALUES
(1, 'detergente', 'azul'),
(2, 'sabonete', 'vermelho'),
(3, 'miojo', 'amarelo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `preco`
--
ALTER TABLE `preco`
  ADD PRIMARY KEY (`ID_PRECO`),
  ADD KEY `ID_PROD` (`ID_PROD`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID_PROD`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `preco`
--
ALTER TABLE `preco`
  ADD CONSTRAINT `preco_ibfk_1` FOREIGN KEY (`ID_PROD`) REFERENCES `produtos` (`ID_PROD`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
