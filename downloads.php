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

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="inner downloads">    
    <!-- Navigation -->
    <div class="header-container-wrapper">

    	<?php include 'nav.php'; ?>

	</div>

    <!-- Full Width Image Header -->
    <header class="banner">
        <div class="item">
        	<img src="img/ministries/downloads2.jpg">
            <div class="container caption text-center">
                <h1>Glorifying God through the fulfillment<br><span>of Christ's Great Commission</span></h1>
                <p>Matthew 28:18-20</p>    
                <!-- <h1>Shining as lights, holding forth the Word<br><span>through lives and ministries</span></h1>
                <p>Philippians 2:15-16</p>
                <p><a href="#">Join Webcast</a></p> -->
            </div>
        </div>
    </header>

    <main class="antiPadB">
        <div class="downloads-wrapper padB2em">
            <div class="col-md-12">
                <div>
                    
                	<div class="col-md-4">
                        <a href="javascript:void(0)">
                            <section class="download-item wow fadeIn">
                                <figure>
                                    <img src="img/pra-preaching2.jpg" alt="Outline">
                                    <figcaption class="download-item-info text-center">
                                        <h2>Outline</h2>
                                        <!-- <a href="#" class="CTAbutton">Download</a> -->
                                    </figcaption>
                                    
                                </figure>
                                
                            </section>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="bulletin.php">
                            <section class="download-item wow fadeIn">
                                <figure>
                                    <img src="img/ministries/downloads.jpg" alt="Bulletin">
                                    <figcaption class="download-item-info text-center">
                                        <h2>Bulletin</h2>
                                        <!-- <a href="#" class="CTAbutton">Download</a> -->
                                    </figcaption>
                                    
                                </figure>
                                
                            </section>
                        </a>
                    </div>
                
                    <div class="col-md-4">
                        <a href="http://www.youtube.com/c/LighthouseBibleBaptistChurch" target="_blank">
                            <section class="download-item wow fadeIn">
                                <figure>
                                    <img src="img/ministries/service2.jpg" alt="Service">
                                    <figcaption class="download-item-info text-center">
                                        <h2>Service</h2>
                                        <!-- <a href="#" class="CTAbutton">Download</a> -->
                                    </figcaption>
                                    
                                </figure>
                                
                            </section>
                        </a>
                    </div>

                    <!-- <div class="col-md-3">
                        <a href="#">
                            <section class="avp download-item wow fadeIn">
                                <figure>
                                    <img src="img/ministries/LCM.png" alt="AVPs">
                                    <figcaption class="download-item-info text-center">
                                        <h2>AVP</h2>                                        
                                    </figcaption>
                                    
                                </figure>
                                
                            </section>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>

        <section class="knowYou margT3em">
            <div class="container">
                <h4 class="formTitle text-white">LET US KNOW YOU</h4>  
                <div class="col-md-9 antiPad">
                    <form id="registerForm" action="submitDownloadForm.php" method="POST" novalidate="novalidate">
                        <fieldset>
                            <div class="input"><label for="firstname"></label><input placeholder="First name" name="firstname" class="contact-input" type="text" required="" aria-required="true"></div>
                            <div class="input"><label for="lastname"></label><input placeholder="Last name" name="lastname" class="contact-input" type="text" required="" aria-required="true"></div>
                            <div class="input"><label for="email"></label><input placeholder="Email Address" name="email" class="contact-input" type="email" required="" aria-required="true"></div>
                            <div class="input"><label for="contact"></label><input placeholder="Phone" name="contact" class="contact-input" type="text" required="" aria-required="true"></div>
                            <!-- <div class="g-recaptcha text-center" data-sitekey="6LfVXGQUAAAAAOJtogZDY5vqBt7TycecgmhqC04c"></div> -->
                            
                            <div><input class="submit" type="submit" value="Submit"></div>
                        </fieldset>
                    </form>   
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>



	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="js/ie10-viewport-bug-workaround.js"></script> -->
    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
    <script src="js/jquery-ui.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/lbbc-main.js"></script>    
    <script>
        $(window).scroll(function(){ // when user scrolls    
            if($(window).scrollTop() > 200) {
               $('.header-container-wrapper').addClass('sticky');
            } 
            else{
               $('.header-container-wrapper').removeClass('sticky');
            }
        });  
    </script>  
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
    <script>
    $(document).ready(function(){
       	$(".banner .item").each(function() {
            var sliderImgSRC = $(this).find("img").attr("src");
            $(this).css('background-image', 'url(' + sliderImgSRC + ')');
        });
        // $("section.download-item").each(function() {
        //     var itemImgSRC = $(this).find("img").attr("src");
        //     $(this).css('background-image', 'url(' + itemImgSRC + ')');
        // });
        // $("section.download-item").hover(function() {
        //     $(this).toggleClass("animated zoomIn");
        // })
        wow = new WOW(
            {
                animateClass:'animated',
                offset: 80
            });
                wow.init();

        $(function() {
            $( "#accordion" ).accordion({
                collapsible: true,
                active: false
            });
            $( "#accordion2" ).accordion({
                collapsible: true,
                active: false
            });
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