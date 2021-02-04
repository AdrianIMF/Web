<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

    <title>Contacto</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Decimotercera página del manual de HTML">
    <meta name="description"
          content="Undécimo ejercicio para la clase de DIW, donde se crea una estructura multimedia con divs, a lo que se añade iconos vectoriales y animaciones para texto en CSS">
    <meta name="keywords" content="decimotercera, multimedia, divs, iconos, manual, html">
    <meta name="author" content="Adrian Moreno Rodriguez">
    <style>
    </style>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
    <!--<script src="js/scripts.js"></script>-->
</head>
<body id="bodyContact">
<main>
    <HR NOSHADE SIZE=1 COLOR=#0000FF>
    <blockquote><a href="datos-personales-enviophp.html"><<--Atras</a></blockquote>
    <HR NOSHADE SIZE=1 COLOR=#0000FF>
    <div class="mensaje">
        <p><?php
        echo "Enhorabuena, todo bien. Revise su correo";
            ?></p>
    </div>
    <script language="JavaScript" type="text/javascript">
        var seg = 5;
        function temporizador(){
            var tiempo = setTimeout("temporizador()",1000);
            document.getElementById('container').innerHTML = 'Redirección automática en'+segundo--+' segundos';
            if(seg===0){
                window.location.href='../index.html';
                clearTimeout(tiempo);
            }
        }
    </script>
</main>
</body>
</html>
