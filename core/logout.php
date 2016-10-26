<?php

include('utils.php');

start_session();

session_unset();
session_destroy();

$response = array('status' => '1' );
header('Content-type: application/json');
echo json_encode($response);