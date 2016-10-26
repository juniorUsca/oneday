(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $(".dropdown-button").dropdown();
    Materialize.updateTextFields();
    $('textarea').trigger('autoresize');

  }); // end of document ready
})(jQuery); // end of jQuery name space