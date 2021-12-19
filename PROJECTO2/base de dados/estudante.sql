-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Dez-2021 às 23:59
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estudante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `identificacao`
--

CREATE TABLE `identificacao` (
  `nacionalidade` varchar(45) NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `chave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `identificacao`
--

INSERT INTO `identificacao` (`nacionalidade`, `provincia`, `municipio`, `chave`) VALUES
('brazil', 'ola', 'rio2 ', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(110) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `telefone`, `sexo`, `data_nasc`, `senha`) VALUES
(3, 'helvecio', 'vidal@gmail.com', '666666', 'masculino', '2021-12-21', '3453434'),
(5, 'calau', 'calau@gmail.com', '98988', 'femenino', '2021-12-06', '3453434');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `identificacao`
--
ALTER TABLE `identificacao`
  ADD KEY `chave` (`chave`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `identificacao`
--
ALTER TABLE `identificacao`
  ADD CONSTRAINT `identificacao_ibfk_1` FOREIGN KEY (`chave`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
