		<footer>
            <div class="blue-line"></div>
			<div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="title-footer"><?=$textos['opening-hours']?></div>
                            <div class="mt5"><?=$textos['gospel-according']?></div> 
                            <div><?=$textos['sunday']?></div>  
                            <div class="mt20"><?=$textos['gospel-teens']?></div> 
                            <div><?=$textos['sunday']?></div>  
                            <div class="mt20"><?=$textos['fraternal-service']?></div>  
                            <div><?=$textos['wednesday']?></div>  
                            <div class="mt20"><?=$textos['vibration-time']?></div>  
                            <div><?=$textos['saturday']?></div>
                        </div>
                        <div class="col-md-4">
                            <div class="hidden-md hidden-lg mt20"></div>
                            <div class="title-footer"><?=$textos['phone']?></div>
                            <div class="mt5"><a href="tel:14165327896" style="color: #575757;">+1 (416) 532-7896</a></div>
                            <div class="title-footer mt20">EMAIL</div>
                            <div class="mt5"><a href="mailto:info@joannadeangelis.ca" style="color: #575757;">info@joannadeangelis.ca</a></div>
                        </div>
                        <div class="col-md-3">
                            <div class="hidden-md hidden-lg mt20"></div>
                            <div class="title-footer"><?=$textos['social-media']?></div>
                            <div class="social-mideas">
                                <a href="https://www.facebook.com/jassgtoronto/" target="_blank"><i class="lab la-facebook-square"></i></a>
                                <a href="https://instagram.com/joannadeangelisca?igshid=YmMyMTA2M2Y=" target="_blank"><i class="lab la-instagram"></i></a>
                            </div>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fjassgtoronto&tabs=timeline&width=280&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer hidden-xs hidden-sm">
                <div class="container">
                    <div class="ai_center jc_between">
                        <div>© Copyright 2021 - <b>JOANNA DE ÂNGELIS</b> - <?=$textos['direitos-reservados']?></div>
                        <a href="https://prideinnovations.com.br/" target="_blank" rel="noopener noreferrer"><img src="images/innovations-white.svg" class="logo_rodape"></a>
                    </div>
                </div>
            </div>
            <div class="footer hidden-md hidden-lg">
                <div class="container">
                    <div class="ai_center jc_between fd_column text-center">
                        <div>© Copyright 2021 - <b>JOANNA DE ÂNGELIS</b> - <?=$textos['direitos-reservados']?></div>
                        <a href="https://prideinnovations.com.br/" target="_blank" rel="noopener noreferrer"><img src="images/innovations-white.svg" class="logo_rodape"></a>
                    </div>
                </div>
            </div>
		</footer>

		<!-- JS IMPORTS -->
        <script type="text/javascript" src="js/jquery.min.js"></script> <!-- jQuery -->
        <script type="text/javascript" src="js/jquery.mask.min.js"></script> <!-- jQuery -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- Bootstrap -->
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0"></script> <!-- Facebook Iframe -->
    
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
            function openNav() {
                document.getElementById("myNav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script>
    
        <script>
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
        </script>

        <script>
            $('.carousel').carousel({
                pause: true,
                interval: false
            });
        </script>

        <script>
            function changeEn() {
                window.location.href = window.location.href.split(/[?#]/)[0] + '?idioma=en';
            }

            function changePt() {
                window.location.href = window.location.href.split(/[?#]/)[0] + '?idioma=pt';
            }
        </script>

        <?  
            if ($_SESSION['idioma'] == 'en') {
                echo "<script>$('.phone_us').mask('0 (000) 000-0000')</script>";
            } else {
                echo "<script>$('.phone_us').mask('(00) 00000-0000')</script>";
            }
        ?>
	</body>

</html>