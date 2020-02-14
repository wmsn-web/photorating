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
	            					<h2><a class="link color-pri" href="userProfile?user=<?= $profDtls["email"]; ?>"><?= $profDtls["name"]; ?></a></h2>
	            				
	            			   
	            			    <?php }else{ ?>
	            			    	<h2><?= $profDtls["name"]; ?></h2>
                                     
	            				<?php } ?>
	            				<div class="abtMe">
	            				   <h3>About Me</h3>
	            				   <p>"<?= substr($profDtls["about"],0,100) ?>...."</p>
	            			    </div>
	            			    <?php $flag = "http://www.geonames.org/flags/x/".strtolower($profDtls["country"]).".gif";
	            			    $gender = $profDtls["gender"];
						if($gender=="Male"){
							$genderIcon = "<i class='fa fa-male text-danger fa-2x'></i>";
						}else{
							$genderIcon = "<i class='fa fa-female  text-danger fa-2x'></i>";
						}


	            			     ?>
	            			    <ul class="myIcon">
                                   <li><?php echo img($flag); ?> <?= $profDtls["country"]; ?></li>
                                   <li><?= $genderIcon; ?> <?= $profDtls["gender"]; ?></li>
                                   <li><i class="fa fa-star text-danger rd fa-2x"></i> <?= $profDtls["rates"]; ?></li>
	            			    </ul>
	            			    <?php if($this->session->userdata('userEmail')){
                                      //$authUser = $imgPro->email;
                                      
	            			     ?>

	            			    <?php  if($getRevs==1){ ?>
	            			    	   <h3 align="center"> Thank you for Rate this Photo</h3>
	            			  <?php }  else{  ?>
	            			  	<div align="center"><img align="center" id="gifPic" src="assets/images/succs.gif"></div>
	            			  	<div id="rrtt">
	            			    <fieldset class="rating">
	            			    	
	            			    	
    			    	<h5>Please Rate this Photo</h5>
									<input type="radio" id="star5" name="rate_star" value="5" />
									<label class="full" for="star5" title="Awesome - 5 stars"></label>
									<input type="radio" id="star4" name="rate_star" value="4" />
									<label class="full" for="star4" title="Pretty good - 4 stars"></label>
									<input type="radio" id="star3" name="rate_star" value="3" />
									<label class="full" for="star3" title="Meh - 3 stars"></label>
									<input type="radio" id="star2" name="rate_star" value="2" />
									<label class="full" for="star2" title="Kinda bad - 2 stars"></label>
									<input type="radio" id="star1" name="rate_star" value="1" />
									<label class="full" for="star1" title="Sucks big time - 1 star"></label>
								</fieldset>
		            			    <?php if($this->session->userdata('userEmail')){ ?>
		            			    <input type="hidden" id="from"  name="" value="<?= $imgPro->email ?>">

		            			    <input type="hidden" id="user"  name="" value="<?= $profDtls["email"]; ?>">
		            			    <input type="hidden" id="imgid"  name="" value="<?= $_GET['uid']; ?>">
		            			    <span id="mssg" class="text-danger"></span>
		            			    <div align="center">
		            			    <button class="trBtn">Rate Now</button>
		            			</div>
		            			</div>
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
