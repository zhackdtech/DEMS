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
            <div>
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <span class="fs-4 sidenav-brand">Sidebar</span>
                </a>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item p-1">
                    <a href="#" class="nav-link active p-3" aria-current="page">
                        <i class="bs-icon fa-solid fa-house p-3"></i>
                        &nbsp;Home
                    </a>
                </li>
                <li class="nav-item p-1">
                    <a href="#" class="nav-link p-3" aria-current="page">
                        <i class="bs-icon fa-solid fa-house p-3"></i>
                        &nbsp;Home
                    </a>
                </li>
            </ul>
        </div>
        <!-- end sidebar -->
        <div class="container">
            <!-- navbar -->
            <header class="py-3 mb-3">
                <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
                    <div class="toggler d-flex flex-row align-items-center">
                        <button type="button" id="sidebarCollapse" class="btn bg-transparent">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        
                        &nbsp;BRAND
                    </div>

                    <div class="d-flex align-items-center">
                        <form class="w-100 me-3" role="search">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                        </form>

                        <div class="flex-shrink-0 dropdown">
                            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                    class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end navbar -->
        </div>
    </main>
    <!--  javascripts -->
    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/1cf0552cf6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>