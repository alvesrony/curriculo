<?php

require "bibliotecas/PHPMailer/Exception.php";
require "bibliotecas/PHPMailer/OAuth.php";
require "bibliotecas/PHPMailer/PHPMailer.php";
require "bibliotecas/PHPMailer/POP3.php";
require "bibliotecas/PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//print_r($_POST);

class Mensagem {
    private $remetente = null;
    private $assunto = null;
    private $mensagem = null;
    private $nome = null;
    public $status = array( 'codigo_status' => null, 'descricao_status' => '');

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    public function mensagemValida() {
        if(empty($this->remetente) || empty($this->assunto) || empty($this->mensagem) || empty($this->nome)) {
            return false;
        }

        return true;
    }
}

$mensagem = new Mensagem();

	$mensagem->__set('remetente', $_POST['remetente']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);
    $mensagem->__set('nome', $_POST['nome']);

    print_r($mensagem);

	if(!$mensagem->mensagemValida()) {
		echo 'Mensagem não é válida';
		die();
	}

    $mail = new PHPMailer(true);
	try {
			//Server settings
			$mail->SMTPDebug = false;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'envioemail00@gmail.com';                     //SMTP username
			$mail->Password   = 'zjaqyirlicqbjlzr';                               //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom($mensagem->__get('remetente'),$mensagem->__get('nome'));
			$mail->addAddress('alvesroniesley@gmail.com', 'Rony');     //Add a recipient
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = $mensagem->__get('assunto');
			$mail->Body    = $mensagem->__get('mensagem');
			$mail->AltBody = 'É necessario utilizar um client que suporte HTML para ter acesso total ao conteúdo dessa mensagem';

			$mail->send();

			$mensagem->status['codigo_status'] = 1;
			$mensagem->status['descricao_status'] = 'E-mail enviado com sucesso';

	} catch (Exception $e) {
			
			$mensagem->status['codigo_status'] = 2;
			$mensagem->status['descricao_status'] = 'Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde. Detalhes do erro: ' . $mail->ErrorInfo;
	}
    header('Location: index.php');
?>