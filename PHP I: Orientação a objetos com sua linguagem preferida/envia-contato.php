<?php
require_once("PHPMailer.php");
require_once("SMTP.php");
require_once("Exception.php");

session_start();
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = '*****@gmail.com';
$mail->Password = '*****';

$mail->setFrom('*****@gmail.com', 'Alura Curso');
$mail->addAddress('*****@gmail.com');
$mail->Subject = 'Email de contato da loja';
$mail->msgHTML("<html>de: {$nome}</br>email: {$email}</br>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail: {$email}</br>\nmensagem: {$mensagem}";

if ($mail->send()) {
	$_SESSION['success'] = 'Mensagem enviada com suceso';
	header('Location: index.php');
}else {
	$_SESSION['danger'] = 'Erro ao enviar mensagem ' . $mail->ErrorInfo;
	header('Location: contato.php');
}

die();