<?php

session_start();
if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        } else{
//se destruye la sesion actual
session_unset();
session_destroy();
//me redirecciono a index
header("location:index.php");
        }
?>
