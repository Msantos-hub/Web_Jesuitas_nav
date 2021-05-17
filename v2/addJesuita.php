<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Jesuita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="general">
    <div>
        <form method="post">
            <label>idJesuita</label>
            <input type="text" name="idJesuita"><br><br>
            <label>nombreAlumno</label>
            <input type="text" name="nombre"><br><br>
            <label>Nombre</label>
            <input type="text" name="Firma"><br><br>
            <input type="submit" value="Agregar Jesuita">
            <a href="crud.html">Volver</a>
        </form>
        <?php
        $objeto=new clasephp();
        $idJesuita=$_POST["idJesuita"];
        $nombre=$_POST["nombre"];
        $firma=$_POST["Firma"];
        if($idJesuita != NULL && $nombre != NULL && $firma != NULL){
            $sql="INSERT INTO jesuita(idJesuita,nombre,Firma) VALUES ('".$idJesuita.",".$nombre.",".$firma."')";
            $objeto->realizarConsultas($sql);
            if($idJesuita =1){
                header("location:listJesuita.php");
            }
        }
        ?>
    </div>
</div>
</body>
</html>
