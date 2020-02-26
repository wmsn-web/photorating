<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <div class="container">  
                <?= form_open("home/login"); ?>
                <div class="row">
                  <div class="form-group col-md-8">
                      <label>Email Address</label>
                      <?= form_input(array("type"=>"email", "class"=>"form-control", "name"=>"email")); ?>
                  </div>
                  <div class="form-group col-md-8">
                      <label>Password</label>
                      <?= form_input(array("type"=>"password", "class"=>"form-control", "name"=>"password")); ?>
                  </div>
                  <div class="form-group col-md-8">
                      <button class="btn btn-danger">Login</button><br>
                      <a href="">Forgot Password?</a>
                  </div>
              </div>
              </form>
          </div>
        </div>
        <div class="modal-footer">
            <div align="center">
                <a href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">New User? Signup</a>
            </div>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">SignUp</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <div class="container">  
              <div class="row">
                  <div class="form-group col-md-12">
                      <label>Full Name</label>
                      <input type="text" class="form-control" name="">
                  </div>
                  <div class="form-group col-md-12">
                  <label>Email Address</label>
                      <input type="text" class="form-control" name="">
                  </div>
                  <div class="form-group col-md-12">
                  <label>Country</label>
                      <input type="text" class="form-control" name="">
                  </div>
                  <div class="form-group col-md-12">
                   <label>Age</label>
                      <input type="text" class="form-control" name="">
                  </div>
                  <div class="form-group col-md-12">
                   <label>Gender</label>
                      <input type="text" class="form-control" name="">
                  </div>
                  <div class="form-group col-md-12">
                      <label>Password</label>
                      <input type="text" class="form-control" name="">
                  </div>
                  <div class="form-group col-md-12">
                      <button class="btn btn-danger">Signups</button><br>
                      
                  </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
            <div align="center">
                <a href="javascript:void(0)" data-dismiss="modal"  data-toggle="modal" data-target="#myModal">Already Have Account?</a>
            </div>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>