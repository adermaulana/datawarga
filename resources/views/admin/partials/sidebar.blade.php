        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="/admin" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="/admin" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/admin">
                                <i class=" ri-home-3-line"></i> <span data-key="rt">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/admin/warga">
                                <i class="ri-database-2-fill"></i> <span data-key="datawarga">Melihat Data Warga</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/admin/keluarga">
                                <i class="ri-database-2-fill"></i> <span data-key="datakeluarga">Melihat Data Keluarga</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/admin/mutasi">
                                <i class="ri-database-2-fill"></i> <span data-key="datamutasi">Melihat Data Mutasi</span>
                            </a>
                        </li>
                        <li class="menu-title"><span data-key="t-menu">Membuat Akun</span></li>
                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/admin/rt">
                                <i class="ri-inbox-archive-line"></i> <span data-key="rt">Membuat Akun RT</span>
                            </a>
                        </li>

                        

                        <!-- ================================================================================ -->
                        <li class="menu-title"><span data-key="t-lain">Lain-lain</span></li>
                        <li class="nav-item">
                                <a class="nav-link menu-link" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ri-reply-line"></i> <span data-key="logout">Logout</span>
                                </a>
                                <form id="logout-form" action="/logout" method="post" style="display: none;">
                                    @csrf
                                </form>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->