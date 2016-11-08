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
  <!-- MATERIAL NOTE CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $static;?>/css/materialNote.css">
  <link href="<?php echo $static;?>/css/codeMirror/codemirror.css" rel="stylesheet">
  <link href="<?php echo $static;?>/css/codeMirror/monokai.css" rel="stylesheet"> <!-- END MATERIALNOTECSS -->

  <link rel="stylesheet" type="text/css" href="<?php echo $static;?>/css/style.css">
</head>
<body id="sticky-footer">

  <?php include('header.php');?>

  <main id="sticky-footer">
    <div class="container">
      <form id="content-form" action="#">
        <!-- HIDDEN INPUT FORM -->
        <input value="coaching" name="data-page-form" type="hidden" /> <!-- END HIDDEN INPUT FORM -->
        <!-- SEO SECTION -->
        <section class="section row">
          <div class="col s12 m12">
            
            <h4>SEO</h4>
            
            <div class="row">
              <div class="input-field col s12">
                <input value="<?php echo getData('data-seo-title','coaching');?>" name="data-seo-title" id="data-seo-title" type="text" class="validate" length='<?php echo $seo_title_size;?>'>
                <label for="data-seo-title">Titulo</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea id="data-seo-description" name="data-seo-description" class="materialize-textarea" length='<?php echo $seo_description_size;?>'><?php echo getData('data-seo-description','coaching');?></textarea>
                <label for="data-seo-description">Descripcion</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea id="data-seo-keywords" name="data-seo-keywords" class="materialize-textarea" length='<?php echo $seo_keywords_size;?>'><?php echo getData('data-seo-keywords','coaching');?></textarea>
                <label for="data-seo-keywords">Palabras Claves</label>
              </div>
            </div>

          </div>
        </section> <!-- END SEO SECTION -->

        <!-- CONTENT SECTION -->
        <section class="section row">
          <div class="col s12 m12">
            
            <h4>Contenido</h4>

            <h5>Pestaña</h5>

            <div class="row">
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-tab-name','coaching');?>" name="data-tab-name" id="data-tab-name" type="text" class="validate">
                <label for="data-tab-name">Nombre de Pestaña</label>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-tab-color','coaching');?>" name="data-tab-color" id="data-tab-color" type="text" class="validate">
                <label for="data-tab-color">Color de Pestaña</label>
              </div>
            </div>

            <h5>Banner</h5>
            
            <div class="row">
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-banner-title','coaching');?>" name="data-banner-title" id="data-banner-title" type="text" class="validate">
                <label for="data-banner-title">Titulo del Banner</label>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-banner-subtitle','coaching');?>" name="data-banner-subtitle" id="data-banner-subtitle" type="text" class="validate">
                <label for="data-banner-subtitle">SubTitulo del Banner</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-banner-image','coaching');?>" />
                  <input name="data-banner-image" id="data-banner-image" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-banner-image','coaching'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-banner-image-alt','coaching');?>" name="data-banner-image-alt" id="data-banner-image-alt" type="text" class="validate">
                <label for="data-banner-image-alt">Descripcion de la Imagen</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-banner-icono','coaching');?>" />
                  <input name="data-banner-icono" id="data-banner-icono" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-banner-icono','coaching'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-banner-icono-alt','coaching');?>" name="data-banner-icono-alt" id="data-banner-icono-alt" type="text" class="validate">
                <label for="data-banner-icono-alt">Descripcion de Icono1</label>
              </div>
            </div>
            
            

          </div>
        </section> <!-- END CONTENT SECTION -->

        <div class="fixed-action-btn save-button">
          <button id="save-form" type='submit' class="btn-floating btn-large waves-effect waves-light pink"><i class="material-icons">save</i></button>
        </div>

      </form>

      <section class="section row">
        <div class="col s12">
          
          <h4>Especificaciones</h4>

          <div class="row">
            <div class="input-field col s12">
              <div id="data-html-specs" class="editor">
                <?php echo getData('data-html-specs','coaching');?>
              </div>
            </div>
          </div>

          <h4>Descripcion</h4>

          <div class="row">
            <div class="input-field col s12">
              <div id="data-html-description" class="editor">
                <?php echo getData('data-html-description','coaching');?>
              </div>
            </div>
          </div>

          <h4>Detalles</h4>

          <div class="row">
            <div class="input-field col s12">
              <div id="data-html-details" class="editor">
                <?php echo getData('data-html-details','coaching');?>
              </div>
            </div>
          </div>

        </div>
      </section>
      
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
  <script type="text/javascript" src="<?php echo $static;?>/js/ckMaterializeOverrides.js"></script>
  <script type="text/javascript" src="<?php echo $static;?>/js/codeMirror/codemirror.js"></script>
  <script type="text/javascript" src="<?php echo $static;?>/js/codeMirror/xml.js"></script>
  <script type="text/javascript" src="<?php echo $static;?>/js/materialNote.min.js"></script>
  <script type="text/javascript" src="<?php echo $static;?>/js/init.js"></script>
  <script type="text/javascript">
(function($){
  $(function(){

    $('.preloader-background').fadeOut('slow');
    logout('<?php echo $HOSTPATH;?>/core/logout.php', '<?php echo $HOSTPATH;?>/admin/index.php');
    readMessages('<?php echo popSession('message');?>', '<?php echo popSession('color');?>');

    saveForm('<?php echo $HOSTPATH;?>/core/savePageContent.php', '<?php echo $HOSTPATH;?>/admin/coaching/', {
      'data-html-specs': $('#data-html-specs+.note-editor .note-editable'),
      'data-html-description': $('#data-html-description+.note-editor .note-editable'),
      'data-html-details': $('#data-html-details+.note-editor .note-editable')
    }, 'html');

  }); // end of document ready
})(jQuery); // end of jQuery name space

  </script>
</body>
</html>
