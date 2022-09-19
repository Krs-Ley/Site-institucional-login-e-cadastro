-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Set-2022 às 20:55
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login_projeto_web1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `id_projeto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `situacao` varchar(10) NOT NULL,
  `professor` varchar(11) NOT NULL,
  `descricao` text NOT NULL,
  `motivo_situacao` text NOT NULL,
  `data_inicio` date NOT NULL DEFAULT current_timestamp(),
  `aluno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id_projeto`, `nome`, `situacao`, `professor`, `descricao`, `motivo_situacao`, `data_inicio`, `aluno`) VALUES
(1, 'projeto', 'rejeitado', '98345984523', 'desc', 'podre', '2022-09-15', '89543824358'),
(3, 'wadawaw', 'aprovado', '98345984523', 'asdsaasdas', '', '2022-09-15', '23213910000'),
(4, 'banana', 'aprovado', '22222222222', 'algo generico', 'algo', '2022-09-16', '43425342342'),
(7, 'teste', 'aguardando', '98345984523', 'aaadsadwwdaqwd', '', '2022-09-18', '66666666666'),
(8, 'proj a2', 'aguardando', '98345984523', 'aluno 2 projeto', '', '2022-09-18', '86745643563');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorios`
--

CREATE TABLE `relatorios` (
  `id_relatorio` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `carga_horaria` int(3) NOT NULL,
  `projeto` int(11) NOT NULL,
  `aluno` varchar(11) NOT NULL,
  `situacao` varchar(10) DEFAULT NULL,
  `carga_horaria_aprovada` int(3) NOT NULL,
  `motivo_carga_horaria_aprovada` text NOT NULL,
  `data_envio` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relatorios`
--

INSERT INTO `relatorios` (`id_relatorio`, `descricao`, `carga_horaria`, `projeto`, `aluno`, `situacao`, `carga_horaria_aprovada`, `motivo_carga_horaria_aprovada`, `data_envio`) VALUES
(2, 'rg3trtrerte', 12, 8, '86745643563', 'avaliado', 1, '123', '2022-09-18'),
(3, '2123132132', 1, 8, '86745643563', 'avaliado', 34, '1as', '2022-09-18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `matricula` varchar(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`matricula`, `cpf`, `nome`, `login`, `senha`, `tipo`) VALUES
('11111111111', '22222222222', 'marcio', 'marcio', '81dc9bdb52d04dc20036dbd8313ed055', 'professor'),
('12333333333', '23213910000', 'lucinha ', 'luci', '81dc9bdb52d04dc20036dbd8313ed055', 'professor'),
('23121231231', '43425342342', 'aluno teste', 'aluno', '81dc9bdb52d04dc20036dbd8313ed055', 'aluno'),
('12345678909', '44444444444', 'nelson', 'nelson', '81dc9bdb52d04dc20036dbd8313ed055', 'coordenacao'),
('33333333333', '66666666666', 'aluno ', 'aluno', '81dc9bdb52d04dc20036dbd8313ed055', 'aluno'),
('12234524563', '86745643563', 'aluno tres', 'aluno3', '81dc9bdb52d04dc20036dbd8313ed055', 'aluno'),
('65345653463', '88778644678', 'Aluno dois', 'aluno2', '81dc9bdb52d04dc20036dbd8313ed055', 'aluno'),
('32345234545', '89543824358', 'coordenador teste', 'coord', '81dc9bdb52d04dc20036dbd8313ed055', 'coordenacao'),
('12234523452', '98345984523', 'professor teste', 'prof', '827ccb0eea8a706c4c34a16891f84e7b', 'professor');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id_projeto`),
  ADD KEY `fk_professor` (`professor`),
  ADD KEY `fk_aluno` (`aluno`);

--
-- Índices para tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`id_relatorio`),
  ADD KEY `FK_projeto` (`projeto`),
  ADD KEY `FK_aluno_relatorios` (`aluno`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `matricula` (`matricula`),
  ADD KEY `login` (`login`),
  ADD KEY `senha` (`senha`),
  ADD KEY `nome` (`nome`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id_projeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `relatorios`
--
ALTER TABLE `relatorios`
  MODIFY `id_relatorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `projetos`
--
ALTER TABLE `projetos`
  ADD CONSTRAINT `fk_aluno` FOREIGN KEY (`aluno`) REFERENCES `usuario` (`cpf`),
  ADD CONSTRAINT `fk_professor` FOREIGN KEY (`professor`) REFERENCES `usuario` (`cpf`);

--
-- Limitadores para a tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD CONSTRAINT `FK_aluno_relatorios` FOREIGN KEY (`aluno`) REFERENCES `usuario` (`cpf`),
  ADD CONSTRAINT `FK_projeto` FOREIGN KEY (`projeto`) REFERENCES `projetos` (`id_projeto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
