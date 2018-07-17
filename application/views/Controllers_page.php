<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>11</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://mis.ijm.co.th/test/fonts/font-awesome/css/font-awesome.css"></link>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="http://mis.ijm.co.th/test/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://mis.ijm.co.th/test/js/bootstrap.js"></script> 
<link rel="stylesheet" href="http://mis.ijm.co.th/test/css/cssnavback.css" type="text/css" />

<link rel="stylesheet" type="text/css"  href="http://mis.ijm.co.th/test/css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css"  href="http://mis.ijm.co.th/test/css/bootstrap.css"></link>

</head>
<body>
<h1><?php $data_login = $this->session->userdata('weblogin');
    echo $data_login['login_name'];
   ?></h1>
<hr />

<div id="tabs">
  <ul>
     <li><a href="http://mis.ijm.co.th/test/"><i class="fa fa-home fa-4x"style="margin-right: 15px;"></i></a></li>

    <li>
        <a href="http://mis.ijm.co.th/test/index.php/Welcome/login?menu=1"><span<i class="fa fa-newspaper-o fa-4x"style="margin-right: 15px;"></i></span></a>
        
    </li>
    <li><a href="http://mis.ijm.co.th/test/index.php/Welcome/login?menu=2"><i class="fa fa-user fa-4x"style="margin-right: 15px;"></i></a></li>
    
    
  </ul> 
</div>
    
    
    
    <?php 
/* @var $this type */
    $menu = $this->input->get('menu');
    
    if($menu==1){
        $this->load->view('slide_page');
        
    }
    else if ($menu==2){
        $this->load->view('user_page');
        
    }
   
   
   
    
    
    ?>
    

    
    


</body>
    
    
    

</html>
