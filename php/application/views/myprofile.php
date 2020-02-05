
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
                            <ul>
                                <li class="activeUl" onclick="location.href='myphoto'">My Photos</li>
                                <li id="myreviews">My reviews</li>
                            </ul>
                        </div>
                    </div>
			    </div>
				<div class="col-md-4">
					<h5><?= $imgPro->name; ?></h5>
					<div class="aboutMe">
						<?= $imgPro->about; ?>
					</div>
					<div class="myLocation">
						<?= $imgPro->country; ?>
					</div>
					<div class="myRev">
						<ul>
							<li><h3><?= $pht ?></h3> Photos</li>
							<li><h3><?= $totRev ?></h3> Reviews</li>
					    </ul>
					</div>
				</div>
				<div class="col-md-4">
					<div align="center">
						<div class="pro_pic">
							<img class="pro_img" src="uploads/<?= $profilePic; ?>" /><br>
					    </div>
					    <div class="edtBtn">
					    	<button onclick="location.href='settings'">Edit Profile</button>
					    </div>
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