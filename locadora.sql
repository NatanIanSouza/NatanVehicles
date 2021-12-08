-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2021 às 01:15
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientela`
--

CREATE TABLE `clientela` (
  `nomeCliente` varchar(50) NOT NULL,
  `codCliente` int(4) NOT NULL,
  `cpfCliente` varchar(20) NOT NULL,
  `userCliente` varchar(40) NOT NULL,
  `senhaCliente` varchar(40) NOT NULL,
  `alternativaCliente` varchar(20) NOT NULL,
  `ruaCliente` varchar(30) NOT NULL,
  `numeroCliente` int(5) NOT NULL,
  `bairroCliente` varchar(30) NOT NULL,
  `cepCliente` int(10) NOT NULL,
  `cidadeCliente` varchar(25) NOT NULL,
  `estadoCliente` varchar(25) NOT NULL,
  `telefoneCliente` varchar(25) NOT NULL,
  `emailCliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientela`
--

INSERT INTO `clientela` (`nomeCliente`, `codCliente`, `cpfCliente`, `userCliente`, `senhaCliente`, `alternativaCliente`, `ruaCliente`, `numeroCliente`, `bairroCliente`, `cepCliente`, `cidadeCliente`, `estadoCliente`, `telefoneCliente`, `emailCliente`) VALUES
('Natan Ian Masson de Souza', 1, '463.353.728-86', 'Natan', 'f39fae12f6f866c7e6ac6f54c700c204', 'Mascuino', 'Rua Amélia Eugênia Ribeiro', 131, 'Bom Viver 1', 16403420, 'Lins', 'São Paulo - SP', '14996553882', 'iannatan4@gmail.com'),
('Vinicius Autista', 2, '789.789.987-89', 'Vini', 'bd04c20c39eb01f7261c13d24b001b8d', 'Mascuino', 'Rua Senhor das Oliveiras', 315, 'Galáxia Estrelada', 16952147, 'Três Lagoas', 'Mato Grosso do Sul - MS', '14991215171', 'vini.racista@gmail.com'),
('Larissa Puerta Jovadelle', 3, '789.789.987-89', 'Larissa', 'bee0eb9289b074bf5d8f8af069f042fe', 'Feminino', 'Rua Senhor das Oliveiras', 1111, 'Imperial III', 19302369, 'João Pessoa', 'Paraíba - PB', '14993405127', 'larissa_jovadelle@gmail.com'),
('João Pedro Garcia', 4, '789.789.987-89', 'Joao', '3dfcab79ed21fd89c9eb25e9864a6155', 'Masculino', 'Rua Amélia Eugênia Ribeiro', 15, 'Imperial III', 12765487, 'Goiânia', 'Goiás - GO', '15997862345', 'garciajoao5@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `nomeFunc` varchar(50) NOT NULL,
  `codFunc` int(4) NOT NULL,
  `userFunc` varchar(40) NOT NULL,
  `senhaFunc` varchar(40) NOT NULL,
  `chapa` int(5) NOT NULL,
  `alternativaFunc` varchar(15) NOT NULL,
  `cpfFunc` varchar(20) NOT NULL,
  `ruaFunc` varchar(30) NOT NULL,
  `numeroFunc` int(5) NOT NULL,
  `bairroFunc` varchar(30) NOT NULL,
  `cepFunc` int(10) NOT NULL,
  `cidadeFunc` varchar(30) NOT NULL,
  `estadoFunc` varchar(25) NOT NULL,
  `telefoneFunc` varchar(25) NOT NULL,
  `emailFunc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`nomeFunc`, `codFunc`, `userFunc`, `senhaFunc`, `chapa`, `alternativaFunc`, `cpfFunc`, `ruaFunc`, `numeroFunc`, `bairroFunc`, `cepFunc`, `cidadeFunc`, `estadoFunc`, `telefoneFunc`, `emailFunc`) VALUES
('Esley Roberto Jordão', 3, 'Esley', 'c80e8234c96b5b6e0c40259cc23ce0dc', 49873, 'Mascuino', '111.111.111-11', 'Rua Senhor das Oliveiras', 315, 'São Campos', 16952147, 'Três Lagoas', 'Mato Grosso do Sul - MS', '14991215171', 'esley_roberto@gmail.com'),
('Robertinha Carrara', 4, 'Robertinha', 'b0f1728658dbdfebd2d415738a2ae5d3', 74885, 'Feminino', '541.135.879-85', 'Rua Leonel Messi', 876, 'Xingu', 16203204, 'Macapá', 'Amapá - AP', '14995203478', 'robertinha@gmail.com'),
('Calvin Johnson', 5, 'CJ', 'feee747cd0e43e8b89f682f20e9b7e10', 11111, 'Masculino', '852.852.852-85', 'Agaragan', 56, 'Oshit', 16873298, 'San Andreas', 'Distrito Federal - DF', '(15) 99624-5771', 'cj@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `codV` int(4) NOT NULL,
  `placa` varchar(15) NOT NULL,
  `preco` decimal(7,2) NOT NULL,
  `imagem` varchar(30) NOT NULL,
  `chassi` varchar(21) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `ano_fabrica` varchar(4) NOT NULL,
  `km` int(8) NOT NULL,
  `combustivel` varchar(10) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`codV`, `placa`, `preco`, `imagem`, `chassi`, `cor`, `modelo`, `marca`, `ano_fabrica`, `km`, `combustivel`, `tipo`) VALUES
(2, 'KTY-9387', '430.00', 'nissan.jpg', '9 BW SU19F0 8 B302158', 'Vermelho Perolado', 'Nissan GTR', 'Nissan', '2018', 90000, 'gasolina', 'Esportivo'),
(3, 'POL-6743', '580.00', 'mercedes.jpg', '7 CH JP88T1 2 G541966', 'Prata Metálico', 'AMG GT', 'Mercedes', '2020', 3200, 'flex', 'De Luxo'),
(4, 'EPX-0817', '1080.00', 'ferrari.jpg', '5 VX LS34T2 1 Q987703', 'Vermelho Brilhante', '458 Spider', 'Ferrari', '2017', 19000, 'gasolina', 'Esportivo de Luxo'),
(5, 'GTX-0925', '2790.00', 'lambobranca.jpg', '8 KS AT19V6 4 L515200', 'Branco Gelo', 'Veneno V8', 'Lamborghini', '2021', 0, 'flex', 'Esportivo de Luxo'),
(6, 'WVM-2048', '310.00', 'ford.jpg', '1 KK WW30Q5 5 Y059138', 'Prata Metálico', 'F-150 Raptor', 'Ford', '2020', 42000, 'diesel', 'Caminhonete 4x4 de Luxo'),
(9, 'ALL-7020', '750.00', 'bmw320.jpg', '3 AD PS39B9 9 O993309', 'Azul Perolado Brilhante', '320i GB', 'Bmw', '2021', 1000, 'flex', 'De Luxo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientela`
--
ALTER TABLE `clientela`
  ADD PRIMARY KEY (`codCliente`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`codFunc`);

--
-- Índices para tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`codV`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientela`
--
ALTER TABLE `clientela`
  MODIFY `codCliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `codFunc` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `codV` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
