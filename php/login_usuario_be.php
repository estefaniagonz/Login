<?php
    session_start();

    include 'conexion_be.php';

    $correo=$_POST['correo'];
    $contrasena=$_POST ['contrasena'];

    $validar_login=mysqli_query($conexion,"SELECT * FROM registrarse WHERE correo='$correo'
    and contraseña='$contrasena' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario']= $correo;
        header("Location: ../php/bienvenida.php");
        exit;
        
    }else{
        echo'
        <script>
            alert ("Usuario no encontrado por favor verifique los datos introduccidos");
            window.location="../index.php";
        </script>
        ';
    }

?>