<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-dark-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="28">
            </span>
        </a>

        <a href="index" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="30">
            </span>
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-light-sm.png') }}" alt="" height="26">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Dashboard</li>

               <li>
                    <a href="/">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Trang Chủ</span>
                        <span class="badge rounded-pill bg-primary">2</span>
                    </a>
                    
                </li>

                <li class="menu-title" data-key="t-applications">Sản Phẩm</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-shopping-bag icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Mua Tài Khoản</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox" data-key="t-inbox">Inbox</a></li>
                        <li><a href="email-read" data-key="t-read-email">Read Email</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-file-blank icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Mua Tài Liệu</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox" data-key="t-inbox">Inbox</a></li>
                        <li><a href="email-read" data-key="t-read-email">Read Email</a></li>
                    </ul>
                </li>
               
                <li class="menu-title" data-key="t-applications">Nạp Tiền</li>
                <li>
                    <a href="/ngnahang">
                        <i class="bx bxs-bank icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Ngân Hàng</span>
                    </a>
                    
                </li>
                <li>
                    <a href="/momo">
                        <i class="bx bx-file-blank icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Hóa Đơn</span>
                    </a>
                    
                </li>
                <li>
                    <a href="/momo">
                        <i class="bx bx-money icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Nạp Thẻ</span>
                    </a>
                    
                </li>
                <li class="menu-title" data-key="t-applications">Tài Khoản</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                    <i class="bx bx-user-circle icon nav-icon"></i>

                        <span class="menu-item" data-key="t-email">Thông Tin</span>
                    </a>
                    <a href="javascript: void(0);" class="has-arrow">
                   
                    <i class=" bx bx-log-out icon nav-icon"></i>

                        <span class="menu-item" data-key="t-email">Đăng Xuất</span>
                    </a>
                </li>
             
                <li class="menu-title" data-key="t-applications">Khác</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-envelope icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Công Cụ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox" data-key="t-inbox">Inbox</a></li>
                        <li><a href="email-read" data-key="t-read-email">Read Email</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/momo">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Tài Liệu Api</span>
                    </a>
                    
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-share-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-multi-level">Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li class="disabled"><a href="#" data-key="t-disabled-item">Disabled Item</a></li>
                        <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
                                <li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->