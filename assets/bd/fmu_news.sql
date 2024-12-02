-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 12:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmu_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `postagem` text NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `postagem`, `id_cliente`, `titulo`) VALUES
(1, 'Além de inteligência artificial (IA), as áreas de segurança, machine learning, nuvem híbrida, infraestrutura de TI, fintech e e-commerce apresentam as maiores oportunidades de emprego no setor de tecnologia na América Latina. As informações constam em uma pesquisa divulgada nesta terça-feira (26) pela BEON.tech, empresa argentina que conecta desenvolvedores latinos com companhias dos Estados Unidos. De acordo com o levantamento, a área de segurança é a maior geradora de receita, enquanto IA e machine learning têm tendência de forte crescimento no próximo ano.\r\n\r\nOs dados da pesquisa da BEON.tech foram revelados durante o Ambassador’s Week, evento anual que reúne os programadores, desenvolvedores e profissionais latinos de outras áreas que atuam na empresa, em projetos para companhias dos Estados Unidos. O TecMundo foi até Buenos Aires para cobrir o evento e, na ocasião, os porta-vozes da companhia argentina falaram sobre como enxergam atualmente o mercado de tecnologia. Damian Wasserman, cofundador da BEON.tech, comenta que se tivesse que escolher uma carreira nos dias de hoje, certamente iria para as áreas de dados, IA ou Web 3. “Quase tudo hoje é relacionado com blockchain e IA. Estas áreas estão oferecendo as melhores oportunidades e melhores salários”, defende.\r\n\r\nO Ambassador’s Week 2024 reuniu programadores da BEON.tech de várias nacionalidades, incluindo do Brasil. Também cofundador da BEON.tech, Michel Cohen afirmou que se tivesse que começar uma carreira do zero, iria para a parte de engenharia ou ciência de dados. Ele cita que pensaria na combinação de todos estes conhecimentos com IA.\r\n\r\n“Também tentaria fazer algo com a linguagem de Python. Hoje em dia os programadores têm plataformas de IA como Copilot e ChatGPT que aumentam em até 40% a produtividade. Antes tudo era mais lento e determinístico, já hoje é possível que a IA faça coisas quase como se fosse um humano pensando. Isso ajuda muito”, argumenta.\r\n\r\nPor último, Cohen diz que assim como em quase todas as áreas do mercado, a IA auxilia BEON.tech em praticamente todos os processos. A tecnologia está presente até na hora de contratar, por exemplo. “Nós temos uma base com milhares de perfis e às vezes uma empresa dos Estados Unidos nos pede um perfil de candidato muito específico. Com a IA fazemos a filtragem e achamos as pessoas que mais se encaixam naquela busca. Por isso achamos que a IA é o futuro, já que está nos ajudando e resolvendo problemas o tempo todo”, finalizou.\r\n\r\nO jornalista viajou para Buenos Aires, Argentina, a convite da BEON.tech.', 3, 'IA, segurança e mais: pesquisa revela setores com mais contratações na área tech'),
(2, 'A computação espacial representa uma revolução tecnológica que integra o mundo digital ao físico, permitindo interações mais naturais e imersivas. Essa inovação está transformando diversos setores, desde o entretenimento até a medicina, e promete redefinir a forma como interagimos com a tecnologia no cotidiano.\r\n\r\nImagine um mundo onde as barreiras entre o digital e o físico se dissolvem, permitindo que informações virtuais se integrem perfeitamente ao nosso ambiente real. Essa é a promessa da computação espacial, uma tecnologia emergente que está redefinindo a maneira como interagimos com dispositivos e dados. \r\n\r\nA computação espacial é uma área da ciência da computação que envolve a interação com dados e processos computacionais de maneira espacial, ou seja, baseada em ambientes tridimensionais e reais. Diferentemente das interações tradicionais, que ocorrem por meio de telas bidimensionais de computadores e dispositivos móveis, a computação espacial permite que o mundo digital se integre ao mundo físico, criando novas formas de experiência e interação.\r\n\r\nEssa tecnologia utiliza sensores avançados, câmeras e algoritmos de processamento para mapear e compreender o ambiente ao redor do usuário. Com isso, é possível projetar hologramas, manipular objetos virtuais e interagir com informações digitais de forma intuitiva e natural. Um dos avanços mais significativos na computação espacial foi o lançamento do Apple Vision Pro, um headset de realidade mista que combina conteúdo digital com o mundo físico de maneira inédita. Apresentado como uma nova forma de computação, chamada de \"computação espacial\", o dispositivo permite que os usuários interajam com aplicativos, capturem memórias e assistam a conteúdos multimídia de forma imersiva.\r\n\r\nO Vision Pro utiliza uma combinação de sensores avançados e câmeras para mapear o ambiente ao redor do usuário, permitindo a projeção de elementos virtuais que se integram perfeitamente ao espaço físico. Essa integração possibilita experiências únicas, como assistir a um filme em uma tela virtual que parece estar flutuando na sala ou visualizar modelos 3D de objetos diretamente no ambiente real. Empresas de tecnologia estão investindo pesado no desenvolvimento de dispositivos e plataformas que utilizam computação espacial.\r\n\r\nAlém disso, a integração com outras tecnologias emergentes, como a inteligência artificial e a internet das coisas, pode potencializar ainda mais as aplicações e benefícios dessa inovação. A computação espacial representa uma revolução tecnológica que promete integrar o mundo digital ao físico de maneira inédita. Embora ainda enfrente desafios, os avanços recentes indicam um futuro onde essa tecnologia estará presente em diversos aspectos de nossas vidas, transformando a forma como interagimos com o mundo ao nosso redor.\r\n\r\n', 3, 'Computação Espacial: o que é essa revolução tecnológica?'),
(3, 'Se você é fã de Star Wars, provavelmente vai lembrar da cena em que a poderosa arma Estrela da Morte usa seus oito raios laser convergindo em um único ponto para destruir o planeta Alderaan. Agora, em mais um caso em que a realidade imita a ficção, um grupo de cientistas chineses afirma ter desenvolvido uma arma inspirada na tecnologia mostrada no filme.\r\n\r\nA nova arma combina várias ondas eletromagnéticas de alta potência, implantadas em diferentes locais, que podem ser direcionadas e sincronizadas para um único ponto, formando um laser superpoderoso. A tecnologia, porém, pode enfrentar alguns problemas técnicos. Alguns especialistas comentam que, para a arma ter sucesso, os transmissores precisam ser alinhados com extrema precisão. Para garantir a sincronia, os tempos de disparo devem ser controlados com precisão de até 170 picosegundos e cada veículo transmissor precisa ser posicionado com uma precisão milimétrica.\r\n\r\nAinda que o sistema de navegação por satélite chinês BeiDou ofereça uma precisão de até 1 centímetro, ainda é considerado pouco para a arma obter 100% de sucesso. Além disso, os veículos precisam estar perfeitamente nivelados, já que qualquer variação na superfície pode desalinhar os emissores, comprometendo o funcionamento do sistema. Outro desafio que a tecnologia deve enfrentar é a limitação devido ao ambiente. Isso porque as micro-ondas não funcionam por muito tempo devido à dispersão causada por poeira e umidade no ar.\r\n\r\n', 3, 'Cientistas chineses criam arma inspirada na Estrela da Morte de Star Wars'),
(4, 'No dia 1º de novembro, o Projeto Hyperion anunciou o lançamento de um concurso internacional para quem deseja contribuir com propostas de design conceitual de naves projetadas para viagens espaciais de longa duração. Teoricamente, esses veículos seriam capazes de abrigar tripulações por centenas de anos. As inscrições estão abertas até 15 de dezembro de 2024, e as melhores propostas receberão prêmios de US$ 10 mil (aproximadamente R$ 57 mil na cotação atual).\r\n\r\nCom o avanço da exploração espacial, agências e empresas que desenvolvem tecnologias na área estão buscando entender como viabilizar viagens tripuladas de longa duração. Contudo, a tecnologia atual ainda não oferece os recursos necessários para esse tipo de viagem, seja pela ausência de equipamentos adequados, ou pelos desafios relacionados à saúde humana no ambiente espacial. A proposta da competição é desenvolver conceitos de uma \'Nave-Mundo\', também conhecida como \'Nave de Geração\'. Eles estão interessados nesse tipo de nave para realizar viagens interestelares rumo a regiões distantes do universo, como exoplanetas fora do Sistema Solar.\r\n\r\nO termo ‘Nave de Geração’ reflete a ideia de um veículo capaz de abrigar tripulações por centenas de anos, o que permitiria alcançar destinos extremamente remotos no cosmos. Por exemplo, uma viagem desse tipo permitiria que a humanidade alcançasse regiões como Proxima Centauri b, um exoplaneta a apenas 4,2 anos-luz de distância da Terra.\r\n\r\n“As naves de geração são projetadas para transportar uma tripulação, com o objetivo principal de estabelecer um exoplaneta ou outro corpo celeste no sistema estelar alvo. Elas também tendem a ser muito maiores do que as sondas interestelares, embora provavelmente usem sistemas de propulsão semelhantes, como propulsão baseada em fusão”, disse o professor na Universidade de Luxemburgo e associado do Projeto Hyperion, Andreas Hein, em mensagem ao site Universe Today.\r\n\r\nNa competição, os participantes serão desafiados a criar o conceito da nave, incluindo o habitat da tripulação e toda a infraestrutura e sistemas essenciais para uma viagem espacial de longa duração. Segundo o site do Projeto Hyperion, os interessados devem desenvolver um projeto de veículo capaz de realizar uma missão de até 250 anos.\r\n\r\n', 1, 'Projeto Hyperion busca conceitos para a construção da primeira nave interestelar'),
(6, 'A principal faixa do 5G, conhecida como 5G standalone (SA), começou a operar em todo o território nacional nesta segunda-feira (2). As operadoras já podem ativar esse 5G puro em qualquer cidade do país, caso desejem. No entanto, mesmo com a faixa liberada, isso não significa que a tecnologia será imediatamente implementada em todas as cidades. O edital do leilão do 5G, realizado em 2021, estabelece que as empresas devem ativar a tecnologia em todas as cidades até o final de 2029.\r\n\r\n5G no Brasil: guia explica o que muda com a nova tecnologia\r\nEnquanto a velocidade do 4G no Brasil é de cerca de 19,8 Mbps, a do 5G pode alcançar velocidades entre 1 e 10 Gbps, o que representa um aumento de 100 vezes ou mais em relação ao 4G.\r\n\r\nNa última terça-feira (26), a Agência Nacional de Telecomunicações (Anatel) e a Entidade Administradora da Faixa (EAF) anunciaram a conclusão do processo de \"limpeza\" do sinal utilizado pelo 5G no Brasil. No Brasil, a faixa utilizada pelo 5G é a de 3,5 gigahertz (GHz), anteriormente ocupada por serviços de satélites e radiodifusão, como as antenas parabólicas. Por isso, para que o 5G puro pudesse ser ativado, foi necessário \"limpar\" a faixa, instalando filtros e kits para recepção do sinal de TV. Esse processo ficou sob a responsabilidade da EAF. A liberação da faixa anunciada na terça-feira passada significa que não há risco de interferência no sinal 5G, permitindo que as operadoras ativem o standalone.\r\n\r\n\"A liberação da faixa de 3,5 GHz é o primeiro passo necessário para a chegada do 5G. O edital do 5G fixou um cronograma de instalação da nova tecnologia, que tem sido cumprido e mesmo antecipado pelas operadoras\", disse o presidente-executivo da Conexis Brasil Digital, que representa as operadoras, Marcos Ferrari.\r\n\r\nNo início da operação, os usuários podiam se conectar ao 5G nas versões \"non-standalone\" (NSA), que utilizam parte da infraestrutura do 4G. Também existe o \"DSS\" (Compartilhamento Dinâmico de Espectro, na sigla em inglês), que algumas operadoras promoveram como \"5G\" desde 2020, mas que na verdade usa apenas a estrutura do 4G. O 5G SA se destaca pela \"ultrabaixa\" latência, o tempo mínimo de resposta entre um aparelho e os servidores de internet – aquele \"delay\" que acontece em ligações em vídeo, quando é preciso esperar uns segundos até que a pessoa do outro lado veja e ouça o que falamos.\r\n\r\n\"No 4G, quando é muito boa a latência, ela é de 50 a 70 milissegundos. No 5G, pode ficar de 1 a 5 milissegundos. Estamos falando em reduzir numa ordem de 10 vezes o tempo que uma informação leva para percorrer a rede\", disse Leonardo Capdeville, chefe de inovação tecnológica da TIM.\r\n\r\nOutra característica do 5G SA, que o difere das gerações de rede anteriores, é que ele pode lidar com muito mais dispositivos ligados ao mesmo tempo. A conexão também será mais confiável, pois um aparelho vai poder se conectar com mais de uma antena ao mesmo tempo. Isso é que vai revolucionar áreas como a indústria, a telemedicina, ambientes de realidade virtual, carros autônomos, entre outras.', 3, 'Anatel diz que operadoras já podem ativar o 5G standalone, de alta velocidade, em todo o Brasil');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'teste', 'teste@gmail.com', 'teste'),
(2, 'teste', 'teste@gmail.com', 'teste'),
(3, 'Anna', 'anna@gmail.com', '$2y$10$zY.TNZibBhXp5SfKL5bwsuW/NKQkfx92JAdSkXwHtY3b/noOO4hM.'),
(4, 'admin', 'admin@gmail.com', '$2y$10$45Zj80HtiluX9aqqNjhptOVRL.El88NX5Mye/jqrtf5q1IfV7Ocim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `fk_cliente` (`id_cliente`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
