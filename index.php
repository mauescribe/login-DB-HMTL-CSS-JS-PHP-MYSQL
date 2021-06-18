
<?php?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
   
    

</head>

<body>
    <script src="log.js"></script>
    <div id="caca">
        <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
        </img>
    </div>
    <div id="container">
        <h1>Log In</h1>
        <span class="close-btn">
            <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
        </span>

        <form>
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="contraseña" placeholder="Password">
            <input class="a" type="submit" value="Ingresar">
            <div id="remember-container">
                <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked" />
                <span id="remember">Remember me</span>
                <span id="forgotten">Forgotten password</span>
            </div>
        </form>
    </div>

    <!-- CONTENEDOR DE CONTRA -->
    <div id="forgotten-container">
        <h1>Forgotten</h1>
        <span class="close-btn">
            <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
        </span>

        <form>
            <input type="usuario" name="usuario" placeholder="E-mail">
            <a href="#" class="orange-btn">Get new password</a>
        </form>
    </div>
   

    <script src='jquery.js'></script>
    <script src="log.js"></script>






</body>

</html>
