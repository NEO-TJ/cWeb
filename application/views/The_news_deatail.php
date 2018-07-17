<div id="team" class="text-center">
    <div>
      <?php 
        
       
        foreach($data_news as $show){ 
           
            ?>
    <div class="section-title center">
      
        
        
        <h2><?= $show['news_topic']?></h2>
      <hr>
      
    </div>
    </div>
       
    
    
     </div>
<div class="container">
    <div style="margin-top: -150px">
      <?= $show['news_full_deatail']?>
        <br><br><br><br>
   
        </div>
</div>
          
    
        <?php }?>
          
          
    
            
           
       
            
           
            
              
   









