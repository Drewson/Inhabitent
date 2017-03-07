(function($){

    $('.fa-search').on('click', function(event){
        event.preventDefault();
        
        $('.search-field').toggleClass('search-width');
        $('.search-field').focus();
    })
    
    $(window).scroll(function() {
        event.preventDefault();
        var scroll = $(window).scrollTop();
        if (scroll >= 870){
            $('#masthead-home').removeClass('reverse-header');
        }else{
            $('#masthead-home').addClass('reverse-header');
        }
    })


})(jQuery);