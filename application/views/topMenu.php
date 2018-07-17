<div class="navbar-header">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse" > <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand page-scroll" href="#page-top"><img src=<?= base_url("img/logo_1.png") ?>></a> 
  
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
        <li class="hidden"> <a href="#page-top"></a> </li>
 
      
   <div class="dropdown">
       <a href=<?= base_url() ?> class="page-scroll"><button class="dropbtn">Home</button></a>
        <div class="dropdown-content">
<!--   <a href="#works"class="page-scroll">แสดงภาพรวม</a>
   <a href="#works"class="page-scroll">งานสังคมที่โดดเด่น</a>-->
</div> 
   </div>
  <div class="dropdown">
      <a href=<?= base_url("Welcome/about2") ?>><button class="dropbtn">About</button></a>
  <div class="dropdown-content">
    
 
   
  
   </div>
   </div>

           <div class="dropdown">
  <button class="dropbtn">Corporate Info</button>
  <div class="dropdown-content">
    <a href=<?= base_url("Welcome/message") ?>>Message From The Chairma</a>
    <a href=<?= base_url("Welcome/Vision") ?>>Vision & Mission</a>
    <a href=<?= base_url("Welcome/Profile") ?>>Company Profile</a>
    <a href=<?= base_url("Welcome/Organization") ?>>Organization Structure</a>
    <a href=<?= base_url("Welcome/team") ?>>Board of Directors</a>
<!--    <a href=<?= base_url("Welcome/Committee") ?>>Board Committee</a>
    <a href=<?= base_url("Welcome/Management") ?>>Management Team</a>-->
    
   
  
 </div>
</div> 
                <div class="dropdown">
  <button class="dropbtn">Corporate Governance Policy</button>
  <div class="dropdown-content">
    <a href=<?= base_url("Welcome/Ethice") ?>>Ethic</a>
    <a href=<?= base_url("Welcome/Important") ?>>Important Documents</a>
    <a href=<?= base_url("Welcome/Whistle") ?>>Whistle Blowing</a>
  </div>
</div>
        <div class="dropdown">
  <button class="dropbtn">Investors Relation</button>
  <div class="dropdown-content">
    <a href=<?= base_url("Welcome/Financial") ?>>Financial Information</a>
    <a href=<?= base_url("Welcome/Stock") ?>>Shareholder Information</a>
    <a href=<?= base_url("Welcome/Stock_Ex") ?>>Stock Exchange</a>
    <a href=<?= base_url("Welcome/Newsroom") ?>>Newsroom</a>
    <a href=<?= base_url("Welcome/Publications") ?>>Publications</a>
    <a href=<?= base_url("Welcome/Event_Pre") ?>>Event & Persentations</a>
    <a href=<?= base_url("Welcome/Information") ?>>Information Request</a>
  </div>
</div>
<!--        <div class="dropdown">
  <button class="dropbtn">Careers</button>
  <div class="dropdown-content">
    
  </div>-->

        <div class="dropdown">
  <a href="#contact"class="page-scroll"><button class="dropbtn">News And Insights</button></a>
  <div class="dropdown-content">
    <a href=<?= base_url("Welcome/The_news") ?>>In The News</a>
    <a href=<?= base_url("Welcome/Press_Releases") ?>>Press Releases</a>
    <a href=<?= base_url("Welcome/Activities") ?>>Activities</a>
    <a href=<?= base_url("Welcome/Gallery") ?>>Gallery</a>
    
  </div>
</div>
        
<div class="dropdown">
    <?php  if ($this->session->userdata('weblogin')) {
       $datases=$this->session->userdata('weblogin'); ?>
     <button class="dropbtn">welcome <?= $datases['login_name']?></button>
     
  <div class="dropdown-content">
    
      <ul>
          <?php
          if($datases['login_permit']==3){
          ?>
        <li><a href=<?= base_url("Welcome/login") ?>>Controllers</a></li>
    <?php } ?>
        <li><a href="javascript:logout();">logout</a></li>

        </ul>
  
    
  </div>
           <?php } else {?>
  <button class="dropbtn">Sign in / Sign up</button>
  <div class="dropdown-content">
     <nav class="main-nav"> 
      <ul>
        <li><a class="cd-signin" href="#0">Sign in</a></li>
        <li><a class="cd-signup" href="#0">Sign up</a></li>
        </ul>
  
    </nav>
  </div>
      <?php
    
    }?>
</div> 

</div>
  <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>
                    
                    <!--sing in page-->
                         <?php $this->load->view('sing_in'); ?>
                    <!---------------->

                    <!--sing up page-->
                         <?php $this->load->view('sing_up'); ?>
                    <!---------------->
                    <!--reset password page-->
                         <?php $this->load->view('reset_password'); ?>
                    <!---------------->
			
                        
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div>      
 </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container --> 
</nav>  
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

function logout(){
    
       var r = confirm("คุณต้องการจะออกจากระบบใช่ไหม!");
    if (r == true) {

        window.location=window.location.origin + '/Welcome/logout';
    } else {
        
    }
}
</script>