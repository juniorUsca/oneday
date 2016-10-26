<?php

include('utils.php');

$email    = leerParam('email', '');
$password = leerParam('password', '');

$response = array();
$response['status'] = '1';
$response['status_img'] = '1';
$response['error_img'] = '';

$PAGE = $_POST['data-page-form'];
unset ($_POST['data-page-form']);

$validextensions = array("jpeg", "jpg", "png");
$route = "/upload/pages/";
$drc_route = "../upload/pages/"; /// ruta directa
$max_file_size = 1000000;

/// Subimos las imagenes y las guardamos en la base de datos
foreach ($_FILES as $key => $value) {
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
        $targetPath = $drc_route.$value['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
        
        /// Guardamos en la base de datos
        if ( !putData($key, $PAGE, $route.$value['name']) )
          $response['status'] = '0';
      }
    }
  }
}

/// Subimos las imagenes y las guardamos en la base de datos
foreach ($_POST as $key => $value) {
  if ( !putData($key, $PAGE, $value) )
    $response['status'] = '0';
}

header('Content-type: application/json');
echo json_encode($response);