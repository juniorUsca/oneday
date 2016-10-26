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

  <?php include('header.php');?>

  <main id="sticky-footer">
    <div class="container">
    
      <!-- TESTIMONIOS SECTION -->
      <section class="section row">
        <div class="col s12 m12">
          
          <h4>Testimonio</h4>

          <div class="row">
            <div class="input-field col s12">
              <textarea id="data-message" name="data-message" class="materialize-textarea" /><?php echo getData('data-message','inicio');?></textarea>
              <label for="data-message">Testimonio</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input value="<?php echo getData('data-title','inicio');?>" name="data-title" id="data-title" type="text" class="validate" />
              <label for="data-title">Autor</label>
            </div>
          </div>
          
          <div class="row">
            <div class="file-field input-field col s12 m6">
              <div class="btn">
                <img class="prev-img" src="<?php echo $static?>/imgs/prev.png" />
                <input name="data-features-icono3" id="data-features-icono3" type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Imagen de fondo del testimonio">
              </div>
            </div>
            <div class="input-field col s12 m6">
              <input name="data-features-icono3-alt" id="data-features-icono3-alt" type="text" class="validate">
              <label for="data-features-icono3-alt">Descripcion de Imagen de fondo del Testimonio</label>
            </div>
          </div>
            

        </div>
      </section> <!-- END TESTIMONIOS SECTION -->

      <div class="fixed-action-btn save-button">
        <a href="<?php echo $HOSTPATH;?>/admin/testimonios/edit/?id=0" class="btn-floating btn-large waves-effect waves-light pink"><i class="material-icons">add</i></a>
      </div>

    </div>
  </main>

  <?php include('footer.php');?>
  
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
