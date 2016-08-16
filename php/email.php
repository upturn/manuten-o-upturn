<?php

	header('Content-type: text/html; charset=UTF-8');

	require "mailer/PHPMailerAutoload.php";

	$token = 'e20d796040328bc18568bb7ea04ed757';
	if(isset($_POST['enviar-email']) && $_POST['token'] = $token && $_POST['email'] != "")
		email($_POST['email']);


	function email($destinatario){

		$mailer = new PHPMailer();

		//Definir SMTP
		$mailer->IsSMTP();

		//UTF-8
		$mailer->CharSet = "UTF-8";

		//Configuração
		$mailer->SMTPAuth = true;
		$mailer->SMTPSecure = false;
		$mailer->isHTML(true);

		//Servidor
		$mailer->Host = 'br740.hostgator.com.br';
		$mailer->Port = 26;

		//Usuário
		$mailer->Username = 'contato@upturn.com.br';
		$mailer->Password = '@#upturn#@mail';

		//Email
		$mailer->From = "contato@upturn.com.br";
		$mailer->FromName = "UPTURN";
		$mailer->addReplyTo("contato@upturn.com.br", "UPTURN");

		$mailer->Subject = "UPTURN | Desenvolvimento Web e Mobile";
				
		//Corpo do email
		$mailer->Body = "Olá, tudo bem?";
		$mailer->Body .= "<br>";
		$mailer->Body .= "<br>";
		$mailer->Body .= "Somos a UPTURN, uma empresa de design e desenvolvimento web que tem como maior objetivo criar a melhor solução online para você.";
		$mailer->Body .= "<br>";
		$mailer->Body .= "<br>";
		$mailer->Body .= "Informe a sua necessidade e entraremos em contato o mais breve possível.";
		$mailer->Body .= "<br>";
		$mailer->Body .= "<br>";
		$mailer->Body .= "Equipe UPTURN agradece.";				


		$mailer->AddAddress($destinatario);
		$mailer->Send();
		header("location: http://www.upturn.com.br");
	}
?>