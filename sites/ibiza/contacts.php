<?php

header("Content-Type: text/html; charset=utf8",true);
include_once("inc/config.php");

$destinatarios	= "damasio_damasio@hotmail.com";

$destinatario 	= utf8_decode("Ibiza - Moveleira");
$usuario 		= "damasio.rafael@gmail.com";
$senha 			= "Damasio.8560";
//$usuario 		= "damasio.rafael@gmail.com";
//$senha 			= "Damasio.8560";

/*abaixo as veriaveis principais, que devem conter em seu formulario*/
$nome 			= protecao(utf8_decode($_REQUEST['nome']));
$email 			= protecao(utf8_decode($_REQUEST['email']));
$telefone		= protecao(utf8_decode($_REQUEST['telefone']));
$empresa		= protecao(utf8_decode($_REQUEST['empresa']));
$cidade_estado		= protecao(utf8_decode($_REQUEST['cidade_estado']));
$mensagem		= protecao(utf8_decode($_REQUEST['mensagem']));

//exit();

/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/
include_once("inc/phpmailer/class.phpmailer.php");

$To = $destinatarios;
$Subject = utf8_decode("Ibiza Moveleira - Mensagem através do site");
$bodyMensagem = "";
$bodyMensagem .= "<strong>Nome:</strong> ".$nome." <br />";
$bodyMensagem .= "<strong>E-mail:</strong> $email <br />";
$bodyMensagem .= "<strong>Telefone:</strong> ".$telefone." <br />";
$bodyMensagem .= "<strong>Empresa:</strong> ".$empresa." <br />";
$bodyMensagem .= "<strong>Cidade/Estado:</strong> ".$cidade_estado." <br />";
$bodyMensagem .= "<strong>Mensagem:</strong> ".$mensagem." <br />";
$Message = $bodyMensagem;

$Host = "smtp.gmail.com";
$Username = $usuario;
$Password = $senha;
$Port = "587";

$mail = new PHPMailer();
$body = $Message;
//$mail->IsHtml(); // telling the class to use HTML
$mail->Host = $Host; // SMTP server
//$mail->SMTPDebug = 1; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "tls";	// SSL REQUERIDO pelo GMail
$mail->Port = $Port; // set the SMTP port for the service server
$mail->Username = $Username; // account username
$mail->Password = $Password; // account password

$mail->SetFrom("noreply@ibiza.com.br", $destinatario);
$mail->Subject = $Subject;
$mail->MsgHTML($body);
$mail->AddAddress($To);
$mail->AddBcc('damasio.rafael@gmail.com', 'Rafael Damasio'); // Cópia Oculta

//echo $body;

//if(insereContato($nome, $email, $telefone, $mensagem)){
	if(!$mail->Send()) {
		echo 'Erro ao enviar e-mail: '. print($mail->ErrorInfo);
	} else {
		echo '<script type="text/javascript">alert("Mensagem enviada com sucesso!"); window.location="index.php";</script>';
	}
//}
?>