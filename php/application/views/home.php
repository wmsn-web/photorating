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
            <div id="prof-sidebar-wrapper2">
            	<div id="profCls1" class="cls">
            		<?php echo img(array("src"=>"assets/images/closebtn.png","class"=>"clsBtn")); ?>
            		<!---img class="clsBtn" src="assets/images/closebtn.png" alt="close"-->
            	</div>
            	<div class="cls">
            		
            	</div>

            	<div class="prof-sideMenu">
            		<div class="container-fluid">
		            	<div class="row">
	            			<div id="profImg" class="col-md-6">
	            				<?php echo img(array("src"=>"assets/images/11.png","class"=>"img-responsive","alt"=>"profile")); ?>
	            			   <!--img class="img-responsive" src="assets/images/11.png" alt="profile"--->
	            			   </div>
	            			<div id="proDtls" class="col-md-6 prof-dtls">
	            				<h2>Nikita Kundu</h2>
	            				<div class="abtMe">
	            				   <h3>About Me</h3>
	            				   <p>"I'm a model, I love to spent time with my friends. Love to travel."</p>
	            			    </div>
	            			    <ul class="myIcon">
                                   <li><?php echo img('assets/images/icons/globe.png'); ?> India</li>
                                   <li><?php echo img("assets/images/icons/zender.png"); ?> Female</li>
                                   <li><?php echo img("assets/images/icons/star2.png"); ?> 9.8</li>
	            			    </ul>
	            			    <div class="myRate">
		            			    <h4>My Rating:</h4>
		            			    <input type="radio" class="rdo" name="rate_star" id="one" value="1">
		            			    <label class="lblStar" for="one">1</label>
		            			    <input type="radio" class="rdo" name="rate_star" id="two" value="2">
		            			    <label class="lblStar" for="two">2</label>
		            			    <input type="radio" class="rdo" name="rate_star" id="three" value="3">
		            			    <label class="lblStar" for="three">3</label>
		            			    <input type="radio" class="rdo" name="rate_star" id="four" value="4">
		            			    <label class="lblStar" for="four">4</label>
		            			    <input type="radio" class="rdo" name="rate_star" id="five" value="5">
		            			    <label class="lblStar" for="five">5</label>
		            			    <input type="radio" class="rdo" name="rate_star" id="six" value="6">
		            			    <label class="lblStar" for="six">6</label>
		            			    <input type="radio" class="rdo" name="rate_star" id="seven" value="7">
		            			    <label class="lblStar" for="seven">7</label>
		            			    <input type="radio" class="rdo" name="rate_star" id="eight" value="8">
		            			    <label class="lblStar" for="eight">8</label>
		            			    <input type="radio" class="rdo" name="rate_star" id="nine" value="9">
		            			    <label class="lblStar" for="nine">9</label>
		            			    <input type="radio" class="rdo" name="rate_star" id="ten" value="10">
		            			    <label class="lblStar" for="ten">10</label>
		            			    
		            			    <button class="trBtn">Rate Now</button>
                                </div>
	            			</div>
	            		</div>
            	    </div>
               </div>
            </div> <!-- /#sidebar-wrapper -->


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
	 	<div class="cont">
		 	<img class="imgg" src="assets/images/1.png"  alt="gallery"><br>
	        <div class="middle">
	        	<div class="text">
	        		<table class="tlb">
	        			<tr>
	        				<th>Nikita Kundu</th>
	        				<td><img src="assets/images/icons/comp1.png" /> 22</td>
	        			</tr>
	        		</table>
	        		<hr>
	        		<table class="tlb">
	        			<tr>
	        				<th><img src="assets/images/icons/star.png" /> 20</th>
	        				<td><button id="rt1" class="primary">Rate Now</button></td>
	        			</tr>
	        		</table>        		
	        	</div>
	        </div>        
	    </div>
	    <div class="cont">
	 	<img class="imgg" src="assets/images/2.png" alt="gallery"><br>
	 	<div class="middle">
        	<div class="text">
        		<table class="tlb">
        			<tr>
        				<th>Nikita Kundu</th>
        				<td><img src="assets/images/icons/comp1.png" /> 22</td>
        			</tr>
        		</table>
        		<hr>
        		<table class="tlb">
        			<tr>
        				<th><img src="assets/images/icons/star.png" /> 20</th>
        				<td><button class="primary">Rate Now</button></td>
        			</tr>
        		</table>        		
        	</div>
        </div>     
	    </div>
	    <div class="cont">
	 	<img class="imgg" src="assets/images/3.png" alt="gallery"><br>
	 	<div class="middle">
        	<div class="text">
        		<table class="tlb">
        			<tr>
        				<th>Nikita Kundu</th>
        				<td><img src="assets/images/icons/comp1.png" /> 22</td>
        			</tr>
        		</table>
        		<hr>
        		<table class="tlb">
        			<tr>
        				<th><img src="assets/images/icons/star.png" /> 20</th>
        				<td><button  id="rt2" class="primary">Rate Now</button></td>
        			</tr>
        		</table>        		
        	</div>
        </div>     
	    </div>
	    <div class="cont">
	 	<img class="imgg" src="assets/images/4.png" alt="gallery"><br>
	 	<div class="middle">
        	<div class="text">
        		<table class="tlb">
        			<tr>
        				<th>Nikita Kundu</th>
        				<td><img src="assets/images/icons/comp1.png" /> 22</td>
        			</tr>
        		</table>
        		<hr>
        		<table class="tlb">
        			<tr>
        				<th><img src="assets/images/icons/star.png" /> 20</th>
        				<td><button class="primary">Rate Now</button></td>
        			</tr>
        		</table>        		
        	</div>
        </div>     
	    </div>
	    <div class="cont">
	 	<img class="imgg" src="assets/images/5.png" alt="gallery"><br>
	 	<div class="middle">
        	<div class="text">
        		<table class="tlb">
        			<tr>
        				<th>Nikita Kundu</th>
        				<td><img src="assets/images/icons/comp1.png" /> 22</td>
        			</tr>
        		</table>
        		<hr>
        		<table class="tlb">
        			<tr>
        				<th><img src="assets/images/icons/star.png" /> 20</th>
        				<td><button class="primary">Rate Now</button></td>
        			</tr>
        		</table>        		
        	</div>
        </div>     
	    </div>
	    <div class="cont">
	 	<img class="imgg" src="assets/images/6.png" alt="gallery"><br>
	 	<div class="middle">
        	<div class="text">
        		<table class="tlb">
        			<tr>
        				<th>Nikita Kundu</th>
        				<td><img src="assets/images/icons/comp1.png" /> 22</td>
        			</tr>
        		</table>
        		<hr>
        		<table class="tlb">
        			<tr>
        				<th><img src="assets/images/icons/star.png" /> 20</th>
        				<td><button class="primary">Rate Now</button></td>
        			</tr>
        		</table>        		
        	</div>
        </div>     
	    </div>
	    <div class="cont">
	 	<img class="imgg" src="assets/images/7.png" alt="gallery"><br>
	 	<div class="middle">
        	<div class="text">
        		<table class="tlb">
        			<tr>
        				<th>Nikita Kundu</th>
        				<td><img src="assets/images/icons/comp1.png" /> 22</td>
        			</tr>
        		</table>
        		<hr>
        		<table class="tlb">
        			<tr>
        				<th><img src="assets/images/icons/star.png" /> 20</th>
        				<td><button class="primary">Rate Now</button></td>
        			</tr>
        		</table>        		
        	</div>
        </div>     
	    </div>
	    <div class="cont">
	 	<img class="imgg" src="assets/images/8.png" alt="gallery"><br>
	 	<div class="middle">
        	<div class="text">
        		<table class="tlb">
        			<tr>
        				<th>Nikita Kundu</th>
        				<td><img src="assets/images/icons/comp1.png" /> 22</td>
        			</tr>
        		</table>
        		<hr>
        		<table class="tlb">
        			<tr>
        				<th><img src="assets/images/icons/star.png" /> 20</th>
        				<td><button class="primary">Rate Now</button></td>
        			</tr>
        		</table>        		
        	</div>
        </div>     
	    </div>
	    <div class="cont">
	 	<img class="imgg" src="assets/images/8.png" alt="gallery"><br>
	 	<div class="middle">
        	<div class="text">
        		<table class="tlb">
        			<tr>
        				<th>Nikita Kundu</th>
        				<td><img src="assets/images/icons/comp1.png" /> 22</td>
        			</tr>
        		</table>
        		<hr>
        		<table class="tlb">
        			<tr>
        				<th><img src="assets/images/icons/star.png" /> 20</th>
        				<td><button class="primary">Rate Now</button></td>
        			</tr>
        		</table>        		
        	</div>
        </div>     
	    </div>
	 </section>
	 <ul class="pagination">
  <li><a href="#">1</a></li>
  <li class="active"><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
</div>
<section class="bottom-footer">
	 	<div class="footer">
	 		<div align="center">
	 			All Rights Reserve &copy; PhotoRating | Developed by WMSN
	 		</div>
	 	</div>
	 </section>

<?php include("inc/js.php"); ?>
        
</body>
</html>