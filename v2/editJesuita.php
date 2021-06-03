<?php
include 'Operaciones.php';
$idJesuita=$_GET['idJesuita'];
$objeto=new operaciones();
$sql="SELECT * FROM Jesuita WHERE idJesuita='".$idJesuita."'";
$objeto->realizarConsultas($sql);
while($fila=$objeto->extraerFilas()){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit Jesuita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="general">
    <div>
        <form method="post">
            <label>idJesuita</label>
            <input type="text" name="ip" value=" <?php echo $fila['idJesuita']?>"><br><br>
            <label>nombreAlumno</label>
            <input type="text" name="nombre" value=" <?php echo $fila['nombre']?>"><br><br>
            <label>Nombre</label>
            <input type="text" name="Firma" value=" <?php echo $fila['Firma']?>"><br><hr>
            <input type="submit" value="Agregar Jesuita">
            <a href="listJesuita.php">Volver</a>
        </form>
        <?php
        }
        ?>
    </div>
    <?php
    $objeto=new operaciones();
    $idJesuita2=$_POST["ip"];
    $nombre=$_POST["nombreAlumno"];
    $firma=$_POST["nombre"];
    if($idJesuita2 != NULL && $nombre != NULL && $firma != NULL){
        $sql2="UPDATE Jesuita set (idJesuita,nombre,Firma) VALUES ('".$idJesuita2.",".$nombre.",".$firma."')";
        $objeto->realizarConsultas($sql2);
        if($idJesuita2 =1){
            header("location:listUsers.php");
        }
    }
    ?>
</div>
</body>
</html>
