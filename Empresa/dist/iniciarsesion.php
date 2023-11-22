<?php
    session_start();
    include('conexion.php');

    if (isset($_POST['usuario']) && isset($_POST['contraseña']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usuario = validate($_POST['usuario']); 
    $contraseña = validate($_POST['contraseña']);


if (empty($usuario)) {
        header("Location: logear.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($contraseña)) {
        header("Location: logear.php?error=La contraseña Es Requerida");
        exit();
    }
else{
    $Sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña='$contraseña' LIMIT 1";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $usuario && $row['contraseña'] === $contraseña) {
                $_SESSION['usuario'] = $row['usuario'];
                header("Location: logear.php");
                exit();
            }else {
                header("Location: logear.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else {
            header("Location: logear.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }
}else{
    header("Location: logear.php?error=Bienvenido $usuario");
}
        ?>