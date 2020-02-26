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
<title>About</title>
</head>
<body>
	<?php include("inc/main_menu.php"); ?>
<div  class="abthead">
	<h2>About Us</h2>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="abtText">
				<p>
					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

	
				</p>
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
	});
</script>

        
</body>
</html>