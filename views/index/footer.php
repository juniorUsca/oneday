<footer class="page-footer" style="background-color: #8e24aa !important; ">
  <div class="container">
    <div class="row">
      <div class="col l8 s12">
        <h5 class="white-text">Sobre OneDay</h5>
        <p class="grey-text text-lighten-4"><?php echo getData('data-company-description','general');?></p>
      </div>
      <div class="col l4 s12">
        <h5 class="white-text">Navegación</h5>
        <ul>
          <li><a class="white-text" href="<?php echo $HOSTPATH;?>/inicio/"><?php echo getData('data-tab-name','inicio');?></a></li>
          <li><a class="white-text" href="<?php echo $HOSTPATH;?>/oratoria/"><?php echo getData('data-tab-name','oratoria');?></a></li>
          <li><a class="white-text" href="<?php echo $HOSTPATH;?>/coaching/"><?php echo getData('data-tab-name','coaching');?></a></li>
          <li><a class="white-text" href="<?php echo $HOSTPATH;?>/otroscursos/"><?php echo getData('data-tab-name','otroscursos');?></a></li>
          <li><a class="white-text" href="<?php echo $HOSTPATH;?>/nuestrosalumnos/"><?php echo getData('data-tab-name','nuestrosalumnos');?></a></li>
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
<script>
  (function($){
  $(function(){
    save_contact("<?php echo $HOSTPATH?>/core/saveSubscripcion.php");
  }); // end of document ready
})(jQuery); // end of jQuery name space
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80985435-2', 'auto');
  ga('send', 'pageview');

</script>