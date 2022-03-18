<?php
include_once '../comum.php';

$comum = new Comum();

$comum->setPrefixo('../');
$comum->setKeywords('sites, web, desenvolvimento, simples, tecnologia, blog, artigo, html, serviço, projeto, contato, home, school, ensino, em, casa');
$comum->setPagina("16 Dicas para iniciantes em homeschoolers");
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
          <h1 class="mb-3 bread">Minhas 16 principais dicas para iniciantes em homeschoolers</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>16-dicas<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <!--INICIO DO ASSUNTO-->
          <h2 class="mb-3">Minhas 16 principais dicas</h2>
          <p>Honestamente? Eu não sabia no que estava me metendo quando meu marido e eu tomamos a decisão de educar nossos filhos em casa. Quão difícil poderia ser? Eu não achava que precisava de conselhos sobre educação em casa. Afinal, eu não só fui professora de sala de aula por vários anos, mas eu até ensinei a professores de sala de aula como ensinar!</p>
          <p class="text-center">
            <a href="home-school.php" target="_blank"><img class="img-fluid" src="../images/home-school.jpg" alt="imagem do e-book" title="imagem do e-book"></a>
          </p>
          <p>Eu esperava alcançar o status de Master Homeschooling Mom em pouco tempo.</p>
          <p>Bem, a realidade do homeschooling é um animal totalmente diferente. Na verdade, não tem muito em comum com as escolas públicas tradicionais. Em vez disso, ele pega os melhores elementos da infância, o amor de aprender por aprender, e o combina com o conforto de um lar amoroso. O resultado é uma experiência transformadora para pais e filhos.</p>
          <p>A escola pública não pode tocar nisso.</p>

          <h2 class="mb-3 mt-5">Minhas principais dicas para homeschoolers</h2>
          <p>Apenas para começar neste caminho, ou para incentivá-lo se a frustração reinar, aqui estão algumas das minhas principais dicas para famílias que estudam em casa em todas as etapas da jornada.</p>
          <p>
            <ol>
              <li>Esqueça tentar duplicar um ambiente de sala de aula, horário escolar e currículo em sua casa. Não há nada de sagrado em sentar em carteiras, ter determinado tempo por matéria ou usar apenas livros didáticos. Na verdade, até os 11 anos, minha filha nem sabia o que era um livro didático!</li>
              <li>Seus filhos aprendem a tratar os outros e a respeitar a si mesmos observando e modelando suas palavras e comportamento. Isso é poderoso. Ignore o argumento do espantalho sobre crianças educadas em casa não serem socializadas. Eu desafio a suposição de que colocar de 20 a 30 crianças, todas da mesma idade, em uma sala por nove meses é o melhor método para ensinar empatia, autocontrole, paciência, generosidade e outras características desejáveis. Muitas vezes, ele consegue exatamente o oposto.</li>
              <li>Outra das minhas principais dicas para homeschoolers é que , em última análise, seu papel é como um facilitador para o aprendizado de seu filho.   Não há necessidade de palestras e, muitas vezes, você se verá aprendendo algo novo ao lado de seu filho. Por favor, não pense que porque você não gostou da escola, não se saiu bem ou não tem um diploma universitário que não pode estudar em casa. Algumas das melhores mães de homeschooling que eu já conheci me disseram que tiveram sorte de se formar no ensino médio. Talvez eles tenham aprendido com suas experiências negativas o que a educação NÃO deveria ser. Hmmm...alimento para o pensamento.</li>
              <li>Conecte-se com outras famílias que estudam em casa. Não demorará muito para que grande parte de sua vida social os envolva porque, como você, eles não estarão vinculados a um calendário escolar. Vocês compartilharão a disponibilidade para atividades, excursões e jantares juntos porque vocês têm o dom do tempo para fazer essas coisas.</li>
              <li>Depois de entrar no 'círculo interno' do homeschooling, você ficará SURPREENDIDO com os muitos recursos disponíveis para você ! Quando morávamos na área de Phoenix, acessamos aulas especiais de educação domiciliar em nosso Centro de Ciências. Recebemos taxas incrivelmente baixas para praticamente todos os eventos culturais da cidade, incluindo passeios de balé, ópera e museus. Comece a aprender sobre esses recursos em loops de e-mail de homeschooling locais, grupos do Facebook, fóruns e muito mais! Esses grupos também simplificam a localização de famílias com crianças que têm interesses semelhantes. Entre e divirta-se!</li>
              <li>Tente participar de uma conferência de educação domiciliar, se possível. Os benefícios incluem inspecionar uma infinidade de currículos, ouvir palestrantes inspiradores, fazer networking com outras pessoas e muito mais!</li>
              <li>Não assuma que você sempre usará o mesmo currículo ou pertencerá ao mesmo grupo de ensino em casa. Você ficará surpreso com a evolução da sua filosofia educacional e como um grupo ou atividade acaba não sendo o melhor para sua família, afinal. Ao longo dos anos, usamos quatro currículos de matemática diferentes, até que finalmente estabelecemos livros didáticos de ensino para o ensino fundamental e médio. Não tenha medo de fazer mudanças. Basta rolar com ele. Além disso, as vendas de currículos são uma ótima maneira de adquirir o que você precisa sem pagar o preço total.</li>
              <li>Use a tecnologia, mas não se torne dependente dela. Eu usei um currículo baseado em computador este ano e quando tivemos problemas com o computador, meus filhos não puderam fazer nenhuma aula até que os problemas fossem resolvidos! Eu não podia acreditar quantas vezes tivemos problemas com isso durante o ano. Temos toneladas de livros no Kindle, mas quando perdemos o carregador, esqueça!</li>
              <li>Se algo, qualquer coisa, não estiver funcionando, tente mais uma vez e siga em frente. Não adianta ser um idiota teimoso sobre isso. Eu adorava a ideia da minha filha fazer ginástica, mas quando se tornou uma luta para levá-la para a aula, desisti e passamos para outra atividade.</li>
              <li>No início do ano letivo, molhe os pés suavemente. Comece com apenas um assunto para a primeira semana. Adicione o segundo assunto na próxima semana e outro assunto ou dois na terceira semana. Isso ajuda a facilitar a volta de todos ao ano letivo.</li>
              <li>Aqui estão alguns conselhos de homeschooling que podem surpreendê-lo, mas não há necessidade de fazer todas as matérias todos os dias ! Tenha em mente que as escolas públicas oferecem música uma vez por semana, talvez duas. A ciência é ensinada apenas dois ou três dias por semana, e o mesmo vale para história, geografia, estudos sociais, língua estrangeira e muito mais. Não se mate tentando encaixar seis matérias todos os dias. E aqui está um segredo bem guardado no reino da escola pública – praticamente ninguém termina um livro até o final do ano letivo. Sempre.</li>
              <li>Você ficará surpreso com a quantidade de materiais que você precisa para ensinar. Ensinei minha filha a ler usando o livro Ensine seu filho a ler em 100 lições fáceis . As aulas eram terrivelmente chatas, mas ela é uma leitora surpreendente! Meu filho passou pelas mesmas lições e, um dia, ele sabia ler incrivelmente bem!</li>
              <li>Leitura e matemática são as chaves para tudo o que seus filhos vão aprender. Eu não posso enfatizar demais a importância deles. Faça tudo ao seu alcance para desenvolver leitores fortes e pequenos matemáticos. Li em voz alta para meus filhos durante toda a vida escolar, mesmo no ensino médio. Esta é uma maneira fabulosa e muitas vezes esquecida de ajudá-los a desenvolver um vocabulário forte e um amor pela leitura.</li>
              <li>Esta é a SUA escola. Você é o professor, o diretor e o superintendente, tudo em um. Se você quiser passar um dia inteiro jogando jogos de matemática e depois fazer uma caminhada pela natureza, faça isso! Flexibilidade e espontaneidade fazem parte da aventura.</li>
              <li>Junte-se à HSLDA , a Associação de Defesa Legal da Escola Doméstica . Eles protegem nosso direito legal à educação em casa. É uma organização de base cristã, mas se um distrito escolar, Conselho de Educação, Serviços de Proteção à Criança ou qualquer outra agência questionar sua educação em casa, você ficará grato por pertencer a essa organização. Vale a pena a taxa mensal de US $ 7 ou assim. O site da HSLDA também fornece informações sobre educação domiciliar específicas do estado.</li>
              <li>O mundo é sua sala de aula! Use-o! Rastreie todos os recursos disponíveis. Planeje férias em família que reforcem o que seus filhos estão aprendendo. Leia minhas listas de habilidades que as crianças devem conhecer e incorpore algumas delas em seu tempo de aprendizado. Comece com esta lista de habilidades para aprender.</li>
            </ol>
          </p>

          <h2 class="mb-3 mt-5">Dicas para bônus de Homeschoolers!</h2>
          <p>Seus filhos ainda podem ter algumas aulas em escolas públicas. Se eles querem fazer educação física, praticar um esporte, cantar no coral ou tocar um instrumento, é possível que eles aproveitem apenas essas aulas. Verifique as leis e regulamentos locais.</p>
          <p>Não estou prometendo anos de homeschooling cheios apenas de sol e unicórnios. Existem dias em que você senta e chora de cansaço e frustração. Não é FÁCIL, mas é além de recompensador e cria um estilo de vida que você vai adorar por sua flexibilidade, diversão e descobertas diárias.</p>
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
            <p>Seus filhos ainda podem ter algumas aulas em escolas públicas. Se eles querem fazer educação física, praticar um esporte, cantar no coral ou tocar um instrumento...</p>
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