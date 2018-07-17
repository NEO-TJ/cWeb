<div id="works">
    <div class="container"> <!-- Container -->
        <div class="section-title text-center center">
            <h2>PRESS RELEASES</h2>
            <hr>
            <div class="clearfix"></div>

        </div>

        <?php $a=2;
        
       
        foreach($data_Press as $rowdata){
        $topic=$rowdata['news_topic'];
        $deatail=$rowdata['news_deatail'];
        $img=$rowdata['news_img']
                 ?>

     <?php if($a%2==0){
                  ?>
        <div class="row">
            <div class="portfolio-items">           
            <div class="container">
                <div class="col-md-6">
                    <div class="portfolio-item" >
                        <div class="hover-bg" style="width: 100%;height: auto;"> <a href="http://mis.ijm.co.th/test/img/upload/press/<?=$img?>" rel="prettyPhoto">
                        <img src="http://mis.ijm.co.th/test/img/upload/press/<?=$img?>" class="img-responsive" alt="Gallery"> </a> </div>
                       
                    </div>
                </div> 
                          
                <div class="col-md-6">
                    <div class="portfolio-item" >
                        <p>
                           <?=$topic?>  <br>
               
                             <?=$deatail?>
                        
                           
                        </p>
                        
                    </div>    
                </div>
            </div>
 
               
                 <?php } else {?>
     
            <div class="container">
                <div class="col-md-6">

                        <p>
                           <?=$topic?> – <br>
                            
                               <?=$deatail?>
               
                        </p>  
                </div>


                
                <div class="col-md-6">
                <div class="portfolio-item" >
                    <div class="hover-bg"> <a href="http://mis.ijm.co.th/test/img/upload/press/<?=$img?>" rel="prettyPhoto">
                        <img src="http://mis.ijm.co.th/test/img/upload/press/<?=$img?>" class="img-responsive" alt="Gallery"> </a> </div>
                    </div>
                </div>
            </div>
                
       
  <?php }?>   
                  
               
            </div>
            <input type="hidden" value="<?=$a++?>">
           <?php }?>     
            
            </div>
 
        
     
       
        
        
        
        
        </div>
    </div>
