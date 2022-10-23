<?php
$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];


include("db.php");
$consulta="SELECT*FROM usuarios where nombreUsuario='$usuario' and contraseñaUsuario='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.php");
}else{
    ?>
    <?php
    include("login.php");
    echo "<script>alert('Usted ingreso un dato incorrecto intente nuevamente');</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);