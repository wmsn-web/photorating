
<?php echo doctype(); ?>
<html>
<head>
	<?php 
      $meta = array(
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'description', 'content' => 'My Great Site'),
        array('name' => 'keywords', 'content' => 'love, passion, intrigue, deception'),
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'),
        array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0')
    );

echo meta($meta);
	 ?>
	<!--meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="">
    <meta name="author" content="">
    ---->
    <?php include("inc/layouts.php"); ?>
<title>My Profile</title>
</head>
<body>
	<?php include("inc/main_menu.php"); ?>
    <div class="container-set">
			<div class="row">
				<div class="col-md-12">
					<?php if($feedback =$this->session->flashdata("feedback")){ ?>
                       
                       <div class="alert alert-success">
                       	<?= $feedback; ?>
                       </div>
                      
					<?php } ?>	
				</div>
				<div class="col-md-4">
					<div class="deskView">
						<div class="set_menu_pro">
							<ul>
								<li><a<?=($this->uri->segment(1) == 'myprofile' ? ' class="actv"' : '');?> href="myprofile">My Profile</a></li>
								<li><a<?=($this->uri->segment(1) == 'myphoto' ? ' class="actv"' : '');?> href="myphoto">My Photos</a></li>
								<li><a<?=($this->uri->segment(1) == 'my-half-friends' ? ' class="actv"' : '');?> href="my-half-friends">My half Friends</a></li>
								<li><a<?=($this->uri->segment(1) == 'my-friends' ? ' class="actv"' : '');?> href="my-friends">My Fill Friends</a></li>
								<li><a<?=($this->uri->segment(1) == 'myreviews' ? ' class="actv"' : '');?> href="myreviews">My reviews</a></li>
							</ul>
						</div>
					</div>
					<div class="mobView">
						<div class="set_menu_mob">
							
						</div>
				    </div>
			    </div>
				<div class="col-md-8">
					<h5>Upload Photo</h5>
					<div class="aboutMe">
						<?= form_open_multipart("myphoto/uploadGal"); ?>
						<input type="hidden" name="main_user" value="<?= $imgPro->email ?>">
							<span id="ddd"></span>
							<input class="dispHide" type="file" id="uplLbl" name="gal_img">
							<label <?= $styl; ?> id="uupl" for="uplLbl"><img class="img-Upl" src="assets/images/icons/uploadPhoto.png"></label>
							<button id="uplBtn" class="btn btn-danger">Upload</button>
							
						</form>
					</div>
					<div class="myLocation">
						
						<section id="myPhotos">
							<?php foreach ($allImg as $allImgs) { ?>
								
							
	                        <div class="cont">
			 					<img class="imgg" src="assets/images/<?= $allImgs->image ?>"  alt="gallery"><br>
		                    </div>
		                    <?php } ?>
                        </section>
					</div>
				</div>
				
			</div>
	</div>
    <section>
        <?= br(6); ?>
    </section>
    

<?php include("inc/js.php"); ?>
        
</body>
</html>