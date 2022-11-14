<?php
    #conectar a la DB
    $servername = "localhost";
    $database = "doggroomer";
    $username = "root";
    $password = "";
    // crea la conexion
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Cche quear la conexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } ?>
    
<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clientes</title>
        <link rel="stylesheet" href="styles.css">
        <!-- CSS only bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <header>
        <div class="container-fluid" >
            <!--navbar-->
            <nav  class="navbar navbar-expand-md  ">
                <div id="nav" class="container-fluid ">
                    <a class="navbar-brand" href="home.php">
                        <img  src="img/logofondoblancomaspeque-removebg-preview.png" alt="Bootstrap" width="100" height="35">
                      </a>
                      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuNavegacion"><span class="navbar-toggler-icon"></span></button>
                      <div id="menuNavegacion" class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav ms-3">
                            <li class="nav-item"><a id="texNav" class="nav-link" href="clientes.php">Clientes</a></li>
                            <li class="nav-item"><a id="texNav"class="nav-link" href="mascotas.php">Mascotas</a></li>
                            <li class="nav-item"><a id="texNav"class="nav-link" href="turnos.php">Turnos</a></li>
                            <li class="nav-item"><a id="texNav"class="nav-link" href="perfil.php">Perfil</a></li>
                            <li class="nav-item"><a id="texNav"class="nav-link" href="index.php">logout</a></li>
    
                        </ul>
    
                      </div>
    
                </div>
    
            </nav>
    
        </div>
            
    </header>
    <div class="container" id="AddCliente">
      <div class="row">
       <div class="col-sm-5 col-md-6">
         <!-- Button trigger modal -->
         <div class="adCliente">
         <img src="img\addcliente.png" class="img-thumbnail" alt="AddCliente"> <br>
       <a type="button" href="formularioCliente.php" class="add btn bg-warning"  data-bs-target="#staticBackdrop">Agregar Cliente </a>     
      
       </div>
      
    </div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 tablas">
  
  <?php
  #echo "Connected successfully";
  $resultado = $conn->query("SELECT * FROM clientes inner join localidades on clientes.idLocalidad = localidades.idLocalidad inner join mascotas on clientes.idCliente = mascotas.idCliente order by clientes.nombreCliente");
   ?>            
                   
        <?php
        while ($row=mysqli_fetch_array($resultado))
        {
        ?>
        <table class="table table-warning"> 
            <tr class="tablas">
                <td>
                    <h6>Nombre Apellido</h6>
                    <?php
                        echo $row["nombreCliente"];
                    ?> 
                   
                    <?php
                   
                        echo $row["apellidoCliente"];
                    ?><br> 
                     <h6>Telefono</h6>
                    <?php
                        echo $row["telefonoCliente"];
                    ?><br>
                     <h6>Direccion</h6>
                    <?php
                        echo $row["nombreLocalidad"];
                    ?>
                    <?php
                        echo $row["calleCliente"];
                    ?>
                    <?php
                        echo $row["alturaCalleCliente"];
                    ?>
                     <?php
                        echo $row["pisoCliente"];
                    ?>
                    <?php
                        echo $row["departamentoCliente"];
                    ?> <br>  
                    <h6>Mascota</h6>
                    <?php
                        echo $row["nombreMascota"];
                    ?>       
                
                <td>
                    <input type="button" value="Editar">
                </td>
            </tr>
            </table>
        <?php
        };
        ?>      


    </div>
  </div>
</div>
</div>  
    
    
    
     <!-- JavaScript Bundle with Popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>   
    
    </body>
    </html>