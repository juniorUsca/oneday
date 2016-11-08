<?php

include('utils.php');

$response = array();
$response['status'] = '1';
$response['status_img'] = '1';
$response['error_img'] = '';

$form_values = array();

$validextensions = array("jpeg", "jpg", "png");
$route = "/upload/pages/";
$drc_route = "../upload/pages/"; /// ruta directa
$max_file_size = 10000000; // 10M

/// Subimos las imagenes
foreach ($_FILES as $key => $value) {
  if ( !empty($value['name']) ) {
    
    if(isset($value["type"])) {
      $temporary = explode(".", $value["name"]);
      $file_extension = end($temporary);

      if ( ($value["type"] == "image/png" || $value["type"] == "image/jpg" || $value["type"] == "image/jpeg") && 
        $value["size"] < $max_file_size && 
        in_array($file_extension, $validextensions) ) {
        if ($value["error"] > 0) {
          $response['status_img'] = '0';
          $response['error_img'] .= $value["error"]." || ";
        } else {
          /// si existe el archivo, crear un nuevo nombre aleatorio
          if (file_exists($drc_route . $value["name"])) {
            $temporary_name = '';
            for ($i = 0; $i < count($temporary)-1; $i++ )
              $temporary_name .= $temporary[$i];
            $value["name"] = $temporary_name.generateRandomString().'.'.end($temporary);
          }
          
          $sourcePath = $value['tmp_name']; // Storing source path of the file in a variable
          $targetPath = $drc_route.utf8_decode($value['name']); // Target path where file is to be stored
          move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
          
          $form_values [$key] = $route.$value['name'];
        }
      } else {
        $response['status_img'] = '0';
        $response['error_img'] .= 'Es muy grande o no cumple las reglas';
      }
    } else {
      $response['status_img'] = '0';
      $response['error_img'] .= 'No subio correctamente';
    }

  }
}

/// guardamos en la base de datos
foreach ($_POST as $key => $value)
  $form_values [$key] = $value;

$ID = $form_values['data-id'];
unset ($form_values['data-id']);

if ($ID == '0') {

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
  $sql = "INSERT INTO galeria ( $keys ) VALUES( $values )";

} else {

  $keyvals = "";
  $i = 0;
  $len = count($form_values);
  foreach ($form_values as $key => $value) {
    $value = utf8_decode($value);
    $value = str_replace("'", "\\'", $value);
    $value = str_replace("\"", "\\\"", $value);
    if ($i != $len - 1){
      $keyvals .= "`$key` = '".$value."', ";
    } else {
      $keyvals .= "`$key` = '".$value."'";
    }
    $i++;
  }
  $sql = "UPDATE galeria SET $keyvals WHERE id='$ID'";

}

if ($response['status'] == '1' && $response['status_img'] == '1') {
  $con = conectar();
  $res = mysqli_query($con, $sql);
  desconectar($con);
}

if( empty($res) )
  $response['status'] = '0';

start_session();
if ($response['status'] == '1' && $response['status_img'] == '1') {
  $_SESSION['message'] = 'Foto guardada';
  $_SESSION['color'] = 'teal';
} else {
  $_SESSION['message'] = 'Ocurrio un problema';
  $_SESSION['color'] = 'red';
}

header('Content-type: application/json');
echo json_encode($response);