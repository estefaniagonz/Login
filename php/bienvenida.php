<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert ("Por Favor iniciar sesión");
                window.locatio= "../index.php";
            </script>        
        ';
        session_destroy ();
        die();    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex;
            flex-direction: column; 
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0;
            height: 100vh; 
        }

        img {
            width: 50%;
            height: 50%;
        }

        h1 {
            text-align: center;
            font-size: 3em;
            color: #000;
            margin-top:-10%;
        }
    </style>
</head>
<body>
    <h1>Bienvenid@</h1>
    <img src="https://i.pinimg.com/564x/93/0a/50/930a50d37a9ca9216cf65a8f5edebf60.jpg" alt="">
</body>
</html>
