<?php

$usa="CHESE";
$pass="TOMATO";

if (isset($_POST['login'])) {

    if($username==$usa){
        if($password==$pass){
            echo "Login exitoso!";
        }
        echo "Usuario incorrecto!";
    }
}

?>