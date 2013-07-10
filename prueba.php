<?php
session_start();
if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        }else {
$con = new mysqli('localhost', 'root', '', 'prueba');

function create_user($var){
$prefix = "U";
$var = substr($var, -5);
(int)$var++;

for($i = 0; $i <= 5- strlen((String)$var); $i++) {
$prefix .= '0';
}

$prefix.=$var;

return $prefix;
}
function validar_clave($clave,&$error_clave){
   if(strlen($clave) < 6){
      $error_clave = "La clave debe tener al menos 6 caracteres";
      return false;
   }
   if(strlen($clave) > 16){
      $error_clave = "La clave no puede tener más de 16 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$clave)){
      $error_clave = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   $error_clave = "";
   return true;
}

$con = new mysqli('localhost', 'root', 'app.Root', 'prueba');
$contrasenna=$_POST['pass'] ;
$info=$_POST['info'];

$execute = mysqli_query($con, "select id_user from usuarios
    WHERE id_user=(SELECT MAX(id_user) FROM usuarios)");
$row = mysqli_fetch_array($execute);
$var1 = $row['id_user'];
$userid=create_user($var1);

$date= mysqli_query($con, "SELECT now()");
$row4 = mysqli_fetch_array($date);
$fecha=$row4['now()'];


mysqli_query($con, "insert into usuarios (password, descripcion, id_user,
    creacion) 
    values ('$contrasenna', '$info', '$userid','$fecha' )");
return true;



}
header('location: exito.php');
        
?>
