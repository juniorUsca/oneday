<?php

include('utils.php');

$response = array();
$response['status'] = '1';

$ID = leerParam('id');

$sql = "DELETE FROM aliados WHERE id=$ID";
$con = conectar();
$res = mysqli_query($con, $sql);
desconectar($con);

if(!$res)
  $response['status'] = '0';

start_session();
if ($response['status'] == '1') {
  $_SESSION['message'] = 'Aliado eliminado';
  $_SESSION['color'] = 'teal';
} else {
  $_SESSION['message'] = 'Ocurrio un problema';
  $_SESSION['color'] = 'red';
}

header('Content-type: application/json');
echo json_encode($response);