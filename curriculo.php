<?php
include_once 'comum.php';

$comum = new Comum();

$comum->setPrefixo('');
$comum->setKeywords('sites, web, desenvolvimento, tecnologia, blog, artigo, html, sobre, about, curriculo, serviço, projeto, contato');
$comum->setPagina("Curriculo");
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

    <!-- Inicio do Currículo -->
    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Currículo</h1>
                    <h2 class="mb-4">Resumo</h2>
                    <p>Breve histórico profissional</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2014-2018</span>
                        <h2>Atendente de Suporte Técnico</h2>
                        <span class="position">Videomar Rede Nordeste</span>
                        <p class="mt-4">
                            Responsavel por atender os cliente dando suporte em TV a Cabo e Internet,
                            Analise de Cadastro e Triagem.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2018</span>
                        <h2>Analise e Desenvolvimento de Sistemas (ADS)</h2>
                        <span class="position">Faculdade CDl - Fortaleza</span>
                        <p class="mt-4">
                            Ingresso na Faculdade CDL, no curso de ADS. Apos dois anos de ter
                            trancado o curso de Sistemas de Informação na Universidade Estácio do Ceará.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2018.1-2018.2</span>
                        <h2>Monitor</h2>
                        <span class="position">Faculdade CDl - Fortaleza</span>
                        <p class="mt-4">
                            Suporte a novos alunos para nivelamento em algoritmos, lógica de programação
                            e estrutura de dados.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2019.1</span>
                        <h2>Hackathon</h2>
                        <span class="position">Faculdade CDl - Fortaleza</span>
                        <p class="mt-4">
                            Equipe campeã da competição entre alunos da faculdade, sendo eu
                            o lider da equipe.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2020</span>
                        <h2>Desenvolvedor Junior</h2>
                        <span class="position">Locabox</span>
                        <p class="mt-4">
                            Aqui encontrei a oportunidade de trabalhar como desenvolvedor.<br>
                            Aplicações web são cargo feche procurando integrar os diversos
                            setores a uma unica plataforma.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2021-Hoje</span>
                        <h2>Gestor de TI</h2>
                        <span class="position">Locabox</span>
                        <p class="mt-4">
                            Gestor de TI e Programador.<br>
                            Gerênciando a equipe de TI e mantendo os sistemas interno da empresa assim como
                            os meios de comunicação web e componentes de informática.
                        </p>
                    </div>
                </div>

                <div class="col text-center">
                    <div class="resume-wrap ftco-animate">
                        <?php echo $comum->getAmazon(); ?>
                    </div>
                </div>
            </div>

            <!-- PARA EXIBIR UM CURRICULO
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a href="#" class="btn btn-primary py-4 px-5">Download CV</a></p>
                </div>
            </div>
            -->
        </div>
    </section>

    <P style="text-align: center;">

    </P>

    <?php
    // FOOTER
    echo $comum->getFooter();
    echo $comum->getJS();
    ?>

</body>

</html>