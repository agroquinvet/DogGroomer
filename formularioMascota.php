<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
        <!-- CSS only bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head> 
    <body id="body">
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
    <div class="col-md-6 offset-md-3">
          <form  id="contenedorCliente"class="row mb-3" method="POST"> 
          <h2>Registrar Mascota</h2> 
          <div class="col-md-6">
                <label for="Cliente" class="col-form-label">Propietario</label>
                                <select name = "porpietario"class="form-select form-select-sm" aria-label="Ejemplo de .form-select-sm">
                                   <option selected>Seleccione el propietario</option>
                                   <?php
                                     #echo "Connected successfully" conexion con la base para traer localidades;
                                    $resultado =$conn->query("SELECT * FROM clientes order by nombreCliente");
                                   ?>                                    
                                   <?php foreach ($resultado as $clientes){ ?>

                                    <option value="<?php echo$clientes["idCliente"]?>"><?php echo $clientes["nombreCliente"] ." " . $clientes["apellidoCliente"] ?></option>
                                  <?php } ?>
                                </select>
                </div>
                <div class="col-md-6">
                     <label for="nombre" class="form-label">Nombre</label>
                     <input type="text" class="form-control" id="nombreCliente" name="nombreM">
                </div>
                <div class="col-md-6">
                     <label for="fecha" class="form-label">fecha de nacimiento</label>
                     <input type="date" class="form-control" id="fechaNacimiento" name="fechaM">
                </div>                   
                
                <div class="col-md-6">
                <label for="raza" class="col-form-label">Raza</label>
                                <select name = "razaM"class="form-select form-select-sm" aria-label="Ejemplo de .form-select-sm">
                                   <option selected>Seleccionar Raza</option>
                                   <?php
                                     #echo "Connected successfully" conexion con la base para traer localidades;
                                    $resultado =$conn->query("SELECT * FROM razas order by nombreRaza");
                                   ?>                                    
                                   <?php foreach ($resultado as $razas){ ?>

                                    <option value="<?php echo$razas["idRaza"]?>"><?php echo $razas["nombreRaza"] ?></option>
                                  <?php } ?>
                                </select>
                </div>
                <div class="col-md-4">
                    <label for="sexo" class="form-label">Sexo</label>
                    <input type="text" class="form-control" id="sexo" name="sexoM">
                </div>
                
                <div class="col-12">
                    
                </div>
                <div class="col-12">
                    <button type="submit" name="Enviar" class="btn bg-warning">Guardar</button>
                </div>
                <?php
                        
                        #no envia nada no hace nada 
                        if(isset($_POST["enviar"])){
                            if(($_POST["nombreM"])>=1 && 
                            ($_POST["propietario"])>=1 && 
                            ($_POST["fechaM"])>=1 && 
                            ($_POST["razaM"])>=1 && 
                            ($_POST["sexoM"])>=1){
                                $nombreM = ($_POST["nombreM"]);
                                $cliente= ($_POST["propietario"]);           
                                $fechaM = ($_POST["fechaM"]);
                                $razaM = ($_POST["razaM"]);
                                $sexoM = ($_POST["sexoM"]);                                
                                $consulta = "INSERT INTO mascotas (idRaza,idCliente,nombreMascota,fechaNacimientoMascota,sexoMascota) value ($razaM,$propietario,'$nombreM',$fechaM,'$sexoM')";
                                $resultado = mysqli_query($conn, $consulta);
                                if($resultado){
                                    
                                    ?>
                                    <h3 class="guardadoOk">se agrego la mascota con exito </h3>
                                    
                                    <?php 
                                    }else{
                                            ?>
                                            <h3 class="bad">no se pudo guardar la mascota intente nuevamente</h3>
                                            <?php 
                                    }
                            } else{
                                ?>
                                <h3 class="bad">por favor complete todos los campos</h3>
                                <?php
                            }

                        }  ?>  
        </form>
        </div>










         <!-- JavaScript Bundle with Popper bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>   
</body>
</html>