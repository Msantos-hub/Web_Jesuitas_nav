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
        $objeto=new clasephp();//instancia la clase
        $idJesuita=$_POST["idJesuita"];//recoge los datos del formulario
        $nombre=$_POST["nombre"];
        $firma=$_POST["Firma"];
        if($idJesuita != NULL && $nombre != NULL && $firma != NULL){ //si los valores son distintos a null entra en el bucle
            $sql="INSERT INTO jesuita(idJesuita,nombre,Firma) VALUES ('".$idJesuita.",".$nombre.",".$firma."')";//consulta de insercion de datos
            $objeto->realizarConsultas($sql);
            if($idJesuita =1){
                header("location:listJesuita.php");//si hay un jesuita vuelve a la pagina anterior
            }
        }
        ?>
    </div>
</div>
</body>
</html>
