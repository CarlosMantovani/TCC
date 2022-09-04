-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Maio-2022 às 17:13
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ifpr`
--
CREATE DATABASE IF NOT EXISTS `ifpr` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ifpr`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tipousuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `tipousuario`) VALUES
(1, 'Marcelo Rafael Borth', 'marcelo.borth@ifpr.edu.br', '123456', '1'),
(2, 'Rafael', 'rafael@ifpr.edu.br', '123', '2'),
(3, 'Lucas', 'lucas@ifpr.edu.br', '555', '2'),
(4, 'Pedro', 'pedro@ifpr.edu.br', '112233', '2'),
(5, 'Tiago', 'pedro@ifpr.edu.br', '1456', '2'),
(6, 'João', 'joao@ifpr.edu.br', '0123', '2'),
(8, 'Marcelo Rafael Borth', 'marcelo.borth@ifpr.edu.br', '123456', '2'),
(9, 'Marcelo Borth', 'marcelo.borth@ifpr.edu.br', '1234567890', '2'),
(10, 'Marcelo Borth', 'marcelo.borth@ifpr.edu.br', '1234567890', '2'),
(11, 'Marcelo Borth', 'marcelo.borth@ifpr.edu.br', '1234567890', '2');

--
-- Índices para tabelas despejadas
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
