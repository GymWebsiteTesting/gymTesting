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
               <form action="{{url('update/userPro/'.$userPro->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                
                <div class="col-xl-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Add Details</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="card-body">
                     
                        <div class="row mb-2">
                          <div class="profile-title">
                            <div class="media">                        
                              <img class="img-70 rounded-circle" alt="" src="../assets/images/user/7.jpg">
                              <div class="media-body">
                                <h3 class="mb-1">MARK JECNO</h3>
                                <p>DESIGNER</p>
                              </div>
                                

                            </div>
                          </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>User Image :</strong>
<input type="file" name="photo">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Old Image :</strong>
<img src="{{ URL::to($userPro->photo) }}" height="70px" width="80px">
<input type="hidden" name="old_logo" value="{{$userPro->photo}}">
</div>
</div>
<br><br>
                       
                        
                        
                   
                     
                    </div>
                      
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input class="form-control" name="first_name" type="text" value="{{$userPro->first_name}}">
                          </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <div class="form-group">
                            <label class="form-label">Last Name</label>
                            <input class="form-control" name="last_name"  type="text" value="{{$userPro->last_name}}">
                          </div>
                          </div>
                        </div>
                         <div class="col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class="form-label">Age</label>
                            <input class="form-control" type="text" name="age" value="{{$userPro->age}}">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <div class="form-group">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="email" name="email" value="{{$userPro->email}}">
                          </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mb-3">
                            <div class="form-group">
                            <label class="form-label">Address</label>
                           <input class="form-control" type="text" name="address" value="{{$userPro->address}}">
                          </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="mb-3">
                            <div class="form-group">
                            <label class="form-label">Contact Number</label>
                            <input class="form-control" type="text" name="contact_number" value="{{$userPro->contact_number}}">
                          </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="mb-3">
                            <div class="form-group">
                            <label class="form-label">Date</label>
                             <input class="form-control" name="join_date"  type="date"  value="{{$userPro->join_date}}">
                           </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="mb-3">
                            <div class="form-group">
                            <label class="form-label">User Type</label>
                             <select class="form-control btn-square" name="user_type"value="{{$userPro->user_type}}">
                              <option value="0">--Select--</option>
                              <option value="Men">Men</option>
                              <option value="Women">Women</option>
                              <option value="Child">Child</option>
                              <option value="4"></option>
                            </select>
                          </div>
                          </div>
                        </div>
                         <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                             <div class="form-group">
                            <label>Body Height</label>
                              <input class="form-control" type="text" name="body_height" value="{{$userPro->body_height}}">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                             <div class="form-group">
                            <label>Body Weight</label>
                           <input class="form-control" type="text" name="body_weight"value="{{$userPro->body_weight}}">
                          </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                          <div>
                            <label class="form-label">About User</label>
                            <textarea class="form-control" rows="5" placeholder="Enter About your description"></textarea>
                          </div>
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