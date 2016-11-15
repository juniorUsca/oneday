<?php

include('utils.php');

$response = array();
$response['status'] = '1';

$ID = leerParam('id');

$sql = "DELETE FROM galeria WHERE id=$ID";
$con = conectar();
$res = mysqli_query($con, $sql);
desconectar($con);

if(!$res)
  $response['status'] = '0';

start_session();
if ($response['status'] == '1') {
  $_SESSION['message'] = 'Foto eliminada';
  $_SESSION['color'] = 'teal';
} else {
  $_SESSION['message'] = 'Ocurrio un problema';
  $_SESSION['color'] = 'red';
}

header('Content-type: application/json');
echo json_encode($response);