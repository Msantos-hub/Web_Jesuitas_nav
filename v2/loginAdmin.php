<?php

include('Operaciones.php'); //include la clase
session_start();//inicia la sesion
$objeto=new operaciones();
$tipo='a';

if (isset($_POST['loginAdmin'])) { //si existe el logeo inicia

    $username = $_POST['username'];
    $password = $_POST['password'];
    //la consulta preparada se utiliza si se va a ejecutar varias consultas o por seguridad de inicios de sesion
    $query = $objeto->prepare("SELECT * FROM maquina WHERE idUsuario=? AND password=?");
    $query->bindParam('s','?', $username);
    $query->bindParam('s','?', $password);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {//comprueba que haya un resultado si no existe devuelve un error, si existe continua
        echo '<p class="error">error en el correo o contraseña</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['idUsuario'] && $tipo == $result['tipo'];
            echo '<p class="success">inicio correcto</p>';
        } else {
            echo '<p class="error">error en el correo o contraseña</p>';
        }
    }
}

?>
