<?php

date_default_timezone_set('America/Sao_Paulo');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


/*Como enviar Emails com PHP (Autenticados / Gmail)*/
/*TRATAMENTO*/


if((isset($_POST ['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))){

	$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
	$email = $_POST['email']; /*? trim($_POST['email']) : 'Não informado';*/
	$assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
	$mensagem = $_POST['mensagem']; /*? trim($_POST['mensagem']) : 'Não informado';*/
	$data = date('d/y/m H:i:s');

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'seu endereço de email';
	$mail->Password = 'sua senha de acesso do email cadastrado';
	$mail->Port = 587;

	$mail->setFrom('seu endereço de email');
	$mail->addAddress('seu endereço de email');

	$mail->isHTML(true);
	$mail->Subject = $assunto;
	$mail->Body =  "Nome: {$nome}<br>
					Email: {$email}<br>
					Mensagem: {$mensagem}<br>
					Data/Hora:  {$data}";

	if($mail->send()) {
		echo 'Email enviado com sucesso.';
	} else {
		echo 'Email nao enviado.';
	}
}else{
	echo 'Email não enviado: Informar o email e a mensagem.';
}
