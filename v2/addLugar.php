<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Lugar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="general">
    <div>
        <form method="post">
            <label>idLugar</label>
            <input type="text" name="idLugar"><br><br>
            <label>Nombre</label>
            <input type="text" name="nombre"><br><br>
            <input type="submit" value="Agregar Lugar">
            <a href="crud.html">Volver</a>
        </form>
        <?php
        $objeto=new operaciones();//instancia la clase
        $idLugar=$_POST["idLugar"];//recoge los datos del formulario
        $nombre=$_POST["nombre"];
        if($idLugar != NULL && $nombre != NULL){//si los valores son distintos a null entra en el bucle
            $sql="INSERT INTO lugar(idLugar,nombre) VALUES ('".$idLugar.",".$nombre."')";//consulta de insercion de datos
            $objeto->realizarConsultas($sql);
            if($idLugar =1){
                header("location:listLugar.php");//si hay un lugar vuelve a la pagina anterior
            }
        }
        ?>
    </div>
</div>
</body>
</html>
