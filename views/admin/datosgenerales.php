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
<body id="sticky-footer">
  <?php $CURRENT_TAB = 'datosgenerales';?>
  <?php include('header.php');?>

  <main id="sticky-footer">
    <div class="container">
      <form id="content-form" action="#">
        <!-- HIDDEN INPUT FORM -->
        <input value="general" name="data-page-form" type="hidden" /> <!-- END HIDDEN INPUT FORM -->

        <!-- DATOS GENERALES SECTION -->
        <section class="section row">
          <div class="col s12 m12">
            
            <h4>Datos Generales</h4>
            
            <div class="row">
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-whatsapp','general');?>" name="data-whatsapp" id="data-whatsapp" type="text" class="validate" />
                <label for="data-whatsapp">WhatsApp</label>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-facebook1','general');?>" name="data-facebook1" id="data-facebook1" type="text" class="validate" />
                <label for="data-facebook1">Facebook 1</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-facebook2','general');?>" name="data-facebook2" id="data-facebook2" type="text" class="validate" />
                <label for="data-facebook2">Facebook 2</label>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-facebook3','general');?>" name="data-facebook3" id="data-facebook3" type="text" class="validate" />
                <label for="data-facebook3">Facebook 3</label>
              </div>
            </div>


            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-logo-image','general');?>" />
                  <input name="data-logo-image" id="data-logo-image" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-logo-image','general'));?>" class="file-path validate" type="text" placeholder="Banner de Promocion">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-logo-image-alt','general');?>" name="data-logo-image-alt" id="data-logo-image-alt" type="text" class="validate" />
                <label for="data-logo-image-alt">Descripcion del Logo</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea id="data-company-description" name="data-company-description" class="materialize-textarea"><?php echo getData('data-company-description','general');?></textarea>
                <label for="data-company-description">Descripcion de la Compañia</label>
              </div>
            </div>

          </div>
        </section> <!-- END DATOS GENERALES SECTION -->

        <div class="fixed-action-btn save-button">
          <button type='submit' class="btn-floating btn-large waves-effect waves-light pink"><i class="material-icons">save</i></button>
        </div>

      </form>
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

    logout('<?php echo $HOSTPATH;?>/core/logout.php', '<?php echo $HOSTPATH;?>/admin/index.php');
    saveForm('<?php echo $HOSTPATH;?>/core/savePageContent.php', '<?php echo $HOSTPATH;?>/admin/datosgenerales/');
    readMessages('<?php echo popSession('message');?>', '<?php echo popSession('color');?>');
    $('.preloader-background').fadeOut('slow');

  }); // end of document ready
})(jQuery); // end of jQuery name space

  </script>
</body>
</html>
