$(document).ready(function(){
    $('#home-slider').slick({
        dots: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 8000,
        pauseOnFocus: true,
        fade: true,
    });
    
    var $sliderVideo = $('#home-slider .slick-slide').find('video').get(0);
    $sliderVideo.play();
    
    $('#home-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $sliderVideo.pause();
        if(nextSlide == 0)
        {
            $sliderVideo.currentTime = 0;
            $sliderVideo.play();
        }
    });
    
    
    $('#news-slider').slick({
        autoplay: true,
        slidesToShow : 3,
        slidesToScroll : 1,
        responsive : [
            {
                breakpoint : 991,
                settings : {
                    slidesToShow : 2
                }
            },
            {
                breakpoint : 767,
                settings : {
                    slidesToShow : 1
                }
            }
        ]
    });
    
});