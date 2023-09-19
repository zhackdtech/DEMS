<nav class="navbar navbar-light navbar-expand bg-transparent shadow mt-4 topbar static-top nav-top">
    <div class="container-fluid p-2">
        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input class="bg-light form-control border-0 small nav-search" type="text" placeholder="Search for ..." />
                <button class="btn btn-primary py-0" style="background-color:#17C1E8; border:none" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
        <ul class="navbar-nav flex-nowrap ms-auto">
            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false"
                    data-bs-toggle="dropdown" href="#">
                    <i class="fas fa-search"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in animate slideIn" aria-labelledby="searchDropdown">
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
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        <!-- <span class="badge bg-danger badge-counter">3+</span> -->
                        <!-- no display if no new alerts -->
                        <i class="fas fa-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in  animate slideIn">
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
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        <span class="badge bg-danger badge-counter d-none">7</span>
                        <!-- no display if no new Alerts -->
                        <i class="fas fa-envelope fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in  animate slideIn">
                        <h6 class="dropdown-header">Messages</h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image me-3">
                                <img class="rounded-circle" src="assets/img/users/administrator_male_500px.png" />
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
                                <img class="rounded-circle" src="assets/img/users/elvis_presley_500px.png" />
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
                                <img class="rounded-circle" src="assets/img/users/about_me_male_500px.png" />
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
                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown">
                </div>
            </li>
            <div class="d-none d-sm-block topbar-divider"></div>
            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        <span class="d-none d-lg-inline me-2 text-gray-600 small">Wilmarx Cayabyab</span>
                        <img class="border rounded-circle img-profile img-fluid" style="max-height:20px; max-width:20px"
                            src="assets/img/users/administrator_male_500px.png" />
                    </a>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in  animate slideIn"
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
        <button type="button" id="sidebarCollapse" class="btn border-0 bg-transparent d-block d-lg-none" style="z-index:100">
            <i class="fa-solid fa-bars fa-lg"></i>
        </button>
    </div>
</nav>