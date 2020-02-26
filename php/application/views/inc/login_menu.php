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
            <div class="wow slideInRight" data-wow-duration="0.7s" id="sidebar-wrapper">
            	<div Onclick="location.href='<?= base_url(); ?>'"  class="cls">
                <?php echo img(array("src"=>"assets/images/closebtn.png","class"=>"clsBtn")); ?>
                <!---img class="clsBtn" src="assets/images/closebtn.png" alt="close"-->
              </div>
            	<?php if(!$this->session->userdata('userEmail')){ ?>
            	<div class="profile-pics">
                    <ul>
                    <!--li data-toggle="modal" data-target="#myModal">Login</li>
                    <li data-toggle="modal" data-target="#myModal2">Signup</li>-->
                    <li class="acts" Onclick="location.href='<?= base_url(); ?>signin'">Login</li>
                    <li Onclick="location.href='<?= base_url(); ?>signUp'">Signup</li>
                    </ul>
                </div>
                <?php } ?>
	            	
                    <div class="row">
  <div class="col-md-10 offset-md-2">
  	 <div class="pgLogin">
      <?php if($feedback = $this->session->flashdata("feedback")){ ?>
        <span class="text-danger"><?= $feedback; ?></span>
      <?php } ?>
  	 	<h3>Login</h3>
  	 	<form action="home/login" method="post">
  	 		<div class="form-group">
  	 			<label>Email Address</label>
  	 			<input type="email" name="email" class="form-control">
  	 		</div>
  	 		<div class="form-group">
  	 			<label>Password</label>
  	 			<input type="password" name="password" class="form-control">
  	 		</div>
  	 		<div class="form-group">
  	 			<input type="checkbox" name="check">
  	 			Remember Me
  	 			<?= nbs(8) ?>
  	 			<a href="forgotPass">Forgot Password?</a>
  	 		</div>
  	 		<div class="form-group">
  	 			<div align="center">
  	 				<button class="btn-dangers">Login</button>
  	 			</div>
  	 		</div>
  	 	</form>
  	 </div>
  </div>
</div>
           
            </div> <!-- /#sidebar-wrapper -->