<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
         session_start();

        if (!isset($_SESSION['id_user'])) {
            echo "No ha iniciado sesi&oacute;n";
            header("refresh: 3; url= index.php");   
        }else {
       
       echo" <div>
            <form name= 'form1' action='registrar_usuario.php' method='POST' >
		
		Contrase&ntilde;a (obligatorio) <input type='password' name='pass' value='' /><br/>
		Descripci&oacute;n (obligatorio) <input type='textarea' name='info' value='' /><br/>
		<input type='submit' name='guardar' value='guardar' /><br/>
            </form>
        </div>
        <a href='exito.php'>volver atr&aacute;s</a> ";
        }
                ?>
    </body>
</html>
