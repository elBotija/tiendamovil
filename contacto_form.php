<?php
session_start();


$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$cargo = $_POST['cargo'];

$texto1 = $_POST['textarea1'];
$link = $_POST['link'];




$_SESSION['nombre'] = $nombre;
$_SESSION['telefono'] = $telefono;
$_SESSION['email'] = $email;

$_SESSION['texto1'] = $texto1;



if(($nombre == "") || ($email == "")){
												  
	header("Location:index.html");
							 
}else{


$header = 'From: ' . $email . " \r\n \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n \r\n";
$header .= "Mime-Version: 1.0 \r\n \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Consulta Tienda Mobil \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time()) . " \r\n \r\n";   

$mensaje .= "Nombre: " . $nombre . " \r\n \r\n";
$mensaje .= "Telefono: " . $telefono . " \r\n \r\n";
$mensaje .= "E-Mail de contacto: " . $email . " \r\n \r\n";
$mensaje .= "Consulta: " . $texto1 . " \r\n \r\n";


$para = 'mauroenpixels@gmail.com';
$asunto = 'Formulario de tiendaMobil';

mail($para, $asunto, utf8_decode($mensaje), $header);

session_destroy();

header("Location:../index.html");
};


?>