-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2019 às 13:33
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `codebase`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` smallint(36) NOT NULL,
  `nome_completo` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` char(60) NOT NULL,
  `curso` enum('html','css','js','php') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome_completo`, `email`, `senha`, `curso`) VALUES
(6, 'Aline Paz', 'aline.soares.2@hotmail.com', '$2y$10$6p8VFBAM3pXJCuNraw8O1OCXB6az7ORb.t2neRIxID1FEwOjEaIuq', 'html'),
(27, 'Ana', 'ana@gmail.com', '$2y$10$yBE4NyI4GK6eVY8pNbkL6OhASM04qnyC6JkC.8sk5Ndk9kCvLuCAG', 'html'),
(33, 'fulano', 'fulano@gmail', '$2y$10$UJ/P/omvWxmHhAM4dpdlWuOfwNl1b20flLg4pWnO98VwjbZbHJAZ.', 'php'),
(34, 'ana', 'ana@hotmail.com', '$2y$10$uDzsqGGKjV1RkIwYDfyAyO1sVj40u/ySE3rc7rc82biwF6lEjrzKm', 'php'),
(36, 'Eliane Oliveira', 'eliane.oliverd@gmail.com', '$2y$10$B4kVSjRnyatj6SQE52a8Se1vZy5a7KXP1q0QU.kTvhRJsUpIO9CWq', 'js'),
(38, 'tata paz', 'tata@hotmail.com', '$2y$10$S0t5JQhKhQTM3nLyQck7ceeIPEBNLb./IDbvdzhf/hyHfb62D/cHO', 'js'),
(40, 'lucas', 'lucas@hotmail.com', '$2y$10$TOwqi73SL56T1fufiFuAROOCAS6aNPjGU0yAzdo6n9Xts5Xy3XCba', 'js');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` smallint(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
