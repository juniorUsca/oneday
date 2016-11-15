<?php

include('utils.php');

$response = array();
$response['status'] = '1';

$form_values = array();

/// guardamos en la base de datos
foreach ($_POST as $key => $value)
  $form_values [$key] = $value;


$keyvals = "";
$i = 0;
$len = count($form_values["keys"]);
foreach ($form_values["keys"] as $key => $value) {
  $value = utf8_decode($value);
  if ($i != $len - 1){
    $keyvals .= "id = '".$value."' OR ";
  } else {
    $keyvals .= "id = '".$value."'";
  }
  $i++;
}
$sql = "UPDATE subscripciones SET `data-active`='0' WHERE $keyvals";

if ($response['status'] == '1') {
  $con = conectar();
  $res = mysqli_query($con, $sql);
  desconectar($con);
}

if( empty($res) )
  $response['status'] = '0';

start_session();
if ($response['status'] == '1') {
  $_SESSION['message'] = 'Subscripciones archivadas';
  $_SESSION['color'] = 'teal';
} else {
  $_SESSION['message'] = 'Ocurrio un problema';
  $_SESSION['color'] = 'red';
}

header('Content-type: application/json');
echo json_encode($response);