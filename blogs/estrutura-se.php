<?php
include_once '../comum.php';

$comum = new Comum();

$comum->setPrefixo('../');
$comum->setKeywords('sites, web, desenvolvimento, tecnologia, blog, artigo, html, serviço, projeto, contato, estrutura , condicional, se');
$comum->setPagina("Estrutura Condicional SE");
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
          <h1 class="mb-3 bread">Estrutura Condicional SE [IF]</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="../blog.php">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Estrutura Condicional SE<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-8 ftco-animate">
          <!--INICIO DO ASSUNTO-->
          <p>A estrutura condicional SE, é um validador que verifica a veracidade da expressão indicada. <br>
            <strong>EXEMPLO:</strong><br>
            <code>
              ovo é pinto? <br>
              a resposta é FALSO! <br>
              <br>
              papel risca o lapis? <br>
              a resposta é VERDADE! <br>
            </code>
          </p>
          <p>No caso se a expressão a tender a condição, o comando será execultado e se não atender a condição 
            sai da estrutura e dá continuidade ao codigo ou chama outra condição.
          </p>
          <p>A Estrutura condicioonal SE [IF] é dividida em três formas: <br>
              <ul>
                <li>SIMPLES;</li>
                <li>COMPOSTO;</li>
                <li>ANINHADO;</li>
              </ul>
          </p>
          <p>Acompanhe os videos abaixo.</p>
          <p>
            <h2><strong>SE SIMPLES</strong></h2><br>
            <iframe width="560" height="315" class="col-sm-6 col-md-10" src="https://www.youtube.com/embed/KakS3f3MPpk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </p>
          <p>
            <h2><strong>SE COMPOSTO</strong></h2><br>
            <iframe width="560" height="315" class="col-sm-6 col-md-10" src="https://www.youtube.com/embed/rIpOTiDvcvM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </p>
          <p>
            <h2><strong>SE ANINHADO</strong></h2><br>
            <iframe width="560" height="315" class="col-sm-6 col-md-10" src="https://www.youtube.com/embed/_GhNbAJjWcM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </p>
          <!--FINAL DO ASSUNTO-->

          <!--TAGS DO ASSUNTO-->
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#progrmacao" class="tag-cloud-link">programação</a>
              <a href="#algoritmo" class="tag-cloud-link">algoritmo</a>
              <a href="#se" class="tag-cloud-link">se</a>
              <a href="#logica" class="tag-cloud-link">lógica</a>
            </div>
          </div>

          <!--BIOGRAFIA/SOBRE O AUTOR-->
          <div class="about-author d-flex p-4 bg-dark">
            <div class="bio mr-5 col-sm-2">
              <img src="../images/perfil.png" alt="Autor" class="img-fluid mb-4 ">
            </div>
            <div class="desc">
              <h3>Igor Gomes</h3>
              <p>Admin, Desenvolvedor</p>
            </div>
          </div>
        </div> <!-- .col-md-8 -->

        <div class="col-lg-4 sidebar ftco-animate">
          <!--BREVE COMENTARIO SOBRE O ASSUNTO OU INFORMAÇÃO AO LEITOR-->
          <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">Breve descrição</h3>
            <p>A Estrtura condicional SE é a primeira e mais importante das estruturas condicionais, é a base.</p>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading-sidebar">Anuncios</h3>
            <?php $comum->getAnuncioLateral();?>
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