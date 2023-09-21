<!-- view clinic details modal -->
<div class="modal animate slideIn" id="view_details_modals" tabindex="-1" aria-labelledby="view_details_modals"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white" style="background:#344767">
                <h1 class="modal-title fs-5 clinic-modal-title" id="exampleModalLabel">Clinic Details</h1>
            </div>
            <div class="modal-body clinic-modal-body">
                <div class="row p-2 px-3">
                    <div class="col-12 col-lg-6 p-1">
                        <div class="mb-3">
                            <label for="clinic_address" class="form-label">Branch Address</label>
                            <div class="input-group">
                                <span class="input-group-text border-right-0 bg-dark-blue text-white" id="clinic_address">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <input type="text" class="clinic-modal-input form-control border-left-0"
                                    id="clinic_address" style="color:var(--color-dark)"
                                    aria-describedby="clinic_address" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-1">
                        <div class="mb-3">
                            <label for="clinic_name" class="form-label">Branch Name</label>
                            <div class="input-group">
                                <span class="input-group-text border-right-0 bg-dark-blue text-white" id="clinic_name">
                                    <i class="fa-solid fa-id-card"></i>
                                </span>
                                <input type="text" class="clinic-modal-input form-control border-left-0"
                                    id="clinic_name" style="color:var(--color-dark)" aria-describedby="clinic_name" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-2 px-3">
                    <div class="col-12 col-lg-6 p-1">
                        <div class="mb-3">
                            <label for="branch_mobile" class="form-label">Branch Mobile</label>
                            <div class="input-group">
                                <span class="input-group-text border-right-0 bg-dark-blue text-white" id="branch_mobile">
                                    <i class="fa-solid fa-mobile"></i>
                                </span>
                                <input type="text" class="clinic-modal-input form-control border-left-0"
                                    id="branch_mobile" style="color:var(--color-dark)" aria-describedby="branch_mobile" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-1">
                        <div class="mb-3">
                            <label for="branch_telehone" class="form-label">Branch Telephone</label>
                            <div class="input-group">
                                <span class="input-group-text border-right-0 bg-dark-blue text-white"
                                    id="branch_telehone">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <input type="text" class="clinic-modal-input form-control border-left-0"
                                    id="branch_telehone" style="color:var(--color-dark)"
                                    aria-describedby="branch_telehone" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-2 px-3">
                    <div class="col-12 p-1">
                        <div class="input-group mb-3">
                            <input type="text" class="clinic-modal-input form-control" id="clinic_state" readonly>
                            <button class="btn bg-dark-blue dropdown-toggle text-light" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false"  disabled>
                                <i class="fa-solid fa-power-off"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end animate slideIn p-1">
                                <li>
                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                    <i class="fa-solid fa-power-off text-success"></i>
                                    &nbsp;Active</a>
                                </li>
                                <li>
                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                    <i class="fa-solid fa-power-off text-danger"></i>
                                    &nbsp;Archived</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="clinic-modal-button primary px-1" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="clinic-modal-button danger px-1" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="clinic-modal-button success px-1">Save</button> -->
            </div>
        </div>
    </div>
</div>
<!-- view clinic details modal end -->
<script src="./components/default/components/modals/modal-view-clinic.js"></script>