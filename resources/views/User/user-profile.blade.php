

<!doctype html>
<html lang="en">
  
<!-- Mirrored from templates.iqonic.design/note-plus/html/app/user-profile by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2025 05:58:14 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>NotePlus | Responsive Bootstrap 4 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/note-plus/html/assets/images/favicon.ico" />
      <link href="{{asset('css/backend-plugin.mine209.css')}}" rel="stylesheet"> 
      <link href="{{asset('css/backende209.css')}}" rel="stylesheet">
      <link href="{{asset('../vendor/%40fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
      <link href="{{asset('../vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
      <link href="{{asset('../vendor/remixicon/fonts/remixicon.css')}}" rel="stylesheet">
      <link href="{{asset('../vendor/%40icon/dripicons/dripicons.css')}}" rel="stylesheet">  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <div class="right-sidebar-mini right-sidebar">
      <div class="right-sidebar-panel p-0">
          <div class="right-sidebar-toggle bg-primary mt-3" data-extra-toggle="right-sidebar-dissmiss">
                <i class="ri-arrow-left-line side-left-icon"></i>
                <i class="ri-close-fill side-right-icon"></i>
            </div>
          <div class="card shadow-none tag-details mb-0">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title mb-0">Tag List</h4>
                </div>
                <div>
                    <a href="#" data-toggle="modal" data-target="#create-note"><i class="ri-add-line font-size-20"></i></a>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="list-inline p-3 m-0 pb-0">
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-success">A</div>
                            <h5>Afternoon</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton1"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton1" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-danger">B</div>
                            <h5>Book</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton2"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton2" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-purple">C</div>
                            <h5>Cupcake</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton3"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton3" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-info">D</div>
                            <h5>Dinner</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton4"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton4" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-warning">E</div>
                            <h5>Evening Snacks</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton5"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton5" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-success">F</div>
                            <h5>Fast Track</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton6"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton6" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-danger">G</div>
                            <h5>Good Morning</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton7"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton7" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-info">H</div>
                            <h5>Health</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton8"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton8" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-warning">I</div>
                            <h5>Ice Cream</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton9"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton9" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-success">J</div>
                            <h5>Juice</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton10"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton10" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-danger">K</div>
                            <h5>Kangaroo</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton11"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton11" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-purple">L</div>
                            <h5>Leaves</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton12"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton12" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-info">M</div>
                            <h5>Machine</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton13"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton13" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="px-2">
                    <div class="item d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-warning">N</div>
                            <h5>Nail Polish</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton14"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton14" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
          </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="create-note" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-4">Create New Tag</h4>
                        <div class="content create-workform">
                            <input type="text" class="form-control" placeholder="Enter Tag Name">
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-outline-primary mr-4" data-dismiss="modal">Create</div>
                                    <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Modal -->
    <div class="modal fade" id="tag-rename" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-4">Rename Your Tag</h4>
                        <div class="content create-workform">
                            <input type="text" class="form-control" placeholder="Enter Tag Name">
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                    <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
       <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                      <i class="ri-menu-line wrapper-menu"></i>
                      <a href="home" class="header-logo">
                              <img src="images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                          
                      </a>
                  </div>
                  <div class="d-flex align-items-center">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                      <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                          <li class="nav-item nav-icon search-content">
                              <a href="#" class="search-toggle rounded" id="h1-dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="ri-search-line"></i>
                              </a>
                              <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownSearch">
                                  <form action="#" class="searchbox p-2">
                                      <div class="form-group mb-0 position-relative">
                                      <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                      <a href="#" class="search-link"><i class="las la-search"></i></a> 
                                      </div>
                                  </form>
                              </div>
                          </li>                
                          <li class="nav-item nav-icon dropdown mail-content">
                              <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="">
                                  <svg width="20" class="svg-icon" id="main-n-010" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                  </svg>
                              </i>
                              <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                              <span class="bg-primary"></span>
                              </a>
                              <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownMenuButton2">
                                  <div class="card shadow-none m-0">
                                      <div class="card-body p-0 ">
                                          <div class="px-3 pt-0 pb-0">
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/01.jpg" alt="01">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Emma Watson</h5>
                                                              <small class="text-dark"><b>12 : 47 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/02.jpg" alt="02">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Ashlynn Franci</h5>
                                                              <small class="text-dark"><b>11 : 30 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/03.jpg" alt="03">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Kianna Carder</h5>
                                                              <small class="text-dark"><b>11 : 21 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>
                                          <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                              View All
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="nav-item nav-icon dropdown mail-content"> 
                              <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton004" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                              <i class="">
                                  <svg width="20" class="svg-icon" id="main-n-020" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                  </svg>
                              </i>
                              <span class="badge badge-primary count-mail rounded-circle">2</span>
                              <span class="bg-primary "></span>
                              </a>
                              <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownMenuButton004">
                                  <div class="card shadow-none m-0">
                                      <div class="card-body p-0 ">
                                          <div class="px-3 pt-0 pb-0">
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/01.jpg" alt="01">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Emma Watson</h5>
                                                              <small class="text-dark"><b>12 : 47 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/02.jpg" alt="02">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Ashlynn Franci</h5>
                                                              <small class="text-dark"><b>11 : 30 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/03.jpg" alt="03">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Kianna Carder</h5>
                                                              <small class="text-dark"><b>11 : 21 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>
                                          <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                              View All
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </li>  
                          <li class="caption-content">
                             <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between" id="h-dropdownMenuButton001" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="images/user/1.jpg" class="img-fluid rounded avatar-50" alt="user">
                              </a>
                              <div class="dropdown-menu dropdown-menu-right w-100 border-0 py-2" aria-labelledby="h-dropdownMenuButton001">
                                  <a class="dropdown-item mb-2" href="user-profile">
                                      <i class="lar la-user-circle font-size-20 mr-1"></i>
                                      <span class="mt-2">My Profile</span>
                                  </a>
                                  <a class="dropdown-item mb-2" href="user-profile-edit">
                                      <i class="las la-user-edit font-size-20 mr-1"></i>
                                      <span>Edit Profile</span>
                                  </a>
                                  <a class="dropdown-item mb-2" href="user-account-setting">
                                      <i class="las la-user-cog font-size-20 mr-1"></i>
                                      <span>Account Settings</span>
                                  </a>
                                  <a class="dropdown-item" href="user-privacy-setting">
                                      <i class="las la-user-shield font-size-20 mr-1"></i>
                                      <span>Privacy Settings</span>
                                  </a>
                                  <hr class="my-1">
                                  <a class="dropdown-item" href="home">
                                      <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                                      <span>Logout</span>
                                  </a>
                              </div>
                          </li>
                          </ul>                     
                      </div> 
                  </div>
              </nav>
          </div>
      </div>      
      <div class="iq-sidebar  sidebar-default ">
          <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
              <a href="home" class="header-logo">
                  <img src="images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4>
              </a>
              <div class="iq-menu-bt-sidebar">
                  <i class="las la-times wrapper-menu"></i>
              </div>
          </div>    
          <div class="sidebar-caption dropdown">
              <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="images/user/1.jpg" class="img-fluid rounded avatar-50 mr-3" alt="user">
                  <div class="caption">
                      <h6 class="mb-0 line-height">Bud Wiser</h6>
                  </div>
                  <i class="las la-angle-down"></i>
              </a>
              <div class="dropdown-menu w-100 border-0 my-2" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item mb-2" href="user-profile">
                      <i class="lar la-user-circle font-size-20 mr-1"></i>
                      <span class="mt-2">My Profile</span>
                  </a>
                  <a class="dropdown-item mb-2" href="user-profile-edit">
                      <i class="las la-user-edit font-size-20 mr-1"></i>
                      <span>Edit Profile</span>
                  </a>
                  <a class="dropdown-item mb-2" href="user-account-setting">
                      <i class="las la-user-cog font-size-20 mr-1"></i>
                      <span>Account Settings</span>
                  </a>
                  <a class="dropdown-item mb-3" href="user-privacy-setting">
                      <i class="las la-user-shield font-size-20 mr-1"></i>
                      <span>Privacy Settings</span>
                  </a>
                  <hr class="my-2">
                  <a class="dropdown-item" href="auth-sign-in">
                      <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                      <span>Logout</span>
                  </a>
              </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <div class="iq-search-bar device-search mb-3">
                  <form action="#" class="searchbox">
                  <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                  <input type="text" class="text search-input" placeholder="Search">
                  </form>
              </div>
              <div class="sidebar-btn dropdown mb-3">
                  <a href="#"  id="dropdownMenuButton01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary pr-5 position-relative iq-user-toggle d-flex align-items-center justify-content-between" style="height: 40px;"><span class="btn-title"><i class="ri-add-line mr-3"></i>Add New</span><span class="note-add-btn" style="height: 40px;"><i class="las la-angle-down"></i></span></a>
                  <div class="dropdown-menu w-100 border-0 py-3" aria-labelledby="dropdownMenuButton01">
                      <a class="dropdown-item mb-2" href="page-new-note?type=blank">
                          <span><i class="ri-sticky-note-line mr-3"></i>Blank Notes</span>
                      </a>
                      <a class="dropdown-item mb-2" href="page-new-note?type=todo">
                          <span><i class="ri-todo-line mr-3"></i>To-do</span>
                      </a>
                      <a class="dropdown-item mb-2" href="page-new-note?type=essay">
                          <span><i class="ri-booklet-line mr-3"></i>Essay Notes</span>
                      </a>
                      <a class="dropdown-item" href="page-new-note?type=daily">
                          <span><i class="ri-donut-chart-line mr-3"></i>Daily Reflection</span>
                      </a>
                  </div>
              </div>
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                      <li class="">
                              <a href="home" class="svg-icon">
                                  <i>
                                      <svg class="svg-icon" id="iq-main-1" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                      </svg>
                                  </i>
                                  <span>Your Notes</span>
                              </a>
                          <ul id="index" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          </ul>
                      </li>
                      <li class="">
                          <a href="#notebooks" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                  </svg>
                              </i>
                              <span>Notebooks</span>
                              <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                              <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="notebooks" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class="">
                                  <a href="page-project-plans" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Project Plans</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="page-routinenotes" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Routine Notes</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="page-planning" class="svg-icon">
                                      <i>
                                          <svg width="20" class="svg-icon" id="iq-main-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Planning</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="">
                          <a href="page-reminder" class="svg-icon">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                              </i>
                              <span>Reminder</span>
                          </a>
                      </li>
                      <li class="" data-extra-toggle="right-sidebar">
                          <a href="javascript:void(0);" class="svg-icon">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                  </svg>                            
                              </i>
                              <span>Tags</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="page-bin" class="svg-icon">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                  </svg>
                              </i>
                              <span>Bin</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="#otherpage" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                  </svg>
                              </i>
                              <span>other page</span>
                              <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                              <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                          </a>
                          <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class="">
                                  <a href="#user" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-user-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                          </svg>
                                      </i>
                                      <span>User Details</span>
                                      <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                      <li class="active">
                                          <a href="user-profile" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-user-1-1"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                  </svg>
                                              </i><span class="">User Profile</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="user-add" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-user-1-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                  </svg>
                                              </i><span class="">User Add</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="user-list" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-user-1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                  </svg>
                                              </i><span class="">User List</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#ui" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                          </svg>
                                      </i>
                                      <span>UI Elements</span>
                                      <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                          <li class="">
                                                  <a href="ui-avatars" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                          </svg>
                                                      </i><span class="">Avatars</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-alerts" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                                          </svg>
                                                      </i><span class="">Alerts</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-badges" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                          </svg>
                                                      </i><span class="">Badges</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-breadcrumb" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                                      </svg>
                                                      </i><span class="">Breadcrumb</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-buttons" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                                          </svg>
                                                      </i><span class="">Buttons</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-buttons-group" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-5" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                                          </svg>
                                                      </i><span class="">Buttons Group</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-boxshadow" class="svg-icon">
                                                      <i class="">
                                                              <svg class="svg-icon" id="iq-ui-1-6" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                                              </svg>
                                                      </i><span class="">Box Shadow</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-colors" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                                      </svg>
                                                      </i><span class="">Colors</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-cards" class="svg-icon">
                                                      <i class="">
                                                      <svg  class="svg-icon" id="iq-ui-1-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                                      </svg>
                                                      </i><span class="">Cards</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-carousel" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                                      </svg>
                                                      </i><span class="">Carousel</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-grid" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                          </svg>
                                                      </i><span class="">Grid</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-helper-classes" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-11" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                                          </svg>
                                                      </i><span class="">Helper classes</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-images" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                      </svg>
                                                      </i><span class="">Images</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-list-group" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon feather feather-list" id="iq-ui-1-13" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line>
                                                          </svg>
                                                      </i><span class="">list Group</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-media-object" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-14" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                                          </svg>
                                                      </i><span class="">Media</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-modal" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon feather feather-columns" id="iq-ui-1-15" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path>
                                                          </svg>
                                                      </i><span class="">Modal</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-notifications" class="svg-icon">
                                                      <i class="">
                                                      <svg  class="svg-icon" id="iq-ui-1-16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                                      </svg>
                                                      </i><span class="">Notifications</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-pagination" class="svg-icon">
                                                      <i class="">
                                                      <svg class="svg-icon" id="iq-ui-1-17" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                      </svg>
                                                      </i><span class="">Pagination</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-popovers" class="svg-icon">
                                                      <i class="">
                                                          <svg  class="svg-icon" id="iq-ui-1-18" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                  <line x1="7.5" y1="4.21" x2="7.5" y2="4.22" />
                                                                  <line x1="4.21" y1="7.5" x2="4.21" y2="7.51" />
                                                                  <line x1="3" y1="12" x2="3" y2="12.01" />
                                                                  <line x1="4.21" y1="16.5" x2="4.21" y2="16.51" />
                                                                  <line x1="7.5" y1="19.79" x2="7.5" y2="19.8" />
                                                                  <line x1="12" y1="21" x2="12" y2="21.01" />
                                                                  <line x1="16.5" y1="19.79" x2="16.5" y2="19.8" />
                                                                  <line x1="19.79" y1="16.5" x2="19.79" y2="16.51" />
                                                                  <line x1="21" y1="12" x2="21" y2="12.01" />
                                                                  <line x1="19.79" y1="7.5" x2="19.79" y2="7.51" />
                                                                  <line x1="16.5" y1="4.21" x2="16.5" y2="4.22" />
                                                                  <line x1="12" y1="3" x2="12" y2="3.01" />
                                                              </svg>
                                                      </i><span class="">Popovers</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-progressbars" class="svg-icon">
                                                      <i class="">
                                                          <svg  class="svg-icon feather feather-hard-drive" id="iq-ui-1-19" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="12" x2="2" y2="12"></line><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" y1="16" x2="6.01" y2="16"></line><line x1="10" y1="16" x2="10.01" y2="16"></line>
                                                          </svg>
                                                      </i><span class="">Progressbars</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-typography" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-20" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                                          </svg>
                                                      </i>
                                                      <span class="">Typography</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-tabs" class="svg-icon">
                                                      <i class="">
                                                          <svg class="svg-icon" id="iq-ui-1-21" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                                          </svg>
                                                      </i>
                                                      <span class="">Tabs</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-tooltips" class="svg-icon">
                                                      <i class="">
                                                          <svg  class="svg-icon" id="iq-ui-1-22" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                              <path d="M4 13v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a2 2 0 0 0 6 0v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a8 8 0 0 1 -16 0" />
                                                              <line x1="4" y1="8" x2="9" y2="8" />
                                                              <line x1="15" y1="8" x2="19" y2="8" />
                                                          </svg>
                                                      </i>
                                                      <span class="">Tooltips</span>
                                                  </a>
                                          </li>
                                          <li class="">
                                                  <a href="ui-embed-video" class="svg-icon">
                                                      <i class="">
                                                          <svg  class="svg-icon" id="iq-ui-1-23" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                          </svg>
                                                      </i>
                                                      <span class="">Video</span>
                                                  </a>
                                          </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#auth" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i>
                                          <svg class="svg-icon" id="iq-auth-1" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                          </svg>
                                      </i>
                                      <span>Authentication</span>
                                      <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                      <li class="">
                                          <a href="auth-sign-in" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-auth-1-1" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                  </svg>
                                              </i>
                                              <span class="">Login</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="auth-sign-up" class="svg-icon">
                                              <i class="">
                                                  <svg  class="svg-icon" id="iq-auth-1-2" width="20"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                  </svg>
                                              </i>
                                              <span class="">Register</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="auth-recoverpw" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-auth-1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                                  </svg>
                                              </i>
                                              <span class="">Recover Password</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="auth-confirm-mail" class="svg-icon">
                                              <i class="">
                                              <svg class="svg-icon" id="iq-auth-1-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                                  </svg>
                                              </i>
                                              <span class="">Confirm Mail</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="auth-lock-screen" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon feather feather-lock" id="iq-auth-1-5" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                              </i>
                                              <span class="">Lock Screen</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#pricing" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i>
                                          <svg class="svg-icon" id="iq-extra-1-3"  xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                              <path d="M10 13l2.5 0c2.5 0 5 -2.5 5 -5c0 -3 -1.9 -5 -5 -5h-5.5c-.5 0 -1 .5 -1 1l-2 14c0 .5 .5 1 1 1h2.8l1.2 -5c.1 -.6 .4 -1 1 -1zm7.5 -5.8c1.7 1 2.5 2.8 2.5 4.8c0 2.5 -2.5 4.5 -5 4.5h-2.6l-.6 3.6a1 1 0 0 1 -1 .8l-2.7 0a0.5 .5 0 0 1 -.5 -.6l.2 -1.4" />
                                          </svg>
                                      </i>
                                      <span>Pricing</span>
                                      <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                          <li class="">
                                              <a href="pricing" class="svg-icon">
                                                  <i class="">
                                                      <svg class="svg-icon" id="iq-extra-1-3-1" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                          <rect x="4" y="4" width="16" height="16" rx="2" />
                                                      </svg>
                                                  </i>
                                                  <span class="">Pricing 1</span>
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="pricing-1" class="svg-icon">
                                                  <i class="">
                                                      <svg class="svg-icon" id="iq-extra-1-3-2" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                      <line x1="12" y1="17" x2="12" y2="3" />
                                                      <path d="M15 6l-3 -3l-3 3" />
                                                      <circle cx="12" cy="19" r="2" />
                                                      </svg>
                                                  </i>
                                                  <span class="">Pricing 2</span>
                                              </a>
                                          </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="#pages-error" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg  class="svg-icon feather feather-alert-triangle" id="iq-extra-1-4" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                      </i>
                                      <span>Error</span>
                                      <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                      <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                  </a>
                                  <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                      <li class="">
                                          <a href="pages-error" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon feather feather-alert-circle" id="iq-extra-1-4-1"  xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                              </i>
                                              <span class="">Error 404</span>
                                          </a>
                                      </li>
                                      <li class="">
                                          <a href="pages-error-500" class="svg-icon">
                                              <i class="">
                                                  <svg class="svg-icon" id="iq-extra-1-4-2" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                      <path d="M9 9v-1a3 3 0 0 1 6 0v1" />
                                                      <path d="M8 9h8a6 6 0 0 1 1 3v3a5 5 0 0 1 -10 0v-3a6 6 0 0 1 1 -3" />
                                                      <line x1="3" y1="13" x2="7" y2="13" />
                                                      <line x1="17" y1="13" x2="21" y2="13" />
                                                      <line x1="12" y1="20" x2="12" y2="14" />
                                                      <line x1="4" y1="19" x2="7.35" y2="17" />
                                                      <line x1="20" y1="19" x2="16.65" y2="17" />
                                                      <line x1="4" y1="7" x2="7.75" y2="9.4" />
                                                      <line x1="20" y1="7" x2="16.25" y2="9.4" />
                                                  </svg>
                                              </i>
                                              <span class="">Error 500</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="">
                                  <a href="pages-blank-page" class="svg-icon">
                                      <i class="">
                                          <svg  class="svg-icon" id="iq-extra-1-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                          </svg>
                                      </i>
                                      <span>Blank Page</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="pages-maintenance" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-extra-1-9" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                              <circle cx="12" cy="7" r="3" />
                                              <circle cx="17" cy="16" r="3" />
                                              <circle cx="7" cy="16" r="3" />
                                          </svg>
                                      </i>
                                      <span>Maintenance</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </nav>
              <div id="sidebar-bottom" class="position-relative sidebar-bottom">
                  <div class="card rounded shadow-none">
                      <div class="card-body">
                          <div class="sidebarbottom-content">
                              <div class="image"><img src="images/layouts/side-bkg.png" class="img-fluid" alt="side-bkg"></div>
                              <p class="mb-0">Set Buisness Account To Explore Premiun Features</p>
                              <button type="button" class="btn bg-primary mt-3">Upgrade</button>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="p-3"></div>
          </div>
      </div>      <div class="content-page">
        <div class="container-fluid">
          <div class="desktop-header">
              <div class="card card-block topnav-left">
                  <div class="card-body d-flex align-items-center">
                      <div class="d-flex justify-content-between">
                          <h4 class="text-capitalize">User Profile</h4>
                      </div>
                  </div>
              </div>
              <div class="card topnav-right">
                  
                  <div class="card-body card-content-right">
                      <ul class="list-inline m-0 p-0 d-flex align-items-center justify-content-around">
                          <li class="nav-item nav-icon dropdown">
                              <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="">
                                  <svg width="20" class="svg-icon" id="main-n-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                  </svg>
                              </i>
                              <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                              <span class="bg-primary"></span>
                              </a>
                              <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                  <div class="card shadow-none m-0">
                                      <div class="card-body p-0 ">
                                          <div class="p-3">
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card pb-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/01.jpg" alt="01">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Emma Watson</h5>
                                                              <small class="text-dark"><b>12 : 47 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/02.jpg" alt="02">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Ashlynn Franci</h5>
                                                              <small class="text-dark"><b>11 : 30 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card pt-3">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/03.jpg" alt="03">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Kianna Carder</h5>
                                                              <small class="text-dark"><b>11 : 21 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>
                                          <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                              View All
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="nav-item nav-icon dropdown pl-3"> 
                              <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="dropdownMenuButton002" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                              <i class="">
                                  <svg width="20" class="svg-icon" id="main-n-02" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                  </svg>
                              </i>
                              <span class="badge badge-primary count-mail rounded-circle">2</span>
                              <span class="bg-primary "></span>
                              </a>
                              <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton002">
                                  <div class="card shadow-none m-0">
                                      <div class="card-body p-0 ">
                                          <div class="p-3">
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card pb-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/01.jpg" alt="01">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Emma Watson</h5>
                                                              <small class="text-dark"><b>12 : 47 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card py-3 border-bottom">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/02.jpg" alt="02">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Ashlynn Franci</h5>
                                                              <small class="text-dark"><b>11 : 30 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                              <a href="#" class="iq-sub-card">
                                                  <div class="media align-items-center cust-card pt-3">
                                                      <div class="">
                                                          <img class="avatar-50 rounded-small" src="images/user/03.jpg" alt="03">
                                                      </div>
                                                      <div class="media-body ml-3">
                                                          <div class="d-flex align-items-center justify-content-between">
                                                              <h5 class="mb-0">Kianna Carder</h5>
                                                              <small class="text-dark"><b>11 : 21 pm</b></small>
                                                          </div>
                                                          <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                      </div>
                                                  </div>
                                              </a>
                                          </div>
                                          <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                              View All
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </li>  
                      </ul>
                  </div>    </div>
          </div>        </div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card car-transparent">
                  <div class="card-body p-0">
                     <div class="profile-image position-relative">
                        <img src="images/page-img/profile.jpg" class="img-fluid rounded w-100" alt="">
                     </div>
                     <div class="profile-overly">
                        <h3>Evan Shlee</h3>
                        <span>SR. Engineer</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                     <h4 class="mb-3">Personal Profile</h4>
                     <p class="mb-0 text-ellipsis short-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body text-center">
                     <svg width="36" height="48" viewBox="0 0 36 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M9.10495 33.9964C8.29026 33.1817 8.71495 33.4114 6.74995 32.8855C5.85838 32.6464 5.07463 32.1871 4.36588 31.6367L0.112441 42.0655C-0.299122 43.0752 0.469629 44.1721 1.559 44.1308L6.4987 43.9424L9.8962 47.5311C10.6462 48.3224 11.9624 48.0758 12.374 47.0661L17.2537 35.1017C16.2375 35.668 15.1096 35.9999 13.9434 35.9999C12.1153 35.9999 10.3978 35.2883 9.10495 33.9964V33.9964ZM35.8875 42.0655L31.634 31.6367C30.9253 32.188 30.1415 32.6464 29.25 32.8855C27.2746 33.4142 27.7078 33.1836 26.895 33.9964C25.6021 35.2883 23.8837 35.9999 22.0556 35.9999C20.8893 35.9999 19.7615 35.6671 18.7453 35.1017L23.625 47.0661C24.0365 48.0758 25.3537 48.3224 26.1028 47.5311L29.5012 43.9424L34.4409 44.1308C35.5303 44.1721 36.299 43.0742 35.8875 42.0655V42.0655ZM24.6562 31.8749C26.0887 30.4171 26.2528 30.5427 28.2928 29.9867C29.595 29.6314 30.6131 28.5955 30.9618 27.2699C31.6631 24.6074 31.4812 24.9289 33.3946 22.9808C34.3481 22.0105 34.7203 20.5958 34.3715 19.2702C33.6712 16.6096 33.6703 16.9808 34.3715 14.3174C34.7203 12.9917 34.3481 11.5771 33.3946 10.6067C31.4812 8.65862 31.6631 8.97925 30.9618 6.31768C30.6131 4.99206 29.595 3.95612 28.2928 3.60081C25.679 2.88737 25.994 3.07393 24.0787 1.12487C23.1253 0.154558 21.735 -0.225129 20.4328 0.130183C17.82 0.842683 18.1846 0.843621 15.5671 0.130183C14.2649 -0.225129 12.8746 0.153621 11.9212 1.12487C10.0078 3.073 10.3228 2.88737 7.70807 3.60081C6.40588 3.95612 5.38776 4.99206 5.03901 6.31768C4.33869 8.97925 4.51963 8.65862 2.60619 10.6067C1.65275 11.5771 1.27963 12.9917 1.62932 14.3174C2.32963 16.9761 2.33057 16.6049 1.62932 19.2692C1.28057 20.5949 1.65275 22.0096 2.60619 22.9808C4.51963 24.9289 4.33776 24.6074 5.03901 27.2699C5.38776 28.5955 6.40588 29.6314 7.70807 29.9867C9.8062 30.5586 9.96276 30.4686 11.3437 31.8749C12.584 33.1377 14.5162 33.3636 16.0068 32.4205C16.6029 32.0421 17.2944 31.8411 18.0004 31.8411C18.7065 31.8411 19.3979 32.0421 19.994 32.4205C21.4837 33.3636 23.4159 33.1377 24.6562 31.8749ZM9.15557 16.4961C9.15557 11.5246 13.1156 7.49425 18 7.49425C22.8843 7.49425 26.8443 11.5246 26.8443 16.4961C26.8443 21.4677 22.8843 25.498 18 25.498C13.1156 25.498 9.15557 21.4677 9.15557 16.4961V16.4961Z"
                           fill="#88DFFF" />
                     </svg>
                     <h2 class="mb-2 mt-3">42+</h2>
                     <h4>Awards</h4>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body text-center">
                     <svg width="60" height="48" viewBox="0 0 60 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M23.9091 24.5297C24.495 25.1156 25.4447 25.1156 26.0306 24.5297L27.0909 23.4694C27.6769 22.8834 27.6769 21.9338 27.0909 21.3478L23.7422 18L27.09 14.6512C27.6759 14.0653 27.6759 13.1156 27.09 12.5297L26.0297 11.4694C25.4437 10.8834 24.4941 10.8834 23.9081 11.4694L18.4387 16.9387C17.8528 17.5247 17.8528 18.4744 18.4387 19.0603L23.9091 24.5297V24.5297ZM32.91 23.4703L33.9703 24.5306C34.5563 25.1166 35.5059 25.1166 36.0919 24.5306L41.5613 19.0613C42.1472 18.4753 42.1472 17.5256 41.5613 16.9397L36.0919 11.4703C35.5059 10.8844 34.5563 10.8844 33.9703 11.4703L32.91 12.5306C32.3241 13.1166 32.3241 14.0662 32.91 14.6522L36.2578 18L32.91 21.3488C32.3241 21.9347 32.3241 22.8844 32.91 23.4703V23.4703ZM58.5 39H35.7694C35.7 40.8572 34.3903 42 32.7 42H27C25.2478 42 23.9044 40.3622 23.9278 39H1.5C0.675 39 0 39.675 0 40.5V42C0 45.3 2.7 48 6 48H54C57.3 48 60 45.3 60 42V40.5C60 39.675 59.325 39 58.5 39ZM54 4.5C54 2.025 51.975 0 49.5 0H10.5C8.025 0 6 2.025 6 4.5V36H54V4.5ZM48 30H12V6H48V30Z"
                           fill="#81F4B2" />
                     </svg>
                     <h2 class="mb-2 mt-3">3+ years </h2>
                     <h4>Experience</h4>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body text-center">
                     <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M35.3676 11.2517C34.8398 11.2372 34.3256 11.3198 33.8438 11.4898V7.03125C33.8438 4.70503 31.9512 2.8125 29.625 2.8125C29.0759 2.8125 28.5517 2.91909 28.0701 3.11072C27.5821 1.32047 25.9428 0 24 0C22.0572 0 20.4179 1.32047 19.9299 3.11072C19.4483 2.91909 18.9241 2.8125 18.375 2.8125C16.0488 2.8125 14.1562 4.70503 14.1562 7.03125V11.4895C13.6747 11.3198 13.1607 11.2372 12.6324 11.2517C10.3711 11.3136 8.53125 13.2316 8.53125 15.5272V48H36.6562V41.2395L38.5637 36.4704C39.1643 34.9689 39.4688 33.3877 39.4688 31.7705V15.5272C39.4688 13.2316 37.6289 11.3136 35.3676 11.2517V11.2517ZM11.3438 45.1875V42.375H33.8438V45.1875H11.3438ZM36.6562 31.7705C36.6562 33.0283 36.4194 34.2581 35.9523 35.4261L34.2979 39.5625H11.3438V15.5272C11.3438 14.7405 11.9564 14.0837 12.7095 14.0631C13.0926 14.0504 13.4561 14.1937 13.7305 14.4607C14.0051 14.7278 14.1563 15.0858 14.1563 15.4687V21.9843H16.9688V7.03125C16.9688 6.25584 17.5997 5.625 18.3751 5.625C19.1505 5.625 19.7813 6.25584 19.7813 7.03125V21.9844H22.5938V4.21875C22.5938 3.44334 23.2247 2.8125 24.0001 2.8125C24.7755 2.8125 25.4063 3.44334 25.4063 4.21875V21.9844H28.2188V7.03125C28.2188 6.25584 28.8497 5.625 29.6251 5.625C30.4005 5.625 31.0313 6.25584 31.0313 7.03125V24.1714C24.712 24.8732 19.7812 30.2467 19.7812 36.75H22.5938C22.5938 31.3222 27.0097 26.9062 32.4375 26.9062H33.8438V15.4688C33.8438 15.0859 33.995 14.7278 34.2696 14.4608C34.544 14.1938 34.9067 14.0508 35.2906 14.0632C36.0436 14.0838 36.6562 14.7406 36.6562 15.5273V31.7705Z"
                           fill="#FF9BBD" />
                     </svg>
                     <h2 class="mb-2 mt-3">424+</h2>
                     <h4>Participated</h4>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header">
                     <div class="header-title">
                        <h4 class="card-title">Education Traning</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="list-inline p-0 m-0">
                        <li class="d-flex align-items-center mb-3">
                           <div class="profile-icon iq-icon-box rounded-small bg-danger-light text-center">
                              <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0)">
                                    <path
                                       d="M23.3379 5.745L12.8777 2.53125C12.3077 2.35612 11.6927 2.35612 11.1231 2.53125L0.662429 5.745C-0.220321 6.01612 -0.220321 7.18349 0.662429 7.45462L2.48605 8.01487C2.08593 8.50949 1.83993 9.11287 1.81555 9.77362C1.45443 9.98062 1.20018 10.3541 1.20018 10.8C1.20018 11.2042 1.41318 11.5444 1.71993 11.7619L0.762554 16.0699C0.679304 16.4445 0.964304 16.8 1.34793 16.8H3.45205C3.83605 16.8 4.12105 16.4445 4.0378 16.0699L3.08043 11.7619C3.38718 11.5444 3.60018 11.2042 3.60018 10.8C3.60018 10.3661 3.35755 10.0031 3.01293 9.79237C3.04143 9.22912 3.32943 8.73112 3.7888 8.41537L11.1227 10.6687C11.4624 10.773 12.1142 10.9031 12.8773 10.6687L23.3379 7.45499C24.2211 7.1835 24.2211 6.0165 23.3379 5.745V5.745ZM13.2298 11.8159C12.1599 12.1444 11.2483 11.9629 10.7702 11.8159L5.33193 10.1452L4.80018 14.4C4.80018 15.7256 8.02368 16.8 12.0002 16.8C15.9767 16.8 19.2002 15.7256 19.2002 14.4L18.6684 10.1449L13.2298 11.8159V11.8159Z"
                                       fill="#FF9BBD" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0">
                                       <rect width="24" height="19.2" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                           </div>
                           <div class="pl-3">
                              <h5>South Kellergrove Junior</h5>
                              <p class="mb-0">Junior High School | Class of 2008</p>
                           </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                           <div class="profile-icon iq-icon-box rounded-small bg-info-light text-center">
                              <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M17.1107 17.1746L12 22.2853L6.88929 17.1746C3.05893 17.3406 0 20.4746 0 24.3424V24.8567C0 26.2764 1.15179 27.4281 2.57143 27.4281H21.4286C22.8482 27.4281 24 26.2764 24 24.8567V24.3424C24 20.4746 20.9411 17.3406 17.1107 17.1746ZM0.728571 4.27457L1.07143 4.35493V7.4835C0.696429 7.7085 0.428571 8.09957 0.428571 8.571C0.428571 9.021 0.675 9.396 1.02321 9.62636L0.1875 12.9639C0.0964286 13.3335 0.3 13.7139 0.594643 13.7139H2.83393C3.12857 13.7139 3.33214 13.3335 3.24107 12.9639L2.40536 9.62636C2.75357 9.396 3 9.021 3 8.571C3 8.09957 2.73214 7.7085 2.35714 7.4835V4.66564L5.89286 5.51743C5.43214 6.43886 5.14286 7.46743 5.14286 8.571C5.14286 12.3585 8.2125 15.4281 12 15.4281C15.7875 15.4281 18.8571 12.3585 18.8571 8.571C18.8571 7.46743 18.5732 6.43886 18.1071 5.51743L23.2661 4.27457C24.2411 4.03886 24.2411 2.82278 23.2661 2.58707L13.0661 0.122784C12.3696 -0.0432879 11.6357 -0.0432879 10.9393 0.122784L0.728571 2.58171C-0.241071 2.81743 -0.241071 4.03886 0.728571 4.27457Z"
                                    fill="#88DFFF" />
                              </svg>
                           </div>
                           <div class="pl-3">
                              <h5>Milchuer College</h5>
                              <p class="mb-0">Master of Science in Computer Science | 2015</p>
                           </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                           <div class="profile-icon iq-icon-box rounded-small bg-warning-light text-center">
                              <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M23.25 6.46152V7.26922C23.25 7.37632 23.2105 7.47904 23.1402 7.55478C23.0698 7.63051 22.9745 7.67306 22.875 7.67306H21.75V8.27883C21.75 8.61337 21.4981 8.8846 21.1875 8.8846H2.8125C2.50186 8.8846 2.25 8.61337 2.25 8.27883V7.67306H1.125C1.02554 7.67306 0.930161 7.63051 0.859835 7.55478C0.789509 7.47904 0.75 7.37632 0.75 7.26922V6.46152C0.750001 6.38163 0.772007 6.30353 0.813234 6.2371C0.854462 6.17068 0.913058 6.11892 0.981609 6.08837L11.8566 1.64606C11.9484 1.60512 12.0516 1.60512 12.1434 1.64606L23.0184 6.08837C23.0869 6.11892 23.1455 6.17068 23.1868 6.2371C23.228 6.30353 23.25 6.38163 23.25 6.46152V6.46152ZM22.125 21.8077H1.875C1.25367 21.8077 0.75 22.3501 0.75 23.0192V23.8269C0.75 23.934 0.789509 24.0367 0.859835 24.1125C0.930161 24.1882 1.02554 24.2308 1.125 24.2308H22.875C22.9745 24.2308 23.0698 24.1882 23.1402 24.1125C23.2105 24.0367 23.25 23.934 23.25 23.8269V23.0192C23.25 22.3501 22.7463 21.8077 22.125 21.8077ZM4.5 9.69229V19.3846H2.8125C2.50186 19.3846 2.25 19.6558 2.25 19.9904V21H21.75V19.9904C21.75 19.6558 21.4981 19.3846 21.1875 19.3846H19.5V9.69229H16.5V19.3846H13.5V9.69229H10.5V19.3846H7.5V9.69229H4.5Z"
                                    fill="#FFCB99" />
                              </svg>
                           </div>
                           <div class="pl-3">
                              <h5>Beechtown University</h5>
                              <p class="mb-0">Bachelor of Science in Computer Science | 2013</p>
                           </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                           <div class="profile-icon iq-icon-box rounded-small bg-success-light text-center">
                              <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0)">
                                    <path
                                       d="M0 8.39995V18.5999C0 18.9314 0.2685 19.1999 0.6 19.1999H3.6V7.19994H1.2C0.537375 7.19994 0 7.73732 0 8.39995ZM13.5 6.59994H12.6V5.09994C12.6 4.93419 12.4658 4.79994 12.3 4.79994H11.7C11.5343 4.79994 11.4 4.93419 11.4 5.09994V7.49994C11.4 7.66569 11.5343 7.79995 11.7 7.79995H13.5C13.6658 7.79995 13.8 7.66569 13.8 7.49994V6.89994C13.8 6.73419 13.6658 6.59994 13.5 6.59994ZM18.6656 4.20144L12.6656 0.201317C12.4685 0.0700041 12.2369 -6.10352e-05 12 -6.10352e-05C11.7631 -6.10352e-05 11.5315 0.0700041 11.3344 0.201317L5.33438 4.20144C5.17003 4.31101 5.03527 4.45945 4.94206 4.63358C4.84884 4.80772 4.80004 5.00218 4.8 5.19969V19.1999H9.6V13.7999C9.6 13.4684 9.8685 13.1999 10.2 13.1999H13.8C14.1315 13.1999 14.4 13.4684 14.4 13.7999V19.1999H19.2V5.20007C19.2 4.79882 18.9994 4.42382 18.6656 4.20144ZM12 9.59995C10.3433 9.59995 9 8.2567 9 6.59994C9 4.94319 10.3433 3.59994 12 3.59994C13.6568 3.59994 15 4.94319 15 6.59994C15 8.2567 13.6568 9.59995 12 9.59995ZM22.8 7.19994H20.4V19.1999H23.4C23.7315 19.1999 24 18.9314 24 18.5999V8.39995C24 7.73732 23.4626 7.19994 22.8 7.19994Z"
                                       fill="#81F4B2" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip1">
                                       <rect width="24" height="19.2" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                           </div>
                           <div class="pl-3">
                              <h5>South Kellergrove High</h5>
                              <p class="mb-0">Senior High School | 2010</p>
                           </div>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                           <div class="profile-icon iq-icon-box rounded-small bg-info-light text-center">
                              <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M17.1107 17.1746L12 22.2853L6.88929 17.1746C3.05893 17.3406 0 20.4746 0 24.3424V24.8567C0 26.2764 1.15179 27.4281 2.57143 27.4281H21.4286C22.8482 27.4281 24 26.2764 24 24.8567V24.3424C24 20.4746 20.9411 17.3406 17.1107 17.1746ZM0.728571 4.27457L1.07143 4.35493V7.4835C0.696429 7.7085 0.428571 8.09957 0.428571 8.571C0.428571 9.021 0.675 9.396 1.02321 9.62636L0.1875 12.9639C0.0964286 13.3335 0.3 13.7139 0.594643 13.7139H2.83393C3.12857 13.7139 3.33214 13.3335 3.24107 12.9639L2.40536 9.62636C2.75357 9.396 3 9.021 3 8.571C3 8.09957 2.73214 7.7085 2.35714 7.4835V4.66564L5.89286 5.51743C5.43214 6.43886 5.14286 7.46743 5.14286 8.571C5.14286 12.3585 8.2125 15.4281 12 15.4281C15.7875 15.4281 18.8571 12.3585 18.8571 8.571C18.8571 7.46743 18.5732 6.43886 18.1071 5.51743L23.2661 4.27457C24.2411 4.03886 24.2411 2.82278 23.2661 2.58707L13.0661 0.122784C12.3696 -0.0432879 11.6357 -0.0432879 10.9393 0.122784L0.728571 2.58171C-0.241071 2.81743 -0.241071 4.03886 0.728571 4.27457Z"
                                    fill="#88DFFF" />
                              </svg>
                           </div>
                           <div class="pl-3">
                              <h5>Milchuer College</h5>
                              <p class="mb-0">Master of Science in Computer Science | 2015</p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-7 col-md-6">
               <div class="row">
                  <div class="col-md-12 col-lg-6">
                     <div class="card card-block card-stretch card-height">
                        <div class="card-header">
                           <div class="header-title">
                              <h4 class="card-title">Languages</h4>
                           </div>
                        </div>
                        <div class="card-body">
                           <ul class="list-inline p-0 mb-0">
                              <li>
                                 <div class="d-flex align-items-center justify-content-between mb-3 row">
                                    <div class="col-10">
                                       <div class="d-flex align-items-center">
                                          <p class="mb-0 font-size-16 mr-3">English</p>
                                          <div class="iq-progress-bar-linear d-inline-block iq-progress-height mt-1 w-80">
                                             <div class="iq-progress-bar iq-bg-danger">
                                                <span class="bg-danger" data-percent="75"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-2">
                                       <div class="percentage float-right text-danger font-weight-bold">75%
                                       </div>
                                    </div>                                    
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex align-items-center justify-content-between mb-3 row">
                                    <div class="col-10">
                                       <div class="d-flex align-items-center">
                                          <p class="mb-0 font-size-16 mr-3">French</p>
                                          <div class="iq-progress-bar-linear d-inline-block iq-progress-height mt-1 w-80">
                                             <div class="iq-progress-bar iq-bg-primary">
                                                <span class="bg-primary" data-percent="50"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>                                   
                                    <div class="col-2">
                                       <div class="percentage float-right text-primary font-weight-bold">50%
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex align-items-center justify-content-between row">
                                    <div class="col-10">
                                       <div class="d-flex align-items-center">
                                          <p class="mb-0 font-size-16 mr-3">Spanish</p>
                                          <div class="iq-progress-bar-linear d-inline-block iq-progress-height mt-1 w-80">
                                             <div class="iq-progress-bar iq-bg-success">
                                                <span class="bg-success" data-percent="65"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>                                   
                                    <div class="col-2">
                                       <div class="percentage float-right text-success font-weight-bold">65%
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-6">
                     <div class="card card-block card-stretch card-height">
                        <div class="card-header">
                           <div class="header-title">
                              <h4 class="card-title">Social</h4>
                           </div>
                        </div>
                        <div class="card-body">
                           <ul class="list-inline p-0 m-0">
                              <li class="mb-3 d-flex">
                                 <span><i class="lab la-facebook-f text-primary font-size-20 mr-3"></i></span>
                                 <p class="mb-0 font-size-16 line-height">fb.me/nataliedawson</p>
                              </li>
                              <li class="mb-3 d-flex">
                                 <span><i class="lab la-twitter text-info font-size-20 mr-3"></i></span>
                                 <p class="mb-0 font-size-16 line-height">@nataliedawson</p>
                              </li>
                              <li class=" d-flex">
                                 <span><i class="lab la-instagram  text-danger font-size-20 mr-3"></i></span>
                                 <p class="mb-0 font-size-16 line-height">@natalietweets</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="card card-block card-stretch card-height">
                        <div class="card-header">
                           <div class="header-title">
                              <h4 class="card-title">Experience</h4>
                           </div>
                        </div>
                        <div class="card-body">
                           <ul class="list-inline mb-0 p-0">
                              <li class="d-flex align-items-center mb-3">
                                 <span class="bg-info-light rounded-small iq-card-icon-small mr-3">1</span>
                                 <p class="mb-0 font-size-16">Software Engineer at Mathica Labs | 2018 - present</p>
                              </li>
                              <li class="d-flex align-items-center">
                                 <span class="bg-warning-light rounded-small iq-card-icon-small mr-3">2</span>
                                 <p class="mb-0 font-size-16">Junior Software Engineer at Zimcore Solutions | 2015 - 2018</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header">
                     <div class="header-title">
                        <h4 class="card-title">Professional Skills</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="list-inline p-0 mb-0">
                        <li>
                           <div class="d-flex align-items-center justify-content-between mb-4 row">
                              <div class="col-lg-4">
                                 <p class="mb-0 font-size-16">Photoshop</p>
                              </div>
                              <div class="col-lg-8">
                                 <div class="iq-progress-bar bg-primary-light mt-2">
                                    <span class="bg-primary iq-progress progress-1" data-percent="85">
                                       <span class="progress-text-one bg-primary">85%</span>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex align-items-center justify-content-between mb-4 row">
                              <div class="col-lg-4">
                                 <p class="mb-0 font-size-16">Illustrator</p>
                              </div>
                              <div class="col-lg-8">
                                 <div class="iq-progress-bar bg-warning-light mt-2">
                                    <span class="bg-warning iq-progress progress-1" data-percent="65">
                                       <span class="progress-text-one bg-warning">65%</span>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex align-items-center justify-content-between mb-4 row">
                              <div class="col-lg-4">
                                 <p class="mb-0 font-size-16">Adobe XD</p>
                              </div>
                              <div class="col-lg-8">
                                 <div class="iq-progress-bar bg-success-light mt-2">
                                    <span class="bg-success iq-progress progress-1" data-percent="55">
                                       <span class="progress-text-one bg-success">55%</span>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex align-items-center justify-content-between row">
                              <div class="col-lg-4">
                                 <p class="mb-0 font-size-16">Figma</p>
                              </div>
                              <div class="col-lg-8">
                                 <div class="iq-progress-bar bg-info-light mt-2">
                                    <span class="bg-info iq-progress progress-1" data-percent="60">
                                       <span class="progress-text-one bg-info">60%</span>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header">
                     <div class="header-title">
                        <h4 class="card-title">Personal Skills</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="list-inline p-0 m-0">
                        <li class="mb-3">
                           <div class="d-flex align-items-center">
                              <div class="badge badge-primary iq-number">1</div>
                              <div class="ml-4">
                                 <p class="mb-0 font-size-16">Creative spirit</p>
                              </div>
                           </div>
                        </li>
                        <li class="mb-3">
                           <div class="d-flex align-items-center">
                              <div class="badge badge-primary iq-number">2</div>
                              <div class="ml-4">
                                 <p class="mb-0 font-size-16">Reliable and professional</p>
                              </div>
                           </div>
                        </li>
                        <li class="mb-3">
                           <div class="d-flex align-items-center">
                              <div class="badge badge-primary iq-number">3</div>
                              <div class="ml-4">
                                 <p class="mb-0 font-size-16">Time management</p>
                              </div>
                           </div>
                        </li>
                        <li class="mb-3">
                           <div class="d-flex align-items-center">
                              <div class="badge badge-primary iq-number">4</div>
                              <div class="ml-4">
                                 <p class="mb-0 font-size-16">Organized</p>
                              </div>
                           </div>
                        </li>
                        <li class="">
                           <div class="d-flex align-items-center">
                              <div class="badge badge-primary iq-number">5</div>
                              <div class="ml-4">
                                 <p class="mb-0 font-size-16">Organized</p>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4">
               <div class="card card-block card-stretch card-height">
                  <div class="card-header">
                     <div class="header-title">
                        <h4 class="card-title">Contact Information</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="list-inline p-0 m-0 iq-contact-rest">
                        <li class="mb-3 d-flex">
                           <span><i class="mr-3">
                              <svg width="20" class="svg-icon" id="up-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                           </i></span>
                           <p class="mb-0 font-size-16 line-height">505 West Brickyard Rd, CA , USA</p>
                        </li>
                        <li class="mb-3 d-flex">
                           <span><i class="mr-3">
                              <svg width="20" class="svg-icon" id="up-02" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                              </svg>
                           </i></span>
                           <p class="mb-0 font-size-16 line-height">+91 01234 56789</p>
                        </li>
                        <li class="mb-3 d-flex">
                           <span><i class="mr-3">
                              <svg width="20" class="svg-icon" id="up-03" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                              </svg>
                           </i></span>
                           <p class="mb-0 font-size-16 line-height">john@property.com</p>
                        </li>
                        <li class="mb-3 d-flex">
                           <a href="javascript:void(0);" class="d-flex">
                              <i class="mr-3">
                                 <svg width="20" class="svg-icon" id="up-04" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                 </svg>
                              </i>
                              <p class="mb-0 font-size-16 line-height">http://www.yourwebsite.com </p>
                           </a>
                        </li>
                        <li class="d-flex">
                           <span><i class="mr-3">
                              <svg width="20" class="svg-icon" id="up-05" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                           </i></span>
                           <p class="mb-0 font-size-16 line-height">9486 Roberts St.
                              Monroe Township.</p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="text-secondary mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">NotePlus</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('js/backend-bundle.min.js')}}"></script>
    
    <!-- Flextree Javascript-->
    <script src="{{asset('js/flex-tree.min.js')}}"></script>
    <script src="{{asset('js/tree.js')}}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{asset('js/table-treeview.js')}}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{asset('js/sweetalert.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('js/chart-custom.js')}}"></script>
    
    <!-- slider JavaScript -->
    <script src="{{asset('js/slider.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{asset('js/app.js')}}"></script>
  </body>

<!-- Mirrored from templates.iqonic.design/note-plus/html/app/user-profile by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2025 05:58:25 GMT -->
</html>