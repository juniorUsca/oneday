<!-- PRELOADER -->
  <div class="preloader-background">
    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue-only">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
  </div> <!-- END PRELOADER -->

  <!-- NAVBAR -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">Datos Generales</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo $HOSTPATH;?>/admin/inicio/">Inicio</a></li>
    <li><a href="#!">Oratoria</a></li>
    <li><a href="#!">Couching</a></li>
    <li><a href="#!">Otros Cursos</a></li>
    <li><a href="#!">Nuestros Alumnos</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo $HOSTPATH;?>/admin/testimonios/">Testimonios</a></li>
    <li><a href="<?php echo $HOSTPATH;?>/admin/aliados/">Aliados</a></li>
  </ul>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo $HOSTPATH;?>/admin/login.php" class="brand-logo height-100">
        <figure class="no-margin height-100">
          <img src="<?php echo $company_developer_logo;?>" height="100%" alt="<?php echo $company_developer_name;?>">
        </figure>
      </a>
      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="#">DashBoard</a></li>
        <li><a href="#">Ver Web</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Paginas<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="js-logout" href="#">Salir</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav collapsible collapsible-accordion">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Ver Web</a></li>
        <li class="active"><a class="collapsible-header  waves-effect waves-teal">Paginas</a>
          <div class="collapsible-body" style="">
            <ul>
              <li><a href="#!">Datos Generales</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo $HOSTPATH;?>/admin/inicio/">Inicio</a></li>
              <li><a href="#!">Oratoria</a></li>
              <li><a href="#!">Couching</a></li>
              <li><a href="#!">Otros Cursos</a></li>
              <li><a href="#!">Nuestros Alumnos</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo $HOSTPATH;?>/admin/testimonios/">Testimonios</a></li>
              <li><a href="<?php echo $HOSTPATH;?>/admin/aliados/">Aliados</a></li>
            </ul>
          </div>
        </li>
        <li><a class="js-logout" href="#">Salir</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav> <!-- END NAVBAR -->