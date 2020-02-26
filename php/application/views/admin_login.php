<!DOCTYPE html> 
<html lang="en">
<?php include("inc/admin_layout.php"); ?>
  <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="admin_assets/images/logo1.png">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <?php if($feedback = $this->session->flashdata("feedback")){ ?>
                	<span class="text-danger"><?= $feedback; ?></span>
                <?php } ?>
                <form class="pt-3" action="AdminLogin/loginAdmin" method="post">
                  <div class="form-group">
                    <input type="text" name="adminUser" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" required="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="adminPass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required="">
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

</html>