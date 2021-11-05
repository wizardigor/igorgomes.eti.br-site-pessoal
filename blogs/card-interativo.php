<?php
include_once '../comum.php';

$comum = new Comum();

$comum->setPrefixo('../');
$comum->setKeywords('sites, web, desenvolvimento, card, interativo, tecnologia, blog, artigo, html, serviço, projeto, contato');
$comum->setPagina("Cartão Interativo");
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

  <section class="hero-wrap js-fullheight" style="background-image: url('../images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-12 ftco-animate pb-5 mt-5 text-center">
          <h1 class="mb-3 bread">Cartão Interativo</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="../index.php">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span class="mr-2"><a href="../blog.php">Blog <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Cartão Interativo<i class="ion-ios-arrow-forward"></i></span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <!--INICIO DO ASSUNTO-->
          <h2 class="mb-3">Cartão Interativo</h2>
          <p>O Cartão Interativo é totalmente digital e 100% interativo, tem seus dados em apenas um clique, envios ilimitados. <br>
          Chega de cartõezinhos em papel, você não precisará mais fazer ses clientes andar com os bolsos cheio de cartões pessoais. 
          Mostre que está interado(a) com as novas tecnologias e trazendo ses cliente para a atualidade.</p>
          <h2 class="mb-3 mt-5">Sua Empresa a um toque com dedo</h2>
          <p>Tenha toda sua empresa em um clique. <br>
            Direcione seus clientes para seu site, redes sociais, e-mails. Mostre ao seu cliete como lhe encontrar.
          </p>

          <div id="carouselcarões" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/cartao-interativo/1.jpg" alt="" class="img-fluid">
              </div>
              <div class="carousel-item">
              <img src="../images/cartao-interativo/2.jpg" alt="" class="img-fluid">
              </div>
              <div class="carousel-item">
                <img src="../images/cartao-interativo/3.jpg" alt="" class="img-fluid">
              </div>
              <div class="carousel-item">
                <img src="../images/cartao-interativo/4.jpg" alt="" class="img-fluid">
              </div>
              <div class="carousel-item">
                <img src="../images/cartao-interativo/5.jpg" alt="" class="img-fluid">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <h3>Quer ter um Cartão Interativo?</h3>
          <p>
            Veja este <a href="https://drive.google.com/file/d/1MFTej1GDeEZWWCDarurZ12E6coj4Hic2/view?usp=sharing">exemplo</a>, se gostar entre em <a href="../../contato.php" target="blank">contato</a>, diga do que precisa e terá um cartão personalizado para você.
          </p>
          <!--FINAL DO ASSUNTO-->

          <!--TAGS DO ASSUNTO-->
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">cartao</a>
              <a href="#" class="tag-cloud-link">designer</a>
              <a href="#" class="tag-cloud-link">web</a>
              <a href="#" class="tag-cloud-link">interativo</a>
            </div>
          </div>

          <!--BIOGRAFIA/SOBRE O AUTOR-->
          <div class="about-author d-flex p-4 bg-dark">
            <div class="bio mr-5">
              <img src="" alt="" class="img-fluid mb-4">
            </div>
            <div class="desc">
              <h3>Por Igor Gomes</h3>
              <p>
                Desenvolvedor.</br>
                Publicado em 18 de novembro de 2020. | Atualizado</p>
            </div>
          </div>
          <!--
          <div class="pt-5 mt-5">
            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Faça um Comentário</h3>
              <form action="#" class="p-5 bg-dark">
                <div class="form-group">
                  <label for="name">Nome *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>
                <div class="form-group">
                  <label for="message">Mensagem<br>ENVIO DE MENSAGENS NÃO ESTÁ CONFIGURADO, USE EEMAIL DIRETO.</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Enviar Comentário" class="btn py-3 px-4 btn-primary">
                </div>
              </form>
            </div>
          </div>
          -->
        </div> <!-- .col-md-8 -->

        <div class="col-lg-4 sidebar ftco-animate">
          <!--BREVE COMENTARIO SOBRE O ASSUNTO OU INFORMAÇÃO AO LEITOR-->
          <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">Breve descrição</h3>
            <p id='#descricao'>Direcione seus cliente para suas vendas com seu catão digital.</p>
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