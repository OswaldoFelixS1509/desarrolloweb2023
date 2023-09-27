<!DOCTYPE html>
<html lang="es">
    <?php
        include "layout/index_head.inc";
        include_once("models/user.php");
        session_start();
        print_r($_SESSION['loggedUser']->getNombre()) ;
    ?>
    <body>
        <header class="header">
        <div class="profilePicture">
                <img src="images/person_icon.png" class="pfp" alt="">
            </div>
            <div class="username">
                usuario
            </div>
            <div class="welcomeLabel">
                <div class="welcome">
                
                    <h1>
                        
                        BIENVENIDO
                    </h1>
                </div>
                
            </div>
        </header>
        
      </body>
</html>