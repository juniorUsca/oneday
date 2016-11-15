<?php
if( !is_logged() ) {
  header("Location: ".$HOSTPATH."/admin/login.php");
  die();
}

$rows = getDataTable ('subscripciones', 'data-date', 'ASC', '`data-active`=1');

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title><?php echo $company_name;?> - Admin</title>
  <meta name="description" content="menor a 160 caracteres" />
  <meta name="keywords" content="menor a 300 caracteres" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="<?php echo $company_developer_isotipo;?>" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo $static;?>/css/style.css">
</head>
<body id="sticky-footer">
  <?php $CURRENT_TAB = 'dashboard';?>
  <?php include('header.php');?>

  <main id="sticky-footer">
    <div class="container">
      
      <!-- SUBSCRITOS SECTION -->
      <section class="section row">
        <div class="col s12 m12">
          
          <h4>Subscritos Recientemente</h4>

          <table class="striped highlight responsive-table">
            <thead>
              <tr>
                  <th data-field="id">Id</th>
                  <th data-field="names">Nombres</th>
                  <th data-field="lastname">Apellidos</th>
                  <th data-field="email">Email</th>
                  <th data-field="whatsapp">WhatsApp</th>
                  <th data-field="years">Edad</th>
                  <th data-field="date">Fecha de Subscripcion</th>
                  <th >Opciones</th>
              </tr>
            </thead>
            <tbody class="js-content-table">
              <?php foreach ($rows as $keyrow => $row): ?>
                <tr>
                  <td><?php echo $keyrow + 1;?></td>
                  <td><?php echo $row['data-name'];?></td>
                  <td><?php echo $row['data-lastname'];?></td>
                  <td><?php echo $row['data-email'];?></td>
                  <td><?php echo $row['data-whatsapp'];?></td>
                  <td><?php echo $row['data-years'];?></td>
                  <td><?php echo $row['data-date'];?></td>
                  <td>
                    <p>
                      <input type="checkbox" id="<?php echo "check".($keyrow + 1);?>" value="<?php echo $row['id'];?>" />
                      <label for="<?php echo "check".($keyrow + 1);?>"></label>
                    </p>
                    
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

        </div>
      </section> <!-- END SUBSCRITOS SECTION -->

      <div class="fixed-action-btn save-button">
        <button id="archiveSubscriptions" class="btn-floating btn-large waves-effect waves-light pink"><i class="material-icons">archive</i></button>
      </div>

    </div>
  </main>

  <?php include('footer.php');?>

  <script type="text/javascript">
(function($){
  $(function(){

    logout('<?php echo $HOSTPATH;?>/core/logout.php', '<?php echo $HOSTPATH;?>/admin/');
    readMessages('<?php echo popSession('message');?>', '<?php echo popSession('color');?>');
    $('.preloader-background').fadeOut('slow');

    archiveSubscriptions('<?php echo $HOSTPATH?>/core/archiveSubscriptions.php', '<?php echo $HOSTPATH;?>/admin/');

  }); // end of document ready
})(jQuery); // end of jQuery name space

function archiveSubscriptions(urlPost, urlRedirect){
  $('#archiveSubscriptions').click(function(){
    $('.preloader-background').fadeIn('slow');

    var val = [];
    $(':checkbox:checked').each(function(i){
      val[i] = $(this).val();
    });

    $.ajax({
      url: urlPost,
      type: 'POST',
      data: {keys: val}
    })
    .done(function(resp) {
      
      if ( resp['status'] == '1' ){
        //meesage ok
        window.location.replace(urlRedirect);
      }
      else {
        //message bad
        console.log(resp);
        window.location.replace(urlRedirect);
      }
    })
    .fail(function(fail) {
      console.log('error',fail);
      window.location.replace(urlRedirect);
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
