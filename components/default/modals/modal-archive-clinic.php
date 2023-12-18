<!-- archive clinic details modal -->
<div class="modal animate slideIn" id="archive_clinic_modals" tabindex="-1" aria-labelledby="archive_clinic_modals"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white" style="background:#344767">
                <h1 class="modal-title fs-5 clinic-modal-title" id="exampleModalLabel">Archive Clinic</h1>
            </div>
            <div class="modal-body clinic-modal-body">
                <div class="container pt-5">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-box-archive color-brand-danger clinic-archive-modal-header-icon"></i>
                    </div>
                </div>
                <div class="row p-2">
                    <h3 class="text-center archive-clinic-modal-header py-1">
                        Archive clinic_name?
                    </h3>
                    <p class="archive-clinic-modal-description text-center ">
                        The data of the clinics that are in archive mode won't be accessible, continue?
                    </p>
                </div>
                <div class="row p-2">
                    <div class="mb-3">
                        <label for="password_input" class="form-label">Enter your password to continue:<span class="input-required">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text border-right-0 bg-brand-danger text-white" id="password_input">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="text" class="form-control border-left-0" id="password_input"
                                aria-describedby="password_input">
                        </div>
                        <div class="form-text" id="password_input">For security and confirmation purposes</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="clinic-modal-button primary px-1" data-bs-dismiss="modal">Close</button>
                <button type="button" class="clinic-modal-button danger px-1">Archive</button>
            </div>
        </div>
    </div>
</div>
<!-- archive clinic details modal end -->
<script src="./components/default/modals/modal-archive-clinic.js"></script>