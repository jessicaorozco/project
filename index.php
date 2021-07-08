
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <title>Rivfarca - Bienvenido</title>
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap"rel="stylesheet"/>
     <link rel="stylesheet" href="/public/css/estilo.css">
     <link rel="stylesheet" href="/public/css/style.css">
      <link rel="icon" type="image/png" href="/public/images/favicon.ico">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!------ Include the above in your HEAD tag ---------->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <!-- otros cdn -->
       
  </head>

<body>
<header>
    <div class="banner">
        <img class="tipografia" src="image/tipografia.png">
     </div>
     <nav>
<ul>
        <li><a href="#directorio">Directorio</a></li>
        <li><a href="#map">Rutas</a></li>
        <li><a href="#">Contáctenos</a></li>
        <br clear="all" />
    </ul>
    
</nav>
</header>

<div class="login">
<a herf="login.php"><img class="user" onclick="login()" src="image/user.png" title="Login"></a>
</div>

<!-- directorio-->
<!-- 
<section id="directorio" class="modalDialogdi">

</section>
 -->


<script src="js/script.js"></script>

<section id="directorio" class="modalDialogdi">
<div class="directorio">
    <table>
        <tr>
            <td>Establecimiento</td>
            <td>Dirección</td>
            <td>Ciudad</td>
            <td>Pais</td>
            <td>Tlf</td>
            <td>Logo</td>
            <td>Latitud</td>
            <td>Longitud</td>
            <td>Horarios</td>
            <td>Frase</td>
            <td>Parqueadero</td>
            <td>domicilios</td>
            <td>reservaciones</td>
        </tr>
    
<?php 
            
            $servername = 'localhost';
            $database = 'beermoney';
            $username = 'root';
            $password = '';
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }else{
            
            echo "Connected successfully";
            
            // $conn = new mysqli($servername, $database, $username, $password);
            // $conn->set_charset("utf8");
            
            // $res = $mysqli->query("SELECT * FROM establecimiento");

            // Check connection
                echo("si conecta");
                $consulta= "SELECT*FROM establecimiento";
                
                while ($fila =mysql_fetch_array($consulta)){
                
                 // $sql="SELECT * from establecimiento ";
                // $result=mysql_query($conn,$sql);

                // while($mostrar=mysqli_fetch_array($result))
                
        ?>
       
        <tr>
            <td><?php echo $mostrar['nombre_e']?></td>
            <td><?php echo $mostrar['direccion_e']?></td>
            <td><?php echo $mostrar['ciudad']?></td>
            <td><?php echo $mostrar['pais']?></td>
            <td><?php echo $mostrar['tlf_e']?></td>
            <td><?php echo $mostrar['logo']?></td>
            <td><?php echo $mostrar['latitud']?></td>
            <td><?php echo $mostrar['longitud']?></td>
            <td><?php echo $mostrar['horarios']?></td>
            <td><?php echo $mostrar['frase']?></td>
            <td><?php echo $mostrar['parqeadero']?></td>
            <td><?php echo $mostrar['domicilios']?></td>
            <td><?php echo $mostrar['reservaciones']?></td>
        </tr>
        </table>

        <?php
   
        }}
        mysqli_close($conn);
        ?>

</div>
</section> 

<script src="https://openlayers.org/en/v5.3.0/build/ol.js" type="text/javascript"></script>
<script src="https://unpkg.com/ol-layerswitcher@3.2.0"></script>
<!-- Our map file -->
<script src="js/script.js" type="text/javascript"></script>
</body>
</html>