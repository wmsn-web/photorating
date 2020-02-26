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
	            			    	   <h3 align="center"> You have rated this picture</h3>
	            			  <?php }  else{  ?>
	            			  	
	            			  	<div id="rrtt">
	            			  		<form action="home/rateStar" method="post">
	            			    <fieldset class="rating">
	            			    	
	            			    	
    			    	<h5>Please Rate this Photo</h5>
									<input type="radio" id="star10" name="rate_star" value="10" />
									<label class="full" for="star10" ></label>
									<input type="radio" id="star9" name="rate_star" value="9" />
									<label class="full" for="star9" ></label>
									<input type="radio" id="star8" name="rate_star" value="8" />
									<label class="full" for="star8"></label>
									<input type="radio" id="star7" name="rate_star" value="7" />
									<label class="full" for="star7" ></label>
									<input type="radio" id="star6" name="rate_star" value="6" />
									<label class="full" for="star6" ></label>
									<input type="radio" id="star5" name="rate_star" value="5" />
									<label class="full" for="star5" ></label>
									<input type="radio" id="star4" name="rate_star" value="4" />
									<label class="full" for="star4" ></label>
									<input type="radio" id="star3" name="rate_star" value="3" />
									<label class="full" for="star3" ></label>
									<input type="radio" id="star2" name="rate_star" value="2" />
									<label class="full" for="star2" ></label>
									<input type="radio" id="star1"  />
									<label class="full" for="star1" title="Sucks big time - 1 star"></label>
								</fieldset>
		            			    <?php if($this->session->userdata('userEmail')){ ?>
		            			    <input type="hidden" id="from"  name="from_user" value="<?= $imgPro->email ?>">

		            			    <input type="hidden" id="user"  name="main_user" value="<?= $profDtls["email"]; ?>">
		            			    <input type="hidden" id="imgid"  name="imgid" value="<?= $_GET['uid']; ?>">
		            			    <span id="mssg" class="text-danger"></span>
		            			    <div align="center">
		            			    <button class="trBtn">Rate Now</button>
		            			</form>
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
