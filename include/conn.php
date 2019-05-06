<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursos";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn) {
        die("Error de conexion: " . mysqli_connect_error());
    }
?>