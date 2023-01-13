<?php

include("db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1&& strlen($_POST['message']) >= 1&& strlen($_POST['phone'])) {
        $nombre = trim($_POST['name']);
        $correo = trim($_POST['email']);
        $msj = trim($_POST['message']);
        $telefono = trim($_POST['phone']);
        $consulta = "INSERT INTO info(nombre, email, mensaje, telefono) VALUES ('$nombre','$correo','$msj','$telefono')";
        $resultado = mysqli_query($conexion,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">¡Registro correctamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="error">¡Ha ocurrido un error!</h3>
            <?php
        }
    }   else {
        ?>
        <h3 class="error">¡Por favor complete los campos!</h3>
        <?php
    }
}
?>