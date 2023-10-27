<?php
include("./conexion.php");

if (isset($_POST['deletedata'])) {
    // tomar la identificación de la cadena de consulta
    $id = $_POST['delete_id'];

    //eliminar consulta
    $sql = "DELETE FROM vehiculo WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    //¿Se eliminó correctamente la consulta?
    if ($query) {
        header('Location: ./index.php?eliminar=exito');
    } else
        die('Location: ./index.php?eliminar=fallo');
} else
    die("el acceso está prohibido...");
