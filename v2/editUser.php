<?php
    include 'operaciones.php';
    $ip=$_GET['ip'];
    $objeto=new operaciones();
    $sql="SELECT * FROM Maquina WHERE ip='".$ip."'";
    $objeto->realizarConsultas($sql);
    while($fila=$objeto->extraerFilas()){
    ?>
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
            <label>IP</label>
            <input type="text" name="ip" value=" <?php echo $fila['ip']?>"><br><br>
            <label>nombreAlumno</label>
            <input type="text" name="nombreAlumno" value=" <?php echo $fila['nombreAlumno']?>"><br><br>
            <label>Nombre</label>
            <input type="text" name="nombre" value=" <?php echo $fila['nombre']?>"><br><br>
            <label>idJesuita</label>
            <input type="text" name="idjesuita" value=" <?php echo $fila['idJesuita']?>"><br><br>
            <label>idLugar</label>
            <input type="text" name="idlugar" value=" <?php echo $fila['idLugar']?>"><br><br>
            <label>tipo</label>
            <input type="text" name="tipo" value=" <?php echo $fila['tipo']?>"><br><br>
            <label>idUsuario</label>
            <input type="text" name="idUsuario" value=" <?php echo $fila['idUsuario']?>"><br><br>
            <label>password</label>
            <input type="text" name="password" value=" <?php echo $fila['password']?>"><hr>
            <input type="submit" value="Agregar usuario">
            <a href="listUsers.php">Volver</a>
        </form>
        <?php
        }
        ?>
    </div>
    <?php
        $objeto=new operaciones();
        $ip2=$_POST["ip"];
        $nAlumno=$_POST["nombreAlumno"];
        $nombre=$_POST["nombre"];
        $idJ=$_POST["idJesuita"];
        $idL=$_POST["idLugar"];
        $tipo=$_POST["tipo"];
        $idU=$_POST["idUsuario"];
        $pass=$_POST["password"];
        if($ip2 != NULL && $nAlumno != NULL && $nombre != NULL && $idJ != NULL && $idL != NULL && $idU != NULL && $tipo != NULL && $pass != NULL){
            $sql2="UPDATE maquina set (ip,nombreAlumno,nombre,idJesuita,idLugar,tipo,idUsuario,password) VALUES ('".$ip2.",".$nAlumno.",".$nombre.",".$idJ.",".$idL.",".$tipo.",".$idU.",".$pass."')";
            $objeto->realizarConsultas($sql2);
            if($ip2 =1){
                header("location:listUsers.php");
            }
        }
    ?>
</div>
</body>
</html>

