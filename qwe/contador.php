<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div id="general">
        <img src="../imagenes/logotipo.png">
        <h1>JESUITAS POR EL MUNDO</h1><br/>

        <?php
        require_once 'clasephp.php';
        $objeto=new clasephp();
        //INTRODUZCO UNA VISITAS NUEVA A LA TABLA VISITAS, RECOGIENDO EL DATO DE EL PASO DEL ENLACE
        $sql="INSERT INTO Visitas( `ip`, `idJesuita`, `fechaHora`) VALUES ('".$_GET["x"]."',1,now())";
        $objeto->realizarConsultas($sql);
        if ($objeto->comprobar()>0){
            echo 'Visita realizada';
        }
        else{
            echo' Visita no realizada';
        }
        ?>
        <br/><a href="../lugares.php"><input type="button" value="Volver"></a>
    </div>
</body>
</html>



