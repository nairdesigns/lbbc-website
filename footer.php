<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3 logoWrapper">    		
				<a href="index.php"><img src="img/logo-text.png" alt="logo text"></a>
				<p class="copyright">&copy; 2021 All Rights Reserved</p>
			</div>
			<div class="col-md-6 text-center">
				<ul class="social padT1em">
					<li class="facebook"><a target="_blank" href="https://www.facebook.com/lighthousebbcmain" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></li>
					<li class="youtube"><a target="_blank" href="http://www.youtube.com/c/LighthouseBibleBaptistChurch" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					<li class="android"><a target="_blank" href="https://play.google.com/store/apps/details?id=com.oikos.lighthousebbc&hl=en" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a></li>
					<li class="apple"><a target="_blank" href="https://itunes.apple.com/ph/app/lighthousebbc/id1292159504?mt=8" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
				</ul>				
			</div>
			<div class="col-md-3 text-right">
				<ul class="footer-contact">
					<li class="address">89 ROTC Hunters St. Tatalon, Quezon City, Philippines, 1113</li>
					<li class="phone"><a href="tel:+6327112888">+632 8711 2888</a></li>
				</ul>
			</div>
		</div>
	</div>

</footer>

<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "109281301522123");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>