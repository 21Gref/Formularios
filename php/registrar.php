<?php

$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$edad = $_POST['edad'];

$mysqli = new mysqli('localhost','root','password','formulario');

$res = $mysqli->query("INSERT INTO personas VALUES (0,'$nombre','$apellidoP','$apellidoM',$edad);");
if($res){
    echo '<script type="text/javascript">
        alert("Registrado con éxito");
        window.location.href="../index.html";
        </script>';
}
else {
    echo '<script type="text/javascript">
    alert("Error: No se pudo registrar");
    window.location.href="../index.html";
    </script>';
}

?>