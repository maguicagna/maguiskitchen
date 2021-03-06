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
    <!--Owl Carousel
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    -->
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
              <a class="nav-link" href="signin.php">Sign In</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0 d-flex d-lg-block  d-sm-none">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
          
        </div>
      </nav>
      <div class="mt-3" id="contacto">
        <h3>Nos importa saber tu opinion, Contactanos!</h3>
        <div class="mt-4">
            <form action="contacto-post.php" method='POST'>
                <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1"  required>
                </div>
                <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="mail@mail.com" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Asunto</label>
                    <input type="text" name="asunto" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Consulta</label>
                <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        

      </div>
      <footer class='text-white p-5 mt-3'>
        <p id='copy'></p>
      </footer>


<script>
  //copyright 
  let copy = document.getElementById('copy')
  var d = new Date();
  let anio = d.getFullYear();
  console.log(anio)
  copy.innerHTML =`&copy; ${anio} - Magui's Kitchen`

  
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>