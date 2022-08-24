<div id="preloader"><div class="spinner"><div class="spinner-a"></div><div class="spinner-b"></div></div></div>
    <div class="nav-header">
        <a href="{{ route('dashboard_user') }}" class="brand-logo">
            <span class="logo-abbr">D</span>
            <span class="logo-compact">Y-dashboard</span>
            <span class="brand-title">Y-dashboard</span>
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
    </div>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="header-left">
                <div class="nav-item dropdown search_bar">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </a>
                    <div class="dropdown-menu">
                        <form class="form-inline">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end">

                <ul class="navbar-nav header-right">
                    <li class="nav-item border-0">
                        <a class="btn btn-primary create-event-btn" href="{{ route('event.create') }}" target="_blank">Create Event</a>
                    </li>
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-bell"></i>
                            <span class="badge badge-primary">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">
                                <h5 class="notification_title">Notifications</h5>
                            </div>
                            <ul class="list-unstyled">
                                <li class="media dropdown-item">
                                    <span class="text-primary"><i class="mdi mdi-chart-areaspline mr-3"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <div class="d-flex justify-content-between">
                                                <h5>New order has been received</h5>
                                            </div>
                                            <p class="m-0">2 hours ago</p>
                                        </a>
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </li>
                                <li class="media dropdown-item">
                                    <span class="text-success"><i class="mdi mdi-chart-pie mr-3"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <div class="d-flex justify-content-between">
                                                <h5>New customer is registered</h5>
                                            </div>
                                            <p class="m-0">3 hours ago</p>
                                        </a>
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </li>
                                <li class="media dropdown-item">
                                    <span class="text-warning"><i class="mdi mdi-file-document mr-3"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <div class="d-flex justify-content-between">
                                                <h5>New file has been uploaded</h5>
                                            </div>
                                            <p class="m-0">3 hours ago</p>
                                        </a>
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </li>
                            </ul>
                            <a class="all-notification" href="#">All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('assets/images/new1.jpg') }}" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" enctype="multipart/form-data"    >
                            <div class="dropdown-profile-header" >
                                <img src="{{ asset('assets/images/new1.jpg') }}" alt="">
                                <span class="avatar-name ml-2">Hello! Yassine</span>
                            </div>
                            <a href="{{ route('profile') }}" class="dropdown-item">
                                <i class="mdi mdi-account"></i>
                                <span>Profile</span>
                            </a>
                            <a href="{{ route('ticket.create') }}" class="dropdown-item">
                                <i class="mdi mdi-ticket"></i>
                                <span>Create Ticket</span>
                            </a>
                            <a href="app-calender.html" class="dropdown-item">
                                <i class="mdi mdi-calendar-check"></i>
                                <span>Calendar</span>
                            </a>
                            <a href="email-inbox.html" class="dropdown-item">
                                <i class="mdi mdi-email"></i>
                                <span>Inbox</span>
                            </a>
                            <a href="{{ route('logout') }}" class="dropdown-item">
                                <i class="mdi mdi-power"></i>
                                <span>logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
