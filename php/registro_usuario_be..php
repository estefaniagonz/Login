<?php
    include 'conexion_be.php';
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST["contrasena"];
    $contrasena_encriptada = hash('sha512', $contrasena);

    // Verificar que los datos no se repitan del correo
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM registrarse WHERE correo ='$correo' ");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
            alert("El correo electrónico ingresado ya está registrado en nuestro sistema. Por favor, intenta con otro correo electrónico.");
            window.location="../index.php";
            </script>    
        ';
        exit();
    }

    // Verificar que los datos no se repitan del usuario 
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM registrarse WHERE usuario ='$usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
            alert("El usuario ingresado ya está en uso. Por favor, elige otro usuario.");
            window.location="../index.php";
            </script>    
        ';
        exit();
    }

    $query = "INSERT INTO registrarse (nombre_completo, correo, usuario, contraseña) VALUES ('$nombre_completo','$correo','$usuario','$contrasena_encriptada')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("Registro Exitoso");
            window.location="../index.php";
        </script>
        ';
    }else{
        echo'
        <script>
        alert("Intento fallido, intentelo de nuevo");
        window.location="../index.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>
