<?php
    include 'include/conn.php';
    $message = "";

    if (!empty($_POST['name']) && !empty($_POST['ced']) && !empty($_POST['pass'])) {
        $nombre = $_POST['name'];
        $id = $_POST['ced'];
        $contra = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        $sql = 'INSERT INTO usuarios(id, nombre, password) VALUES(?,?,?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $id, $nombre, $contra);
        if ($stmt->execute()) {
          $message = 'Nuevo usuario creado';
        } else {
          $message = 'Hubo un problema con la conexion';
        }
      }
    echo $message;  
?>