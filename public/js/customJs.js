$(document).ready(function(){
    $('a').on('click', function(event) {
    $('a').parent('li').removeClass('active');

    if($(this).attr('href') == '#home') {
        $('ul.navbar-nav > li:first-child').addClass('active');
    } else {
        $(this).parent('li').addClass('active');
    }
    
    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 500);
    }

    });
});