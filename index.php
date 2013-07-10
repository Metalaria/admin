<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>login</title>
    </head>
    <body>
         <div>
             
            <a href="index.php?opc=1">Conectarse</a><br/>
            
         </div>
        <?php
            
         if (isset($_GET['opc']) and ($_GET['opc']==1)){
            echo "<form name= 'form2' action='validacion2.php' method='POST' >
                    Usuario: <input type='text' name='user1' id= 'user1' /> 
                    <br/>
                    Contrase&ntilde;a: <input type='password' name='pass1' id= 'pass1' />
                    <br/>
                    <input type='submit' name='ok' value='OK' />
              </form>  ";
         }
        
	 ?>
        
    </body>
</html>
