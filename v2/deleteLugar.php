<?php
require_once 'clasephp.php';
$idLugar=$_GET['idLugar'];
$objeto=new clasephp();
$sql="DELETE FROM lugar WHERE ip='".$idLugar."'";
$objeto->realizarConsultas($sql);
header('location:listUsers.php');
?>
