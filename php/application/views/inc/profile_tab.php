<div class="wow bounceInRight" data-wow-duration="0.9s" id="prof-sidebar-wrapper">
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
	            			    <?php if($this->session->userdata('userEmail')){
                                      //$authUser = $imgPro->email;

	            			     ?>
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
                            <?php } }else{ echo "<a href='signin'>Login to rate this Photo</a>"; } ?>
	            			</div>
	            		</div>
            	    </div>
               </div>
            </div> <!-- /#sidebar-wrapper -->