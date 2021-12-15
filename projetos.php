<?php
include_once 'comum.php';

$comum = new Comum();

$comum->setPrefixo('');
$comum->setKeywords('sites, web, desenvolvimento, tecnologia, artigo, html, serviço, projeto, contato, programa, software, download, ultilitario');
$comum->setPagina("Projetos");
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

    <!-- SESAO DOS PROJETOS -->
    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projetos</h1>
                    <h2 class="mb-4">Projetos</h2>
                    <p>Projeos já concluidos ou que estejmam em andamento</p>
                </div>
            </div>

            <!--
                <div class="col-md-4">: imagem quadrada.
                <div class="col-md-8">: imagem larga equivale a dois quadrados.    
            -->

            <!-- PROJETOS -->
            <div class="row">
                <!-- LINHA 1 1x3 (UMA LINHA TRES COLUNAS)-->
                <!-- IMAGEM QUADRADA -->
                <div class="col-md-4">
                    <a href="https://drive.google.com/file/d/1xCeAVTOOwUmZvgyjGMswDVrv--_umch7/view?usp=sharing" target="blank">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/cvm.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3>Carteira de Vacinação Animal</h3>
                                <span>Design</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- IMAGEM QUADRADA -->
                <div class="col-md-4">
                    <a href="http://covid19.igorgomes.eti.br" target="blank">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/proj-covid-19.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3>Informações sobre Covid-19</h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- IMAGEM QUADRADA -->
                <div class="col-md-4">
                    <a href="http://igorgomes.eti.br/projetos/biblioteca/" target="blank">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/proj-biblioteca.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3>Biblioteca Pessoal</h3>
                                <span>Web Design & Web Developer</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- IMAGEM QUADRADA -->
                <div class="col-md-4">
                    <a href="http://igorgomes.eti.br/projetos/imc/" target="blank">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/proj-imc.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3>Cálculo de IMC</h3>
                                <span>Web Design & Web Developer</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- IMAGEM QUADRADA -->
                <div class="col-md-4">
                    <a href="http://igorgomes.eti.br/blogs/card-interativo.php" target="blank">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/cartao-interativo/0.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3>Cartão Interativo</h3>
                                <span>Web Design & Web Developer</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!--IMAGEM EXTENDIDA-->
                <div class="col-md-4">
                    <a href="https://www.locabox.com.br/" target="blank">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/proj-locabox.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3>Locabox</h3>
                                <span>Web Designer & Web Developer</span>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a href="https://app.locabox.com.br/" target="blank">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/proj-app-erp.png);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="http://app.locabox.com.br/">Sistema de ERP Locabox</a></h3>
                                <span>Web Design & Web Developer</span>
                            </div>
                        </div>
                    </a>

                </div>

                <!-- IMAGEM QUADRADA -->
                <div class="col-md-4">
                    <a href="http://kiki.locabox.com.br/" target="blank">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/proj-kiki.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3>Kiki Hort Fruts</h3>
                                <span>Web Design & Web Developer</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="http://thais.igorgomes.eti.br/" target="blank">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/mulher-de-luz.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3>Mulher de Luz</h3>
                                <span>Web Design & Web Developer</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="http://hmc.log.br/" target="blank">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/hmc.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3>HMC Empreendimentos</h3>
                                <span>Web Design & Web Developer</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col text-center">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url('');">
                            <div class="overlay"></div>
                            <?php echo $comum->getAmazon(); ?>
                        </div>
                </div>


                <!-- FIM LINHA 1 -->

                <!-- PARA MAIS PROJETOS 
                -- LINHA 2 COLUNA 1 2x2 (DUAS LINHAS E DUAS COLUNAS) --
                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-1.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">dois</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>

                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-6.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">tres</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                -- FIM LINHA 2 COLUNA 1 --

                -- LINHA 2 COLUNA 2 2X1 (DUAS LINHAS UMA COLUNA --
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-2.jpg);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3><a href="#">quatro</a></h3>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-3.jpg);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3><a href="#">cinco</a></h3>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -- FIM LINHA 2 COLUNA 2 --
                FIM PARA MAIS PROJETOS -->

            </div><!-- FIM ROWS -->
        </div><!-- FIM CONTAINER -->
    </section>


    <?php
    // FOOTER
    echo $comum->getFooter();
    echo $comum->getJS();
    ?>
</body>

</html>