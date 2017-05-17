$(document).ready(function(){    
    $('.on-scroll').on('click', function (e) {
        locate = $(this).attr('href');
        windowTop = $(locate).position().top;
        $('html, body').stop().animate({ scrollTop: windowTop }, 1000, 'linear');
        e.preventDefault();
    });
    
    $(window).on('scroll', pageNav);
});

$(window).load(function(){
    
});

function pageNav(){
    var screenTop = $(document).scrollTop(); 

    if( screenTop > 500 )
    {
        $('#page-nav').fadeIn(300);
    }
    else
    {
        $('#page-nav').fadeOut(100);
    }
}