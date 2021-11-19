<?php
/**
 * Definições do autor
 */ 
define('_AUTOR', 'Igor Gomes ETI');
define('_EMAIL', 'contato@igorgomes.eti.br');
define('_COPYRINGHT', '© 2020 Igor Gomes');
define('_COPYRINGHT_FOOTER', "Copyright &copy; 2020 All rights reserved | This template is made with <i class='icon-heart color-danger' aria-hidden='true'></i> by <a href='https://colorlib.com' target='_blank'>Colorlib</a> and <a href='https://igorgomes.eti.br/' target='_blank'>Igor Gomes</a>");
define('_TWITTER', '');
define('_FACEBOOK', 'igorgomes.eti');
define('_LINKEDIN', 'igorgomesads');
define('_INSTAGRAM', 'igorgomes.eti');
define('_GITHUB', 'wizardigor');
define('_WHATSAPP', '+5585920006476');
define('_TELEFONE', '+5585920006476');
define('_ENDERECO', ''); 


class Comum{
    private $prefixo;
    private $pagina;
    private $keywords;

    function setPagina($pagina){
        $this->pagina = $pagina;
    }

    function getCabecalho(){
        return ("
            <title>Igor Gomes ETI - $this->pagina</title>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        
            <meta name='google-site-verification' content='1-5rs8jockgGYoW7QeEe4msQIW0NKodiz16dDG0egVk' />
            
            <!-- Metas fixo-->
            <meta name='author' content='"._AUTOR."'>
            <meta name='copyright' content='"._COPYRINGHT."' />
            <meta name='generator' content='Visual Studio Dode' />
            <meta name='description' content='Site de apresentação pessoal, portifolio'>
            <meta name='keywords' content='".$this->keywords."'>
            <meta name='rating' content='general' />
            <meta name='robots' content='all'>
        
            <link rel='icon' type='imagem/png' href='". $this->prefixo ."images/igeti4.png'>
        
            <!-- Bootstrap 4 -->
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css' integrity='sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn' crossorigin='anonymous'>
            <script src='https://unpkg.com/feather-icons'></script>
            
            <link href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' rel='stylesheet'>
            <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
            
            <link rel='stylesheet' href='". $this->prefixo ."css/style.css'>
        ");
    }

    function getGoogle(){
        return ("
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src='https://www.googletagmanager.com/gtag/js?id=UA-135019833-1'></script>
            <script>window.dataLayer = window.dataLayer || []; function gtag() {dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-135019833-1');</script>
        
            <!-- Google Adsense -->
            <script data-ad-client='ca-pub-7972995086715645' async src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
            <!-- fim Adsense -->
        
            <!-- Google Tag Manager -->
            <script>(function(w, d, s, l, i) {w[l] = w[l] || []; w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'}); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);})(window, document, 'script', 'dataLayer', 'GTM-K7BXG5P');</script>
            <!-- End Google Tag Manager -->
        ");
    }

    /**
     * caminho antes das paginas
     * ex:
     * $prefixo = "../"
     * uso: $prefixo.pagina.php
     */
    function setPrefixo($prefixo){
        $this->prefixo = $prefixo;
    }

    /**
     * caminho antes das paginas
     * ex:
     * $prefixo = "../"
     * uso: $prefixo.pagina.php
     */
    function setKeywords($keywords){
        $this->keywords = $keywords;
    }

    function getMenu(){
        return ("
            <nav class='navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target' id='ftco-navbar'>
            <div class='container'>
                <a class='navbar-brand' href='". $this->prefixo ."index.php'><img src='". $this->prefixo ."images/igeti.png' alt='Igor Gomes - ETI' height='50'></a>
                <button class='navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle' type='button' data-toggle='collapse' data-target='#ftco-nav' aria-controls='ftco-nav' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='oi oi-menu'></span> Menu
                </button>
    
                <div class='collapse navbar-collapse' id='ftco-nav'>
                    <ul class='navbar-nav nav ml-auto'>
                        <li class='nav-item'><a href='". $this->prefixo ."index.php' class='nav-link'><span>Home</span></a></li>
                        <li class='nav-item'><a href='". $this->prefixo ."about.php' class='nav-link'><span>Sobre</span></a></li>
                        <li class='nav-item'><a href='". $this->prefixo ."curriculo.php' class='nav-link'><span>Currículo</span></a></li>
                        <li class='nav-item'><a href='". $this->prefixo ."servico.php' class='nav-link'><span>Serviços</span></a></li>
                        <li class='nav-item'><a href='". $this->prefixo ."projetos.php' class='nav-link'><span>Projetos</span></a></li>
                        <li class='nav-item'><a href='". $this->prefixo ."blog.php' class='nav-link'><span>Blog</span></a></li>
                        <li class='nav-item'><a href='". $this->prefixo ."contato.php' class='nav-link'><span>Contato</span></a></li>
                        <!-- <li class='nav-item'><a href='". $this->prefixo ."downloads.php' class='nav-link'><span>Downloads</span></a></li> -->
                </div>
    
            </div>
        </nav>
        ");
    }

    function getBannerFoot(){
        return("
        
        
        <div id='carouselFoot' class='carousel slide carousel-fade col-md-4' data-ride='carousel'>
            <div class='carousel-inner'>
                <div class='carousel-item text-center align-middle active'>
                    <a href='https://www.hostg.xyz/SH7N3' target='_blank'>
                    <img src='https://media.go2speed.org/brand/files/hostinger/6/PT-300x250.jpg' alt='Hostinger' />
                    </a>
                </div>
                <div class='carousel-item text-center align-middle active'>
                    <a href='https://www.hostg.xyz/SH7N3' target='_blank'>
                    <img src='https://media.go2speed.org/brand/files/hostinger/6/PT-300x250.jpg' alt='Hostinger' />
                </a>
                </div>
                <div class='carousel-item text-center align-middle'>
                    <a href='https://www.instagram.com/___favoritas___/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/favoritas/logo_fa.png' alt='anuncio @___favoritas__'>
                    </a>
                </div>
            </div>
    
            
            <!-- Botoes -->
            <a class='carousel-control-prev' href='#carouselFoot' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Anterior</span>
            </a>
            <a class='carousel-control-next' href='#carouselFoot' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Proximo</span>
            </a>
        </div>
        ");
    }

    function getDoSite(){
        return ("
            <div class='col-md'>
                <div class='ftco-footer-widget mb-4'>
                    <h2 class='ftco-heading-2'>Do Site</h2>
                    <p>
                        Aqui encontrará um pouco sobre mim e meus projetos,
                        tambem encontrará conteúdo para iniciantes na area
                        da técnologia.
                    </p>
                </div>
            </div>
        ");
    }

    function getServicos(){
        return ("
            <div class='col-md'>
                <div class='ftco-footer-widget mb-4'>
                    <h2 class='ftco-heading-2'>Serviços</h2>
                    <ul class='list-unstyled'>
                        <li><a href='blogs/web-designer.php'>Web Design</a></li>
                        <li><a href='blogs/web-developer.php'>Web Development</a></li>
                        <li><a href='blogs/app-developing.php'>App Developing</a></li>
                    </ul>

                    <form action='https://www.paypal.com/donate' method='post' target='_top'>
                        <input type='hidden' name='hosted_button_id' value='5HA6Z2SP7K2FW' />
                        <input type='image' src='https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif' name='submit' title='PayPal - A maneira mais segura e fácil de pagar online!' alt='Botão de doação do Paypal' />
                        <img alt='Cartões aceitos pelo Paypal' src='https://www.paypal.com/pt_BR/i/scr/pixel.gif' width='1' height='1' />
                    </form>
                        

                </div>
            </div>
        ");
    }

    function getContato(){
        return ("
            <div class='col-md'>
                <div class='ftco-footer-widget mb-4'>
                    <h2 class='ftco-heading-2'>Tem alguma duvida?</h2>
                    <div class='block-23 mb-3'>
                        <ul>
                            <li><span class='text'>Fortaleza, Ce. Brasil</span></li>
                            <li><a href='https://wa.me/"._TELEFONE."' target='blank'><span class='text'>WhatsApp<br>(85) 92000-6476</span></a></li>
                            <li><a href='mailto:"._EMAIL."?subject=Contato_Igor_Gomes_ETI' title='Contato para Igor gomes ETI' target='blank'><span class='text'>"._EMAIL."</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        ");
    }

    function getRedes(){
        return ("
            <div class='row'>
                <div class='mx-auto'>
                    <div class='ftco-footer-widget'>
                        <ul class='ftco-footer-social list-unstyled float-md-left float-lft mt-5'>
                            <li class='text-center'><a href='https://www.linkedin.com/in/"._LINKEDIN."' target='blank'><img src='icons/linkedin.png' height='50' alt='Linkedin'></a></li>
                            <li class='text-center'><a href='https://github.com//"._GITHUB."' target='blank'><img src='icons/github.png' alt='GitHub' height='50'></a></li>
                            <li class='text-center'><a href='https://www.instagram.com/"._INSTAGRAM."' target='blank'><img src='icons/instagram.png' alt='Instagram' height='50'></a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        ");
    }


    function getDireitos(){
        return ("
            
                <div class='col-md-12 text-center'>
                    <p>
                    "._COPYRINGHT_FOOTER."
                    </p>
                </div>
            </div>
        ");
    }

    function getLinksFooter(){
        return ("
            <div class='col-md'>
            <div class='ftco-footer-widget mb-4 ml-md-4'>
                <h2 class='ftco-heading-2'>Links</h2>
                <ul class='list-unstyled'>
                    <li><a href='". $this->prefixo ."index.php'><span class='icon-long-arrow-right mr-2'></span>Home</a></li>
                    <li><a href='". $this->prefixo ."about.php'><span class='icon-long-arrow-right mr-2'></span>Sobre</a></li>
                    <li><a href='". $this->prefixo ."curriculo.php'><span class='icon-long-arrow-right mr-2'></span>Curriculo</a></li>
                    <li><a href='". $this->prefixo ."servico.php'><span class='icon-long-arrow-right mr-2'></span>Serviços</a></li>
                    <li><a href='". $this->prefixo ."projetos.php'><span class='icon-long-arrow-right mr-2'></span>Projetos</a></li>
                    <li><a href='". $this->prefixo ."blog.php'><span class='icon-long-arrow-right mr-2'></span>Blog</a></li>
                    <li><a href='". $this->prefixo ."contato.php'><span class='icon-long-arrow-right mr-2'></span>Contato</a></li>
                </ul>
            </div>
        </div>
        ");
    }
    
    function getFooter(){
        return ("
            <footer class='ftco-footer ftco-section'>
                <div class='container'>
                    <div class='row mb-5'>
                    "
                    .$this->getBannerFoot()
                    .$this->getDoSite()
                    .$this->getLinksFooter()
                    .$this->getServicos()
                    .$this->getContato()
                    ."
                    </div>
                    "
                    .$this->getRedes()
                    .$this->getDireitos()
                    //.$this->getCirculo()
                    ."
                </div>
            </footer>
        ");
    }

    function getCirculo(){
        return ("
            <!--CIRCULO DE CARREGAMENTO AO INICIAR A PAGINA-->
            <div id='ftco-loader' class='show fullscreen'>
                <svg class='circular' width='48px' height='48px'>
                    <circle class='path-bg' cx='24' cy='24' r='22' fill='none' stroke-width='4' stroke='#eeeeee' />
                    <circle class='path' cx='24' cy='24' r='22' fill='none' stroke-width='4' stroke-miterlimit='10' stroke='#F96D00' />
                </svg>
            </div>
        ");
    }

    /**scripts */
    function getJS(){
        return ("
        <script src='https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js' integrity='sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2' crossorigin='anonymous'></script>
      
         
        ");
    }

    function getAmazon(){
        echo "
        <div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
            <div class='carousel-inner'>
                <div class='carousel-item active'>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=wizardigor-20&marketplace=amazon&region=BR&placement=B07PK555BK&asins=B07PK555BK&linkId=f1f4331d33f0f90d6d7da6abac1ed5d9&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=wizardigor-20&marketplace=amazon&region=BR&placement=B07FQK1TS9&asins=B07FQK1TS9&linkId=aafc45c0f102f04aedecc118cd7c4a5f&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=wizardigor-20&marketplace=amazon&region=BR&placement=B07WJ7HMLN&asins=B07WJ7HMLN&linkId=2a9dc14d913cc542a46e21afee2893ae&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&language=pt_BR&marketplace=amazon&region=BR&placement=B01AWG4S4K&asins=B01AWG4S4K&linkId=a7655a0d73eef147ff9497b779d36fab&show_border=true&link_opens_in_new_window=true' target='blank'></iframe>
                </div>
                <div class='carousel-item'>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&marketplace=amazon&region=BR&placement=B07P2BVZF9&asins=B07P2BVZF9&linkId=b4f182c45f3492cfff3b4af1f027e856&show_border=true&link_opens_in_new_window=true' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&marketplace=amazon&region=BR&placement=B0785S55QQ&asins=B0785S55QQ&linkId=baaa7e5d6cf15b803fa35e43f7c9d5d8&show_border=true&link_opens_in_new_window=true' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&marketplace=amazon&region=BR&placement=B07HJFN4L6&asins=B07HJFN4L6&linkId=3db4e160282f5a3151cacf6f2d4995b2&show_border=true&link_opens_in_new_window=true' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&language=pt_BR&marketplace=amazon&region=BR&placement=B01N5IB20Q&asins=B01N5IB20Q&linkId=dc4c1013be63345256e41aaa8df88f9c&show_border=true&link_opens_in_new_window=true' target='blank'></iframe>
                </div>
                <div class='carousel-item'>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&marketplace=amazon&region=BR&placement=B074TD1VJ1&asins=B074TD1VJ1&linkId=d0aee5530283aa23ae0f628429d6dc81&show_border=true&link_opens_in_new_window=true' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&marketplace=amazon&region=BR&placement=B07FN1MZBH&asins=B07FN1MZBH&linkId=3d0411e3c8d55a316f184308fd121b62&show_border=true&link_opens_in_new_window=true' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&marketplace=amazon&region=BR&placement=B07R5PSTC9&asins=B07R5PSTC9&linkId=f18ea4190279606c26279e8bf076e580&show_border=true&link_opens_in_new_window=true' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&language=pt_BR&marketplace=amazon&region=BR&placement=B077VXV323&asins=B077VXV323&linkId=608248d06f46cd0d4c4f617a9faacc11&show_border=true&link_opens_in_new_window=true' target='blank'></iframe>
                </div>
                <div class='carousel-item'>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ac&ref=tf_til&ad_type=product_link&tracking_id=wizardigor-20&marketplace=amazon&region=BR&placement=B07MSQ4FGG&asins=B07MSQ4FGG&linkId=00dab253526efdaf11a90d682ef18ffd&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&language=pt_BR&marketplace=amazon&region=BR&placement=B07SSCKJJ3&asins=B07SSCKJJ3&linkId=6ac8c155d8e9af91599c4c026557d7c0&show_border=true&link_opens_in_new_window=true' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&language=pt_BR&marketplace=amazon&region=BR&placement=B08DG4VGLN&asins=B08DG4VGLN&l0inkId=0121a48f873751773118981005d7901b&show_border=true&link_opens_in_new_window=tru' target='blank'></iframe>
                    <iframe style='width:120px;height:240px;' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' src='//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=BR&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=wizardigor-20&language=pt_BR&marketplace=amazon&region=BR&placement=B07P6TD2GD&asins=B07P6TD2GD&linkId=da74066a7cc0c3c1345f6382beb05c43&show_border=true&link_opens_in_new_window=true' target='blank'></iframe>
                </div>
            </div>

            
            <!-- Botoes -->
            <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Anterior</span>
            </a>
            <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Proximo</span>
            </a>
        </div>
        ";
    }

    function getDio(){
        echo "        
        <div id='carouselDio' class='carousel carousel-fade' data-ride='carousel'>
            <div class='carousel-inner'>
                <div class='carousel-item text-center align-middle active'>
                    <a href='https://digitalinnovation.one/sign-up?ref=5JCFE67IJX' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/dio.jpg' alt='anuncio Digital Innovation One'>
                    </a>
                </div>
                
            </div>
            </div>
    
            
            <!-- Botoes -->
            <a class='carousel-control-prev' href='#carouselDio' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Anterior</span>
            </a>
            <a class='carousel-control-next' href='#carouselDio' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Proximo</span>
            </a>
        </div>
        ";
    }

    function getFavoritas(){
        echo "        
        <div id='carouselFav' class='carousel carousel-fade' data-ride='carousel'>
            <div class='carousel-inner'>
                <div class='carousel-item text-center align-middle active'>
                    <a href='https://www.instagram.com/___favoritas___/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/favoritas/logo_fa.png' alt='anuncio @___favoritas___'>
                    </a>
                </div>
                <div class='carousel-item text-center align-middle'>
                    <a href='https://www.instagram.com/___favoritas___/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/favoritas/fa1.png' alt='anuncio @___favoritas___'>
                    </a>
                </div>
                <div class='carousel-item text-center align-middle'>
                    <a href='https://www.instagram.com/___favoritas___/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/favoritas/fa2.png' alt='anuncio @___favoritas___'>
                    </a>
                </div>
                <div class='carousel-item text-center align-middle'>
                    <a href='https://www.instagram.com/___favoritas___/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/favoritas/fa3.png' alt='anuncio @___favoritas___'>
                    </a>
                </div>
                <div class='carousel-item text-center align-middle'>
                    <a href='https://www.instagram.com/___favoritas___/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/favoritas/fa4.png' alt='anuncio @___favoritas___'>
                    </a>
                </div>
            </div>
            </div>
    
            
            <!-- Botoes -->
            <a class='carousel-control-prev' href='#carouselFav' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Anterior</span>
            </a>
            <a class='carousel-control-next' href='#carouselFav' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Proximo</span>
            </a>
        </div>
        ";
    }
    //ANUNCIO JH - HUGO
    function getJH(){
        echo "
        <div id='carouselJH' class='carousel slide' data-ride='carousel'>
            <div class='carousel-inner'>
                <div class='carousel-item active'>
                    <a href='https://www.instagram.com/jhacessorios/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/jh/jh1.png' alt='anuncio @jhacessorios'>
                    </a>
                </div>
                <div class='carousel-item'>
                    <a href='https://www.instagram.com/jhacessorios/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/jh/jh2.jpg' alt='anuncio @jhacessorios'>
                    </a>
                </div>
            </div>
    
            
            <!-- Botoes -->
            <a class='carousel-control-prev' href='#carouselJH' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Anterior</span>
            </a>
            <a class='carousel-control-next' href='#carouselJH' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Proximo</span>
            </a>
        </div>
        ";
    }

    //ANUNCIO LIFE STYLE TAMANHO 1080X1080px
    function getLS_1080(){
        echo "
        <div id='carouselLifeStyle' class='carousel slide' data-ride='carousel'>
            <div class='carousel-inner'>
                <div class='carousel-item active'>
                    <a href='https://www.instagram.com/__lifestyle.of/' target='_blank'>
                    <img class='block w-100' src='". $this->prefixo ."images/anuncios/lifestyle/ls1.png' alt='anuncio @__lifestyle.of'>
                    </a>
                </div>
                <div class='carousel-item'>
                    <a href='https://www.instagram.com/__lifestyle.of/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/lifestyle/ls2.png' alt='anuncio @__lifestyle.of'>
                </div>
                <div class='carousel-item'>
                    <a href='https://www.instagram.com/__lifestyle.of/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/lifestyle/ls3.png' alt='anuncio @__lifestyle.of'>
                    </a>
                    </div>
                <div class='carousel-item'>
                    <a href='https://www.instagram.com/__lifestyle.of/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/lifestyle/ls4.png' alt='anuncio @__lifestyle.of'>
                    </a>
                    </div>
                <div class='carousel-item'>
                    <a href='https://www.instagram.com/__lifestyle.of/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/lifestyle/ls5.png' alt='anuncio @__lifestyle.of'>
                    </a>
                    </div>
                <div class='carousel-item'>
                    <a href='https://www.instagram.com/__lifestyle.of/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/lifestyle/ls6.png' alt='anuncio @__lifestyle.of'>
                    </a>
                    </div>
                <div class='carousel-item'>
                    <a href='https://www.instagram.com/__lifestyle.of/' target='_blank'>
                    <img class='d-block w-100' src='". $this->prefixo ."images/anuncios/lifestyle/ls7.png' alt='anuncio @__lifestyle.of'>
                    </a>
                    </div>
            </div>
    
            
            <!-- Botoes -->
            <a class='carousel-control-prev' href='#carouselLifeStyle' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Anterior</span>
            </a>
            <a class='carousel-control-next' href='#carouselLifeStyle' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Proximo</span>
            </a>
        </div>
        ";
    }

    //ANUNCIOS DA BARRA LATERAL
    function getAnuncioLateral(){
        $this->getDio();
        echo '<br>';
        $this->getFavoritas();
        echo '<br>';
        $this->getLS_1080();
        echo '<br>';
        $this->getJH();
    }
}

