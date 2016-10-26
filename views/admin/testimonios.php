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
          
          <h4>Testimonios</h4>

          <table class="striped highlight responsive-table">
            <thead>
              <tr>
                  <th data-field="id">Id</th>
                  <th data-field="testimonio">Testimonio</th>
                  <th data-field="autor">Autor</th>
                  <th data-field="imagen">Imagen</th>
                  <th >Opciones</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dicta sapiente, quo in minus nostrum praesentium quidem, corporis sed a vel quisquam ullam incidunt deserunt numquam, officia voluptas eligendi est!</td>
                <td>Junior Usca</td>
                <td>
                  <figure class="no-margin height-100">
                    <img src="<?php echo $static;?>/imgs/logo2.png" class="prev-img-table">
                  </figure>
                </td>
                <td>
                  <i class="material-icons">edit</i>
                  <i class="material-icons">delete</i>
                </td>
              </tr>
            </tbody>
          </table>

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
