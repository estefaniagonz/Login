<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Estilos CSS */
        * {
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
            text-decoration: none;
            font-family: "Lora", serif;
        }

        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-image: url('assets/img/9307298.png');
        }

        main {
            width: 100%;
            padding: 20px;
            margin: auto;
            margin-top: 100px;
        }

        .contenedor_todo {
            width: 100%;
            max-width: 800px;
            margin: auto;
            position: relative;
        }

        .caja_trasera {
            width: 100%;
            padding: 10px 20px;
            display: flex;
            justify-content: center;
            border-radius: 20px;
            background: linear-gradient(to bottom, #79ffed, #8A2BE2);
            filter: saturate(1);
        }

        .caja_trasera div {
            margin: 100px 40px;
            color: rgb(0, 0, 0);
            font-size: 16px;
            padding-left: 0.5rem;
            transition: all 500ms;
        }

        .caja_trasera div p,
        .caja_trasera div button {
            margin-top: 28px;

        }

        .caja_trasera div h3 {
            font-weight: 400;
            font-size: 26px;
        }

        .caja_trasera button {
            padding: 10px 40px;
            border: 2px solid rgb(5, 255, 255);
            background: transparent;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            color: rgb(255, 255, 255);
            outline: none;
            transition: all 300ms;
        }

        .caja_trasera button:hover {
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
        }

        .contenedor_login_register {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 800px; /* Ajustado al valor correcto */
            position: relative;
            top: -175px;
            left: -1px;
            transition: left 500ms cubic-bezier(0.175, 0.885, 0.3220, 1.275);
        }

        .contenedor_login_register form {
            width: 25rem;
            padding: 80px 20px;
            background: rgb(255, 255, 255);
            position: absolute;
            border-radius: 20px;
        }

        .contenedor_login_register form h2 {
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;
            color: rgb(0, 0, 0);
        }

        .contenedor_login_register form input {
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            border: none;
            background: #f2f2f2;
            font-size: 16px;
            outline: none;
        }

        .contenedor_login_register form button {
            padding: 16px 40px;
            margin-top: 40px;
            border: none;
            font-size: 14px;
            background: linear-gradient(to bottom, #ff21bc, #a359e9, #8A2BE2);
            color:white;
            cursor: pointer;
        }

        .formulario__login {
            opacity: 1;
            display: block;
        }

        .formulario__register {
            display: none;
        }

     
        /* Responsiva */

        @media screen and (max-width: 850px) {
            main {
                margin-top: 60px;
            }
            .caja__trasera {
                max-width: 500px;
                height: 200px;
                flex-direction: column;
                margin: auto;
            }

            .caja__trasera div {
                margin: 0;
                position: absolute;
            }

            /* Formulario */
            .contenedor_login_register {
                top: -10px;
                left: -2px;
                margin: auto;
            }

            .contenedor_login_register form {
                position: relative;
            }
        }
    </style>
</head>
<body>
    <main>
        <div class="contenedor_todo">
            <div class="caja_trasera">
                <div class="caja_trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar a la pagina</p>
                    <button id="btn_iniciarSesion">Iniciar sesión</button>     
                </div>
                <div class="caja_trasera_register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para entrar a la pagina</p>
                    <button type="submit" id="btn_registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor_login_register">
                <form  action="php/login_usuario_be.php" class="formulario__log" method="POST">
                    <h2>Inicio de Sesión</h2>
                    <input type="text" placeholder="Correo electrónico" required name="correo">
                    <input type="password" placeholder="Contraseña" required name="contrasena">
                    <button type="submit">Iniciar sesión</button>
                </form>
                <form action="php/registro_usuario_be..php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" required name="nombre_completo">
                    <input type="correo" placeholder="Correo electrónico" required name="correo">
                    <input type="text" placeholder="Usuario"required name="usuario">
                    <input type="password" placeholder="Contraseña" required name="contrasena">
                    <button  type ="submit" id="btn_registrarse">Regístrate</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/img/js/script.js"></script>
</body>
</html>
