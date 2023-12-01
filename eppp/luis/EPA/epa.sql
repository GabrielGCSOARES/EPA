-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Out-2023 às 20:46
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epa`
--
CREATE DATABASE IF NOT EXISTS `epa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `epa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pharmaon`
--

CREATE TABLE `pharmaon` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `date` int(11) NOT NULL,
  `horas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pharmaon`
--

INSERT INTO `pharmaon` (`id`, `nome`, `date`, `horas`) VALUES
(1, 'adsdsa', 1, 2),
(2, 'adsdsa', 1, 2),
(3, 'aaa', 1, 2),
(4, 'aa', 1, 2),
(5, 'Dipirona', 3, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pharmaon`
--
ALTER TABLE `pharmaon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pharmaon`
--
ALTER TABLE `pharmaon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
