<?php
header('Content-Type: text/html; charset=UTF-8');

// Recupero detalles del envío POST

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$comentario = $_POST['contenido'];

// crea y envía el mensaje de correo electrónico
$para = 'naidrannaidran@gmail.com';
$asunto = 'Nuevos Datos personales';
$mensaje = "<br> Datos de contacto recibidos desde la Web <br /><br /> ";
$mensaje .= "Nombre: " . $nombre . " <br /> ";
$mensaje .= "Teléfono: " . $telefono . "<br /> ";
$mensaje .= "Email: " . $email . "<br /><br />";
$mensaje .= "Mensaje: " . $comentario . "<br /><br />";

//Así podríamos construir una estructura completa de página HTML si
//queremos que llegue con más forma

$cabeceras = "MIME-Version: 1.0" . "\r\n";
$cabeceras .= "Content-type: text/html; charset=UTF-8" . "\r\n";
$cabeceras .= "From:emailtest@diwimf.000webhostapp.com";
if (mail($para, $asunto, $mensaje, $cabeceras)) {
    /*echo '<span style="font-size:1.3em;color:white;background-color:green;padding:5px;">Se acaba de enviar el correo, revisa tu bandeja
de entrada o la de SPAM antes de ponerte nervioso...</span>';*/
    header('Location: ok.php');
} else {
    echo '<span style="font-size:1.3em;color:white;background-color:red;padding:5px;">Error al enviar mensaje</span>';
    /*header('Location: error-email.php');*/
}
