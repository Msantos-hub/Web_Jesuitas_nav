<?php
include 'clasephp.php';
$idLugar=$_GET['idLugar'];
$objeto=new clasephp();
$sql="SELECT * FROM Lugar WHERE idLugar='".$idLugar."'";
$objeto->realizarConsultas($sql);
while($fila=$objeto->extraerFilas()){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit Lugar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="general">
    <div>
        <form method="post">
            <label>IdLugar</label>
            <input type="text" name="idLugar" value=" <?php echo $fila['idLugar']?>"><br><br>
            <label>nombreAlumno</label>
            <input type="text" name="nombre" value=" <?php echo $fila['nombre']?>"><br><hr>
            <input type="submit" value="Agregar usuario">
            <a href="listUsers.phpl">
        </form>
        <?php
        }
        ?>
    </div>
    <?php
    $objeto=new clasephp();
    $idLugar2=$_POST["idLugar"];
    $nombre=$_POST["nombre"];
    if($idLugar2 != NULL && $nombre != NULL){
        $sql2="UPDATE maquina set (idLugar,nombre) VALUES ('".$idLugar2.",".$nombre."')";
        $objeto->realizarConsultas($sql2);
        if($idLugar2 =1){
            header("location:listUsers.php");
        }
    }
    ?>
</div>
</body>
</html>


