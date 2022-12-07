-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Tempo de geração: 02-Dez-2022 às 23:18
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojathiarles`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cat_slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_nome`, `cat_slug`) VALUES
(1, 'Geral', 'geral'),
(2, 'Campo', 'categoria-chuteira-de-campo'),
(3, 'Futsal', 'futsal'),
(7, 'Gramado sintético', 'gramado-sintetico'),
(8, 'Tenis', 'tenis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_sobrenome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cli_numero` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cli_bairro` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cidade` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cli_uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cpf` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cli_rg` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cli_ddd` int(2) NOT NULL,
  `cli_fone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cli_celular` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cli_email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cli_pass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cli_data_nasc` date NOT NULL,
  `cli_data_cad` date NOT NULL,
  `cli_hora_cad` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_endereco`, `cli_numero`, `cli_bairro`, `cli_cidade`, `cli_uf`, `cli_cep`, `cli_cpf`, `cli_rg`, `cli_ddd`, `cli_fone`, `cli_celular`, `cli_email`, `cli_pass`, `cli_data_nasc`, `cli_data_cad`, `cli_hora_cad`) VALUES
(1, 'Gelson', 'Matias', 'Rua A', '551', 'Santa Augusta', 'Criciúma', 'SC', '88898569', '12345678909', '333333333', 48, '996897765', '996897765', 'matias@gmail.com', '123', '2010-09-17', '2015-03-27', '18:57:55'),
(2, 'Clinton', 'Matias', 'Rua dos Franceses', '45', 'Samba', 'Luanda', 'LA', '0923456', '54423376989', '4563322', 93, '923265678', '923265678', 'clinton@gmail.com', '12345', '1994-09-23', '1994-09-23', '14:42:58'),
(3, 'Gelson', 'Matias', 'Rua A', '220', 'Teste', 'SC-C', 'SC', '88898567', '123', 'G5577555', 48, '987766555', '987766555', 'gelsonjmatias@gmail.com', '38df3be525387c0233b1735929b2582222930edf', '2022-11-15', '2022-11-29', '20:55:56'),
(11, 'Edmundo', 'Silva', 'Rua B', '140', 'Teste 2', 'SC-C', 'SC', '88898567', '34567832190', 'G88888455', 48, '9890786231', '9890786231', 'edmundosilva@gmail.com', '139cb64c218898b6f89c62165f45edcec11a0925', '2022-11-16', '2022-11-29', '21:06:15'),
(13, 'Maicon', 'Jackson', 'Rua Elm Desk', '332', 'WD', 'Village', 'SC', '85633219', '12345676587', 'G88888455', 48, '9890786231', '999678345', 'gelsondjmatias@gmail.com', 'c343b2d2724baa36181299b3c7b24dfa4c0ececb', '2022-11-02', '2022-11-29', '22:21:30'),
(17, 'Ana', 'Saldanha', 'Rua B', '160', 'Teste 2', 'SC-C', 'SC', '85633219', '32112345678', 'A1234', 48, '999998877', '999998855', 'exodofront@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-11-15', '2022-11-29', '23:10:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `img_id` int(11) NOT NULL,
  `img_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img_prod_id` int(11) NOT NULL,
  `img_pasta` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`img_id`, `img_nome`, `img_prod_id`, `img_pasta`) VALUES
(1, 'chuteira-adidas-blue-2.jpg', 5, ''),
(2, 'chuteira-adidas-blue-3.jpg', 5, ''),
(3, 'chuteira-adidas-blue-4.jpg', 5, ''),
(4, 'chuteira-adidas-predator-edje-2.jpeg', 6, ''),
(5, 'chuteira-adidas-predator-edje-3.jpeg', 6, ''),
(6, 'chuteira-adidas-predator-edje-4.jpeg', 6, ''),
(7, 'chuteira-adidas-predator-edje-Lethal-2.jpeg', 7, ''),
(8, 'chuteira-adidas-predator-edje-Lethal-3.jpeg', 7, ''),
(9, 'chuteira-adidas-predator-edje-Lethal-4.jpeg', 7, ''),
(13, '221202000059chuteira-copa-2022.jpeg.jpeg', 3, ''),
(17, '221202185844tenis-masculino-adidas-vl-court-b43807', 13, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `ped_id` int(11) NOT NULL,
  `ped_data` date NOT NULL,
  `ped_hora` time NOT NULL,
  `ped_cliente` int(11) NOT NULL,
  `ped_cod` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ped_ref` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_forma` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ped_pag_codigo` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `ped_frete_valor` double(9,2) DEFAULT 0.00,
  `ped_frete_tipo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`ped_id`, `ped_data`, `ped_hora`, `ped_cliente`, `ped_cod`, `ped_ref`, `ped_pag_status`, `ped_pag_forma`, `ped_pag_tipo`, `ped_pag_codigo`, `ped_frete_valor`, `ped_frete_tipo`) VALUES
(1, '2022-11-24', '19:36:54', 1, '123456789', '054451ref', 'NAO', '', '', '', NULL, NULL),
(2, '2022-11-24', '19:38:12', 2, '123456789', '054451ref', '', '', '', '', NULL, NULL),
(12, '2022-11-26', '03:17:30', 2, 'de3078b86259d61a4606717ba6594eca', '054451ref', '', '', '', '', NULL, NULL),
(13, '2022-11-26', '18:32:41', 2, '8b50d64d2111b99ffa028f26e374ea27', '054451ref', '', '', '', '', NULL, NULL),
(14, '2022-11-26', '20:42:58', 2, '9a7e762fee7c940d0e412489c4d650fc', '2211262011582', '', '', '', '', NULL, NULL),
(25, '2022-11-28', '09:39:21', 1, '2211280911331', '2211280911331', '', '', '', '', 110.50, NULL),
(35, '2022-11-30', '02:18:49', 17, '22113002114817', '22113002114817', '', '', '', '', 263.50, NULL),
(36, '2022-11-30', '02:27:17', 17, '22113002111517', '22113002111517', '', '', '', '', 161.50, NULL),
(37, '2022-11-30', '03:27:56', 17, '22113003115417', '22113003115417', '', '', '', '', 161.50, NULL),
(38, '2022-12-02', '18:33:08', 17, '22120218120417', '22120218120417', '', '', '', '', 55.40, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_itens`
--

CREATE TABLE `pedidos_itens` (
  `item_id` int(11) NOT NULL,
  `item_produto` int(11) NOT NULL,
  `item_valor` double(9,2) NOT NULL,
  `item_qtd` int(6) NOT NULL,
  `item_ped_cod` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pedidos_itens`
--

INSERT INTO `pedidos_itens` (`item_id`, `item_produto`, `item_valor`, `item_qtd`, `item_ped_cod`) VALUES
(1, 6, 345.99, 1, '123456789'),
(2, 7, 409.59, 1, '123456789'),
(3, 2, 390.00, 1, '123456789'),
(4, 6, 345.99, 1, '55555555'),
(5, 6, 345.99, 1, '55555555'),
(6, 7, 409.59, 1, '95b8477086ea8127933490656fd5569f'),
(7, 7, 409.59, 1, '95b8477086ea8127933490656fd5569f'),
(8, 7, 409.59, 1, '95b8477086ea8127933490656fd5569f'),
(9, 5, 399.00, 1, 'c40cb726b9ce8cc7066b6bc7ab9133a9'),
(10, 3, 234.00, 1, 'c40cb726b9ce8cc7066b6bc7ab9133a9'),
(13, 7, 409.59, 1, '5e95046523c898ad4bfe3eeb3e9e3827'),
(14, 7, 409.59, 1, 'de3078b86259d61a4606717ba6594eca'),
(15, 1, 89.00, 1, 'de3078b86259d61a4606717ba6594eca'),
(16, 4, 194.50, 1, '8b50d64d2111b99ffa028f26e374ea27'),
(17, 4, 194.50, 1, '9a7e762fee7c940d0e412489c4d650fc'),
(18, 6, 345.99, 1, '2211262011502'),
(19, 5, 399.00, 1, '2211262011502'),
(20, 7, 409.59, 1, '2211262011502'),
(21, 2, 390.00, 1, '2211280711201'),
(22, 6, 345.99, 1, '2211280711281'),
(23, 7, 409.59, 1, '2211280711281'),
(24, 6, 345.99, 1, '2211280811591'),
(25, 7, 409.59, 1, '2211280811591'),
(26, 6, 345.99, 1, '2211280811081'),
(27, 5, 399.00, 1, '2211280811491'),
(28, 6, 345.99, 1, '2211280811141'),
(29, 3, 234.00, 1, '2211280811161'),
(30, 2, 390.00, 1, '2211280811251'),
(32, 6, 345.99, 1, '2211280911331'),
(33, 6, 345.99, 1, '2211280911011'),
(34, 4, 194.50, 1, '2211281011121'),
(35, 3, 234.00, 1, '2211281011451'),
(36, 6, 345.99, 1, '2211281011061'),
(37, 6, 345.99, 1, '2211281111291'),
(38, 7, 409.59, 1, '2211281111291'),
(39, 6, 345.99, 1, '2211281111551'),
(40, 3, 234.00, 1, '2211281111521'),
(41, 3, 234.00, 1, '22113002114217'),
(42, 6, 345.99, 1, '22113002110517'),
(43, 2, 390.00, 1, '22113002114817'),
(44, 4, 194.50, 1, '22113002111517'),
(45, 5, 399.00, 1, '22113003115417'),
(46, 6, 345.99, 1, '22113003115417'),
(47, 7, 409.59, 1, '22120218120417');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_categoria` int(11) NOT NULL,
  `pro_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_peso` double(9,3) NOT NULL,
  `pro_valor` double(9,2) NOT NULL,
  `pro_altura` int(11) NOT NULL,
  `pro_largura` int(11) NOT NULL,
  `pro_comprimento` int(11) NOT NULL,
  `pro_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_estoque` int(11) NOT NULL,
  `pro_modelo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_ref` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_fabricante` int(11) NOT NULL,
  `pro_ativo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `pro_free_free` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Não'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`pro_id`, `pro_categoria`, `pro_nome`, `pro_desc`, `pro_peso`, `pro_valor`, `pro_altura`, `pro_largura`, `pro_comprimento`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_ref`, `pro_fabricante`, `pro_ativo`, `pro_free_free`) VALUES
(1, 1, 'Chuteira de Campo', 'Está é uma chuteira de campo. Você caminha por um corredor e vê essa evolução. Se hoje as chuteiras pesam cerca de 150 g cada pé, naquela época, eram muito mais pesadas. Hoje são feitas com material que não encharca, tem o desenho das travas de acordo com o desenho da chuteira…”, conta Kadow.\r\n', 0.000, 89.00, 80, 200, 80, 'Predator-Lar.jpeg', 'chuteira-pra-campo', 1, 'Multi Ground', '02654551', 1, '1', 'gratuito'),
(2, 2, 'Chuteira Adidas', 'Chuteira Branca da marca Adidas. \r\nO modelo Nemeziz foi desenvolvido pela Adidas para ser uma de suas principais opções entre chuteiras de futebol de campo. ...\r\nFeita em material sintético e com forro interno que oferece conforto, a Adidas Nemezis vem em diferentes combinações de cor.', 50.000, 390.00, 55, 42, 25, 'Adidas-1.jpeg', 'chuteira-branca-marca-adidas', 10, 'modelo 054515', '68034225', 1, '1', 'Não'),
(3, 2, 'Chuteira Adidas Blue', 'A Predator, podemos definir como a chuteira de Paul Pogba, de tal forma que seu modelo é constantemente trabalhado ao lado do jogador que possui forte nome na área de marketing.', 40.000, 234.00, 80, 38, 25, 'Adidas-blue.jpeg', 'chuteira-adidas-blue', 20, 'Blue Star', '099783456', 1, '1', 'Não'),
(4, 3, 'Adidas Predador', 'A marca patrocina jogadores como Lionel Messi, Mohamed Salah, Paulo Dybala e Paul Pogba. Então, se você admira algum deles, veja qual chuteira eles usam! Cada um desses jogadores citados utiliza uma chuteira da linha Adidas.', 30.000, 194.50, 80, 42, 25, 'Predator-1.jpeg', 'adidas-predador', 16, 'Adidas Predador', '055637789', 1, '1', 'Não'),
(5, 2, 'Chuteira Adidas Blue X 18.1', 'Projetada para velocidade, esta chuteira de campo é reduzida ao essencial. O cano baixo, o calcanhar moldado e a língua com elasticidade em quatro direções garantem um ajuste firme. O cabedal é feito de mesh fino para uma sensação minimalista. O solado é perfurado para reduzir o peso e fazer seus pés voarem.', 10.000, 399.00, 80, 42, 25, 'chuteira-adidas-blue.jpg', 'chuteira-adidas-blue-X18.1', 5, 'X18.1', '09928653', 1, '1', 'Não'),
(6, 2, 'Chuteira Adidas Predator Edge', 'O Messi, por exemplo, desenvolveu os modelos da linha Nemeziz em conjunto com a marca. Já o Pogba, utiliza chuteiras Predator e o Dybala prefere jogar com chuteiras Adidas Copa, assim como o Salah possui modelos da linha X.', 20.000, 345.99, 55, 38, 25, 'chuteira-adidas-predator-edje.jpg', 'chuteira-adidas-predator-edje', 10, 'Adidas Edge', '3459989', 1, '1', 'Não'),
(7, 3, 'Chuteira Adidas Edge XV', '<p>***UNISSEX, FORMATO GRANDE | N&Atilde;O APLIC&Aacute;VEL A NENHUMA PROMO&Ccedil;&Atilde;O*** Para p&eacute;s mais finos, recomendamos que compre um tamanho menor do que o de costume. N&atilde;o aplic&aacute;vel a nenhuma promo&ccedil;&atilde;o.</p>', 0.100, 409.59, 80, 200, 25, 'chuteira-adidas-predator-edje-Lethal.jpeg', 'chuteira-adidas-edge-xv', 10, 'Adidas Edge Lethal', '09FF675X-99', 1, '1', 'Não'),
(12, 1, 'Chuteira Qatar 2022', '<p>qwewqrewrewrt</p>', 0.200, 87.99, 10, 10, 10, '221202185625chuteira-copa-2022.jpeg.jpeg', 'chuteira-qatar-2022', 10, '344333', '45678u', 0, 'N', 'Não'),
(14, 2, 'CHUTEIRA FUTURE 3.4 NJR FG/AG BDP CAMPO MASCULINA', '<p><span style=\"font-family: \'FFDIN Regular\', FFDIN, Arial, sans-serif; font-size: 15px; background-color: #f6f5f6;\">FUTURE &ndash; O GAME FICOU CRAZY Mais adapt&aacute;vel e confort&aacute;vel do que nunca, a avan&ccedil;ada FUTURE &eacute; uma chuteira progressiva e explosiva para jogadores que moldam o jogo de acordo com sua vis&atilde;o e habilidade. Voc&ecirc; n&atilde;o precisa usar cadar&ccedil;os para prender. A tecnologia FUZIONFIT+ de segunda gera&ccedil;&atilde;o se adapta ao formato do seu p&eacute; para oferecer o equil&iacute;brio perfeito de suporte e flexibilidade em cada uma das zonas-mais importantes, garantindo ajuste e desempenho ideais, com ou sem amarra&ccedil;&atilde;o. A sola leve e reativa com a tecnologia Dynamic Motion System transfere sua energia diretamente para o campo, proporcionando tra&ccedil;&atilde;o superior para movimentos multidirecionais explosivos. As Advanced Creator Zones est&atilde;o estrategicamente posicionadas na &aacute;rea do antep&eacute; para oferecer toque excepcional e controle de bola em alta velocidade.</span></p>', 0.300, 599.90, 10, 10, 10, '221202190313red-golden.png.png', 'chuteira-future-3.4-njr-fg-ag-bdp-campo-masculina', 10, 'PU567', '5643', 0, 'S', 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_pw` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`user_id`, `user_nome`, `user_email`, `user_pw`) VALUES
(1, 'Gelson Matias', 'gelsonmatiasads@gmail.com', '123'),
(2, 'Gelson', 'exodofront@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`img_id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ped_id`);

--
-- Índices para tabela `pedidos_itens`
--
ALTER TABLE `pedidos_itens`
  ADD PRIMARY KEY (`item_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`pro_id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `pedidos_itens`
--
ALTER TABLE `pedidos_itens`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
