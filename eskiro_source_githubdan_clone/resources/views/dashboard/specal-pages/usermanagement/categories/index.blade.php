    @extends('layouts.master')

    @section('content')
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                                <span class="align-middle d-none d-sm-inline-block">English</span> <i
                                    class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="javascript: void(0);" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>

                                <div style="max-height: 230px;" data-simplebar="">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle"
                                                alt="">
                                        </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle"
                                                alt="">
                                        </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list d-none d-sm-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-view-apps noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                                <span>G Suite</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->
                                </div>

                            </div>
                        </li>

                        <li class="notification-list">
                            <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                <i class="dripicons-gear noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Soeng Souy</span>
                                    <span class="account-position">Founder</span>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lifebuoy me-1"></i>
                                    <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-outline me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control dropdown-toggle" placeholder="Search..."
                                    id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn-primary" type="submit">Search</button>
                            </div>
                        </form>

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg"
                                            alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg"
                                            alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xxl-8">
                            <!-- start page title -->
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <div class="app-search">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <span class="mdi mdi-magnify search-icon"></span>
                                                <button class="input-group-text btn-secondary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class='uil uil-sort-amount-down'></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Due Date</a>
                                                    <a class="dropdown-item" href="#">Added Date</a>
                                                    <a class="dropdown-item" href="#">Assignee</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <h4 class="page-title">Tasks <a href="#" class="btn btn-success btn-sm ms-3">Add New</a>
                                </h4>
                            </div>
                            <!-- end page title -->

                            <!-- tasks panel -->
                            <div class="mt-2">
                                <h5 class="m-0 pb-2">
                                    <a class="text-dark" data-bs-toggle="collapse" href="#todayTasks" role="button"
                                        aria-expanded="false" aria-controls="todayTasks">
                                        <i class='uil uil-angle-down font-18'></i>Today <span class="text-muted">(10)</span>
                                    </a>
                                </h5>

                                <div class="collapse show" id="todayTasks">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <!-- task -->
                                            <div class="row justify-content-sm-between">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="task1">
                                                        <label class="form-check-label" for="task1">
                                                            Draft the new contract document for sales team
                                                        </label>
                                                    </div> <!-- end checkbox -->
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="d-flex justify-content-between">
                                                        <div id="tooltip-container">
                                                            <img src="assets/images/users/avatar-9.jpg" alt="image"
                                                                class="avatar-xs rounded-circle me-1"
                                                                data-bs-container="#tooltip-container"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Assigned to Arya S">
                                                        </div>
                                                        <div>
                                                            <ul class="list-inline font-13 text-end">
                                                                <li class="list-inline-item">
                                                                    <i class='uil uil-schedule font-16 me-1'></i> Today 10am
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-align-alt font-16 me-1'></i> 3/7
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-comment-message font-16 me-1'></i> 21
                                                                </li>
                                                                <li class="list-inline-item ms-2">
                                                                    <span class="badge badge-danger-lighten p-1">High</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> <!-- end .d-flex-->
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end task -->

                                            <!-- task -->
                                            <div class="row justify-content-sm-between mt-2">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="task2">
                                                        <label class="form-check-label" for="task2">
                                                            iOS App home page
                                                        </label>
                                                    </div> <!-- end checkbox -->
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="d-flex justify-content-between">
                                                        <div id="tooltip-container1">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle me-1"
                                                                data-bs-container="#tooltip-container1"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Assigned to James B">
                                                        </div>
                                                        <div>
                                                            <ul class="list-inline font-13 text-end">
                                                                <li class="list-inline-item">
                                                                    <i class='uil uil-schedule font-16 me-1'></i> Today 4pm
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-align-alt font-16 me-1'></i> 2/7
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-comment-message font-16 me-1'></i> 48
                                                                </li>
                                                                <li class="list-inline-item ms-2">
                                                                    <span class="badge badge-danger-lighten p-1">High</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> <!-- end .d-flex-->
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end task -->

                                            <!-- task -->
                                            <div class="row justify-content-sm-between mt-2">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="task3">
                                                        <label class="form-check-label" for="task3">
                                                            Write a release note
                                                        </label>
                                                    </div> <!-- end checkbox -->
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="d-flex justify-content-between">
                                                        <div id="tooltip-container2">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="image"
                                                                class="avatar-xs rounded-circle me-1"
                                                                data-bs-container="#tooltip-container2"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Assigned to Kevin C">
                                                        </div>
                                                        <div>
                                                            <ul class="list-inline font-13 text-end mb-0">
                                                                <li class="list-inline-item">
                                                                    <i class='uil uil-schedule font-16 me-1'></i> Today 6pm
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-align-alt font-16 me-1'></i> 18/21
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-comment-message font-16 me-1'></i> 73
                                                                </li>
                                                                <li class="list-inline-item ms-2">
                                                                    <span class="badge badge-info-lighten p-1">Medium</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> <!-- end .d-flex-->
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end task -->
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card -->
                                </div> <!-- end .collapse-->
                            </div> <!-- end .mt-2-->

                            <!-- upcoming tasks -->
                            <div class="mt-4">

                                <h5 class="m-0 pb-2">
                                    <a class="text-dark" data-bs-toggle="collapse" href="#upcomingTasks" role="button"
                                        aria-expanded="false" aria-controls="upcomingTasks">
                                        <i class='uil uil-angle-down font-18'></i>Upcoming <span
                                            class="text-muted">(5)</span>
                                    </a>
                                </h5>

                                <div class="collapse show" id="upcomingTasks">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <!-- task -->
                                            <div class="row justify-content-sm-between">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="task4">
                                                        <label class="form-check-label" for="task4">
                                                            Invite user to a project
                                                        </label>
                                                    </div> <!-- end checkbox -->
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="d-flex justify-content-between">
                                                        <div id="tooltip-container3">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle me-1"
                                                                data-bs-container="#tooltip-container3"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Assigned to James B">
                                                        </div>
                                                        <div>
                                                            <ul class="list-inline font-13 text-end">
                                                                <li class="list-inline-item">
                                                                    <i class='uil uil-schedule font-16 me-1'></i> Tomorrow
                                                                    7am
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-align-alt font-16 me-1'></i> 1/12
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-comment-message font-16 me-1'></i> 36
                                                                </li>
                                                                <li class="list-inline-item ms-2">
                                                                    <span class="badge badge-danger-lighten p-1">High</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> <!-- end .d-flex-->
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end task -->

                                            <!-- task -->
                                            <div class="row justify-content-sm-between mt-2">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="task5">
                                                        <label class="form-check-label" for="task5">
                                                            Enable analytics tracking
                                                        </label>
                                                    </div> <!-- end checkbox -->
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="d-flex justify-content-between">
                                                        <div id="tooltip-container4">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle me-1"
                                                                data-bs-container="#tooltip-container4"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Assigned to James B">
                                                        </div>
                                                        <div>
                                                            <ul class="list-inline font-13 text-end">
                                                                <li class="list-inline-item">
                                                                    <i class='uil uil-schedule font-16 me-1'></i> 27 Aug
                                                                    10am
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-align-alt font-16 me-1'></i> 13/72
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-comment-message font-16 me-1'></i> 211
                                                                </li>
                                                                <li class="list-inline-item ms-2">
                                                                    <span class="badge badge-success-lighten p-1">Low</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> <!-- end .d-flex-->
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end task -->

                                            <!-- task -->
                                            <div class="row justify-content-sm-between mt-2">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="task6">
                                                        <label class="form-check-label" for="task6">
                                                            Code HTML email template
                                                        </label>
                                                    </div> <!-- end checkbox -->
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="d-flex justify-content-between">
                                                        <div id="tooltip-container5">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="image"
                                                                class="avatar-xs rounded-circle me-1"
                                                                data-bs-container="#tooltip-container5"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Assigned to Edward S">
                                                        </div>
                                                        <div>
                                                            <ul class="list-inline font-13 text-end mb-0">
                                                                <li class="list-inline-item">
                                                                    <i class='uil uil-schedule font-16 me-1'></i> No Due
                                                                    Date
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-align-alt font-16 me-1'></i> 0/7
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-comment-message font-16 me-1'></i> 0
                                                                </li>
                                                                <li class="list-inline-item ms-2">
                                                                    <span class="badge badge-info-lighten p-1">Medium</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> <!-- end .d-flex-->
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end task -->
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card -->
                                </div> <!-- end collapse-->
                            </div>
                            <!-- end upcoming tasks -->

                            <!-- start other tasks -->
                            <div class="mt-4 mb-4">
                                <h5 class="m-0 pb-2">
                                    <a class="text-dark" data-bs-toggle="collapse" href="#otherTasks" role="button"
                                        aria-expanded="false" aria-controls="otherTasks">
                                        <i class='uil uil-angle-down font-18'></i>Other <span class="text-muted">(3)</span>
                                    </a>
                                </h5>

                                <div class="collapse show" id="otherTasks">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <!-- task -->
                                            <div class="row justify-content-sm-between">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="task7">
                                                        <label class="form-check-label" for="task7">
                                                            Coordinate with business development
                                                        </label>
                                                    </div> <!-- end checkbox -->
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="d-flex justify-content-between">
                                                        <div id="tooltip-container6">
                                                            <img src="assets/images/users/avatar-9.jpg" alt="image"
                                                                class="avatar-xs rounded-circle me-1"
                                                                data-bs-container="#tooltip-container6"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Assigned to Arya S">
                                                        </div>
                                                        <div>
                                                            <ul class="list-inline font-13 text-end">
                                                                <li class="list-inline-item">
                                                                    <i class='uil uil-schedule font-16 me-1'></i> Today 10am
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-align-alt font-16 me-1'></i> 5/14
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-comment-message font-16 me-1'></i> 71
                                                                </li>
                                                                <li class="list-inline-item ms-2">
                                                                    <span class="badge badge-info-lighten p-1">Medium</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> <!-- end .d-flex-->
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end task -->

                                            <!-- task -->
                                            <div class="row justify-content-sm-between mt-2">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="task8">
                                                        <label class="form-check-label" for="task8">
                                                            Kanban board design
                                                        </label>
                                                    </div> <!-- end checkbox -->
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="d-flex justify-content-between">
                                                        <div id="tooltip-container7">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle me-1"
                                                                data-bs-container="#tooltip-container7"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Assigned to James B">
                                                        </div>
                                                        <div>
                                                            <ul class="list-inline font-13 text-end">
                                                                <li class="list-inline-item">
                                                                    <i class='uil uil-schedule font-16 me-1'></i> No Due
                                                                    Date
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-align-alt font-16 me-1'></i> 0/8
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-comment-message font-16 me-1'></i> 0
                                                                </li>
                                                                <li class="list-inline-item ms-2">
                                                                    <span class="badge badge-info-lighten p-1">Medium</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> <!-- end .d-flex-->
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end task -->

                                            <!-- task -->
                                            <div class="row justify-content-sm-between mt-2">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="task9">
                                                        <label class="form-check-label" for="task9">
                                                            Code HTML email template for sales outreach
                                                        </label>
                                                    </div> <!-- end checkbox -->
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="d-flex justify-content-between">
                                                        <div id="tooltip-container8">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="image"
                                                                class="avatar-xs rounded-circle me-1"
                                                                data-bs-container="#tooltip-container8"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Assigned to Gary H">
                                                        </div>
                                                        <div>
                                                            <ul class="list-inline font-13 text-end mb-0">
                                                                <li class="list-inline-item">
                                                                    <i class='uil uil-schedule font-16 me-1'></i> 10 Sep 3pm
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-align-alt font-16 me-1'></i> 0/58
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <i class='uil uil-comment-message font-16 me-1'></i> 9
                                                                </li>
                                                                <li class="list-inline-item ms-2">
                                                                    <span class="badge badge-success-lighten p-1">Low</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> <!-- end .d-flex-->
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end task -->
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card -->
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <!-- task details -->
                        <div class="col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown card-widgets">
                                        <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class='uil uil-ellipsis-h'></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class='uil uil-file-upload me-1'></i>Attachment
                                            </a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class='uil uil-edit me-1'></i>Edit
                                            </a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class='uil uil-file-copy-alt me-1'></i>Mark as Duplicate
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                <i class='uil uil-trash-alt me-1'></i>Delete
                                            </a>
                                        </div> <!-- end dropdown menu-->
                                    </div> <!-- end dropdown-->

                                    <div class="form-check float-start">
                                        <input type="checkbox" class="form-check-input" id="completedCheck">
                                        <label class="form-check-label" for="completedCheck">
                                            Mark as completed
                                        </label>
                                    </div> <!-- end form-check-->

                                    <hr class="mt-4 mb-2">

                                    <div class="row">
                                        <div class="col">

                                            <h4>Draft the new contract document for sales team</h4>

                                            <div class="row">
                                                <div class="col-6">
                                                    <!-- assignee -->
                                                    <p class="mt-2 mb-1 text-muted">Assigned To</p>
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="Arya S"
                                                            class="rounded-circle me-2" height="24">
                                                        <div>
                                                            <h5 class="mt-1 font-14">
                                                                Arya Stark
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- end assignee -->
                                                </div> <!-- end col -->

                                                <div class="col-6">
                                                    <!-- start due date -->
                                                    <p class="mt-2 mb-1 text-muted">Due Date</p>
                                                    <div class="d-flex">
                                                        <i class='uil uil-schedule font-18 text-success me-1'></i>
                                                        <div>
                                                            <h5 class="mt-1 font-14">
                                                                Today 10am
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- end due date -->
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->

                                            <!-- task description -->
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <div class="border rounded">
                                                        <div id="bubble-editor" style="height: 130px;">
                                                            <h3>This is an simple editable area.</h3>
                                                            <p><br></p>
                                                            <ul>
                                                                <li>
                                                                    Select a text to reveal the toolbar.
                                                                </li>
                                                                <li>
                                                                    Edit rich document on-the-fly, so elastic!
                                                                </li>
                                                            </ul>
                                                            <p><br></p>
                                                            <p>
                                                                End of simple area
                                                            </p>
                                                        </div> <!-- end Snow-editor-->
                                                    </div>
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end task description -->

                                            <!-- start sub tasks/checklists -->
                                            <h5 class="mt-4 mb-2 font-16">Checklists/Sub-tasks</h5>
                                            <div class="form-check mt-1">
                                                <input type="checkbox" class="form-check-input" id="checklist1">
                                                <label class="form-check-label strikethrough" for="checklist1">
                                                    Find out the old contract documents
                                                </label>
                                            </div>

                                            <div class="form-check mt-1">
                                                <input type="checkbox" class="form-check-input" id="checklist2">
                                                <label class="form-check-label strikethrough" for="checklist2">
                                                    Organize meeting sales associates to understand need in detail
                                                </label>
                                            </div>

                                            <div class="form-check mt-1">
                                                <input type="checkbox" class="form-check-input" id="checklist3">
                                                <label class="form-check-label strikethrough" for="checklist3">
                                                    Make sure to cover every small details
                                                </label>
                                            </div>
                                            <!-- end sub tasks/checklists -->

                                            <!-- start attachments -->
                                            <h5 class="mt-4 mb-2 font-16">Attachments</h5>
                                            <div class="card mb-2 shadow-none border">
                                                <div class="p-1">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded">
                                                                    .ZIP
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-0">
                                                            <a href="javascript:void(0);"
                                                                class="text-muted fw-bold">sales-assets.zip</a>
                                                            <p class="mb-0">2.3 MB</p>
                                                        </div>
                                                        <div class="col-auto" id="tooltip-container9">
                                                            <!-- Button -->
                                                            <a href="javascript:void(0);"
                                                                data-bs-container="#tooltip-container9"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Download" class="btn btn-link text-muted btn-lg p-0">
                                                                <i class='uil uil-cloud-download'></i>
                                                            </a>
                                                            <a href="javascript:void(0);"
                                                                data-bs-container="#tooltip-container9"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Delete" class="btn btn-link text-danger btn-lg p-0">
                                                                <i class='uil uil-multiply'></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-2 shadow-none border">
                                                <div class="p-1">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <img src="assets/images/projects/project-1.jpg"
                                                                class="avatar-sm rounded" alt="file-image">
                                                        </div>
                                                        <div class="col ps-0">
                                                            <a href="javascript:void(0);"
                                                                class="text-muted fw-bold">new-contarcts.docx</a>
                                                            <p class="mb-0">1.25 MB</p>
                                                        </div>
                                                        <div class="col-auto" id="tooltip-container10">
                                                            <!-- Button -->
                                                            <a href="javascript:void(0);"
                                                                data-bs-container="#tooltip-container10"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Download" class="btn btn-link text-muted btn-lg p-0">
                                                                <i class='uil uil-cloud-download'></i>
                                                            </a>
                                                            <a href="javascript:void(0);"
                                                                data-bs-container="#tooltip-container10"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Delete" class="btn btn-link text-danger btn-lg p-0">
                                                                <i class='uil uil-multiply'></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end attachments -->

                                            <!-- comments -->
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 class="mb-2 font-16">Comments</h5>

                                                    <div class="d-flex mt-3 p-1">
                                                        <img src="assets/images/users/avatar-9.jpg"
                                                            class="me-2 rounded-circle" height="36" alt="Arya Stark">
                                                        <div class="w-100">
                                                            <h5 class="mt-0 mb-0">
                                                                <span class="float-end text-muted font-12">4:30am</span>
                                                                Arya Stark
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted">
                                                                Should I review the last 3 years legal documents as well?
                                                            </p>
                                                        </div>
                                                    </div> <!-- end comment -->

                                                    <hr>

                                                    <div class="d-flex mt-2 p-1">
                                                        <img src="assets/images/users/avatar-5.jpg"
                                                            class="me-2 rounded-circle" height="36" alt="Dominc B">
                                                        <div class="w-100">
                                                            <h5 class="mt-0 mb-0">
                                                                <span class="float-end text-muted font-12">3:30am</span>
                                                                Gary Somya
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted">
                                                                @Arya FYI..I have created some general guidelines last year.
                                                            </p>
                                                        </div>
                                                    </div> <!-- end comment-->

                                                    <hr>

                                                </div> <!-- end col -->
                                            </div> <!-- end row -->

                                            <div class="row mt-2">
                                                <div class="col">
                                                    <div class="border rounded">
                                                        <form action="#" class="comment-area-box">
                                                            <textarea rows="3" class="form-control border-0 resize-none"
                                                                placeholder="Your comment..."></textarea>
                                                            <div class="p-2 bg-light">
                                                                <div class="float-end">
                                                                    <button type="submit" class="btn btn-sm btn-success"><i
                                                                            class='uil uil-message me-1'></i>Submit</button>
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="btn btn-sm px-1 btn-light"><i
                                                                            class='uil uil-cloud-upload'></i></a>
                                                                    <a href="#" class="btn btn-sm px-1 btn-light"><i
                                                                            class='uil uil-at'></i></a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div> <!-- end .border-->
                                                </div> <!-- end col-->
                                            </div> <!-- end row-->
                                            <!-- end comments -->
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Hyper - Coderthemes.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    @endsection
