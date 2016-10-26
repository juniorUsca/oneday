<?php

function start_session() {
  if ( empty($_SESSION) ) session_start();
}

function is_logged() {
  start_session();
  
  if ( empty($_SESSION['id']) ) return false;
  else return true;
}

function leerParam($param, $default) {
  if ( isset( $_POST["$param"] ) )
    return $_POST["$param"];
  if ( isset( $_GET["$param"] ) )
    return $_GET["$param"];
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
  $sql = "UPDATE content SET `data-content` = '".utf8_decode($data_content)."' WHERE page='$page' AND `data-name`='$data_name'";
  $res = mysqli_query($con, $sql);
  desconectar($con);
  return $res;
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
  $pos_end = pos_parameters_get($string); /// -1 por el '?' y -1 por el ultimo '/' de la url
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