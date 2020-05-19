<?php 
$usuario = "root";
    $password = "";   
    $servidor = "localhost";
    $basededatos ="formulario"; 

$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 

$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        
    $user=$_POST['user']; 
    $pswd=$_POST['pswd']; 
    $mail=$_POST['mail']; 

   
    $sql="INSERT INTO datos VALUES ('$user','$pswd','$mail')"; 

    $ejecutar=mysqli_query($conexion, $sql);

    if(!$ejecutar){
        echo"huvo algun error"; 
    }else{
        echo"datos guardado correctamente <br><a href='index.html'>volver</a>"; 
    }
 ?>