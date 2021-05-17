<?php
    require_once 'clasephp.php';
    $ip=$_GET['ip'];
    $objeto=new clasephp();
    $sql="DELETE FROM maquina WHERE ip='".$ip."'";
    $objeto->realizarConsultas($sql);
    header('location:listUsers.php');
?>