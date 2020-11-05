-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 30-Set-2020 às 05:16
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ehealth`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbconsultas`
--

CREATE TABLE `tbconsultas` (
  `consulta` int(11) NOT NULL,
  `medico_FK` int(11) NOT NULL,
  `paciente_FK` int(11) NOT NULL,
  `horario` varchar(7) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbespecialidades`
--

CREATE TABLE `tbespecialidades` (
  `especialidade` int(11) NOT NULL,
  `descricao` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tbespecialidades`
--

INSERT INTO `tbespecialidades` (`especialidade`, `descricao`) VALUES
(1, 'Geriatria'),
(2, 'Pediatria'),
(3, 'Cardiologia'),
(4, 'Clínica Médica'),
(5, 'Neurologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmedicos`
--

CREATE TABLE `tbmedicos` (
  `medico` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `CRM` varchar(20) COLLATE utf8_bin NOT NULL,
  `especialidade_FK` int(11) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tbmedicos`
--

INSERT INTO `tbmedicos` (`medico`, `nome`, `CRM`, `especialidade_FK`, `data_cadastro`) VALUES
(1, 'João da Silva', '987485-SP', 1, '2020-09-20'),
(2, 'Bruno Souza', '65487-SP', 2, '2020-09-20'),
(3, 'Ana Santos', '65492-PR', 1, '2020-09-20'),
(4, 'Camila Matos', '654545-RJ', 3, '2020-09-20'),
(5, 'Paula Camargo', '56545-SC', 5, '2020-09-20'),
(6, 'Ana Santos', '78958-RS', 4, '2020-09-20'),
(16, 'fsdfsd', 'fsdfsd', 1, '2020-09-30'),
(18, 'Henrique Alves de Amorim', '7598347958437979', 3, '2020-09-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpacientes`
--

CREATE TABLE `tbpacientes` (
  `paciente` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `cpf` varchar(20) COLLATE utf8_bin NOT NULL,
  `idade` int(11) NOT NULL,
  `plano` tinyint(1) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_alteracao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbconsultas`
--
ALTER TABLE `tbconsultas`
  ADD PRIMARY KEY (`consulta`);

--
-- Índices para tabela `tbespecialidades`
--
ALTER TABLE `tbespecialidades`
  ADD PRIMARY KEY (`especialidade`);

--
-- Índices para tabela `tbmedicos`
--
ALTER TABLE `tbmedicos`
  ADD PRIMARY KEY (`medico`);

--
-- Índices para tabela `tbpacientes`
--
ALTER TABLE `tbpacientes`
  ADD PRIMARY KEY (`paciente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbconsultas`
--
ALTER TABLE `tbconsultas`
  MODIFY `consulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbespecialidades`
--
ALTER TABLE `tbespecialidades`
  MODIFY `especialidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbmedicos`
--
ALTER TABLE `tbmedicos`
  MODIFY `medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tbpacientes`
--
ALTER TABLE `tbpacientes`
  MODIFY `paciente` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
