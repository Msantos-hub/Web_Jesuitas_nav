<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar Lugares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="general">
    <table>
        <thead>
        <tr>
            <th>idLugar</th>
            <th>nombre</th>
            <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
            require 'Operaciones.php';
            $objeto=new operaciones(); //instancia la clase
            $sql="SELECT * FROM lugar"; //muestra todos los datos de la tabla lugar
            $objeto->realizarConsultas($sql);
            while($fila=$objeto->extraerFilas())
            {
                //bucle que  muestra en una tabla todos los datos de la tabla lugar
                echo '<tr>';
                    echo '<td>'.$fila['idLugar'].'</td>';
                    echo '<td>'.$fila['nombre'].'</td>';
                    echo '<td><a href="editLugar.php?idLugar='.$fila['idLugar'].'"> Editar </a> || <a href="deleteLugar.php?idLugar='.$fila['idLugar'].'"> Eliminar </a></td>';

                echo '</tr>';
            }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
