<?php
include("./conexion.php");

// Compruebe si se ha hecho clic en el botón de registro o no
if (isset($_POST['edit_data'])) {
    // recuperar datos del formulario
    $id = $_POST['edit_idv'];
    $vin= $_POST['edit_vin'];
    $idvehiculo = $_POST['edit_idvehiculo'];
    $transmision = $_POST['edit_transmision'];
    $costo = $_POST['edit_costo'];
    $modelo = $_POST['edit_modelo'];
    $cil = $_POST['edit_cil'];
    $color = $_POST['edit_color'];
    $descr = $_POST['edit_descr'];

    // consulta
    $sql = "UPDATE vehiculo SET vin='$vin', idvehiculo='$idvehiculo', transmision='$transmision', costo='$costo', modelo='$modelo', cil='$cil', color='$color', descr ='$descr' WHERE idv = '$idv'";
    $query = mysqli_query($db, $sql);

    //¿Comprueba si la consulta se guardó correctamente?
    if ($query)
        header('Location: ./index.php?update=exito');
    else
        header('Location: ./index.php?update=fallo');
} else
    die("Acceso prohibido...");
