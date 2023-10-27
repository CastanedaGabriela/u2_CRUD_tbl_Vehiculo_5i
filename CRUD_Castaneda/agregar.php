<?php
include("./conexion.php");

//Compruebe si se ha hecho clic en el botón de registro o no
if (isset($_POST['agregar'])) {
    // recuperar datos del formulario
    $id = $_POST['id'];
    $vin = $_POST['vin'];
    $idvehiculo = $_POST['idvehiculo'];
    $transmision = $_POST['transmision'];
    $costo = $_POST['costo'];
    $modelo = $_POST['modelo'];
    $cil = $_POST['cil'];
    $color = $_POST['color'];
    $descr = $_POST['descr'];

    //consulta
    $sql = "INSERT INTO vehiculo(vin,idvehiculo,transmision,costo,modelo,cil,color,descr)
    VALUES('$vin', '$idvehiculo', '$transmision', '$costo', '$modelo', '$cil', '$color','$descr')";
    $query = mysqli_query($db, $sql);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($query)
        header('Location: ./index.php?status=exito');
    else
        header('Location: ./index.php?status=fallo');
} else
    die("Acceso prohibido...");
