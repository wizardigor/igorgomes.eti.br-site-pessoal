<?php
include_once '../comum.php';

$comum = new Comum();

$comum->setPrefixo('../');
$comum->setKeywords('sites, web, desenvolvimento, simples, tecnologia, blog, artigo, html, serviço, projeto, contato, home, school, ensino, em, casa');
$comum->setPagina("8 Passos para o Sucesso do Homeschool");
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
          <h1 class="mb-3 bread">8 Passos para o Sucesso do Homeschool</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>8-passos<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <!--INICIO DO ASSUNTO-->
          <h2 class="mb-3">Descubra por onde começar com uma educação homeschool. Inclui uma linha do tempo passo a passo para assumir o controle.</h2>
          <p class="text-center">
            <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/8passos.jpg" alt="ilustração" title=""></a>
          </p>
          <ol>
            <li>
              <h2 class="mb-3 mt-5">Pesquise suas opções de homeschooling</h2> 
              <p>Comece a qualquer momento, não importa se seu filho é um bebê ou já tem vários anos de escola primária em seu currículo. Alguns pais acham que o final de um ano letivo é um bom momento para iniciar suas pesquisas porque lhes dá tempo suficiente para investigar os detalhes e começar no outono. Assine revistas como Homeschooling Today , visite a biblioteca, leia livros e converse com pessoas que estudam em casa - entre em contato ou junte-se a uma organização local de educação domiciliar. Educar-se sobre os vários caminhos que você pode seguir é a melhor maneira de definir por que você está tomando essa decisão e o que você espera que o homeschooling faça para sua família. Só não fique frustrado se você não entender tudo o que lê ou ouve.</p>
            </li>
            <li>
              <h2 class="mb-3 mt-5">Investigue os requisitos de</h2> 
              <p>Educação em casa do seu estado As regras e regulamentações de educação em casa variam muito de estado para estado. Em Nova York, por exemplo, os pais devem apresentar uma declaração anual de intenção com o superintendente local até 1º de julho ou 14 dias antes de começar a estudar em casa, bem como um plano de instrução individualizado em casa. Os pais de Nova York também devem manter registros de frequência, enviar relatórios trimestrais e realizar testes padronizados . Você pode encontrar informações detalhadas sobre as leis do seu estado em You Can Home School .</p>
            </li>
            <li>
              <h2 class="mb-3 mt-5">Junte-se a um grupo local de educação domiciliar</h2>
              <p>Conhecer homeschoolers em sua área lhe renderá informações valiosas. Aqui você encontrará outras famílias que podem responder a perguntas, permitir que você revise seus hábitos de ensino em casa e mostrar como o homeschooling funciona para eles. Você pode aprender sobre atividades apropriadas à idade de seus filhos, como esportes, aulas particulares ou pequenos clubes que atendam aos interesses de seu filho. Durante as reuniões semanais, os pais podem optar por ensinar uma disciplina como uma língua estrangeira ou um laboratório de ciências para um grupo de alunos.</p>
            </li>
            <li>
              <h2 class="mb-3 mt-5">Decidir sobre o currículo escolar em casa</h2>
              <p>Os currículos podem ser adquiridos através de catálogos por correspondência ou em lojas online, incluindo a Scholastic's Teacher Store (você precisa se registrar para comprar). Eles variam de livros tradicionais e livros de exercícios que cobrem leitura, escrita e aritmética a abordagens mais individualizadas que são guiadas pelos próprios interesses da criança. Convenções estaduais e feiras de currículo, realizadas várias vezes ao ano, também exibem uma variedade de publicações e produtos de educação domiciliar.</p>
            </li>
            <li>
              <h2 class="mb-3 mt-5">Crie seu espaço de ensino em casa</h2>
              <p>Você vai dar aulas na mesa da cozinha? Você precisa de um quadro-negro ou de uma mesa? Que tal um espaço vazio na parede para postar horários, calendários e trabalhos concluídos? Existe um computador próximo que esteja conectado à Internet? Organize-se comprando armários de armazenamento e estantes para guardar livros didáticos e pastas de trabalho. As cestas também são úteis para manter os suprimentos soltos sob controle.</p>
            </li>
            <li>
              <h2 class="mb-3 mt-5">Defina metas específicas de educação domiciliar</h2>
              <p>Como os homeschoolers seguem seu próprio ritmo, é importante, especialmente no primeiro ano, considerar o que você deseja realizar. Os estudos são importantes quando você define metas de curto e longo prazo, mas não são o único componente da educação de uma criança. Por exemplo, como seu filho fará atividade física? Quando ele vai socializar com outras crianças? Considere a importância de atividades extracurriculares , como aulas de música ou escoteiros. Faça networking com outros pais – homeschooling e não – para encontrar as melhores atividades. Verifique também os centros comunitários locais, casas de culto e anúncios e listas de jornais.</p>
            </li>
            <li>
              <h2 class="mb-3 mt-5">Defina um cronograma de ensino em casa</h2>
              <p>Crie um plano para atingir as metas que você delineou. Embora uma agenda faça com que algumas pessoas se sintam limitadas, ajuda, especialmente no início, a se organizar e ter uma missão, diz Dobson. Compre um livro de planos e pense em como você quer dividir a agenda acadêmica do seu filho e cada assunto que você quer trabalhar. Considere como você deseja dividir seu aprendizado semana a semana também. Arranje tempo para excursões e visitas à biblioteca. E lembre-se, a flexibilidade é um dos principais apelos do homeschooling. Você sempre pode adaptar sua agenda às necessidades de mudança de seu filho.</p>
            </li>
            <li>
              <h2 class="mb-3 mt-5">Cuidado com as armadilhas comuns do homeschooling</h2>
              <p>Homeschoolers dizem que há três questões que muitas vezes impedem os iniciantes. Primeiro: sentir-se isolado. Certifique-se de ter seguido o conselho na Etapa 3 e se juntar a um grupo de suporte. Não é apenas para as crianças, embora a socialização seja fundamental para elas. Os pais que estudam em casa também precisam se conectar com adultos que pensam da mesma forma.</p>
              <p>Outro problema potencial é se comprometer com um currículo muito cedo. Dobson observa que alguns novos alunos que estudam em casa compram um currículo caro imediatamente, apenas para descobrir que ele não se adequa ao estilo de aprendizagem de seus filhos. Experimente por um tempo antes de gastar muito dinheiro.</p>
              <p>Finalmente, saiba que você precisará aprender à medida que avança. Ajustar-se à liberdade e flexibilidade do homeschooling é um desafio. Há tantas maneiras de abordar sua tarefa. Lembre-se de que você estará definindo – e redefinindo constantemente – a si mesmo à medida que avança.</p>
            </li>
          </ol>
          
          <h2 class="text-center">
            <a href="home-school.php" target="_blank">CLIQUE AQUI PARA ADQUIRIR O SEU hHOME SCHOOL - ESTRATÉGIAS!</a>
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
            <p>Educação em casa do seu estado As regras e regulamentações de educação em casa variam muito de estado para estado.</p>
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