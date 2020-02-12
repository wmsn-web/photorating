
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
    
<title>My Reviews</title>
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
								<li><a<?=($this->uri->segment(1) == 'myHalfFriends' ? ' class="actv"' : '');?> href="myHalfFriends">My half Friends</a></li>
								<li><a<?=($this->uri->segment(1) == 'myFriends' ? ' class="actv"' : '');?> href="myFriends">My Fill Friends</a></li>
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
					<h5>Photo Reviews</h5>
					<div class="aboutMe">
						
					</div>
					<div class="myLocation">
						 <?php foreach ($revData as $revDatas) { ?>
                             	<?php $status = $revDatas['status'];
						if($status=="0"){ ?>
							<div class="alert alert-danger">
								You do not have any Reviews!
							</div>
					    <?php }else{ ?>
						
						<section id="photos">
                             
                             <?php foreach ($revData as $revDatas) { ?>
                             	

							<div class="contx">
								<img  class="imgg" src="uploads/gallery/<?= $revDatas['image']; ?>">
								<div class="midTxt">
									<img src="assets/images/icons/star.png">
									<?= $revDatas['rates']; ?>
								</div>
							</div>
							<?php } } } ?>

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