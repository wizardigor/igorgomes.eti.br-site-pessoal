<?php
include_once '../comum.php';

$comum = new Comum();

$comum->setPrefixo('../');
$comum->setKeywords('sites, web, desenvolvimento, developing, tecnologia, blog, artigo, html, serviço, projeto, contato');
$comum->setPagina("App Developer");
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
          <h1 class="mb-3 bread">App Developing</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span>
            <span>App Developing<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <!--INICIO DO ASSUNTO-->
          <h2 class="mb-3">App developer</h2>
          <p>
            A profissão de desenvolvedor de aplicativos é uma novidade no mercado tecnológico
            que vem se fortalecendo à medida que cresce o número de usuários de sistemas
            operacionais mobiles.
          </p>
          <p>
            De acordo com uma pesquisa feita pela Kantar Worldpanel, especialista global em
            comportamento de consumidores, 9 a cada 10 brasileiros possuem celular, sendo 90%
            deles usuários do sistema Android e 5,8% do iOS.
          </p>
          <p>
            Por causa de tantos dados relevantes e notando o crescimento dessa profissão,
            separamos algumas curiosidades sobre ela como o tipo de trabalho exercido,
            as habilidades necessárias para ser um desenvolvedor de aplicativos e muito mais.
          </p>
          <p>
            <img src="../images/app-developing.png" alt="app developing.png" class="img-fluid">
          </p>
          <h2>O surgimento da profissão de desenvolvedor de aplicativos</h2>
          <p>
            Foi-se a época em que as profissões mais procuradas do mercado limitavam-se apenas às
            tradicionais como médico, engenheiro e advogado. Com o surgimento e avanço de tecnologias,
            muitas novas carreiras surgiram também e a demanda por profissionais dessas áreas cresce
            exponencialmente.
          </p>
          <p>
            Se você busca fugir do tradicional e trabalhar com algo realmente inovador,
            conheça algumas das profissões que surgiram com o avanço da tecnologia:
          </p>
          <p>
            <ul>
              <li>
                a) cientista de dados – é o profissional que organiza, decifra e extrai informações
                a partir de dados que as empresas geram por meio do Big Data;
              </li>
              <li>
                b) analista de marketing digital – é ele quem entende o público-alvo da empresa e
                desenvolve ações para alavancar as vendas de um produto ou melhorar a imagem de uma
                instituição na internet;
              </li>
              <li>
                c) desenvolvedor web – atua na criação de sistemas para internet ou na adaptação de
                sistemas já existentes;
              </li>
              <li>
                d) influenciadores digitais – são pessoas que têm muitos seguidores nas redes sociais
                e se transformaram em formadores de opinião e criadores de tendências de consumo;
              </li>
            </ul>
          </p>

          <p>
            Dentre essas e as demais carreiras que vêm ascendendo no mundo tecnológico, também se destaca
            a profissão de Desenvolvedor Mobile ou, simplesmente, desenvolvedor de aplicativos
          </p>
          <h2>Entenda o que faz um desenvolvedor de aplicativos</h2>
          <p>
            Um programador é o profissional que tem a responsabilidade de utilizar as linguagens de
            programação a fim de criar coisas completamente novas e dar utilidade a esses equipamentos
            que tanto usamos (computadores, celulares, tablets).
          </p>
          <p>
            O desenvolvedor de aplicativos, ou desenvolvedor mobile, é um programador que vai atuar
            no desenvolvimento de aplicativos ou sistemas, programando nativamente ou por meio de
            outras linguagens, para dispositivos móveis (celulares e tablets).
          </p>
          <p>
            É ele quem vai analisar as necessidades do cliente, traçar o planejamento e o
            desenvolvimento do app, implantação de ferramentas e recursos, e configurar testes.
          </p>

          <h2>Habilidades necessárias para ser um bom desenvolvedor mobile</h2>
          <p>
            Esse profissional tem que ter o conhecimento técnico e lógico para desenvolver soluções tão completas quanto as usadas em desktop e web, mas pensando nas adaptações necessárias para que caibam literalmente no bolso dos usuários.
          </p>
          <p>
            Além dessas habilidades, para exercer a profissão de desenvolvedor de aplicativos o profissional necessita de algumas outras que listamos abaixo.
          </p>
          <p>
            <ul>
              <li>
                Raciocínio lógico,
              </li>
              <li>
                Saber se comunicar,
              </li>
              <li>
                Capacidade analítica,
              </li>
              <li>
                Saber trabalhar em equipe,
              </li>
              <li>
                Ser proativo e ter iniciativa,
              </li>
              <li>
                Capacidade de organização
              </li>
              <li>
                Lidar bem com prazos e metas,
              </li>
              <li>
                Capacidade de analisar e resolver problemas de forma eficaz e
              </li>
              <li>
                Multitasking (profissionais que tem a habilidade de fazer mais de uma tarefa ao mesmo tempo).
              </li>
            </ul>
          </p>
          <p>
            Destacam-se também aqueles profissionais que tenham noções de SEO, Google Analytics e
            linguagens compatíveis com mobile.
          </p>
          <p>
            E apesar de não ser obrigatório, muitas empresas consideram como diferencial a graduação
            em Ciência da Computação, Matemática, Análise e Desenvolvimento de Sistemas e áreas correlatas.
          </p>
          <!--FINAL DO ASSUNTO-->

          <!--TAGS DO ASSUNTO-->
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">site</a>
              <a href="#" class="tag-cloud-link">developer</a>
              <a href="#" class="tag-cloud-link">developing</a>
              <a href="#" class="tag-cloud-link">desenvolvedor</a>
              <a href="#" class="tag-cloud-link">app</a>
              <a href="#" class="tag-cloud-link">moble</a>
            </div>
          </div>

          <!--BIOGRAFIA/SOBRE O AUTOR-->
          <div class="about-author d-flex p-4 bg-dark">
            <div class="bio mr-5">
              <img src="#" alt="" class="img-fluid mb-4">
            </div>
            <div class="desc">
              <h3>Por Evolua</h3>
              <p>Publicado em 15 junho de 2018.</p>
            </div>
          </div>

          <!--LISTA DE COMENTERIOS--
          <div class="pt-5 mt-5">
            <h3 class="mb-5">6 Comments</h3>
            <ul class="comment-list">
              --COMENTARIO 1--
              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">June 20, 2019 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>
              --COMENTARIO 2--
              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">June 20, 2019 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>

                --COMENTARIO 2.1--
                <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">June 20, 2019 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>

                    --COMENTARIO 2.1.1--
                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta">June 20, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                        --COMENTARIO 2.1.1.1--
                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>John Doe</h3>
                              <div class="meta">June 20, 2019 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>
                          </li>
                        </ul>
                        --FIM COMENTARIO--
                      </li>
                    </ul>
                    --FIM COMENTARIO--
                  </li>
                </ul>
                --FIM COMENTARIO--
              </li>
              --FIM COMENTARIO--

              --COMENTARIO 3--
              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">June 20, 2019 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>
            </ul>
            -- FIM DA LISTA DE COMENTARIOS --

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
                  <label for="message">Mensagem</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Enviar Comentário" class="btn py-3 px-4 btn-primary">
                </div>
              </form>
            </div>
          </div>
          -- Fim Comentario-->
        </div> <!-- .col-md-8 -->
        
        <div class="col-lg-4 sidebar ftco-animate">
          <!--BREVE COMENTARIO SOBRE O ASSUNTO OU INFORMAÇÃO AO LEITOR-->
          <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">Breve descrição</h3>
            <p>App-Developing, sobre desenvolvedores de aplicativos.</p>
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