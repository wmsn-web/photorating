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
<title>Reset Password</title>
</head>
<body>
	<?php include("inc/main_menu.php"); ?>
<div  class="abthead">
	
</div>
<div class="container">
	<div class="row">
  <div class="col-md-4 offset-md-4">
  	 <div class="pgLogin">
      <?php if($feedback = $this->session->flashdata("feedback")){ ?>
        <span class="text-danger"><?= $feedback; ?></span>
      <?php } ?>
  	 	<h3>Reset Password?</h3>
  	 	<form action="resetPass/changePass" method="post">
  	 		<div class="form-group">
  	 			<label>Enter New Password</label>
  	 			<input type="password" id="rpass" name="password" class="form-control" required="required">
  	 		</div>
  	 		<div class="form-group">
  	 			<label>Confirm Password</label>
  	 			<input type="password" id="rconpass" name="con" class="form-control" required="required">
  	 			<input type="hidden" name="email"  value="<?= $user; ?>">
  	 			<span id="rmsg"></span>
  	 		</div>
  	 		
  	 		<div class="form-group">
  	 			<div align="center">
  	 				<button id="sv" class="btn-dangers">Save</button>
  	 			</div>
  	 		</div>
  	 	</form>
  	 </div>
  </div>
    </div>
</div>


	<?php include("inc/modal.php"); ?>
<?php include("inc/js.php"); ?>

<script type="text/javascript">
	$(document).ready(function(){
	$("#dCls").click(function(){
		$(".bottom_rating").removeClass("slideInRight");
		$(".bottom_rating").addClass("slideOutRight");
	});
      $("#rpass").keyup(function(){
      	var rpas = $("#rpass").val();
      	var lengths = rpas.length;
        var lengthValidate = 8;
        if(lengths < lengthValidate){
        	$("#rmsg").html("Minimun 8 Characters Password required!");
        	$("#rmsg").addClass("text-danger");
        	$("#sv").attr('disabled','disabled');
        	$("#rconpass").attr("readonly","readonly");
        }else{
        	$("#rmsg").html("Password Accepted. Please Confirm Password below.");
        	$("#rmsg").removeClass("text-danger");
        	$("#rmsg").addClass("text-success");
        	$("#sv").removeAttr('disabled','disabled');
        	$("#rconpass").removeAttr("readonly","readonly");
        }
      });
      $("#rconpass").keyup(function(){
      	var rpas = $("#rpass").val();
      	var rconpas = $("#rconpass").val();
      	if(rconpas==rpas){
      		$("#rmsg").html("Password Accepted.");
        	$("#rmsg").removeClass("text-danger");
        	$("#rmsg").addClass("text-success");
        	$("#sv").removeAttr('disabled','disabled');
      	}else{
      		$("#rmsg").html("Password Does not match!");
        	$("#rmsg").addClass("text-danger");
        	$("#rmsg").removeClass("text-success");
        	$("#sv").attr('disabled','disabled');
      	}
      });
	});
</script>

        
</body>
</html>