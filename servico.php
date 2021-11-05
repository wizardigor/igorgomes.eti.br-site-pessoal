<?php
include_once 'comum.php';

$comum = new Comum();

$comum->setPrefixo('');
$comum->setKeywords('sites, web, desenvolvimento, tecnologia, artigo, html, serviço, projeto, contato, programa, software, download, ultilitario');
$comum->setPagina("Sobre");
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

    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center py-5 mt-5" s>
                <div class="col-md-12 heading-section text-center ">
                    <h1 class="big big-2">Serviços</h1>
                    <h2 class="mb-4">Serviços</h2>
                    <p>Serviços com qual me identifico.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center d-flex ">
                    <a href="blogs/web-designer.php" class="services-1">
                        <span class="icon">
                            <i class="flaticon-web-design"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Web Design</h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 text-center d-flex ">
                    <a href="blogs/web-developer.php" class="services-1">
                        <span class="icon">
                            <i class="flaticon-ux-design"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Web Developer</h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 text-center d-flex ">
                    <a href="blogs/app-developing.php" class="services-1">
                        <span class="icon">
                            <i class="flaticon-ideas"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">App Developing</h3>
                        </div>
                    </a>
                </div>

                <div class="col text-center">
                    <?php echo $comum->getAmazon(); ?>
                </div>
            </div>
    </section>

    <?php
    // FOOTER
    echo $comum->getFooter();
    echo $comum->getJS();
    ?>

</body>

</html>