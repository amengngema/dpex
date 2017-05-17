<?php //Template Name: Template Home ?>

<?php  $stylesheetUrl = get_stylesheet_directory_uri(); ?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo $stylesheetUrl; ?>/css/index.css" >

<section id="home-banner" class="banner overlay">
    <div id="home-slider" class="banner-slider">
        <div class="slider-item">
            <video class=".slider-video" autoplay loop muted>
                <source src="<?php echo $stylesheetUrl; ?>/video/cars.mp4" type="video/mp4" />
                <source src="<?php echo $stylesheetUrl; ?>/video/cars.webm" type="video/webm" />
            </video>
        </div>
        <div class="slider-item">
            <div class="has-image" style="background-image: url(<?php echo $stylesheetUrl; ?>/img/slide-1.jpg);"></div>
        </div>
        <div class="slider-item">
            <div class="has-image" style="background-image: url(<?php echo $stylesheetUrl; ?>/img/slide-2.jpg);"></div>
        </div>
        <div class="slider-item">
            <div class="has-image" style="background-image: url(<?php echo $stylesheetUrl; ?>/img/slide-3.jpg);"></div>
        </div>
    </div>
    <div class="banner-text">
        <h1 class="slogan">KNOWING ASIA<br>DELIVERING ASIA</h1>
        <h3>Express <i class="fa fa-circle"></i> Freight <i class="fa fa-circle"></i> E-Commerce</h3>
    </div>
</section>

<?php 
//start of news section
$argNews = array(
    'post_type' => 'post',
    'category_name' => 'news',
    'posts_per_page' => 6,
);

$queryNews = new WP_Query($argNews);

if( $queryNews->have_posts() ) : 

?>
<section id="news" class="main">
    <div class="container">
        <h2 class="title">Latest News</h2>
        <span class="underline"></span>
        <div id="news-slider">
            <?php
                while( $queryNews->have_posts() ) : $queryNews->the_post();
            ?>
                <div class="slider-item">
                    <figure>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-responsive">
                        <figcaption>
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn-custom inverse">Read More</a>
                        </figcaption>
                    </figure>
                </div>
            <?php
                endwhile;
            ?>
        </div>
    </div>
</section>
<?php 
    
endif;

wp_reset_postdata();
//end of news section
?>

<section id="about" class="main overlay overlay-primary" data-parallax="scroll" data-image-src="<?php echo $stylesheetUrl; ?>/img/parallax2.jpg">
    <div class="container">
        <h2 class="title">Who we are</h2>
        <span class="underline underline-inverse"></span>
        <p>
            With the huge potential growth of E-Commerce in Asia, DPEX Worldwide is positioned and poised to be the leading total solutions provider in the region.
        </p>  
        <p>
            DPEX Worldwide is an established Express and E-Commerce service provider in Asia.
        </p>
        <p>
            With a history dating over 30 years and a comprehensive network spanning the region, we have extensive local knowledge to serve into and throughout Asia.
        </p>    
        <p>
            We are best known by our company motto “Knowing Asia Delivering Asia”. From Asia to the world, we serve through our global partners in all the other regions.
        </p>    
        <p>
            With the huge potential growth of E-Commerce in Asia, DPEX Worldwide is positioned and poised to be a leading total logistics solutions provider in the region.
        </p>    
        <p>
            A choice partner for distribution from the first to the last mile.
        </p>    
        <a href="#" class="btn-custom inverse">Read More</a>
    </div>
</section>
<section id="mission">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <img src="<?php echo $stylesheetUrl; ?>/img/mission-bg-16x9.jpg" alt="" class="img-full">
                </div>
            </div>
            <div class="col-md-6">
                <article class="box">
                    <h2 class="title">Mission</h2>
                    <span class="underline"></span>
                    <p>
                        To constantly anticipate, innovate, interact &amp; respond to customer needs and surpass expectations.
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>
<section id="vision">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-push-6">
                <div class="row">
                    <img src="<?php echo $stylesheetUrl; ?>/img/vision-bg-16x9.jpg" alt="" class="img-full">
                </div>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <article class="box">
                    <h2 class="title">Vision</h2>
                    <span class="underline"></span>
                    <p>
                        Be Asia’s leading Express &amp; E-Commerce fulfilment provider.
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>
<section id="tools">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 style-primary">
                <article id="track-and-trace" class="box">
                    <h2 class="heading">Track &amp; Trace</h2>
                    <span class="underline underline-inverse"></span>
                    <h3>We are pleased to assist you in tracking your shipment.</h3>
                    <div class="tracking-form clearfix">
                        <div class="col-md-6">
                            <h4 class="note">Important</h4>
                            <p>Enter DPEX Worldwide Air Waybill / Tracking Number (up to 10 entries, one per line)</p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group clearfix">
                                <textarea class="form-control"></textarea>
                            </div>
                            <button class="btn btn-secondary">Submit</button>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6">
                <article id="online-tools" class="box">
                    <h2 class="heading">Online Tools</h2>
                    <span class="underline"></span>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="https://ws01.ffdx.net/v4/login.aspx?stid=dpexwwe">Get Online Login</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://dpex.com/Tools-And-Applications/Get-A-Quote.aspx">Get a Quote</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://dpex.com/Tools-And-Applications/Classification-Lookup.aspx">Classification Lookup</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://dpex.com/Tools-And-Applications/Cubic-Volumetric-Converter.aspx">Cubic Volumetric Converter</a>
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</section>
<?php 

$argServices = array(
    'post_type' => 'post',
    'category_name' => 'services',
    'posts_per_page' => 4,
    'meta_query' => array(
        array(
            'key' => 'show_in_homepage',
            'value' => true
        )
    )
    
);

$queryServices = new WP_Query($argServices);

if( $queryServices->have_posts() ) : 

?>
<section id="services"  class="main overlay" data-parallax="scroll" data-image-src="<?php echo $stylesheetUrl; ?>/img/parallax1.jpg">
    <div class="container">
        <h2 class="title">Our Services</h2>
        <span class="underline"></span>
        <div class="row">
            <?php
                while( $queryServices->have_posts() ) : $queryServices->the_post();
            ?>
                <div class="col-md-6">
                    <article>
                        <span>
                            <?php the_field('fonticon'); ?>
                        </span>
                        <div class="description">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" >Read More</a>
                        </div>
                    </article>
                </div>
            <?php
                endwhile;
            ?>
        </div>
        <a href="<?php echo site_url() . '/services'; ?>" class="btn-custom">View All</a>
    </div>
</section>
<?php 
    
endif;

wp_reset_postdata();

?>

<section id="contact" class="main style-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1 class="heading">Find Us</h1>
                <article class="find-us">
                    <h4>Address</h4>
                    <p>
                        25 Changi South Street 1<br>
                        Singapore 486059
                    </p>
                    <h4>Telephone</h4>
                    <p>
                        (+65) 6781 8888
                    </p>
                    <h4>Office Hours</h4>
                    <p>
                        8:30am - 6:00pm
                    </p>
                </article>
            </div>
            <div class="col-md-7">
                <div class="contact-form">
                    <h1 class="heading">Get in Touch</h1>
                    <p>
                        We are always here to help you.
                    </p>
                    <div class="form-group clearfix">
                        <input type="text" class="form-control" placeholder="Your name">
                    </div>
                    <div class="form-group clearfix">
                        <input type="text" class="form-control" placeholder="Your email">
                    </div>
                    <div class="form-group clearfix">
                        <textarea class="form-control" placeholder="Your message"></textarea>
                    </div>
                    <div class="form-group clearfix">
                        <button class="btn-custom inverse">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="googleMap"></section>

<script type="text/javascript" src="<?php echo $stylesheetUrl; ?>/js/index.js"></script>
<script type="text/javascript">
        
    function initialize() {
        var latitude = 1.3391013;
        var longtitude = 103.9716515;
        var mapProp = {
            // How zoomed in you want the map to start at (always required)
            zoom: 16,

            scrollwheel: false,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(latitude, longtitude),

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
                {
                    "featureType": "all",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#c4c4c4"
                        }
                    ]
                },
                {
                    "featureType": "administrative.neighborhood",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#707070"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 21
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#be2026"
                        },
                        {
                            "lightness": "0"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "off"
                        },
                        {
                            "hue": "#ff000a"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#575757"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#2c2c2c"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#999999"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "saturation": "-52"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                }
            ]
        };

        var image = {
            url: '<?php echo $stylesheetUrl; ?>/img/icon-google-map.png'
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(latitude, longtitude),
            map: map,
            icon: image,
            title: 'DPEX Worldwide Express',
            labelContent: 'DPEX Worldwide Express (S) Pte Ltd'
        });

        // Resize stuff...
        google.maps.event.addDomListener(window, "resize", function () {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
    }                                                                                                                                               

    function loadGoogleMap()
    {			
        $('<script />', {
            type: 'text/javascript',
            src: 'http://maps.googleapis.com/maps/api/js?key=AIzaSyDv1D0F0xKD-VguDPHx4DIRUIyQNp7j8uQ&callback=initialize'
        }).appendTo('body');

        $('#googleMap').show();
    }

    $(window).load(loadGoogleMap());

</script>
    
<?php get_footer(); ?>