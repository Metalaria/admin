<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    echo "No ha iniciado sesi&oacute;n";
    header("refresh: 3; url= index.php");   
} else {
    $con = new mysqli('localhost', 'root', '', 'prueba');
$busqueda =""; 
$busqueda=$_POST['busqueda'] ;
$all="";
$all =$_POST['todos'] ;
//$all =$_POST['borrar_todos'] ;
// funcion para convertir el contenido de un array en un string
function makestring($array)
  {
  $outval = '';
  if (is_array($array)) {
   foreach($array as $key=>$value)
    {
    if(is_array($value))
      {
      $outval = makestring($value);
      }
    else
      {
      $outval = $value;
      }
    }
}
  
  return $outval;
  }

if ($busqueda!=""){
    $busca = mysqli_query($con, " SELECT id_user FROM usuarios WHERE
        id_user LIKE '%$busqueda%'");
    echo "<form action='borrar.php' method='post' enctype='multipart/form-data'>";
    while ($array= mysqli_fetch_array($busca)){
        $user=makestring($array);
            echo"Usuario: <input type='checkbox' name='borrar_usuario[]' value='$user' />$user<br/>";
    }
    echo " <input type='submit' name='boton' value='eliminar' />";
     
   echo "</form>";
}elseif ($all!=""){
    
    $busca = mysqli_query($con, "select id_user from usuarios ");
    echo "<form action='borrar.php' method='post' enctype='multipart/form-data'>";
    while ($f =  mysqli_fetch_array($busca)){
        $user=makestring($f);
        echo "Usuario: <input type='checkbox' name='borrar_usuario[]' value='$user' />$user<br/>";
    }
    echo " <input type='submit' name='boton' value='eliminar' />";
    echo "</form>";
}
else {
    echo "No ha itroducido nada para buscar";
    header('refresh: 3; url= exito.php');
} 
}


?>
