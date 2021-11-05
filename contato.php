<?php
header('Cache-Control: no-cache');
header('Pragma: no-cache');

include_once 'comum.php';

$comum = new Comum();

$comum->setPrefixo('');
$comum->setKeywords('sites, web, desenvolvimento, tecnologia, blog, artigo, html, sobre, about, curriculo, serviço, projeto, contato');
$comum->setPagina("Contato");
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

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contato</h1>
                    <h2 class="mb-4">Contate-me</h2>
                    <p>Entre em contato.</p>
                </div>
            </div>

            <div class="row d-flex contact-info mb-5">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                        <img src='icons/mapa.png' alt='Endereço' height='100'>
                        </div>
                        <h3 class="mb-4">Endereço</h3>
                        <p>Forleza, Ce. Brasil</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                        <img src='icons/whatsapp.png' alt='Whatsapp' height='100'>
                        </div>
                        <h3 class="mb-4">WhatsApp</h3>
                        <p>
                            <a href="https://wa.me/5585920006476" target="blank">(85) 92000-6476</a>
                            <!--
                            <a href="https://wa.me/5585985118699?text=Como posso ajudar">Chamar no WhatsApp</a>
                            -->
                        </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                        <img src='icons/email.png' alt='e-Mail' height='100'>
                        </div>
                        <h3 class="mb-4">Email</h3>
                        <p><a href="mailto:contato@igorgomes.eti.br?subject=Contato Igor Gomes" title='Contato para Igor gomes'>contato@igorgomes.eti.br</a></p>
                    </div>
                </div>
            </div>

            <!-- FORMULARIO DE CONTATO -->

            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="http://igorgomes.eti.br/contato.php" class="bg-light p-4 p-md-5 contact-form" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name='nome' placeholder="Seu nome" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name='email' placeholder="Seu e-mail" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name='assunto' placeholder="Assunto">
                        </div>
                        <div class="form-group">
                            <textarea id="" cols="30" rows="7" name='text' class="form-control" placeholder="Mensagem" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="enviar Mensagm" name='bt-enviar' class="btn btn-primary py-3 px-5">
                            <input type="reset" value="limpar" name='bt-enviar' class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div class="img" style="background-image: url(images/rosto/trabalho.jpg);"></div>
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

<?php

if (isset($_GET['covid19'])) {
    $pagina = $_GET['covid19'];
} else {
    $pagina = 'Contato Geral';
}

if (isset($_POST['bt-enviar'])) {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $message = $_POST['text'];
    //Remetente-> esse email tem que ser valido do dominio (uma conta de email do seu dominio)
    $email_remetente = 'contato@igorgomes.eti.br';




    //Configurações do email
    $email_destinatario = 'igorgomesads@gmail.com'; //pode ser qualquer email que receberá a mensagem
    $email_reply = $email;
    $email_assunto = "$pagina - Igor Gomes ETI"; //esse será o assunto da mensagem

    //Montando o corpo da mensagem
    $email_conteudo = "Nome: $name \n";
    $email_conteudo .= "E-mail: $email \n";
    $email_conteudo .= "Assunto: $assunto \n";
    $email_conteudo .= "Mensagem: \n$message \n";

    //seta os headers
    $email_readers = implode(
        "\n",
        array(
            "From: $email_remetente",
            "Reply-To: $email",
            "Return-path: $email_remetente",
            "MIME-Version: 1.0",
            "X-Peiority: 3",
            "Content-Type: text/html; charset=UTF-8"
        )
    );

    //enviando email
    if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_readers)) {
        echo    "<script language='javascript' type='text/javascript'>
                    alert('Obigrado {$name}, Sua mensagem foi enviada.');
                </script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>
                alert('{$name}, houve um erro no envio da mensagem.');
            </script>";
    }
}
?>