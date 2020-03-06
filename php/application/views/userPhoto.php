
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

 // Delete 

 $('.delt').click(function(){
   var el = this;
   var id = this.id;
   var splitid = id.split("_");

   // Delete id
   var deleteid = splitid[1];

   //niceAlert
   

     

   swal({
  title: "Are you sure?",
  text: "Once deleted, you will lose your Image and reviews!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

  	$.ajax({
     url: 'myphoto/remove',
     type: 'POST',
     data: { id:deleteid },
     success: function(response){



       if(response == 1){
       	swal("Your Photo has been deleted!", {
      icon: "success",
    });
       	
	 // Remove row from HTML Table
	 //$("button").closest('img').css('background','tomato');
	 //$("button").closest('img').fadeOut(800,function(){
	    //$("img").remove();
	 //});
	 var imageid= "emg_"+deleteid;
       	$("#"+imageid).remove();
      }else{
	 alert(response);
      }

    }
   });
  	
    
  } else {
    swal("Your Photo  is safe!",{
    	icon: "success",
    });
  }
});
 
   // AJAX Request
 

 });

});
</script>
<title>My Photos</title>
</head>
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
								<li><a<?=($this->uri->segment(1) == 'myprofile' ? ' class="actv"' : '');?> href="userProfile">Profile</a></li>
								<li><a<?=($this->uri->segment(1) == 'Userphoto' ? ' class="actv"' : '');?> href="Userphoto">Photos</a></li>
								
							</ul>
						</div>
					</div>
					<div class="mobView">
						<div class="set_menu_mob">
							<ul>
                                <li id="my_photo" class="activeUl">My Photos</li>
                                <li id="my_review">My reviews</li>
                            </ul>
						</div>
				    </div>
			    </div>
				<div class="col-md-8">
					<h5>Photos</h5>
					
					<div class="myLocation">
						
						<section id="photos">
							<?php
                                 
							 foreach ($allImg as $allImgs) { ?>
								
							
		                    
		                    <div class="cont">
	 		<?php echo img(array("class"=>"imgg", "id"=>"emg_$allImgs->id", "src"=>"uploads/gallery/$allImgs->image",  "alt"=>"gallery")); ?>
		 	<br>
	        <div class="middle">
	        	<div style="margin-top: 45%" align="center">
	        		<?= br(4); ?>
	        		 		
	        	</div>
	        </div>        
	    </div>
	
		                    <?php } ?>
                        </section>
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