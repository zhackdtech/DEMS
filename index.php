<?php
require "components/default/clinic-cards.php";
?>

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    <main class="d-flex flex-nowrap">
        <!-- sidebar -->
        <?php
        require "components/structure/sidebar.php";
        ?>
        <!-- end sidebar -->
        <div class="container">
            <!-- navbar -->
            <?php
            require "components/structure/navbar.php";
            ?>
            <!-- end navbar -->
            <!-- main content -->
            <div class="container tab-content">
                <div class="tab-pane fade show active" id="clinic-tab" role="clinic-tab" aria-labelledby="clinic-tab"
                    tabindex="0">
                    <!-- bread crumbs -->
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item active" aria-current="page">Clinics</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- end breadcrumbs -->
                    <div class="row">
                        <!-- Clinic cards -->
                        <?php
                        // instantiate our class ClinicCard
                        $clinicCard = new ClinicCard();
                        // these are sample data only
                        $sample_addresses = array("Philippine - Laguna", "Philippine - Manila", "Philippine - Sta Cruz", "Philippine - Mindanao", "Japan - Tokyo", "Korea - Gangnam", );
                        $sample_branch_name = array("DMS - Laguna", "DMS - Manila", "DMS - Sta Cruz", "DMS - Mindanao", "DMS - Tokyo", "DMS - Gangnam", );
                        // loop through your datas
                        for ($i = 0; $i <= count($sample_addresses) - 1; $i++) {
                            // feed the data to the class->getClinic()
                            // get clinic accepts three arguments id, branch name, address
                            $clinicCard->getClinic($i, $sample_branch_name[$i], $sample_addresses[$i]);
                        }
                        ?>
                        <!-- end clinic cards -->
                    </div>
                </div>
                <div class="tab-pane fade show" id="patients-tab" role="patients-tab" aria-labelledby="patients-tab"
                    tabindex="0">
                    <!-- bread crumbs -->
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item active" aria-current="page">Patients</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="tab-pane fade show" id="schedule-tab" role="schedule-tab" aria-labelledby="schedule-tab"
                    tabindex="0">
                    <!-- bread crumbs -->
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item active" aria-current="page">Schedule</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="tab-pane fade show" id="daily-reporting-tab" role="daily-reporting-tab"
                    aria-labelledby="daily-reporting-tab" tabindex="0">
                    <!-- bread crumbs -->
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item active" aria-current="page">Daily Reporting</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="tab-pane fade show" id="sales-reporting-tab" role="sales-reporting-tab"
                    aria-labelledby="sales-reporting-tab" tabindex="0">
                    <!-- bread crumbs -->
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item active" aria-current="page">Sales Reporting</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="tab-pane fade show" id="patients-reporting-tab" role="patients-reporting-tab"
                    aria-labelledby="patients-reporting-tab" tabindex="0">
                    <!-- bread crumbs -->
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item active" aria-current="page">Patients Reporting</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="tab-pane fade show" id="sales-history-tab" role="sales-history-tab"
                    aria-labelledby="sales-history-tab" tabindex="0">
                    <!-- bread crumbs -->
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item active" aria-current="page">Sales History</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="tab-pane fade show" id="expenses-tab" role="expenses-tab" aria-labelledby="expenses-tab"
                    tabindex="0">
                    <!-- bread crumbs -->
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item active" aria-current="page">Expenses</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="tab-pane fade show" id="staffs-tab" role="staffs-tab" aria-labelledby="staffs-tab"
                    tabindex="0">
                    <!-- bread crumbs -->
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item active" aria-current="page">Staffs</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="tab-pane fade show" id="doctors-tab" role="doctors-tab" aria-labelledby="doctors-tab"
                    tabindex="0">
                    <!-- bread crumbs -->
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <div class="tab-pane fade show" id="logs-tab" role="logs-tab" aria-labelledby="logs-tab" tabindex="0">
                    <!-- bread crumbs -->
                    <div class="row p-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Branch</li>
                                <li class="breadcrumb-item">DEMS</li>
                                <li class="breadcrumb-item active" aria-current="page">Logs</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- end breadcrumbs -->
                </div>
                <!-- end tab panes -->
            </div>
            <!-- end tab panes container -->
            <!-- end main content -->
            <!-- footer -->
            <div class="container">
                <?php
                require "components/structure/footer.php";
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
        $(document).ready(function () {
            $('a.sidebar-nav-link').on('shown.bs.tab', function (event) {
                console.log(event.target);
                localStorage.setItem('active', $(event.target).attr('href'));
                console.log(localStorage.getItem('active'));
            });
            var activeTab = localStorage.getItem('active');
            if (activeTab) {
                $('#sidetabs a[href="' + activeTab + '"]').tab('show');
            }
        });
    </script>
    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/1cf0552cf6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>