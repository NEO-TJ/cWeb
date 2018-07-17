<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IJM | Intercontinental Jewellery Manufacturing</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap -->
    <?php echo css_asset("bootstrap.css"); ?>
    <?php echo css_asset("font-awesome.min.css"); ?>

    <!-- Stylesheet ================================================== -->
    <?php echo css_asset("style.css"); ?>
    <?php echo css_asset("prettyPhoto.css"); ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <!--<script type="text/javascript" src="js/modernizr.custom.js"></script>-->
  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="preloader">
        <div id="status">
          <?php echo image_asset("preloader.gif", null, array("height"=>"64", "width"=>"64", "alt"=>"")); ?>
          <!--<img src="http://mis.ijm.co.th/test/img/preloader.gif" height="64" width="64" alt="">-->
        </div>
    </div>

    <!-- Navigation -->
    <?php $this->load->view('topMenu'); ?>

    <!--Header-->
    <?php $ch_menu = $this->uri->segment(2);
      if($ch_menu == 'team') { $this->load->view('Team');
      } else if ($ch_menu == 'Financial'){ $this->load->view('statistical');
      } else if ($ch_menu == 'Stock') { $this->load->view('Stock'); 
      } else if ($ch_menu == 'message') { $this->load->view('message');
      } else if ($ch_menu == 'about2') { $this->load->view('about2');
      } else if ($ch_menu == 'Profile') { $this->load->view('Profile');
      } else if ($ch_menu=='The_news') { $this->load->view('The_news');
      } else if ($ch_menu=='Gallery') { $this->load->view('Gallery');
      } else if ($ch_menu=='Important') { $this->load->view('Important');
      } else if ($ch_menu=='Press_Releases') { $this->load->view('Press_Releases');
      } else if ($ch_menu=='The_news_deatail') { $this->load->view('The_news_deatail');
      } else if ($ch_menu=='Vision') { $this->load->view('Vision');
      } else if ($ch_menu=='Organization') { $this->load->view('Organization');
      } else if ($ch_menu=='Committee') { $this->load->view('Committee');
      } else if ($ch_menu=='Management') { $this->load->view('Management');
      } else if ($ch_menu=='Subsidiaries') { $this->load->view('Subsidiaries');
      } else if ($ch_menu=='Ethice') { $this->load->view('Ethice');
      } else if ($ch_menu=='Whistle') { $this->load->view('Whistle');
      } else if ($ch_menu=='Stock_Ex') { $this->load->view('Stock_Ex');
      } else if ($ch_menu=='Newsroom') { $this->load->view('Newsroom');
      } else if ($ch_menu=='Publications') { $this->load->view('Publications');
      } else if ($ch_menu=='Event_Pre') { $this->load->view('Event_Pre');
      } else if ($ch_menu=='Information') { $this->load->view('Information');
      } else if ($ch_menu=='Activities') { $this->load->view('Activities');
      } else { $this->load->view('content'); }
    ?>

    <!-- Footer Section -->
    <?php $this->load->view('footer')?>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <?php //echo js_asset("index.js"); ?>
    <script  src="http://mis.ijm.co.th/test/js/index.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script type="text/javascript" src="http://mis.ijm.co.th/test/js/jquery.1.11.1.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script type="text/javascript" src="http://mis.ijm.co.th/test/js/bootstrap.js"></script> 
    <script type="text/javascript" src="http://mis.ijm.co.th/test/js/SmoothScroll.js"></script> 
    <script type="text/javascript" src="http://mis.ijm.co.th/test/js/jquery.prettyPhoto.js"></script> 
    <script type="text/javascript" src="http://mis.ijm.co.th/test/js/jquery.isotope.js"></script> 
    <script type="text/javascript" src="http://mis.ijm.co.th/test/js/jquery.parallax.js"></script> 
    <script type="text/javascript" src="http://mis.ijm.co.th/test/js/jqBootstrapValidation.js"></script> 
    <script type="text/javascript" src="http://mis.ijm.co.th/test/js/contact_me.js"></script> 

    <!-- Javascripts ================================================== --> 
    <script type="text/javascript" src="http://mis.ijm.co.th/test/js/main.js"></script>
    <script src="http://mis.ijm.co.th/test/js_slider/jquery.cslider.js"></script>
    <script src="http://mis.ijm.co.th/test/js_slider/modernizr-latest.js"></script>

    <script type="text/javascript">
      $(window).load(function(){			
        $('#recent-projects').carouFredSel({
          responsive: true,
          width: '100%',
          auto: true,
          circular: true,
          infinite: false,
          prev: {
            button: "#car_prev",
            key: "left",
              },
          next: {
            button: "#car_next",
            key: "right",
                },
          swipe: {
            onMouse: true,
            onTouch: true
            },
          scroll: 2000,
          items: {
            visible: {
              min: 4,
              max: 4
            }
          }
        });
      });	
    </script>
  </body>
</html>