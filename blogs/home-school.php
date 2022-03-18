<?php
include_once '../comum.php';

$comum = new Comum();

$comum->setPrefixo('../');
$comum->setKeywords('sites, web, desenvolvimento, simples, tecnologia, blog, artigo, html, serviço, projeto, contato, home, school, ensino, em, casa');
$comum->setPagina("Home School");
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
          <h1 class="mb-3 bread">Home School Estratégias</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Home-School<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <!--INICIO DO ASSUNTO-->
          <h2 class="mb-3">Escola em Casa</h2>
          <p>Você tem o que é preciso para ser um professor de escola familiar eficaz? Descubra neste e-book especial!</p>
          <p class="text-center">
            <a href="https://app.monetizze.com.br/r/ALG16600393" target="_blank"><img class="img-fluid" src="../images/home-school.jpg" alt="imagem do e-book" title="imagem do e-book"></a>
          </p>
          <p>Quando se trata de um ensino doméstico bem-sucedido, há uma coisa que aumentará suas chances de sucesso e tornará as coisas mais fáceis para você e também para seu filho. Você consegue adivinhar o que é isso?</p>
          <p>Descubra o que você DEVE fazer para simplificar o processo e ajudar seu filho a se manter no caminho certo. Isso tornará as coisas muito mais fáceis para todos, ajudando você a fazer mais em menos tempo!</p>
          <p>O ensino em casa deve ser uma experiência gratificante, mas às vezes é normal sentir-se sobrecarregado. Esse e-book fará toda a diferença e ajudará você a aproveitar todo o processo!</p>
          <p>Tudo isso e muito mais neste e-book especial!</p>

          <h2 class="mb-3 mt-5">O que é um e-book?</h2>
          <p>Um e-book é uma publicação com o mesmo conteúdo de um livro, em formato digital, consistindo em texto, imagens ou ambos, e produzida, publicada por meio de computadores ou outros dispositivos eletrônicos.</p>
          <h2 class="text-center">
            <a href="https://app.monetizze.com.br/r/ALG16600393" target="_blank">CLIQUE AQUI PARA ADQUIRIR O SEU!</a>
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
            <p>Ensinando seus filhos em casa da melhor forma.</p>
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