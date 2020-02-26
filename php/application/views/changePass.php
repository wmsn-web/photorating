<!DOCTYPE html> 
<html lang="en">
<?php include("inc/admin_layout.php"); ?>
<style type="text/css">
	.form-group .inpp{
		position: absolute;
		top: 65px;
		right: 65px;
		cursor: pointer;
	}
	.form-control:focus{outline: none;}
	.form-group .inpp:hover .input-group-text{color: #9b56db}
	#msg{
		font-size: 12px; padding: 6px;
	}
</style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include("inc/admin_top_menu.php"); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <?php include("inc/admin_side_menu.php"); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-lock"></i>
                </span> Change Password </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="d-flex align-items-center auth">
          		<div class="row flex-grow">
            		<div class="col-lg-8 mx-auto">
              			<div class="auth-form-light text-left p-5">
	            			<form class="pt-3" action="changePassword/chpas" method="post">
		                  		<div class="form-group">
		                    		<input type="password" id="pas" name="password" class="form-control"  placeholder="New Password" required="">
		                    		<span class="inpp input-group-append border-left">
                                    	<span class="mdi mdi-eye-off-outline input-group-text"></span>
                                    </span>
		                 	    </div>
		                        <div class="form-group">
		                        	<input type="password" id="conpas" name="conpas" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password" required="">
		                        	<span id="msg"></span>
		                        </div>
		                        <div class="mt-3">
		                         	<button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >Chane Password</button>
		                         </div>
		                        <div class="my-2 d-flex justify-content-between align-items-center">
		                        	<div class="form-check">
		                        		<label class="form-check-label text-muted"></label>
		                        	</div>
		                        	
		                        </div>
	                        </form>
                    </div>
                </div>
            </div>
            
            
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include("inc/admin_footer.php"); ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      
    </div>
    <?php include("inc/admin_js.php"); ?>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$(".inpp").click(function(){
    			$(".input-group-text").css("color","#9b56db");
    			$(".input-group-text").removeClass("mdi-eye-off-outline");
    			$(".input-group-text").addClass("mdi-eye");
    			$(".form-control").removeAttr("type","password");
    			$(".form-control").attr("type","text");
    		});

    		$("#conpas").keyup(function(){
    			var pass = $("#pas").val();
    			var cpass = $("#conpas").val();
    			if(pass==cpass)
    			{
    				$("#msg").html("Password Matched <i class='mdi mdi-checkbox-marked-circle-outline'></i>");
    				$("#msg").css("color","#090");
    				$(".btn-block").removeAttr("disabled","disabled");
    			}
    			else
    			{
    				$("#msg").html("Password does not Matche! <i class='mdi mdi-close-circle-outline'></i>");
    				$("#msg").css("color","#f00");
    				$(".btn-block").attr("disabled","disabled");
    			}
    		});
    	});
    </script>
  </body>

</html>