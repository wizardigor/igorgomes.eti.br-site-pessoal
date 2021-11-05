<?php
include_once '../comum.php';

$comum = new Comum();

$comum->setPrefixo('../');
$comum->setKeywords('sites, web, desenvolvimento, cad, tecnologia, blog, artigo, html, serviço, projeto, contato');
$comum->setPagina("CAD");
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
        <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
          <h1 class="mb-3 bread">CAD Viewer</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="../index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span class="mr-2"><a href="../blog.html">blog <i class="ion-ios-arrow-forward"></i></a></span>
            <span>CAD Viewer<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ftco-animate">

        <iframe width="100%" height="650px" seamless frameborder="0" scrolling="no" src="https://sharecad.org/Viewer/Shared?file=?"></iframe>

        </div>
  </section> <!-- .section -->

  <?php
    // FOOTER
    echo $comum->getFooter();
    echo $comum->getJS();
  ?>
</body>

</html>