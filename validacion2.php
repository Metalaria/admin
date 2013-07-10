<?php

$con = new mysqli('localhost', 'root', '', 'prueba');
//recibe los datos y hace la consulta
$user = $_POST['user1'];
//echo $user;
$pass = $_POST['pass1'];
//echo $pass."<br/>";
$query = "select * from usuarios where id_user = '$user'";

$queUser = mysqli_query( $con,"select id_user from usuarios where password = '$pass'");

$fila = mysqli_fetch_assoc($queUser);
//print_r($fila['password']);
//echo "<br/>";
$contra = $fila['id_user'];
//echo $contra."<br/>";
if ($user === $contra) {
    //echo 'CORRECTO!';
    header('location:exito.php');
} else {
    echo "<br/>"."usuario  o contrase&ntilde;a incorrecta  <br/>";
    echo "Redirigiendo a la p&aacute;gina principal ...<br/>";
    //header('refresh: 3; url= index.php');
}

session_start();
if (!isset($_SESSION['id_user'])) {
    $_SESSION['id_user'] = $_POST['user1']; 
}
?>
