<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: PaginadeInicio.php");
    
     }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLIFORO</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="IS.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes cuenta?</h3>
                        <p>Inicia sesión para ingresar a POLIFORO</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas entrar a POLIFORO</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="validarlog.php" method="POST" class="formulario__login">

                        <h1>POLIFORO</h1>
                        
                        <br>
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="email">
                        <input type="password" placeholder="Contraseña" name="contra">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="RegisUsu.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" minlenght="7" required name="nombrecompleto">
                        <input type="text" placeholder="Correo Electronico" name="email">
                        <input type="text" placeholder="Usuario" name="nombreusuario">
                        <input type="password" placeholder="Contraseña" name="contra">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="IS.js"></script>
</body>
</html>