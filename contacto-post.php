<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Magui's Kitchen</title>
    
    <link rel="shortcut icon" href="img/faviconmagui.png" type="image/png">
    
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <nav class="container-lg container-fluid navbar sticky-top navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="index.html"><img src="img/maguiscrop.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse d-lg-flex justify-content-around" id="navbarTogglerDemo02">
          <ul class="navbar-nav ">

            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#info">Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#blog">Blog</a>
            </li>     
            <li class="nav-item">
              <a class="nav-link" href="#saladas">Recetas Saladas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#dulces">Recetas Dulces</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.php">Contacto</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="signin.php">Sign In</a>
            </li>          
          </ul>
          <form class="form-inline my-2 my-lg-0 d-flex d-lg-block  d-sm-none">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
          
        </div>
    </nav>
    <div id='caja' class="mt-5 p-4">
      <?php

        $nombre = $_POST["nombre"];
        $mail = $_POST["email"];
        $asunto1 = $_POST["asunto"];
        $mensaje = $_POST["mensaje"];

        //Ahora hay que enviar con funcion mail, que no va a funcionar por que estamos en un local host
        /* Configuración de la función
        mail ("destinatario","asunto","cuerpo del mensaje","adicionales")
        */

        $destinatario = "maguicagna@gmail.com";
        $asunto = "Consulta";

        /* Aca es lo que me va a llegar a mi con toda la info, pero en vez de ese formato
        voy a usar las variables que reasigne.
        $cuerpoMensaje = $_POST['nombre'].$_POST['email'].
        $_POST['localidad'].$_POST['mensaje']; */

        $cuerpoMensaje = "Nombre: ".$nombre."<br>Mail: ".$mail."<br>Asunto: ".$asunto1."<br>Mensaje: ".$mensaje;

        // echo $cuerpoMensaje;

        // Para enviar un correo con formato HTML (por dafault lo envia en texto plano), debe establecerse la cabecera Content-type

        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Envio
        // Tip del dia: para ocultar errores, la linea debe comenzar con @

        $envio = mail($destinatario,$asunto,$cuerpoMensaje,$cabeceras);//devuelve true o false

        if($envio==true){
            echo "Enviado correctamente";
        }
      ?>
    </div>
    
</body>
</html>