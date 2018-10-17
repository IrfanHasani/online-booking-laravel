/*global
	window,
	jQuery
*/

(function (wind, $) {
    "use strict";

    var doc = wind.document;

    $(doc).ready(function () {

        // Toggle Side Menu Items
        var sideMenuItemsToggle = function() {
            $(".nested-menu").hide();
            $(".toggle-menu").on("click",function(event){
                event.preventDefault();

                var $this = $(this);
                $this.next().slideToggle();

                var icon = $this.find('.fa');

                if(icon.hasClass('fa-arrow-left')) {
                    icon.removeClass('fa-arrow-left');
                    icon.addClass('fa-arrow-down');
                } else if ( icon.hasClass('fa-arrow-down')) {
                    icon.removeClass('fa-arrow-down');
                    icon.addClass('fa-arrow-left');
                }

            });
        },
            // Init calendar
            initCalendar = function() {
            $('#calendar').datetimepicker({
                inline: true,
                sideBySide: false
            });
        },
            // Toggle Side Menu
            sideMenuToggle = function() {
                $('.bt-menu-trigger').on('click',function(){
                    $(this).toggleClass('bt-menu-open');

                    $('.aside').toggleClass('aside-toggle');
                    $('.dashboard-content').toggleClass('dashboard-toggle');

                });
        };

            sideMenuItemsToggle();
            sideMenuToggle();
            initCalendar();

    });

}(window, jQuery));



function initMap() {
    var uluru = {
        lat: 42.6394958
        , lng: 21.0896638 //here you can specify your location
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12
        , center: uluru
        , styles: [
            {
                "elementType": "geometry"
                , "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            }
            , {
                "elementType": "labels.icon"
                , "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            }
            , {
                "elementType": "labels.text.fill"
                , "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            }
            , {
                "elementType": "labels.text.stroke"
                , "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            }
            , {
                "featureType": "administrative.land_parcel"
                , "elementType": "labels.text.fill"
                , "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                ]
            }
            , {
                "featureType": "poi"
                , "elementType": "geometry"
                , "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            }
            , {
                "featureType": "poi"
                , "elementType": "labels.text.fill"
                , "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            }
            , {
                "featureType": "poi.park"
                , "elementType": "geometry"
                , "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            }
            , {
                "featureType": "poi.park"
                , "elementType": "labels.text.fill"
                , "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
            , {
                "featureType": "road"
                , "elementType": "geometry"
                , "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            }
            , {
                "featureType": "road.arterial"
                , "elementType": "labels.text.fill"
                , "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            }
            , {
                "featureType": "road.highway"
                , "elementType": "geometry"
                , "stylers": [
                    {
                        "color": "#dadada"
                    }
                ]
            }
            , {
                "featureType": "road.highway"
                , "elementType": "labels.text.fill"
                , "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            }
            , {
                "featureType": "road.local"
                , "elementType": "labels.text.fill"
                , "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
            , {
                "featureType": "transit.line"
                , "elementType": "geometry"
                , "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            }
            , {
                "featureType": "transit.station"
                , "elementType": "geometry"
                , "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            }
            , {
                "featureType": "water"
                , "elementType": "geometry"
                , "stylers": [
                    {
                        "color": "#4BBFEE"
                    }
                ]
            }
            , {
                "featureType": "water"
                , "elementType": "labels.text.fill"
                , "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
        ]
    });
    var marker = new google.maps.Marker({
        position: uluru
        , map: map
        , icon: 'https://img4.hostingpics.net/pics/517353icon.png'
    });
}

$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 15) {
            $(".navigation").css("background" , "black");
            $("nav").css("border-bottom" , "none","!important");

        }

        else{
            $(".navigation").css("background" , "transparent");

        }
    })
})

// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#tabBody1"]')
    .not('[href="#tabBody2"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });



