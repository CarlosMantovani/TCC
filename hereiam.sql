-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Dez-2022 às 02:25
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hereiam`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `idadm` int(11) NOT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`idadm`, `senha`) VALUES
(1, '17'),
(2, '22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `idaluno` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `data_nasc` varchar(30) DEFAULT NULL,
  `senha` varchar(16) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `imagem` varchar(45) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `digital_check` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idaluno`, `nome`, `cpf`, `email`, `data_nasc`, `senha`, `sexo`, `imagem`, `telefone`, `digital_check`) VALUES
(1, 'Helena Renata Melo', '995.522.689-74', 'helena_melo@kuehne-nagel.com', '21/08/2004', '12345678', '2', 'professora.png', '44988549343', '111'),
(2, 'Vitor Noah Thiago Drumond', '366.712.679-44', 'vitor_noah_drumond@wredenborg.se', '18/08/2004', 'brenost1', '1', 'professor.png', '', '12'),
(3, 'Luna Josefa da Mata', '686.686.979-00', 'luna-damata77@purkyt.com', '10/04/2004', 'brenost12', '2', 'professora.png', '(44) 98582-2064', '322'),
(4, 'Elaine Livia Andreia Oliveira', '440.904.569-59', 'elaine-oliveira81@mrarquitetura.com.br', '09/01/2004', 'brenost1', '2', 'professora.png', '(44) 99910-7709', '100'),
(5, 'Bento Manoel Matheus Ramos', '200.433.239-52', 'bentomanoelramos@lojapetline.com.br', '06/05/2004', 'brenost1', '1', 'professor.png', '(44) 99220-8483', '434'),
(6, 'Henrique Geraldo Yuri Assunção', '197.798.879-20', 'henrique.geraldo.assuncao@ygui.com.br', '12/09/2004', 'brenost1', '1', 'professor.png', '(44) 2983-6980', NULL),
(7, 'Mariane Heloisa Debora Santos', '816.838.689-27', 'mariane-santos99@tarp.com.br', '05/04/2004', 'brenost1', '2', 'professora.png', '(44) 98374-2096', NULL),
(8, 'Nair Pietra Aurora Freitas', '822.325.229-54', 'nair.pietra.freitas@desari.com.br', '18/06/2004', 'brenost1', '2', 'professora.png', '(44) 98786-7475', NULL),
(9, 'Elaine Marina da Mota', '052.054.759-43', 'elaine-damota78@riquefroes.com', '11/11/2004', 'brenost1', '2', 'professora.png', '(44) 99201-5171', NULL),
(10, 'Sebastiana Lara da Conceicao', '078.786.719-58', 'sebastiana-daconceicao94@systrix.com.br', '11/04/2004', 'brenost1', '2', 'professora.png', '(44) 98250-3658', NULL),
(11, 'José Paulo Erick das Neves', '848.861.219-26', 'jose-dasneves93@vinax.com.br', '01/06/2004', 'brenost1', '1', 'professor.png', '(44) 99230-1512', NULL),
(12, 'Lara Luzia Fabiana Castro', '448.016.959-81', 'lara_castro@aedu.com', '09/04/2004', 'brenost1', '2', 'professora.png', '(44) 99908-3680', NULL),
(13, 'Luna Luiza Aparício', '649.837.059-96', 'lunaluizaaparicio@igui.com.br', '03/05/2004\"', 'brenost1', '2', 'professora.png', '(44) 99498-2180', NULL),
(14, 'Theo Calebe Almeida', '717.554.389-15', 'theo_calebe_almeida@negleribeiro.com', '01/10/2004', 'brenost1', '1', 'professor.png', '(44) 99214-2893', NULL),
(15, 'Calebe Bernardo Rocha', '568.331.999-49', 'calebe.bernardo.rocha@band.com', '17/11/2004', 'brenost1', '1', 'professor.png', '(44) 99536-4650', NULL),
(16, 'Valentina Lara Isabelly Aragão', '984.629.089-65', 'valentina_aragao@maliziaarranjosflorais.com.br', '13/02/2004', 'brenosst1', '2', 'professora.png', '(44) 98158-7413', NULL),
(17, 'Gabriel Alexandre Corte Real', '381.100.849-82', 'gabriel-cortereal73@live.co.uk', '23/05/2004', 'brenost1', '1', 'professor.png', '(44) 99636-8198', NULL),
(18, 'Theo Nelson Almada', '944.445.409-66', 'theo_nelson_almada@thacconstrutora.com.br', '16/07/2004', 'brenost1', '1', 'professor.png', '(44) 99336-9956', NULL),
(19, 'Carolina Larissa Jesus', '058.719.999-72', 'carolina.larissa.jesus@schaeffler.com', '24/04/2004', 'brenost1', '2', 'professora.png', '(44) 98848-5298', NULL),
(20, 'Kamilly Jéssica Barros', '432.142.129-23', 'kamilly_jessica_barros@dmcard.com.br', '23/11/2004', 'brenost1', '2', 'professora.png', '(44) 99722-4909', NULL),
(21, 'Isis Teresinha Aparecida Nogueira', '252.055.409-66', 'isis.teresinha.nogueira@achievecidadenova.com.br', '09/03/2004', 'brenost1', '2', 'professora.png', '(44) 98226-5976', NULL),
(22, 'Theo Davi Yuri Vieira', '747.673.269-31', 'theo.davi.vieira@fundasa.com.br', '19/07/2004', 'brenost1', '1', 'professor.png', '(44) 99257-1323', NULL),
(23, 'Martin Ian Vinicius Carvalho', '812.261.569-40', 'martiniancarvalho@transicao.com', '07/05/2004', 'brenost1', '2', 'professora.png', '(44) 98826-2608', NULL),
(24, 'Clarice Lara da Rosa', '781.358.429-53', 'clarice.lara.darosa@bfgadvogados.com', '16/06/2004', 'brenost1', '2', 'professora.png', '(44) 98826-2609', NULL),
(25, 'Mariah Valentina Viana', '944.329.759-03', 'mariahvalentinaviana@terapeutaholistica.com.br', '17/01/2004', 'brenost1', '2', 'professora.png', '(44) 98161-8308', NULL),
(26, 'Thomas Vinicius Gonçalves', '184.774.939-95', 'thomasviniciusgoncalves@fedato.com.br', '25/10/2004', 'brenost1', '1', 'professor.png', '(44) 98287-1749', NULL),
(27, 'Pedro Ian Enzo Cardoso', '579.272.769-48', 'pedro_ian_cardoso@munhozengenharia.com.br', '12/02/2004', 'brenost1', '1', 'professor.png', '(44) 98684-2905', NULL),
(28, 'Vanessa Esther Laura Rezende', '826.354.169-74', 'vanessa_esther_rezende@vhbadvogados.com.br', '11/02/2004', 'brenost', '2', 'professora.png', '(44) 98300-1436', NULL),
(29, 'Theo Julio Fogaça', '523.923.239-33', 'theojuliofogaca@its.jnj.com', '27/10/2004', 'brenost1', '1', 'professor.png', '(44) 99424-8055', NULL),
(30, 'Amanda Laís Alves', '754.537.849-03', 'amanda_alves@p4ed.com', '25/01/2004', 'brenost1', '2', 'professor.png', '(44) 98110-7258', NULL),
(31, 'Carlos Henrique Mantovani', '122.933.789-00', 'mantovanicarloshenrique@gmail.com', '23/01/2004', '12345678', 'masculino', 'WhatsApp.jpeg', '44988549343', '399'),
(32, 'Enzo Bana', '133.002.129-01', 'enzo@gmail.com', '17/04/2004', '12345678', 'masculino', 'WhatsApp.jpeg', '(44) 98854-9343', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `arduino`
--

CREATE TABLE `arduino` (
  `id` int(11) NOT NULL,
  `exemplo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `arduino`
--

INSERT INTO `arduino` (`id`, `exemplo`) VALUES
(1, '111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prof`
--

CREATE TABLE `prof` (
  `idProf` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `imagem` varchar(45) NOT NULL,
  `siape` varchar(10) DEFAULT NULL,
  `senha` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `prof`
--

INSERT INTO `prof` (`idProf`, `nome`, `email`, `imagem`, `siape`, `senha`) VALUES
(2, 'Marcelo Borth', 'marceloborth@ifpr.edu', 'professor.png', '121708', 'breno1'),
(3, 'Alexandre Milchert', 'alexandre.milchert@ifpr.edu.br', 'professor.png', '190989', 'brenost1'),
(4, 'Meire Pereira de Souza Ferrari', 'meire.ferrari@ifpr.edu.br', 'professora.png', '141508', 'brenost1'),
(5, 'Eduardo Goiano da Silva', 'eduardo.goiano@ifpr.edu.br', 'professor.png', '151704', 'brenost1'),
(6, 'Juliana Cavalaro Camilo', 'juliana.cavalaro@ifpr.edu.br', 'professora.png', '246401', 'brenost1'),
(7, 'Claudio Luiz Mangini', 'claudio.mangini@ifpr.edu.br', 'professor.png', '457602', 'brenost1'),
(9, 'Marcelo Vinícius Felizatti Delmonde', 'marcelo.delmondes@ifpr.edu.br', 'professor.png', '675403', 'brenost1'),
(10, 'Marcela Moreira Terhaag', 'marcela.terhaag@ifpr.edu.br', 'professora.png', '342304', 'brenost1'),
(11, 'Lincoln Kotsuka da Silva', 'lincoln.silva@ifpr.edu.br', 'professor.png', '239005', 'brenost1'),
(12, 'Nani', 'nani@gmail.com', 'WhatsApp.jpeg', '12345678', '12345678');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro_presenca`
--

CREATE TABLE `registro_presenca` (
  `idregistro_presenca` int(11) NOT NULL,
  `data1` date NOT NULL DEFAULT current_timestamp(),
  `presenca` int(2) NOT NULL DEFAULT 1,
  `turma_idturma` int(10) UNSIGNED NOT NULL,
  `aluno_idaluno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `registro_presenca`
--

INSERT INTO `registro_presenca` (`idregistro_presenca`, `data1`, `presenca`, `turma_idturma`, `aluno_idaluno`) VALUES
(8, '2022-11-28', 1, 2, 5),
(9, '2022-11-29', 1, 2, 5),
(10, '2022-12-11', 1, 2, 5),
(11, '2022-12-11', 1, 11, 31),
(12, '2022-12-11', 1, 11, 1),
(13, '2022-12-11', 1, 2, 1),
(14, '2022-12-11', 1, 2, 1),
(15, '2022-12-11', 1, 2, 1),
(16, '2022-12-11', 1, 2, 1),
(17, '2022-12-11', 1, 2, 1),
(18, '2022-12-11', 1, 2, 1),
(19, '2022-12-11', 1, 2, 1),
(20, '2022-12-11', 1, 2, 1),
(21, '2022-12-11', 1, 11, 1),
(22, '2022-12-11', 1, 15, 31),
(23, '2022-12-11', 1, 2, 1),
(24, '2022-12-11', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `idturma` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `ano_ingresso` varchar(45) DEFAULT NULL,
  `serie` varchar(45) DEFAULT NULL,
  `curso` varchar(45) DEFAULT NULL,
  `Prof_idProf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`idturma`, `nome`, `ano_ingresso`, `serie`, `curso`, `Prof_idProf`) VALUES
(1, 'Informatica e Sociedade', '2019', '4', '2', 5),
(2, 'Tec.WEB', '2019', '4', '2', 2),
(3, 'Artes II', '2019', '4', '2', 4),
(5, 'Aço e Madeira', '2019', '4', '1', 3),
(6, 'Artes II', '2020', '3', '1', 4),
(8, 'Auto Cad.', '2019', '4', '1', 7),
(9, 'Projeto Tecnico', '2019', '4', '1', 6),
(10, 'Química IV', '2019', '4', '3', 11),
(11, 'Estequeometria Industrial', '2019', '4', '3', 10),
(12, 'físico-química II', '2019', '4', '3', 9),
(13, 'Química IV', '2019', '4', '3', 11),
(14, 'TCC', '2019', '4', '2', 12),
(16, 'TCC', '2019', '4', '2', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_has_aluno`
--

CREATE TABLE `turma_has_aluno` (
  `turma_idturma` int(10) UNSIGNED NOT NULL,
  `aluno_idaluno` int(11) NOT NULL,
  `n_matricula` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `turma_has_aluno`
--

INSERT INTO `turma_has_aluno` (`turma_idturma`, `aluno_idaluno`, `n_matricula`) VALUES
(2, 4, 1118),
(2, 9, 1119),
(9, 14, 1235),
(3, 9, 1240),
(9, 18, 1256),
(3, 4, 1261),
(5, 12, 4591),
(9, 16, 4751),
(8, 13, 4760),
(8, 12, 4761),
(8, 20, 4762),
(8, 11, 4763),
(8, 17, 4764),
(8, 19, 4765),
(8, 15, 4766),
(9, 13, 4781),
(9, 12, 4782),
(9, 20, 4783),
(9, 11, 4784),
(9, 17, 4785),
(9, 19, 4786),
(9, 15, 4787),
(5, 16, 4788),
(5, 18, 4789),
(5, 14, 4790),
(5, 13, 4791),
(5, 20, 4792),
(5, 17, 4793),
(5, 11, 4794),
(5, 19, 4795),
(5, 15, 4796),
(8, 16, 4797),
(8, 18, 4798),
(8, 14, 4799),
(10, 29, 5520),
(10, 28, 5521),
(10, 26, 5523),
(10, 22, 5524),
(10, 27, 5525),
(10, 23, 5526),
(10, 25, 5527),
(10, 21, 5528),
(10, 24, 5529),
(10, 30, 5530),
(12, 28, 5531),
(12, 26, 5532),
(12, 29, 5533),
(12, 22, 5534),
(12, 27, 5535),
(12, 23, 5536),
(12, 25, 5537),
(12, 21, 5538),
(12, 24, 5539),
(12, 30, 5540),
(11, 28, 5541),
(11, 26, 5542),
(11, 29, 5543),
(11, 22, 5544),
(11, 27, 5545),
(11, 23, 5546),
(11, 25, 5547),
(11, 21, 5548),
(11, 24, 5549),
(11, 30, 5550),
(1, 9, 7778),
(1, 4, 9999),
(14, 31, 10000),
(16, 32, 10002);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`idadm`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idaluno`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `arduino`
--
ALTER TABLE `arduino`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`idProf`);

--
-- Índices para tabela `registro_presenca`
--
ALTER TABLE `registro_presenca`
  ADD PRIMARY KEY (`idregistro_presenca`),
  ADD KEY `fk_registro_presenca_turma_has_aluno1_idx` (`turma_idturma`,`aluno_idaluno`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idturma`),
  ADD KEY `fk_turma_Prof1_idx` (`Prof_idProf`);

--
-- Índices para tabela `turma_has_aluno`
--
ALTER TABLE `turma_has_aluno`
  ADD PRIMARY KEY (`n_matricula`) USING BTREE,
  ADD KEY `fk_turma_has_aluno_aluno1_idx` (`aluno_idaluno`),
  ADD KEY `fk_turma_has_aluno_turma1_idx` (`turma_idturma`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `arduino`
--
ALTER TABLE `arduino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `prof`
--
ALTER TABLE `prof`
  MODIFY `idProf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `registro_presenca`
--
ALTER TABLE `registro_presenca`
  MODIFY `idregistro_presenca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `idturma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `turma_has_aluno`
--
ALTER TABLE `turma_has_aluno`
  MODIFY `n_matricula` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `fk_turma_Prof1` FOREIGN KEY (`Prof_idProf`) REFERENCES `prof` (`idProf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `turma_has_aluno`
--
ALTER TABLE `turma_has_aluno`
  ADD CONSTRAINT `fk_turma_has_aluno_aluno1` FOREIGN KEY (`aluno_idaluno`) REFERENCES `aluno` (`idaluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_turma_has_aluno_turma1` FOREIGN KEY (`turma_idturma`) REFERENCES `turma` (`idturma`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
