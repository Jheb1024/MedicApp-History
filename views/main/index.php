<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php require 'views/header.php' ?>

   <div id="main">
       <h1 class="center">Bienvenido a MedicApp-History la aplicación web de los médicos</h1>
   </div>
    <div id="login">
        <form action="" method="POST">
            <?php 
                if(isset($error_login)){
                    echo $error_login;
                }
            ?>
            <ul>
                <li>
                    <label for="user_name">Usuario:</label>
                    <input type="text" id="user_name" name="user_name">
                </li>
                <li>
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password">
                </li>
                <li class="button">
                    <button type="submit">Iniciar Sesión</button>
                </li>
            </ul>
        </form>
   </div>

   <?php require 'views/footer.php' ?>


</body>
</html>