<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/cuba/theme/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Apr 2021 08:28:50 GMT -->
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
                  <h3>Product</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">ECommerce</li>
                    <li class="breadcrumb-item active">Product</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid product-wrapper">
            <div class="product-grid">
              <div class="feature-products">
                <div class="row">
                  <div class="col-md-6 products-total">
                    <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="#" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                    <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="#" data-original-title="" title=""><i data-feather="list"></i></a></div><span class="d-none-productlist filter-toggle">
                          Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span></span>
                    <div class="grid-options d-inline-block">
                      <ul>
                        <li><a class="product-2-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a></li>
                        <li><a class="product-3-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span></a></li>
                        <li><a class="product-4-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span><span class="line-grid line-grid-9 bg-primary"></span></a></li>
                        <li><a class="product-6-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-10 bg-primary"></span><span class="line-grid line-grid-11 bg-primary"></span><span class="line-grid line-grid-12 bg-primary"></span><span class="line-grid line-grid-13 bg-primary"></span><span class="line-grid line-grid-14 bg-primary"></span><span class="line-grid line-grid-15 bg-primary"></span></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 text-end"><span class="f-w-600 m-r-5">Showing Products 1 - 24 Of 200 Results</span>
                    <div class="select2-drpdwn-product select-options d-inline-block">
                      <select class="form-control btn-square" name="select">
                        <option value="opt1">Featured</option>
                        <option value="opt2">Lowest Prices</option>
                        <option value="opt3">Highest Prices</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="product-sidebar">
                      <div class="filter-section">
                        <div class="card">
                          <div class="card-header">
                            <h6 class="mb-0 f-w-600">Filters<span class="pull-right"><i class="fa fa-chevron-down toggle-data"></i></span></h6>
                          </div>
                          <div class="left-filter">
                            <div class="card-body filter-cards-view animate-chk">
                              <div class="product-filter">
                                <h6 class="f-w-600">Category</h6>
                                <div class="checkbox-animated mt-0">
                                  <label class="d-block" for="edo-ani5">
                                    <input class="radio_animated" id="edo-ani5" type="radio" data-original-title="" title="">Man Shirt
                                  </label>
                                  <label class="d-block" for="edo-ani6">
                                    <input class="radio_animated" id="edo-ani6" type="radio" data-original-title="" title="">Man Jeans
                                  </label>
                                  <label class="d-block" for="edo-ani7">
                                    <input class="radio_animated" id="edo-ani7" type="radio" data-original-title="" title="">Woman Top
                                  </label>
                                  <label class="d-block" for="edo-ani8">
                                    <input class="radio_animated" id="edo-ani8" type="radio" data-original-title="" title="">Woman Jeans
                                  </label>
                                  <label class="d-block" for="edo-ani9">
                                    <input class="radio_animated" id="edo-ani9" type="radio" data-original-title="" title="">Man T-shirt
                                  </label>
                                </div>
                              </div>
                              <div class="product-filter">
                                <h6 class="f-w-600">Brand</h6>
                                <div class="checkbox-animated mt-0">
                                  <label class="d-block" for="chk-ani">
                                    <input class="checkbox_animated" id="chk-ani" type="checkbox" data-original-title="" title=""> Levi's
                                  </label>
                                  <label class="d-block" for="chk-ani1">
                                    <input class="checkbox_animated" id="chk-ani1" type="checkbox" data-original-title="" title="">Diesel
                                  </label>
                                  <label class="d-block" for="chk-ani2">
                                    <input class="checkbox_animated" id="chk-ani2" type="checkbox" data-original-title="" title="">Lee
                                  </label>
                                  <label class="d-block" for="chk-ani3">
                                    <input class="checkbox_animated" id="chk-ani3" type="checkbox" data-original-title="" title="">Hudson
                                  </label>
                                  <label class="d-block" for="chk-ani4">
                                    <input class="checkbox_animated" id="chk-ani4" type="checkbox" data-original-title="" title="">Denizen
                                  </label>
                                  <label class="d-block" for="chk-ani5">
                                    <input class="checkbox_animated" id="chk-ani5" type="checkbox" data-original-title="" title="">Spykar
                                  </label>
                                </div>
                              </div>
                              <div class="product-filter slider-product">
                                <h6 class="f-w-600">Colors</h6>
                                <div class="color-selector">
                                  <ul>
                                    <li class="white"></li>
                                    <li class="gray"></li>
                                    <li class="black"></li>
                                    <li class="orange"></li>
                                    <li class="green"></li>
                                    <li class="pink"></li>
                                    <li class="yellow"></li>
                                    <li class="blue"></li>
                                    <li class="red"></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="product-filter pb-0">
                                <h6 class="f-w-600">Price</h6>
                                <input id="u-range-03" type="text">
                                <h6 class="f-w-600">New Products</h6>
                              </div>
                             
                              <div class="product-filter text-center"><img class="img-fluid banner-product" src="../assets/images/ecommerce/banner.jpg" alt="" data-original-title="" title=""></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-12">
                    <form>
                      <div class="form-group m-0">
                        <input class="form-control" type="search" placeholder="Search.." data-original-title="" title=""><i class="fa fa-search"></i>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="product-wrapper-grid">
                <div class="row">
                  <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li>
                                <button class="btn" type="button"><i class="icon-shopping-cart"></i></button>
                              </li>
                              <li>
                                <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-eye"></i></button>
                              </li>
                              <li>
                                <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Woman T-shirt</h4>
                                    <div class="product-price">$26.00
                                      <del>$350.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h6 class="f-w-600">Product Details</h6>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-outline-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h6 class="f-w-600">Quantity</h6>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn">
                                        <button class="btn btn-primary" type="button">Add to Cart</button>
                                        <button class="btn btn-primary" type="button">View Details</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                          <h4>Man's Shirt</h4>
                          <p>Simply dummy text of the printing.</p>
                          <div class="product-price">$26.00 
                            <del>$350.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          
                 
                  
           
                 
                
               
                 
              
               
                </div>
              </div>
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
    <script src="../assets/js/range-slider/ion.rangeSlider.min.js"></script>
    <script src="../assets/js/range-slider/rangeslider-script.js"></script>
    <script src="../assets/js/touchspin/vendors.min.js"></script>
    <script src="../assets/js/touchspin/touchspin.js"></script>
    <script src="../assets/js/touchspin/input-groups.min.js"></script>
    <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script src="../assets/js/product-tab.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.com/cuba/theme/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Apr 2021 08:29:03 GMT -->
</html>