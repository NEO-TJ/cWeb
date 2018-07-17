<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gost Host One Page Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/fonticons.css">
        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!--login import-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
       <link rel="stylesheet" href="css/stylelogin.css">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="css/responsive.css" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu" style="background-color: #BEBEBE">
      
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--Home page style-->
        <header id="main_menu" class="header">
            <div class="main_menu_bg navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu wow fadeInUp" data-wow-duration="1s">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""/></a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="#home">Home</a></li>
                                            <li><a href="#domain">Domain</a></li>
                                            <li><a href="#pricing">Hosting</a></li>
                                            <li><a href="#clients">Clients</a></li>
                                            <li><a href="#service">Blog</a></li>
                                            <li><a href="#footer">Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->



        <section id="home" class="home">
            <div class="home-overlay-fluid">
                <div class="container">
                    <div class="row">
                        <div class="main_slider_area">
                            <div class="slider">
                                <div class="single_slider wow fadeIn" data-wow-duration="2s">
                                    <h2>HELLO!</h2>
                                    <p>We love our work...</p>
                                    <p>And We're taking it seriously...</p>
                                </div>
                                <!--<div class="single_slider">
                                    <h2>HELLO!</h2>
                                    <p>We love our work...</p>
                                    <p>And We're taking it seriously...</p>
                                </div>
                                <div class="single_slider">
                                    <h2>HELLO!</h2>
                                    <p>We love our work...</p>
                                    <p>And We're taking it seriously...</p>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Banner Section -->


        <section id="register" class="register">
            <div class="container-fullwidth">
                <div class="row text-center">
                    <div class="col-sm-6 col-xs-6 no-padding">
                        <div class="single_register single_login">
                            <nav class="main-nav">
			<ul>
                            <a class="cd-signin" href="#0">Login</a>
                        </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 no-padding">
                        <div class="single_register">
                               <nav class="main-nav">
			<ul>
                            <a class="cd-signup" href="#0">Register</a>
                        </ul>
                               </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                        

<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="Password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="Password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div>

        <section id="domain" class="domainsearce">
            <div class="container" style="background-color: #6495ED">
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
						<div class="main_somainsearrce">
							<div class="head_title text-center wow fadeInDown" data-wow-duration="1s">
								<h2>Would you like to buy a new domain ?</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor mauris ac nulla interdum, id molestier.</p>
							</div>

							<div class="serceoption wow fadeIn" data-wow-duration="1.5s">
								<div class="input-group input-group-lg">
									<span class="input-group-addon">www.</span>
									<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
									<span class="input-group-addon">.com 
										<span class="caret"></span> 
									</span> 
								</div>
							</div>

							<div class="sercelist wow fadeIn" data-wow-duration="2s">
								<div class="single_dotcom_serce text-center">
									
									<ul class="list-inline">
										<li><p>.com</p></li>
										<li><p>1 yer</p></li>
										<li><p>$9.00 USD</p></li>
										<li><p>Transfer Price No</p></li>
									</ul>
									
									<ul class="list-inline no-border">
										<li><p>.net</p></li>
										<li><p>1 yer</p></li>
										<li><p>$9.00 USD</p></li>
										<li><p>Transfer Price No</p></li>
									</ul>
									
								   
								 </div>    
							</div> <!-- End of sercelist -->

						</div>
					</div>
                </div>
            </div>
        </section>



        <section id="pricingtop" class="pricingtop">
            <div class="overlay">
                <div class="container">
                    <div class="main_pricingtop"></div>
                </div> 
            </div>
        </section>

        <section id="pricing" class="pricing">
            <div class="container">
                <div class="row">
                    <div class="main_pricing">

                        <div class="pricing_content">
                            <div class="col-md-3 col-sm-6">
                                <div class="single_pricing pricing_color_one wow fadeIn" data-wow-duration=".6s">
                                    <div class="pricing_head text-center">
                                       <div class="icon_area p_icon_one">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3>BASIC PACKAGE</h3>
                                         <div class="separator"></div>
                                    </div>
                                    <figure class="single_pricing_figure">
                                        <ul>
                                            <li><span class="princing_name">Disk Space (GB)</span> <span class="princing_price princing_price_one">50</span></li>
                                            <li><span class="princing_name">Subdomains</span> <span class="princing_price princing_price_one">50</span></li>
                                            <li><span class="princing_name">Transfer (GB)</span> <span class="princing_price princing_price_one">50</span></li>
                                            <li><span class="princing_name">Data bases</span> <span class="princing_price princing_price_one">1</span></li>
                                            <li><span class="princing_name">Dashboards</span> <span class="princing_price princing_price_one"></span></li>
                                            <li><span class="princing_name">Control Panel & FTP</span> <span class="princing_price princing_price_one"></span></li>
                                            <li><span class="princing_name">Free Support</span> <span class="princing_price princing_price_one"></span></li>
                                           
                                        </ul>
                                        <div class="separator"></div>
                                    </figure>
                                    
                                    <footer class="pricing_footer text-center">
                                        <h3><span class="dolor">$</span> 20 <span class="month">/Mo </span></h3>
                                        <div class="smallseparator separetor_one"></div>
                                        <a href="">SELECT PLAN</a>
                                    </footer>
                                    
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="single_pricing pricing_color_two wow fadeIn" data-wow-duration="1.2s">
                                    <div class="pricing_head text-center">
                                        <div class="icon_area p_icon_two">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3>NORMAL PACKAGE</h3>
                                         <div class="separator"></div>
                                    </div>
                                    <figure class="single_pricing_figure">
                                        <ul>
                                            <li><span class="princing_name">Disk Space (GB)</span> <span class="princing_price princing_price_two">50</span></li>
                                            <li><span class="princing_name">Subdomains</span> <span class="princing_price princing_price_two">50</span></li>
                                            <li><span class="princing_name">Transfer (GB)</span> <span class="princing_price princing_price_two">50</span></li>
                                            <li><span class="princing_name">Data bases</span> <span class="princing_price princing_price_two">1</span></li>
                                            <li><span class="princing_name">Dashboards</span> <span class="princing_price princing_price_two"></span></li>
                                            <li><span class="princing_name">Control Panel & FTP</span> <span class="princing_price princing_price_two"></span></li>
                                            <li><span class="princing_name">Free Support</span> <span class="princing_price princing_price_two"></span></li>
                                        </ul>
                                        <div class="separator"></div>
                                    </figure>
                                    
                                    <footer class="pricing_footer text-center">
                                        <h3><span class="dolor">$</span> 20 <span class="month">/Mo </span></h3>
                                        <div class="smallseparator separetor_two"></div>
                                        <a href="">SELECT PLAN</a>
                                    </footer>
                                    
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="single_pricing pricing_color_three wow fadeIn" data-wow-duration="1.8s">
                                    <div class="pricing_head text-center">
                                        <div class="icon_area p_icon_three">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3>BIG PACKAGE</h3>
                                         <div class="separator"></div>
                                    </div>
                                    <figure class="single_pricing_figure">
                                        <ul>
                                            <li><span class="princing_name">Disk Space (GB)</span> <span class="princing_price princing_price_three">50</span></li>
                                            <li><span class="princing_name">Subdomains</span> <span class="princing_price princing_price_three">50</span></li>
                                            <li><span class="princing_name">Transfer (GB)</span> <span class="princing_price princing_price_three">50</span></li>
                                            <li><span class="princing_name">Data bases</span> <span class="princing_price princing_price_three">1</span></li>
                                            <li><span class="princing_name">Dashboards</span> <span class="princing_price princing_price_three"></span></li>
                                            <li><span class="princing_name">Control Panel & FTP</span> <span class="princing_price princing_price_three"></span></li>
                                            <li><span class="princing_name">Free Support</span> <span class="princing_price princing_price_three"></span></li>
                                        </ul>  
                                        <div class="separator"></div>
                                    </figure>
                                    
                                    <footer class="pricing_footer text-center">
                                        <h3><span class="dolor">$</span> 20 <span class="month">/Mo </span></h3>
                                        <div class="smallseparator separetor_three"></div>
                                        <a href="">SELECT PLAN</a>
                                    </footer>
                                    
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="single_pricing pricing_color_four wow fadeIn" data-wow-duration="2.3s">
                                    <div class="pricing_head text-center">
                                        <div class="icon_area p_icon_four">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3>BIGGEST PACKAGE</h3>
                                        <div class="separator"></div>
                                    </div>
                                   
                                    <figure class="single_pricing_figure">
                                        <ul>
                                           <li><span class="princing_name">Disk Space (GB)</span> <span class="princing_price princing_price_four">50</span></li>
                                            <li><span class="princing_name">Subdomains</span> <span class="princing_price princing_price_four">50</span></li>
                                            <li><span class="princing_name">Transfer (GB)</span> <span class="princing_price princing_price_four">50</span></li>
                                            <li><span class="princing_name">Data bases</span> <span class="princing_price princing_price_four">1</span></li>
                                            <li><span class="princing_name">Dashboards</span> <span class="princing_price princing_price_four"></span></li>
                                            <li><span class="princing_name">Control Panel & FTP</span> <span class="princing_price princing_price_four"></span></li>
                                            <li><span class="princing_name">Free Support</span> <span class="princing_price princing_price_four"></span></li>
                                        </ul>
                                        <div class="separator"></div>
                                    </figure>
                                    
                                    <footer class="pricing_footer text-center">
                                        <h3><span class="dolor">$</span> 20 <span class="month">/Mo </span></h3>
                                        <div class="smallseparator separetor_four"></div>
                                        <a href="">SELECT PLAN</a>
                                    </footer>
                                </div>
                            </div>

                        </div><!-- End of pcining section -->

                        <div class="abouts_area">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="single_about wow fadeInLeft" data-wow-duration="1.5s">
                                        <h3>About Us</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat eget diam sit amet molestie.Curabitur. 
                                            ut ipsum bibendum tortor lacinia fermentum nec joeıa.Mauris at augue libero. Fusce posuere, sapien nec poır.Uaee augsuada sed mauris in tincidunt...</p>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="single_about_right wow fadeInRight" data-wow-duration="1.5s">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="single_team text-center">
                                                    <div class="team_img">
                                                        <img src="images/team1.jpg" alt="" />
                                                    </div>
                                                    <div class="team_deatels">
                                                        <h4>Jonny Doe</h4>
                                                        <p>Designer</p>
                                                        <div class="team_socail">
                                                            <a href=""><i class="fa fa-facebook"></i></a>
                                                            <a href=""><i class="fa fa-twitter"></i></a>
                                                            <a href=""><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="single_team text-center">
                                                    <div class="team_img">
                                                        <img src="images/team3.jpg" alt="" />
                                                    </div>
                                                    <div class="team_deatels">
                                                        <h4>Jonny Doe</h4>
                                                        <p>Designer</p>
                                                        <div class="team_socail">
                                                            <a href=""><i class="fa fa-facebook"></i></a>
                                                            <a href=""><i class="fa fa-twitter"></i></a>
                                                            <a href=""><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="single_team text-center">
                                                    <div class="team_img">
                                                        <img src="images/team4.jpg" alt="" />
                                                    </div>
                                                    <div class="team_deatels">
                                                        <h4>Jonny Doe</h4>
                                                        <p>Designer</p>
                                                        <div class="team_socail">
                                                            <a href=""><i class="fa fa-facebook"></i></a>
                                                            <a href=""><i class="fa fa-twitter"></i></a>
                                                            <a href=""><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End of Pricing Section -->




        <section id="clients" class="comments">
            <div class="overlay-fluid-block">
                <div class="container">
                    <div class="row">
                        <div class="main_comments wow fadeInUp" data-wow-duration="1.5s">
                            <div class="main_comments_content">
                                <div class="single_comments text-center">
                                    <p>“Suspendisse tempor turpis odio, sit amet cursus leo consequat non. Maecenas lacinia faucibus enimqui
                                        interdum dolor pulvinar vitae.”  </p>
                                    <a href="">John Doe</a>
                                </div>
                                <div class="single_comments text-center">
                                    <p>“Suspendisse tempor turpis odio, sit amet cursus leo consequat non. Maecenas lacinia faucibus enimqui
                                        interdum dolor pulvinar vitae.”  </p>
                                    <a href="">John Doe</a>
                                </div>
                                <div class="single_comments text-center">
                                    <p>“Suspendisse tempor turpis odio, sit amet cursus leo consequat non. Maecenas lacinia faucibus enimqui
                                        interdum dolor pulvinar vitae.”  </p>
                                    <a href="">John Doe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>

        <section id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="main_service text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration=".6s">
                                <div class="single_service_icon icon_one">
                                    <a href=""><i class="fa fa-flash"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4>Fast Servers</h4>
                                    <p>Nulla dapibus neque augue, quis tincidunt tortor aliquam vitae.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration="1.2s">
                                <div class="single_service_icon icon_two">
                                    <a href=""><i class="fa fa-skype"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4>Cloud Servers</h4>
                                    <p>Nulla dapibus neque augue, quis tincidunt tortor aliquam vitae.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration="1.7s">
                                <div class="single_service_icon icon_three">
                                    <a href=""><i class="fa fa-arrows"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4>Domain Transfer</h4>
                                    <p>Nulla dapibus neque augue, quis tincidunt tortor aliquam vitae.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration="2s">
                                <div class="single_service_icon icon_four">
                                    <a href=""><i class="fa fa-comments"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4>Live Support</h4>
                                    <p>Nulla dapibus neque augue, quis tincidunt tortor aliquam vitae.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of service Section -->



        <section id="footer" class="footer sections">
            <div class="container">
                <div class="row">
                    <div class="main_footer wow fadeInDown" data-wow-duration="2s">
                        <div class="col-sm-3 col-xs-12">
                            <div class="footer_logo">
                                <a href=""><img src="images/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-9 col-xs-12">
                            <div class="footer_menu">
                                <ul class="list-inline">
                                    <li><a href="">HOME</a></li>
                                    <li><a href="">ABOUT US</a></li>
                                    <li><a href="">BLOG</a></li>
                                    <li><a href="">POLICY</a></li>
                                    <li><a href="">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="footer_bottom_area">
                        <div class="col-sm-9 col-xs-12">
                            <div class="fo_bottom_right">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_right_footer wow fadeIn" data-wow-duration="1s">
                                            <p>Lorem ipsum dolor sit amet, consecteteeseurı adipiscing elit. Donec mollis commodoeesene que, non commodo risus volutpat vel.</p>
                                            <a href="">Design by : <strong>XpeedStudio</strong></a>
											
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="single_right_footer wow fadeIn" data-wow-duration="1.5s">
                                            <ul>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Support</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Account</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Product Catalog</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Shortcodes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="single_right_footer wow fadeIn" data-wow-duration="2s">
                                            <ul>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Support</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Account</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Product Catalog</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Shortcodes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-sm-3 col-xs-12">
                            <div class="fo_bottom_socail wow fadeIn" data-wow-duration="2.3s">
                                <a href="#"><i class="fa fa-phone"> 0000-0000-0000</i></a>
                                <a href=""><i class="fa fa-envelope"></i> informationteam@ghosthost.com</a>
                                <p>Lorem Ipsum Street, Lorem Avenue,Lorem Ipsum </p>
                            </div>
                        </div> 
                    </div>
                </div>
				
				
				
				
                
            </div>
        </section><!-- End of footer3 section -->
		
		<footer id="coppyrights" class="coppyrights">
			<div class="container-fluid">
			<div class="row">
				<div class="coppyright">
					<p class="wow fadeInUp" data-wow-duration="2s">Made with <i class="fa fa-heart"></i> by <strong><a href="http://bootstrapthemes.co">Bootstrap Themes</a></strong> 2016. All Rights Reserved</p>
				</div>
			</div>
			</div>
		</footer>






        <!-- STRAT SCROLL TO TOP -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  src="js/index.js"></script>
    </body>
</html>
