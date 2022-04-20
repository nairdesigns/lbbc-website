<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Lighthouse Bible Baptist Church</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">    

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/jquery-ui.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">    
	<link href="css/lbbc-style.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- <style type="text/css" media="screen">
        div.jwplayer {
            margin: 0 auto;
        }   
        .jwplayer.jw-stretch-uniform video {
            -o-object-fit: contain;
            object-fit: contain;
        }
        .jwplayer video {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: auto;
            background: transparent;
            z-index: 1050;
        }
        .jwplayer * {
            box-sizing: inherit;
        }
        .jw-reset {
            color: inherit;
            background-color: transparent;
            padding: 0;
            margin: 0;
            float: none;
            font-family: Arial,Helvetica,sans-serif;
            font-size: 1em;
            line-height: 1em;
            list-style: none;
            text-align: left;
            text-transform: none;
            vertical-align: baseline;
            border: 0;
            direction: ltr;
            font-variant: inherit;
            font-stretch: inherit;
            -webkit-tap-highlight-color: rgba(255,255,255,0);
        }  
        
    </style> -->
    <style type="text/css" media="screen">
        /*#playerElement {
            width: 100%;
            height: auto;
            padding: 0
        }*/
        #mobile-fallback {
            display: none;
        }
        div.jwplayer {
            margin: 0 auto;
        }   
        .jwplayer.jw-stretch-uniform video,
        #playerElement-Video {
            -o-object-fit: contain;
            object-fit: contain;
        }
        .jwplayer video {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: auto;
            background: transparent;
            z-index: 1050;
        }
        video#video_tag {
            display: block !important;
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            margin: 0 auto;
        }
        .jwplayer * {
            box-sizing: inherit;
        }
        #mediaspace_wrapper {
            box-sizing: inherit !important;
            width: 100% !important;
        }
        .jw-reset {
            color: inherit;
            background-color: transparent;
            padding: 0;
            margin: 0;
            float: none;
            font-family: Arial,Helvetica,sans-serif;
            font-size: 1em;
            line-height: 1em;
            list-style: none;
            text-align: left;
            text-transform: none;
            vertical-align: baseline;
            border: 0;
            direction: ltr;
            font-variant: inherit;
            font-stretch: inherit;
            -webkit-tap-highlight-color: rgba(255,255,255,0);
        } 
    </style>


</head>
<body class="livestreaming">
	<!-- Navigation -->
    <div class="header-container-wrapper sticky">

    	<?php include 'nav.php'; ?>

	</div>

	<main class=live-wrapper>
		<section id="livestream">
			<div class="container">
				<div class="row">
					<div class="container">
			      		<div class="col-md-12">
							<h2 class="sectionTitle text-center">Live Streaming</h2>
						</div>
					</div>
				</div>
			  	<div class="row">
			  		<div class="container pad3em">
			      		<div class="col-md-12 stream-wrapper">
			      			<div class="col-md-8">
					          	
				                <script type="text/javascript" src="//player.wowza.com/player/latest/wowzaplayer.min.js"></script>

                                <div id="playerElement" style="width:100%; height:360px; padding:0;"></div>

                                <script type="text/javascript">
                                WowzaPlayer.create("playerElement",{
                                "license":"PLAY1-eBebJ-RkdZy-N66R4-kKJan-UdUwW",
                                "title":"",
                                "description":"",
                                "sourceURL":"http%3A%2F%2Flighthousebbc.flashmediacast.com%3A2041%2Flive%2Flivestream1%2Fplaylist.m3u8",
                                "autoPlay":false,
                                "volume":"75",
                                "mute":false,
                                "loop":false,"audioOnly":false,"uiShowQuickRewind":true,"uiQuickRewindSeconds":"30"});</script>

								<div class="compatiblity pad1em">
									<p>** Compatible on all devices **</p>
								</div>  
							</div>
					        <div class="col-md-4">
					          <h4><strong>Contact Us Now!</strong></h4>
					          <div class="contactInfo">
					            <h6><i class="fa fa-phone"></i>&nbsp;&nbsp;<a href="tel:+639088982884">+63908 898 2884</a></h6>
					            <!-- <h6><i class="fa fa-skype"></i>&nbsp;&nbsp;lavnet.lbbc</h6> -->
					            <h6><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp;&nbsp;<a href="https://www.facebook.com/lighthousebbct" target="_blank">lighthousebbct</a></h6>
					            <h6><i class="fa fa-play" aria-hidden="true"></i>&nbsp;&nbsp;<a href="https://www.facebook.com/lighthousebbct/videos/" class="fb-live" target="_blank">watch via FACEBOOK LIVE</a> </h6>
					            <h6><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;<a href="mailto:info@lighthousebbc.org">info@lighthousebbc.org</a></h6>
					            <!-- <div class="alternateLinks">
					              <a href="livestreaming-ustream.html" title="Click here" class="ustream">watch via FACEBOOK LIVE</a> 
					            </div> -->  
					          </div>  
					        </div>							        
					    </div>
				    </div>
				</div>
			</div>	            
	    </section> <!-- /.livestream -->
	    <section class="knowYou">
            <div class="container">
              <form id="registerForm" action="submitRegisterForm.php" method="POST" novalidate="novalidate">
                <h4 class="formTitle text-white">LET US KNOW YOU</h4>  
                <fieldset>
                  <div class="input"><label for="firstname"></label><input placeholder="First name" name="firstname" class="contact-input" type="text" required="" aria-required="true"></div>
                  <div class="input"><label for="lastname"></label><input placeholder="Last name" name="lastname" class="contact-input" type="text" required="" aria-required="true"></div>
                  <div class="input"><label for="email"></label><input placeholder="Email Address" name="email" class="contact-input" type="email" required="" aria-required="true"></div>
                  <div class="input"><label for="contact"></label><input placeholder="Phone" name="contact" class="contact-input" type="text" required="" aria-required="true"></div>
                  <div><input class="submit" type="submit" value="Submit"></div>
                </fieldset>
              </form>   
            </div>
        </section>
	</main>
    <?php include 'footer.php'; ?>

    </div> <!-- end of mainContentWrapper -->





	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="js/ie10-viewport-bug-workaround.js"></script> -->
 
    <script src="js/jquery.validate.js"></script>    
    <script>
      $.validator.setDefaults({
        submitHandler: function(form) {
          //alert("submitted!");
          form.submit();
        }
      });

      $().ready(function() {
        // validate the comment form when it is submitted
        $("#registerForm").validate({
          rules: {
            firstname: "required",        
            lastname: "required",        
            email: {
              required: true,
              email: true
            },
            contact: {
              required: true,
              number: true,
              minlength: 7,
              maxlength: 12
            }
          },
          messages: {
            firstname: "Please enter your first name",        
            lastname: "Please enter your last name",        
            email: "Please enter a valid email address",
            contact: "Please enter a contact number"
          }
        });
      });
    </script>

    <script type="text/javascript">
      var woopra_id = '1175217160';
    </script>
    <script src="https://static.woopra.com/js/woopra.js"></script>
    <!--GoogleAnalytics-->
    <script src="https://www.google-analytics.com/urchin.js" type="text/javascript"></script> 
    <script type="text/javascript"> _uacct = "UA-465178-1"; urchinTracker(); </script>
    <!--END GoogleAnalytics-->
</body>
</html>