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
    <div id='caja' class="mt-5 p-5">
      <?php

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $mail = $_POST["mail"];
        $contra1 = $_POST["contra1"];
        $contra2 = $_POST["contra2"];
        $adress = $_POST["adress"];
        $adress2 = $_POST["adress2"];
        $city = $_POST["city"];
        $zip = $_POST["zip"];

        $conexion = mysqli_connect("localhost","root","","Proyecto") or die("Hubo un error en el registro.");
        $query = ("INSERT INTO signup VALUES (0,'$nombre','$apellido','$mail','$contra1','$contra2','$adress','$adress2','$city','$zip')");

        $consulta = mysqli_query($conexion,$query);
        
        if($consulta == true){
          echo "Tu registro fue generado con exito!";
        }else{
          echo"Lo sentimos, no pudimos realizar tu registro.";

          }
      ?>
    </div>
    
</body>
</html>