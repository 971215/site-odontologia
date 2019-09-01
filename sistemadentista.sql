-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jul-2019 às 19:04
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
-- Database: `sistemadentista`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_salva_noticia` (IN `ptitulo` VARCHAR(200), IN `ptexto` VARCHAR(5000), IN `purl` VARCHAR(100))  NO SQL
BEGIN
	
    DECLARE vid INT;
    
	INSERT INTO teste(titulo,texto, url)
    VALUES(ptitulo, ptexto, purl);
    
    SET vid = LAST_INSERT_ID();
    
    
    
    SELECT * FROM teste where id = LAST_INSERT_ID();
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_salva_paciente` (IN `pnome` VARCHAR(200), IN `prg` VARCHAR(10), IN `pcpf` VARCHAR(14), IN `pendereco` VARCHAR(300), IN `ptelefone` VARCHAR(18), IN `pdtnascimento` DATETIME(6))  NO SQL
BEGIN
	
    DECLARE vid INT;
    
	INSERT INTO paciente(nomePaciente,rgPaciente, cpfPaciente, enderecoPaciente, telefonePaciente, dtnascimentoPaciente, Dentista_idDentista, Usuario_idUsuario)
    VALUES(pnome, prg, pcpf, pendereco, ptelefone, pdtnascimento, 1,2);
    
    SET vid = LAST_INSERT_ID();
    
    
    
    SELECT * FROM paciente where id = LAST_INSERT_ID();
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_salva_servico` (IN `pDescricao` VARCHAR(1000), IN `pPreco` VARCHAR(14), IN `pPaciente_idPaciente` INT(11), IN `Dentista_idDentista` INT(11))  NO SQL
BEGIN
	
    DECLARE vid INT;
    
	INSERT INTO servico(DescricaoServico,preco, Paciente_idPaciente, Dentista_idDentista)
    VALUES(pDescricao, pPreco, pPaciente_idPaciente, Dentista_idDentista);
    
    SET vid = LAST_INSERT_ID();
    
    
    
    SELECT * FROM servico where idServico = LAST_INSERT_ID();
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_salva_usuario` (`pnome` VARCHAR(64), `plogin` VARCHAR(64), `psenha` VARCHAR(256))  BEGIN
	    DECLARE vid INT;
    
	INSERT INTO usuario(nomeUsuario, loginUsuario, senhaUsuario)
    VALUES(pnome, plogin, psenha);
    
    SET vid = LAST_INSERT_ID();
    
    
    
    SELECT * FROM usuario where idUsuario = LAST_INSERT_ID();
	END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentista`
--

CREATE TABLE `dentista` (
  `idDentista` int(11) NOT NULL,
  `NomeDentista` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dentista`
--

INSERT INTO `dentista` (`idDentista`, `NomeDentista`) VALUES
(1, 'dentista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menuss`
--

CREATE TABLE `menuss` (
  `id` int(11) NOT NULL,
  `LinkMenu` varchar(100) NOT NULL,
  `DescMenu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `menuss`
--

INSERT INTO `menuss` (`id`, `LinkMenu`, `DescMenu`) VALUES
(1, '', 'Home'),
(2, 'sobre-nos', 'sobre nós'),
(3, 'servicos', 'Serviços'),
(4, 'portfolio', 'Portfólio'),
(5, 'login', 'Acesse sua Conta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `idPaciente` int(11) NOT NULL,
  `NomePaciente` varchar(200) NOT NULL,
  `CPFPaciente` varchar(14) DEFAULT NULL,
  `RGPaciente` varchar(10) DEFAULT NULL,
  `DtNascPaciente` date NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Dentista_idDentista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`idPaciente`, `NomePaciente`, `CPFPaciente`, `RGPaciente`, `DtNascPaciente`, `Usuario_idUsuario`, `Dentista_idDentista`) VALUES
(1, 'teste', 'teste', 'teste', '0000-00-00', 7, 1),
(2, 'teste2', '0000000000', '0000000', '2017-07-07', 7, 1),
(3, 'teste3', '00000000003', '3333333', '2015-07-07', 7, 1),
(4, 'teste4', '00000000004', '44444444', '2015-07-05', 7, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `idServico` int(11) NOT NULL,
  `DescricaoServico` varchar(500) NOT NULL,
  `Preco` double DEFAULT NULL,
  `Paciente_idPaciente` int(11) NOT NULL,
  `Dentista_idDentista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`idServico`, `DescricaoServico`, `Preco`, `Paciente_idPaciente`, `Dentista_idDentista`) VALUES
(2, 'test', 50, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` varchar(2000) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `NomeUsuario` varchar(200) NOT NULL,
  `LoginUsuario` varchar(50) NOT NULL,
  `SenhaUsuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `NomeUsuario`, `LoginUsuario`, `SenhaUsuario`) VALUES
(7, 'Andre', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dentista`
--
ALTER TABLE `dentista`
  ADD PRIMARY KEY (`idDentista`);

--
-- Indexes for table `menuss`
--
ALTER TABLE `menuss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`),
  ADD UNIQUE KEY `CPFPaciente` (`CPFPaciente`),
  ADD UNIQUE KEY `RGPaciente` (`RGPaciente`),
  ADD KEY `fk_Paciente_Usuario` (`Usuario_idUsuario`),
  ADD KEY `fk_Paciente_Dentista1` (`Dentista_idDentista`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idServico`),
  ADD KEY `Paciente_idPaciente` (`Paciente_idPaciente`),
  ADD KEY `fk_Servico_Dentista1` (`Dentista_idDentista`);

--
-- Indexes for table `teste`
--
ALTER TABLE `teste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `LoginUsuario` (`LoginUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dentista`
--
ALTER TABLE `dentista`
  MODIFY `idDentista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menuss`
--
ALTER TABLE `menuss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teste`
--
ALTER TABLE `teste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_Paciente_Dentista1` FOREIGN KEY (`Dentista_idDentista`) REFERENCES `dentista` (`idDentista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Paciente_Usuario` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `fk_Servico_Dentista1` FOREIGN KEY (`Dentista_idDentista`) REFERENCES `dentista` (`idDentista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
