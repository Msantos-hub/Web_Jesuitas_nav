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
            <input type="submit" value="Agregar Lugar" name="enviar">
            <a href="crud.html">Volver</a>
        </form>
        <?php
            require 'operaciones.php';
            if (isset($_POST['enviar']))
            {
                $objeto=new operaciones();//instancia la clase
                $idLugar=$_POST["idLugar"];//recoge los datos del formulario
                $nombre=$_POST["nombre"];
                if($idLugar != NULL && $nombre != NULL)
                {//si los valores son distintos a null entra en el bucle
                    $sql="INSERT INTO lugar(idLugar,nombre) VALUES ('".$idLugar."','".$nombre."')";//consulta de insercion de datos
                    $objeto=new operaciones();
                    $objeto->realizarConsultas($sql);
                    if($idLugar =1)
                    {
                        echo 'Lugar añadido correctamente.';
                        header("location:listLugar.php");//si hay un lugar vuelve a la pagina anterior
                    }
                }echo 'Datos incorrectos';
            }
        ?>
    </div>
</div>
</body>
</html>
