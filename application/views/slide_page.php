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
    <th>Topic</th>
    <th>Detail</th>
    <th>Image</th>
    <th>Link</th>
    <th>Status</th>
    <th>Start date</th>
    <th>End date</th>
    <th>Source by</th>
    <th>Edit</th>
        <?php foreach($data_bar as $rowdata){ ?>
        <tr>
            <td><?= $rowdata['slide_id'] ?></td>
            <td><?= $rowdata['slide_topic'] ?></td>
            <td><?= $rowdata['slide_detail'] ?></td>
            <td><?= $rowdata['slide_img'] ?></td>
            <td><?= $rowdata['slide_link'] ?></td>
            <td><?= $rowdata['slide_status'] ?></td>
            <td><?= $rowdata['slide_start_date'] ?></td>
            <td><?= $rowdata['slide_End_date'] ?></td>
            <td><?= $rowdata['slide_order'] ?></td>
            <td><a href="javascript:popup('<?= $rowdata['slide_id'] ?>')"><button type="button" class="btn btn-info">Open</button></a></td>
        </tr>
    
     <?php } ?> 
  </tr>
    
    </table>
    
             <a href="http://mis.ijm.co.th/test/index.php/Welcome/login?menu=1"><span<i class="fa fa-trash fa-5x"style="margin-right: 15px;"></i></span></a>


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

    <script> 
        function popup(id){
            $("#myModal").modal('show');
            $(".modal-content").load('http://mis.ijm.co.th/test/index.php/Welcome/get_edit_slidebar?id='+id);
        }
    </script>
<div class="container">
  <div class="modal fade" id="myModal"  tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">    
      </div>
    </div>
  </div>
</div>


