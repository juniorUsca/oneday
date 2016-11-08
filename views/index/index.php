<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
  <title><?php echo getData('data-seo-title','inicio');?></title>
  <link rel="icon" href="<?php echo $static;?>/imgs/logo_q.png" />
  <meta name="description" content="<?php echo getData('data-seo-description','inicio');?>" />
  <meta name="keywords" content="<?php echo getData('data-seo-keywords','inicio');?>" />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="<?php echo $static;?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="<?php echo $static;?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <style>
    .cert-1:hover {
      background-color: <?php echo getData('data-certificate1-color','inicio');?>;
    }
    .cert-2:hover {
      background-color: <?php echo getData('data-certificate2-color','inicio');?>;
    }
    nav ul li.active {
      background-color: <?php echo getData('data-tab-color','inicio');?>;
    }
  </style>
</head>
<body>
  <?php $CURRENT_TAB = "inicio";?>
  <?php include('header.php');?>

  <!-- MODAL WELCOME -->
  <div id="modal-welcome" class="modal" style="width: 85%; max-height: 100%; height: 90%; border-radius: 0;">
    <div class="modal-content" style="background: url('<?php echo $HOSTPATH.getData('data-promotion-image','inicio');?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; height: 100%;">
      <div id="data-content" style="height: 100%;">
        <div class="section" style="height: 100%;">

          <div class="row" style="height: 100%;">
            <div class="col s12 m6 offset-m1 valign-wrapper" style="height: 100%;">
              
              <div class="valign">
                <h1 class="yellow-text center"><?php echo getData('data-promotion-title','inicio');?></h1>
                <h5 class="white-text center"><?php echo getData('data-promotion-message','inicio');?></h5>
              </div>
              
            </div>
            <div class="col s12 m4 offset-m1 valign-wrapper" style="height: 100%;">
              
              <div class="card-panel grey lighten-5 black-text valign">
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
    </div>
  </div> <!-- END MODAL WELCOME -->


  <div id="index-banner" class="parallax-container index-banner">
    
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row" style="margin-bottom: 0;">

          <div class="col s12 m6 l5 offset-l1">
              <h3 class="header left">
                <?php echo getData('data-banner-title','inicio');?>
              </h3>
              <div class="row left">
                <h5 class="header col s12">
                  <?php echo getData('data-banner-subtitle','inicio');?>
                </h5>
              </div>
              <div class="row left">
                <h6 class="header col s12">
                  <?php echo getData('data-banner-subsubtitle','inicio');?>
                </h6>
              </div>

              <div class="row left">
                <img src="<?php echo $HOSTPATH.getData('data-banner-icono1','inicio');?>" alt="<?php echo getData('data-banner-icono1-alt','inicio');?>" class="circle responsive-img" style="height: 100px;width: 100px;">
                <img src="<?php echo $HOSTPATH.getData('data-banner-icono2','inicio');?>" alt="<?php echo getData('data-banner-icono2-alt','inicio');?>" class="circle responsive-img" style="height: 100px;width: 100px;">
                <img src="<?php echo $HOSTPATH.getData('data-banner-icono3','inicio');?>" alt="<?php echo getData('data-banner-icono3-alt','inicio');?>" class="circle responsive-img" style="height: 100px;width: 100px;">
              </div>              
          </div>

          <div class="col s12 m6 l4 offset-l1">
            <div class="card-panel grey lighten-5 black-text">
                
              <form class="contacto">
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

    <div class="parallax"><img src="<?php echo $HOSTPATH.getData('data-banner-image','inicio');?>" alt="<?php echo getData('data-banner-image-alt','inicio');?>"></div>
  </div>


  <div id="data-content" class="container">
    <div class="section">

      <div class="row">
        <div class="col s12">
          <h5>
            <?php echo getData('data-paragraph-title','inicio');?>
          </h5>
          <p class="space">
            <?php echo getData('data-paragraph-message','inicio');?>
          </p>
        </div>
      </div>

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text">
              <!-- <i class="material-icons">flash_on</i> -->
              <img src="<?php echo $HOSTPATH.getData('data-features-icono1','inicio');?>" alt="<?php echo getData('data-features-icono1-alt','inicio');?>" style="max-height: 80px;" />
            </h2>
            <h5 class="center">
              <?php echo getData('data-feature1-title','inicio');?>
            </h5>
            <p class="light center">
              <?php echo getData('data-feature1-message','inicio');?>
            </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center green-text">
              <img src="<?php echo $HOSTPATH.getData('data-features-icono2','inicio');?>" alt="<?php echo getData('data-features-icono2-alt','inicio');?>" style="max-height: 80px;" />
            </h2>
            <h5 class="center">
              <?php echo getData('data-feature2-title','inicio');?>
            </h5>
            <p class="light center">
              <?php echo getData('data-feature2-message','inicio');?>
            </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center red-text">
              <img src="<?php echo $HOSTPATH.getData('data-features-icono3','inicio');?>" alt="<?php echo getData('data-features-icono3-alt','inicio');?>" style="max-height: 80px;" />
            </h2>
            <h5 class="center">
              <?php echo getData('data-feature3-title','inicio');?>
            </h5>
            <p class="light center">
              <?php echo getData('data-feature3-message','inicio');?>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">
            <?php echo getData('data-banner2-title','inicio');?>
          </h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?php echo $HOSTPATH.getData('data-banner2-image','inicio');?>" alt="<?php echo getData('data-banner2-image-alt','inicio');?>"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h4>
            <?php echo getData('data-certificate-title','inicio');?>
          </h4>
        </div>
      </div>

      <div class="row">
        <div class="col s12 m6 center">
          <div class="card-panel hoverable cert cert-1">
            <h5>
              <?php echo getData('data-certificate1-title','inicio');?>
            </h5>
            <div class="icon-box">
              <img src="<?php echo $HOSTPATH.getData('data-certificate1-image','inicio');?>" alt="<?php echo getData('data-certificate1-image-alt','inicio');?>" width="60" height="60">
            </div>
            <p>
              <?php echo getData('data-certificate1-message','inicio');?>
            </p>
            <a href="<?php echo "$HOSTPATH";?>/oratoria/" class="waves-effect waves-light btn-large white black-text">Mas Información</a>
          </div>
        </div>
        <div class="col s12 m6 center">
          <div class="card-panel hoverable cert cert-2">
            <h5>
              <?php echo getData('data-certificate2-title','inicio');?>
            </h5>
            <div class="icon-box">
              <img src="<?php echo $HOSTPATH.getData('data-certificate2-image','inicio');?>" alt="<?php echo getData('data-certificate2-image-alt','inicio');?>" width="60" height="60">
            </div>
            <p>
              <?php echo getData('data-certificate2-message','inicio');?>
            </p>
            <a href="<?php echo "$HOSTPATH";?>/coaching/" class="waves-effect waves-light btn-large white black-text">Mas Información</a>
          </div>
        </div>
      </div>

    </div>
  </div>

<style type="text/css">
  .image:after {
    content: '\A';
    position: absolute;
    width: 100%; height:100%;
    top:0; left:0;
    background:rgba(0,0,0,0.6);
    opacity: 0.5;
    transition: all 1s;
    -webkit-transition: all 1s;
}
</style>


<?php $testimonios = getDataTable ('testimonios');?>
  <div class="carousel purple darken-2 carousel-slider center" data-indicators="true">
    <?php foreach ($testimonios as $keyrow => $row): ?>

    <div class="carousel-item parallax-container white-text">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <h2 class="header col s12 light"><?php echo $row['data-message'];?></h2>
            <p class="white-text"><?php echo $row['data-author'];?></p>
          </div>
        </div>
      </div>
      <div class="parallax image">
        <img src="<?php echo $HOSTPATH.$row['data-image'];?>" alt="<?php echo $row['data-image-alt'];?>" />
      </div>
    </div>

    <?php endforeach; ?>
    <!--<div class="carousel-item amber white-text" href="#two!">
      <h2>“El contenido de los cursos de NexU son muy completos y prácticos, no te llenan la cabeza con demasiados conceptos teóricos, que es como realmente se aprende la programación”</h2>
      <p class="white-text">– Alex Torres</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>“El contenido de los cursos de NexU son muy completos y prácticos, no te llenan la cabeza con demasiados conceptos teóricos, que es como realmente se aprende la programación”</h2>
      <p class="white-text">– Alex Torres</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>“El contenido de los cursos de NexU son muy completos y prácticos, no te llenan la cabeza con demasiados conceptos teóricos, que es como realmente se aprende la programación”</h2>
      <p class="white-text">– Alex Torres</p>
    </div>-->
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h4>Nuestros Aliados</h4>
        </div>
      </div>

      <div class="row" style="text-align: center; font-size: 0;">
        
        <?php $aliados = getDataTable ('aliados');?>
        <?php foreach ($aliados as $keyrow => $row): ?>
        <div class="col s6 m3 l2 center" style="display: inline-block; float: none; font-size: 1rem;">
          <div class="card-panel hoverable">
            <img src="<?php echo $HOSTPATH.$row['data-image'];?>" alt="<?php echo $row['data-image-alt'];?>" style="max-height: 120px; max-width: 120px;" />
          </div>
        </div>
        <?php endforeach; ?>

      </div>

    </div>
  </div>

  <?php include('footer.php');?>

  </body>
</html>
