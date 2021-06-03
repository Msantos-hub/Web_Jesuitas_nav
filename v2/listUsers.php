<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once 'Operaciones.php';
    $objeto=new operaciones();
    $sql="SELECT * FROM maquina";
    $objeto->realizarConsultas($sql);
    ?>
    <div id="general">
        <table>
            <thead>
                <tr>
                    <th>ip</th>
                    <th>nombre Alumno</th>
                    <th>Nombre</th>
                    <th>idJesuita</th>
                    <th>idLugar</th>
                    <th>tipo</th>
                    <th>idUsuario</th>
                    <th>password</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($fila=$objeto->extraerFilas()){
                ?>
                    <tr>
                        <td><?php echo $fila['ip'] ?></td>
                        <td><?php echo $fila['nombreAlumno'] ?></td>
                        <td><?php echo $fila['Nombre'] ?></td>
                        <td><?php echo $fila['idJesuita'] ?></td>
                        <td><?php echo $fila['idLugar'] ?></td>
                        <td><?php echo $fila['tipo'] ?></td>
                        <td><?php echo $fila['idUsuario'] ?></td>
                        <td><?php echo $fila['password'] ?></td>
                        <td><a href="editUser.php?ip=<?php echo $fila['ip']?>">Editar</a></td>
                        <td><a href="deleteUser.php?ip=<?php echo $fila['ip']?>">Eliminar</a></td>
                    </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>