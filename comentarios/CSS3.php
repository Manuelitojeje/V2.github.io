<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'<script>
        alert("DEBES INICIAR SESION PARA PODER INGRESAR");
        window.location="../index.php";
        </script>';
        session_destroy();
        die();
    
     }
?>
<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Foro</title>
        <link href="comen.css" rel="stylesheet" >
        <meta charset="UTF-8"/>
    </head>

    <body>


        <header>
            <div>
            <img id="lo" src="logo.jpg" >
            </div>

            <div>
            <h1 class="Titulo">POLIFORO</h1>
            </div>
            
            
            
        </header>

        
           

        <br>
                

               
    
        
    
        <div id="menu">
                    <ul class="tem">
                        <li><a href="">JS</a>
                            <ul>
                                <li> <a href="JS1.php">¿Cómo cambiar de color con JS?</a></li>
                                <li> <a href="JS2.php">¿Cómo guardar una variable?</a></li>
                                <li> <a href="JS3.php">Tipos de variables que existen</a></li>
                                <li> <a href="JS4.php">¿Cuáles son los operadores de JS?</a></li>

                            </ul>
                        </li>
                        <li><a href="">PHP</a>
                            <ul>
                                <li> <a href="PHP1.php">¿Cómo conectar a una base de datos?</a></li>
                                <li> <a href="PHP2.php">¿Cómo encriptar contraseñas?</a></li>
                                <li> <a href="PHP3.php">¿Cómo conectar formularios a una base de datos?</a></li>
                                <li> <a href="PHP4.php">¿Cómo validar un login?</a></li>
                            </ul>
                        </li>
                        <li><a href="">CSS</a>
                            <ul>
                                <li> <a href="CSS1.php">Consejos de aplicación de CSS</a></li>
                                <li> <a href="CSS2.php">¿Cómo se escribe una regla de CSS?</a></li>
                                
                                <li> <a href="CSS4.php">Funciones de Background primordiales</a></li>
                            </ul>
                        </li>
                        <li><a href="">HTML</a> 
                            <ul>
                                <li> <a href="HTML1.php">Etiquetas básicas de HTML</a></li>
                                <li> <a href="HTML2.php">Consejos de Maquetación</a></li>
                                <li> <a href="HTML3.php">¿Cómo generar hipervínculos?</a></li>
                                <li> <a href="HTML4.php">Utilización de imágenes en HTML</a></li>
                            </ul>
                        </li>
                        </li>
                            <li><a href="../PaginadeInicio.php">Página de Inicio</a> 
                            </li>
                    </ul>
        </div>
                
                
        <div id="pg">
            <h2>Principales propiedades de CSS</h2>
        </div>
            
        
            
        <div>

            <?php
                    $consulta1 = mysqli_query($conexion, "SELECT * FROM css3")or die(mysqli_error($conexion));
                    while($row = mysqli_fetch_assoc($consulta1)){
                        echo " <div class='css3'> " .$row['autor']." <br><br>
                        ".$row['titulo']."<br><br>
                        ".$row['comentario']."
                        
                        </div>";
                    }
            ?>
<br><br>
        </div>            

            <div id="cm" >
                <center><form action="" method="POST" >
                    <br><br><br>
                <h4>Para añadir una respuesta llena los siguientes campos</h4>
                <input id="a" type="text" name="autor" placeholder="Introduce tu Nombre Completo">
                <input id="t" type="text" name="titulo" placeholder="Titulo"><br><br>
                <input id="c" type="text" name="comentario" placeholder="Tu Comentario"><br><br>
                <input id="bb" type="submit" name="enviar" placeholder="Enviar Comentario">
                </form></center>
                <br><br><br>
            </div>

            

            <div>


                <?php

                    if(isset($_POST['enviar'])){
                        
                        
                        $autor = utf8_decode(mysqli_real_escape_string($conexion, $_POST['autor']));
                        $titulo = utf8_decode(mysqli_real_escape_string($conexion, $_POST['titulo']));
                        $comentario = utf8_decode(mysqli_real_escape_string($conexion, $_POST['comentario']));
                        if($autor == '' or $titulo == '' or $comentario  == ''){
                            
                            echo '<script>
                            alert("POR FAVOR LLENE TODOS LOS CAMPOS");
                            window.location="CSS3.php";
                        </script>';
                        }
                        else{
                            $insertar = mysqli_query($conexion, "INSERT INTO css3(autor, titulo, comentario) VALUES ('".$autor."', '".$titulo."', '".$comentario."')")or die(mysqli_error($conexion));
                            echo '<script>
                            alert("EL COMENTARIO SE INTRODUJO CON EXITO");
                            window.location="CSS3.php";
                        </script>';
                        }
                    }

                ?>


            </div>


        <div class="container-footer">
                
                <footer>
                    <div class="logo-footer">
                        <img src="logo.jpg" alt=""> 
                    </div>

                    <div class="redes-footer">
                        <pre class="i"><a href="https://www.instagram.com/mindloss__/"><img src="https://anthoncode.com/wp-content/uploads/2019/07/logo-instagra-png-transparent.png"></a>Espinosa Esparza Erika Jocelyn</pre>
                        <pre class="i"><a href="https://www.instagram.com/jocelynosae/?hl=es"><img src="https://anthoncode.com/wp-content/uploads/2019/07/logo-instagra-png-transparent.png"></a>Sanchez Rocha Alan Enrique</pre>
                        <pre class="i"><a href="https://www.instagram.com/angelabrahampadrontorres/?hl=es"><img src="https://anthoncode.com/wp-content/uploads/2019/07/logo-instagra-png-transparent.png"></a>Padron Torres Angel Abraham</pre>
                        <pre class="i"><a href="https://www.instagram.com/joseromero7795/?hl=es"><img src="https://anthoncode.com/wp-content/uploads/2019/07/logo-instagra-png-transparent.png"></a>Romero Quintero José Manuel</pre>                        
                        <pre class="i"><a href="https://instagram.com/omar_barajas12?utm_medium=copy_link"><img src="https://anthoncode.com/wp-content/uploads/2019/07/logo-instagra-png-transparent.png"></a>Barajas Avila Cesar Omar</pre>


                    </div>

                    <hr>
                    <h3>@Derechos Reservados  Grupo F</h3>
                    
                </footer>

        </div>
                

                

    </body>

</html>
