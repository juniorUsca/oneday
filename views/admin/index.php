<?php
if( !is_logged() ) {
  header("Location: ".$HOSTPATH."/admin/login.php");
  die();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title><?php echo $company_name;?> - Admin</title>
  <meta name="description" content="menor a 160 caracteres" />
  <meta name="keywords" content="menor a 300 caracteres" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo $static;?>/css/style.css">
</head>
<body>

  <?php include('header.php');?>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Starter Template</h1>
      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

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

    logout();
    $('.preloader-background').fadeOut('slow');

  }); // end of document ready
})(jQuery); // end of jQuery name space

function logout() {
  $('.js-logout').click( function () {
    $('.preloader-background').fadeIn('slow');
    $.ajax({
      url:  '<?php echo $HOSTPATH;?>/core/logout.php',
      type: 'POST',
      dataType: 'json'
    })
    .done(function(resp) {
      window.location.replace('<?php echo $HOSTPATH;?>/admin/index.php');
    })
    .fail(function(fail) {
      console.log('error',fail);
    })
    .always(function() {
      $('.preloader-background').fadeOut('slow');
    })
    ;
    
    return false;
  });
}


  </script>
</body>
</html>
