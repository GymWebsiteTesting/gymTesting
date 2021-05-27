<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/cuba/theme/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Apr 2021 08:32:00 GMT -->
@include('layout/header')

  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('layout/pageHeader')
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('layout/pageSider')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Customer's Main Details </h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">     
                      <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Users</li>                                                  
                    <li class="breadcrumb-item active"> Customer's Main Details</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="edit-profile">
              
                <div>
               <form action="{{route('product1.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                
                <div class="col-xl-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Add Exercise Details</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                       
                      
                        <div class="col-sm-6 col-md-12">
                          <div class="mb-3">
                            <div class="form-group">
                            <label class="form-label">Exercise Name</label>
                            <input class="form-control" name="exercise_name" type="text" placeholder="First Name">
                          </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                          <div class="mb-3">
                            <div class="form-group">
                            <label class="form-label">Exercise Details</label>
                        
                            <textarea class="form-control" rows="5"  name="exercise_details" placeholder="Enter About exercise description"></textarea>
                          </div>
                          </div>
                        </div>
                         <div class="col-sm-6 col-md-12">
                          <div class="form-group">
                            <label class="form-label">Exercise Types</label>
                            <input class="form-control" type="text" name="exercise_type" placeholder="Arabic">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                          <div class="mb-3">
                            <div class="form-group">
                            <label class="form-label">Exercise Steps </label>
                            <input class="form-control" type="text" name="exercise_steps" placeholder="4 Steps">
                          </div>
                        </div>
                        </div>
                       
                        
                      <div class="card-body">
                     
                       <!--  <div class="row mb-2">
                          <div class="profile-title">
                          </div>
                        </div> -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Exercise Image :</strong>
                        <input type="file" name="EPhoto">
                        </div>
                        </div>
                        <br><br>
                       
                        
                        
                   
                     
                    </div>


                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Save Details</button>
                    </div>
                 </div>
                </div>
                </div>
               <!--  -->
               </form>
               <!-- form -->
            </div>


          </div>
          <!-- Container-fluid Ends-->

        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">

            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2021 © Cuba theme by pixelstrap  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.com/cuba/theme/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Apr 2021 08:32:00 GMT -->
</html>