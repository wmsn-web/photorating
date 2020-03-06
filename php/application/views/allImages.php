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
            <div class="row mb-4">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Colcade Grid</h4>
                    <p class="page-description">Colcade works by moving item elements into column elements.</p>
                    <div class="grid">
                      <div class="grid-col grid-col--1"></div>
                      <div class="grid-col grid-col--2"></div>
                      <div class="grid-col grid-col--3"></div>
                      <div class="grid-col grid-col--4"></div>
                      <?php 
                      foreach($gts as $gt)
                      { ?>
                            <div class="grid-item"><img src="uploads/gallery/<?= $gt->image; ?>" class="img-responsive"></div>
                      <?php } ?>
                      
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
    <script src="admin_assets/vendors/colcade/colcade.js"></script>
    <script src="admin_assets/js/tight-grid.js"></script>
    <script src="admin_assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  </body>

</html>