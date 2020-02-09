
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){


 $('.conBtn').click(function(){
     var  authemail = $("#authemail").val();
     var  useremail = $("#useremail").val();
     $.post("myHalfFriends/confirmRqst",
        {
        	authemail: authemail,
        	useremail: useremail
        },
        function(response,status){
        	if(response=="1")
        	{
        		location.href="myFriends";
        	}
        }
     	)
});
 });
</script>
<title>My Photos</title>
</head>
<?php include("config/database.php"); ?>
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
								<li><a<?=($this->uri->segment(1) == 'myFriends' ? ' class="actv"' : '');?> href="myFriends">My Full Friends</a></li>
								<li><a<?=($this->uri->segment(1) == 'myreviews' ? ' class="actv"' : '');?> href="myreviews">My reviews</a></li>
							</ul>
						</div>
					</div>
					<div class="mobView">
						
				    </div>
			    </div>
				<div class="col-md-8">

					<div class="set_menu_mob">
							<div class="tbl-list">
								<table class="friendList">
									<?php
                                       $authMail = $this->session->userdata('userEmail');
									   $sql1 = mysqli_query($db,"SELECT * FROM friendsall WHERE authemail='$authMail' AND status='1'");
									   while($row = mysqli_fetch_array($sql1)){
									   	$frndEmail = $row['useremail'];
									   	
									   	$sql2 = mysqli_query($db,"SELECT * FROM user_profile WHERE email='$frndEmail'");
									   	$row2 = mysqli_fetch_array($sql2);

									   	$sql3 = mysqli_query($db,"SELECT SUM(rate) as rate FROM reviews WHERE main_user='$frndEmail'");
									   	$sql4 = mysqli_query($db,"SELECT * FROM reviews WHERE main_user='$frndEmail'");
									   	$row3 = mysqli_fetch_array($sql3);
									   	$totRate = $row3['rate'];
									   	$numrow = mysqli_num_rows($sql4);
									   	if($numrow==0){
                                            $avgs = 0;
									   	}else{
									   		$avgs = $totRate/$numrow;
									   	}

									   	$avg = number_format($avgs,1);
									   

									?>

									<tr>
										<td><img class="list-pro-img" src="uploads/<?= $row2['image']; ?>" /></td>
										<td class="mdlTd">
											<span onclick="location.href='userProfile?user=<?= $row2['email']; ?>'" class="nameTxt"><?= $row2['name']; ?></span><br>
											<span class="dtlsTxt"><?= substr($row2['about'],0,50); ?></span> <br>
											<span class="bottomTxt">Location:  <?= $row2['country']; ?>,  Reviews: <?= $avg; ?></span>
									    </td>
										<td>
											<br><span class="mobTxt"><?= $row2['name']; ?></span><br>
											<input type="hidden" id="authemail" name="" value="<?= $authMail; ?>">
											<input  type="hidden" id="useremail" name="" value="<?= $frndEmail; ?>">
											<button class="conBtn">
												Message
											</button>
										</td>
									</tr>
								<?php } ?>
								</table>
				            </div>
						</div>

	            </div>
    <section>
        <?= br(6); ?>
    </section>
    

<?php include("inc/js.php"); ?>
        
</body>
</html>