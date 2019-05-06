<?php
    session_start();
    include 'include/conn.php';
    
    if (!empty($_POST['ced']) && !empty($_POST['pass']) ) {
        $id = $_POST['ced'];
        $contra = $_POST['pass'];

        $result = mysqli_query($conn, 'SELECT id, nombre, password FROM usuarios WHERE id = '.$id.'');
        $results = mysqli_fetch_assoc($result);

        $message = '';
        if (count($results) > 0 && password_verify($contra, $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            $sesion = $_SESSION['user_id'];
            echo "redir";
        } else {
            $message = 'Datos incorrectos';
        }
    }
?>