-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2021 às 13:00
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cartilhadigital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `ArtigoID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Titulo` varchar(150) NOT NULL,
  `Subtitulo` varchar(150) NOT NULL,
  `Autor` varchar(150) NOT NULL,
  `Data` varchar(30) NOT NULL,
  `Tags` varchar(100) NOT NULL,
  `Artigo` longtext NOT NULL,
  `Imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`ArtigoID`, `Nome`, `Titulo`, `Subtitulo`, `Autor`, `Data`, `Tags`, `Artigo`, `Imagem`) VALUES
(1, 'Dislexia', 'O Que É Dislexia?', 'O que é dislexia? E como que pode afetar usuários da internet.', 'Humberto Corrêa Gomes ', '17/10/2021', 'Dislexia, Internet, Acessibilidade, Site, Escola, Aprendizado.', '<p style=\"width: 980px; text-align: justify;\"> A dislexia, mais conhecida como Transtorno de Leitura, que é caracterizada por problemas com a leitura, apesar da inteligência normal. Existem alguns graus desse transtorno, algumas pessoas confundem palavras, outras tem problemas ao ler rapidamente, outras tem problemas de escrever as palavras, ou até mesmo existe pessoas que não conseguem ler, no caso, não é que elas não sabem ler, é que elas não conseguem associar a palavra falada com a escrita, existem casos que a pessoa não consegue soletrar a palavra, e etc. Existem casos também, que a pessoa sabia ler antes, e de repete, não consegue mais ler, isso é chamado de alexia.</p>\r\n\r\n<p style=\"width: 980px; text-align: justify;\"> As dificuldades são totalmente involuntárias, e por incrível que pareça, essas pessoas tem um desejo normal de aprender as coisas. Pessoas com dislexia tem taxas mais altas de transtorno de déficit de atenção e de hiperatividade.</p>', 'Dislexia.jpg'),
(2, 'O que é Discalculia?', 'O que é Discalculia?', 'O que é discalculia? E como que uma fonte pode mudar toda a experiencia do usuário.', 'Thomas Blume de Vargas', '19/10/2021', 'Discalculia, Internet, Acessibilidades, Números, Fontes.', '<p style=\"width: 980px; text-align: justify;\"> Discalculia é uma deficiência de aprendizagem especifica em matemática. Crianças com discalculia tendem a ter dificuldades a entender conceitos lógicos de matemática, como, usar símbolos ou funções que são necessárias para realizar tarefas escolares. No entanto, isso não afeta somente na vida escolar. Os desafios do distúrbio podem criar dificuldades em atividades do cotidiano. A boa noticia é que existem diversas formas de exercícios e estratégias que diminuem bastante as dificuldades que o distúrbio causa.</p>\r\n\r\n<p style=\"width: 980px; text-align: justify;\"> A discalculia pode causar diferentes tipos de dificuldades dentro da matemática. Portanto, os sintomas podem variar de criança para criança. Observar seu filho e tomar notas para compartilhas com professores e médicos é uma ótima maneira de diagnosticar o distúrbio e consequentemente, encontrando tratamentos e soluções. </p>\r\n\r\n<p style=\"width: 980px; text-align: justify;\"> Em relação aos tratamentos, diversos tipos de profissionais podem ajudar, alguns podem trabalhar no ambiente escolar mesmo e alguns em um ambiente privado, alguns dos profissionais são: professores de educação especial, psicólogos infantis e psicopedagogos. Durante o tratamento, utilizam-se exemplos concretos que conectam a matemática com a vida real, como por exemplo os botões de classificação, além de usar auxílios visuais ao resolver o problema, como objetos e etc. </p>', 'Dislexia.jpg'),
(3, 'O que é TDAH? ', 'O que é TDAH? ', 'O que é TDAH? E como que o design do site pode afetar a experiencia do usuário.', 'Igor Ibruzza & Arthur Dondoni', '21/10/2021', 'TDAH, Déficit De Atenção, Internet, Hiperatividade, Acessibilidade, Site.', '<p style=\"width: 980px; text-align: justify;\"> É uma condição neurológica caracterizada por desatenção ou hiperatividade e impulsividade em graus inconsistentes com o nível de desenvolvimento do individuo. Em crianças, a desatenção é muitas vezes a causa de maus resultados escolares. Embora cause dificuldades, sobretudo na sociedade contemporânea, muitas crianças com PHDA conseguem se concentrar em tarefas que consideram interessantes.</p>\r\n\r\n<p style=\"width: 980px; text-align: justify;\"> E muitas vezes, pode ocasionar a tornar o individuo autodidata, mas apenas para coisas que despertam o seu interesse e que não sejam chatas para ele, assim, prestando mais atenção naquilo que é mais interessante, pode ser desde física quântica, a buracos negros, ou até mesmo algo relacionado a botânica e a natureza.</p>', 'Dislexia.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorianoticias`
--

CREATE TABLE `categorianoticias` (
  `CategoriaNoticiaID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorianoticias`
--

INSERT INTO `categorianoticias` (`CategoriaNoticiaID`, `Nome`, `Descricao`) VALUES
(1, 'Dislexia', 'Dislexia'),
(2, 'Discalculia', 'Discalculia'),
(3, 'TDAH', 'TDAH');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `Nome`, `Descricao`) VALUES
(1, 'O que é Dislexia?', 'O que é Dislexia?'),
(2, 'O que é Discalculia?', 'O que é Discalculia?'),
(3, 'O que é TDAH?', 'O que é TDAH?'),
(4, 'Sobre Nós', 'Sobre Nós '),
(5, 'Noticias', 'Noticias');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `NoticiaID` int(11) NOT NULL,
  `CategoriaID` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Subtitulo` varchar(200) NOT NULL,
  `Autor` varchar(150) NOT NULL,
  `Data` varchar(30) NOT NULL,
  `Tags` varchar(100) NOT NULL,
  `Noticia` longtext NOT NULL,
  `Imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`NoticiaID`, `CategoriaID`, `Titulo`, `Subtitulo`, `Autor`, `Data`, `Tags`, `Noticia`, `Imagem`) VALUES
(1, 1, 'Dislexia na Internet', 'Como a dislexia deve ser tratada e adaptada para a internet?', 'Humberto Corrêa Gomes \r\n', '28/10/2021', 'Dislexia, Apps, Aplicativos, Internet, Sites.', '<p style=\"width: 980px; text-align: justify;\"> Para deixar os sites mais inclusivos, primeiro temos que ver isso na visão de quem precisa, quando temos essa visão, é extremamente mais fácil atender a essa demanda. Podemos deixar os sites mais acessíveis de uma maneira que os programas de leituras consigam ler mais facilmente o conteúdo do site. Durante a minha pesquisa, não consegui encontrar nenhuma diretriz que obrigue sites a encobrir esse tipo de acessibilidade, mas felizmente, existe toda uma associação que obriga os sites a criarem opções de acessibilidades para outros tipos de desabilidade, tanto física como neurológica. Em alguns sites, existem sim a opção de aumentar a fonte por exemplo, mas nada além isso que possa ajudar no nosso tema, que no caso seria a dislexia. O que muitos smartphones tem é mudar a fonte para algo mais legível, e isso não muda só para o usuário, muda a fonte de todos os sites que ele entra, e até mesmo de alguns aplicativos, tem também extensões que mudam a cor da página por exemplo, para além de aumentar o foco de certa forma, ajuda também a se forcar em um texto por exemplo por uma quantidade maior de tempo.</p>\n\n<p style=\"width: 980px; text-align: justify;\"> Bom, geralmente, essas ferramentas funcionam ou mudando alguma no código temporariamente, isso significa que quando ele sair do site, o site vai voltar ao normal. Caso seja alguma configuração no seu celular por exemplo, ele irá fazer a mesma coisa. Mas caso seja um botão dentro do site que deixe ele mais acessível, ele irá mudar para site para que ele seja mais simples de se navegar. E um leitor de informações funciona com base no reconhecimento de palavras e transformando em áudio, infelizmente, ainda não existe nenhuma tecnologia que consiga reconhecer uma imagem e descrever ela perfeitamente. Bom, pegando como a minha visão (Humberto) uma pessoa disléxica, a parte mais difícil de quando eu vou acessar um site novo, é a quantidade de informação que na tela. Se tiver muita informação na tela, eu me perco, e, até me faz querer sair no site. E, se a fonte não for 100% entendível, eu tenho dificuldade de ler o que está escrito. E em relação a TDAH, eu prefiro sites com a cor de fundo preta, pois assim, além de me ajudar a conseguir ler mesmo quando está de noite sem prejudicar minha visão, mas também, eu consigo me focar melhor, já que não tem tanta coisa que tire a minha atenção.</p>\n\n<p style=\"width: 980px; text-align: justify;\"> Mas obviamente, temos que pensar também nos outros graus da dislexia, e levando isso em consideração, também devemos pensar na quantidade de informações na tela, pois caso o indivíduo em questão não sabe ler por conta da dislexia, o computador consiga interpretar o texto, transformar em áudio mais facilmente, pois caso tenha muita informação na tela, o computador terá dificuldade de fazer essa conversão, e assim, atrapalhando a experiencia do usuário no site.</p>', 'Dislexia.jpg'),
(2, 2, 'Discalculia na internet', 'Como devemos lidar com a Discalculia na internet?', 'Thomas Vargas', '28/10/2021', 'TDAH, Déficit De Atenção, Internet, Aplicativos, Apps, Sites. ', '<p style=\"width: 980px; text-align: justify;\">Discalculia é uma deficiência de aprendizagem especifica em matemática. Crianças com discalculia tendem a ter dificuldades a entender conceitos lógicos de matemática, como, usar símbolos ou funções que são necessárias para realizar tarefas escolares. No entanto, isso não afeta somente na vida escolar. Os desafios do distúrbio podem criar dificuldades em atividades do cotidiano. A boa noticia é que existem diversas formas de exercícios e estratégias que diminuem bastante as dificuldades que o distúrbio causa. A discalculia pode causar diferentes tipos de dificuldades dentro da matemática. Portanto, os sintomas podem variar de criança para criança. Observar seu filho e tomar notas para compartilhas com professores e médicos é uma ótima maneira de diagnosticar o distúrbio e consequentemente, encontrando tratamentos e soluções.</p>\r\n\r\n<p style=\"width: 980px; text-align: justify;\">Em relação aos tratamentos, diversos tipos de profissionais podem ajudar, alguns podem trabalhar no ambiente escolar mesmo e alguns em um ambiente privado, alguns dos profissionais são: professores de educação especial, psicólogos infantis e psicopedagogos. Durante o tratamento, utilizam-se exemplos concretos que conectam a matemática com a vida real, como por exemplo os botões de classificação, além de usar auxílios visuais ao resolver o problema, como objetos e etc. O que podemos fazer para tornar isso mais acessível na internet, é adaptar os números e as fontes para que seja mais visível de ler e de interpretar.</p>', 'Dislexia.jpg'),
(3, 3, 'TDAH Na internet', 'Como devemos tratar o TDAH na internet? ', 'Igor Bruzza e Arthur Dondoni.', '28/10/2021', 'TDAH, Ansiedade, Aplicativos, Internet, Apps, Sites. ', '<p style=\"width: 980px; text-align: justify;\">Durante muito tempo na nossa sociedade, as pessoas que possuem TDAH foram taxadas como desinteressadas e distraídas, mas hoje, com a capacidade de estudar e documentar diversos estudos, temos a consciência de que essa condição é derivada de uma disfunção do córtex pré-frontal, e que pode vir a ser somente o topo do iceberg quando falamos sobre problemas que podem causar para pessoas diagnosticadas com déficit de atenção; e estudos apontam que isso pode vir a ser um dos maiores empecilhos para nossa futura geração. Segundo uma pesquisa, realizada em Los Angeles, e que contou com a participação de mais de dois mil e quinhentos jovens, a alta exposição a internet pode aumentar em até 10% a chance de desenvolvimento de alguns sintomas da doença. Isso não quer dizer que as redes sociais e os jogos online são a principal causa do distúrbio, mas podemos afirmar que, se o uso não for moderado e responsável, irá apenas agravar o caso, e que, caso não tenha TDA, pode vir a ter no futuro.</p>\r\n\r\n<p style=\"width: 980px; text-align: justify;\">Quando tentamos pensar em uma solução para isso, a primeira coisa que vêm a mente é, com toda a certeza, tentar reverter a situação e a dependência da internet com a própria tecnologia; utilizando medidas de controle de tempo que são dispostas pelos próprios celulares, como despertadores e timers. O que podemos fazer em nosso site é adicionar alguma forma de chamar a atenção do usuário para o uso prolongado do computador, e, se possível, adicionar pontos chave onde ao clicar, redirecione para uma página com informações importante sobre cuidados que devem ser tomados para evitar o uso prolongado.</p><br>\r\n\r\n<p style=\"width: 980px; text-align: justify;\"> E também, existe toda a questão da ansiedade;</p> <br>\r\n\r\n<p style=\"width: 980px; text-align: justify;\">A ansiedade e seus transtornos são um conjunto de doenças mentais, que geralmente se destacam pela grande preocupação com algo ou de algo de ruim que possa acontecer. Normalmente durante as crises de ansiedade as pessoas não conseguem se manter no presente momento e ficam muito tensos , pessoas com ansiedade tendem a sofrer de problemas físicos como sudorese e arritmia cardíaca. A origem dos transtornos de ansiedade varia de pessoa para pessoa. Por exemplo, sua aparência pode ser devido a um desequilíbrio de substâncias químicas no cérebro, falta de apoio familiar ou trauma, especialmente na infância. Ou uma combinação de muitos fatores. Além disso, as pessoas com essa doença podem ter convulsões devido a fatores desencadeantes específicos. Além dos fatores já mencionados, a insônia, o estresse, o sedentarismo e a falta de lazer são todos fatores que podem desencadear as manifestações dessa doença.</p>\r\n\r\n<p style=\"width: 980px; text-align: justify;\"> Como tratar a ansiedade? Temos três tipos de tratamentos para os transtornos de ansiedade que são os medicamentos sempre acompanhado e com uma receita médica, a psicoterapia e a junção dos dois tratamentos anteriores. A maioria das pessoas conseguem retomar sua rotina normalmente depois de algumas semanas de tratamento, por isso é importante  procurar ajuda especializada</p>', 'Dislexia.jpg ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`ArtigoID`);

--
-- Índices para tabela `categorianoticias`
--
ALTER TABLE `categorianoticias`
  ADD PRIMARY KEY (`CategoriaNoticiaID`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`NoticiaID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `ArtigoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `categorianoticias`
--
ALTER TABLE `categorianoticias`
  MODIFY `CategoriaNoticiaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `NoticiaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
