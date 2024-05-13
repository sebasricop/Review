<?php

if ($_POST) {
    //Recibir info del formulario HTML metodo post
    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];

    echo "Hola \n" . $nombre." ". $apellido;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="ejercicio5.php" method="post">
        Nombre:
        <input placeholder="Name" ="text" name="txtNombre" id="" />
        <br />

        Apellido:
        <input placeholder="Apellido "="text" name="txtApellido" id="">
        <br>

        <input type="submit" value="Enviar" />
    </form>

</body>

</html>
