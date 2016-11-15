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
  <?php $CURRENT_TAB = 'inicio';?>
  <?php include('header.php');?>

  <main id="sticky-footer">
    <div class="container">
      <form id="content-form" action="#">
        <!-- HIDDEN INPUT FORM -->
        <input value="inicio" name="data-page-form" type="hidden" /> <!-- END HIDDEN INPUT FORM -->
        <!-- SEO SECTION -->
        <section class="section row">
          <div class="col s12 m12">
            
            <h4>SEO</h4>
            
            <div class="row">
              <div class="input-field col s12">
                <input value="<?php echo getData('data-seo-title','inicio');?>" name="data-seo-title" id="data-seo-title" type="text" class="validate" length='<?php echo $seo_title_size;?>'>
                <label for="data-seo-title">Titulo</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea id="data-seo-description" name="data-seo-description" class="materialize-textarea" length='<?php echo $seo_description_size;?>'><?php echo getData('data-seo-description','inicio');?></textarea>
                <label for="data-seo-description">Descripcion</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea id="data-seo-keywords" name="data-seo-keywords" class="materialize-textarea" length='<?php echo $seo_keywords_size;?>'><?php echo getData('data-seo-keywords','inicio');?></textarea>
                <label for="data-seo-keywords">Palabras Claves</label>
              </div>
            </div>

          </div>
        </section> <!-- END SEO SECTION -->

        <!-- PROMOTION SECTION -->
        <section class="section row">
          <div class="col s12 m12">
            
            <h4>Promocion</h4>
            
            <div class="row">
              <div class="input-field col s12">
                <input value="<?php echo getData('data-promotion-title','inicio');?>" name="data-promotion-title" id="data-promotion-title" type="text" class="validate" />
                <label for="data-promotion-title">Titulo</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea id="data-promotion-message" name="data-promotion-message" class="materialize-textarea" /><?php echo getData('data-promotion-message','inicio');?></textarea>
                <label for="data-promotion-message">Mensaje</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-promotion-image','inicio');?>" />
                  <input name="data-promotion-image" id="data-promotion-image" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-promotion-image','inicio'));?>" class="file-path validate" type="text" placeholder="Banner de Promocion">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-promotion-image-alt','inicio');?>" name="data-promotion-image-alt" id="data-promotion-image-alt" type="text" class="validate" />
                <label for="data-promotion-image-alt">Descripcion de la Imagen</label>
              </div>
            </div>

          </div>
        </section> <!-- END PROMOTION SECTION -->

        <!-- CONTENT SECTION -->
        <section class="section row">
          <div class="col s12 m12">
            
            <h4>Contenido</h4>

            <h5>Pestaña</h5>

            <div class="row">
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-tab-name','inicio');?>" name="data-tab-name" id="data-tab-name" type="text" class="validate">
                <label for="data-tab-name">Nombre de Pestaña</label>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-tab-color','inicio');?>" name="data-tab-color" id="data-tab-color" type="text" class="validate">
                <label for="data-tab-color">Color de Pestaña</label>
              </div>
            </div>

            <h5>Banner</h5>
            
            <div class="row">
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-banner-title','inicio');?>" name="data-banner-title" id="data-banner-title" type="text" class="validate">
                <label for="data-banner-title">Titulo del Banner</label>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-banner-subtitle','inicio');?>" name="data-banner-subtitle" id="data-banner-subtitle" type="text" class="validate">
                <label for="data-banner-subtitle">SubTitulo del Banner</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input value="<?php echo getData('data-banner-subsubtitle','inicio');?>" name="data-banner-subsubtitle" id="data-banner-subsubtitle" type="text" class="validate">
                <label for="data-banner-subsubtitle">SubSubTitulo del Banner</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-banner-image','inicio');?>" />
                  <input name="data-banner-image" id="data-banner-image" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-banner-image','inicio'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-banner-image-alt','inicio');?>" name="data-banner-image-alt" id="data-banner-image-alt" type="text" class="validate">
                <label for="data-banner-image-alt">Descripcion de la Imagen</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-banner-icono1','inicio');?>" />
                  <input name="data-banner-icono1" id="data-banner-icono1" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-banner-icono1','inicio'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-banner-icono1-alt','inicio');?>" name="data-banner-icono1-alt" id="data-banner-icono1-alt" type="text" class="validate">
                <label for="data-banner-icono1-alt">Descripcion de Icono1</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-banner-icono2','inicio');?>" />
                  <input name="data-banner-icono2" id="data-banner-icono2" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-banner-icono2','inicio'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-banner-icono2-alt','inicio');?>" name="data-banner-icono2-alt" id="data-banner-icono2-alt" type="text" class="validate">
                <label for="data-banner-icono2-alt">Descripcion de Icono2</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-banner-icono3','inicio');?>" />
                  <input name="data-banner-icono3" id="data-banner-icono3" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-banner-icono3','inicio'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-banner-icono3-alt','inicio');?>" name="data-banner-icono3-alt" id="data-banner-icono3-alt" type="text" class="validate">
                <label for="data-banner-icono3-alt">Descripcion de Icono3</label>
              </div>
            </div>

            <h5>Parrafo</h5>

            <div class="row">
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-paragraph-title','inicio');?>" name="data-paragraph-title" id="data-paragraph-title" type="text" class="validate" />
                <label for="data-paragraph-title">Titulo</label>
              </div>
              <div class="input-field col s12 m6">
                <textarea id="data-paragraph-message" name="data-paragraph-message" class="materialize-textarea" /><?php echo getData('data-paragraph-message','inicio');?></textarea>
                <label for="data-paragraph-message">Mensaje</label>
              </div>
            </div>

            <h5>Caracteristicas</h5>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-features-icono1','inicio');?>" />
                  <input name="data-features-icono1" id="data-features-icono1" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-features-icono1','inicio'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-features-icono1-alt','inicio');?>" name="data-features-icono1-alt" id="data-features-icono1-alt" type="text" class="validate">
                <label for="data-features-icono1-alt">Descripcion de Icono1</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-feature1-title','inicio');?>" name="data-feature1-title" id="data-feature1-title" type="text" class="validate" />
                <label for="data-feature1-title">Titulo de Caracteristica1</label>
              </div>
              <div class="input-field col s12 m6">
                <textarea id="data-feature1-message" name="data-feature1-message" class="materialize-textarea" /><?php echo getData('data-feature1-message','inicio');?></textarea>
                <label for="data-feature1-message">Mensaje de Caracteristica1</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-features-icono2','inicio');?>" />
                  <input name="data-features-icono2" id="data-features-icono2" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-features-icono2','inicio'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-features-icono2-alt','inicio');?>" name="data-features-icono2-alt" id="data-features-icono2-alt" type="text" class="validate">
                <label for="data-features-icono2-alt">Descripcion de Icono2</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-feature2-title','inicio');?>" name="data-feature2-title" id="data-feature2-title" type="text" class="validate" />
                <label for="data-feature2-title">Titulo de Caracteristica2</label>
              </div>
              <div class="input-field col s12 m6">
                <textarea id="data-feature2-message" name="data-feature2-message" class="materialize-textarea" /><?php echo getData('data-feature2-message','inicio');?></textarea>
                <label for="data-feature2-message">Mensaje de Caracteristica2</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-features-icono3','inicio');?>" />
                  <input name="data-features-icono3" id="data-features-icono3" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-features-icono3','inicio'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-features-icono3-alt','inicio');?>" name="data-features-icono3-alt" id="data-features-icono3-alt" type="text" class="validate">
                <label for="data-features-icono3-alt">Descripcion de Icono3</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-feature3-title','inicio');?>" name="data-feature3-title" id="data-feature3-title" type="text" class="validate" />
                <label for="data-feature3-title">Titulo de Caracteristica2</label>
              </div>
              <div class="input-field col s12 m6">
                <textarea id="data-feature3-message" name="data-feature3-message" class="materialize-textarea" /><?php echo getData('data-feature3-message','inicio');?></textarea>
                <label for="data-feature3-message">Mensaje de Caracteristica2</label>
              </div>
            </div>

            <h5>Banner 2</h5>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-banner2-image','inicio');?>" />
                  <input name="data-banner2-image" id="data-banner2-image" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-banner2-image','inicio'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-banner2-image-alt','inicio');?>" name="data-banner2-image-alt" id="data-banner2-image-alt" type="text" class="validate">
                <label for="data-banner2-image-alt">Descripcion de Banner2</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input value="<?php echo getData('data-banner2-title','inicio');?>" name="data-banner2-title" id="data-banner2-title" type="text" class="validate" />
                <label for="data-banner2-title">Texto de Banner2</label>
              </div>
            </div>

            <h5>Certificate</h5>

            <div class="row">
              <div class="input-field col s12">
                <input value="<?php echo getData('data-certificate-title','inicio');?>" name="data-certificate-title" id="data-certificate-title" type="text" class="validate" />
                <label for="data-certificate-title">Titulo de Certificate</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12 m5">
                <input value="<?php echo getData('data-certificate1-title','inicio');?>" name="data-certificate1-title" id="data-certificate1-title" type="text" class="validate" />
                <label for="data-certificate1-title">Titulo de Certificate1</label>
              </div>
              <div class="input-field col s12 m5">
                <textarea id="data-certificate1-message" name="data-certificate1-message" class="materialize-textarea" /><?php echo getData('data-certificate1-message','inicio');?></textarea>
                <label for="data-certificate1-message">Mensaje de Certificate1</label>
              </div>
              <div class="input-field col s12 m2">
                <input value="<?php echo getData('data-certificate1-color','inicio');?>" name="data-certificate1-color" id="data-certificate1-color" type="text" class="validate" />
                <label for="data-certificate1-color">Color de Certificate1</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-certificate1-image','inicio');?>" />
                  <input name="data-certificate1-image" id="data-certificate1-image" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-certificate1-image','inicio'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-certificate1-image-alt','inicio');?>" name="data-certificate1-image-alt" id="data-certificate1-image-alt" type="text" class="validate">
                <label for="data-certificate1-image-alt">Descripcion de Imagen Certificate1</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12 m5">
                <input value="<?php echo getData('data-certificate2-title','inicio');?>" name="data-certificate2-title" id="data-certificate2-title" type="text" class="validate" />
                <label for="data-certificate2-title">Titulo de Certificate2</label>
              </div>
              <div class="input-field col s12 m5">
                <textarea id="data-certificate2-message" name="data-certificate2-message" class="materialize-textarea" /><?php echo getData('data-certificate2-message','inicio');?></textarea>
                <label for="data-certificate2-message">Mensaje de Certificate2</label>
              </div>
              <div class="input-field col s12 m2">
                <input value="<?php echo getData('data-certificate2-color','inicio');?>" name="data-certificate2-color" id="data-certificate2-color" type="text" class="validate" />
                <label for="data-certificate2-color">Color de Certificate2</label>
              </div>
            </div>

            <div class="row">
              <div class="file-field input-field col s12 m6">
                <div class="btn">
                  <img class="prev-img" src="<?php echo $HOSTPATH.getData('data-certificate2-image','inicio');?>" />
                  <input name="data-certificate2-image" id="data-certificate2-image" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input value="<?php echo get_url_end(getData('data-certificate2-image','inicio'));?>" class="file-path validate" type="text" placeholder="Banner">
                </div>
              </div>
              <div class="input-field col s12 m6">
                <input value="<?php echo getData('data-certificate2-image-alt','inicio');?>" name="data-certificate2-image-alt" id="data-certificate2-image-alt" type="text" class="validate">
                <label for="data-certificate2-image-alt">Descripcion de Imagen Certificate2</label>
              </div>
            </div>

            <a target="_blank" href="<?php echo $HOSTPATH;?>/admin/testimonios/" class="waves-effect waves-light btn">Testimonios</a>

            <br/><br/>

            <a target="_blank" href="<?php echo $HOSTPATH;?>/admin/aliados/" class="waves-effect waves-light btn">Aliados</a>


          </div>
        </section> <!-- END CONTENT SECTION -->

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

    $('.preloader-background').fadeOut('slow');
    logout();
    chargeImage();

    saveForm();

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

function chargeImage() {
  $("input[type='file']").change(function(event) {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ["image/jpeg","image/png","image/jpg"];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
    {
      //$('#previewing').attr('src','noimage.png');
      //$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
      /// FORMATO NO ACEPTADO
      return false;
    }
    else {
      window.current_img = $(this).prev(".prev-img");
      var reader = new FileReader();
      reader.onload = imageIsLoaded;
      reader.readAsDataURL(this.files[0]);
    }
  });
}

function imageIsLoaded(e) {
  //$('#image_preview').css("display", "block");
  window.current_img.attr('src', e.target.result);
  //$('#previewing').attr('width', '250px');
  //$('#previewing').attr('height', '230px');
};

function saveForm() {
  $('#content-form').submit( function () {
    $('.preloader-background').fadeIn('slow');
    $.ajax({
      url: '<?php echo $HOSTPATH;?>/core/savePageContent.php',
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false
    })
    .done(function(resp) {
      
      if ( resp['status'] == '1' && resp['status_img'] == '1' ){
        //meesage ok
        Materialize.toast('Datos guardados', 3000, 'teal') 
      }
      else {
        //message bad
        console.log(resp);
        Materialize.toast('Ocurrio un problema', 3000, 'red') 
      }
    })
    .fail(function(fail) {
      Materialize.toast('Ocurrio un problema', 3000, 'red') 
      console.log('error',fail);
    })
    .always(function() {
      $('.preloader-background').fadeOut('slow');
    });
    
    return false;
  });
}

  </script>
</body>
</html>
