<?php

include('clasephp.php'); //include la clase
session_start();//inicia la sesion
$objeto=new clasephp();

if (isset($_POST['login'])) { //si existe el logeo inicia

    $username = $_POST['username'];
    $password = $_POST['password'];
 //la consulta preparada se utiliza si se va a ejecutar varias consultas o por seguridad de inicios de sesion
    $query = $objeto->prepare("SELECT * FROM maquina WHERE idUsuario=:username AND password=:password");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {//comprueba que la clase exista si no existe devuelve un error, si existe continua
        echo '<p class="error">error en el correo o contraseña</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">inicio correcto</p>';
        } else {
            echo '<p class="error">error en el correo o contraseña</p>';
        }
    }
}

?>
