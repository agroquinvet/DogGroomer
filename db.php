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