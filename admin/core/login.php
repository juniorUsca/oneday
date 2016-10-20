<?php
  include('utils.php');

  $email    = leerParam('email', '');
  $password = leerParam('password', '');

  $response = array();

  if ( !empty ($email) && !empty ($password) ) {
    $con = conectar();
    $sql = "SELECT * FROM users";
    $res = mysqli_query($con, $sql);
    desconectar($con);

    $rowCount = mysqli_num_rows($res);
    $response['status'] = '0';
    if ($rowCount > 0) {
      $row = mysqli_fetch_array ($res);
      if (!$row['deleted'])
      {
        start_session();
        $_SESSION['id']    = $row['id'];
        $_SESSION['name']  = $row['name'];
        $_SESSION['email'] = $row['email'];
        $response['status'] = '1';
      }
    }

    header('Content-type: application/json');
    echo json_encode($response);
  }