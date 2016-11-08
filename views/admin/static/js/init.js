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
    $(".btn.dropdown").dropdown();
    Materialize.updateTextFields();
    $('textarea').trigger('autoresize');
    $('.datepicker').pickadate({
      format: 'yyyy-mm-dd',
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });

    chargeImage();
    optionDelete();

    if ( $.isFunction($.fn.materialnote) )
      materialnote();

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
function saveForm(urlPost, urlRedirect, extra = {}, val_html = "val") {
  $('#content-form').submit( function () {
    $('.preloader-background').fadeIn('slow');
    var data = new FormData(this);
    if (val_html == "html") {
      $.each(extra, function(index, val) {
        data.append ( index, val.html() );
      });
    } else {
      $.each(extra, function(index, val) {
        data.append ( index, val.val() );
      });
    }
    
    $.ajax({
      url: urlPost,
      type: 'POST',
      data: data,
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




function materialnote() {
  var toolbar = [
    ['style', ['style', 'bold', 'italic', 'underline', 'strikethrough', 'clear']],
    ['fonts', ['fontsize', 'fontname']],
    ['color', ['color']],
    //['undo', ['undo', 'redo', 'help']],
    ['undo', ['undo', 'redo']],
    ['ckMedia', ['ckImageUploader', 'ckVideoEmbeeder']],
    //['misc', ['link', 'picture', 'table', 'hr', 'codeview', 'fullscreen']],
    ['misc', ['link', 'table', 'codeview', 'fullscreen']],
    ['para', ['ul', 'ol', 'paragraph', 'leftButton', 'centerButton', 'rightButton', 'justifyButton', 'outdentButton', 'indentButton']],
    ['height', ['lineheight']],
  ];

  $('.editor').materialnote({
    toolbar: toolbar,
    height: 550,
    minHeight: 100,
    defaultBackColor: '#e0e0e0',
    onsubmit: function() {
      return false;
    }
  });
  
  //airmode editor
  $('.editorAir').materialnote({
    airMode: true,
    airPopover: [
      ['color', ['color']],
      ['font', ['bold', 'underline', 'clear']],
      ['para', ['ul', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture']]
    ]
  });
}