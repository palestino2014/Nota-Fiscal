-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13/11/2018 às 02:10
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
-- Estrutura para tabela `teste`
--

CREATE TABLE `teste` (
  `cUF` int(10) NOT NULL,
  `cNF` double NOT NULL,
  `natOp` varchar(200) NOT NULL,
  `indPag` int(11) NOT NULL,
  `mod1` int(11) NOT NULL,
  `serie` int(11) NOT NULL,
  `dhEmi` varchar(35) NOT NULL,
  `tpNF` int(11) NOT NULL,
  `idDest` int(11) NOT NULL,
  `tpImp` int(11) NOT NULL,
  `tpEmis` int(11) NOT NULL,
  `cDV` int(11) NOT NULL,
  `tpAmbide` int(11) NOT NULL,
  `finNFe` int(11) NOT NULL,
  `indFinal` int(11) NOT NULL,
  `indPres` int(11) NOT NULL,
  `procEmi` int(11) NOT NULL,
  `verProc` varchar(250) NOT NULL,
  `CNPJEmit` double NOT NULL,
  `xNomeEmit` varchar(350) NOT NULL,
  `xFantEmit` varchar(350) NOT NULL,
  `xLgrenderEmit` varchar(350) NOT NULL,
  `nroEnderEmit` int(11) NOT NULL,
  `xBairroEnderEmit` varchar(300) NOT NULL,
  `cMunEmit` double NOT NULL,
  `xMunEmit` varchar(350) NOT NULL,
  `UFEmit` varchar(4) NOT NULL,
  `CEPEmit` varchar(300) NOT NULL,
  `cPaisEmit` int(11) NOT NULL,
  `xPaisEmit` varchar(140) NOT NULL,
  `IEEmit` double NOT NULL,
  `CrtEmit` int(11) NOT NULL,
  `CPFDest` double NOT NULL,
  `xNomeDest` varchar(200) NOT NULL,
  `xLgrDest` varchar(350) NOT NULL,
  `nroDest` int(11) NOT NULL,
  `xBairroDest` varchar(250) NOT NULL,
  `cMunDest` double NOT NULL,
  `xMunDest` varchar(150) NOT NULL,
  `UFDest` varchar(5) NOT NULL,
  `CEPDest` double NOT NULL,
  `cPaisDest` double NOT NULL,
  `xPaisDest` varchar(200) NOT NULL,
  `indIEDest` int(11) NOT NULL,
  `vBCicmstot` float NOT NULL,
  `vICMSicmstot` float NOT NULL,
  `vICMSDeson` float NOT NULL,
  `vFCPtot` float NOT NULL,
  `vBCSTtot` float NOT NULL,
  `vSTtot` float NOT NULL,
  `vFCPSTtot` float NOT NULL,
  `vFCPSTRet` float NOT NULL,
  `vProdTot` float NOT NULL,
  `vFreteTot` float NOT NULL,
  `vSegTot` float NOT NULL,
  `vDescTot` float NOT NULL,
  `vIPITot` float NOT NULL,
  `vIPIDevol` float NOT NULL,
  `vPIS` float NOT NULL,
  `vCOFINS` float NOT NULL,
  `vOutro` float NOT NULL,
  `vNF` float NOT NULL,
  `chNFe` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `teste`
--

INSERT INTO `teste` (`cUF`, `cNF`, `natOp`, `indPag`, `mod1`, `serie`, `dhEmi`, `tpNF`, `idDest`, `tpImp`, `tpEmis`, `cDV`, `tpAmbide`, `finNFe`, `indFinal`, `indPres`, `procEmi`, `verProc`, `CNPJEmit`, `xNomeEmit`, `xFantEmit`, `xLgrenderEmit`, `nroEnderEmit`, `xBairroEnderEmit`, `cMunEmit`, `xMunEmit`, `UFEmit`, `CEPEmit`, `cPaisEmit`, `xPaisEmit`, `IEEmit`, `CrtEmit`, `CPFDest`, `xNomeDest`, `xLgrDest`, `nroDest`, `xBairroDest`, `cMunDest`, `xMunDest`, `UFDest`, `CEPDest`, `cPaisDest`, `xPaisDest`, `indIEDest`, `vBCicmstot`, `vICMSicmstot`, `vICMSDeson`, `vFCPtot`, `vBCSTtot`, `vSTtot`, `vFCPSTtot`, `vFCPSTRet`, `vProdTot`, `vFreteTot`, `vSegTot`, `vDescTot`, `vIPITot`, `vIPIDevol`, `vPIS`, `vCOFINS`, `vOutro`, `vNF`, `chNFe`) VALUES
(35, 97518183, 'VENDA', 0, 55, 1, '2018-08-08T10:25:55-03:00', 1, 1, 1, 1, 3, 1, 1, 0, 1, 0, '3.137.146.170', 71611313000124, 'REINALDO PIVETTA LIMEIRA - ME', 'COMERCIAL SANTA ELIZA', 'AVENIDA DOUTOR FABRICIO VAMPRE', 1169, 'JARDIM PIRATININGA', 3526902, 'LIMEIRA', 'SP', '13484323', 1058, 'BRASIL', 417082203114, 1, 0, 'ABILIO PEDRO INDUSTRIA E COMERCIO LTDA.', 'AV CONEGO MANOEL ALVES', 2555, 'PARQUE ABILIO PEDRO', 3526902, 'LIMEIRA', 'SP', 13483342, 1058, 'BRASIL', 1, 0, 0, 0, 0, 0, 0, 0, 0, 390.8, 0, 0, 0, 0, 0, 0, 0, 0, 390.8, '35180871611313000124550010000000641975181833'),
(35, 67961566, 'REMESSA PARA TROCA EM GARANTIA', 0, 55, 1, '2018-05-22T11:40:34-03:00', 1, 1, 1, 1, 6, 1, 1, 1, 2, 0, 'ABACOS V50B0104', 10573521000272, 'MERCADOPAGO.COM REPRESENTACOES LTDA', 'MERCADOPAGO.COM', 'AV GUPE', 10767, 'JARDIM BELVAL', 3505708, 'BARUERI', 'SP', '06422120', 1058, 'BRASIL', 206379731113, 3, 1411299132, 'Gustavo KaiowA', 'Rua Laranjal', 35, 'Vila Fascina', 3526902, 'LIMEIRA', 'SP', 13484016, 1058, 'BRASIL', 9, 238.8, 42.98, 0, 0, 0, 0, 0, 0, 238.8, 0, 0, 0, 0, 0, 0, 0, 0, 238.8, '35180510573521000272550010008313481679615666'),
(35, 83568673, 'VENDA', 0, 55, 1, '2018-08-14T09:33:30-03:00', 1, 1, 1, 1, 2, 1, 1, 0, 1, 0, '3.137.146.170', 71611313000124, 'REINALDO PIVETTA LIMEIRA - ME', 'COMERCIAL SANTA ELIZA', 'AVENIDA DOUTOR FABRICIO VAMPRE', 1169, 'JARDIM PIRATININGA', 3526902, 'LIMEIRA', 'SP', '13484323', 1058, 'BRASIL', 417082203114, 1, 0, 'FRANCISCO DA SILVA NETTO E OUTROS', 'AVENIDA DOUTOR HIPOLITO PINTO RIBEIRO', 690, 'PIRES', 3526902, 'LIMEIRA', 'SP', 13486321, 1058, 'BRASIL', 1, 0, 0, 0, 0, 0, 0, 0, 0, 185.5, 0, 0, 0, 0, 0, 0, 0, 0, 185.5, '35180871611313000124550010000000661835686732'),
(35, 13033239, 'REMESSA DE BONIFICACAO', 0, 55, 1, '2018-08-30T00:00:00-03:00', 1, 1, 1, 1, 0, 1, 1, 1, 9, 0, '4.0.0', 27437262000174, 'MEDPET COM E DISTR PROD ANIMAIS EIRELI', 'MP', 'RUA JOAO ATILIO FRANZINI', 70, 'LOTEAMENTO PARQUE EMPRESARIAL ADELELMO CORRADINI', 3523404, 'ITATIBA', 'SP', '13257596', 1058, 'BRASIL', 382115574117, 3, 0, '691 - REINALDO PIVETTA LIMEIRA - ME', 'AV DOUTOR FABRICIO VAMPRE', 1169, 'JARDIM PIRATININGA', 3526902, 'LIMEIRA', 'SP', 13484339, 1058, 'BRASIL', 9, 226.56, 40.78, 0, 0, 0, 0, 0, 0, 226.56, 0, 0, 0, 0, 0, 0, 0, 0, 226.56, '35180827437262000174550010000158851130332390'),
(35, 22165178, 'VENDA DE MERCADORIA', 0, 55, 1, '2018-08-30T00:00:00-03:00', 1, 1, 1, 1, 5, 1, 1, 1, 9, 0, '4.0.0', 27437262000174, 'MEDPET COM E DISTR PROD ANIMAIS EIRELI', 'MP', 'RUA JOAO ATILIO FRANZINI', 70, 'LOTEAMENTO PARQUE EMPRESARIAL ADELELMO CORRADINI', 3523404, 'ITATIBA', 'SP', '13257596', 1058, 'BRASIL', 382115574117, 3, 0, '691 - REINALDO PIVETTA LIMEIRA - ME', 'AV DOUTOR FABRICIO VAMPRE', 1169, 'JARDIM PIRATININGA', 3526902, 'LIMEIRA', 'SP', 13484339, 1058, 'BRASIL', 9, 651.34, 117.23, 0, 0, 0, 0, 0, 0, 651.34, 0, 0, 0, 0, 0, 4.22, 19.54, 0, 651.34, '35180827437262000174550010000158841221651785'),
(35, 20230379, 'VENDA SUBS TRIBUTARIA', 0, 55, 1, '2018-08-29T00:00:00-03:00', 1, 1, 1, 1, 8, 1, 1, 0, 9, 0, '4.0.0', 15595933000146, 'SP PET COM DE PROD P ANIMAIS EIRELLI-EPP', 'SP PET', 'RUA ANGELO ORMENESE', 85, 'PINHEIRINHO', 3556701, 'VINHEDO', 'SP', '13289466', 1058, 'BRASIL', 714053000118, 3, 0, '209 - REINALDO PIVETTA LIMEIRA ME', 'AV DR FABRICIO VAMPRE', 1, 'JD PIRATININGA', 3526902, 'LIMEIRA', 'SP', 13484323, 1058, 'BRASIL', 1, 0, 0, 0, 0, 0, 0, 0, 0, 3209.4, 0, 0, 0, 0, 0, 20.87, 96.3, 0, 3209.4, '35180815595933000146550010001137801202303798'),
(35, 1143581, 'VENDA', 0, 55, 1, '2018-08-28T10:55:11-02:00', 1, 1, 1, 1, 5, 1, 1, 0, 0, 0, 'NFe_Util_2G', 4661878000129, 'AGRO CAMPINAS RACOES COMERCIO DISTRIBUIDORA LTDA', 'CAMP RACOES', 'RODOVIA SP 340 KM 140+911,87', 0, 'CHAC. SANTO ANTONIO', 3548005, 'SANTO ANTONIO DE POSSE', 'SP', '13830000', 1058, 'BRASIL', 630026884114, 3, 0, 'REINALDO PIVETTA LIMEIRA-ME', 'AVENIDA DOUTOR FABRICIO VAMPRE', 1169, 'JD NOVA ITALIA', 3526902, 'LIMEIRA', 'SP', 13484339, 1058, 'BRASIL', 1, 133.64, 24.05, 0, 0, 0, 0, 0, 0, 3267.32, 0, 0, 0, 0, 0, 53.97, 248.26, 0, 3267.32, '35180804661878000129550010014357831011435815'),
(35, 27114377, 'VENDA DE MERCADORIA', 0, 55, 1, '2018-08-27T00:00:00-03:00', 1, 1, 1, 1, 3, 1, 1, 1, 9, 0, '4.0.0', 17125263000120, 'WVT COM DISTRIB PROD PARA ANIMAIS LTDA', 'WVT', 'RUA WENCESLAU DE QUEIROZ', 129, 'VILA SAO BENTO', 3525904, 'JUNDIAI', 'SP', '13206721', 1058, 'BRASIL', 407308157119, 3, 0, '691 - REINALDO PIVETTA LIMEIRA - ME', 'AV DOUTOR FABRICIO VAMPRE', 1169, 'JARDIM PIRATININGA', 3526902, 'LIMEIRA', 'SP', 13484339, 1058, 'BRASIL', 9, 587.59, 105.77, 0, 0, 0, 0, 0, 0, 587.59, 0, 0, 0, 0, 0, 2.96, 13.63, 0, 587.59, '35180817125263000120550010000459271271143773'),
(35, 1143535, 'VENDA', 0, 55, 1, '2018-08-22T12:33:06-02:00', 1, 1, 1, 1, 3, 1, 1, 0, 0, 0, 'NFe_Util_2G', 4661878000129, 'AGRO CAMPINAS RACOES COMERCIO DISTRIBUIDORA LTDA', 'CAMP RACOES', 'RODOVIA SP 340 KM 140+911,87', 0, 'CHAC. SANTO ANTONIO', 3548005, 'SANTO ANTONIO DE POSSE', 'SP', '13830000', 1058, 'BRASIL', 630026884114, 3, 0, 'REINALDO PIVETTA LIMEIRA-ME', 'AVENIDA DOUTOR FABRICIO VAMPRE', 1169, 'JD NOVA ITALIA', 3526902, 'LIMEIRA', 'SP', 13484339, 1058, 'BRASIL', 1, 44.44, 8, 0, 0, 0, 0, 0, 0, 275.26, 0, 0, 0, 0, 0, 4.54, 20.91, 0, 275.26, '35180804661878000129550010014353311011435353'),
(35, 57102360, 'Venda de mercadoria adquirida', 0, 55, 1, '2018-08-23T07:52:00-03:00', 1, 1, 1, 1, 6, 1, 1, 0, 1, 0, '4.00', 5517061000144, 'MARIA TERESA CORAL CREPALDI ME', 'MARIA TERESA CORAL CREPALDI ME', 'RUA DOS TUIUIUS', 467, 'PARQUE CHAPADAO', 3538709, 'PIRACICABA', 'SP', '13421260', 0, '', 535351471114, 1, 0, 'REINALDO PIVETTA LIMEIRA ME', 'AV. FRABRICIO VAMPRE', 1159, 'JD PIRATININGA', 3526902, 'LIMEIRA', 'SP', 13484339, 1058, 'Brasil', 1, 0, 0, 0, 0, 0, 0, 0, 0, 81.59, 0, 0, 0, 0, 0, 0, 0, 0, 81.59, '35180805517061000144550010000051171571023606'),
(35, 8627, 'VENDA DE MERCADORIA', 0, 55, 1, '2018-08-22T17:05:08-03:00', 1, 1, 1, 1, 4, 1, 1, 0, 0, 0, 'EDE - V5.0', 21533324000165, 'NOSPET DIST ART P/ANIMAIS LTDA ME', 'NOSPET DISTRIBUIDORA', 'RUA NUNCIO HIPOLITO', 378, 'JD AGROLAR', 3545159, 'SALTINHO', 'SP', '13440000', 1058, 'BRASIL', 759010904116, 1, 0, 'REINALDO PIVETTA LIMEIRA ME', 'AVENIDA DOUTOR FABRICIO VAMPRE', 1169, 'JD. NOVA ITALIA', 3526902, 'LIMEIRA', 'SP', 13484323, 1058, 'BRASIL', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1015.59, 0, 0, 0, 0, 0, 0, 0, 0, 1015.59, '35180821533324000165550010000086271000086274'),
(35, 301, 'VENDA DE MERCADORIA ADQUIRIDA OU RECEBIDA DE TERCEIROS', 0, 55, 1, '2018-08-22T11:37:00-03:00', 1, 1, 1, 1, 4, 1, 1, 0, 9, 0, '100', 28353896000101, 'MATRIZ FORT S&P COMERCIO E REPRES. LTDA', '', 'RUA ANTONIO RAPOSO TAVARES LOTE 23 QUADRA C', 531, 'MACUCO', 3556206, 'VALINHOS', 'SP', '13279390', 1058, 'BRASIL', 708137855116, 3, 0, 'REINALDO PIVETTA LIMEIRA ME', 'AVENIDA DOUTOR FABRICIO VAMPRE', 1159, 'JD NOVA ITALIA', 3526902, 'LIMEIRA', 'SP', 13480021, 1058, 'BRASIL', 1, 42.49, 7.65, 0, 0, 0, 0, 0, 0, 417.69, 0, 0, 0, 0, 0, 2.33, 10.74, 0, 417.69, '35180828353896000101550010000030101000003014'),
(0, 0, '', 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, '', 0, '', '', '', 0, '', 0, 0, 0, '', '', 0, '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(35, 134670, 'VENDA MERC TERC MERC SUJ REG SUBSTITUICAO TRIBUTARIA. NA CON', 0, 55, 3, '2018-08-21T13:08:24-03:00', 1, 1, 1, 1, 9, 1, 1, 0, 0, 0, '3.10.18', 62527619000530, 'ROYAL CANIN DO BRASILINDUSTRIA E COMERCIO LTDA', 'ROYAL CANIN DO BRASIL', 'AV PIERRE SIMON DE LAPLACE', 751, 'Aparecidinha', 3509502, 'CAMPINAS', 'SP', '13069320', 1058, 'BRASIL', 795120111112, 3, 0, 'REINALDO PIVETTA LIMEIRA ME', 'AV DR FABRICIO VAMPRE', 1159, 'JD NOVA ITALIA', 3526902, 'LIMEIRA', 'SP', 13484339, 1058, 'BRASIL', 1, 666.23, 119.92, 0, 0, 1118.96, 81.49, 0, 0, 693.99, 0, 0, 27.76, 46.85, 0, 10.97, 50.64, 0, 794.57, '35180862527619000530550030001976441001346709'),
(35, 10317234, 'VENDA', 0, 55, 1, '2018-08-18T10:46:59-03:00', 1, 1, 1, 1, 5, 1, 1, 0, 9, 0, '4.00', 235287000139, 'AGRODOG PETS LTDA', 'Agrodog', 'Rua Cacimba de Areia', 100, 'Pq Sao Miguel', 3518800, 'GUARULHOS', 'SP', '07260170', 1058, 'BRASIL', 336327689119, 3, 0, 'REINALDO PIVETTA LIMEIRA ME', 'AV. FABRICIO VAMPRE', 1, 'JD. NOVA ITALIA', 3526902, 'LIMEIRA', 'SP', 13484339, 1058, 'BRASIL', 1, 429.6, 77.33, 0, 0, 0, 0, 0, 0, 429.6, 0, 0, 0, 0, 0, 2.79, 12.89, 0, 429.6, '35180800235287000139550010004543841103172345'),
(35, 74692199, 'VENDA DE MERCADORIA', 0, 55, 1, '2018-08-17T00:00:00-03:00', 1, 1, 1, 1, 2, 1, 1, 1, 9, 0, '4.0.0', 11199654000102, 'RVT COMERCIO E DISTRIBUICAO LTDA - EPP', 'RVT', 'RODOVIA VICE-PREFEITO HERMENEGILDO TONOLLI', 1500, 'DISTRITO INDUSTRIAL', 3525904, 'JUNDIAI', 'SP', '13213086', 1058, 'BRASIL', 407263464112, 3, 0, '691 - REINALDO PIVETTA LIMEIRA - ME', 'AV DOUTOR FABRICIO VAMPRE', 1169, 'JARDIM PIRATININGA', 3526902, 'LIMEIRA', 'SP', 13484339, 1058, 'BRASIL', 9, 305.25, 54.95, 0, 0, 0, 0, 0, 0, 305.25, 0, 0, 0, 0, 0, 0, 0, 0, 305.25, '35180811199654000102550010001736561746921992'),
(35, 84100, 'VENDA MERC.AD.TERC', 0, 55, 2, '2018-08-16T00:00:00-03:00', 1, 1, 1, 1, 6, 1, 1, 0, 9, 0, '4.3.7.60', 5356741000123, 'MB DISTRIBUIDORA DE PRODUTOS VETERINARIOS LTDA', 'MB DISTRIBUIDORA', 'RUA JOAO PREVITALLI', 929, 'CHACARA DAS ROSAS', 3556206, 'VALINHOS', 'SP', '13272315', 1058, 'BRASIL', 708186953114, 3, 0, 'REINALDO PIVETTA LIMEIRA ME.', 'FABRICIO VAMPRE', 1169, 'JD. NOVA ITALIA', 3526902, 'LIMEIRA', 'SP', 13480021, 1058, 'BRASIL', 1, 254.3, 45.77, 0, 0, 0, 0, 0, 0, 262.17, 0, 0, 7.87, 0, 0, 0, 0, 0, 254.3, '35180805356741000123550020000841001000841006');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;