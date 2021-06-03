<?php
require_once 'Operaciones.php';
$idJesuita=$_GET['idJesuita'];
$objeto=new operaciones();
$sql="DELETE FROM jesuita WHERE ip='".$idJesuita."'";
$objeto->realizarConsultas($sql);
header('location:listUsers.php');
?>
