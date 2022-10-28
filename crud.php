<?php
     define('_HOST_NAME','localhost');
     define('_DATABASE_USER_NAME','root');
     define('_DATABASE_PASSWORD','');
     define('_DATABASE_NAME','cafeteria');
     $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
  
     if($MySQLiconn->connect_errno)
     {
       die("ERROR := ".$MySQLiconn->connect_error);
     }
 //hacemos un llamado al formulario registro
 $Nombre = $_POST["NOMBRE"];
 $Contraseña = $_POST["CONTRASEÑA"];
 $Telefono = $_POST["TELEFONO"];
 $Correo = $_POST["CORREO"];
//verificamos la conexion a la base de datos
//insertamos datos de registro al mysql wamp, indicando nombre de la tabla y sus atributos
$instruccion_SQL = "INSERT INTO cliente (Nombre,Contraseña,Telefono,Correo) VALUES('$Nombre','$Contraseña','$Telefono', '$Correo')";
echo "$instruccion_SQL";
$resultado =  $MySQLiconn->query($instruccion_SQL);
if (!$resultado) {
    echo $MySQLiconn->error;
  }
  header("Location:RegistroUsuario.html");

?>