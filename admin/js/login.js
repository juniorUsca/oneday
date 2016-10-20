(function($){
  $(function(){

    login();

  }); // end of document ready
})(jQuery); // end of jQuery name space


function login() {
  $('.js-login').click( validar( $('#email').val(), $('#password').val() ) );
}


function validar( user, pass ) {
  $.ajax({
    url:  'core/login.php',
    type: 'POST',
    data: {
      user: user,
      pass: pass
    },
    success: function(resp){
      /*$('#resultado').html(resp);*/
      console.log(resp);
    }
  });
}