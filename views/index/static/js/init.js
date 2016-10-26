(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('.carousel.carousel-slider').carousel({full_width: true});



    if ( $(window).width() >= 992 ) {
        $('#modal-welcome').openModal({
            ending_top: '5%'
        });
    }


    slide_contact();

    $('.carousel.carousel-slider').height(400);


  }); // end of document ready
})(jQuery); // end of jQuery name space



function slide_contact() {

    var isOpen = true;
    $("#slider-button").click(function(){
        if (isOpen)
            isOpen = false;
        else
            isOpen = true;

        if ( $('#slide-lead-modal').hasClass('close') )
            $('#slide-lead-modal').removeClass( 'close' ).addClass( 'open' );
        else
            $('#slide-lead-modal').removeClass( 'open' ).addClass( 'close' );
    });

    $(window).scroll(function() {

        var fireModal = 1000;
        if ( $(window).width() < 610 )
            fireModal = 1000;
        else
            fireModal = 580;

        var height = $(window).scrollTop();
        console.log(isOpen);

        if(height > fireModal) {
            if ( $('#slide-lead-modal').hasClass('close') && isOpen )
                $('#slide-lead-modal').removeClass( 'close' ).addClass( 'open' );
        }
        else {
            if ( $('#slide-lead-modal').hasClass('open') && isOpen )
                $('#slide-lead-modal').removeClass( 'open' ).addClass( 'close' );
        }
    });
}
