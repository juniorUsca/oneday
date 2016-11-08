<?php

include('utils.php');

$response = array();
$response['status'] = '1';
$response['status_img'] = '1';
$response['error_img'] = '';

$form_values = array();

/// guardamos en la base de datos
foreach ($_POST as $key => $value)
  $form_values [$key] = $value;

$keys = ""; $values = "";
$i = 0;
$len = count($form_values);
foreach ($form_values as $key => $value) {
  $value = utf8_decode($value);
  $value = str_replace("'", "\\'", $value);
  $value = str_replace("\"", "\\\"", $value);
  if ($i != $len - 1){
    $keys .= "`$key`, ";
    $values .= "'".$value."', ";
  } else {
    $keys .= "`$key`";
    $values .= "'".$value."'";
  }
  $i++;
}
$keys   .= ", `data-active`";
$values .= ", 1";
$sql = "INSERT INTO subscripciones ( $keys ) VALUES( $values )";

if ($response['status'] == '1' && $response['status_img'] == '1') {
  $con = conectar();
  $res = mysqli_query($con, $sql);
  desconectar($con);
}

if( empty($res) )
  $response['status'] = '0';

header('Content-type: application/json');
echo json_encode($response);