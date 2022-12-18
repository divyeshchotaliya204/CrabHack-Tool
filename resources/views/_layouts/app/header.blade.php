<!-- BEGIN #header -->
<div id="header" class="app-header">
    <!-- BEGIN mobile-toggler -->
    <div class="mobile-toggler">
        <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
    <!-- END mobile-toggler -->

    <!-- BEGIN brand -->
    <div class="brand">
        <div class="desktop-toggler">
            <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>

        <a href="index.html" class="brand-logo">
            <span style="font-size: 0.95em; font-weight: bold;">LIGALIS<span style="color:orange;">.</span></span>
        </a>
    </div>
    <!-- END brand -->

    <!-- BEGIN menu -->
    <div class="menu">
        <form class="menu-search" method="POST" name="header_search_form">
            <div class="menu-search-icon"><i class="fa fa-search"></i></div>
            <div class="menu-search-input">
                <input type="text" class="form-control" placeholder="Search in ZILAW & Co....." />
            </div>
        </form>
        <div class="menu-item">
            <a href="help_center.html" class="menu-link">
                <div class="menu-icon" data-toggle="tooltip" data-placement="top" title="Help Center"><i
                        class="fas fa-medkit nav-icon text-danger"></i>
                </div>
            </a>
        </div>
        <div class="menu-item dropdown">

            <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                <div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
                <div class="menu-label">3</div>
            </a>

            <div class="dropdown-menu dropdown-menu-end dropdown-notification">
                <h6 class="dropdown-header text-gray-900 mb-1">Notifications</h6>
                <a href="#" class="dropdown-notification-item">
                    <div class="dropdown-notification-icon">
                        <i class="fas fa-calendar-alt fa-lg fa-fw text-danger"></i>
                    </div>
                    <div class="dropdown-notification-info">
                        <div class="title">Your deadline 'Plaintiff to file affidavit' is coming up soon!</div>
                        <div class="time">just now</div>
                    </div>
                    <div class="dropdown-notification-arrow">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <a href="#" class="dropdown-notification-item">
                    <div class="dropdown-notification-icon">
                        <i class="fas fa-folder-open fa-lg fa-fw text-muted"></i>
                    </div>
                    <div class="dropdown-notification-info">
                        <div class="title">3 new matters account created</div>
                        <div class="time">2 days ago</div>
                    </div>
                    <div class="dropdown-notification-arrow">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <a href="#" class="dropdown-notification-item">
                    <div class="dropdown-notification-icon">
                        <i class="fas fa-file-invoice-dollar fa-lg fa-fw text-success"></i>
                    </div>
                    <div class="dropdown-notification-info">
                        <div class="title">Your invoice #0012 has been approved</div>
                        <div class="time">5 days ago</div>
                    </div>
                    <div class="dropdown-notification-arrow">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <a href="#" class="dropdown-notification-item">
                    <div class="dropdown-notification-icon">
                        <i class="far fa-address-card fa-lg fa-fw text-success"></i>
                    </div>
                    <div class="dropdown-notification-info">
                        <div class="title">1 new contact is added.</div>
                        <div class="time">10 minutes ago</div>
                    </div>
                    <div class="dropdown-notification-arrow">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="p-2 text-center mb-n1">
                    <a href="notifications.html" class="text-gray-800 text-decoration-none">See all</a>
                </div>
            </div>


        </div>
        <div class="menu-item dropdown">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                <div class="menu-img online">
                    <img src="assets/img/user/user.jpg" alt="" class="mw-100 mh-100 rounded-circle" />
                </div>
                <div class="menu-text">Michael Douglas</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end me-lg-3">
                <a class="dropdown-item d-flex align-items-center" href="user_show.html">Profile <i
                        class="fa fa-user-circle fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                <a class="dropdown-item d-flex align-items-center" href="firm_setting.html">My Practice <i
                        class="fas fa-landmark fa-fw ms-auto text-gray-400 fs-16px"></i></a>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item d-flex align-items-center">Log Out <i
                            class="fa fa-toggle-off fa-fw ms-auto text-gray-400 fs-16px"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- END menu -->
</div>
<!-- END #header -->
