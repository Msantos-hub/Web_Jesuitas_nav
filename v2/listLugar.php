<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar Lugares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once 'clasephp.php';
$objeto=new clasephp();
$sql="SELECT * FROM lugar";
$objeto->realizarConsultas($sql);
?>
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
        while($fila=$objeto->extraerFilas()){

            ?>
            <tr>
                <td><?php echo $fila['idLugar'] ?></td>
                <td><?php echo $fila['nombre'] ?></td>
                <td><a href="editLugar.php?idLugar=<?php echo $fila['idLugar']?>">Editar</a></td>
                <td><a href="deleteLugar.php?idLugar=<?php echo $fila['idLugar']?>">Eliminar</a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
