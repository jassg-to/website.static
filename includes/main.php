<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>JOANNA DE ANGELIS</title>
        <link rel="shortcut icon" href="images/favicon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/template.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/responsive.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

        <link rel="preconnect" href="https://fonts.gstatic.com"> <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- Open Sans -->
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- Work Sans -->
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"> <!-- Line Awesome -->
    </head>

    <!-- JS IMPORTS -->
        <script type="text/javascript" src="js/jquery.min.js"></script> <!-- jQuery -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- Bootstrap -->
        <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script> <!-- Slick Carousel -->
    
    <!-- SCRIPTS -->
        <script>
            $(document).ready(function(){
                $(window).scroll(function() { // check if scroll event happened
                    if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
                        
                    } else {
                        
                    }
                });
            });
        </script>
        
        <script type="text/javascript">
        jQuery(function() {
        jQuery('.links_topo').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                jQuery('html,body').animate({
                scrollTop: target.offset().top -100
                }, 1000);
                return false;
            }
            }
        });
        });
        </script>
        
        <script>
            function openNav(){
                $('#myNav').css('display', 'flex');
            }

            function closeNav(){
                $('#myNav').css('display', 'none');
            }
        </script>
        
        <script>
            $(document).on('ready', function() {
                $(".customer").css('display', 'block');
                $(".customer").slick({
                    dots: false,
                    infinite: true,
                    arrows: false,
                    speed: 1000,
                    prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true' style='font-size: 40px; color: #151515;'></i></button>",
                    nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true' style='font-size: 40px; color: #151515;'></i></button>",
                    slidesToShow: 1,
                    slidesToScroll: 3,
                    centerMode: false,
                    variableWidth: true,
                    responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                        }
                    }
                    ]
                });
            });
        </script>

        <script src="instagram.js"></script>
            <script>
                (function() {
                    new InstagramFeed({
                        'username': 'milemarketing',
                        'container': document.getElementById("instagram-feed"),
                        'display_profile': false,
                        'display_biography': false,
                        'display_gallery': true,
                        'callback': null,
                        'styling': true,
                        'items': 4,
                        'items_per_row': 4,
                        'margin': 1
                    });
                })();
            </script>

</html>
