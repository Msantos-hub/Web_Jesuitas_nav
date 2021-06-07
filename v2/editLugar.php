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
            <?php
                include 'Operaciones.php';
                $idLugar=$_GET['idLugar'];
                $objeto=new operaciones();
                $sql="SELECT * FROM Lugar WHERE idLugar='".$idLugar."'";
                $objeto->realizarConsultas($sql);
                while($fila=$objeto->extraerFilas())
                {
                    echo '<label>IdLugar </label>';
                    echo '<input type="text" name="idLugar" value="'.$fila['idLugar'].'"><br><br>';
                    echo '<label>nombreAlumno </label>';
                    echo '<input type="text" name="nombre" value="'.$fila['nombre'].'"><br><hr>';
                    echo '<input type="submit" value="Agregar usuario" name="enviar">';
                    echo '<a href="listLugar.php"> Volver </a>';
                }
                echo '</form>';
                echo '</div>';
                if (isset($_POST['enviar']))
                {

                    $idLugar2 = $_POST["idLugar"];//recoge los datos del formulario
                    $nombre = $_POST["nombre"];

                    if ($idLugar2 != NULL && $nombre != NULL)
                    { //si los datos no son null entra en el bucle y realiza la consulta
                        $sql2 = "UPDATE lugar SET idLugar='".$idLugar2."', nombre='".$nombre."' WHERE idLugar='".$idLugar."'";//realiza la consulta
                        $objeto->realizarConsultas($sql2);
                        if ($idLugar2 = 1)
                        {
                            echo 'Datos actualizados correctamente';
                           header("location:listLugar.php"); //si se a añadido un luagr vuevle a la pagina de listado
                        }
                    } echo 'Datos erroneos';
                }
            ?>
    </div>
</body>
</html>


