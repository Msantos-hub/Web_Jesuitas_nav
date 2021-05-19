<?php
require_once 'clasephp.php';
$idLugar=$_GET['idLugar'];//recoge del formulario el idLugar
$objeto=new clasephp();//instancia la clase
$sql="DELETE FROM lugar WHERE idLugar='".$idLugar."'"; //borra si los dos idLugar son iguales
$objeto->realizarConsultas($sql);//realiza la consulta
header('location:listUsers.php');//Vuelve a la pagina de que lista los lugares
?>
