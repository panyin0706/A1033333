<?php

require("C:\PHPMailer-master\PHPMailerAutoload.php");

$mail= new PHPMailer();
$mail->SMTPDebug=1;
$mail->IsSMTP();
$mail->SMTPAuth = true;

$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;

$mail->Username = "n8327912n@gmail.com";
$mail->Password = "Y8327912y";
$mail->CharSet = "utf-8";
$mail->Subject = "php期末報到+A1033333";
$mail->Body ="A1033333+172.20.107.59+fe80::d129:ed6c:8b1b:e076%3";  
$mail->From ="n8327912n@gmail.com";
$mail->FromName = "潘宣穎";
$mail->IsHTML(true);

$mail->AddAddress('php@nuk.im','丁丁');

if(!$mail->Send()) 
{
	 echo "Message was not sent <p>"; 
	 echo "Mailer Error: " . $mail->ErrorInfo;
	 exit; 
}
echo "Message has been sent";
$mail->Send();


?>