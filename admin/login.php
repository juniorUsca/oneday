<?php

include('core/utils.php');
include('info.php');

if( is_logged() ) {
  header("Location: index.php");
    die();
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title><?php echo $company_name;?> - Login</title>
  <meta name="description" content="menor a 160 caracteres" />
  <meta name="keywords" content="menor a 300 caracteres" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="sticky-footer">

  <!-- HEADER -->
  <header>
    <!-- NAVBAR -->
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="<?php echo $login_url;?>" class="brand-logo height-100">
          <figure class="no-margin height-100">
            <img src="<?php echo $company_developer_logo;?>" height="100%" alt="<?php echo $company_developer_name;?>">
          </figure>
        </a>
      </div>
    </nav> <!-- END NAVBAR -->
  </header> <!-- END HEADER -->

  
  <main id="sticky-footer" class="valign-wrapper">
    <div class="container-login valign">
      

        <div class="row">
          <div class="col s12 grey lighten-4">
            <section class="section">
              <!-- LOGIN_FORM -->
              <form class="col s12" method="post" action="core/login.php">
                <div class='row'>
                  <div class='col s12'>
                    <h4 class="center">Ingreso</h4>
                  </div>
                </div>

                <div class='row'>
                  <div class='input-field col s12'>
                    <input class='validate' type='email' name='email' id='email' />
                    <label for='email'>Ingrese su correo</label>
                  </div>
                </div>

                <div class='row'>
                  <div class='input-field col s12'>
                    <input class='validate' type='password' name='password' id='password' />
                    <label for='password'>Ingrese su password</label>
                  </div>
                  <label style='float: right;'>
                    <a class='pink-text' href='#!' tabindex="-1"><b>Olvide la contraseña</b></a>
                  </label>
                </div>

                <br />
                
                <div class='row'>
                  <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Ingresar</button>
                </div>
              </form>
              <!-- END LOGIN_FORM -->
            </section>
          </div>
        </div>

      
    </div>
    
      
    
  </main>

  <footer class="page-footer orange no-padding">
    
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  <script type="text/javascript" src="js/init.js"></script>
</body>
</html>
