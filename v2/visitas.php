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
            <input type="submit" value="Realizar Visita" name="enviar">
        </form>
        <?php
        if (isset($_POST['enviar'])) {
            $idJesuita = $_POST['nJesuita'];
            $idLugar = $_POST['nLugares'];
            if ($idJesuita != NULL && $idLugar != NULL) {//si los valores son distintos a null entra en el bucle
                $sql3="INSERT INTO visita (ip,idJesuita,idLugar) VALUES ('".$idJesuita."','".$idJesuita."',".$idLugar.")";//consulta de insercion de datos
                //print_r($sql3);
                $objeto->realizarConsultas($sql3);//consulta de insercion de datos
                if ($idJesuita = 1) {
                    echo '<br>';
                    echo 'La Visita Realizada correctamente.';
                    echo '<br>';
                    echo 'Visita Otro lugar.';
                } else {
                    echo 'La visita no se a realizado correctamente';
                }
            }
        }
        ?>
    </div>
</body>
</html>
