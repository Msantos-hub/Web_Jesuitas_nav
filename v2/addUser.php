<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add USER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="general">
    <div>
        <form method="post">
            <label>IP</label>
            <input type="text" name="ip"><br><br>
            <label>nombreAlumno</label>
            <input type="text" name="nombreAlumno"><br><br>
            <label>Nombre</label>
            <input type="text" name="nombre"><br><br>
            <label>idJesuita</label>
            <input type="text" name="idjesuita"><br><br>
            <label>idLugar</label>
            <input type="text" name="idlugar"><br><br>
            <label>tipo</label>
            <input type="text" name="tipo"><br><br>
            <label>idUsuario</label>
            <input type="text" name="idUsuario"><br><br>
            <label>password</label>
            <input type="text" name="password"><hr>
            <input type="submit" value="Agregar usuario">
            <a href="crud.html">Volver</a>
        </form>
        <?php
        $objeto=new clasephp();
        $ip=$_POST["ip"];
        $nAlumno=$_POST["nombreAlumno"];
        $nombre=$_POST["nombre"];
        $idJ=$_POST["idJesuita"];
        $idL=$_POST["idLugar"];
        $tipo=$_POST["tipo"];
        $idU=$_POST["idUsuario"];
        $pass=$_POST["password"];
        if($ip != NULL && $nAlumno != NULL && $nombre != NULL && $idJ != NULL && $idL != NULL && $idU != NULL && $tipo != NULL && $pass != NULL){
            $sql="INSERT INTO maquina(ip,nombreAlumno,nombre,idJesuita,idLugar,tipo,idUsuario,password) VALUES ('".$ip.",".$nAlumno.",".$nombre.",".$idJ.",".$idL.",".$tipo.",".$idU.",".$pass."')";
            $objeto->realizarConsultas($sql);
            if($ip =1){
                header("location:listUsers.php");
            }
        }
        ?>
    </div>
</div>
</body>
</html>