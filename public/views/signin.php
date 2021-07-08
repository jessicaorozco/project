

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <title>Rivfarca - Login</title>
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap"rel="stylesheet"/>
     <link rel="stylesheet" href="/public/css/estilo.css">
     <link rel="stylesheet" href="/public/css/signu.css">
      <link rel="icon" type="image/png" href="/public/images/favicon.ico">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   

</head>

<body>
  
</body>
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="home-tab" role="tabpanel" aria-labelledby="home-tab">  
<section id="login" class="card">
    <div style="position:relative;" class="row justify-content-center">
       <div class="card" >
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>
<div class="card-body ">
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active">Iniciar Sesión</h2>
          <!-- <h3 class="inactive underlineHover">Registro </h3> -->
      
          <!-- Icon -->
          <!-- <div class="fadeIn first">
            <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
          </div> -->
      
          <!-- Login Form -->
          <form id="login-form" method="post" class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" id="email" class="fadeIn second" name="email" placeholder="Correo" require>
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="Clave" require>
            <	<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Iniciando....">Iniciar sesión</button>
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Olvidó su clave?</a>
          </div>
          <div id="formFooter">
            <a class="underlineHover" href="/public/views/signup.html">Registrarse</a>
          </div>
      
        </div>
      </div>

         <br>
         </div>
        </div> 
    </section>
