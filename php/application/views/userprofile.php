
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
<title>User Profile</title>
</head>
<body>
	<?php include("inc/main_menu.php"); ?>
    <div class="container-set">
			<div class="row">
				<?php if($feedback= $this->session->flashdata("feedback")){ ?>
					<div class="col-md-12">
						<div class="alert alert-success">
							<?= $feedback; ?>
						</div>
					</div>
			    <?php } ?>
				<div class="col-md-4">
					<div class="deskView">
						<div class="set_menu_pro">
							<ul>
								<li><a<?=($this->uri->segment(1) == 'userProfile' ? ' class="actv"' : '');?> href="myprofile">Profile</a></li>
								<li><a<?=($this->uri->segment(1) == 'photos' ? ' class="actv"' : '');?> href="myphoto">Photos</a></li>
								
							</ul>
						</div>
					</div>
					<div class="mobView">
                        <div class="set_menu_mob">
                            <ul>
                                <li class="activeUl" onclick="location.href='myphoto'">Profile</li>
                                <li id="photos">Photos</li>
                            </ul>
                        </div>
                    </div>
			    </div>
				<div class="col-md-4">
					<h5><?= $getUser->name; ?></h5>
					<div class="aboutMe">
						<?= $getUser->about; ?>
					</div>
					<div class="myLocation">
						<?= $getUser->country; ?>
					</div>
					<div class="myRev">
						
					</div>
				</div> 

				<?php
				 $getUth = $checkRqsts;
				 if($getUth > 0){
				     $btnTxt = "";
				     $disp= "";
                     $status = $checkRqst->status;
                     $rqst = $checkRqst->rqst;
                     if($status==1){
                     	$btnTxt = "Message";
                     	$disp= "";
                     }
                     if($status==0){
                     	$btnTxt = "Request Sent";
                     	$disp= "disabled='disabled'";
                     }
                 }else{
                 	$btnTxt = "Send Request";
                     	$disp= "";
                 }

                     
				?>
				<div class="col-md-4">
					<div align="center">
						<div class="pro_pic">
							<img class="pro_img" src="uploads/<?= $profilePic; ?>" /><br>
					    </div>
					    <div class="edtBtndd">
					    	<?= form_open("userProfile/sendRequest"); ?>
					    		<input type="hidden" name="userName" value="<?= $getUser->name; ?>">
					    		<input type="hidden" name="userEmail" value="<?= $getUser->email; ?>">
					    		<input type="hidden" name="authName" value="<?= $imgPro->name; ?>">
					    		<input type="hidden" name="authEmail" value="<?= $imgPro->email; ?>">
					    		<button ><?= $btnTxt; ?></button>
					        </form>
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