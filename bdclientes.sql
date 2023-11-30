-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/11/2023 às 21:45
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdclientes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `codCliente` int(250) NOT NULL,
  `nomeCliente` varchar(250) NOT NULL,
  `cepCliente` int(250) NOT NULL,
  `enderecoCliente` varchar(250) NOT NULL,
  `bairroCliente` varchar(250) NOT NULL,
  `cidadeCliente` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcliente`
--

INSERT INTO `tbcliente` (`codCliente`, `nomeCliente`, `cepCliente`, `enderecoCliente`, `bairroCliente`, `cidadeCliente`) VALUES
(1, 'Vinie', 7995, 'Avenida Virgínia', 'Jardim Virginia', 'Francisco Morato'),
(2, 'Joaquim', 13327, 'Rua Caramuru', 'Vila Norma', 'Salto'),
(3, 'Mario', 79045, 'Rua Vaz Caminha', 'Jardim Noroeste', 'Campo Grande'),
(4, 'Lukas', 79816, 'Rua Projetada 05 CV', 'Sitiocas Campina Verde', 'Dourados');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbfilmes`
--

CREATE TABLE `tbfilmes` (
  `idFilme` int(250) NOT NULL,
  `nomeFilme` varchar(250) NOT NULL,
  `lancamentoFilme` date NOT NULL,
  `diretorFilme` varchar(250) NOT NULL,
  `sinopseFilme` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbfilmes`
--

INSERT INTO `tbfilmes` (`idFilme`, `nomeFilme`, `lancamentoFilme`, `diretorFilme`, `sinopseFilme`) VALUES
(1, 'Avatar', '2009-12-15', 'James Cameron', 'Apesar de não ter mais os movimentos da perna, o ex-fuzileiro naval Jake Sully ainda sente que pode ser um guerreiro. Sua intuição começa a se tornar realidade quando ele viaja anos-luz até a estação espacial montada no Planeta Pandora. Habitado por grandes seres azuis, os Na´vi, o local tem uma atmosfera fatal para qualquer terrestre. Por isso, oficiais criaram o programa Avatar, em que um corpo biológico, híbrido de humano e Na´vi, pode ser comandado a distância.'),
(2, 'Uma Aventura Lego', '2014-02-06', 'Christopher Miller', 'Emmet é um Lego comum, até o dia em que é confundido com o Master Builder, o grande criador deste mundo de brinquedo, por ter encontrado a famosa peça de resistência. Este peça, procurada por todos há séculos, seria capaz de desarmar uma poderosa máquina criada pelo presidente do país, o perverso Sr. Negócios, que pretende colar todas as peças e impedir as mudanças no sistema. Mesmo sem ter grandes habilidades como criador, Emmet gosta de ser considerado um Lego especial, e faz de tudo para merecer a confiança de seus amigos, que incluem a rebelde Mega Estilo, o sábio Vitrúvius, e o gato-unicórnio UniKitty.'),
(3, 'Vida de Inseto', '1998-11-25', 'John Lasseter', 'Flik é uma formiga cheia de ideias que, em nome dos \"insetos oprimidos de todo o mundo\", precisa contratar guerreiros para defender sua colônia de um faminto bando de gafanhotos liderado por Hopper. Mas quando descobrem que o exército de insetos é na verdade um fracassado grupo de atores de um circo de pulgas, o cenário está armado para divertidas confusões... com estes improváveis heróis.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`codCliente`);

--
-- Índices de tabela `tbfilmes`
--
ALTER TABLE `tbfilmes`
  ADD PRIMARY KEY (`idFilme`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `codCliente` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbfilmes`
--
ALTER TABLE `tbfilmes`
  MODIFY `idFilme` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
