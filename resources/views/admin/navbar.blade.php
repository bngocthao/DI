
    <!-- Pre-loader start -->
    {{-- <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper ">

            <nav class="navbar header-navbar pcoded-header ">
                <div class="navbar-wrapper ">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img class="img-fluid" src="..\files\assets\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                        
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        {{-- <img src="#" class="img-radius" alt="User-Profile-Image"> --}}
                                        <span>{{$user->ho_ten}}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        {{-- <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li> --}}
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Chi tiết
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('logout')}}">
                                                <i class="feather icon-log-out"></i> Đăng xuất
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->

            <!-- Sidebar inner chat start-->

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper ">
                    <nav class="pcoded-navbar">

                        {{-- navbar menu --}}
                        <div class="pcoded-inner-navbar main-menu ">
                            <div class="pcoded-navigatio-lavel">HỆ THỐNG QUẢN LÝ</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                            </svg>
                                        </span>
                                        <span class="pcoded-mtext">QUẢN LÝ NGƯỜI DÙNG</span>
                                    </a>    
                                        <ul class="pcoded-submenu">
                                            <li class="active">
                                                <a href={{route('admin.users.index')}}>
                                                    <span class="pcoded-mtext">Danh Sách Người Dùng</span>
                                                </a>
                                            </li>
                                        </ul>
                                        
                                </li>

                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                            </svg>
                                        </span>
                                        <span class="pcoded-mtext">QUẢN LÝ ĐƠN XIN ĐIỂM</span>
                                    </a>    
                                        <ul class="pcoded-submenu">
                                            {{-- <li class="active">
                                                <a href="#">
                                                    <span class="pcoded-mtext">Chỉnh Sửa Mẫu Đơn</span>
                                                </a>
                                            </li> --}}
                                            <li class="active">
                                                <a href="#">
                                                    <span class="pcoded-mtext">Danh Sách Đơn</span>
                                                </a>
                                            </li>
                                        </ul>
                                        
                                </li>

                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                            </svg>
                                        </span>
                                        <span class="pcoded-mtext">QUẢN LÝ ĐƠN VỊ</span>
                                    </a>    
                                        <ul class="pcoded-submenu">
                                            {{-- <li class="active">
                                                <a href="#">
                                                    <span class="pcoded-mtext">Chỉnh Sửa Mẫu Đơn</span>
                                                </a>
                                            </li> --}}
                                            <li class="active">
                                                <a href="#">
                                                    <span class="pcoded-mtext">Danh Sách Đơn Vị</span>
                                                </a>
                                            </li>
                                        </ul>
                                        
                                </li>

                            </ul>
                        </div>
                        {{-- navbar menu end --}}

                    </nav>
                    <div class="pcoded-content ">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">




