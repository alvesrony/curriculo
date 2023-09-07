<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	//print_r($_POST);

	class Mensagem {
		private $para = null;
		private $assunto = null;
		private $mensagem = null;
		public $statusEnvio = null;
	
		public function __get($atributo) {
			return $this->$atributo;
		}
	
		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}
	
		public function mensagemValida() {
			if(empty($this->para) || empty($this->assunto) || empty($this->mensagem) ) {
				return false;
			}
	
			return true;
		}
	}

	$mensagem = new Mensagem();

	$mensagem->__set('para', $_POST['para']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);

	//print_r($mensagem);

	if(!$mensagem->mensagemValida()) {
		echo '<div class="icon-div botao_campo_vazio"><i class="fa-solid fa-circle-exclamation"></i><div class="middle-content"><span>Preencha todos os campos obrigatórios!</span></div> <i class="btn fa-solid fa-xmark d-block" id="limparErros"></i></div>';
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
			$mail->setFrom($mensagem->__get('para'),$mensagem->__get('para'));
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

			
			$mensagem->statusEnvio = 1;

			echo 'E-mail enviado com sucesso!';

	} catch (Exception $e) {

			echo 'Ops! Ocorreu um erro interno na aplicação. Tente novamente mais tarde.';

	}

?>