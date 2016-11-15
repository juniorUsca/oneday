<?php

include('utils.php');

$response = array();
$response['status'] = '1';

$form_values = array();

/// guardamos en la base de datos
foreach ($_POST as $key => $value)
  $form_values [$key] = $value;

$ID = $form_values['data-id'];
unset ($form_values['data-id']);

$FORM_TOKEN = $form_values['form_token'];
unset ($form_values['form_token']);
start_session();
if ( empty($_SESSION['form_token']) ) {
  $_SESSION['form_token'] = md5(uniqid(rand(), TRUE));
  $_SESSION['token_time'] = time();
}
$token_age = time() - $_SESSION['token_time'];
if( $FORM_TOKEN != $_SESSION['form_token'] || $token_age >= 300) 
  $response['status'] = '2';
unset ($_SESSION['form_token']);

if ($ID == '0') {

  $keys = ""; $values = "";
  $i = 0;
  $len = count($form_values);
  foreach ($form_values as $key => $value) {
    $value = utf8_decode($value);
    $value = str_replace("'", "\\'", $value);
    $value = str_replace("\"", "\\\"", $value);
    if ($key == 'password') $value = md5($value);
    if ($i != $len - 1){
      $keys .= "`$key`, ";
      $values .= "'".$value."', ";
    } else {
      $keys .= "`$key`";
      $values .= "'".$value."'";
    }
    $i++;
  }
  $keys .= ", `modifiedAt`, `createdAt`";
  $values .= ", now(), now()";
  $sql = "INSERT INTO users ( $keys ) VALUES( $values )";

} else {

  $keyvals = "";
  $i = 0;
  $len = count($form_values);
  foreach ($form_values as $key => $value) {
    $value = utf8_decode($value);
    $value = str_replace("'", "\\'", $value);
    $value = str_replace("\"", "\\\"", $value);
    if ($key == 'password') $value = md5($value);
    if ($i != $len - 1){
      $keyvals .= "`$key` = '".$value."', ";
    } else {
      $keyvals .= "`$key` = '".$value."'";
    }
    $i++;
  }
  $keyvals .= ", `modifiedAt` = now()";
  $sql = "UPDATE users SET $keyvals WHERE id='$ID'";

}

if ($response['status'] == '1') {
  $con = conectar();
  $res = mysqli_query($con, $sql);
  desconectar($con);

  if( empty($res) )
    $response['status'] = '0';
}

start_session();
if ($response['status'] == '1') {
  $_SESSION['message'] = 'Admin guardado';
  $_SESSION['color'] = 'teal';
} else if ($response['status'] == '2') {
  $_SESSION['message'] = 'Actualize la pagina por seguridad';
  $_SESSION['color'] = 'blue-grey darken-1';
} else {
  $_SESSION['message'] = 'Ocurrio un problema';
  $_SESSION['color'] = 'red';
}

header('Content-type: application/json');
echo json_encode($response);