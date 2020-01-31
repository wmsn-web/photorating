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
    <div class="container-set">
            <div class="row">
                <div class="col-md-4">
                    <div class="deskView">
                        <div class="set_menu">
                            <ul>
                                <li id="mSeting">My Settings</li>
                                <li id="chngPass">Change Password</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobView">
                        <div class="set_menu_mob">
                            <ul>
                                <li class="activeUl" id="mSeting1">My Settings</li>
                                <li id="chngPass1">Change Password</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div id="mset">
                        <table class="set_tbl table-striped">
                            <h5>Edit Profile</h5>
                            <tr>
                                <th>Name:</th>
                                <td><?= form_input(array("type"=>"text", "class"=>"form-control", "name"=>"")); ?></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><?= form_input(array("type"=>"text", "class"=>"form-control", "name"=>"")); ?></td>
                            </tr>
                            <tr>
                                <th>Location:</th>
                                <td><select class="form-control" name="">
                                    <option>Select</option>
                                </select></td>
                            </tr>
                            <tr>
                                <th>Age:</th>
                                <td><select  name="">
                                       <option>Select</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Gender:</th>
                                <td>
                                    <input type="radio"  name=""> Male
                                    <input type="radio"  name=""> Female
                                </td>
                            </tr>
                            <tr>
                                <th>About Me:</th>
                                <td><textarea rows="3" class="form-control" name=""></textarea></td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td><button class="btn btn-danger">Save</button>
                            </tr>
                        </table>
                        </div>
                        <div  id="chngp">
                            <table class="set_tbl table-striped">
                                <h5>Change Password</h5>
                                <tr>
                                    <th>Password:</th>
                                    <td><input type="text" class="form-control" name=""></td>
                                </tr>
                                <tr>
                                    <th>Confirm Password:</th>
                                    <td><input type="text" class="form-control" name=""></td>
                                </tr>
                                <tr>
                                <th>&nbsp;</th>
                                <td><button class="btn btn-danger">Save</button>
                            </tr>
                            </table>
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