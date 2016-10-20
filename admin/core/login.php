<?php

  include('utils.php');

  $email    = leerParam('email', '');
  $password = leerParam('password', '');

  if ( !empty ($email) && !empty ($password) ) {
    $con = conectar();
    $sql = "SELECT * FROM users";
    $res = mysqli_query($con, $sql);
    desconectar($con);

    $rowCount = mysqli_num_rows($res);
    if ($rowCount > 0) {
      $row = mysqli_fetch_array ($res);
      if (!$row['deleted'])
        echo "asd";
      /*$_SESSION['id']   = $row['id'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['email'] = $row['email'];*/
    }
  }