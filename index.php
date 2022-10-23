<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
     <!-- CSS only bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     
    
       

    <title>DogGroomer/login</title>
</head>
<body class="body">
    <header>
        <div class="container-fluid" >
            <!--navbar-->
            <nav  class="navbar navbar-expand-md">
                <div id="nav" class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img  src="img/logofondoblancomaspeque-removebg-preview.png" alt="Bootstrap" width="100" height="35">
                      </a>
                         
                </div>
    
            </nav>
    
        </div>            
    </header>
    
         <div class="login">
            <h1 class="text-center">Bienvenido</h1>
            <form id="formLogin" class="needs-validated" action="validar.php" method="post">
                <div class="form-group was-validated">
                    <label class="form-label" for="user" >Usuario</label>
                    <input name="usuario" value="" class="form-control" type="user" id="user" required>
                    <div class="invalid-feedback">
                    <p class="texto" >Por favor ingrese su usuario</p>
                    </div>
    
                </div>
                <div class="form-group was-validated">
                    <label class="form-label" for="password">Contraseña</label>
                    <input name="contraseña" value="" class="form-control" type="password" id="password" required>
                    <div class="invalid-feedback">
                        <p class="texto" >Por favor ingrese su contraseña</p>
                    </div>
    
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" id="check">
                    <label class="form-check-label" for="check"> Recuerdame</label>            
    
                </div>
                <input class="btn btn-success w-100" type="submit" value="Ingresar">
    
            </form>
    
        </div>
   

   
<!-- JavaScript Bundle with Popper bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>   



</body>
</html>