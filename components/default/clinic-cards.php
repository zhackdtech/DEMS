<?php
// require_onces
require_once "components/modals/modal-archive-clinic.php";
require_once "components/modals/modal-edit-clinic.php";
require_once "components/modals/modal-view-clinic.php";
class ClinicCard
{
    function __construct()
    {
    }
    function getClinic($clinic_id, $clinic_name, $clinic_address, $clinic_mobile, $clinic_telephone)
    {
        ?>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card card-stats mb-4 mb-xl-0 py-2 h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">
                                <?php
                                echo $clinic_address;
                                ?>
                            </h5>
                            <span class="h2 font-weight-bold mb-0">
                                <?php
                                echo $clinic_name;
                                ?>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown-center clinic-dropdown">
                                <div class="icon icon-shape bg-active text-white shadow">
                                    <a href="#" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-gear text-white"></i>
                                    </a>
                                    <ul class="dropdown-menu p-1 animate slideIn">
                                        <li>
                                            <a class="dropdown-item clinic-dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#view_details_modals" data-bs-clinicname="<?php echo $clinic_name;?>">
                                                <i class="fa-solid fa-eye"></i>
                                                &nbsp;View</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item clinic-dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_details_modals" data-bs-clinicname="<?php echo $clinic_name;?>">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                &nbsp;Edit</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item clinic-dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#archive_clinic_modals" data-bs-clinicname="<?php echo $clinic_name;?>">
                                                <i class="fa-solid fa-box-archive"></i>
                                                &nbsp;Archive</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>