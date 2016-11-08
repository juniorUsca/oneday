<nav class="white">
  <div class="nav-wrapper container">
    <a id="logo-container" href="#" class="brand-logo">
      <img src="<?php echo $HOSTPATH.getData('data-logo-image','general');?>" alt="<?php echo getData('data-logo-image-alt','general');?>" />
    </a>
    <div class="right black-text valign-wrapper hide-on-small-only" style="font-size: 18px;">
      <img src="<?php echo $static;?>/imgs/whatsapp-icon.png" class="circle responsive-img valign" style="height: 25px;">
      &nbsp <?php echo getData('data-whatsapp','general');?>
    </div>

    <ul id="nav-mobile" class="side-nav">
      <li class="<?php if ($CURRENT_TAB == 'inicio') echo 'active';?>"><a href="<?php echo $HOSTPATH;?>/inicio/"><?php echo getData('data-tab-name','inicio');?></a></li>
      <li class="<?php if ($CURRENT_TAB == 'oratoria') echo 'active';?>"><a href="<?php echo $HOSTPATH;?>/oratoria/"><?php echo getData('data-tab-name','oratoria');?></a></li>
      <li class="<?php if ($CURRENT_TAB == 'coaching') echo 'active';?>"><a href="<?php echo $HOSTPATH;?>/coaching/"><?php echo getData('data-tab-name','coaching');?></a></li>
      <li class="<?php if ($CURRENT_TAB == 'otroscursos') echo 'active';?>"><a href="<?php echo $HOSTPATH;?>/otroscursos/"><?php echo getData('data-tab-name','otroscursos');?></a></li>
      <li class="<?php if ($CURRENT_TAB == 'nuestrosalumnos') echo 'active';?>"><a href="<?php echo $HOSTPATH;?>/nuestrosalumnos/"><?php echo getData('data-tab-name','nuestrosalumnos');?></a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>

<nav class="white" role="navigation" style="background: rgba(236, 236, 236, 0.4) !important; height: 44px; line-height: 44px;">

  <div class="nav-wrapper container">
    
    <div class="center black-text valign-wrapper brand-logo hide-on-med-and-up" style="display: flex; font-size: 18px;">
      <img src="<?php echo $static;?>/imgs/whatsapp-icon.png" class="circle responsive-img valign" style="height: 25px;">
      &nbsp <?php echo getData('data-whatsapp','general');?>
    </div>
    
    <ul class="left hide-on-med-and-down">
      <li class="<?php if ($CURRENT_TAB == 'inicio') echo 'active';?>"><a href="<?php echo $HOSTPATH;?>/inicio/"><?php echo getData('data-tab-name','inicio');?></a></li>
      <li class="<?php if ($CURRENT_TAB == 'oratoria') echo 'active';?>"><a href="<?php echo $HOSTPATH;?>/oratoria/"><?php echo getData('data-tab-name','oratoria');?></a></li>
      <li class="<?php if ($CURRENT_TAB == 'coaching') echo 'active';?>"><a href="<?php echo $HOSTPATH;?>/coaching/"><?php echo getData('data-tab-name','coaching');?></a></li>
      <li class="<?php if ($CURRENT_TAB == 'otroscursos') echo 'active';?>"><a href="<?php echo $HOSTPATH;?>/otroscursos/"><?php echo getData('data-tab-name','otroscursos');?></a></li>
      <li class="<?php if ($CURRENT_TAB == 'nuestrosalumnos') echo 'active';?>"><a href="<?php echo $HOSTPATH;?>/nuestrosalumnos/"><?php echo getData('data-tab-name','nuestrosalumnos');?></a></li>
    </ul>

    <ul class="right hide-on-med-and-down black-text" style="height: 100%;">
      <li style="height: 100%;">
        <a target="_blank" href="<?php echo getData('data-facebook1', 'general');?>" class="waves-effect waves-light" style="height: 100%; padding: 0; margin-left: 10px; margin-right: 10px;"><img src="<?php echo $static;?>/imgs/facebook.png" style="height: 34px; padding: 8px 0 0 0;"></a>
        <a target="_blank" href="<?php echo getData('data-facebook2', 'general');?>" class="waves-effect waves-light" style="height: 100%; padding: 0; margin-left: 10px; margin-right: 10px;"><img src="<?php echo $static;?>/imgs/facebook.png" style="height: 34px; padding: 8px 0 0 0;"></a>
        <a target="_blank" href="<?php echo getData('data-facebook3', 'general');?>" class="waves-effect waves-light" style="height: 100%; padding: 0; margin-left: 10px; margin-right: 10px;"><img src="<?php echo $static;?>/imgs/facebook.png" style="height: 34px; padding: 8px 0 0 0;"></a>
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