<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit USER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="general">
    <div>
        <form method="post">
            <?php
                include 'Operaciones.php';
                $ip=$_GET['ip'];
                $objeto=new Operaciones();
                $sql="SELECT * FROM Maquina WHERE ip='".$ip."'";
                $objeto->realizarConsultas($sql);
                while($fila=$objeto->extraerFilas())
                {
                    echo '<label>IP </label>';
                    echo '<input type="text" name="ip" value="'.$fila['ip'].'"><br>';
                    echo '<label>nombreAlumno </label>';
                    echo '<input type="text" name="nombreAlumno" value="'.$fila['nombreAlumno'].'"><br>';
                    echo '<label>Nombre </label>';
                    echo '<input type="text" name="nombre" value="'.$fila['Nombre'].'"><br>';
                    echo '<label>idJesuita </label>';
                    echo '<input type="text" name="idJesuita" value="'.$fila['idJesuita'].'"><br>';
                    echo '<label>idLugar </label>';
                    echo '<input type="text" name="idLugar" value="'.$fila['idLugar'].'"><br>';
                    echo '<label>tipo </label>';
                    echo '<input type="text" name="tipo" value="'.$fila['tipo'].'"><br>';
                    echo '<label>idUsuario </label>';
                    echo '<input type="text" name="idUsuario" value="'.$fila['idUsuario'].'"><br>';
                    echo '<label>Password </label>';
                    echo '<input type="text" name="password" value="'.$fila['password'].'"><hr>';
                    echo '<input type="submit" value="Agregar usuario" name="enviar">';
                    echo '<a href="listUsers.php">Volver</a>';
                }
                    echo '</form>';
                    echo '</div>';
                if (isset($_POST['enviar']))
                {
                    $ip2 = $_POST["ip"];
                    $nAlumno = $_POST["nombreAlumno"];
                    $nombre = $_POST["nombre"];
                    $idJ = $_POST["idJesuita"];
                    $idL = $_POST["idLugar"];
                    $tipo = $_POST["tipo"];
                    $idU = $_POST["idUsuario"];
                    $pass = $_POST["password"];

//                    echo $ip2 , $nAlumno , $nombre , $idJ , $idL , $tipo , $idU , $pass;

                    if ($ip2 != NULL && $nAlumno != NULL && $nombre != NULL && $idU != NULL && $tipo != NULL && $pass != NULL)
                    {
                        $sql2 = "UPDATE maquina set ip ='".$ip2."', nombreAlumno='".$nAlumno."',nombre='".$nombre."',idJesuita='".$idJ."', idLugar='".$idL."',tipo='".$tipo."',idUsuario='".$idU."',password='".$pass."' WHERE ip ='".$ip."'";
                        $objeto->realizarConsultas($sql2);
                        if ($ip2 = 1) {
                            header("location:listUsers.php");
                        }
                    }
                }
            ?>
    </div>
</body>
</html>

