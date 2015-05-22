<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{{ isset($title) ? ucwords(strtolower($title)) . ' | ' : '' }}} Burchmores</title>

  <!-- Meta Data
  ================================================== -->
  <meta name="description" content="Burchmores" /><!-- max 156 characters -->
  <meta name="keywords" content="Burchmores" />
  <meta name="abstract" content="Burchmores" />
  <meta name="copyright" content="Burchmores" />
  <meta name="classification" content="Internet" />
  <meta name="content-language" content="en" />

	<link href="/css/style.css" rel="stylesheet">
  {{-- <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'> --}}
</head>
<body class="green-star">

	<div class="push.container push-container">
    <!-- Push Wrapper -->
 	 <div class="mp-pusher" id="mp-pusher">


    <!-- #### THREE MENUS TO CHANGE IF NAV CHANGES #### -->

        <!-- mp-menu -->
    <nav id="mp-menu" class="mp-menu">
          <div class="mp-level">
            <ul>
              <li><a class="mp-back close-btn-menu" href="#">Close navigation <i class="fa fa-chevron-left"></i></a></li>
              <li><a href="/">Home</a></li>
              <li>
                <a href="auctions">Auctions</a>
              </li>              
              <li>
                <a href="sell-your-car">Sell Your Car</a>
              </li>
              <li>
                <a href="how-to-register">How to Register</a>
              </li>
              <li>
                <a href="about-us">About Us</a>
              </li>              
              <li>
                <a href="finances-and-warranties">Finance &amp; Warranties</a>
              </li>             
              <li>
                <a href="faq">FAQs</a>
              </li>
              <li>
                <a href="contact-us">Contact Us</a>
              </li>                             
            </ul>
              
          </div>
        </nav>
        <!-- /mp-menu -->

      <div class="scroller"><!-- this is for emulating position fixed of the nav -->
        <div class="scroller-inner">	

			    <div id="menu-bar">

			        <div class="container header">
			        
			          <nav class="navbar navbar-default" role="navigation">
			   
			              <!-- Brand and toggle get grouped for better mobile display -->
			              <div class="navbar-header">
			              <a href="javascript:void(0);" id="trigger" class="menu-trigger">
                      <i class="fa fa-bars"></i>
                    </a>
			                <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="Logo" class="img-responsive" /></a>
			              </div>


			              <!-- Collect the nav links, forms, and other content for toggling -->
			              <div class="collapse navbar-collapse" id="large-nav">
			                <ul class="nav navbar-nav pull-right">
                        <li><a href="auctions">Auctions</a></li>                      
			                  <li><a href="sell-your-car">Sell Your Car</a></li>                  
			                  <li><a href="how-to-register">How to Register</a></li>  
			                  <li><a href="about-us">About Us</a></li>
			                  <li><a href="finances-and-warranties">Finance &amp; Warranties</a></li>
			                  <li><a href="faq">FAQs</a></li>                 
			                  <li><a href="contact-us">Contact Us</a></li>                 
			                </ul>

			              </div><!-- /.navbar-collapse -->


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="mid-nav">
                      <ul class="nav navbar-nav pull-right">
                        <li><a href="auctions">Auctions</a></li>                        
                        <li><a href="sell-your-car">Sell Your Car</a></li>                  
                        <li>
                          <a href="how-to-register" class="dropdown-toggle new">How to Register</a>
                        </li>  
                        <li><a href="about-us">About Us</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">More <span class="caret"></span></a>
                          <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="finances-and-warranties">Finance &amp; Warranties</a></li>
                            <li><a href="faq">FAQs</a></li>                 
                            <li><a href="contact-us">Contact Us</a></li>  
                          </ul>
                        </li>                         
               
                      </ul>

                    </div><!-- /.navbar-collapse -->        

			  
			          </nav>

			        </div><!-- .container -->

			    </div><!-- #menu-bar -->        	

        	<div class="container">

						@yield ('content')

					</div><!-- //.container -->	

					<footer id="main-footer">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
                  <div class="bidvest"><img src="/img/bidvest.png" alt="Bidvest Automotive" /></div>
                  <div class="social-container">
                    <a href="https://www.facebook.com/Burchmores" target="_blank" class="social-button">
                      <i href="" class="fa fa-facebook fa-2x"></i>
                    </a>  
                    <a href="https://twitter.com/Burchmores1" target="_blank" class="social-button">
                      <i class="fa fa-twitter fa-2x"></i>
                    </a>      
                    <a href="" target="_blank" class="social-button">
                      <i class="fa fa-google-plus fa-2x"></i>
                    </a>         
                    <a href="https://www.youtube.com/channel/UCX6hXuJWJudv5EaPcB9nZdw" target="_blank" class="social-button">
                      <i class="fa fa-youtube fa-2x"></i>
                    </a>   
                    <a href="" target="_blank" class="social-button">
                      <i class="fa fa-pinterest-p fa-2x"></i>
                    </a>                       
                  </div><!-- //.social-container -->
								</div><!-- //.col-md-6 -->
								<div class="col-md-6 footer-nav">
									<a href="sitemap">SiteMap</a> | 
									<a href="terms">Terms Of Use</a> | 
									<a href="privacy">Privacy Statement.</a> | 
									Copyright <span id="copyright-year">2015</span> Burchmores
								</div><!-- //.col-md-6 .footer-nav -->
							</div><!-- //.row -->
						</div><!-- //.container -->
					</footer><!-- ..#main-footer -->

        </div><!-- /scroller-inner -->
      </div><!-- /scroller -->

    </div><!-- /pusher -->
  </div><!-- /push.container -->						

	<script src="/bower/jquery/dist/jquery.min.js"></script>
	<script src="/bower/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>

  <!-- Modernizr
  ================================================== -->
  <script type="text/javascript" src="/js/modernizr-2.7.1.js"></script>	

  <!-- Push menu
  ================================================== -->
  <script src="/js/classie.js"></script>
  <script src="/js/mlpushmenu.js"></script>

  <!-- Count down
  ================================================== -->
  <script src="/js/jquery.plugin.js"></script>
  <script src="/js/jquery.countdown.js"></script>

  <!-- Custom scripts
  ================================================== -->  
  <script src="/js/scripts.js"></script>

</body>
</html>
