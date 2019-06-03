<?php
  session_start();
  require 'include/conn.php';
  require 'include/session.php';
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
                    <li><a href="logout.php">Salir</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="logout.php">Salir</a></li>
        </ul>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m9">
                    <div class="card">
                        <div class="card-content">
                            <?php 
                            include_once 'include/table.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include_once 'include/scripts.php'
    ?>
</body>
</html>