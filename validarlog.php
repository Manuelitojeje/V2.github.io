<?php
    session_start();
    include 'Conexionlog.php';

    
    $email = $_POST['email'];
    $contra = $_POST['contra'];
    $contra = hash('sha512', $contra);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' and contra='$contra'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $email;
        header("location: PaginadeInicio.php");
        exit;
    }else{
        echo'
            <script>
                alert("EL USUARIO NO SE HA ENCONTRADO VUELVE A INTENTARLO");
                window.location="index.php";
            </script>
        '; exit;
    }

    

?>
