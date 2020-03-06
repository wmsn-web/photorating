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

<title>Signin</title>
</head>
<body>
	<?php include("inc/forgot_menu.php"); ?>
	

</div>
<div class="mainGal">
	<section>
		<div class="row">
			<div class="col-md-6">
				<img src="assets/images/forgt.png" class="img-responsive" />
			</div>
		</div>
	</section>
</div>
 

<section class="bottom-footer">
	 	
<?php include("inc/modal.php"); ?>
<?php include("inc/js.php"); ?>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
</body>
</html>