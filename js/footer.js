// pasted from repeated scripts in the footer of the html files

$(document).ready(function(){
    $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
            
        } else {
            
        }
    });
});

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

function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == document.getElementById("myModal") || event.target == document.getElementById("close")) {
        $("#myModal").css("display","none");
    }
    if (event.target == document.getElementById("myModal2") || event.target == document.getElementById("close2")) {
        $("#myModal2").css("display","none");
    }
    if (event.target == document.getElementById("myModal3") || event.target == document.getElementById("close3")) {
        $("#myModal3").css("display","none");
    }
}  

$('.carousel').carousel({
    pause: true,
    interval: false
});


function changeEn() {
    window.location.href = window.location.href.split(/[?#]/)[0] + '?idioma=en';
}

function changePt() {
    window.location.href = window.location.href.split(/[?#]/)[0] + '?idioma=pt';
}

$('.phone_us').mask('(00) 00000-0000');   // pt variant
$('.phone_us').mask('0 (000) 000-0000');  // en variant
