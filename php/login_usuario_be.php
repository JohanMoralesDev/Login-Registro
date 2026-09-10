<?php

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
echo $contrasena;

$query = "SELECT * FROM usuarios WHERE correo = '$correo'";

$resultado = mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) > 0) {

    $usuario = mysqli_fetch_assoc($resultado);

    if (password_verify($contrasena, $usuario['contrasena'])) {

        header("location: ../bienvenida.php");
        exit;

    } else {

        echo '
            <script>
                alert("La contraseña es incorrecta");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }

} else {

    echo '
        <script>
            alert("El usuario no existe, por favor verifique los datos introducidos");
            window.location = "../index.php";
        </script>
    ';
    exit;
}

?>