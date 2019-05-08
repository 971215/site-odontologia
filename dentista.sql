-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2019 às 18:01
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentista`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_salva_paciente` (IN `pnome` VARCHAR(200), IN `prg` VARCHAR(10), IN `pcpf` VARCHAR(14), IN `pendereco` VARCHAR(300), IN `ptelefone` VARCHAR(18), IN `pdtnascimento` DATETIME(6))  NO SQL
BEGIN
	
    DECLARE vid INT;
    
	INSERT INTO usuario(nome,rg, cpf, endereco, telefone, dtnascimento)
    VALUES(pnome, prg, pcf, pendereco, ptelefone, pdtnascimento);
    
    SET vid = LAST_INSERT_ID();
    
    
    
    SELECT * FROM paciente where id = LAST_INSERT_ID();
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_salva_usuario` (`pnome` VARCHAR(64), `plogin` VARCHAR(64), `psenha` VARCHAR(256))  BEGIN
	
    DECLARE vid INT;
    
	INSERT INTO usuario(nome, login, senha)
    VALUES(pnome, plogin, psenha);
    
    SET vid = LAST_INSERT_ID();
    
    
    
    SELECT * FROM usuario where id = LAST_INSERT_ID();
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `rg` varchar(10) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `dtnascimento` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'tsete', 'admin', 'admin'),
(2, 'asass', 'asasas', 'asasasa'),
(3, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
