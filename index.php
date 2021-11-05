<?php
include_once 'comum.php';

$comum = new Comum();

$comum->setPrefixo('');
$comum->setKeywords('sites, web, desenvolvimento, tecnologia, artigo, index, inicio, html, serviço, projeto, contato, programa, software, download, ultilitario');
$comum->setPagina("Início");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- metas e links -->
    <?php echo $comum->getCabecalho(); ?>

    <!-- ESPAÇO GOOGLE-->
    <?php echo $comum->getGoogle(); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
 
    <!-- MENU -->
    <?php echo $comum->getMenu(); ?>
    <div class="ftco-hireme img margin-top" style="background-image: url(images/bg.svg);">
        <div class="container">

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <h2 class="mb-4">Sou <span>Igor Gomes</span> Analista de Sistemas.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <h2 class="mb-4">Atualmente residindo em <span>Fortaleza</span>, Ce.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <h2 class="mb-4"><span>Gerenciando</span> uma Equipe de TI em um grupo de Empresas.</h2>                
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- fim carrosel-->
            
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <!-- <p>Profissional com serviços de modo autônomo</p> -->
                    <p>
                        <a href="contato.php" class="btn btn-primary py-3 px-4">Contrate-me</a>
                        <a href="projetos.php" class="btn btn-white btn-outline-white py-3 px-4">Meus Trabalhos</a>
                    </p>
                </div>

            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <?php

    echo $comum->getFooter();
    echo $comum->getJS();
    ?>

    <script>
        window.purechatApi = {
            l: [],
            t: [],
            on: function() {
                this.l.push(arguments);
            }
        };
        (function() {
            var done = false;
            var script = document.createElement('script');
            script.async = true;
            script.type = 'text/javascript';
            script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
            document.getElementsByTagName('HEAD').item(0).appendChild(script);
            script.onreadystatechange = script.onload = function(e) {
                if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
                    var w = new PCWidget({
                        c: '8d2f6534-04cb-447d-9fb4-b51dc6f6dfa3',
                        f: true
                    });
                    done = true;
                }
            };
        })();
    </script>
</body>

</html>