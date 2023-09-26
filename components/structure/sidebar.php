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
    <ul class="nav nav-pills flex-column mb-auto" id="sidetabs">
        <li class="nav-item nav-label p-1">
            MANAGEMENT
        </li>
        <li id="sidebar-items" class="nav-item p-1">
            <a href="#clinic-tab" class="sidebar-nav-link nav-link active" aria-current="page" data-bs-toggle="tab"
                data-bs-target="#clinic-tab">
                <i class="nav-icon fa-solid fa-building p-2"></i>
                &nbsp;Clinics
            </a>
        </li>
        <li id="sidebar-items" class="nav-item p-1">
            <a href="#patients-tab" class="sidebar-nav-link nav-link" aria-current="page" data-bs-toggle="tab"
                data-bs-target="#patients-tab">
                <i class="nav-icon fa-solid fa-person p-2"></i>
                &nbsp;Patients
            </a>
        </li>
        <li id="sidebar-items" class="nav-item p-1">
            <a href="#schedule-tab" class="sidebar-nav-link nav-link" aria-current="page" data-bs-toggle="tab"
                data-bs-target="#schedule-tab">
                <i class="nav-icon fa-solid fa-calendar p-2"></i>
                &nbsp;Schedule
            </a>
        </li>
        <li class="nav-item nav-label p-1">
            REPORTING
        </li>
        <li id="sidebar-items" class="nav-item p-1">
            <a href="#daily-reporting-tab" class="sidebar-nav-link nav-link" aria-current="page" data-bs-toggle="tab"
                data-bs-target="#daily-reporting-tab">
                <i class="nav-icon fa-solid fa-chart-line p-2"></i>
                &nbsp;Daily reporting
            </a>
        </li>
        <li id="sidebar-items" class="nav-item p-1">
            <a href="#sales-reporting-tab" class="sidebar-nav-link nav-link" aria-current="page" data-bs-toggle="tab"
                data-bs-target="#sales-reporting-tab">
                <i class="nav-icon fa-solid fa-chart-simple p-2"></i>
                &nbsp;Sales reporting
            </a>
        </li>
        <li id="sidebar-items" class="nav-item p-1">
            <a href="#patients-reporting-tab" class="sidebar-nav-link nav-link" aria-current="page" data-bs-toggle="tab"
                data-bs-target="#patients-reporting-tab">
                <i class="nav-icon fa-solid fa-chart-column p-2"></i>
                &nbsp;Patients reporting
            </a>
        </li>
        <li class="nav-item nav-label p-1">
            TRANSACTIONS
        </li>
        <li id="sidebar-items" class="nav-item p-1">
            <a href="#sales-history-tab" class="sidebar-nav-link nav-link" aria-current="page" data-bs-toggle="tab"
                data-bs-target="#sales-history-tab">
                <i class="nav-icon fa-solid fa-money-bill p-2"></i>
                &nbsp;Sales history
            </a>
        </li>
        <li id="sidebar-items" class="nav-item p-1">
            <a href="#expenses-tab" class="sidebar-nav-link nav-link" aria-current="page" data-bs-toggle="tab"
                data-bs-target="#expenses-tab">
                <i class="nav-icon fa-solid fa-money-bill-transfer p-2"></i>
                &nbsp;Expenses
            </a>
        </li>
        <li class="nav-item nav-label p-1">
            USERS
        </li>
        <li id="sidebar-items" class="nav-item p-1">
            <a href="#staffs-tab" class="sidebar-nav-link nav-link" aria-current="page" data-bs-toggle="tab"
                data-bs-target="#staffs-tab">
                <i class="nav-icon fa-solid fa-users p-2"></i>
                &nbsp;Staffs
            </a>
        </li>
        <li id="sidebar-items" class="nav-item p-1">
            <a href="#doctors-tab" class="sidebar-nav-link nav-link" aria-current="page" data-bs-toggle="tab"
                data-bs-target="#doctors-tab">
                <i class="nav-icon fa-solid fa-user-doctor p-2"></i>
                &nbsp;Doctors
            </a>
        </li>
        <li class="nav-item nav-label p-1">
            SYSTEM
        </li>
        <li id="sidebar-items" class="nav-item p-1">
            <a href="#logs-tab" class="sidebar-nav-link nav-link" aria-current="page" data-bs-toggle="tab"
                data-bs-target="#logs-tab">
                <i class="nav-icon fa-solid fa-clock-rotate-left p-2"></i>
                &nbsp;Logs
            </a>
        </li>
    </ul>
</div>

<script>

    $('li#sidebar-items a').on("click", function () {
        console.log("<?php echo $_SERVER['SCRIPT_NAME']; ?>");
        if ("<?php echo $_SERVER['SCRIPT_NAME']; ?>" != "/DEMS/index.php") {
            console.log($(this).attr('href'))
            localStorage.setItem('active', $(this).attr('href'));
            window.location.href = "../";
        }
    })
    $(document).ready(function () {
        $(document).ready(function () {
            $('a.sidebar-nav-link').on('shown.bs.tab', function (event) {
                // console.log(event.target);
                localStorage.setItem('active', $(event.target).attr('href'));
                console.log(localStorage.getItem('active'));
            });
            var activeTab = localStorage.getItem('active');
            if (activeTab) {
                $('#sidetabs a[href="' + activeTab + '"]').tab('show');
            }
        });
    });
</script>