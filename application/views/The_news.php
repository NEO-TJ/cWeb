<!--eam Section -->
<div id="team" class="text-center">
  <div class="container">
      
    <div class="section-title center">
      <h2>In The News</h2>
      <hr>
      <br> <br>
    </div>
      <center>
          <div class="row">
            <div class="portfolio-items">
        <?php foreach($data_news as $rowdata){ ?> 
            <div class="col-xs-4 col-lg-4 col-md-4" style="text-align: left;padding-top:15px; padding-bottom: 15px;padding-right: 15px;">
                <h3 class="text-center"><a href="<?=$rowdata['news_link']?>?id=<?=$rowdata['news_id']?>"> <?=$rowdata['news_topic']?></a></h3> <br>
                <?=$rowdata['news_deatail']?>
                <br><br><?= date_format(date_create($rowdata['news_create_date']),'d-m-Y')?>
            </div>
            
           
        <?php }?>
            
            </div>
          </div>
    </center>
      
      
   
  </div>
</div>







