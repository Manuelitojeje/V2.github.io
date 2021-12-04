<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'<script>
        alert("DEBES INICIAR SESION PARA PODER INGRESAR");
        window.location="index.php";
        </script>';
        session_destroy();
        die();
    
     }
?>


<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="PaginadeInicio.css" rel="stylesheet">
        <title>Página de Inicio</title>

    </head>

    <body>

            
                <div>

                    <header>
                        <img id="lo" src="logo.jpg" >
                        <h1 class="Titulo">POLIFORO</h1>
                    </header>

                </div>
                
            
    
        
    
                <div id="menu">
                     <ul class="tem">
                        <li><a href="">JS</a>
                            <ul>
                                <li> <a href="./comentarios/JS1.php">¿Cómo cambiar de color con JS?</a></li>
                                <li> <a href="./comentarios/JS2.php">¿Cómo guardar una variable?</a></li>
                                <li> <a href="./comentarios/JS3.php">Tipos de variables que existen</a></li>
                                <li> <a href="./comentarios/JS4.php">¿Cuáles son los operadores de JS?</a></li>

                            </ul>
                        </li>
                        <li><a href="">PHP</a>
                            <ul>
                                <li> <a href="./comentarios/PHP1.php">¿Cómo conectar a una base de datos?</a></li>
                                <li> <a href="./comentarios/PHP2.php">¿Cómo encriptar contraseñas?</a></li>
                                <li> <a href="./comentarios/PHP3.php">¿Cómo conectar formularios a una base de datos?</a></li>
                                <li> <a href="./comentarios/PHP4.php">¿Cómo validar un login?</a></li>
                            </ul>
                        </li>
                        <li><a href="">CSS</a>
                            <ul>
                                <li> <a href=".comentarios/CSS1.php">Consejos de aplicación de CSS</a></li>
                                <li> <a href="./comentarios/CSS2.php">¿Cómo se escribe una regla de CSS?</a></li>
                                <li> <a href="./comentarios/CSS3.php">Principales propiedades de CSS</a></li>
                                <li> <a href="./comentarios/CSS4.php">Funciones de Background primordiales</a></li>
                            </ul>
                        </li>
                        <li><a href="">HTML</a> 
                            <ul>
                                <li> <a href="./comentarios/HTML1.php">Etiquetas básicas de HTML</a></li>
                                <li> <a href="./comentarios/HTML2.php">Consejos de Maquetación</a></li>
                                <li> <a href="./comentarios/HTML3.php">¿Cómo generar hipervínculos?</a></li>
                                <li> <a href="./comentarios/HTML4.php">Utilización de imagenes en HTML</a></li>
                            </ul>
                        </li>
                        </li>
                            <li><a href="cerrar.php">Cerrar Sesión</a> 
                            </li>
                    </ul>
                </div>
                
                
                

            
            <div>
            <div id="decor">
                    <h2>BIENVENIDOS A POLIFORO</h2>
                    <br><br>
                    <p>En este foro encontrarás las distintas soluciones a tus problemas en el ámbito de la programación, con la ayuda de más alumnos de la comunidad de la Escuela politécnica de Guadalajara, es un foro creado por y para alumnos solo de esta institución ya que los contenidos en el ámbito de la programación son similares.</p>
                    <br><br>
                </div>
            </div>
                
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            
        

                
        
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