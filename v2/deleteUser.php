<?php
    require 'Operaciones.php';
    $ip=$_GET['ip'];//recoge del formulario el idLugar
    $objeto=new operaciones();//instancia la clase
    $sql="DELETE FROM maquina WHERE ip='".$ip."'";//borra si los dos idLugar son iguales
    $objeto->realizarConsultas($sql);//realiza la consulta
    //confirmacion de borrado
    header('location:listUsers.php');//Vuelve a la pagina de que lista los lugares
?>