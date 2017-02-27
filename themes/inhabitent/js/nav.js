(function($){

    $('.fa-search').on('click', function(event){
        event.preventDefault();
        
        $('.search-field').toggleClass('search-width');
        $('.search-field').focus();
    })

    $('.search-field').blur(function(){
        $('.fa-search').click();
    })
    
})(jQuery);