-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 04-Dez-2020 às 11:33
-- Versão do servidor: 8.0.22-0ubuntu0.20.04.3
-- versão do PHP: 7.4.3

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
  `consulta` int NOT NULL,
  `medico_FK` int NOT NULL,
  `paciente_FK` int NOT NULL,
  `horario` varchar(7) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tbconsultas`
--

INSERT INTO `tbconsultas` (`consulta`, `medico_FK`, `paciente_FK`, `horario`, `data`) VALUES
(1, 2, 2, '11:23', '2020-12-01'),
(2, 6, 3, '23:04', '0023-04-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbespecialidades`
--

CREATE TABLE `tbespecialidades` (
  `especialidade` int NOT NULL,
  `descricao` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
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
  `medico` int NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `CRM` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `especialidade_FK` int NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tbmedicos`
--

INSERT INTO `tbmedicos` (`medico`, `nome`, `CRM`, `especialidade_FK`, `data_cadastro`) VALUES
(2, 'Bruno Souza', '65487-SP', 3, '2020-09-20'),
(3, 'Ana Santos', '65492-PR', 1, '2020-09-20'),
(4, 'Camila Matos', '654545-RJ', 3, '2020-09-20'),
(5, 'Paula Camargo', '56545-SC', 5, '2020-09-20'),
(6, 'Ana Santos', '78958-RS', 4, '2020-09-20'),
(16, 'fsdfsd', 'fsdfsd', 1, '2020-09-30'),
(18, 'Henrique Alves de Amorim', '7598347958437979', 3, '2020-09-30'),
(20, 'João da Silva', '987485-SP', 2, '2020-12-02'),
(24, 'b', 'b', 3, '2020-12-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpacientes`
--

CREATE TABLE `tbpacientes` (
  `paciente` int NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cpf` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `plano` tinyint(1) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tbpacientes`
--

INSERT INTO `tbpacientes` (`paciente`, `nome`, `cpf`, `plano`, `data_cadastro`, `data_nascimento`) VALUES
(2, 'igor5', '12314', 0, '2020-12-03', '2020-12-22'),
(3, 'iguinho1', '12314', 0, '2020-12-03', '2020-12-22'),
(4, 'carlos', 'gh', 1, '2020-12-03', '0056-04-06'),
(5, 'igor', '12312312323', 1, '2020-12-03', '1997-08-11'),
(8, 'luciano', '23423', 1, '2020-12-03', '0111-11-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `usuario` int NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `privilegio` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbusuarios`
--

INSERT INTO `tbusuarios` (`usuario`, `login`, `senha`, `nome`, `privilegio`) VALUES
(1, 'user', 'a141c47927929bc2d1fb6d336a256df4', 'John Doe', 0),
(2, 'admin', '0192023a7bbd73250516f069df18b500', 'Henrique Adm', 1);

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
-- Índices para tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbconsultas`
--
ALTER TABLE `tbconsultas`
  MODIFY `consulta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbespecialidades`
--
ALTER TABLE `tbespecialidades`
  MODIFY `especialidade` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbmedicos`
--
ALTER TABLE `tbmedicos`
  MODIFY `medico` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `tbpacientes`
--
ALTER TABLE `tbpacientes`
  MODIFY `paciente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
