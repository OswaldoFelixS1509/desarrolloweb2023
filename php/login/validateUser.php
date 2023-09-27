<?php
    include_once("../../models/user.php");
    $user = new user();

    if( $user->login($_POST['email'], $_POST['password']) )
    {
        session_start();

        $_SESSION['loggedUser'] = $user;
        header("Location: http://localhost/desarrolloweb2023/index.php");
        die();
    }
    else
    {
        $_SESSION['message'] = 'Datos incorrectos';
        header("Location: http://localhost/desarrolloweb2023/login.php?message=false");
        die();
    }


    
