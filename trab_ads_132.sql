-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Out-2020 às 08:13
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trab_ads_132`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'Felipe', 'felipe.martenexen@gmail.com', '(93) 99155-0307');

-- --------------------------------------------------------

--
-- Estrutura da tabela `desktop`
--

CREATE TABLE `desktop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fabricante` varchar(255) NOT NULL,
  `cpu` text NOT NULL,
  `qtd` varchar(11) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `hd` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `desktop`
--

INSERT INTO `desktop` (`id`, `fabricante`, `cpu`, `qtd`, `ram`, `hd`, `preco`) VALUES
(1, 'Positivo', 'Intel Core i9-9900k Coffee Lake Refresh 9a GeraÃ§Ã£o, Cache 16MB, 3.6GHz', '5', 'MemÃ³ria Corsair Vengeance LPX, 8GB, 2666MHz, DDR4', 'HD WD Blue, 1TB, 3.5Â´, SATA', '9500');

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressora`
--

CREATE TABLE `impressora` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `abastecimento` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `qtd` int(11) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `impressora`
--

INSERT INTO `impressora` (`id`, `abastecimento`, `categoria`, `qtd`, `preco`) VALUES
(5, 'Janto de Tinta', 'Comum', 2, 300),
(6, 'Laser', 'Multifuncional', 3, 1000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `laptop`
--

CREATE TABLE `laptop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fabricante` varchar(255) NOT NULL,
  `cpu` text NOT NULL,
  `qtd` int(11) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `hd` varchar(255) NOT NULL,
  `tela` int(11) NOT NULL,
  `preco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `laptop`
--

INSERT INTO `laptop` (`id`, `fabricante`, `cpu`, `qtd`, `ram`, `hd`, `tela`, `preco`) VALUES
(1, 'Dell', 'Intel Core i5-9400F Coffee Lake, Cache 9MB, 2.9GHz (4.1GHz Max Turbo), LGA 1151', 2, 'MemÃ³ria HyperX Fury, 8GB, 2666MHz, DDR4, CL16, Preto - HX426C16FB3/8', 'HD WD Blue, 1TB, 3.5Â´, SATA', 14, '5000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_desktop` int(11) NOT NULL,
  `id_laptop` int(11) NOT NULL,
  `id_impressora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `desktop`
--
ALTER TABLE `desktop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `impressora`
--
ALTER TABLE `impressora`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `desktop`
--
ALTER TABLE `desktop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `impressora`
--
ALTER TABLE `impressora`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
