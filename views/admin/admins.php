<?php
if( !is_logged() ) {
  header("Location: ".$HOSTPATH."/admin/login.php");
  die();
}
$_SESSION['form_token'] = md5(uniqid(rand(), TRUE));
$_SESSION['token_time'] = time();

$rows = getDataTable ('users', 'id', 'DESC', 'deleted=0');
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
  <?php $CURRENT_TAB = 'admins';?>
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
                  <th data-field="name">Nombre</th>
                  <th data-field="email">Email</th>
                  <th data-field="modifiedAt">Ultima Modificacion</th>
                  <th data-field="createdAt">Creado En</th>
                  <th >Opciones</th>
              </tr>
            </thead>
            <tbody class="js-content-table">
              <?php foreach ($rows as $keyrow => $row): ?>
                <tr>
                  <td><?php echo $keyrow + 1;?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['modifiedAt'];?></td>
                  <td><?php echo $row['createdAt'];?></td>
                  <td>
                    <a href="<?php echo $HOSTPATH.'/admin/admins/edit/?id='.$row['id'];?>" class="option-edit">
                      <i class="material-icons">edit</i>
                    </a>
                    <a href="<?php echo $HOSTPATH.'/core/delAdmin.php?id='.$row['id'].'&form_token='.$_SESSION['form_token'];?>" class="option-delete">
                      <i class="material-icons">delete</i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

        </div>
      </section> <!-- END TESTIMONIOS SECTION -->

      <div class="fixed-action-btn save-button">
        <a href="<?php echo $HOSTPATH;?>/admin/admins/edit/?id=0" class="btn-floating btn-large waves-effect waves-light pink"><i class="material-icons">add</i></a>
      </div>

    </div>
  </main>

  <?php include('footer.php');?>
  
  <script type="text/javascript">
(function($){
  $(function(){

    logout('<?php echo $HOSTPATH;?>/core/logout.php', '<?php echo $HOSTPATH;?>/admin/index.php');
    readMessages('<?php echo popSession('message');?>', '<?php echo popSession('color');?>');
    $('.preloader-background').fadeOut('slow');

  }); // end of document ready
})(jQuery); // end of jQuery name space

  </script>
</body>
</html>
