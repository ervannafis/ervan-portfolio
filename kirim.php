<?php

$nama= $_POST['nama'];
$usermail= $_POST['usermail'];
$subject= $_POST['subject'];
$pesan = $_POST['pesan'];
$body= "
Nama : $nama <br/>
Email: $usermail <br/>
Subject : $subject <br/>
Pesan : $pesan <br/>
";

function Send_Mail($to,$subject,$body)
{

	
	
require 'PHPmailer/class.phpmailer.php';

$usermail= $_POST['usermail'];
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth   = true;  // SMTP authentication
$mail->Host= "mail.sardana.co.id";
$mail->SMTPSecure = 'tls';
$mail->Port = 587; 
$mail->SetFrom("admin@sardana.co.id","email sender");
$mail->Username = "admin@sardana.co.id";  // username gmail yang akan digunakan untuk mengirim email
$mail->Password = "acpseven07";  // Password email
$mail->SetFrom($usermail, 'user');
$mail->AddReplyTo($usermail,'user');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->AddAddress($usermail);
if(!$mail->Send())
return false;
else
return true;
}

$to = "ervannafis9@gmail.com"; //email tujuan
$subject = "Ada email baru masuk"; // subject email
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
Send_Mail($to,$subject,$body);
?>