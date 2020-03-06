<!DOCTYPE html> 
<html lang="en"> 

<?php include("inc/admin_layout.php"); ?>
<link rel="stylesheet" href="admin_assets/vendors/jquery-bar-rating/css-stars.css">
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
              <h3 class="page-title"> Profile </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      
                      <div class="col-lg-12">
                        
                        <div class="mt-4 py-2 border-top border-bottom">
                          <ul class="nav profile-navbar">
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <i class="mdi mdi-image"></i> Photos </a>
                            </li>
                            
                          </ul>
                        </div>
                        <div class="profile-feed">
                          <?php foreach($getgal as $getGals){

                          $galSts = $getGals->admin_appr;
                          if($galSts==0)
                            {
                              $apprTxt = "Approve";
                              $attr = "";
                            }
                            else
                            {
                              $apprTxt = "Approved";
                              $attr = "disabled='disabled'";
                            }

                           ?>
                            <div class="d-flex align-items-start profile-feed-item">
                              <div class="ml-3">
                                <img src="uploads/gallery/<?= $getGals->image; ?>" alt="sample" class="rounded lw-100" />
                                <p class="small text-muted mt-2 mb-0">
                                  <span>
                                    </span>
                                  
                                </p>
                              </div>
                              <div class="ml-4">
                                <button onclick="location.href='ApprovePhotos/photoAppr?galid=<?= $getGals->id; ?>'" <?= $attr; ?> class="btn btn-gradient-primary btn-block"><?= $apprTxt; ?></button>
                                <button onclick="location.href='ApprovePhotos/deleteImage?galid=<?= $getGals->id; ?> ?>'" class="btn btn-gradient-danger btn-block">Delete</button>
                              </div>
                            </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
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
    <script src="admin_assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  </body>

</html>