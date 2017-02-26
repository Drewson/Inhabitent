(function($){
    console.log('hello?');
    $('.fa-search').on('click', function(event){
        event.preventDefault();
        console.log('hello');
        
        $('.search-field').toggleClass('search-width');
        $('.search-field').focus();
    })

    $('.search-field').blur(function(){
        $('.fa-search').click();
    })
    
})(jQuery);