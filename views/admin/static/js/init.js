/*$.extend(
{
    redirectPost: function(location, args)
    {
        var form = '';
        $.each( args, function( key, value ) {
            value = value.split('"').join('\"')
            form += '<input type="hidden" name="'+key+'" value="'+value+'">';
        });
        $('<form action="' + location + '" method="POST">' + form + '</form>').appendTo($(document.body)).submit();
    }
});*/

(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $(".dropdown-button").dropdown();
    Materialize.updateTextFields();
    $('textarea').trigger('autoresize');

    chargeImage();

    optionDelete();

  }); // end of document ready
})(jQuery); // end of jQuery name space

function chargeImage() {
  $("input[type='file']").change(function(event) {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ["image/jpeg","image/png","image/jpg"];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
    {
      //$('#previewing').attr('src','noimage.png');
      //$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
      /// FORMATO NO ACEPTADO
      return false;
    }
    else {
      window.current_img = $(this).prev(".prev-img");
      var reader = new FileReader();
      reader.onload = imageIsLoaded;
      reader.readAsDataURL(this.files[0]);
    }
  });
}

function imageIsLoaded(e) {
  //$('#image_preview').css("display", "block");
  window.current_img.attr('src', e.target.result);
  //$('#previewing').attr('width', '250px');
  //$('#previewing').attr('height', '230px');
};




function optionDelete() {
  $('.option-delete').click(function(event) {
    event.preventDefault();

    /// agregar confirmacion
    
    $('.preloader-background').fadeIn('slow');
    $.ajax({
      url: $(this).attr('href'),
      type: 'GET'
    })
    .done(function(resp) {
      window.location.replace(window.location.href);
    })
    .fail(function(fail) {
      console.log('error',fail);
    })
    .always(function() {
      $('.preloader-background').fadeOut('slow');
    });

    return false;
  });
}


/// WITH PARAMETERS

function logout(urlPost, urlRedirect) {
  $('.js-logout').click( function () {
    $('.preloader-background').fadeIn('slow');
    $.ajax({
      url:  urlPost,
      type: 'POST',
      dataType: 'json'
    })
    .done(function(resp) {
      window.location.replace(urlRedirect);
    })
    .fail(function(fail) {
      console.log('error',fail);
    })
    .always(function() {
      $('.preloader-background').fadeOut('slow');
    });
    
    return false;
  });
}

function readMessages(message, color) {
  var message = message;
  var color = color;
  if (message != '') {
    Materialize.toast(message, 3000, color);
  }
}

/// FORMS
function saveForm(urlPost, urlRedirect) {
  $('#content-form').submit( function () {
    $('.preloader-background').fadeIn('slow');
    $.ajax({
      url: urlPost,
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false
    })
    .done(function(resp) {
      
      if ( resp['status'] == '1' && resp['status_img'] == '1' ){
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