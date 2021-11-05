<?php
include_once 'comum.php';

$comum = new Comum();

$comum->setPrefixo('');
$comum->setKeywords('sites, web, desenvolvimento, tecnologia, blog, artigo, html, sobre, about, curriculo, serviço, projeto, contato');
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

    <!--SEÇÃO SOBRE-->
    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/rosto/avontade.jpg);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ">
                            <h1 class="big">Sobre</h1>
                            <h2 class="mb-4">Sobre</h2>
                            <p>
                                Analista de Sistemas, trabalhando como Gestor e Programador para
                                <a href="https://www.locabox.com.br/" target="blank">Locabox</a>,
                                <a href="https://www.locabox.com.br/" target="blank">ITP</a>, 
                                <a href="https://www.locabox.com.br/" target="blank">Move Mais</a> e 
                                <a href="https://www.locabox.com.br/" target="blank">Locservice</a> 
                                (grupo de empresas), este grupo fabrica, aluga, transporta e monta Modulos Habitaveis para
                                <i>Instituições de Ensino, Hospitais, Polícias, Bombeiros ect</i>.<br>
                                Sou responsavel por Gerênciar a equipe de TI e manter os sistemas interno da empresa aissim como
                                os meios de comunicação web e componentes de informática.
                            </p>
                            <p>
                                <i>Esse site encontra-se em construção, paralelo aos meus projetos,
                                sempre que tenho um tempo venho aos poucos implementando.</i>
                            </p>

                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Nome:</span> <span>Igor Gomes</span></li>
                                <li class="d-flex"><span>Idade:</span> <span>37</span></li>
                                <li class="d-flex"><span>Endereço:</span> <span>Aldeota, Fortaleza, Ce.</span></li>
                                <li class="d-flex"><span>Pais:</span> <span>Brasil</span></li>
                                <li class="d-flex"><span>Email:</span> <a href="mailto:igorgomes.eti.br?subject=Contato Igor Gomes ETI" title='Contato para Igor gomes' target='blank'><span>contato@igorgomes.eti.br</span></a></li>
                                <li class="d-flex"><span>WhatsApp: </span> <a href="https://wa.me/5585920006476" target="blank"><span>(85) 92000-6476</span></a></li>
                            </ul>
                        </div>

                        <div class="col text-center">
                            <?php $comum->getAmazon(); ?>
                        </div>
                    </div>
                    <div class="counter-wrap  d-flex mt-md-3">
                        <div class="text">
                            <!--NUMERO DE PROJETOS
                            <p class="mb-4">
                                <span class="number" data-number="10">0</span>
                                <span>Projetos Completos</span>
                            </p>
                            FIN NUMERO DE PROJETOS-->

                            <!-- BOTÃO 
                            <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
                            -->
                        </div>
                    </div>
                </div>
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