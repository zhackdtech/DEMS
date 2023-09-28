<?php
require "../includes/DateFnc.php";
require "../includes/config.php"
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMS - Main</title>
    <meta name="twitter:title" content="BS DASHBOARD">
    <meta name="twitter:card" content="summary">
    <meta property="og:image" content="../assets/img/dashboard_512px.png?h=7685959fa84ebd0638a6e56471c1884b">
    <meta name="description" content="Dental Management System">
    <meta property="og:type" content="website">
    <meta name="twitter:image" content="../assets/img/dashboard_512px.png?h=7685959fa84ebd0638a6e56471c1884b">
    <meta name="twitter:description" content="Dental Management System">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="apple-touch-icon" type="image/png" sizes="180x180"
        href="../assets/img/dashboard_180px.png?h=83b47f8c1fc6813f9b150537fe1875be">
    <link rel="icon" type="image/png" sizes="16x16"
        href="../assets/img/dashboard_16px.png?h=6c72b632aa2e2ff93e47f966f55f290f">
    <link rel="icon" type="image/png" sizes="32x32"
        href="../assets/img/dashboard_32px.png?h=bdccac879571d7aaf1a357983bbd29e4">
    <link rel="icon" type="image/png" sizes="180x180"
        href="../assets/img/dashboard_180px.png?h=83b47f8c1fc6813f9b150537fe1875be">
    <link rel="icon" type="image/png" sizes="192x192"
        href="../assets/img/dashboard_192px.png?h=7d3a56ed4bdae666ba4d6567535ca937">
    <link rel="icon" type="image/png" sizes="512x512"
        href="../assets/img/dashboard_512px.png?h=7685959fa84ebd0638a6e56471c1884b">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    <main class="d-flex flex-nowrap">
        <!-- sidebar -->
        <?php
        require "../components/structure/sidebar.php";
        ?>
        <!-- end sidebar -->
        <div class="container main-container">
            <!-- navbar -->
            <?php
            require "../components/structure/navbar.php";
            ?>
            <!-- end navbar -->
            <!-- main content -->
            <div class="container">
                <section>
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item">Patients</li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Wilmarx John Cayabyab
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="container py-1">
                        <div class="d-flex flex-row-reverse py-3">
                            <button class="add-patient ms-1 bg-brand-danger">
                                <i class="fa-solid fa-trash"></i>
                                &nbsp;Delete
                            </button>
                            <button class="add-patient ms-1">
                                <i class="fa-solid fa-print"></i>
                                &nbsp;Print
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <img src="../assets/img/users/administrator_male_500px.png" alt="avatar"
                                            class="rounded-circle img-fluid" style="width: 150px;">
                                        <h5 class="my-3">Wilmarx John D. Cayabyab</h5>
                                        <p class="text-muted mb-1">Since Aug 23, 2023</p>
                                        <p class="text-muted mb-4">DMS - Manila</p>
                                        <div class="d-flex justify-content-center mb-2">
                                            <button type="button" class="my-btn-primary border-0">Consent form</button>
                                            <button type="button" class="my-btn-secondary ms-1">Message</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4 mb-lg-0  overflow-hidden">
                                    <div class="card-header bg-transparent px-3 border-0">
                                        <div class="d-flex pt-3 justify-content-between">
                                            <p class="my-card-title">Patient Details</p>
                                            <a href="#" data-bs-toggle="tooltip" title="Edit details">
                                                <i class="fa-solid fa-user-pen"></i>
                                            </a>
                                        </div>
                                        <hr class="horizontal-gray">
                                    </div>
                                    <div class="card-body p-1">
                                        <ul class="list-group list-group-flush rounded-3">
                                            <li
                                                class="list-group-item border-0 d-flex justify-content-start align-items-center p-3">
                                                <span class="patient-details">Name: </span>
                                                <p class="mb-0 patient-details-value">&nbsp;Wilmarx John D. Cayabyab</p>
                                            </li>
                                            <li
                                                class="list-group-item border-0 d-flex justify-content-start align-items-center p-3">
                                                <span class="patient-details">Birthday: </span>
                                                <p class="mb-0 patient-details-value">&nbsp;Sept 28, 2001</p>
                                            </li>
                                            <li
                                                class="list-group-item border-0 d-flex justify-content-start align-items-center p-3">
                                                <span class="patient-details">Age: </span>
                                                <p class="mb-0 patient-details-value">&nbsp;22 y.o</p>
                                            </li>
                                            <li
                                                class="list-group-item border-0 d-flex justify-content-start align-items-center p-3">
                                                <span class="patient-details">Contact: </span>
                                                <p class="mb-0 patient-details-value">&nbsp;+639638773839</p>
                                            </li>
                                            <li
                                                class="list-group-item border-0 d-flex justify-content-start align-items-center p-3">
                                                <span class="patient-details">Email: </span>
                                                <p class="mb-0 patient-details-value">&nbsp;wilmarx.cayabyab@gmail.com
                                                </p>
                                            </li>
                                            <li
                                                class="list-group-item border-0 d-flex justify-content-start align-items-center p-3">
                                                <span class="patient-details">Address: </span>
                                                <p class="mb-0 patient-details-value">&nbsp;Block 1 lot 8, Terelay
                                                    Cabuyao Laguna</p>
                                            </li>
                                            <li
                                                class="list-group-item border-0 d-flex justify-content-start align-items-center p-3">
                                                <span class="patient-details">Occupation: </span>
                                                <p class="mb-0 patient-details-value">&nbsp;Chief Technological Officer
                                                </p>
                                            </li>
                                            <li
                                                class="list-group-item border-0 d-flex justify-content-start align-items-center p-3">
                                                <span class="patient-details">Religion: </span>
                                                <p class="mb-0 patient-details-value">&nbsp;N/A</p>
                                            </li>
                                            <li
                                                class="list-group-item border-0 d-flex justify-content-start align-items-center p-3">
                                                <span class="patient-details">Guardian: </span>
                                                <p class="mb-0 patient-details-value">&nbsp;-</p>
                                            </li>
                                            <li
                                                class="list-group-item border-0 d-flex justify-content-start align-items-center p-3">
                                                <span class="patient-details">Referred: </span>
                                                <p class="mb-0 patient-details-value">&nbsp;Ismaelita Babes</p>
                                            </li>
                                            <li
                                                class="list-group-item border-0 d-flex justify-content-start align-items-center p-3">
                                                <span class="patient-details">Created at: </span>
                                                <p class="mb-0 patient-details-value">&nbsp;Aug 23, 2023</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end main content -->
            <!-- footer -->
            <div class="container">
                <?php
                require "../components/structure/footer.php";
                ?>
            </div>
            <!-- end footer -->
        </div>
        <!-- end main container -->
    </main>
    <!-- modals -->

    <!-- modals end -->
    <!--  javascripts -->
    <script>

    </script>
    <script src="../assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/1cf0552cf6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>