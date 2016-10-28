<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>One Day - Inicio</title>
  <link rel="icon" href="<?php echo $static;?>/imgs/logo.png">

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo $static;?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo $static;?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
    .cert-1:hover {
      background-color: <?php echo getData('data-certificate1-color','inicio');?>;
    }
    .cert-2:hover {
      background-color: <?php echo getData('data-certificate2-color','inicio');?>;
    }
  </style>
</head>
<body>
  <nav class="white">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">
        <img src="<?php echo $static;?>/imgs/logo2.png">
      </a>
      <div class="right black-text valign-wrapper hide-on-small-only" style="font-size: 18px;">
        <img src="<?php echo $static;?>/imgs/whatsapp-icon.png" class="circle responsive-img valign" style="height: 25px;">
        &nbsp 930 716 239
      </div>

      <ul id="nav-mobile" class="side-nav">
        <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">Oratoria</a></li>
        <li><a href="#">Coaching</a></li>
        <li><a href="#">Otros Cursos</a></li>
        <li><a href="#">Nuestros Alumnos</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <nav class="white" role="navigation" style="background: rgba(236, 236, 236, 0.4) !important; height: 44px; line-height: 44px;">

    <div class="nav-wrapper container">
      
      <div class="center black-text valign-wrapper brand-logo hide-on-med-and-up" style="display: flex; font-size: 18px;">
        <img src="<?php echo $static;?>/imgs/whatsapp-icon.png" class="circle responsive-img valign" style="height: 25px;">
        &nbsp 930 716 239
      </div>
      
      <ul class="left hide-on-med-and-down">
        <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">Oratoria</a></li>
        <li><a href="#">Coaching</a></li>
        <li><a href="#">Otros Cursos</a></li>
        <li><a href="#">Nuestros Alumnos</a></li>
      </ul>

      <ul class="right hide-on-med-and-down black-text" style="height: 100%;">
        <li style="height: 100%;">
          <a class="waves-effect waves-light" style="height: 100%; padding: 0; margin-left: 10px; margin-right: 10px;"><img src="<?php echo $static;?>/imgs/facebook.png" style="height: 34px; padding: 8px 0 0 0;"></a>
          <a class="waves-effect waves-light" style="height: 100%; padding: 0; margin-left: 10px; margin-right: 10px;"><img src="<?php echo $static;?>/imgs/facebook.png" style="height: 34px; padding: 8px 0 0 0;"></a>
          <a class="waves-effect waves-light" style="height: 100%; padding: 0; margin-left: 10px; margin-right: 10px;"><img src="<?php echo $static;?>/imgs/facebook.png" style="height: 34px; padding: 8px 0 0 0;"></a>
        </li>
        
      </ul>

    </div>

  </nav>

  <style>
    #slide-lead-modal {
        width: 300px;
        min-height: 200px;
        position: fixed;
        right: -300px;
        bottom: 0;
        background: 0 0;
        z-index: 900;
        -webkit-transition: all .1s;
        -o-transition: all .1s;
        transition: all .1s;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    #slider-button {
        border-radius: 3px 3px 0 0;
        font-size: 12px;
        color: #FFF;
        font-weight: 700;
        padding: 15px 10px 20px;
        border: 0;
        margin: 0;
        transform: rotate(-90deg);
        position: absolute;
        z-index: 1;
        bottom: 100px;
        left: -108px;
        cursor: pointer;
        letter-spacing: .15em;
        box-shadow: 0 0 5px rgba(0,0,0,.25);
        border: 1px solid rgba(255,255,255,.4);
        text-transform: uppercase;
    }

#slide-lead-modal.open {
  -webkit-transition: 1s;
  -moz-transition: 1s;
  -ms-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  right: 0 !important;
  box-shadow: -4px 0 8px 0 rgba(0, 0, 0, 0.2), -6px 0 20px 0 rgba(0, 0, 0, 0.19);
}
#slide-lead-modal.close {
  -webkit-transition: 1s;
  -moz-transition: 1s;
  -ms-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  right: -300px !important;
  box-shadow: 0;
}

#slide-lead-form-wrapper {
  background: white;
  padding: 20px;
}
  </style>
  <div id="slide-lead-modal" class="close">
    <div id="slider-button" name="slider-button" class="purple darken-1" style="display: block;">¡Comienza Ahora!</div>
    
    <div id="slide-lead-form-wrapper">
      
      <form class="contacto">
        <div class="row" style="margin-bottom: 0;">
          
          <div class="input-field col s12" style="margin-top: 1rem;">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Nombres</label>
          </div>
          <div class="input-field col s12">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Apellidos</label>
          </div>
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">WhatsApp</label>
          </div>
          <div class="input-field col s12">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Edad</label>
          </div>

          <button class="col s12 waves-effect waves-light btn-large action-button" type="submit" name="registrar">Comienza Ahora</button>

        </div>
      </form>

    </div>
  </div>


  <div id="modal-welcome" class="modal" style="width: 85%; max-height: 100%; height: 90%; border-radius: 0;">
    <div class="modal-content" style="background: url('<?php echo $HOSTPATH.getData('data-promotion-image','inicio');?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; height: 100%;">
      <div id="data-content" style="height: 100%;">
        <div class="section" style="height: 100%;">

          <!--   Icon Section   -->
          <div class="row" style="height: 100%;">
            <div class="col s12 m6 offset-m1 valign-wrapper" style="height: 100%;">
              
              <div class="valign">
                <h1 class="yellow-text center"><?php echo getData('data-promotion-title','inicio');?></h1>
                <h5 class="white-text center"><?php echo getData('data-promotion-message','inicio');?></h5>
              </div>
              
            </div>
            <div class="col s12 m4 offset-m1 valign-wrapper" style="height: 100%;">
              
              <div class="card-panel grey lighten-5 black-text valign">
                <form class="contacto">
                  <div class="row" style="margin-bottom: 0;">
                    
                    <div class="input-field col s12" style="margin-top: 1rem;">
                      <input id="first_name" type="text" class="validate">
                      <label for="first_name">Nombres</label>
                    </div>
                    <div class="input-field col s12">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Apellidos</label>
                    </div>
                    <div class="input-field col s12">
                      <input id="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                      <input id="first_name" type="text" class="validate">
                      <label for="first_name">WhatsApp</label>
                    </div>
                    <div class="input-field col s12">
                      <input id="first_name" type="text" class="validate">
                      <label for="first_name">Edad</label>
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
  </div>


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
                <img src="<?php echo $HOSTPATH.getData('data-banner-icono1','inicio');?>" alt="<?php echo $HOSTPATH.getData('data-banner-icono1-alt','inicio');?>" class="circle responsive-img" style="height: 100px;width: 100px;">
                <img src="<?php echo $HOSTPATH.getData('data-banner-icono2','inicio');?>" alt="<?php echo $HOSTPATH.getData('data-banner-icono2-alt','inicio');?>" class="circle responsive-img" style="height: 100px;width: 100px;">
                <img src="<?php echo $HOSTPATH.getData('data-banner-icono3','inicio');?>" alt="<?php echo $HOSTPATH.getData('data-banner-icono3-alt','inicio');?>" class="circle responsive-img" style="height: 100px;width: 100px;">
              </div>              
          </div>

          <div class="col s12 m6 l4 offset-l1">
            <div class="card-panel grey lighten-5 black-text">
                
              <form class="contacto">
                <div class="row" style="margin-bottom: 0;">
                  
                  <div class="input-field col s12" style="margin-top: 1rem;">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Nombres</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Apellidos</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">WhatsApp</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Edad</label>
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
            <a href="#" class="waves-effect waves-light btn-large white black-text">Mas Información</a>
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
            <a href="#" class="waves-effect waves-light btn-large white black-text">Mas Información</a>
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
        <img src="<?php echo $HOSTPATH.$row['data-image'];?>" alt="<?php echo $row['data-image-alt'];?>">
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

      <div class="row">
        
        <div class="col s6 m2 offset-m3 center">
          <div class="card-panel hoverable">
            <img src="<?php echo $static;?>/imgs/Marketing-digital-01.svg">
          </div>
        </div>
        <div class="col s6 m2 center">
          <div class="card-panel hoverable">
            <img src="<?php echo $static;?>/imgs/Marketing-digital-01.svg">
          </div>
        </div>
        <div class="col s6 m2 center">
          <div class="card-panel hoverable">
            <img src="<?php echo $static;?>/imgs/Marketing-digital-01.svg">
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="page-footer" style="background-color: #8e24aa !important; ">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Hecho por <a class="grey-text text-lighten-3" href="#">Debug Computer Company</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo $static;?>/js/materialize.js"></script>
  <script src="<?php echo $static;?>/js/init.js"></script>
  </body>
</html>
