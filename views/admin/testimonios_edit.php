<?php
if( !is_logged() ) {
  header("Location: ".$HOSTPATH."/admin/login.php");
  die();
}

$row = getDataRow (leerParam('id','0'), 'testimonios');
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
        <input value="<?php if(!empty($row)) echo leerParam('id','0'); else echo '0';?>" name="data-id" type="hidden" /> <!-- END HIDDEN INPUT FORM -->
    
        <!-- TESTIMONIOS SECTION -->
        <section class="section row">
          <div class="col s12 m12">
            
            <h4>Testimonio</h4>

            <div class="row">
              <div class="input-field col s12">
                <textarea id="data-message" name="data-message" class="materialize-textarea" required><?php if(!empty($row['data-message'])) echo $row['data-message']?></textarea>
                <label for="data-message">Testimonio</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input name="data-author" id="data-author" type="text" value="<?php if(!empty($row['data-author'])) echo $row['data-author']?>" class="validate" required />
                <label for="data-author">Autor</label>
              </div>
            </div>
            
            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php if(empty($row['data-image'])) echo $static.'/imgs/prev.png'; else echo $HOSTPATH.$row['data-image'];?>" />
                  <input name="data-image" id="data-image" type="file" />
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php if(!empty($row['data-image'])) echo $HOSTPATH.$row['data-image'];?>" class="file-path validate" type="text" placeholder="Imagen de fondo del testimonio" required />
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input name="data-image-alt" id="data-image-alt" type="text" value="<?php if(!empty($row['data-image-alt'])) echo $row['data-image-alt']?>" class="validate" required />
                <label for="data-image-alt">Descripcion de Imagen de fondo del Testimonio</label>
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

    saveForm('<?php echo $HOSTPATH;?>/core/saveTestimonio.php', '<?php echo $HOSTPATH;?>/admin/testimonios/');

  }); // end of document ready
})(jQuery); // end of jQuery name space


  </script>
</body>
</html>
