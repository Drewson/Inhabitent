(function($){

    //WHEN YOU CLICK THE SEARCH ICON, THE SEARCH FIELD ANIMATES
    $('.fa-search').on('click', function(event){
        event.preventDefault();
        
        $('.search-field').toggleClass('search-width');
        $('.search-field').focus();
    })
    

    //THE NAV STRETCH GOAL, WHEN YOU REACH A CERTAIN POINT ON THE PAGE
    $(window).scroll(function() {
        event.preventDefault();
        var scroll = $(window).scrollTop();
        if (scroll >= 870){
            $('#masthead-home').removeClass('reverse-header');
            $('#masthead-home').addClass('unreverse-header');
        }else{
            $('#masthead-home').addClass('reverse-header');
            $('#masthead-home').removeClass('unreverse-header');
        }
    })


})(jQuery);