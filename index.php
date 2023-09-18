<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMS - Main</title>
    <meta name="twitter:title" content="BS DASHBOARD">
    <meta name="twitter:card" content="summary">
    <meta property="og:image" content="assets/img/dashboard_512px.png?h=7685959fa84ebd0638a6e56471c1884b">
    <meta name="description" content="Dental Management System">
    <meta property="og:type" content="website">
    <meta name="twitter:image" content="assets/img/dashboard_512px.png?h=7685959fa84ebd0638a6e56471c1884b">
    <meta name="twitter:description" content="Dental Management System">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="apple-touch-icon" type="image/png" sizes="180x180"
        href="assets/img/dashboard_180px.png?h=83b47f8c1fc6813f9b150537fe1875be">
    <link rel="icon" type="image/png" sizes="16x16"
        href="assets/img/dashboard_16px.png?h=6c72b632aa2e2ff93e47f966f55f290f">
    <link rel="icon" type="image/png" sizes="32x32"
        href="assets/img/dashboard_32px.png?h=bdccac879571d7aaf1a357983bbd29e4">
    <link rel="icon" type="image/png" sizes="180x180"
        href="assets/img/dashboard_180px.png?h=83b47f8c1fc6813f9b150537fe1875be">
    <link rel="icon" type="image/png" sizes="192x192"
        href="assets/img/dashboard_192px.png?h=7d3a56ed4bdae666ba4d6567535ca937">
    <link rel="icon" type="image/png" sizes="512x512"
        href="assets/img/dashboard_512px.png?h=7685959fa84ebd0638a6e56471c1884b">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <main class="d-flex flex-nowrap">
        <!-- sidebar -->
        <div class="d-flex flex-column flex-shrink-0 p-4 bg-body-tertiary" style="width: 280px;" id="sidebar">
            <div class="py-3">
                <a href="#"
                    class="d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <span class="fs-4 sidenav-brand">
                        <i class="fa-solid fa-network-wired"></i>
                        SYSGO - DEMS
                    </span>
                </a>
            </div>
            <hr class="sidenav-divider">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item nav-label p-1">
                    MANAGEMENT
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link active" aria-current="page">
                        <i class="nav-icon fa-solid fa-building p-2"></i>
                        &nbsp;Clinics
                    </a>
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="nav-icon fa-solid fa-person p-2"></i>
                        &nbsp;Patients
                    </a>
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="nav-icon fa-solid fa-calendar p-2"></i>
                        &nbsp;Schedule
                    </a>
                </li>
                <li class="nav-item nav-label p-1">
                    REPORTING
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="nav-icon fa-solid fa-chart-line p-2"></i>
                        &nbsp;Daily reporting
                    </a>
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="nav-icon fa-solid fa-chart-simple p-2"></i>
                        &nbsp;Sales reporting
                    </a>
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="nav-icon fa-solid fa-chart-column p-2"></i>
                        &nbsp;Patients reporting
                    </a>
                </li>
                <li class="nav-item nav-label p-1">
                    TRANSACTIONS
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="nav-icon fa-solid fa-money-bill p-2"></i>
                        &nbsp;Sales history
                    </a>
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="nav-icon fa-solid fa-money-bill-transfer p-2"></i>
                        &nbsp;Expenses
                    </a>
                </li>
                <li class="nav-item nav-label p-1">
                    USERS
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="nav-icon fa-solid fa-users p-2"></i>
                        &nbsp;Staffs
                    </a>
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="nav-icon fa-solid fa-user-doctor p-2"></i>
                        &nbsp;Doctors
                    </a>
                </li>
                <li class="nav-item nav-label p-1">
                    SYSTEM
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="nav-icon fa-solid fa-clock-rotate-left p-2"></i>
                        &nbsp;Logs
                    </a>
                </li>
            </ul>
        </div>
        <!-- end sidebar -->
        <div class="container">
            <!-- navbar -->
            <nav class="navbar navbar-light navbar-expand bg-transparent shadow mt-4 topbar static-top nav-top">
                <div class="container-fluid p-2">
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input class="bg-light form-control border-0 small" type="text"
                                placeholder="Search for ..." />
                            <button class="btn btn-primary py-0" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                <i class="fas fa-search"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="me-auto navbar-search w-100">
                                    <div class="input-group mb-3">
                                        <input class="bg-light form-control border-0 small" type="text"
                                            placeholder="Search for ..." />
                                        <button class="btn btn-primary py-0" type="button">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"
                                    href="#">
                                    <span class="badge bg-danger badge-counter">3+</span>
                                    <i class="fas fa-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">Alerts Center</h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-primary icon-circle">
                                                <i class="fa-solid fa-chart-simple text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="small notif-date">September 19, 2023</span>
                                            <p class="notif-title">Sales reporting ready to download.</p>
                                        </div>
                                    </a>

                                    <a class="dropdown-item text-center small text-gray-500 view-notif" href="#">Show
                                        All
                                        Notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"
                                    href="#">
                                    <span class="badge bg-danger badge-counter">7</span>
                                    <i class="fas fa-envelope fa-fw"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">Messages</h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3">
                                            <img class="rounded-circle"
                                                src="assets/img/users/administrator_male_500px.png" />
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate">
                                                <span class="message-content">Hello? Is anyone there? Lorem ipsum dolor
                                                    sit amet
                                                </span>
                                            </div>
                                            <p class="small text-gray-500 mb-0 message-details">Wilmarx Cayabyab - 58m
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3">
                                            <img class="rounded-circle"
                                                src="assets/img/users/elvis_presley_500px.png" />
                                            <div class="bg-danger status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate">
                                                <span class="message-content">I think we should put something as a
                                                    sample message here
                                                </span>
                                            </div>
                                            <p class="small text-gray-500 mb-0 message-details">Elveys Presley - 3hrs
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3">
                                            <img class="rounded-circle"
                                                src="assets/img/users/about_me_male_500px.png" />
                                            <div class="bg-warning status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate">
                                                <span class="message-content">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Natus, illo placeat veniam voluptates dignissimos,
                                                    nostrum voluptas quaerat veritatis consequatur laudantium
                                                    repudiandae? Recusandae sed quasi illum odio commodi minima quisquam
                                                    error.
                                                </span>
                                            </div>
                                            <p class="small text-gray-500 mb-0 message-details">Business Man - 8hrs</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3">
                                            <img class="rounded-circle"
                                                src="assets/img/users/business_man_in_blue_jacket_500px.png" />
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate">
                                                <span class="message-content">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Natus, illo placeat veniam voluptates dignissimos,
                                                    nostrum voluptas quaerat veritatis consequatur laudantium
                                                    repudiandae? Recusandae sed quasi illum odio commodi minima quisquam
                                                    error.
                                                </span>
                                            </div>
                                            <p class="small text-gray-500 mb-0 message-details">BJohn Doe - 12hrs</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500 view-notif" href="#">Show
                                        All
                                        Messages</a>
                                </div>
                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-end"
                                aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"
                                    href="#">
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small">Wilmarx Cayabyab</span>
                                    <img class="border rounded-circle img-profile img-fluid"
                                        style="max-height:20px; max-width:20px"
                                        src="assets/img/users/administrator_male_500px.png" />
                                </a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"
                                    style="background-color:#F8F9FA">
                                    <a class="dropdown-item user-links p-4 py-2" href="#">
                                        <i class="icon fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profile
                                    </a>
                                    <a class="dropdown-item user-links p-4 py-2" href="#">
                                        <i class="icon fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i> Settings
                                    </a>
                                    <a class="dropdown-item user-links p-4 py-2" href="#">
                                        <i class="icon fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>
                                        Activity log</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item user-links p-4 py-2" href="#">
                                        <i class="icon fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                    </ul>
                    <button type="button" id="sidebarCollapse" class="btn border-0 bg-transparent d-block d-lg-none">
                        <i class="fa-solid fa-bars fa-lg"></i>
                    </button>
                </div>
            </nav>
            <!-- end navbar -->
            <!-- main content -->
            <div class="container">

            </div>
            <!-- end main content -->
            <!-- footer -->
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                            <svg class="bi" width="30" height="24">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>
                        <span class="mb-3 mb-md-0 text-body-secondary">© 2023 SysGo Solutions</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3">
                            <a class="text-body-secondary" href="#">
                                <i class="fa-brands fa-square-twitter fa-xl"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-dark" href="#">
                                <i class="fa-brands fa-square-instagram fa-xl"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="text-body-secondary" href="#">
                                <i class="fa-brands fa-square-facebook fa-xl"></i>
                            </a>
                        </li>
                    </ul>
                </footer>
            </div>
            <!-- end footer -->
        </div>
        <!-- end main container -->
    </main>
    <!-- modals -->

    <!-- modals end -->
    <!--  javascripts -->
    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/1cf0552cf6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>