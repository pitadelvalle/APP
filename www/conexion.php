<?php
$host ="localhost";
$user ="root";
$pw = "portgasdace";
$db = "registro1";

$conn = mysql_connect($host,$user,$pw,$db);
if(!$conn){
    echo 'Error al conectar a la base de datos';
}
else{
    echo 'Conectado a la base de datos';
}
?>