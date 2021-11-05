<?php
include_once '../comum.php';

$comum = new Comum();

$comum->setPrefixo('../');
$comum->setKeywords('sites, web, desenvolvimento, simples, tecnologia, blog, artigo, html, 7, sete, sucos, detox, emagrecer, secar, barriga, projeto, contato');
$comum->setPagina("7 Sucos Detox");
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

  <section class="hero-wrap js-fullheight " style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-12  pb-5 mt-5 text-center">
          <h1 class="mb-3 bread">7 Sucos Detox</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>7 Sucos Detox<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <!--INICIO DO ASSUNTO-->
          <h2 class="mb-3">7 Sucos Detox Para Secar a Barriga</h2>
          <p>
            <a href="../docs/7 sucos detox.pdf"><img src="../images/anuncios/7sucos/7sucos1080.jpg" alt="7 sucos detox" class="img-fluid"></a>
          </p>
          <p>DICAS IMPORTANTES<br>
          <ul>
            <li>BEBA OS SUCOS NA PARTE DA MANHÃ OU NO LANCHE DA TARDE;</li>
            <li>ESPERE PELO MENOS 30 MINUTOS ANTES DE SE ALIMENTAR NOVAMENTE;</li>
            <li>EVITE COAR OS SUCOS PARA APROVEITAR AS FIBRAS, A NÃO SER QUE SEU INTESTINO NÃO SE ADAPTE.;</li>
          </ul>
          O S RESULTADOS COMEÇAM APARECER CERCA DE 3 A 4 DIAS APÓS O CONSUMO.
          </p>
          <p>
            <a href="../docs/7 sucos detox.pdf"><img src="../images/anuncios/7sucos/7sucosdw.jpg" alt="7 sucos detox download" class="img-fluid"></a>
          </p>
          <!--FINAL DO ASSUNTO-->

          <!--TAGS DO ASSUNTO-->
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">suco</a>
              <a href="#" class="tag-cloud-link">detox</a>
              <a href="#" class="tag-cloud-link">secar</a>
              <a href="#" class="tag-cloud-link">barriga</a>
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
            <p>Uma otima forma de secar a barriga apenas com sucos detox, rapido e facil</p>
          </div>
          
          <div id='anuncio' class="sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Anuncios</h3>
              <?php $comum->getAnuncioLateral(); ?>
            </div>
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