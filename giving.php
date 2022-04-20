<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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

</head>

<body class="inner teaching">    
    <!-- Navigation -->
    <div class="header-container-wrapper">

    	<?php include 'nav.php'; ?>

	</div>

    <!-- Full Width Image Header -->
    <header class="banner">
        <div class="item">
        	<img src="img/ministries/contribution.jpg">
            <div class="container caption text-center">
                <h1>Giving<span class="container730">Ministry of Contribution</span></h1>
                
        </div>
    </header>

    <main class="giving">
    	<section>
        <div class="container">
          <div class="row">
            <h4 class="title"><span>Facilities & Services Extended by Lighthouse Members</span></h4>
            <div class="col-md-12">
              <div class="row container960 pad20">
                <div class="col-md-6 text-center"><img src="img/ministries/facilities2.jpg" class="ministry-image" alt="Facilities"></div>
                <div class="col-md-6 text-center"><img src="img/ministries/facilities1.jpg" class="ministry-image" alt="Facilities"></div>              
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="wow fadeInUp">
        <div class="container">
          <div class="row">
            <h4 class="title"><span>Resort & Training Facilities</span></h4>
            <div class="col-md-12">
              <div class="row container960 pad20">
                <div class="col-md-4 text-center"><img src="img/ministries/resort1.jpg" class="ministry-image" alt="Resort & Training Facilities"></div>
                <div class="col-md-4 text-center"><img src="img/ministries/resort2.jpg" class="ministry-image" alt="Resort & Training Facilities"></div>
                <div class="col-md-4 text-center"><img src="img/ministries/resort3.jpg" class="ministry-image" alt="Resort & Training Facilities"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="wow fadeInUp">
        <div class="container">
          <div class="row">
            <h4 class="title"><span>Arts & D&#233;cor</span></h4>
            <div class="col-md-12">
              <div class="row container960 pad20">
                <div class="col-md-4 text-center"><img src="img/ministries/art_decor2.jpg" class="ministry-image" alt="Arts & Decor"></div>
                <div class="col-md-4 text-center"><img src="img/ministries/art_decor1.jpg" class="ministry-image" alt="Arts & Decor"></div>
                <div class="col-md-4 text-center"><img src="img/ministries/painting.jpg" class="ministry-image" alt="Arts & Decor"></div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="wow fadeInUp">
        <div class="container">
          <div class="row">
            <h4 class="title"><span>Construction Supplies & Materials</span></h4>
            <div class="col-md-12">
              &nbsp;
            </div>
          </div>
        </div>
      </section>

      <section class="wow fadeInUp">
        <div class="container">
          <div class="row">
            <h4 class="title"><span>Facilities & Services Extended by Lighthouse Members</span></h4>
            <div class="col-md-12">
              <div class="row container960 pad20">
                <div class="col-md-6 text-center"><img src="img/ministries/professional_expertise1.jpg" class="ministry-image" alt="Professional Expertise"></div>
                <div class="col-md-6 text-center"><img src="img/ministries/professional_expertise2.jpg" class="ministry-image" alt="Professional Expertise"></div>              
              </div>
            </div>
          </div>
        </div>
      </section>

    	<section class="verse wow fadeIn" data-wow-offset="200" data-wow-delay='.15s'>
    		<div class="container">
  				<div class="row">
      				<div class="col-md-12">
      					<div class="bibleVerse">    						
  	    					<div class="bibleVerseContent">
  					    		<h3>"Unto Him be glory in the church by Christ Jesus throughout all ages, world without end. Amen."</h3>
  								<p>EPHESIANS 3:21</p>
  							</div>
      					</div>
  					</div>
  				</div>
  			</div>
    	</section>

    	<?php include 'footer.php'; ?>

    </main>


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
    $(document).ready(function(){
       	$(".banner .item").each(function() {
            var sliderImgSRC = $(this).find("img").attr("src");
            $(this).css('background-image', 'url(' + sliderImgSRC + ')');
        });
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