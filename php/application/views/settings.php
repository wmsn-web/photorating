
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
<title>Settings</title>
</head>
<body>
	<?php include("inc/main_menu.php"); ?>
    <div class="container-set">
            <div class="row">
                <?php
                 if($feedback = $this->session->flashdata("feedback")){ ?>
                    <?php
                    $statuss = $this->session->flashdata("status");

                        if($statuss =="success"){
                           $class = 'class="alert alert-success"';
                         }else{
                            $class = 'class="alert alert-danger"';
                         }
                    ?>
                 <div class="col-md-12">   
                     <div <?= $class ?>>
                         <?= $feedback; ?>
                     </div>
                 </div>

               <?php  }
                ?>
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
                    <?php
                        $mane =$getDtlsd->name;
                        $loc = $getDtlsd->country;
                        if($mane=="" || $loc==""){
                            $readonly = "nnreadonly";
                            $disp = "display:none";
                            $disp2 = "display:block";
                            
                        }else{
                            $readonly = "readonly";
                            $disp = "display:block";
                            $disp2 = "display:none";
                            
                        }
                    ?>
                    
                    <div id="mset">
                        <table class="set_tbl table-striped">
                            <?= form_open_multipart('settings/addprofile'); ?>
                            <input type="hidden" name="act" value="<?= $getDtlsd->activation; ?>" >
                            <h5>Edit Profile</h5>
                            <tr>
                                <th>Name:</th>
                                <td><?= form_input(array("type"=>"text", "class"=>"form-control", "name"=>"name", "value"=>$getDtlsd->name, "required"=>"required","$readonly"=>"readonly")); ?></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><?= form_input(array("type"=>"text", "class"=>"form-control", "name"=>"email", "value"=>$getDtlsd->email, "readonly"=>"readonly")); ?></td>
                            </tr>
                            <tr>
                                <th>Location:</th>
                                <td>
                                    <div style="<?= $disp; ?>">
                                    <?= form_input(array("type"=>"text", "class"=>"form-control", "name"=>"", "value"=>$getDtlsd->country, "readonly"=>"readonly")); ?>
                                    </div>
                                    <div style="<?= $disp2; ?>">
                                        <select class="form-control" name="country" required="required">
                                            <option value="<?= $getDtlsd->country; ?>"><?= $getDtlsd->country; ?></option>
                                        <option>Select</option>
                                            <?php foreach($cntr as $cnt){ ?>
                                                <option value="<?= $cnt['country_name']."-".$cnt['code']; ?>"><?= $cnt['country_name']."-".$cnt['code']; ?></option>
                                              <?php } ?>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Date of Birth:</th>
                                <td>
                                    <input type="date" name="dob" value="<?= $getDtlsd->dob; ?>">
                                </td>
                            </tr>
                            <?php
                            $chkMl = "";
                                $chkFml = "";
                             $gender = $getDtlsd->gender;
                             if($gender=="Male"){
                                $chkMl = "checked";
                                $chkFml = "";
                            }
                                if($gender=="Female"){
                                $chkMl = "";
                                $chkFml = "checked";
                             }
                             if($gender==""){
                                $chkMl = "";
                                $chkFml = "";
                             }
                            ?>
                            <tr>
                                <th>Gender:</th>
                                <td>
                                    <input type="radio" <?= $chkMl; ?> value="Male"  name="gender" > Male
                                    <input type="radio" <?= $chkFml; ?> value="Female"  name="gender" > Female
                                </td>
                            </tr>
                            <tr>
                                <th>About Me:</th>
                                <td><span id="abtMsg"></span>
                                    <textarea id="abtme" rows="3" class="form-control" name="about"><?= $getDtlsd->about; ?></textarea>
                                  <input type="hidden" name="hide_img" value="<?= $getDtlsd->image; ?>" >
                                </td>

                            </tr>
                        <?php if($getDtlsd->image==""){ ?>
                            <tr>
                                <th>Profile Picture:</th>
                                <td>

                                    <input type="file" class="form-control-file" name="pro_img" required="required" />
                                </td>
                            </tr>
                        <?php } ?>
                            <tr>
                                <th>&nbsp;</th>
                                <td><button id="stngBtn" class="btn btn-danger">Save</button></td>
                            </tr>
                        </form>
                        </table>
                        </div>
                        <div  id="chngp">
                            <table class="set_tbl table-striped">
                                <?= form_open("settings/changePass"); ?>
                                <input type="hidden" name="email" value="<?= $getDtlsd->email ?>">
                                <h5>Change Password</h5>
                                <tr>
                                    <th>Password:</th>
                                    <td>
                                        <?= form_input(array("type"=>"password", "id"=>"pss", "class"=>"form-control", "name"=>"psw")); ?> 
                                    </td>
                                </tr>
                                <tr>
                                    <th>Confirm Password:</th>
                                    <td>
                                        <?= form_input(array("type"=>"password","id"=>"cPss", "class"=>"form-control", "name"=>"password")); ?> 
                                        <span id="vldMsg"></span>
                                    </td>
                                </tr>
                                <tr>
                                <th>&nbsp;</th>
                                <td><button id="chPsBtn" class="btn btn-danger">Save</button>
                            </tr>
                        </form>
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