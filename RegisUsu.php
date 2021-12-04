<?php

    include 'Conexionlog.php';
    


    $nombrecompleto = $_POST['nombrecompleto'];
    $email = $_POST['email'];
    $nombreusuario = $_POST['nombreusuario'];
    $contra = $_POST['contra'];
    $contra = hash('sha512', $contra);
    
    


        $query = "INSERT INTO usuarios (nombrecompleto, email, nombreusuario, contra) 
                    VALUES ('".$nombrecompleto."', '".$email."', '".$nombreusuario."', '".$contra."')";



        



        $ejecut = mysqli_query($conexion, $query);

    if($ejecut){
        echo'
            <script>
                alert("USUARIO REGISTRADO CON EXITO");
                window.location="index.php";
            </script>
        ';
    }else{
        echo'
            <script>
            alert("EL USUARIO NO SE HA PODIDO REGISTRAR INTENTALO NUEVAMENTE");
            window.location="index.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>