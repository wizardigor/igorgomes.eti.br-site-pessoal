<?php
include_once '../comum.php';

$comum = new Comum();

$comum->setPrefixo('../');
$comum->setKeywords('sites, web, desenvolvimento, developer, tecnologia, blog, artigo, html, serviço, projeto, contato');
$comum->setPagina("Web Developer");
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
          <h1 class="mb-3 bread">Web Dedeveloper</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="../index.php">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span class="mr-2"><a href="../blog.php">Blog <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Web Designer<i class="ion-ios-arrow-forward"></i></span>
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
          <h2 class="mb-3">O que faz um web developer?</h2>
          <p>
            Basicamente, o papel de um web developer é programar websites e
            aplicações online para a empresa.
          </p>
          <p>
            <img src="../images/web-developer.jpg" alt="web developer.jpg" class="img-fluid">
          </p>
          <p>Isso exige grande conhecimento de diferentes ferramentas, técnicas e conceitos
            de desenvolvimento, até porque essa é uma área que não para de evoluir.
          </p>
          <p>
            Podemos dividir as tarefas de um web developer por 4 áreas distintas:
          </p>
          <p>
            <ul>
              <li>
                Desenvolvimento front-end;
              </li>
              <li>
                Desenvolvimento back-end;
              </li>
              <li>
                Configuração de bancos de dados;
              </li>
              <li>
                Manutenção do site no servidor;
              </li>
            </ul>
          </p>
          <p>
            Vamos nos aprofundar mais em cada uma dessas tarefas para compreender exatamente
            o que está incluído no dia a dia de um desenvolvedor web.
          </p>

          <h3>Front-end</h3>
          <p>
            A programação front-end se refere às partes do site que o usuário vê e interage.
            Essa parte do site é controlada pelo navegador que o visitante usa.
          </p>
          <p>
            É por isso que o mesmo site às vezes tem algumas diferenças — variações do mesmo
            tom de cor, detalhes diferentes em alguns elementos, etc. — de um navegador para outro.
          </p>
          <p>
            Parte do trabalho do web developer é garantir que a experiência seja agradável e
            similar em todos os principais navegadores.
          </p>
          <p>
            As principais linguagens envolvidas no front-end são:
          </p>
          <p>
            <ul>
              <li>
                Html;
              </li>
              <li>
                CSS;
              </li>
              <li>
                E javascript, com suas muitas variações e bibliotecas, como jquery.
              </li>
            </ul>
          </p>

          <h3>Back-end</h3>
          <p>
            Já o back-end envolve a parte mais pesada do site, e tem de lidar com várias
            informações importantes, como dados e preferências pessoais dos usuários.
          </p>
          <p>
            Para te ajudar a entender vamos a um exemplo prático: você entra em um site para
            comprar ingressos para aquele filme que estava esperando há muito tempo.
          </p>
          <p>
            Como já vimos, a parte com que você interage, a interface do site, é a parte de
            front-end. Mas, que dizer de toda a lógica por trás da compra — escolha dos lugares,
            pagamento, confirmação do pedido e assim por diante?
          </p>
          <p>
            Tudo isso é trabalho do back-end, e engloba uma comunicação constante e segura
            entre a aplicação, o servidor e até aplicações externas (como provedores de pagamento).
          </p>

          <h3>Bancos de dados</h3>
          <p>
            Quando um site precisa da parte de back-end — somente os mais simples usam apenas
            o front-end — é natural que seja preciso um lugar para guardar todos os dados que
            serão coletados.
          </p>
          <p>
            É aí que entram os bancos de dados, com os quais o web developer precisa ter muita
            familiaridade.
          </p>
          <p>
            Essa parte da aplicação lida com as informações mais sensíveis e importantes,
            então não é qualquer um que pode ser responsável por ela.
          </p>

          <h3>Manutenção no servidor</h3>
          <p>
            A manutenção no servidor é a parte mais óbvia do trabalho: tudo que é construído
            precisa de manutenção, e não é diferente com sistemas web.
          </p>
          <p>
            Qualquer atualização na interface do site, mudança de lógica no banco de dados ou
            correção de segurança no back-end fazem parte do cotidiano do web developer.
          </p>

          <h2>Por que é importante ter um web developer na sua empresa?</h2>
          <p>
            É claro que cada empresa precisa avaliar a sua necessidade com cuidado, mas há muitas vantagens de contratar um desenvolvedor de forma integral para fazer parte do seu time de marketing.
          </p>
          <p>
            Fazer isso está longe de ser um capricho, mas pode ajudar muito na conquista de resultados para o negócio. Veja 3 motivos para ter um web integrando o seu time:
          </p>

          <h3>Maior conhecimento sobre o produto</h3>
          <p>
            Um desenvolvedor dedicado ao mesmo projeto por um longo tempo obviamente terá mais conhecimento sobre ele do que alguém contratado por um curto período.
          </p>
          <p>
            Esse conhecimento se transforma em decisões melhores e mais rápidas, seja para manter o produto como está ou fazer mudanças radicais nele.
          </p>

          <h3>Maior eficiência em projetos a longo prazo</h3>
          <p>
            Se o profissional pretende ficar na empresa por um longo tempo, por que focaria apenas nos resultados a curto e médio prazo?
          </p>
          <p>
            Essa é outra vantagem de contar com um web developer em tempo integral: olhar mais atentamente para o longo prazo, e tomar decisões que se mostrarão bem-sucedidas lá na frente.
          </p>

          <h3>Agilidade na criação de soluções tecnológicas</h3>
          <p>
            Em certos momentos é preciso fazer mudanças urgentes no site para melhorar as conversões.
          </p>
          <p>
            Quer isso envolva apenas alguns retoques no layout ou a correção de falhas operacionais, nem sempre é tão rápido achar um freelancer confiável e disponível para o serviço.
          </p>
          <p>
            Com um web developer à disposição, não tem espera. Aliás, ele provavelmente vai se antecipar a esse tipo de situação e evitar qualquer emergência.
          </p>
          <p>
            Ter um web developer trabalhando na sua empresa pode ser realmente decisivo para o sucesso da sua estratégia de marketing digital. Desse modo, os seus canais digitais estarão sempre atualizados com a melhor tecnologia para engajar os clientes de forma precisa.
          </p>

          <h2>Quais são as habilidades que um web developer precisa ter</h2>
          <p>
            Algumas das habilidades essenciais para um desenvolvedor web são:
          </p>
          <p>
            <ul>
              <li>
                Conhecimento em várias linguagens de programação para a web;
              </li>
              <li>
                Domínio de ferramentas de controle de versão, como o Git;
              </li>
              <li>
                Experiência com design responsivo;
              </li>
              <li>
                Entender as melhores práticas de SEO para aplicar no código;
              </li>
              <li>
                Criatividade e atenção a detalhes;
              </li>
              <li>
                Habilidade de organização (do código em si, documentação do projeto, etc.);
              </li>
              <li>
                Facilidade de fazer pesquisas e se adaptar aos desafios de um projeto;
              </li>
              <li>
                Lidar bem com prazos e escopos definidos;
              </li>
              <li>
                Desejo constante de aprender;
              </li>
              <li>
                Mente voltada para solução de problemas.
              </li>
            </ul>
          </p>
          <!--FINAL DO ASSUNTO-->

          <!--TAGS DO ASSUNTO-->
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#site" class="tag-cloud-link">site</a>
              <a href="#developer" class="tag-cloud-link">developer</a>
              <a href="#web" class="tag-cloud-link">web</a>
              <a href="#desenvolvedor" class="tag-cloud-link">desenvolvedor</a>
            </div>
          </div>

          <!--BIOGRAFIA/SOBRE O AUTOR-->
          <div class="about-author d-flex p-4 bg-dark">
            <div class="bio mr-5">
              <img src="#" alt="" class="img-fluid mb-4">
            </div>
            <div class="desc">
              <h3>Por Evolua</h3>
              <p>
                um especialistas. <br>
                Publicado em 16 de outubro de 2016. | Atualizado em 27 de março de 2020
              </p>
            </div>
          </div>

          <!--FORMULARIO
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
          FIM FORMULARIO -->

        </div> <!-- .col-md-8 -->

        <div class="col-lg-4 sidebar ftco-animate">
          <!--BREVE COMENTARIO SOBRE O ASSUNTO OU INFORMAÇÃO AO LEITOR-->
          <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">Breve descrição</h3>
            <p>Web-Developer, sobre desenvolvedores de páginas para internet.</p>
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