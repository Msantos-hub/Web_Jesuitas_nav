<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Realizar visitas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once 'clasephp.php';
    $objeto=new clasephp();
    $sql1="SELECT * FROM jesuita";
    $objeto->realizarConsultas($sql1);
    ?>
    <div id="general">
        <h3>Jesuitas Viajeros</h3>
        <form method="post" id="formvisita">
            <label>Jesuita</label>
            <select name="nJesuita">
                <?php
                while($fila=$objeto->extraerFilas()) {
                    echo '<option value="'.$fila['idJesuita'].'">'.$fila['Nombre'].'</option>';
                }
                ?>
            </select>
            <label>Lugares</label>
            <select name="nLugares">
                <<?php
                $sql2="SELECT * FROM Lugar";
                $objeto->realizarConsultas($sql2);
                while($fila=$objeto->extraerFilas()) {
                    echo '<option value="'.$fila['idLugar'].'">'.$fila['nombre'].'</option>';
                }
                ?>
            </select>
            <input type="submit" value="Realizar Visita">
        </form>
    </div>
    <?php
    $idJesuita=$_POST['nJesuita'];
    $idLugar=$_POST['nLugar'];
    if($idJesuita != NULL && $idLugar != NULL){//si los valores son distintos a null entra en el bucle
        $sql3="INSERT INTO visita(idJesuita,idLugar) VALUES ('".$idJesuita.",".$idLugar."')";//consulta de insercion de datos
        $objeto->realizarConsultas($sql3);//consulta de insercion de datos
        if($idJeusita =1){
            header("location:listUsers.php");//si hay un usuario vuelve a la pagina anterior
            echo 'Visita Realizada correctamente.';
            echo 'Visita Otro lugar';
        }
        else{
            echo 'La visita no se a realizado correctamente';
        }
    }
    ?>
</body>
</html>
