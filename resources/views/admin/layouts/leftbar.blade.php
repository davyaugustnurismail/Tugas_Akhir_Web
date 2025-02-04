            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <a href="index.html" class="logo logo-large"><img src="{{asset('images/logo.svg')}}"
                            class="img-fluid" alt="logo"></a>
                    <a href="index.html" class="logo logo-small"><img src="{{asset('images/small_logo.svg')}}"
                            class="img-fluid" alt="logo"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        <li>
                            <a href="javaScript:void();">
                                <img src="{{asset('images/svg-icon/dashboard.svg')}}" class="img-fluid"
                                    alt="dashboard"><span>Dashboard</span><i
                                    class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="index.html">CRM</a></li>
                                <li><a href="dashboard-ecommerce.html">eCommerce</a></li>
                                <li><a href="dashboard-hospital.html">Hospital</a></li>
                                <li><a href="dashboard-crypto.html">Crypto</a></li>
                                <li><a href="dashboard-school.html">School</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('account.index')}}">
                                <img src="{{asset('images/svg-icon/ecommerce.svg')}}" class="img-fluid"
                                    alt="account"><span>Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.note.index')}}">
                                <img src="{{asset('images/svg-icon/ecommerce.svg')}}" class="img-fluid"
                                    alt="note"><span>Note</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->