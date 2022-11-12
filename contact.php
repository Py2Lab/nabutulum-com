<?php
  $to = "vazquez1072@gmail.com";
$subject = "Descarga de brochure";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
$message = "
<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Descarga de bochure</h1>
<p>Nombre: ".$_POST["name"]."</p>
<p>Asunto: ".$_POST["subject"]."</p>
<p>Email: ".$_POST["mail"]."</p>
<p>Telefono: ".$_POST["phone"]."</p>
<p>Pais: ".$_POST["country"]."</p>
<p>Mensaje: ".$_POST["subject"]."</p>
</body>
</html>";
 
mail($to, $subject, $message, $headers);
$datos["msg"]= "Hemos recbido tu correo." ;
echo json_encode($datos);
?>