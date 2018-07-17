<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>11</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="http://mis.ijm.co.th/test/css/cssnavback.css" type="text/css" />


<body>
    <h5>Using CSS to style an HTML Form</h5>
<div>
  <form action="http://mis.ijm.co.th/test/index.php/Welcome/slide_save" method="post">
      <?php 
        $id= $this->input->get('id');
        $data_edit = $this->Slidebar->slidebar_edit($id);
        foreach( $data_edit as $show){ ?>

    <label for="fname">Topic</label>
    <input type="text" id="Topic" name="Topic" placeholder="Topic..." value ="<?= $show['slide_topic']?>"></input>
     
    <label for="lname">Detail</label>    
    <textarea name="message" id="message"><?= $show['slide_detail']?></textarea>
    

    <label for="lname">Image</label>
    <div class="da-img">
        <img style="max-height: 250px;" src="http://mis.ijm.co.th/test/img/<?= $show['slide_img']?>" alt=""/>
    </div>
    <input type="file" name="pic" accept="image/*"/>

    <label for="lname">Link</label>
    <input type="text" id="link" name="link" placeholder="Your last name.." value ="<?= $show['slide_link']?>"></input>
       
    
    <label for="fname">Status</label>
    <input type="text" id="Status" name="Status" placeholder="Your name.." value ="<?= $show['slide_status']?>"></input>

    <label for="lname">Start Date</label>
    <input type="text" id="Start" name="Start" placeholder="Your last name.." value ="<?= $show['slide_start_date']?>"></input>

    <label for="lname">End date</label>
    <input type="text" id="End" name="End" placeholder="Your last name.." value ="<?= $show['slide_End_date']?>"></input>
        
    <label for="lname">Source by</label>
    <input type="text" id="Source" name="Source" placeholder="Your last name.." value ="<?= $show['slide_order']?>"></input>
    
    <input type="hidden" name="id" id="id" value="<?= $id ?>"/>
    
    
    <input type="submit"  value="Submit">
      <?php }?>
  </form>
</div>

</body>
</html>
