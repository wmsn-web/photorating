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
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <?php include("inc/layouts.php"); ?>

<title>Signup</title>
</head>
<body>
	<?php include("inc/signup_menu.php"); ?>
	


            <div id="prof-wrapper" class="toggleddd">
            <!-- Sidebar -->
            <?php if(isset($_GET['uid'])){ ?>
            	<?php $proImg = $profDtls->image;
            	list($width, $height, $type, $attr) = getimagesize("assets/images/$proImg"); 
            	 $wdth =$width."<br>";
            	 $hght =$height;
            	if($wdth>$hght){
            		
            		$clss = 'class="col-md-12"';
            		$clss2 = 'class="col-md-12 prof-dtls"';
            	}else{
            		$clss = 'class="col-md-6"';
            		$clss2 = 'class="col-md-6 prof-dtls"';
            	}

                 
            	 ?>
            <div id="prof-sidebar-wrapper">
            	<div Onclick="location.href='<?= base_url(); ?>'"  class="cls">
            		<?php echo img(array("src"=>"assets/images/closebtn.png","class"=>"clsBtn")); ?>
            		<!---img class="clsBtn" src="assets/images/closebtn.png" alt="close"-->
            	</div>
            	<div class="cls">
            		
            	</div>

            	<div class="prof-sideMenu">
            		<div class="container-fluid">
		            	<div class="row">
	            			<div id="profImg" <?= $clss; ?>>
	            				<?php echo img(array("src"=>"assets/images/$proImg","class"=>"img-responsive","alt"=>"profile")); ?>
	            			   <!--img class="img-responsive" src="assets/images/11.png" alt="profile"--->
	            			   </div>
	            			<div id="proDtls" <?= $clss2; ?>>
	            				<h2><?= $profDtls->name; ?></h2>
	            				<div class="abtMe">
	            				   <h3>About Me</h3>
	            				   <p>"<?= $profDtls->about; ?>"</p>
	            			    </div>
	            			    <ul class="myIcon">
                                   <li><?php echo img('assets/images/icons/globe.png'); ?> <?= $profDtls->country; ?></li>
                                   <li><?php echo img("assets/images/icons/zender.png"); ?> <?= $profDtls->gender; ?></li>
                                   <li><?php echo img("assets/images/icons/star2.png"); ?> 9.8</li>
	            			    </ul>
	            			    <div class="myRate">
		            			    <h4>My Rating:</h4>
		            			    <?php echo form_input(array("type"=>"radio", "class"=>"rdo", "name"=>"rate_star", "id"=>"one", "value"=>"1")); ?>
		            			    <!--input type="radio" class="rdo" name="rate_star" id="one" value="1"-->
		            			    <label class="lblStar" for="one">1</label>
		            			    <?php echo form_input(array("type"=>"radio", "class"=>"rdo", "name"=>"rate_star", "id"=>"two", "value"=>"2")); ?>
		            			    
		            			    <label class="lblStar" for="two">2</label>
		            			    <?php echo form_input(array("type"=>"radio", "class"=>"rdo", "name"=>"rate_star", "id"=>"three", "value"=>"3")); ?>
		            			    <label class="lblStar" for="three">3</label>
		            			    <?php echo form_input(array("type"=>"radio", "class"=>"rdo", "name"=>"rate_star", "id"=>"four", "value"=>"4")); ?>
		            			    <label class="lblStar" for="four">4</label>
		            			    <?php echo form_input(array("type"=>"radio", "class"=>"rdo", "name"=>"rate_star", "id"=>"five", "value"=>"5")); ?>
		            			    <label class="lblStar" for="five">5</label>
		            			    <?php echo form_input(array("type"=>"radio", "class"=>"rdo", "name"=>"rate_star", "id"=>"six", "value"=>"6")); ?>
		            			    <label class="lblStar" for="six">6</label>
		            			    <?php echo form_input(array("type"=>"radio", "class"=>"rdo", "name"=>"rate_star", "id"=>"seven", "value"=>"7")); ?>
		            			    <label class="lblStar" for="seven">7</label>
		            			    <?php echo form_input(array("type"=>"radio", "class"=>"rdo", "name"=>"rate_star", "id"=>"eight", "value"=>"8")); ?>
		            			    <label class="lblStar" for="eight">8</label>
		            			    <?php echo form_input(array("type"=>"radio", "class"=>"rdo", "name"=>"rate_star", "id"=>"nine", "value"=>"9")); ?>
		            			    <label class="lblStar" for="nine">9</label>
		            			    <?php echo form_input(array("type"=>"radio", "class"=>"rdo", "name"=>"rate_star", "id"=>"ten", "value"=>"10")); ?>
		            			    <label class="lblStar" for="ten">10</label>
		            			    
		            			    <button class="trBtn">Rate Now</button>
                                </div>
	            			</div>
	            		</div>
            	    </div>
               </div>
            </div> <!-- /#sidebar-wrapper -->
<?php } ?>

</div>
 
<div class="mainGal">
	<div align="center">
		<div class="filters">
			<button class="fltrBtn">Female</button>
			<button class="fltrBtn">Female</button>
			<button class="fltrBtn">Age</button>
		</div>
	</div>
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

	        		<?= br(5); ?>       		
	        	</div>
	        </div>        
	    </div>
	    
	    <?php } ?>
	 </section>
	
</div>
<section class="bottom-footer">
	 	
	 </section>
<?php //include("inc/modal.php"); ?>
<?php include("inc/js.php"); ?>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
</body>
</html>