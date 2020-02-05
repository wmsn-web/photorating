<div class="container-fluid">
	    <nav class="navbar navbar-expand navbar-dark">
		        <div class="collapse navbar-collapse" id="navbarsExample02">
		            <ul class="navbar-nav mr-auto">
		                <li class="nav-item item-logo">Logo</li>
		            </ul>
		            <a href="javascript:void(0)" class="navbar-brand">
		            	<span class="fltr">Filter</span>
		            	<span class="menus">Menu</span>
		                <img  id="tgl" src="assets/images/menubars.png" alt="menuBar" />
		            </a>
		        </div>
		</nav>
    </div>
    
        <div id="wrapper" class="toggleddd">

            <!-- Sidebar -->
            <div class="wow bounceInRight" data-wow-duration="0.9s" id="sidebar-wrapper2">
            	<div class="cls">
            		<?= img(array("class"=>"clsBtn", "src"=>"assets/images/closebtn.png", "alt"=>"close")); ?>
            		
            	</div>
            	<?php if(!$this->session->userdata('userEmail')){


            	 ?>
            	<div class="profile-pics">
                    <ul>
                    <!--li data-toggle="modal" data-target="#myModal">Login</li>
                    <li data-toggle="modal" data-target="#myModal2">Signup</li>-->
                    <li Onclick="location.href='<?= base_url(); ?>signin'">Login</li>
                    <li Onclick="location.href='<?= base_url(); ?>signUp'">Signup</li>
                    </ul>
                </div>
                <?php }else{ 

                     $profilePics = $imgPro->image ;
                  if($profilePics==""){
                     $profilePic = "default.png";
                  }else{
                  	$profilePic = $profilePics;
                  }
                	?>
	            	<div class="profile-pic">
	            		<?= img(array("class"=>"round", "src"=>"uploads/$profilePic", "alt"=>"profile")); ?>
	            	</div>
                <?php } ?>
                
            	<div class="sideMenu">
	            	<ul>
	                   <li><a<?=($this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? ' class="actv"' : '');?> href="<?= base_url(); ?>">Home</a></li>
	                   <li><a <?=($this->uri->segment(1) == 'about' ? ' class="actv"' : '');?>  href="<?= base_url(); ?>about">About Us</a></li>
	                   <li><a <?=($this->uri->segment(1) == 'settings' ? ' class="actv"' : '');?> href="<?= base_url(); ?>settings">Settings</a></li>
	                   <li><a <?=($this->uri->segment(1) == 'myprofile' ? ' class="actv"' : '');?>  href="<?= base_url(); ?>myprofile">My Profile</a></li>
	                   <li><a <?=($this->uri->segment(1) == 'my-half-friends' ? ' class="actv"' : '');?>  href="<?= base_url(); ?>my-half-friends">My Half friend</a></li>
	                   <li><a <?=($this->uri->segment(1) == 'my-friends' ? ' class="actv"' : '');?>  href="<?= base_url(); ?>my-friends">My Full Friend</a></li>
	                   <li><a href="<?= base_url(); ?>home/logout">Logout</a></li>
	            	</ul>
               </div>
           
            </div> <!-- /#sidebar-wrapper -->