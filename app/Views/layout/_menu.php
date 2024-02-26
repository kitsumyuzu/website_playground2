        <div class="container-scroller">
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="/Home/"><img src="<?= base_url('/assets/images/items') ?>/logo-brand-expand.png" class="mr-2" alt="logo"></a>
                    <a class="navbar-brand brand-logo-mini" href="/Home/"><img src="<?= base_url('/assets/images/items') ?>/logo-brand-collapse.png" alt="logo"></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown"><img src="<?= base_url('assets/images/'.($settings -> profile ? $settings -> profile : 'default-profile.png')) ?>" alt="profile"/></a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="ti-settings text-primary"></i>Settings
                                </a>
                                <a href="<?= base_url('/home/authentication_logout') ?>" class="dropdown-item">
                                    <i class="ti-power-off text-primary"></i>Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </nav>

            <div class="container-fluid page-body-wrapper">

                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <!-- Start: Menu -->
                        <ul class="nav">

                            <li class="nav-item">
                                <a class="nav-link active" href="/home/dashboard/?">
                                    <i class="mdi mdi-home menu-icon"></i>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </li>

                            <hr>

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="mdi mdi-file menu-icon"></i>
                                    <span class="menu-title">Laporan</span>
                                </a>
                            </li>

                            <hr>

                            <li class="nav-item">
                                <a class="nav-link" href="/Home/user">
                                    <i class="mdi mdi-account-key menu-icon"></i>
                                    <span class="menu-title">User</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="mdi mdi-settings menu-icon"></i>
                                    <span class="menu-title">Settings</span>
                                </a>
                            </li>

                        </ul>
                    <!-- End: Menu -->
                </nav>