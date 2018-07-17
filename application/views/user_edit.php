<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>11</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="http://mis.ijm.co.th/test/css/cssnavback.css" type="text/css" />


<body>
    <h5>Edit User</h5>
<div 
<div>
  
      <form action="http://mis.ijm.co.th/test/index.php/Welcome/user_save" method="post">  
       <?php 
        $id= $this->input->get('id');
        $data_edit = $this->User->user_edit($id);
        foreach( $data_edit as $show){ ?>
      
      
   
   
    <label for="lname">Name</label>    
    <input type="text" id="firstname" name="firstname" placeholder="Name..." value="<?= $show['login_name'] ?>"/>
            
    <label for="lname">Email</label>
    <input type="text" id="email" name="email" placeholder="Email.."value="<?= $show['login_email'] ?>"/>
       
    
    <label for="fname">Status</label>
        
         
    
    <select id="status" name="status">  
        <?php
     $xi = array( 0=>'Delete',1=>'Wait  for confirm',2=>'Confirmed');
        for ($i=0;$i<=2;$i++){
        $select='';
           
            if($i==$show['login_status']){
                
                $select = 'selected=""';       
            }          
?>
     <option value="<?= $i ?>" <?= $select ?>><?= $xi[$i]?></option>
<?php } ?>

</select>


    <label for="lname">Permid</label>
    
    <select id="Permid" name="Permid">
     <?php
     $xx = array( 1=>'Visitor',2=>'Member',3=>'ADMIN');
        for ($i=1;$i<=3;$i++){
        $select='';
           
            if($i==$show['login_permit']){
                
                $select = 'selected=""';       
            }          
?>
     <option value="<?= $i ?>" <?= $select ?>><?= $xx[$i]?></option>
<?php } ?>
   
 
</select>
    <!--<input type="text" id="Permid" name="Permid" placeholder="Permid.." value="<?= $show['login_permit'] ?>"/>-->
       
    <br><br><br><label for="lname">Image</label>
    <input type="file" name="pic" accept="image/*">
 
        <br>
            <br>
                <br>
             
        <input type="hidden" name="id" id="id" value="<?= $id ?>"/>
    <input type="submit" value="Submit"/>
        <?php }?>
                
                </form>
</div>

                    
</body>
</html>
   