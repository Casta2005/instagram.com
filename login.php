<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
        }

        .loading-screen {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            z-index: 9999;
        }

        .loading-screen img {
            width: 200px;
        }

        .container {
            max-width: 350px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            margin-top: 80px;
            visibility: hidden;
        }


        .container.show {
            visibility: visible;
        }



        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 200px;
        }

        .form-group {
            text-align: center;
            margin-bottom: 15px;
        }


        .form-group input {
            justify-content: center;
            width: 92%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
        }

        .form-group input[type="submit"] {
            text-align: center;
            background-color: rgb(0, 149, 246);
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 7px;
        }

        .o {
            text-align: center;
        }

        .o h1 {
            color: rgb(148, 144, 144);
        }

        .facebook {
            text-align: center;
            color: white;
        }

        .facebook img {
            cursor: pointer;
            height: 18px;
            width: 18px;
        }

        .facebook a {
            cursor: pointer;
            text-decoration: none;

        }

        .olvidaste {
            text-align: center;
        }

        .olvidaste a {
            text-decoration: none;
            color: rgb(0, 149, 246);
        }

        .Registro {
            text-align: center;
        }

        .Registro a {
            text-decoration: none;
            font-size: 15px;
            color: rgb(0, 149, 246);
            ;
        }

        .Registro h1 {
            text-decoration: none;
            font-size: 15px;
            color: rgb(148, 144, 144);
        }



        .boton {
            cursor: pointer;
            height: 30px;
            border: none;
            background-color: rgb(0, 149, 246);
            border-radius: 5px;
        }

        .carga {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
    </style>

    <script>
        setTimeout(function () {
            document.getElementById("loading-screen").style.display = "none";
            document.getElementById("container").classList.add("show");
        }, 1200);
    </script>
</head>

<body>
    <div class="carga" id="loading-screen">
        <img src="./carga.png" alt="Loading Image">


    </div>


    <div class="container" id="container">
        <div class="logo">
            <img src="./Instagram_logo.svg.png" alt="Instagram Logo">
        </div>
        <form method="POST">
            <div class="facebook">
                <button class="boton">
                    <img src="./icons8-facebook-120.png" alt=""> <a class="facebook" href="./login.php">Continuar
                        con Facebook</a>
                </button>
            </div>
            <br>
            <hr>
            <br>
            <div class="form-group">
                <input type="text" id="username" placeholder="Teléfono, usuario o correo electrónico" name="correo">
            </div>
            <div class="form-group">
                <input type="password" id="password" placeholder="contraseña" name="password">
            </div>
            <div class="olvidaste">
                <a href="./login.php">¿Has olvidado la contraseña?</a>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" value="Entrar" name="register">
            </div>
            <div class="Registro">
                <h1>¿No tienes una cuenta? <a href="./login.php"> Regístrate </a></h1>
            </div>
        </form>
        <?php
        include("registro.php");
        ?>
    </div>
</body>

</html>