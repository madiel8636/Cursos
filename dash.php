<?php
  session_start();
  require 'include/conn.php';
  if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
    $result = mysqli_query($conn, 'SELECT * FROM usuarios WHERE id = '.$id.'');
    $results = mysqli_fetch_assoc($result);
    $user = null;
    if (count($results) > 0) {
      $user = $results;
    }
  } else {
    header('Location: /cursos');
  }
?>
<!DOCTYPE html>
<html lang="en">
<?php
        include_once "include/head.php";
?>
<body class="blue-grey darken-3">
    <header>
        <nav>
            <div class="nav-wrapper light-blue darken-2">
                <a href="#!" class="brand-logo center">Cursos</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="fas fa-bars"></i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    
                    <?php if($user['tipo'] === "Administrador"): ?>
                    <li><a href="adminarea.php">Admin</a></li>
                    <?php endif; ?>
                    <?php if($user['tipo'] === "Profesor" || $user['tipo'] === "Administrador"): ?>
                    <li><a href="profesores.php">Profesores</a></li>
                    <?php endif; ?>
                    <li><a href="logout.php">Salir</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <?php if($user['tipo'] === "Administrador"): ?>
            <li><a href="adminarea.php">Admin</a></li>
            <?php endif; ?>
            <?php if($user['tipo'] === "Profesor" || $user['tipo'] === "Administrador"): ?>
                    <li><a href="profesores.php">Profesores</a></li>
                    <?php endif; ?>
            <li><a href="logout.php">Salir</a></li>
        </ul>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">

            </div>
            </div>
        </div>
    </main>
    <?php
    include_once 'include/scripts.php'
    ?>
</body>
</html>