<?php

include('utils.php');

$response = array();
$response['status'] = '1';

$ID = leerParam('id');

$FORM_TOKEN = $_GET['form_token'];
start_session();
if ( empty($_SESSION['form_token']) ) {
  $_SESSION['form_token'] = md5(uniqid(rand(), TRUE));
  $_SESSION['token_time'] = time();
}
$token_age = time() - $_SESSION['token_time'];
if( $FORM_TOKEN != $_SESSION['form_token'] || $token_age >= 300) 
  $response['status'] = '2';
unset ($_SESSION['form_token']);

if ($response['status'] == '1') {
  $sql = "UPDATE users SET `modifiedAt` = now(), `deleted` = 1 WHERE id=$ID";
  $con = conectar();
  $res = mysqli_query($con, $sql);
  desconectar($con);

  if(empty($res))
    $response['status'] = '0';
}

start_session();
if ($response['status'] == '1') {
  $_SESSION['message'] = 'Admin eliminado';
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