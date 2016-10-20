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
  include('admin/private.php');
  $xc = mysqli_connect($hostname, $username, $password);
  mysqli_select_db($xc, $dbname);
  return $xc;
}
function desconectar($xc) {
  mysqli_close( $xc );
}