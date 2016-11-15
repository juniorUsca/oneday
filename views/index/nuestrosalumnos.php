<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
  <title><?php echo getData('data-seo-title','nuestrosalumnos');?></title>
  <link rel="icon" href="<?php echo $static;?>/imgs/logo_q.png" />
  <meta name="description" content="<?php echo getData('data-seo-description','nuestrosalumnos');?>" />
  <meta name="keywords" content="<?php echo getData('data-seo-keywords','nuestrosalumnos');?>" />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="<?php echo $static;?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="<?php echo $static;?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <style>
    nav ul li.active {
      background-color: <?php echo getData('data-tab-color','nuestrosalumnos');?>;
    }
  </style>
</head>
<body>

  <?php $CURRENT_TAB = "nuestrosalumnos";?>
  <?php include('header.php');?>

  <div id="index-banner" class="parallax-container index-banner">
    
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row" style="margin-bottom: 0;">

          <div class="col s12 m6 l5 offset-l1">
              <h3 class="header left">
                <?php echo getData('data-banner-title','nuestrosalumnos');?>
              </h3>
              <div class="row left">
                <h5 class="header col s12">
                  <?php echo getData('data-banner-subtitle','nuestrosalumnos');?>
                </h5>
              </div>
              <div class="row left">
                <figure style="width: 100px; margin: 12px;">
                  <img src="<?php echo $HOSTPATH.getData('data-banner-icono','nuestrosalumnos');?>" alt="<?php echo getData('data-banner-icono-alt','nuestrosalumnos');?>" class="responsive-img" />
                </figure>
              </div>
          </div>

          <div class="col s12 m6 l4 offset-l1">
            <div class="card-panel grey lighten-5 black-text">
                
              <form class="contacto" action="#">
                <div class="row" style="margin-bottom: 0;">
                  
                  <div class="input-field col s12" style="margin-top: 1rem;">
                    <input id="first_name" name="data-name" type="text" class="validate" required />
                    <label for="first_name">Nombres</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="last_name" name="data-lastname" type="text" class="validate" required />
                    <label for="last_name">Apellidos</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="email" name="data-email" type="email" class="validate" required />
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="whatsapp" name="data-whatsapp" type="text" class="validate" required />
                    <label for="whatsapp">WhatsApp</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="years_old" name="data-years" type="text" class="validate" required />
                    <label for="years_old">Edad</label>
                  </div>

                  <button class="col s12 waves-effect waves-light btn-large action-button" type="submit" name="registrar">Comienza Ahora</button>

                </div>
              </form>

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="parallax"><img src="<?php echo $HOSTPATH.getData('data-banner-image','nuestrosalumnos');?>" alt="<?php echo getData('data-banner-image-alt','nuestrosalumnos');?>"></div>
  </div>


  <div class="container">
    <div class="section">
      <div class="row">
        <?php $galeria = getDataTable ('galeria', 'data-date', 'ASC');?>
        <?php foreach ($galeria as $keyrow => $row): ?>
          <div class="col s12 m4">
            <figure>
              <img src="<?php echo $HOSTPATH.$row['data-image'];?>" alt="<?php echo $row['data-image-alt'];?>" data-caption="<?php echo $row['data-image-alt'];?>" class="responsive-img materialboxed" style="margin: 0 auto;"/>
            </figure>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <?php include('footer.php');?>

  </body>
</html>
