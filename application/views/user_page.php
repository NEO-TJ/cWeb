<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>11</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="http://mis.ijm.co.th/test/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://mis.ijm.co.th/test/js/bootstrap.js"></script> 
<link rel="stylesheet" href="http://mis.ijm.co.th/test/css/cssnavback.css" type="text/css" />

<link rel="stylesheet" type="text/css"  href="http://mis.ijm.co.th/test/css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css"  href="http://mis.ijm.co.th/test/css/bootstrap.css"></link>

</head>
<body>
    
    
<div>
<table>

  <tr>


    <th>id</th>
    <th>Name</th>
    <th>Email</th>
    <th>permid</th>
    <th>status</th>
    <th>Edit</th> 
       
        <?php 
        print_r($data_user);
        foreach($data_user as $rowdata){ ?>
    
        
        <tr>
            <td><?= $rowdata['login_id'] ?></td>
            <td><?= $rowdata['login_name'] ?></td>
            <td><?= $rowdata['login_email'] ?></td>
            
            
            
            <?php
            if($rowdata['login_permit']==1){
                $mess='Visitor';
            }
              else if($rowdata['login_permit']==2){
                $mess='Member';
            }
            if($rowdata['login_permit']==3){
                $mess='ADMIN';
            }
            ?>
             <td><?= $mess ?></td> 
             
             
             
             
             
             <?php
            if($rowdata['login_status']==1){
                $status='Wait  for confirm';
            }
              else if($rowdata['login_status']==2){
                $status='Confirmed';
            }
            if($rowdata['login_status']==0){
                $status='Delete';
            }
            ?> 
             
             
             
            <td><?= $status ?></td>
            <td><a href="javascript:popup('<?= $rowdata['login_id'] ?>')"><button type="button" class="btn btn-info" data-toggle="modal" tabindex="-1" data-target="#myModal">Open</button></a></td>
        </tr>
    
    

     <?php } ?> 
           

  </tr>
    </table>
     <a href="http://mis.ijm.co.th/test/index.php/Welcome/delete_data_user?menu=2"><span<i  class="fa fa-trash fa-5x"style="margin-right: 15px;display: block"></i></span></a>
    </div>
</body>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="http://mis.ijm.co.th/test/js/boots_test.js"></script>
</head>
<div class="container">
<script> 
        function popup(id){
            $("#myModal").modal('show');
            $(".modal-content").load('http://mis.ijm.co.th/test/index.php/Welcome/get_edit_userlogin?id='+id);
        }
    </script>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <?php $this->load->view('user_edit'); ?>
      </div>
    </div>
  </div>
</div>