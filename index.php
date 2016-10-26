<?php
define('HOSTNAME', 'http://localhost');
define('PATH', '');
define('VIEWS_PATH', 'views');
$HOSTPATH = HOSTNAME.'/'.PATH;
if (empty(PATH))
  $HOSTPATH = HOSTNAME;

include('private.php');
include('info.php');
include('core/utils.php');

$pages = array(
  '/index.php' => 'index/index.php',
  'admin/index.php' => 'admin/index.php',
  'admin/login.php' => 'admin/login.php',
  'admin/inicio/index.php' => 'admin/inicio.php',
  'admin/testimonios/index.php' => 'admin/testimonios.php',
  'admin/testimonios/edit/index.php' => 'admin/testimonios_edit.php',
  'admin/aliados/index.php' => 'admin/aliados.php',
  'admin/datosgenerales.php' => 'admin/datosgenerales.php',
);

$current_url = $_SERVER['REQUEST_URI'];
$current_view = ''; /// TODO: 404 por defecto
$current_path = PATH;

//echo $current_url."<br>";

/// agregamos el index.php si no lo tubiera. EJM: oneday.com/admin
if ( !has_dot( get_url_body($current_url) ) )
  $current_page = get_url_body($current_url).'/index.php';

/// agregamos el index.php si no lo tubiera. EJM: oneday.com/admin/
if ( substr( get_url_body($current_url), -1) == '/' )
  $current_page = get_url_body($current_url).'index.php';

if ( empty($current_page) )
  $current_page = get_url_body($current_url);
//echo $current_page;

$page_found = false;
foreach ($pages as $key => $value) {
  if ($current_page == $key) {
    $page_found = true;
    $current_view = VIEWS_PATH.'/'.$value;
    $current_path = HOSTNAME.'/'.get_current_path(PATH.'/'.$current_view);
    $static = $current_path.'static';
    include($current_view);
  }
}

if (!$page_found) {
  echo "404";
}