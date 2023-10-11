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
<style>

</style>

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
                            <button class="my-btn-primary ms-1 bg-brand-danger">
                                <i class="fa-solid fa-trash"></i>
                                &nbsp;Delete
                            </button>
                            <button class="my-btn-primary ms-1">
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
                                    <div class="card-header border-0 bg-transparent">
                                        <ul
                                            class="patient-details-navtab py-3 nav nav-pills border-0 d-flex justify-content-around">
                                            <li class="nav-item ms-1 py-2">
                                                <a class="nav-link active" aria-current="page" href="#"
                                                    data-bs-toggle="tab" data-bs-target="#medical-history-tab">
                                                    <i class="fa-solid fa-clock-rotate-left"></i>
                                                    &nbsp;Medical History</a>
                                            </li>
                                            <li class="nav-item ms-1 py-2">
                                                <a class="nav-link" href="#" data-bs-toggle="tab"
                                                    data-bs-target="#procedures-tab">
                                                    <i class="fa-solid fa-teeth"></i>
                                                    &nbsp;Procedures</a>
                                            </li>
                                            <li class="nav-item ms-1 py-2">
                                                <a class="nav-link" href="#" data-bs-toggle="tab"
                                                    data-bs-target="#photos-tab">
                                                    <i class="fa-solid fa-images"></i>
                                                    &nbsp;Photos</a>
                                            </li>
                                            <li class="nav-item ms-1 py-2">
                                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#chart-tab">
                                                    <i class="fa-solid fa-chart-simple"></i>
                                                    &nbsp;Chart</a>
                                            </li>
                                        </ul>
                                        <hr class="horizontal-gray">
                                    </div>
                                    <div class="card-body px-5">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="medical-history-tab"
                                                role="tabpanel" aria-labelledby="medical-history-tab" tabindex="0">
                                                <div class="d-flex flex-row-reverse py-1"><button class="add-patient">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                        &nbsp;Modify
                                                    </button>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-6">
                                                        <p class="col-form-label" style="font-size: 12px;">
                                                            1. IN GOOD
                                                            HEALTH?<span class="text-danger">*</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex flex-column">
                                                                <div class="form-check text-success"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value="" name=""
                                                                        style="border-color: var(--bs-success);"
                                                                        checked="" disabled="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-1">YES</label>
                                                                </div>
                                                                <div class="form-check text-danger"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value=""
                                                                        style="border-color: var(--bs-danger);" name=""
                                                                        disabled="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-2">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-6">
                                                        <p class="col-form-label" style="font-size: 12px;">
                                                            2. UNDER MEDICATION TREATMENT?<span
                                                                class="text-danger">*</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex flex-column">
                                                                <div class="form-check text-success"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value="" name=""
                                                                        style="border-color: var(--bs-success);"
                                                                        disabled="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-1">YES</label>
                                                                </div>
                                                                <div class="form-check text-danger"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value=""
                                                                        style="border-color: var(--bs-danger);" name=""
                                                                        disabled="" checked="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-2">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-6">
                                                        <p class="col-form-label" style="font-size: 12px;">
                                                            3. HAD SERIOUS ILLNESS OR SURGICAL OPERATION?<span
                                                                class="text-danger">*</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex flex-column">
                                                                <div class="form-check text-success"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value="" name=""
                                                                        style="border-color: var(--bs-success);"
                                                                        disabled="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-1">YES</label>
                                                                </div>
                                                                <div class="form-check text-danger"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value=""
                                                                        style="border-color: var(--bs-danger);" name=""
                                                                        disabled="" checked="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-2">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-6">
                                                        <p class="col-form-label" style="font-size: 12px;">
                                                            4. HAS BEEN HOSPITALIZED?<span class="text-danger">*</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex flex-column">
                                                                <div class="form-check text-success"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value="" name=""
                                                                        style="border-color: var(--bs-success);"
                                                                        disabled="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-1">YES</label>
                                                                </div>
                                                                <div class="form-check text-danger"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value=""
                                                                        style="border-color: var(--bs-danger);" name=""
                                                                        disabled="" checked="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-2">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-6">
                                                        <p class="col-form-label" style="font-size: 12px;">
                                                            5. TAKING ANY PRESCRIPTION/NON-PRESCRIPTION MEDICATION?<span
                                                                class="text-danger">*</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex flex-column">
                                                                <div class="form-check text-success"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value="" name=""
                                                                        style="border-color: var(--bs-success);"
                                                                        disabled="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-1">YES</label>
                                                                </div>
                                                                <div class="form-check text-danger"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value=""
                                                                        style="border-color: var(--bs-danger);" name=""
                                                                        disabled="" checked="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-2">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-6">
                                                        <p class="col-form-label" style="font-size: 12px;">
                                                            6. USING TOBACCO PRODUCTS?<span class="text-danger">*</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex flex-column">
                                                                <div class="form-check text-success"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value="" name=""
                                                                        style="border-color: var(--bs-success);"
                                                                        disabled="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-1">YES</label>
                                                                </div>
                                                                <div class="form-check text-danger"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value=""
                                                                        style="border-color: var(--bs-danger);" name=""
                                                                        disabled="" checked="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-2">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-6">
                                                        <p class="col-form-label" style="font-size: 12px;">
                                                            7. USING ALCOHOL, COCAINE, OR OTHER DANGEROUS DRUGS?<span
                                                                class="text-danger">*</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex flex-column">
                                                                <div class="form-check text-success"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value="" name=""
                                                                        style="border-color: var(--bs-success);"
                                                                        disabled="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-1">YES</label>
                                                                </div>
                                                                <div class="form-check text-danger"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value=""
                                                                        style="border-color: var(--bs-danger);" name=""
                                                                        disabled="" checked="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-2">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col col-sm-12 col-md-8 col-lg-8">
                                                        <p class="col-form-label" style="font-size: 12px;">
                                                            8. ALLERGIES:
                                                        </p>
                                                    </div>
                                                    <div class="col col-sm-12 col-md-4 col-lg-4">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="input-group">
                                                                <span
                                                                    class="input-group-text border-right-0 bg-dark-blue text-white">
                                                                    <i class="fa-solid fa-hand"></i>
                                                                </span>
                                                                <input type="text"
                                                                    class="clinic-modal-input form-control border-left-0"
                                                                    id="" style="color:var(--color-dark)" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-12">
                                                        <p class="col-form-label"
                                                            style="font-size: 12px;font-weight:bold">
                                                            9. FOR WOMEN:
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-6">
                                                        <p class="col-form-label" style="font-size: 12px;">
                                                            9.1 PREGNANT?<span class="text-danger">*</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex flex-column">
                                                                <div class="form-check text-success"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value="" name=""
                                                                        style="border-color: var(--bs-success);"
                                                                        disabled="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-1">YES</label>
                                                                </div>
                                                                <div class="form-check text-danger"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value=""
                                                                        style="border-color: var(--bs-danger);" name=""
                                                                        disabled="" checked="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-2">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-6">
                                                        <p class="col-form-label" style="font-size: 12px;">
                                                            9.2 NURSING OR BREASTFEEDING?<span
                                                                class="text-danger">*</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-flex flex-column">
                                                                <div class="form-check text-success"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value="" name=""
                                                                        style="border-color: var(--bs-success);"
                                                                        disabled="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-1">YES</label>
                                                                </div>
                                                                <div class="form-check text-danger"
                                                                    style="font-size: 12px;">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="" value=""
                                                                        style="border-color: var(--bs-danger);" name=""
                                                                        disabled="" checked="">
                                                                    <label class="form-check-label"
                                                                        for="formCheck-2">NO</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-3">
                                                    <div class="col-12">
                                                        <p class="col-form-label" style="font-size: 12px;">
                                                            10. DO YOU HAVE ANY OF THE FOLLOWING?<span
                                                                class="text-danger">*</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled=""
                                                                    checked="">
                                                                <label class="form-check-label text-break" for="">High
                                                                    Blood Pressure</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">Low
                                                                    Blood</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Epilespy / Convulsions</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">AIDs
                                                                    or HIV</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Sexually Transmitted
                                                                    Disease</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Stomach troubles /
                                                                    Ulcer</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">
                                                                    Fainting Seizures</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">
                                                                    Rapid Weight Loss</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Radiation Therapy
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">Joint
                                                                    Replacement / Implant
                                                                    Heart Surgery
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">Heart
                                                                    Attack</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">
                                                                    Thyroid Problem</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">
                                                                    Heart Disease
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">Heart
                                                                    Murmur
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Hepatitis / Liver Disease
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Rheumatic Fever
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">Hay
                                                                    Fever / Allergies
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Respiratory Problems
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Hepatitis / Jaundice
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Tuberculosis
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Swollen Ankles
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">Kidney
                                                                    Disease

                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Diabetes
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">Chest
                                                                    Pain
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">
                                                                    Cancer / Tumors</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">Anemia
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">Angina
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">Asthma
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled=""
                                                                    checked="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Emphysema
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break"
                                                                    for="">Bleeding Problems
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled="">
                                                                <label class="form-check-label text-break" for="">Blood
                                                                    Diseases
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="High Blood Pressure" disabled=""
                                                                    checked="">
                                                                <label class="form-check-label text-break" for="">Head
                                                                    Injuries
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="" type="checkbox"
                                                                    id="" value="Arthritis / Rheumatism" disabled="">
                                                                <label class="form-check-label text-break">
                                                                    Arthritis / Rheumatism</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="procedures-tab" role="tabpanel"
                                                aria-labelledby="procedures-tab" tabindex="0">
                                                <div class="table-responsive p-0">
                                                    <table
                                                        class="table table-hover align-items-center mb-0 patients-table">
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    Date
                                                                </th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Procedure</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Amount</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Paid</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Balance</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex px-2 py-1">
                                                                        <div
                                                                            class="d-flex flex-column justify-content-center">
                                                                            <h6 class="mb-0 text-sm">August 23
                                                                            </h6>
                                                                            <p class="text-xs text-secondary mb-0">2023
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">Dental
                                                                        Filling
                                                                    </p>
                                                                    <p class="text-xs text-secondary mb-0"></p>
                                                                </td>

                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">₱ 15,000
                                                                    </p>
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                    <span
                                                                        class="text-secondary text-xs font-weight-bold">₱
                                                                        10,500</span>
                                                                    <p class="text-xs text-secondary mb-0">GCASH - MAIN
                                                                        ACCOUNT</p>
                                                                </td>

                                                                <td class="align-middle text-center">
                                                                    <span
                                                                        class="text-secondary text-xs font-weight-bold">₱
                                                                        4,500</span>
                                                                </td>
                                                                <td class="align-middle text-center text-sm">
                                                                    <a href="javascript:;"
                                                                        class="text-secondary font-weight-bold text-xs"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#edit_procedure_modal">
                                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex px-2 py-1">
                                                                        <div
                                                                            class="d-flex flex-column justify-content-center">
                                                                            <h6 class="mb-0 text-sm">August 21
                                                                            </h6>
                                                                            <p class="text-xs text-secondary mb-0">2023
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">Dental
                                                                        Filling
                                                                    </p>
                                                                    <p class="text-xs text-secondary mb-0"></p>
                                                                </td>

                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">₱ 15,000
                                                                    </p>
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                    <span
                                                                        class="text-secondary text-xs font-weight-bold">₱
                                                                        15,000</span>
                                                                    <p class="text-xs text-secondary mb-0">GCASH - MAIN
                                                                        ACCOUNT</p>
                                                                </td>

                                                                <td class="align-middle text-center">
                                                                    <span
                                                                        class="text-secondary text-xs font-weight-bold">₱
                                                                        0.00</span>
                                                                </td>
                                                                <td class="align-middle text-center text-sm">
                                                                    <a href="javascript:;"
                                                                        class="text-secondary font-weight-bold text-xs"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#edit_procedure_modal">
                                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex px-2 py-1">
                                                                        <div
                                                                            class="d-flex flex-column justify-content-center">
                                                                            <h6 class="mb-0 text-sm">August 23
                                                                            </h6>
                                                                            <p class="text-xs text-secondary mb-0">2023
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">Dental
                                                                        Crown
                                                                    </p>
                                                                    <p class="text-xs text-secondary mb-0"></p>
                                                                </td>

                                                                <td class="align-middle text-center text-sm">
                                                                    <p class="text-xs font-weight-bold mb-0">₱ 5,000</p>
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                    <span
                                                                        class="text-secondary text-xs font-weight-bold">₱
                                                                        500</span>
                                                                    <p class="text-xs text-secondary mb-0">GCASH - MAIN
                                                                        ACCOUNT</p>
                                                                </td>

                                                                <td class="align-middle text-center">
                                                                    <span
                                                                        class="text-secondary text-xs font-weight-bold">₱
                                                                        4,500</span>
                                                                </td>
                                                                <td class="align-middle text-center text-sm">
                                                                    <a href="javascript:;"
                                                                        class="text-secondary font-weight-bold text-xs"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#edit_procedure_modal">
                                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 border-0">
                                                                    Total:
                                                                </th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 border-0">
                                                                </th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 border-0">
                                                                    ₱ 35,000</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 border-0">
                                                                    ₱ 26,000</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 border-0">
                                                                    ₱ 9,000</th>
                                                                <th
                                                                    class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 border-0">
                                                                </th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="photos-tab" role="tabpanel"
                                                aria-labelledby="photos-tab" tabindex="0">
                                                <!-- <section class="">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                                                data-ripple-color="light">
                                                                <img src="https://dentallavelle.com/wp-content/uploads/2019/06/Dental-Lavelle-Why-you-need-to-visit-your-Dentist-every-6-months.jpg"
                                                                    class="w-100" />
                                                                <a href="#!">
                                                                    <div class="mask"
                                                                        style="background-color: rgba(251, 251, 251, 0.2);">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mb-4 mb-lg-0">
                                                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                                                data-ripple-color="light">
                                                                <img src="https://www.yourdentistryguide.com/wp-content/uploads/2017/11/dental-procedures-min.jpg"
                                                                    class="w-100" />
                                                                <a href="#!">
                                                                    <div class="mask"
                                                                        style="background-color: rgba(251, 251, 251, 0.2);">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mb-4 mb-lg-0">
                                                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                                                data-ripple-color="light">
                                                                <img src="https://www.dentiquecochin.com/blog/wp-content/uploads/2019/07/dental-implant-treatment-in-kochi.jpg"
                                                                    class="w-100" />
                                                                <a href="#!">
                                                                    <div class="mask"
                                                                        style="background-color: rgba(251, 251, 251, 0.2);">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section> -->
                                                <div class="row py-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-xl-4 col-lg-6 col-md-6 col-lg-4 mb-xl-0 mb-4 py-3">
                                                            <div class="card card-blog card-plain border-0">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src="../assets/img/patients-gallery/dental_braces_500px.png"
                                                                            alt="img-blur-shadow"
                                                                            class="img-fluid shadow rounded-3">
                                                                    </a>
                                                                </div>
                                                                <div class="card-body px-3 pb-0 bg-transparent">
                                                                    <p
                                                                        class="text-gradient text-dark mb-2 text-sm patient-gallery-sub">
                                                                        Dental Braces
                                                                    </p>
                                                                    <a href="javascript:;">
                                                                        <h5 class="patient-gallery-title">
                                                                            Braces
                                                                        </h5>
                                                                    </a>
                                                                    <p class="mb-4 text-sm patient-gallery-desc">
                                                                        Dental braces straighten your teeth and correct
                                                                        a wide range
                                                                        of orthodontic issues.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-xl-4 col-lg-6 col-md-6 col-lg-4 mb-xl-0 mb-4 py-3">
                                                            <div class="card card-blog card-plain border-0">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src="../assets/img/patients-gallery/dental_braces_500px.png"
                                                                            alt="img-blur-shadow"
                                                                            class="img-fluid shadow rounded-3">
                                                                    </a>
                                                                </div>
                                                                <div class="card-body px-3 pb-0 bg-transparent">
                                                                    <p
                                                                        class="text-gradient text-dark mb-2 text-sm patient-gallery-sub">
                                                                        Dental Braces
                                                                    </p>
                                                                    <a href="javascript:;">
                                                                        <h5 class="patient-gallery-title">
                                                                            Braces
                                                                        </h5>
                                                                    </a>
                                                                    <p class="mb-4 text-sm patient-gallery-desc">
                                                                        Dental braces straighten your teeth and correct
                                                                        a wide range
                                                                        of orthodontic issues.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-xl-4 col-lg-6 col-md-6 col-lg-4 mb-xl-0 mb-4 py-3">
                                                            <div class="card card-blog card-plain border-0">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src="../assets/img/patients-gallery/dental_braces_500px.png"
                                                                            alt="img-blur-shadow"
                                                                            class="img-fluid shadow rounded-3">
                                                                    </a>
                                                                </div>
                                                                <div class="card-body px-3 pb-0 bg-transparent">
                                                                    <p
                                                                        class="text-gradient text-dark mb-2 text-sm patient-gallery-sub">
                                                                        Dental Braces
                                                                    </p>
                                                                    <a href="javascript:;">
                                                                        <h5 class="patient-gallery-title">
                                                                            Braces
                                                                        </h5>
                                                                    </a>
                                                                    <p class="mb-4 text-sm patient-gallery-desc">
                                                                        Dental braces straighten your teeth and correct
                                                                        a wide range
                                                                        of orthodontic issues.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-xl-4 col-lg-6 col-md-6 col-lg-4 mb-xl-0 mb-4 py-3">
                                                            <div class="card card-blog card-plain border-0">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src="../assets/img/patients-gallery/dental_braces_500px.png"
                                                                            alt="img-blur-shadow"
                                                                            class="img-fluid shadow rounded-3">
                                                                    </a>
                                                                </div>
                                                                <div class="card-body px-3 pb-0 bg-transparent">
                                                                    <p
                                                                        class="text-gradient text-dark mb-2 text-sm patient-gallery-sub">
                                                                        Dental Braces
                                                                    </p>
                                                                    <a href="javascript:;">
                                                                        <h5 class="patient-gallery-title">
                                                                            Braces
                                                                        </h5>
                                                                    </a>
                                                                    <p class="mb-4 text-sm patient-gallery-desc">
                                                                        Dental braces straighten your teeth and correct
                                                                        a wide range
                                                                        of orthodontic issues.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-xl-4 col-lg-6 col-md-6 col-lg-4 mb-xl-0 mb-4 py-3">
                                                            <div class="card card-blog card-plain border-0">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src="../assets/img/patients-gallery/dental_braces_500px.png"
                                                                            alt="img-blur-shadow"
                                                                            class="img-fluid shadow rounded-3">
                                                                    </a>
                                                                </div>
                                                                <div class="card-body px-3 pb-0 bg-transparent">
                                                                    <p
                                                                        class="text-gradient text-dark mb-2 text-sm patient-gallery-sub">
                                                                        Dental Braces
                                                                    </p>
                                                                    <a href="javascript:;">
                                                                        <h5 class="patient-gallery-title">
                                                                            Braces
                                                                        </h5>
                                                                    </a>
                                                                    <p class="mb-4 text-sm patient-gallery-desc">
                                                                        Dental braces straighten your teeth and correct
                                                                        a wide range
                                                                        of orthodontic issues.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-xl-4 col-lg-6 col-md-6 col-lg-4 mb-xl-0 mb-4 py-3">
                                                            <div class="card h-100 card-plain border">
                                                                <div
                                                                    class="card-body d-flex flex-column justify-content-center text-center">
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-plus text-secondary mb-3"
                                                                            aria-hidden="true"></i>
                                                                        <h5 class=" text-secondary"> New photo </h5>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="chart-tab" role="tabpanel"
                                                aria-labelledby="chart-tab" tabindex="0">
                                                <!-- chart goes here -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <table class="table borderless tooth-table">
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="tooth" data-tooth-number="1">
                                                                        <a href="#">
                                                                        
                                                                        </a>
                                                                    </td>
                                                                    <td class="tooth" data-tooth-number="2">2</td>
                                                                    <td class="tooth" data-tooth-number="3">3</td>
                                                                    <td class="tooth" data-tooth-number="4">4</td>
                                                                    <td class="tooth" data-tooth-number="5">5</td>
                                                                    <td class="tooth" data-tooth-number="6">6</td>
                                                                    <td class="tooth" data-tooth-number="7">7</td>
                                                                    <td class="tooth" data-tooth-number="8">8</td>
                                                                    <td class="tooth" data-tooth-number="9">9</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="tooth" data-tooth-number="1">1</td>
                                                                    <td class="tooth" data-tooth-number="2">2</td>
                                                                    <td class="tooth" data-tooth-number="3">3</td>
                                                                    <td class="tooth" data-tooth-number="4">4</td>
                                                                    <td class="tooth" data-tooth-number="5">5</td>
                                                                    <td class="tooth" data-tooth-number="6">6</td>
                                                                    <td class="tooth" data-tooth-number="7">7</td>
                                                                    <td class="tooth" data-tooth-number="8">8</td>
                                                                    <td class="tooth" data-tooth-number="9">9</td>
                                                                    <td class="tooth" data-tooth-number="10">10</td>
                                                                    <td class="tooth" data-tooth-number="11">11</td>
                                                                    <td class="tooth" data-tooth-number="12">12</td>
                                                                    <td class="tooth" data-tooth-number="13">13</td>
                                                                    <td class="tooth" data-tooth-number="14">14</td>
                                                                    <td class="tooth" data-tooth-number="15">15</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="tooth" data-tooth-number="1">1</td>
                                                                    <td class="tooth" data-tooth-number="2">2</td>
                                                                    <td class="tooth" data-tooth-number="3">3</td>
                                                                    <td class="tooth" data-tooth-number="4">4</td>
                                                                    <td class="tooth" data-tooth-number="5">5</td>
                                                                    <td class="tooth" data-tooth-number="6">6</td>
                                                                    <td class="tooth" data-tooth-number="7">7</td>
                                                                    <td class="tooth" data-tooth-number="8">8</td>
                                                                    <td class="tooth" data-tooth-number="9">9</td>
                                                                    <td class="tooth" data-tooth-number="10">10</td>
                                                                    <td class="tooth" data-tooth-number="11">11</td>
                                                                    <td class="tooth" data-tooth-number="12">12</td>
                                                                    <td class="tooth" data-tooth-number="13">13</td>
                                                                    <td class="tooth" data-tooth-number="14">14</td>
                                                                    <td class="tooth" data-tooth-number="15">15</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="tooth" data-tooth-number="1">1</td>
                                                                    <td class="tooth" data-tooth-number="2">2</td>
                                                                    <td class="tooth" data-tooth-number="3">3</td>
                                                                    <td class="tooth" data-tooth-number="4">4</td>
                                                                    <td class="tooth" data-tooth-number="5">5</td>
                                                                    <td class="tooth" data-tooth-number="6">6</td>
                                                                    <td class="tooth" data-tooth-number="7">7</td>
                                                                    <td class="tooth" data-tooth-number="8">8</td>
                                                                    <td class="tooth" data-tooth-number="9">9</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <!-- Add more rows as needed -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
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
    // Add click event listener to tooth cells
    $(document).ready(function() {
        $('.tooth').click(function() {
            // var toothStatus = $(this).data('tooth-status');
            // if (!toothStatus || toothStatus === 'missing') {
            //     $(this).data('tooth-status', 'healthy').removeClass('selected-decayed selected-missing').addClass('selected-healthy');
            // } else if (toothStatus === 'healthy') {
            //     $(this).data('tooth-status', 'decayed').removeClass('selected-healthy').addClass('selected-decayed');
            // } else {
            //     $(this).data('tooth-status', 'missing').removeClass('selected-decayed').addClass('selected-missing');
            // }
            console.log($(this).text());
        });
    });
    </script>
    <script src="../assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/1cf0552cf6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>