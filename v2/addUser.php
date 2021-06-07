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
            <input type="text" name="idJesuita"><br><br>
            <label>idLugar</label>
            <input type="text" name="idLugar"><br><br>
            <label>tipo</label>
            <input type="text" name="tipo"><br><br>
            <label>idUsuario</label>
            <input type="text" name="idUsuario"><br><br>
            <label>password</label>
            <input type="text" name="password"><hr>
            <input type="submit" value="Agregar usuario" name="enviar">
            <a href="crud.html">Volver</a>
        </form>
        <?php
            require 'operaciones.php';
            if (isset($_POST['enviar']))
            {
                $ip=$_POST["ip"];//recoge los datos del formulario
                $nAlumno=$_POST["nombreAlumno"];
                $nombre=$_POST["nombre"];
                $idJ=$_POST["idJesuita"];
                $idL=$_POST["idLugar"];
                $tipo=$_POST["tipo"];
                $idU=$_POST["idUsuario"];
                $pass=$_POST["password"];
                if($ip != NULL && $nAlumno != NULL && $nombre != NULL && $idU != NULL && $tipo != NULL && $pass != NULL)
                {//si los valores son distintos a null entra en el bucle
                    $sql="INSERT INTO maquina(ip,nombreAlumno,nombre,idJesuita,idLugar,tipo,idUsuario,password) 
                            VALUES ('".$ip."','".$nAlumno."','".$nombre."','".$idJ."','".$idL."','".$tipo."','".$idU."','".$pass."')";//consulta de insercion de datos
                    $objeto=new operaciones();
                    $objeto->realizarConsultas($sql);//consulta de insercion de datos
                    if($ip =1)
                    {
                        echo 'Maquina añadido correctamente.';
                        //print_r($sql);
                        header("location:listUsers.php");//si hay un usuario vuelve a la pagina anterior
                    }echo 'Datos incorrectos';
                }
            }
        ?>
    </div>
</div>
</body>
</html>
