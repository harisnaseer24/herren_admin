<?php 

session_start();
$date= date('Y-m-d');
if(!isset($_SESSION['isAdmin'])){
  header("location: ./pages/samples/login.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<?php include("./partials/header.php")?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    
    <?php include("./partials/_navbar.php")?>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php include("./partials/themesetting.php")?>
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include("./partials/_sidebar.php")?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <!--  add category form start -->
            <div class="row">
         
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add a new Category</h4>
                  <p class="card-description">
                    add new categroy to the herren
                  </p>
                  <form class="forms-sample" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="category_name">Category Name</label>
                      <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name">
                    </div>
                    <div class="form-group">
                      <label for="category_name">Category description</label>
                      <input type="text" class="form-control" id="category_description" name="category_description" placeholder="Category description">
                    </div>
                   
                    
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="category_image" id="category_image"class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" value="">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" onclick="document.getElementById('category_image').click()" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2">Add Category</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
            <!--  add category form end -->

          
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

