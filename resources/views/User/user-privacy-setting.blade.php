@extends('layouts.app')
@section('content') 
        <div class="container-fluid">
          <div class="desktop-header">
              <div class="card card-block topnav-left">
                  <div class="card-body d-flex align-items-center">
                      <div class="d-flex justify-content-between">
                          <h4 class="text-capitalize">User Privacy Setting</h4>
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
                                                          <img class="avatar-50 rounded-small" src="{{url('images/user/01.jpg')}}" alt="01">
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
                                                          <img class="avatar-50 rounded-small" src="{{url('images/user/02.jpg')}}" alt="02">
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
                                                          <img class="avatar-50 rounded-small" src="{{url('images/user/03.jpg')}}" alt="03">
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
                                                          <img class="avatar-50 rounded-small" src="{{url('images/user/01.jpg')}}" alt="01">
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
                                                          <img class="avatar-50 rounded-small" src="{{url('images/user/02.jpg')}}" alt="02">
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
                                                          <img class="avatar-50 rounded-small" src="{{url('images/user/03.jpg')}}" alt="03">
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
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Privacy Setting</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="acc-privacy">
                                <div class="data-privacy">
                                    <h4 class="mb-2">Account Privacy</h4>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="acc-private">
                                        <label class="custom-control-label privacy-status mb-2" for="acc-private">Private
                                            Account</label>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <hr>
                                <div class="data-privacy">
                                    <h4 class="mb-2">Activity Status</h4>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="activety" checked="">
                                        <label class="custom-control-label privacy-status mb-2" for="activety">Show Activity
                                            Status</label>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of
                                        a page when looking at its layout.</p>
                                </div>
                                <hr>
                                <div class="data-privacy">
                                    <h4 class="mb-2"> Story Sharing </h4>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="story" checked="">
                                        <label class="custom-control-label privacy-status mb-2" for="story">Allow
                                            Sharing</label>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of
                                        a page when looking at its layout.</p>
                                </div>
                                <hr>
                                <div class="data-privacy">
                                    <h4 class="mb-2"> Photo Of You </h4>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="automatically" name="customRadio0" class="custom-control-input"
                                            checked="">
                                        <label class="custom-control-label" for="automatically"> Add Automatically</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-2">
                                        <input type="radio" id="manualy" name="customRadio0" class="custom-control-input">
                                        <label class="custom-control-label" for="manualy"> Add Manualy</label>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of
                                        a page when looking at its layout.</p>
                                </div>
                                <hr>
                                <div class="data-privacy">
                                    <h4 class="mb-2"> Your Profile </h4>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="public" name="customRadio1" class="custom-control-input"
                                            checked="">
                                        <label class="custom-control-label" for="public"> Public </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="friend" name="customRadio1" class="custom-control-input">
                                        <label class="custom-control-label" for="friend"> Friend </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="spfriend" name="customRadio1" class="custom-control-input">
                                        <label class="custom-control-label" for="spfriend"> Specific Friend </label>
                                    </div>
                                    <div class="custom-control custom-radio mb-2">
                                        <input type="radio" id="onlyme" name="customRadio1" class="custom-control-input">
                                        <label class="custom-control-label" for="onlyme"> Only Me </label>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of
                                        a page when looking at its layout.</p>
                                </div>
                                <hr>
                                <div class="data-privacy">
                                    <h4 class="mb-2"> Login Notification </h4>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="enable" name="customRadio2" class="custom-control-input">
                                        <label class="custom-control-label" for="enable"> Enable </label>
                                    </div>
                                    <div class="custom-control custom-radio mb-2">
                                        <input type="radio" id="disable" name="customRadio2" class="custom-control-input"
                                            checked="">
                                        <label class="custom-control-label" for="disable"> Disable </label>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of
                                        a page when looking at its layout.</p>
                                </div>
                                <hr>
                                <div class="data-privacy">
                                    <h4 class="mb-2">Privacy Help</h4>
                                    <a href="#"><i class="ri-customer-service-2-line mr-2"></i>Support</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection