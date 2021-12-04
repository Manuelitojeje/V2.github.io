<?php

    $servidor = "localhost";
    $root = "root";
    $password = "";
    $base = "login";

    

    $conexion = mysqli_connect($servidor, $root, $password)or die(mysqli_error($conexion));
    mysqli_select_db($conexion, $base)or die(mysqli_error($conexion));
    /*
    if($conexion){
        echo 'Conectado a la base de datos'
    }else{
        echo 'No se ha podido conectar a la base de datos'
    }
    */

    

?>