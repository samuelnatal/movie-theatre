        <!-- SIDENAVBAR -->
        <nav id="sidebar">
            <!-- Sidebar Scroll Container -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">

                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- Side User -->
                    <a class="link-effect font-w700" href="{{ url('/dashboard') }}">
                        <div class="content-side content-side-full   align-parent">
                            <img class="" src="{{ url('/img/logo.png') }}" alt="" />
                        </div>
                    </a>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li class="open">
                                <a href="{{ url('/dashboard') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboards</span></a>
                            </li>

                            <!-- <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden"></span></li> -->
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu"><i class="si si-puzzle"></i><span class="sidebar-mini-hide"></span>MOVIES</a>
                                <ul>
                                    <li>
                                        <a href="{{ url('/addform') }}">Add movie</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/available') }}">Manage movies</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu"><i class="si si-puzzle"></i><span class="sidebar-mini-hide"></span>SCHEDULES</a>
                                <ul>
                                    <li>
                                        <a href="{{ url('/schedules/create') }}">Add schedule</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/schedules') }}">Manage schedules</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="open">
                                <a href="{{ url('/transactions') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Transactions</span></a>
                            </li>

                            <li>
                                <a href="{{ url('/customers') }}"><i class="si si-vector"></i><span class="sidebar-mini-hide">Customers</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </div>
            <!-- END Sidebar Scroll Container -->
        </nav>

        <!-- HEADER -->

        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="content-header-section">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="content-header-section">
                    <!-- User Dropdown -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}<i class="fa fa-angle-down ml-5"></i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                            <a class="dropdown-item" href="admin-profile.php">
                                <i class="si si-user mr-5"></i> Profile
                            </a>

                            <div class="dropdown-divider"></div>


                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    <i class="si si-logout mr-5"></i>{{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Loader -->
            <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header content-header-fullrow text-center">
                    <div class="content-header-item">
                        <i class="fa fa-sun-o fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>