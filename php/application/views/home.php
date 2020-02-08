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
	


            <div id="prof-wrapper" class="toggleddd">
            <!-- Sidebar -->
            <?php if(isset($_GET['user_email'])){ ?>
            	<?php $proImg = $getGal->image;
            	list($width, $height, $type, $attr) = getimagesize("uploads/gallery/$proImg"); 
            	 $wdth =$width."<br>";
            	 $hght =$height;
            	if($wdth>$hght){
            		
            		$clss = 'class="col-md-10"';
            		$clss2 = 'class="col-md-10 prof-dtls"';
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
	            				<?php echo img(array("src"=>"uploads/gallery/$proImg","class"=>"img-responsive","alt"=>"profile")); ?>
	            			   <!--img class="img-responsive" src="assets/images/11.png" alt="profile"--->
	            			   </div>
	            			<div id="proDtls" <?= $clss2; ?>>
	            				<?php if($this->session->userdata('userEmail')){ ?>
	            					<h2><a class="link color-pri" href="userProfile?user=<?= $profDtls->email; ?>"><?= $profDtls->name; ?></a></h2>
	            				
	            			    <?php }else{ ?>
	            			    	<h2><?= $profDtls->name; ?></h2>
                                     
	            				<?php } ?>
	            				<div class="abtMe">
	            				   <h3>About Me</h3>
	            				   <p>"<?= substr($profDtls->about,0,100) ?>...."</p>
	            			    </div>
	            			    <ul class="myIcon">
                                   <li><?php echo img('assets/images/icons/globe.png'); ?> <?= $profDtls->country; ?></li>
                                   <li><?php echo img("assets/images/icons/zender.png"); ?> <?= $profDtls->gender; ?></li>
                                   <li><?php echo img("assets/images/icons/star2.png"); ?> 9.8</li>
	            			    </ul>
	            			    <?php if($this->session->userdata('userEmail')){ ?>
	            			    <?php  if($getRevs==1){ ?>
	            			    	   You have Already Rate this Photo
	            			  <?php }  else{  ?>
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
		            			    <?php if($this->session->userdata('userEmail')){ ?>
		            			    <input type="hidden" id="from"  name="" value="<?= $imgPro->email ?>">

		            			    <input type="hidden" id="user"  name="" value="<?= $profDtls->email; ?>">
		            			    <input type="hidden" id="imgid"  name="" value="<?= $_GET['uid']; ?>">
		            			    <span id="mssg" class="text-danger"></span>
		            			    <button class="trBtn">Rate Now</button>
		            			<?php  }else{

		            				echo "<a href='signin'>Login to rate this Photo</a>";
		            			} ?>
                                </div>
                            <?php } } ?>
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
                 $images = $galDtl->image;
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
	        	</div>
	        </div>        
	    </div>
	    
	    <?php } ?>
	    
	    
	    
	    
	    

	    
	 </section>
	 
</div>
<section class="bottom-footer">
	 	<div class="footer">
	 		<div align="center">
	 			All Rights Reserve &copy; PhotoRating | Developed by WMSN
	 		</div>
	 	</div>
	 </section>
<?php include("inc/modal.php"); ?>
<?php include("inc/js.php"); ?>

        
</body>
</html>