<?php
    session_start();
    include_once "include/conn.php";
    if (isset($_SESSION['user_id'])) {
        header('Location: dash.php');
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
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m8">
                    <div class="card">
                        <ul class="tabs">
                            <li class="tab col s6"><a href="#Login">Entrar</a></li>
                            <li class="tab col s6"><a href="#Register">Registrar</a></li>
                        </ul>
                        <div id="Login" class="card-content">
                            <form action="" id="login">
                                <span class="card-title margen">Login</span>
                                <div class="input-field">
                                    <input id="log-cedula" type="text" name="log-id">
                                    <label for="cedula">Cedula</label>
                                </div>
                                <div class="input-field">
                                    <input id="log-password" type="password" name="log-pass">
                                    <label for="password">Contraseña</label>
                                </div>
                                <div class="input-field center-align">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Ingresar</button>
                                </div>
                            </form>
                        </div>
                        <div id="Register" class="card-content">
                            <form action="" id="register">
                                <span class="card-title margen">Registro</span>
                                <div class="input-field">
                                        <input id="reg-nombre" type="text" name="reg-name">
                                        <label for="nombre">Nombre</label>
                                </div>
                                <div class="input-field">
                                        <input id="reg-cedula" type="text" name="reg-id">
                                        <label for="nombre">Cedula</label>
                                </div>
                                <div class="input-field">
                                        <input id="reg-password" type="password" name="reg-pass">
                                        <label for="password">Contraseña</label>
                                </div>
                                <div class="input-field center-align">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Demo user</span>
                            <p>Cedula: 3</p>
                            <p>Contraseña: 123</p>
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