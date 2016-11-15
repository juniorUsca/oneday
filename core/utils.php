<?php

function start_session() {
  if ( empty($_SESSION) ) session_start();
}

function is_logged() {
  start_session();
  
  if ( empty($_SESSION['id']) ) return false;
  else return true;
}

function leerParam($param, $default = '') {
  if ( isset( $_POST["$param"] ) )
    return $_POST["$param"];
  if ( isset( $_GET["$param"] ) )
    return $_GET["$param"];
  return $default;
}

function leerSession($param, $default = '') {
  start_session();
  if ( isset( $_SESSION["$param"] ) )
    return $_SESSION["$param"];
  return $default;
}

function popSession($param, $default = '') {
  start_session();
  if ( isset( $_SESSION["$param"] ) ) {
    $temp = $_SESSION["$param"];
    unset( $_SESSION["$param"] );
    return $temp;
  }
  return $default;
}
  
function conectar() {
  global $HOSTPATH, $hostname, $dbusername, $dbpassword, $dbname;
  
  if ( empty($HOSTPATH) )
    include('../private.php');
  $xc = mysqli_connect($hostname, $dbusername, $dbpassword);
  mysqli_select_db($xc, $dbname);
  return $xc;
}
function desconectar($xc) {
  mysqli_close( $xc );
}

function getData($data_name, $page, $default='') {
  $con = conectar();
  $sql = "SELECT `data-content` FROM content WHERE page='$page' AND `data-name`='$data_name'";
  $res = mysqli_query($con, $sql);
  desconectar($con);
  if ( mysqli_num_rows($res) > 0 ) {
    $row = mysqli_fetch_array ($res);
    return utf8_encode($row['data-content']);
  }
  return $default;
}

function putData($data_name, $page, $data_content) {
  $con = conectar();
  $value = utf8_decode($data_content);
  $value = str_replace("'", "\\'", $value);
  $value = str_replace("\"", "\\\"", $value);
  //$value = str_replace("\\", "\\\\", $value);
  $sql = "UPDATE content SET `data-content` = '".$value."' WHERE page='$page' AND `data-name`='$data_name'";
  //echo $sql;
  $res = mysqli_query($con, $sql);
  desconectar($con);
  return $res;
}

function getDataTable ($table, $order = 'id', $desc = 'DESC', $where = '') {

  $public_tables = array('testimonios','aliados','cursos','galeria','subscripciones','users',);

  $access = false;
  foreach ($public_tables as $key => $value) {
    if ($value == $table) {
      $access = true;
      break;
    }
  }
  
  $rows = array();
  if ($access) {
    if (empty($where))
      $sql = "SELECT * FROM `$table` ORDER BY `$order` $desc";
    else
      $sql = "SELECT * FROM `$table` WHERE $where ORDER BY `$order` $desc";
    $con = conectar();
    $res = mysqli_query($con, $sql);
    desconectar($con);
    
    while($r = mysqli_fetch_assoc($res)) {
      $row = array();
      foreach ($r as $key => $value) {
        $value = utf8_encode($value);
        $row [$key] = $value;
      }
      $response['status'] = '1';
      $rows[] = $row;
    }
  }

  return $rows;

}

function getDataRow($id, $table) {
  $sql = "SELECT * FROM `$table` WHERE id='$id'";
  $con = conectar();
  $res = mysqli_query($con, $sql);
  desconectar($con);
  
  $row = array();
  while($r = mysqli_fetch_assoc($res)) {
    foreach ($r as $key => $value) {
      $value = utf8_encode($value);
      $row [$key] = $value;
    }
  }
  return $row;
}

/**
 * Saca el ultimo /*.*
**/
function get_url_end($string) {
  $pos = strrpos($string, '/');
  return substr($string, $pos + 1, strlen($string) - $pos );
}


/**
 * Saca el trozo de url despues del PATH
**/
function get_url_body($string) {
  $path_slashs = PATH.'/';
  $pos = strpos($string, $path_slashs);
  $pos_end = pos_parameters_get($string);
  //echo $pos_end-($pos + strlen($path_slashs));
  if ($pos_end === false) $pos_end = strlen($string);

  return substr($string, $pos + strlen($path_slashs), $pos_end - ($pos+strlen($path_slashs)) );
}

/**
 * Position of get ?*=*
**/
function pos_parameters_get($string) {
  $pos = strpos($string, '?');
  return $pos;
}

/**
 * Quitamos el contenido despues del ultimo slash
**/
function get_current_path($string) {
  $pos = strrpos($string, '/');
  return substr($string, 0, $pos+1 );
}

function has_dot($string) {
  $pos = strpos($string, '.');
  if ($pos === false) {
    return false;
  }
  return true;
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}