<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- CSS only bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="styles.css">
       

    <title>DogGroomer/login</title>
</head>
<body>
    <header>
        <div class="container-fluid" >
            <!--navbar-->
            <nav  class="navbar navbar-expand-md  ">
                <div id="nav" class="container-fluid ">
                    <a class="navbar-brand" href="#">
                        <img  src="img/logofondoblancomaspeque-removebg-preview.png" alt="Bootstrap" width="100" height="35">
                      </a>
                         
                </div>
    
            </nav>
    
        </div>            
    </header>
    
         <div class="login">
            <h1 class="text-center">Bienvenido</h1>
            <form class="needs-validated">
                <div class="form-group was-validated">
                    <label class="form-label" for="user">Usuario</label>
                    <input class="form-control" type="user" id="user" required>
                    <div class="invalid-feedback">
                        Por favor ingrese su Usuario
                    </div>
    
                </div>
                <div class="form-group was-validated">
                    <label class="form-label" for="password">Contraseña</label>
                    <input class="form-control" type="password" id="password" required>
                    <div class="invalid-feedback">
                        Por favor ingrese su contraseña
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="codigo.js" ></script>


</body>
</html>