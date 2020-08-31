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
              <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0 d-flex d-lg-block  d-sm-none">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
          
        </div>
    </nav>
  
    
    <div class="container">
        
      <div class="ingreso d-flex  flex-column justify-content-center" id="signin"> 
          <h4>Ingresa a tu cuenta.</h4>
          <br>   
          <form>
              <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="mail@mail.com" aria-describedby="emailHelp" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember Me</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <br>
          <p>Sos nuevo en Magui's Kitchen? <a class=" btn-link" href="signup.php">Registrate</a></p>
      </div>
        
    </div>
        
        
	
    
    <footer class='text-white p-5'>
      <p id='copy'>  </p>
    </footer>


<script>
  //copyright 
  let copy = document.getElementById('copy')
  var d = new Date();
  //console.log(fecha)
  let anio = d.getFullYear();
  console.log(anio)
  copy.innerHTML =`&copy; ${anio} - Magui's Kitchen` 


</script>
</body>
</html>