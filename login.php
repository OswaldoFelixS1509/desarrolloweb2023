<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="css/layout.css" rel="stylesheet" />
        <link href="css/login.css" rel="stylesheet" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="js/app.js"> </script>
        <script src="js/jquery-3.7.1.js"> </script>
    </head>
    <body>
       <div>
            <div class="icon-login">
                <img class="big-profile" src="images/person_image.png">
            </div>
            <div class="Login-Square">
                <form action="./php/login/validateUser.php" method="POST">
                    <input type="email" id="email" name="email" class="login" placeholder="Insertar usuario">
                    <input type="password" id="password" name="password" class="login" placeholder="Insertar contraseña">
                    <input type="submit" class="button-login" value="Iniciar sesión">
                </form>
            </div>
       </div>
        
       
       <script>
        $( document ).ready(function() {
            console.log( "ready!" );
            <?php 
                
                if (isset($_GET['message'])) {
                    ?>
                        alert("El correo o contraseña son incorrectos.")
                        console.log("text");
                    <?php 
                }
            ?>
        });
            
       </script>
    </body>
</html>