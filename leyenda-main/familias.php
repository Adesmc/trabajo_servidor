<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Conecta a la base de datos  con usuario, contraseña y nombre de la BD
$servidor = "localhost"; $usuario = "root"; $contrasenia = ""; $nombreBaseDatos = "leyenda";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);



// Consulta todos los registros de la tabla empleados
$sqlFamilia = mysqli_query($conexionBD,"SELECT * FROM familia ");
if(mysqli_num_rows($sqlFamilia) > 0){
    $Familias = mysqli_fetch_all($sqlFamilia,MYSQLI_ASSOC);
    echo json_encode($Familias);
}
else{ echo json_encode([["success"=>0]]); }




?>
