<?php
include_once '../comum.php';

$comum = new Comum();

$comum->setPrefixo('../');
$comum->setKeywords('sites, web, desenvolvimento, simples, tecnologia, blog, artigo, html, serviço, projeto, contato, home, school, ensino, em, casa');
$comum->setPagina("Recursos úteis para pais que ensinam seus filhos em casa");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- ESPAÇO GOOGLE-->
  <?php
  echo $comum->getGoogle();

  // metas e links 
  echo $comum->getCabecalho();
  ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <!-- MENU -->
  <?php echo $comum->getMenu(); ?>

  <!--SEÇÃO SOBRE-->

  <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-12 ftco-animate pb-5 mt-5 text-center">
          <h1 class="mb-3 bread">Recursos úteis para pais que ensinam seus filhos em casa</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>18-Recursos<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <!--INICIO DO ASSUNTO-->
          <p>Quando se trata de encontrar a melhor maneira de estudar em casa, você provavelmente encontrará dezenas de métodos, técnicas e estilos de ensino diferentes para experimentar. </p>
          <p class="text-center">
            <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/recursos.jpg" alt="imagem do e-book" title="imagem do e-book"></a>
          </p>
          <p>Toda essa liberdade é uma das melhores partes do homeschooling. Mas também pode tornar extremamente cansativo descobrir os melhores recursos de ensino em casa para o aprendizado do seu filho.</p>
          <p>Onde quer que você esteja em sua jornada de educação em casa, estamos aqui para apoiá-lo.</p>
          <p>Vamos levá-lo através da nossa lista dos 18 principais recursos de educação em casa para os pais, incluindo:</p>
          <ul>
            <li>Recursos educacionais para homeschooling, divididos por tópico</li>
            <li>Recursos para ajudá-lo a planejar um currículo escolar eficaz em casa</li>
            <li>Ideias envolventes para seus planos de aula para ajudá-lo a educar seu filho em casa</li>
          </ul>
          <p>Veja todos eles abaixo!</p>

          <h2 class="mb-3 mt-5">Dicas para os pais seguirem o caminho da educação em casa</h2>
          <p>Se você é novo no ensino em casa ou está apenas procurando algum apoio extra neste ano letivo, aqui estão nossas principais dicas para garantir que a educação de seu filho seja eficaz e corresponda às suas necessidades de aprendizado - de uma maneira que funcione melhor para você. </p>
          <p>
            <ol>
              <li>
                <h2 class="mb-3 mt-5">Familiarize-se com os métodos de ensino comuns</h2>
                <p>Com tantas estratégias de ensino e conceitos educacionais diferentes disponíveis, ajudar seu filho a prosperar em um ambiente de educação em casa pode parecer como tentar resolver um quebra -cabeça sem fim .</p>
                <p>Mas há uma solução! Ficar confortável com os melhores métodos de ensino pode ajudá-lo a se sentir mais confiante em suas escolhas e, finalmente, dar a você a liberdade de encontrar maneiras criativas que funcionem melhor para seu filho. Diferentes educadores podem não concordar sobre a melhor maneira de ensinar, mas você conhece melhor seu filho. </p>
                <p>Três dos métodos de ensino em casa mais populares são:</p>
                <ul>
                  <li>Waldorf — Concentra-se em considerar todo o eu do aluno: cabeça, coração e mãos. Busca encontrar um equilíbrio entre lógica, emoções e experiências para apoiar o desenvolvimento infantil. </li>
                  <li>Montessori — Incentiva os alunos a aprender em seu próprio ritmo e têm a liberdade de escolher como e o que gostariam de aprender. Também tende a desencorajar o uso da tecnologia, colocando o aprendizado prático em primeiro plano. </li>
                  <li>Charlotte Mason — Vê cada aluno como uma pessoa inteira e os incentiva a desenvolver novas ideias e construir hábitos que permanecem. Coloca ênfase na leitura de literatura de alta qualidade, enriquecimento pela natureza e alunos repetindo informações com suas próprias palavras.</li>
                </ul>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Desenvolva um currículo escolar em casa</h2>
                <p>Escolher os melhores recursos para a educação em casa é uma decisão difícil, especialmente ao tentar equilibrar as necessidades de aprendizado de seu filho com suas próprias necessidades e preferências de ensino. </p>
                <p>O conteúdo cobre o que você precisa? A abordagem e a entrega correspondem ao seu estilo parental e ao estilo de aprendizagem do seu filho? Você quer se concentrar no aprendizado prático ou no aprendizado de livros didáticos?</p>
                <p>Quando você está escolhendo um currículo homeschool, há muitos fatores a serem considerados. Pense sobre:</p>
                <ul>
                  <li>Quantas crianças você está ensinando e as diferenças entre elas</li>
                  <li>O estilo de aprendizagem de cada criança e as estratégias de estudo que melhor se adequam a ele</li>
                  <li>Quanto tempo você tem para dedicar e quão independente você quer que o aprendizado do seu filho seja</li>
                  <li>Os objetivos de aprendizagem de cada criança - tanto a curto quanto a longo prazo (por exemplo, quais são seus planos de pós-graduação?) </li>
                </ul>
                <p>Anote suas respostas para cada uma dessas perguntas. Em seguida, escolha o currículo que oferece a melhor solução geral para cada uma dessas necessidades. Para cada currículo, considere:</p>
                <ul>
                  <li>Reputação</li>
                  <li>Acessibilidade</li>
                  <li>Recursos disponíveis</li>
                </ul>
                <p>Com tantas opções disponíveis, você certamente encontrará algo que atenda às necessidades do seu filho e o mantenha envolvido, além de ser prático para você.</p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Aprenda o juridiquês do homeschooling</h2>
                <p>À medida que você constrói seu próprio ambiente de homeschooling, é importante entender o que significa homeschooling responsável .</p>
                <p>Conheça as leis de homeschooling em sua área. Isso irá equipá-lo com as ferramentas para educar seu filho de uma forma alinhada com os requisitos do estado. Além disso, você saberá exatamente quanta liberdade tem e onde pode tomar suas próprias decisões sobre a educação de seu filho.</p>
                <p>Uma vez que você tenha uma compreensão geral de seus requisitos legais, descubra como outras famílias estão trabalhando dentro desses parâmetros. Por exemplo, participe de grupos de apoio ou comunidades sociais online de pais como você. </p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">5 dicas extras para construir um ótimo ambiente escolar em casa</h2>
                <ol>
                  <li>Crie um espaço de aprendizado em casa que seja usado exclusivamente para educação em casa.</li>
                  <li>Crie uma agenda diária e mantenha-a em algum lugar que seu filho possa acessar facilmente.</li>
                  <li>Faça pausas cerebrais regulares para ajudar seu filho a relaxar e manter-se envolvido com o que está aprendendo.</li>
                  <li>Fora do horário que você definiu, dê escolhas ao seu filho sempre que possível. Por exemplo, deixe que eles escolham se sua atividade de aprendizado em grupo será dentro ou fora de casa naquele dia.</li>
                  <li>Use uma abordagem parental positiva para ajudar seu filho a permanecer intrinsecamente motivado para aprender. Deixe as expectativas claras, seja consistente e confiável e procure entender as necessidades de seu filho.</li>
                </ol>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Os melhores recursos de homeschooling disponíveis online</h2>
                <ol>
                  <li>
                    <h2 class="mb-3 mt-5"><a href="https://academicearth.org/" target="_blank" rel="noopener noreferrer">Academic Earth</a></h2>
                    <p>Preço: Gratuito</p>
                    <p>Fundada em 2008, a Academic Earth foi construída sob a crença de que “todos têm direito a uma educação de classe mundial”.</p>
                    <p>Este site conecta estudantes com cursos online gratuitos de universidades de todo o mundo. Se seu filho está se preparando para a faculdade, esta é a ferramenta perfeita para ajudá-lo a explorar as muitas opções disponíveis para ele ou começar a aprender novos tópicos com antecedência!</p>
                  </li>
                  <li>
                    <h2 class="mb-3 mt-5"><a href="https://www.duolingo.com/" target="_blank" rel="noopener noreferrer">DuoLingo</a></h2>
                    <p>Preço : Gratuito para a versão básica, com assinaturas Plus a partir de US$ 6,67 por mês. </p>
                    <p>Quer ajudar seu filho a se tornar fluente em espanhol? Que tal japonês? Ou latim? </p>
                    <p>Você está com sorte, porque DuoLingo tem tudo! Este aplicativo de aprendizado interativo ajuda os alunos a aprender novas línguas estrangeiras de uma maneira divertida e gamificada.</p>
                    <p>O DuoLingo é feito para usuários com 13 anos ou mais, por isso é a ferramenta de aprendizado de idiomas perfeita para seu filho em idade escolar. </p>
                  </li>
                  <li>
                  <h2 class="mb-3 mt-5"><a href="https://www.reallifeathome.com/" target="_blank" rel="noopener noreferrer">Real Life at Home</a></h2>
                    <p>Preço: Gratuito</p>
                    <p>Criado por uma mãe de três filhos e ex-escolar em casa, este site oferece muitos recursos gratuitos para os pais, incluindo:</p>
                    <ul>
                      <li>Receitas</li>
                      <li>Listas de livros para crianças</li>
                      <li>Impressos e planilhas</li>
                    </ul>
                  </li>
                </ol>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Currículo online para homeschooling</h2>
                <p>Selecionar um currículo on-line pode ser complicado, mas depois de considerar as necessidades de sua família, você pode escolher o que funciona melhor e deixar que o programa de seu currículo apoie seu filho o ano todo!</p>
                <p>Aqui estão alguns dos melhores para escolher: </p>
                <ol>
                  <li>
                    <h2 class="mb-3 mt-5"><a href="https://www.k12.com/" target="_blank" rel="noopener noreferrer">K12</a></h2>
                    <p>Nível de escolaridade: K-12</p>
                    <p>Preço: opções gratuitas e baseadas em mensalidades</p>
                    <p>Criado em 2000, o K12 oferece educação on-line para alunos que desejam aprender em seu próprio ritmo. Além de seu currículo regular, o site também oferece acampamentos de verão, educação de adultos e preparação para a carreira.</p>
                  </li>
                  <li>
                    <h2 class="mb-3 mt-5"><a href="https://www.oakmeadow.com/" target="_blank" rel="noopener noreferrer">Oak Meadow</a></h2>
                    <p>Nível de escolaridade: K - 12</p>
                    <p>Preço: Varia de acordo com a série e a disciplina, a partir de US$ 1.300 por semestre</p>
                    <p>Oak Meadow é um programa educacional baseado em impressão que oferece “uma educação flexível e progressiva para alunos independentes do jardim de infância ao 12º ano”. Depois de se inscrever, você receberá todos os seus materiais pelo correio.</p>
                  </li>
                </ol>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Ferramentas úteis e eficazes de educação em casa</h2>
                <p>Fora dos cursos on-line, existem muitas outras maneiras de tornar seu dia o mais tranquilo possível ao estudar em casa.</p>
                <p>Aqui estão algumas das ferramentas e aplicativos práticos do dia a dia que podem ser usados ​​como recursos valiosos no ensino em casa.</p>
                <ol>
                  <li>
                    <h2 class="mb-3 mt-5"><a href="https://www.google.com/intl/pt-BR/drive/" target="_blank" rel="noopener noreferrer">Armazenamento do Google Drive</a></h2>
                    <p>Crie imprimíveis, crie apresentações e rastreie informações em planilhas — tudo em um só lugar!</p>
                    <p>Mantenha todas as suas ferramentas de educação em casa no Google Drive e use o Google Agenda para hospedar sua programação diária. Ter um local para tudo pode tornar muito mais fácil acompanhar seus planos de aula e o progresso de aprendizado de seu filho. </p>
                  </li>
                  <li>
                    <h2 class="mb-3 mt-5"><a href="https://www.audible.com/" target="_blank" rel="noopener noreferrer">Audible</a></h2>
                    <p>Procurando um bom livro que seu filho possa desfrutar onde quer que esteja? Audible é o lar de toneladas de audiolivros e podcasts para complementar o que você está ensinando ou deixar seu filho aprender o que quiser.</p>
                    <p>É a ferramenta perfeita para alunos auditivos! </p>
                  </li>
                  <li>
                    <h2 class="mb-3 mt-5"><a href="https://zoom.us/" target="_blank" rel="noopener noreferrer">Zoom</a></h2>
                    <p>Mesmo se você estiver ensinando seu filho em casa, o Zoom é uma ferramenta útil para viagens de campo virtuais, palestrantes convidados ou até mesmo se conectar com outros alunos educados em casa. </p>
                    <p>Mantenha esta ferramenta no bolso de trás para quando quiser adicionar um pouco mais de conectividade ao seu dia.</p>
                  </li>
                </ol>
              </li>
            </ol>
          </p>

          <h2 class="text-center">
            <a href="home-school.php" target="_blank">CLIQUE AQUI PARA ADQUIRIR O SEU HOME SCHOOL - ESTRATÉGIAS!</a>
          </h2>
          <!--FINAL DO ASSUNTO-->

          <!--TAGS DO ASSUNTO-->
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">home</a>
              <a href="#" class="tag-cloud-link">school</a>
              <a href="#" class="tag-cloud-link">ensino</a>
              <a href="#" class="tag-cloud-link">casa</a>
            </div>
          </div>

          <!--BIOGRAFIA/SOBRE O AUTOR-->
          <div class="about-author d-flex p-4 bg-dark">
            <div class="bio mr-5 col-sm-2">
              <img src="../images/perfil.png" alt="Image placeholder" class="img-fluid mb-4">
            </div>
            <div class="desc">
              <h3>Igor Gomes</h3>
              <p>Admin, Desenvolvedor</p>
            </div>
          </div>
        </div>

        <div class="col ftco-animate">
          <!--BREVE COMENTARIO SOBRE O ASSUNTO OU INFORMAÇÃO AO LEITOR-->
          <div class="sidebar-box ftco-animate">
            <h3 class="heading-sidebar">Breve descrição</h3>
            <p>Toda essa liberdade é uma das melhores partes do homeschooling. Mas também pode tornar extremamente cansativo descobrir os melhores recursos de ensino em casa para o aprendizado do seu filho...</p>
          </div>
          <div id='anuncio' class="sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Anuncios</h3>
              <?php $comum->getAnuncioLateral(); ?>
            </div>
          </div>
        </div>
      </div>
  </section> <!-- .section -->

  <?php
  // FOOTER
  echo $comum->getFooter();
  echo $comum->getJS();
  ?>
</body>

</html>