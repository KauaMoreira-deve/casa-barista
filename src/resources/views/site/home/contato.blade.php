<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;
/**
 * email != '';
 */
if (isset($_POST['email'])) {

    //Create an instance; passing `true` enables exceptions
    require 'vendor/phpmailer/PHPMailer.php';
    require 'vendor/phpmailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {


        // Pegar as informações do formulário
        $nome       = $_POST["nome"];
        $email      = $_POST["email"];
        $fone       = $_POST["fone"];
        $assunto    = $_POST["assunto"];
        $mens       = $_POST["mens"];

        // Banco de dados
        require_once('admin/ControleContato.php');

        $contato = new ClassContato();

        $contato->nomeContato = $nome;
        $contato->emailContato = $email;
        $contato->foneContato = $fone;
        $contato->assuntoContato = $assunto;
        $contato->mensContato = $mens;

        $contato->Inserir();



        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smpsistema.com.br';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'tipi06@smpsistema.com.br';             //SMTP username
        $mail->Password   = 'SMP-Tipi@@06';                         //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('tipi06@smpsistema.com.br', 'Site Casa do Barista'); // Quam Dispara o e-mail
        $mail->addAddress('tipi06@smpsistema.com.br');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Site Casa do Barista';
        $mail->Body    = "
            Nome: $nome <br>
            E-mail: $email <br>
            Telefone: $fone <br>
            Assunto: $assunto <br>
            Mensagem: $mens
        ";
        $mail->AltBody = "
            Nome: $nome /n
            E-mail: $email /n
            Telefone: $fone /n
            Assunto: $assunto /n
            Mensagem: $mens
        ";

        $mail->send();
        $ok = 1;
    } catch (Exception $e) {
        $ok = 2;
    }
}

?>

<body id="pg-contato">
    <!-- Inicio Cabeçalho -->
    
    <!-- Fim Cabeçalho -->

    <!-- CORPO -->
    <main>
        <!-- Inicio Banner -->
        
        <!-- Fim Banner -->

        <!-- CONTEÚDO CONTATO -->
        <section class="contato">
            <h2>Casa do Barista</h2>
            <h3>
                <?php
                if ($ok == 1) {
                    echo $nome . ", sua mensagem foi enviada com sucesso!";
                } elseif ($ok == 2) {
                    echo $nome . ", não foi possível enviar sua mensagem";
                }
                ?>
            </h3>
            <div class="site">

                <!-- TEXTO -->
                <div class="contato-txt">
                    <p>A Casa do Barista nasceu da vontade de unir pessoas através de algo simples e profundo: o ato de compartilhar uma xícara de café. </p>
                    <p> Acreditamos no poder das histórias que começam no campo, passam pelo barista e chegam até você em forma de aroma, sabor e sentimento. </p>
                    <p>Valorizamos pequenos produtores, técnicas artesanais e processos manuais que resgatam o verdadeiro significado do café brasileiro: riqueza cultural, dedicação e tradição.</p>
                    <div>
                        <div>
                            <div>
                                <h3>Nosso Endereço</h3>
                                <h4>Av Marechal Tito, 1500 <br> São Miguel Paulista</h4>
                            </div>
                            <div>
                                <h3>Nossos E-Mails</h3>
                                <a href="mailto:contato@email.com.br">contato@email.com.br</a>
                                <a href="mailto:atendimento@email.com.br">atendimento@email.com.br</a>
                            </div>
                        </div>

                        <div>
                            <div>
                                <h3>Nossos Telefones</h3>
                                <a href="tel:+5511999999888">(11) 999-999-888</a>
                                <a href="tel:+5511999888888">(11)999-888-888</a>
                            </div>
                            <div>
                                <h3>Siga-nos</h3>
                                <!-- Rede Social  -->
                                <ul class="redeSocial">
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('barista/assets/facebook-24.png')}}" alt="Logo Facebook - Casa do Barista">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('barista/assets/instagram-24.png')}}" alt="Logo Instagram - Casa do Barista">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('barista/assets/linkedin-24.png')}}" alt="Logo LinkedIn - Casa do Barista">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://wa.me/5511988662233?text=Ol%C3%A1%21%20Gostaria%20de%20falar%20com%20a%20Casa%20Do%20Barista%20%E2%98%95"
                                            target="_blank">
                                            <img src="{{ asset('barista/assets/whatsapp-24.png')}}" alt="Logo WhastApp - Casa do Barista">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORM -->
                <div class="contato-form">

                    <form action="#" method="POST">
                        <div>
                            <input type="text" name="nome" placeholder="Nome Completo*: " required>
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="E-mail*: " required>
                        </div>

                        <div>
                            <div>
                                <input type="tel" name="fone" placeholder="Telefone: ">
                            </div>
                            <div>
                                <select name="assunto">
                                    <option value="" disabled selected hidden>Selecione o assunto</option>
                                    <option value="Eventos">Eventos</option>
                                    <option value="Café">Café</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <textarea name="mens" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
                        </div>
                        <div>
                            <button class="btn" type="submit">Enviar Mensagem</button>
                            <button class="btn" type="reset">Limpar</button>
                        </div>

                    </form>



                </div>

            </div>
        </section>


        <!-- MAPA CONTATO -->
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4912.054142357948!2d-46.4344330235096!3d-23.495510959178546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e1!3m2!1spt-BR!2sbr!4v1773078005865!5m2!1spt-BR!2sbr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

    </main>

    
</body>

</html>