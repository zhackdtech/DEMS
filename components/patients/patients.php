<?php
class Patients
{
    public function startTable()
    {
        ?>
        <div class="row p-3">
            <table class="table-responsive patients-table">
                <thead>
                    <tr>
                        <th class="main" scope="col">PATIENT</th>
                        <th scope="col">LAST VISIT</th>
                        <th scope="col">BRANCH</th>
                        <th scope="col">DOCTOR</th>
                        <th scope="col">REG. DATE</th>
                        <th scope="col">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    }
    public function patientsTable($id, $name, $email, $image, $last_visit, $branch, $doctor, $registration_date)
    {
        ?>

                    <tr>
                        <td class="main" scope="row">
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="assets/img/patients/<?php echo $image ?>" class="avatar avatar-sm me-3"
                                        alt="user6">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">
                                        <a href="./pages/patient-details.php" class="patient-table-patient-name">
                                            <!-- echo name here -->
                                            <?php echo $name ?>
                                        </a>
                                    </h6>
                                    <p class="text-xs text-secondary mb-0 patient-table-patient-sub">
                                        <?php echo $email ?>
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php echo $last_visit ?>
                        </td>
                        <td>
                            <?php echo $branch ?>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">
                                    <a href="" class="patient-table-patient-doctor">
                                        <?php echo $doctor ?>
                                    </a>
                                </h6>
                                <!-- <p class="text-xs text-secondary mb-0 patient-table-patient-procedure">
                                                            DENTAL BRACES</p> -->
                            </div>
                        </td>
                        <td>
                            <?php echo $registration_date ?>
                        </td>
                        <td>
                            <a href="#">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                    </tr>

                    <?php
    }
    public function endTable()
    {
        ?>
                </tbody>
            </table>
        </div>
        <?php
    }
}
?>