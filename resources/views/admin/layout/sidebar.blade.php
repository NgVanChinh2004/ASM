<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo asset('admin/assets/images/logo-sm.png'); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo asset('admin/assets/images/logo-dark.png'); ?>" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo asset('admin/assets/images/logo-sm.png'); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo asset('admin/assets/images/logo-light.png'); ?>" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title">
                        <span data-key="t-menu">
                            Menu
                        </span>
                </li>
                {{-- quản trị tin --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Quản trị tin</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.dashboard') }}" class="nav-link" >Danh sách tin</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.dashboard.add') }}" class="nav-link"> Thêm mới tin </a>
                            </li>
                        </ul>
                    </div>
                </li> 
                {{-- quản trị loại tin --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span data-key="t-apps">Quản trị loại tin</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.newCategory.list') }}" class="nav-link" data-key="t-chat">  Danh sách loại tin </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.newCategory.add') }}" class="nav-link" data-key="t-chat">  Thêm mới loại tin </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- quản trị user --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Quản trị người dùng</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.user.list') }}" class="nav-link"
                                    data-key="t-horizontal">Danh sách người dùng</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.user.add') }}" class="nav-link"
                                    data-key="t-detached">Thêm mới người dùng</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>