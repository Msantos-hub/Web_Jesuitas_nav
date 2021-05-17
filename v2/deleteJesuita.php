<?php
require_once 'clasephp.php';
$idJesuita=$_GET['idJesuita'];
$objeto=new clasephp();
$sql="DELETE FROM jesuita WHERE ip='".$idJesuita."'";
$objeto->realizarConsultas($sql);
header('location:listUsers.php');
?>
