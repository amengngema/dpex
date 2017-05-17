<?php //Template Name: Template About ?>

<?php  $stylesheetUrl = get_stylesheet_directory_uri(); ?>

<?php get_header(); ?>

<?php

$background = $stylesheetUrl . '/img/default-banner.jpg';


if( have_posts() ) : the_post();

    $thumbnail = get_the_post_thumbnail_url('full');

    if( ! $thumbnail == '' )
    {
        $background = $thumbnail;
    }

?>

<section id="contact" class="banner banner-sm has-image overlay" style="background-image: url(<?php echo $background; ?>);">
    <div class="banner-text">
        <h1 class="slogan"><?php the_title(); ?></h1>
    </div>
</section>

<?php endif; ?>

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