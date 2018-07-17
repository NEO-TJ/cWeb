

<link rel="stylesheet" type="text/css" href="http://mis.ijm.co.th/test/css_slider/slider.css"/>
<link rel="stylesheet" type="text/css" href="http://mis.ijm.co.th/test/css_slider/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="http://mis.ijm.co.th/test/css_slider/responsive.css"/>
<script src="js_slider/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->

<!--<div style="background-image: url(http://mis.ijm.co.th/test/img/intro-bg.jpg); filter: brightness(50%);" id="activities" class="undermenuarea">-->

   
	
	<!-- SLIDER AREA
	================================================== -->
        <div id="da-slider" class="da-slider" style="margin-top:80px; height: 705px;">
        <img src="http://mis.ijm.co.th/test/img/intro-bg.jpg" width="100%" height="100%" style="-webkit-filter: brightness(50%);z-index: -1;">
         
 
           
		<!--Slide 1-->
                <?php foreach($data_bar as $rowdata){ ?>
                <div class="da-slide"style="margin-top: 150px;">
                        <h2 style="color: #fff"> <?= $rowdata['slide_topic'] ?></h2>
			<p style="color: #fff;font-size: 24px">
				<?= $rowdata['slide_detail'] ?>
			</p>
			<a href="<?= $rowdata['slide_link'] ?>" class="da-link" style="width:202px;">Multi-Purpose</a>
                        <?php if(trim($rowdata['slide_img']) != 'null.jpg' ){ ?>
			<div class="da-img">
                            <img style="max-height: 250px;" src="http://mis.ijm.co.th/test/img/upload/slide/<?= $rowdata['slide_img']?>" alt="">
			</div>
                        <?php } ?>
		</div>
                <?php } ?>                   		
		<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>
		</nav>
	</div>
  
<!--  </div>-->
<script src="http://mis.ijm.co.th/test/js_slider/jquery.cslider.js"></script>
<script src="http://mis.ijm.co.th/test/js_slider/modernizr-latest.js"></script>

<script type="text/javascript">
$(window).load(function(){			
			$('#recent-projects').carouFredSel({
				responsive: true,
				width: '100%',
				auto: true,
				circular	: true,
				infinite	: false,
				prev : {
					button		: "#car_prev",
					key			: "left",
						},
				next : {
					button		: "#car_next",
					key			: "right",
							},
				swipe: {
					onMouse: true,
					onTouch: true
					},
				scroll : 2000,
				items: {
					visible: {
						min: 4,
						max: 4
					}
				}
			});
		});	
</script>