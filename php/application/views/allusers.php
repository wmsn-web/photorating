<!DOCTYPE html> 
<html lang="en">
<link rel="stylesheet" href="admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<?php include("inc/admin_layout.php"); ?>
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
                  <i class="mdi mdi-account-multiple"></i>
                </span> All Users </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Data table</h4>
                <div class="row">
                  <div class="col-12">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>Order #</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Country</th>
                          <th>DOB</th>
                          <th>Gender</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php foreach($userDtls as $userDtl) {
                          	$status = $userDtl->admin_appr;
                          	if($status==0)
                          	{
                          		$badgeTxt = "Inactive";
                          		$badgeCls ="badge-danger";
                          	}
                          	else
                          	{
                          		$badgeTxt = "Active";
                          		$badgeCls ="badge-success";
                          	}
                      	 ?>
	                        <tr>
	                          <td>1</td>
	                          <td><?= $userDtl->name; ?></td>
	                          <td><?= $userDtl->email; ?></td>
	                          <td><?= $userDtl->country; ?></td>
	                          <td><?= $userDtl->dob; ?></td>
	                          <td><?= $userDtl->gender; ?></td>
	                          <td>
	                            <label class="badge <?= $badgeCls; ?> "><?= $badgeTxt; ?></label>
	                          </td>
	                          <td>
	                            <button onclick="location.href='viewUser?id=<?= $userDtl->id; ?>'" class="btn btn-outline-primary">View</button>
	                          </td>
	                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
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
  </body>

</html>