<?php
    require_once 'operaciones.php';
    $ip=$_GET['ip'];
    $objeto=new operaciones();
    $sql="DELETE FROM maquina WHERE ip='".$ip."'";
    $objeto->realizarConsultas($sql);
    header('location:listUsers.php');
?>