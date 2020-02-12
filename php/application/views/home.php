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
<title>Home</title>
</head>
<body>
	<?php include("inc/main_menu.php"); ?>
	


<?php if(isset($_GET['user_email'])){ ?>
            	<?php $proImg = $getGal->image;
            	list($width, $height, $type, $attr) = getimagesize("uploads/gallery/$proImg"); 
            	 $wdth =$width."<br>";
            	 $hght =$height;
            	if($wdth>$hght){
            		
            		$clss = 'class="col-md-6"';
            		$clss2 = 'class="col-md-6 prof-dtls"';
            		$width_div = "style='width:980px !important'";
            	}else{
            		$clss = 'class="col-md-6"';
            		$clss2 = 'class="col-md-6 prof-dtls"';
            		$width_div = "style='width:730px !important'";
            	}

                 
            	 ?>
            <div id="prof-wrapper" class="toggleddd">
            <!-- Sidebar -->

            <?php include("inc/profile_tab.php"); ?>
<?php } ?>

</div>
 
<div class="mainGal">
	<div align="center">
		<div class="filters">
			<button class="fltrBtn">Female</button>
			<button class="fltrBtn">Female</button>
			
		</div>
	</div>
	<div class="container-fluidx">
	  <section id="photos">

        <?php
             foreach ($galDtls as $galDtl) {
                 $images = $galDtl['image'];
                 if($images==""){
                 	$image = "default.png";
                 }else{
                 	$image = $images;
                 }

              ?>

	 	<div  class="cont">
	 		<?php echo img(array("class"=>"imgg", "src"=>"uploads/gallery/$image",  "alt"=>"gallery")); ?>
		 	<br>
	        <div class="middle">
	        	<div class="text">
	        		<div class="nameTxt" align="center">
	        			<span><?= $galDtl["name"]; ?></span>
	        	    </div>
	        	    <table class="tlbss">
	        			<tr>
	        				<th><img width="25" src="<?=$galDtl["flag"]; ?>"> <?= $galDtl["country"]; ?></th>
	        				<td><?= $galDtl["genderIcon"]; ?> <?= $galDtl["age"]; ?></td>
	        			</tr>
	        		</table>
	        		<div align="center">
	        		   <button Onclick="location.href='?uid=<?= $galDtl["id"]; ?>&user_email=<?= $galDtl["user_email"]; ?>'" class="rateBtn">Rate</button>
	        	    </div>

	        		<?php /*
	        		<table class="tlb">
	        			<tr>
	        				<th><?= $galDtl->name; ?></th>
	        				<td><?php echo img("assets/images/icons/comp1.png"); ?> 22</td>
	        			</tr>
	        		</table>
	        		<hr>
	        		<table class="tlb">
	        			<tr>
	        				<th><?php echo img("assets/images/icons/star.png"); ?> 20</th>
	        				<td><button Onclick="location.href='?uid=<?= $galDtl->id; ?>&user_email=<?= $galDtl->user_email; ?>'" class="primary">Rate Now</button></td>
	        			</tr>
	        		</table> 
	        		 */ ?>
	        		<?= br(5); ?>       		
	        	</div>
	        </div>        
	    </div>
	    
	    <?php } ?>
	 </section>
	</div>
	 <section>
	 	<?= br(3); ?>
	 </section>
</div>
<?php if(isset($_GET['user_email'])){ ?>
            	<?php $proImg = $getGal->image;
            	list($width, $height, $type, $attr) = getimagesize("uploads/gallery/$proImg"); 
            	 $wdth =$width."<br>";
            	 $hght =$height;
            	if($wdth>$hght){
            		
            		$clss3 = 'img-responsive';
            		$clss2 = 'class="col-md-10 prof-dtls"';
            	}else{
            		$clss3 = 'img-chng';
            		$clss2 = 'class="col-md-6 prof-dtls"';
            	}

                 
            	 ?>
            	 <?php
				      $country = $profDtls->country;
				      $cd = explode("-",$country);
						$code = @strtolower($cd[1]);
						$flag = "http://www.geonames.org/flags/x/".$code.".gif";
						$gender = $profDtls->gender;
						if($gender=="Male"){
							$genderIcon = "<i class='fa fa-male fa-2x'></i>";
						}else{
							$genderIcon = "<i class='fa fa-female fa-2x'></i>";
						}
				    ?>
<div class="bottom_rating wow slideInRight" data-wow-duration="0.7s">
	<div  class="cls-mob">
            		<?php echo img(array("src"=>"assets/images/closebtn.png","class"=>"clsBtns","id"=>"dCls")); ?>
            		<!---img class="clsBtn" src="assets/images/closebtn.png" alt="close"-->
            	</div>
	<div class="rtBox">
			<div class="row">
			<span class="nameTxt"><?= $profDtls->name; ?></span>

				<div class="col-md-12">
					<div class="immg">
				<?php echo img(array("src"=>"uploads/gallery/$proImg","class"=>$clss3,"alt"=>"profile")); ?>
				    </div>
				    
				    <ul class="myIcon">
                       <li><?php echo img(array("src"=>$flag,"width"=>"40")); ?> <?= $profDtls->country; ?></li>
                       <li><?= $genderIcon; ?> <?= $profDtls->gender; ?></li>
                       <li><i class="fa fa-star rd fa-2x"></i> 9.8</li>
    			    </ul>

    			    <fieldset class="rating">
    			    	<h5>Please Rate this Photo</h5>
									<input type="radio" id="star5" name="rating" value="5" />
									<label class="full" for="star5" title="Awesome - 5 stars"></label>
									<input type="radio" id="star4" name="rating" value="4" />
									<label class="full" for="star4" title="Pretty good - 4 stars"></label>
									<input type="radio" id="star3" name="rating" value="3" />
									<label class="full" for="star3" title="Meh - 3 stars"></label>
									<input type="radio" id="star2" name="rating" value="2" />
									<label class="full" for="star2" title="Kinda bad - 2 stars"></label>
									<input type="radio" id="star1" name="rating" value="1" />
									<label class="full" for="star1" title="Sucks big time - 1 star"></label>
								</fieldset>
				<div align="center">
					<button class="trBtn">Submit</button>
				</div>
			    </div>
		    </div>
	</div>
</div>
<?php } ?>

<?php include("inc/modal.php"); ?>
<?php include("inc/js.php"); ?>

<script type="text/javascript">
	$(document).ready(function(){
	$("#dCls").click(function(){
		$(".bottom_rating").removeClass("slideInRight");
		$(".bottom_rating").addClass("slideOutRight");
	});
	});
</script>

        
</body>
</html>