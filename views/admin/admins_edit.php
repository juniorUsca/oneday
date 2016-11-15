<?php
if( !is_logged() ) {
  header("Location: ".$HOSTPATH."/admin/login.php");
  die();
}
$_SESSION['form_token'] = md5(uniqid(rand(), TRUE));
$_SESSION['token_time'] = time();

$row = getDataRow (leerParam('id','0'), 'users');
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
<body id="sticky-footer">

  <?php include('header.php');?>

  <main id="sticky-footer">
    <div class="container">
      <form id="content-form" action="#">
        <!-- HIDDEN INPUT FORM -->
        <input value="<?php if(!empty($row)) echo leerParam('id','0'); else echo '0';?>" name="data-id" type="hidden" /> 
        <input type="hidden" name="form_token" value="<?php echo $_SESSION['form_token']; ?>" /> <!-- END HIDDEN INPUT FORM -->
    
        <!-- TESTIMONIOS SECTION -->
        <section class="section row">
          <div class="col s12 m12">
            
            <h4>Admin</h4>

            <div class="row">
              <div class="input-field col s12">
                <input name="name" id="name" type="text" value="<?php if(!empty($row['name'])) echo $row['name']?>" class="validate" required />
                <label for="name">Nombre</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input name="email" id="email" type="text" value="<?php if(!empty($row['email'])) echo $row['email']?>" class="validate" required />
                <label for="email">Email</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input name="password" id="password" type="text" value="" class="validate" required />
                <label for="password">Password</label>
              </div>
            </div>
              

          </div>
        </section> <!-- END TESTIMONIOS SECTION -->

        <div class="fixed-action-btn save-button">
          <button type='submit' class="btn-floating btn-large waves-effect waves-light pink"><i class="material-icons">save</i></button>
        </div>

      </form>
    </div>
  </main>

  <?php include('footer.php');?>
  
  <script type="text/javascript">
(function($){
  $(function(){

    $('.preloader-background').fadeOut('slow');
    logout('<?php echo $HOSTPATH;?>/core/logout.php', '<?php echo $HOSTPATH;?>/admin/index.php');

    saveForm('<?php echo $HOSTPATH;?>/core/saveAdmin.php', '<?php echo $HOSTPATH;?>/admin/admins/');

  }); // end of document ready
})(jQuery); // end of jQuery name space


  </script>
</body>
</html>
