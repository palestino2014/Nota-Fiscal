-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/10/2018 às 04:36
-- Versão do servidor: 10.1.32-MariaDB
-- Versão do PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rodabras`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `destinatario`
--

CREATE TABLE `destinatario` (
  `cnpj_cpf` varchar(15) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `fantasia` varchar(100) DEFAULT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `numero` varchar(7) DEFAULT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cod_mun` varchar(10) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `cod_pais` varchar(5) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `insc_estadual` varchar(15) DEFAULT NULL,
  `ind_ie_dest` varchar(1) DEFAULT NULL,
  `insc_municipal` varchar(30) DEFAULT NULL,
  `cnae` varchar(8) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `destinatario`
--

INSERT INTO `destinatario` (`cnpj_cpf`, `nome`, `fantasia`, `logradouro`, `numero`, `complemento`, `bairro`, `cod_mun`, `municipio`, `uf`, `cep`, `cod_pais`, `pais`, `telefone`, `insc_estadual`, `ind_ie_dest`, `insc_municipal`, `cnae`, `email`) VALUES
('01411299132', 'Gustavo KaiowA', NULL, 'Rua Laranjal', '35', NULL, 'Vila Fascina', '3526902', 'LIMEIRA', 'SP', '13484016', '1058', 'BRASIL', NULL, NULL, '9', NULL, NULL, NULL),
('04906246000188', 'COMERCIAL DE FRUTAS LIMA FORTES - LTDA', NULL, 'RUA PASCHOAL PINTO FERRAZ', '025', NULL, 'JD. SENADOR VERGUEIRO', '3526902', 'LIMEIRA', 'SP', '01001230', '1058', 'BRASIL', NULL, '417233470112', '1', NULL, NULL, 'ulisses@limafortes.com.br'),
('08616448000146', 'FRANCISCO DA SILVA NETTO E OUTROS', NULL, 'AVENIDA DOUTOR HIPOLITO PINTO RIBEIRO', '690', NULL, 'PIRES', '3526902', 'LIMEIRA', 'SP', '13486321', '1058', 'BRASIL', NULL, '417281961112', '1', NULL, NULL, 'adm@contrutoraebec.com.br'),
('51467132000169', 'ABILIO PEDRO INDUSTRIA E COMERCIO LTDA.', NULL, 'AV CONEGO MANOEL ALVES', '2555', NULL, 'PARQUE ABILIO PEDRO', '3526902', 'LIMEIRA', 'SP', '13483342', '1058', 'BRASIL', '1934519293', '417001300114', '1', NULL, NULL, 'secretaria@calcariocruzeiro.com.br'),
('71611313000124', 'REINALDO PIVETTA LIMEIRA ME', NULL, 'AVENIDA DOUTOR FABRICIO VAMPRE', '1169', NULL, 'JD ITALIA', '3526902', 'LIMEIRA', 'SP', '13484440', '1058', 'BRASIL', '191934519627', '417082203114', '1', NULL, NULL, 'reipivetta@gmail.com');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `destinatario`
--
ALTER TABLE `destinatario`
  ADD PRIMARY KEY (`cnpj_cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
