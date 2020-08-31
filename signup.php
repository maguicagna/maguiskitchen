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
    <main id="form">
        <div class="container-md container-fluid-sm mt-4" id="signup">
            <h4>Registrate</h4>
            <form action="signup-post.php" method="post">
              <div class="row">
                <div class="col-6 mb-3">
                  <label for="">Nombre</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" required>
                  <small id="helpNombre"></small>
                </div>
                <div class="col-6 mb-3">
                  <label for="">Apellido</label>
                  <input type="text" name="apellido" id="apellido" class="form-control" required>
                  <small id="helpApellido"></small>
                </div>
              </div>
              <div class="form-group ">
                  <label for="email">Email</label>
                  <input type="email" name="mail" class="form-control" id="email" required>
                  <small id="helpMail"></small>
              </div>
              <div class="form-group">
                  <label for="pass1">Contraseña</label>
                  <input type="password" name="contra1" class="form-control" id="pass1" required>
                  <small id="helpPass1"></small>
              </div>
              <div class="form-group ">
                  <label for="pass2">Confirme la contraseña</label>
                  <input type="password" name="contra2" class="form-control" id="pass2" required>
                  <small id="helpPass2"></small>
              </div>
              <div class="form-group">
                <label for="direc1">Dirección</label>
                <input type="text" name="adress" class="form-control" id="direc1" placeholder="Calle y número" required>
                <small id="helpDirec"></small>
              </div>
              <div class="form-group">
                <label for="direc2">Dirección 2</label>
                <input type="text" name="adress2" class="form-control" id="direc2" placeholder="Piso, Departamento, Lote">
              </div>
              <div class="form-row d-flex justify-content-between">
              <div class="form-group col-md-6">
                  <label for="ciudad">Ciudad</label>
                  <input type="text" name="city" class="form-control" id="ciudad" required>
                  <small id="helpCity"></small>
              </div>
              <div class="form-group col-md-2">
                  <label for="cp">Codigo Postal</label>
                  <input type="text" name="zip" class="form-control" id="cp" required>
                  <small id="helpZip"></small>
              </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                    Remember Me
                    </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary" id="btnSignup">Sign up</button>
              <p class='mt-2'  id="checkCampos"></p>
          </form>  
        </div>
		
    </main>
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
  
  

  //Comprobantes del formulario

  let nombre = document.getElementById('nombre')
  let apellido = document.getElementById('apellido')
  let email = document.getElementById('email')
  let pass1 = document.getElementById('pass1')
  let pass2 = document.getElementById('pass2')
  let direc1 = document.getElementById('direc1')
  let direc2 = document.getElementById('direc2')
  let ciudad = document.getElementById('ciudad')
  let cp = document.getElementById('cp')
  let btnSignup = document.getElementById('btnSignup')
  let checkCampos = document.getElementById('checkCampos')


  //var camposForm = [nombre,apellido,email,pass1,pass2,direc1,direc2,ciudad,cp]

  function check(){
    if(nombre.value==''||apellido.value==''||email.value==''||pass1.value==''||pass2.value==''||direc1.value==''||ciudad.value==''||cp.value==''){
      checkCampos.innerHTML=`Todos los campos tienen que estar completos!`

    }
      
    
  }
  btnSignup.addEventListener('click',check)

  function passCondicion(){
    if (pass1.value.length < 6){
      helpPass1.innerHTML=`La contraseña debe tener al menos 6 caracteres.`
      pass1.style.border = '2px solid red'
    }else{
      pass1.style.border = '2px solid lightgreen'

    }
  }
  pass1.addEventListener('blur',passCondicion)

  function passIguales(){
    if (pass1.value != pass2.value){
      helpPass2.innerHTML=`Las contraseñas deben coincidir.`
      pass2.style.border = '2px solid red'
    }else{
      pass2.style.border = '2px solid lightgreen'

    }
  }
  pass2.addEventListener('blur',passIguales)



</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>