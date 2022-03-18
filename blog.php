<?php
include_once 'comum.php';

$comum = new Comum();

$comum->setPrefixo('');
$comum->setKeywords('sites, web, desenvolvimento, tecnologia, blog, artigo, html, assunto, serviço, projeto, contato');
$comum->setPagina("Blog");
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

    <section class="ftco-section" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Blogs</h1>
                    <h2 class="mb-4">Blogs</h2>
                    <p>Publicações e curiosidades</p>
                </div>
            </div>
            <div class="row d-flex">

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                    <a href="blogs/home-school.php" target="_blank" class="block-20" style="background-image: url('images/h-s.jpg');"></a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">17 de março 2022</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="blogs/app-developing.php">Home School - Estratégia</a></h3>
                            <p>Emsinando seus filhos em casa com home school.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="http://13gecristoredentor.com.br" target="_blank" class="block-20" style="background-image: url('images/13gecre1080.jpg');"></a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">03 de julho 2021</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="blogs/app-developing.php">13º GE Cristo Redentor</a></h3>
                            <p>Página institucional para Grupo Escoteiro
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blogs/7sucos.php" class="block-20" style="background-image: url('images/7sucos10802.jpg');"></a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">31 de maio 2021</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="blogs/app-developing.php">7 Sucos Detox</a></h3>
                            <p>7 sucos detox para secar de vez a barriga baixe agora e esperimente cada sabor.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blogs/estrutura-se.php" class="block-20" style="background-image: url('images/se.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">7 de maio 2021</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="blogs/app-developing.php">Estrtura condicional SE [IF]</a></h3>
                            <p>Estrurura condicional SE nas suas três formas. SIMPLES, COMPOSTO e ANINHADO.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blogs/cad.php" class="block-20" style="background-image: url('images/cad.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">07 dezembro 2020</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="blogs/app-developing.php">CAD Viewer</a></h3>
                            <p>Programa web para visualização de projetos do tipo CAD.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blogs/card-interativo.php" class="block-20" style="background-image: url('images/cartao-interativo/0.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">18 de novembro de 2020</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="blogs/web-developer.php">Cartão Interativo</a></h3>
                            <p>Direcione seus clientes para sites, redes sociais, serviços em um clique.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blogs/web-developer.php" class="block-20" style="background-image: url('images/web-developer.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">10 de maio de 2020</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="blogs/web-developer.php">Web Developer</a></h3>
                            <p>O papel de um web developer é programar websites e aplicações online
                                para a empresa.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blogs/web-designer.php" class="block-20" style="background-image: url('images/web-designer.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">09 de maio de 2020</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 0</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="blogs/web-designer.php">Web Designer</a></h3>
                            <p>
                                O Web Design é uma área focada no desenvolvimento de interfaces digitais,
                                como layout de sites e aplicativos para a web. Para isso, os web designers
                                criam as páginas usando linguagens de marcação como, por exemplo, o HTML.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blogs/app-developing.php" class="block-20" style="background-image: url('images/app-developing.png');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">08 de junho de 2020</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="blogs/app-developing.php">App Developing</a></h3>
                            <p>A profissão de desenvolvedor de aplicativos é uma novidade no mercado tecnológico
                                que vem se fortalecendo à medida que cresce o número de usuários de sistemas operacionais mobiles.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col text-center">
                <div class="blog-entry justify-content-end">
                    <?php echo $comum->getAmazon(); ?>
                </div>
            </div>



    </section>
    <!--SEÇÃO DE BLOGS-->

    <?php
    // FOOTER
    echo $comum->getFooter();
    echo $comum->getJS();
    ?>

</body>

</html>