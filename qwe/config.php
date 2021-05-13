<?php
    require_once 'clasephp.php';
    $objeto=new clasephp();
    if(!isset($_POST["crear"])){
        echo 'Añadir lugar';
        echo '<form action="#" method="POST">
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre"><br>
                <label for="IP">Ip:</label><br>
                <input type="text" name="IP"><br>
                <input type="submit" name="crear" value="Añadir"><br>
                </form>';
    }else{
        $sql = "INSERT INTO Lugares (ip, nombre) VALUES ('".$_POST["IP"]."','".$_POST["nombre"]."');";
        $objeto->realizarConsultas($sql);
        if($objeto->comprobar()>0)
        {
            echo 'Se ha añadido correctamente';
        }else{
            echo 'No se añade';
        }

    }
?>
