-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26/03/2023 às 22:04
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `amaz9082_db_creathusflix`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria_filmes`
--

CREATE TABLE `categoria_filmes` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categoria_filmes`
--

INSERT INTO `categoria_filmes` (`codigo`, `nome`) VALUES
(1, 'AÇÃO'),
(2, 'AVENTURA'),
(3, 'SUSPENSE'),
(4, 'TERROR'),
(5, 'ROMANCE');

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `codigo_categoria` int(11) NOT NULL,
  `link_capa_filme` varchar(100) NOT NULL,
  `link_trailer` varchar(1000) DEFAULT NULL,
  `quantidade_cliques` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`codigo`, `titulo`, `descricao`, `codigo_categoria`, `link_capa_filme`, `link_trailer`, `quantidade_cliques`) VALUES
(1, 'Hotel Transilvânia 2', 'No filme Hotel Transilvânia 2, Drácula está muito feliz com a chegada de seu neto, Dennis, mas fica preocupado quando percebe que o menino não apresenta nenhum sinal de ser um vampiro. Enquanto isso, a filha de Drácula, Mavis, e seu marido humano, Johnny, decidem visitar os pais de Johnny com Dennis.\r\n\r\nNo entanto, a verdadeira preocupação de Drácula é que seu neto possa se mudar para a cidade grande e deixar o mundo dos monstros para trás. Então, ele convoca seus amigos Frankenstein, Múmia, Lobisomem e a turma para ajudá-lo a transformar Dennis em um verdadeiro monstro.', 2, '/imagens/filmes/20a52de4fad90c50a38c5fb17de04b3b.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KCQF_AmayN0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(2, 'Homem-Aranha: Sem Volta Para Casa', '\"Homem-Aranha: Sem Volta Para Casa\" é o terceiro filme da franquia do Homem-Aranha estrelado por Tom Holland como Peter Parker. Neste filme, Peter Parker está tentando deixar para trás a revelação de sua identidade secreta como Homem-Aranha e a morte de seu mentor Tony Stark. Mas quando uma série de eventos misteriosos começam a acontecer, ele se vê obrigado a buscar a ajuda do Doutor Estranho para desfazer o estrago causado por suas ações.\r\n\r\nNo entanto, o que começa como uma simples tentativa de reverter o feitiço acaba se transformando em uma aventura interdimensional que trará de volta vilões clássicos dos filmes anteriores do Homem-Aranha, como o Doutor Octopus (Alfred Molina), o Electro (Jamie Foxx) e o Duende Verde (Willem Dafoe). Com a ajuda de seus amigos MJ (Zendaya) e Ned (Jacob Batalon), Peter precisa enfrentar seus maiores desafios até então e lutar para salvar sua cidade e aqueles que ama.\r\n\r\nCom uma mistura de ação, humor e drama, \"Homem-Aranha: Sem Volta Para Casa\" prom', 2, '/imagens/filmes/e7f40bd16b9d625579a48d94ad74172b.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FDNNHh7TRN0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(3, 'Ilha do Medo', '\"Ilha do Medo\" é um filme de suspense psicológico dirigido por Martin Scorsese. A história se passa em 1954, quando os agentes federais Teddy Daniels (Leonardo DiCaprio) e Chuck Aule (Mark Ruffalo) são chamados para investigar o desaparecimento de uma paciente do Hospital Psiquiátrico Ashecliffe, localizado em uma ilha remota na costa de Boston.\r\n\r\nAo chegarem na ilha, Teddy e Chuck descobrem que o lugar abriga criminosos insanos e que a paciente desaparecida é uma assassina cruel que escapou da ilha. À medida que a investigação avança, Teddy começa a sentir que há algo estranho acontecendo no hospital e na ilha, e começa a ser assombrado por visões perturbadoras de sua esposa falecida.\r\n\r\nCom o tempo correndo contra eles e sem saber em quem confiar, Teddy e Chuck precisam desvendar os mistérios da ilha do medo e encontrar a paciente desaparecida antes que seja tarde demais. O filme é uma jornada intensa e emocionante sobre a natureza da sanidade e da loucura, e conta com atuações impr', 3, '/imagens/filmes/5e8983247ac75b8c023137e1737fd820.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/y3dalJDGmt0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(4, 'Cidade de Deus', '\"Cidade de Deus\" é um filme brasileiro dirigido por Fernando Meirelles e Kátia Lund, lançado em 2002. O filme retrata a vida em uma favela no Rio de Janeiro chamada Cidade de Deus, desde o final da década de 1960 até o início dos anos 1980. A história é contada através dos olhos de Buscapé, um jovem fotógrafo que cresce na favela e sonha em se tornar um artista.', 1, '/imagens/filmes/1c4dcf63a1288609d1fd144685a894fa.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nBWtTrLxUjM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(6, 'O Amor é Cego', '\"O Amor é Cego\" é uma comédia romântica americana lançada em 2001, dirigida pelos irmãos Farrelly. O filme conta a história de Hal, um homem superficial que só se interessa por mulheres atraentes fisicamente. Porém, após uma sessão com um guru, Hal começa a ver as pessoas de acordo com suas personalidades, e não mais pela aparência.\r\n\r\nHal, interpretado por Jack Black, tem um histórico de relacionamentos fracassados, sempre se envolvendo com mulheres extremamente atraentes fisicamente, mas superficiais em personalidade. Após uma sessão com um guru, interpretado por Tony Robbins, Hal começa a ver as pessoas de acordo com suas almas gêmeas interiores, e não mais pela aparência.\r\n\r\nHal começa a se apaixonar por Rosemary, interpretada por Gwyneth Paltrow, uma mulher obesa que ele costumava ignorar, mas que agora ele vê como uma pessoa incrível e maravilhosa. Hal decide perseguir um relacionamento com ela, ignorando o fato de que todos os outros o acham louco por isso.', 5, '/imagens/filmes/27334ccc312e2cae3fb3300b20239aae.jpeg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/tNR1lurQBUM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(7, 'Eu os Declaro Marido e Larry', '\"Eu os Declaro Marido e Larry\" é um filme de comédia de 2007 estrelado por Adam Sandler e Kevin James. A história gira em torno de Larry (Kevin James), um bombeiro viúvo que precisa provar que é casado com seu melhor amigo Chuck (Adam Sandler) para poder receber benefícios de pensão do departamento de bombeiros. O problema é que Larry se casou secretamente com sua amiga Julie (Jessica Biel), e agora precisa esconder seu casamento real enquanto fingem ser um casal gay para manter a farsa. O filme trata com humor e leveza temas como homossexualidade e preconceito, enquanto os personagens lidam com situações cômicas e inusitadas ao tentar manter o disfarce.', 3, '/imagens/filmes/eea174c6127c6d7cde10903a6d635ca9.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RpqHSpOuRR4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(8, 'O Boneco Assassino', '\"O Boneco Assassino\" é um filme de terror lançado em 1988 e dirigido por Tom Holland. A trama gira em torno de um boneco chamado Chucky, que se torna possuído por um serial killer que morreu em sua fábrica. Quando o boneco é dado de presente para o jovem Andy Barclay, coisas estranhas começam a acontecer e uma onda de assassinatos começa a ocorrer.\r\n\r\nO filme é um clássico do gênero e se tornou uma referência para filmes de terror com objetos inanimados que ganham vida. A atuação de Brad Dourif como a voz de Chucky é considerada uma das melhores performances em filmes de terror. A franquia \"O Boneco Assassino\" continuou com várias sequências e adaptações para a televisão.\"\"\"\"', 5, '/imagens/filmes/4ed886b2688f52404dcf3f0b04573a57.jpeg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eeuuXupBN3E\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(9, 'A Hora do Pesadelo', '\"A Hora do Pesadelo\" é um clássico filme de terror lançado em 1984, dirigido por Wes Craven. O enredo gira em torno de um grupo de adolescentes que são perseguidos por um assassino em série em seus sonhos, Freddy Krueger, que tem a habilidade de matar suas vítimas enquanto elas dormem.\r\n\r\nA história começa quando Nancy, uma das adolescentes, começa a ter pesadelos terríveis com um homem com garras afiadas em uma luva. Ela descobre que seus amigos também estão tendo pesadelos semelhantes e juntos eles tentam encontrar uma maneira de deter o assassino em seus sonhos.\r\n\r\nA medida que a trama se desenvolve, os jovens descobrem que Freddy Krueger era um homem que abusava sexualmente e matava crianças, e que eles são as vítimas dos filhos dessas crianças que o assassinaram. Agora, Freddy Krueger busca vingança contra os filhos de seus assassinos.', 4, '/imagens/filmes/9002bfe5e51980b4c7e5025b82fcb330.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/A4TkFCRXlO8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `login`, `senha`) VALUES
(1, 'leandro', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria_filmes`
--
ALTER TABLE `categoria_filmes`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `categoria` (`codigo_categoria`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria_filmes`
--
ALTER TABLE `categoria_filmes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `filmes`
--
ALTER TABLE `filmes`
  ADD CONSTRAINT `filmes_ibfk_1` FOREIGN KEY (`codigo_categoria`) REFERENCES `categoria_filmes` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
