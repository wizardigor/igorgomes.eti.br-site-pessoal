<?php
include_once '../comum.php';

$comum = new Comum();

$comum->setPrefixo('../');
$comum->setKeywords('sites, web, desenvolvimento, simples, tecnologia, blog, artigo, html, serviço, projeto, contato, home, school, ensino, em, casa');
$comum->setPagina("11 dicas para começar bem o primeiro dia de homeschool");
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

  <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-12 ftco-animate pb-5 mt-5 text-center">
          <h1 class="mb-3 bread">11 dicas para começar bem o primeiro dia de homeschool, de acordo com especialistas</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>11-Dicas<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <!--INICIO DO ASSUNTO-->
          <h2 class="mb-3">Estabelecer um horário e uma rotina pode fazer toda a diferença.</h2>
          <p>Para algumas crianças, pode parecer que o verão nunca vai acabar – com seu borrão vertiginoso de picolés, brincadeiras e sol. Mas, invariavelmente, a temporada dá lugar a um novo ano letivo e à estrutura e oportunidade que vem junto. Se você está ensinando seus filhos em casa para o próximo ano letivo – e mais pais do que nunca estão fazendo exatamente isso – considere essas ideias para o primeiro dia de educação em casa. Essas dicas profissionais de veteranos homeschoolers e especialistas em educação ajudarão você a criar um ambiente físico e emocional propício ao aprendizado de todas as maneiras que as crianças fazem – e ajudarão você a definir uma intenção para um ano produtivo e feliz pela frente.</p>
          <p class="text-center">
            <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d1.jpg" alt="imagem ilustrativa"></a>
          </p>
          <p>
            <ol>
              <li>
                <h2 class="mb-3 mt-5">Comece devagar.</h2>
                <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d2.jpg" alt="imagem ilustrativa"></a>
                <p>O primeiro dia de homeschool não é hora de exagerar e sobrecarregar todos os envolvidos. “O primeiro dia de volta às aulas em casa é um choque para o sistema de todos. Concentre-se em apenas três a quatro assuntos para sua primeira semana e, em seguida, adicione o restante dos assuntos na semana seguinte. Isso ajuda todo mundo a voltar à rotina escolar sem ficar sobrecarregado”, diz Lauren Schmitz, a blogueira por trás do The Simple Homeschooler.</p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Publique uma rotina diária de homeschool para que todos vejam.</h2>
                <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d3.jpg" alt="imagem ilustrativa"></a>
                <p>Publicar sua agenda em algum lugar visível estabelecerá e esclarecerá as expectativas para crianças e pais logo de cara. “Seus filhos (e você!) devem ser capazes de ver facilmente quais assuntos faltam para completar. Isso ajuda tremendamente a manter todos organizados, motivados e produtivos”, diz Schmitz. "E também responde à pergunta sempre presente: 'Já terminamos?'"</p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Forneça um incentivo positivo.</h2>
                <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d4.jpg" alt="imagem ilustrativa"></a>
                <p>A escola não deveria parecer um castigo. Portanto, use o primeiro dia para estabelecê-lo não apenas como um momento de aprendizado, mas também de recompensas divertidas e emocionantes. “Um grande erro do homeschooling é usar consequências negativas por não terminar o trabalho escolar. Isso cria um ambiente estressante e lutas pelo poder”, diz Schmitz. “Em vez disso, diga a seus filhos que eles podem ganhar algo desejável – como mais tempo na tela ou mais tarde na hora de dormir – por concluir um trabalho de alta qualidade com uma boa atitude. Isso cria crianças motivadas e pais felizes.”</p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Ensine fora.</h2>
                <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d5.jpg" alt="imagem ilustrativa"></a>
                <p>O clima chuvoso e frio chegará em breve, então por que não entrar no novo ano letivo e aproveitar o clima quente que resta movendo algumas aulas ao ar livre. “Estas provavelmente não serão as lições mais difíceis ou mais intensas do ano, então se seu filho estiver um pouco distraído, não será o fim do mundo”, diz Theresa Bertuzzi, cofundadora da International Early Learning centro Tiny Hoppers. “Isso também deve dar ao seu filho vibrações positivas sobre a escola. Se eles estão felizes durante o horário escolar, subconscientemente, eles podem realmente começar a gostar de toda a ideia – tornando o resto do ano um pouco mais fácil.”</p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Tirar fotos.</h2>
                <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d6.jpg" alt="imagem ilustrativa"></a>
                <p>As crianças que estudam em casa estão oficialmente entrando na jornada de um novo ano da mesma maneira que todos os alunos. Portanto, formalize e diferencie - para não mencionar memorizar - o momento lembrando-se de tirar fotos de seus alunos prontos para aprender. “ Tire fotos do primeiro dia de aula para tornar o dia especial e memorável”, sugere Ken Walter da Abacus Early Learning Centers.</p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Designe uma área de estudo.</h2>
                <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d7.jpg" alt="imagem ilustrativa"></a>
                <p>Designe um espaço de estudo em casa que seja silencioso e propício ao foco. “Não precisa ser nada extravagante – uma pequena escrivaninha ou mesa dobrável equipada com tudo [que eles precisam] para ajudá-los a concluir seu trabalho com sucesso”, diz Meredith Essalat, diretora de São Francisco e autora de The Overly Professor honesto . Seu espaço também deve ter acesso a uma tomada para carregamento e um quadro branco ou calendário. “Quando o dia escolar terminar, certifique-se de que eles ajeitem a mesa com antecipação para o dia seguinte”, diz ela.</p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Envolva seu filho no planejamento do dia.</h2>
                <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d8.jpg" alt="imagem ilustrativa"></a>
                <p>As crianças se sentirão envolvidas e prontas para aprender se sentirem que têm propriedade sobre sua experiência, então converse com elas e incorpore feedback sobre como elas absorvem o material. “Ajude seu filho a se entender como aprendiz”, sugere Anastasia Betts , vice-presidente de planejamento e design curricular da Age of Learning . Ela sugere frasear a conversa como: “Você notou que tudo ficou mais difícil depois das 10? Acho que seu corpo estava com fome. Vamos ver o que acontece se pararmos para um lanche às 9h30.”</p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Construir em alguma revisão.</h2>
                <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d9.jpg" alt="imagem ilustrativa"></a>
                <p>Quando as crianças interrompem os estudos para o verão, elas podem ficar um pouco enferrujadas – isso é o que os educadores chamam de escorregador de verão. “É por isso que as primeiras semanas de aula estão revisando os conceitos ensinados no ano anterior”, observa a consultora educacional de alfabetização familiar Jenna Dowd . “Muito do novo conteúdo que seu filho aprenderá este ano depende do conteúdo que ele completou no ano passado. Trabalhe nas revisões com cuidado e certifique-se de que eles possam completá-las com maestria antes de seguir em frente.”</p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Defina sua rotina.</h2>
                <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d10.jpg" alt="imagem ilustrativa"></a>
                <p>Estabeleça a rotina do seu homeschool desde o início. “As rotinas ajudam os alunos a saber o que esperar e a criar transições mais suaves entre as atividades. Eles ajudam os alunos a se concentrarem em suas atividades atuais sem se preocuparem com o que está por vir”, diz Kristen DiCerbo, diretora de aprendizado da Khan Academy . “Crie uma rotina que você seguirá todos os dias, siga-a com seu filho e comece no primeiro dia.”</p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Estabeleça metas.</h2>
                <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d11.jpg" alt="imagem ilustrativa"></a>
                <p>Definir metas mensuráveis ​​dá aos alunos e professores algo para trabalhar. “Eles são ainda mais eficazes em nos motivar quando nós mesmos os estabelecemos”, diz DiCerbo. “Trabalhe com seu filho para definir metas de curto e médio prazo. Deixe-os fornecer informações sobre qual deve ser a meta e quão grande é a meta.”</p>
              </li>
              <li>
                <h2 class="mb-3 mt-5">Fique longe das redes sociais.</h2>
                <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/11d12.jpg" alt="imagem ilustrativa"></a>
                <p>Prepare não apenas seus filhos para o sucesso, mas também você mesmo , resistindo ao desejo de comparar sua própria configuração de homeschooling com os destaques de outros homeschoolers nas mídias sociais. “A mídia social está cheia de supermães que podem fazer tudo – ou que podem, pelo menos, parecer fazer tudo, uma foto filtrada no Instagram de cada vez”, diz Betts. “Você não precisa ser tão programado ou tão livre quanto qualquer outra pessoa. A configuração perfeita para aprender em casa é aquela que se adapta às necessidades da sua família.”</p>
              </li>
            </ol>
          </p>

          <h2 class="text-center">
            <a href="home-school.php" target="_blank">CLIQUE AQUI PARA ADQUIRIR O SEU HOME SCHOOL - ESTRATÉGIAS!</a>
          </h2>
          <!--FINAL DO ASSUNTO-->

          <!--TAGS DO ASSUNTO-->
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">home</a>
              <a href="#" class="tag-cloud-link">school</a>
              <a href="#" class="tag-cloud-link">ensino</a>
              <a href="#" class="tag-cloud-link">casa</a>
            </div>
          </div>

          <!--BIOGRAFIA/SOBRE O AUTOR-->
          <div class="about-author d-flex p-4 bg-dark">
            <div class="bio mr-5 col-sm-2">
              <img src="../images/perfil.png" alt="Image placeholder" class="img-fluid mb-4">
            </div>
            <div class="desc">
              <h3>Igor Gomes</h3>
              <p>Admin, Desenvolvedor</p>
            </div>
          </div>
        </div>

        <div class="col ftco-animate">
          <!--BREVE COMENTARIO SOBRE O ASSUNTO OU INFORMAÇÃO AO LEITOR-->
          <div class="sidebar-box ftco-animate">
            <h3 class="heading-sidebar">Breve descrição</h3>
            <p>O primeiro dia de homeschool não é hora de exagerar e sobrecarregar todos os envolvidos.</p>
          </div>
          <div id='anuncio' class="sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Anuncios</h3>
              <?php $comum->getAnuncioLateral(); ?>
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