<?php
if( is_logged() ) {
  header("Location: ".$HOSTPATH."/admin/index.php");
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
  
  <link rel="icon" href="<?php echo $company_developer_isotipo;?>" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo $static;?>/css/style.css" />
</head>
<body id="sticky-footer">
  <!-- PRELOADER -->
  <div class="preloader-background">
    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue-only">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
  </div> <!-- END PRELOADER -->

  <!-- HEADER -->
  <header>
    <!-- NAVBAR -->
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="<?php echo $HOSTPATH;?>/admin/login.php" class="brand-logo height-100">
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
              <form id='loginForm' class="col s12" method="post">
                <div class='row'>
                  <div class='col s12'>
                    <h4 class="center">Ingreso</h4>
                  </div>
                </div>
                <div class='row'>
                  <div class='col s12'>
                    <h6 id="message" class="center pink-text">El correo o el password son incorrectos</h6>
                  </div>
                </div>

                <div class='row'>
                  <div class='input-field col s12'>
                    <input class='validate' type='email' name='email' id='email' required tabindex="1" />
                    <label for='email'>Ingrese su correo</label>
                  </div>
                </div>

                <div class='row'>
                  <div class='input-field col s12'>
                    <input class='validate' type='password' name='password' id='password' required tabindex="2" />
                    <label for='password'>Ingrese su password</label>
                  </div>
                  <label style='float: right;'>
                    <a class='pink-text' href='#!' tabindex="-1"><b>Olvide la contraseña</b></a>
                  </label>
                </div>

                <br />
                
                <div class='row'>
                  <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue' tabindex="3">Ingresar</button>
                </div>
              </form>
              <!-- END LOGIN_FORM -->
            </section>
          </div>
        </div>

      
    </div>
    
      
    
  </main>

  <!-- FOOTER -->
  <footer class="page-footer blue no-padding">
    <div class="footer-copyright">
      <div class="container white-text">
        Hecho por <a class="white-text" href="<?php echo $company_developer_page;?>">Debug</a>
      </div>
    </div>
  </footer> <!-- END FOOTER -->


  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?php echo $static;?>/js/init.js"></script>
  <script type="text/javascript">
(function($){
  $(function(){

    login();
    $('#message').hide();
    $('.preloader-background').fadeOut('slow');

  }); // end of document ready
})(jQuery); // end of jQuery name space


function login() {
  $('#loginForm').submit( function () {
    validate( $('#email').val(), $('#password').val() );
    return false;
  });
}


function validate( email, password ) {
  $('.preloader-background').fadeIn('slow');
  $.ajax({
    url: '<?php echo $HOSTPATH;?>/core/login.php',
    type: 'POST',
    dataType: 'json',
    data: {
      email: email,
      password: password
    }
  })
  .done(function(resp) {
    $('#message').hide();
    if ( resp['status'] == '1' )
      //redirect
      window.location.replace('<?php echo $HOSTPATH;?>/admin/index.php');
    else {
      //message bad
      $('#message').show();
    }
  })
  .fail(function(fail) {
    console.log('error',fail);
  })
  .always(function() {
    $('.preloader-background').fadeOut('slow');
  });
  
}
  </script>
</body>
</html>
