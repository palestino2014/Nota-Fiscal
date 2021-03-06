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
-- Estrutura para tabela `emitente`
--

CREATE TABLE `emitente` (
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
  `insc_municipal` varchar(30) DEFAULT NULL,
  `cnae` varchar(8) DEFAULT NULL,
  `crt` varchar(1) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `emitente`
--

INSERT INTO `emitente` (`cnpj_cpf`, `nome`, `fantasia`, `logradouro`, `numero`, `complemento`, `bairro`, `cod_mun`, `municipio`, `uf`, `cep`, `cod_pais`, `pais`, `telefone`, `insc_estadual`, `insc_municipal`, `cnae`, `crt`, `email`) VALUES
('00235287000139', 'AGRODOG PETS LTDA', 'Agrodog', 'Rua Cacimba de Areia', '100', NULL, 'Pq Sao Miguel', '3518800', 'GUARULHOS', 'SP', '07260170', '1058', 'BRASIL', '1124131900', '336327689119', NULL, NULL, '3', NULL),
('03878155000113', 'BIO FLORAIS COMERCIO DE FLORAIS LTDA', 'BIO FLORAIS', 'AVENIDA JOVIANO ALVIM', '1370', NULL, 'VILA THAIS', '3504107', 'ATIBAIA', 'SP', '12942012', '1058', 'BRASIL', '1144120831', '190174750110', NULL, NULL, '3', NULL),
('03887324000181', 'ADIMAX INDUSTRIA E COMERCIO DE ALIMENTOS LTDA', 'ADIMAX', 'AVENIDA AGENOR LEME DOS SANTOS', '495', 'NENHUM', 'DISTRITO INDUSTRIAL', '3545308', 'SALTO DE PIRAPORA', 'SP', '18160000', '1058', 'BRASIL', '1534919025', '602065921117', NULL, NULL, '3', NULL),
('04661878000129', 'AGRO CAMPINAS RACOES COMERCIO DISTRIBUIDORA LTDA', 'CAMP RACOES', 'RODOVIA SP 340 KM 140+911,87', 'S/N', NULL, 'CHAC. SANTO ANTONIO', '3548005', 'SANTO ANTONIO DE POSSE', 'SP', '13830000', '1058', 'BRASIL', '1938374611', '630026884114', NULL, NULL, '3', NULL),
('05356741000123', 'MB DISTRIBUIDORA DE PRODUTOS VETERINARIOS LTDA', 'MB DISTRIBUIDORA', 'RUA JOAO PREVITALLI', '929', NULL, 'CHACARA DAS ROSAS', '3556206', 'VALINHOS', 'SP', '13272315', '1058', 'BRASIL', '1938592656', '708186953114', NULL, NULL, '3', NULL),
('05517061000144', 'MARIA TERESA CORAL CREPALDI ME', 'MARIA TERESA CORAL CREPALDI ME', 'RUA DOS TUIUIUS', '467', NULL, 'PARQUE CHAPADAO', '3538709', 'PIRACICABA', 'SP', '13421260', NULL, NULL, NULL, '535351471114', NULL, NULL, '1', NULL),
('10573521000272', 'MERCADOPAGO.COM REPRESENTACOES LTDA', 'MERCADOPAGO.COM', 'AV GUPE', '10767', 'GP COM N26 BLOCO IV', 'JARDIM BELVAL', '3505708', 'BARUERI', 'SP', '06422120', '1058', 'BRASIL', NULL, '206379731113', NULL, NULL, '3', NULL),
('10824634000112', 'SOCIAL PET COMERCIO DE PROD PARA ANIMAIS', 'SOCIAL PET', 'RUA ANGELO ORMENESE', '85', 'GALPAO A', 'PINHEIRINHO', '3556701', 'VINHEDO', 'SP', '13289466', '1058', 'BRASIL', '1938461437', '714108339114', NULL, NULL, '3', NULL),
('11199654000102', 'RVT COMERCIO E DISTRIBUICAO LTDA - EPP', 'RVT', 'RODOVIA VICE-PREFEITO HERMENEGILDO TONOLLI', '1500', 'GALPAO 13 BL2', 'DISTRITO INDUSTRIAL', '3525904', 'JUNDIAI', 'SP', '13213086', '1058', 'BRASIL', '1145219216', '407263464112', NULL, NULL, '3', NULL),
('12933715000429', 'CMR LABORATORIOS VETERINARIOS LTDA', NULL, 'ESTRADA MARIO CAMPOS-GALPAO N 100 (G3, L2)', '700', NULL, 'BAIRRO BANDEIRINHAS', '3106705', 'BETIM', 'MG', '32657002', '1058', 'BRASIL', '3125721412', '0023093460034', NULL, NULL, '3', NULL),
('15595933000146', 'SP PET COM DE PROD P ANIMAIS EIRELLI-EPP', 'SP PET', 'RUA ANGELO ORMENESE', '85', 'GALPAO C', 'PINHEIRINHO', '3556701', 'VINHEDO', 'SP', '13289466', '1058', 'BRASIL', '1938461437', '714053000118', NULL, NULL, '3', NULL),
('15648185000112', 'VETFARO COMERCIO DE PRODUTOS VETERINARIOS EIRELI', 'VETFARO', 'AV DONA CONCHETA PADULA', '342', NULL, 'JD. AURELIA', '3509502', 'CAMPINAS', 'SP', '13033020', '1058', 'Brasil', '1925140400', '795266871113', NULL, NULL, '3', NULL),
('17125263000120', 'WVT COM DISTRIB PROD PARA ANIMAIS LTDA', 'WVT', 'RUA WENCESLAU DE QUEIROZ', '129', NULL, 'VILA SAO BENTO', '3525904', 'JUNDIAI', 'SP', '13206721', '1058', 'BRASIL', '1145823217', '407308157119', NULL, NULL, '3', NULL),
('17359233000692', 'TECIDOS E ARMARINHOS MIGUEL BARTOLOMEU S/A', 'TAMBASA - Filial Sao Paulo', 'AV EMILIO PALUDETTO', '6120 SL', NULL, 'RESIDENCIAL DOURADO', '3516200', 'FRANCA', 'SP', '14400000', '1058', 'BRASIL', '3133590000', '310466965114', NULL, NULL, '3', NULL),
('21533324000165', 'NOSPET DIST ART P/ANIMAIS LTDA ME', 'NOSPET DISTRIBUIDORA', 'RUA NUNCIO HIPOLITO', '378', NULL, 'JD AGROLAR', '3545159', 'SALTINHO', 'SP', '13440000', '1058', 'BRASIL', '1934393792', '759010904116', NULL, NULL, '1', NULL),
('23797376003866', 'BCR COMERCIO E INDUSTRIA SA', 'BCR - FILIAL QUELUZ', 'RUA PEDRO NOVAES', '165', 'CASA C', 'PALHA', '3541901', 'QUELUZ', 'SP', '12800000', '1058', 'BRASIL', '1231472563', '567012005111', NULL, NULL, '3', NULL),
('24129643000106', 'Vetcom Comercio de Produtos Veterinarios Ltda - EPP', 'Vetcom', 'Rua Antonia Martins Luiz', '474', NULL, 'Distrito Industrial', '3520509', 'Indaiatuba', 'SP', '13347404', '1058', NULL, '1939358999', '353285944118', NULL, NULL, '1', NULL),
('27371224000166', 'I C CREPALDI COMERCIAL ME', 'I C CREPALDI COMERCIAL', 'RUA DOS TUIUIUS', '455', NULL, 'PARQUE CHAPADAO', '3538709', 'PIRACICABA', 'SP', '13421260', NULL, NULL, '1934142439', '535644488110', NULL, NULL, '1', NULL),
('27437262000174', 'MEDPET COM E DISTR PROD ANIMAIS EIRELI', 'MP', 'RUA JOAO ATILIO FRANZINI', '70', NULL, 'LOTEAMENTO PARQUE EMPRESARIAL ADELELMO CORRADINI', '3523404', 'ITATIBA', 'SP', '13257596', '1058', 'BRASIL', '1145248872', '382115574117', NULL, NULL, '3', NULL),
('28353896000101', 'MATRIZ FORT S&P COMERCIO E REPRES. LTDA', NULL, 'RUA ANTONIO RAPOSO TAVARES LOTE 23 QUADRA C', '531', NULL, 'MACUCO', '3556206', 'VALINHOS', 'SP', '13279390', '1058', 'BRASIL', '1931128484', '708137855116', NULL, NULL, '3', NULL),
('54373188000142', 'AGROSOLUCAO INSUMOS AGRICOLAS LTDA', 'AGROSOLUCAO INSUMOS AGRICOLAS LTDA', 'RUA SOARES', '327', NULL, 'JARDIM SOARES', '3522604', 'ITAPIRA', 'SP', '13976052', '1058', 'BRASIL', '1938632789', '374018350110', NULL, NULL, '3', NULL),
('62527619000530', 'ROYAL CANIN DO BRASILINDUSTRIA E COMERCIO LTDA', 'ROYAL CANIN DO BRASIL', 'AV PIERRE SIMON DE LAPLACE', '751', NULL, 'Aparecidinha', '3509502', 'CAMPINAS', 'SP', '13069320', '1058', 'BRASIL', '1932839000', '795120111112', NULL, NULL, '3', NULL),
('65074213000537', 'NIPPON CHEMICAL IND COM SAN E DET PROF LTDA', 'NIPPON CHEMICAL IND E COM  S. D. P. LTDA', 'RUA VICENTE MARTINI', '234', NULL, 'COM. VITORIA MARTINI', '3520509', 'INDAIATUBA', 'SP', '13347621', '1058', 'BRASIL', '551939350058', '353101611115', '1332188', '2063100', '3', NULL),
('71611313000124', 'REINALDO PIVETTA LIMEIRA - ME', 'COMERCIAL SANTA ELIZA', 'AVENIDA DOUTOR FABRICIO VAMPRE', '1169', NULL, 'JARDIM PIRATININGA', '3526902', 'LIMEIRA', 'SP', '13484323', '1058', 'BRASIL', '1934519627', '417082203114', NULL, NULL, '1', NULL),
('72861222000100', 'Sbardellini e Cia. Ltda.', 'Fuzil', 'Rod. SP 344 km 243,4', 's/n', NULL, 'Chacara Claudia', '3556404', 'Vargem Grande do Sul', 'SP', '13880000', '1058', 'BRASIL', '1936415900', '711001700110', '70631038', '4672900', '3', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `emitente`
--
ALTER TABLE `emitente`
  ADD PRIMARY KEY (`cnpj_cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
