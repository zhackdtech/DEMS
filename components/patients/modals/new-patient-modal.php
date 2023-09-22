<!-- view clinic details modal -->
<div class="modal animate slideIn" id="new_patient_modal" tabindex="-1" aria-labelledby="new_patient_modal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white" style="background:#344767">
                <h1 class="modal-title fs-5 clinic-modal-title" id="exampleModalLabel">New patient</h1>
                <div class="d-flex flex-row flex-row-reverse">
                    <div class="">
                        <div class="input-group">
                            <input type="date"
                                class="clinic-modal-input form-control bg-transparent text-white new-patient-modal-date"
                                id="clinic_address" style="color:var(--color-dark)" aria-describedby="clinic_address">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body clinic-modal-body">
                <div class="row p-2 px-3">
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="clinic_name" class="form-label">Lastname</label>
                            <div class="input-group">
                                <span class="input-group-text border-right-0 bg-dark-blue text-white" id="last_name">
                                    <i class="fa-solid fa-id-card"></i>
                                </span>
                                <input type="text" class="clinic-modal-input form-control border-left-0" id="last_name"
                                    style="color:var(--color-dark)" aria-describedby="last_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="clinic_name" class="form-label">Firstname</label>
                            <div class="input-group">
                                <span class="input-group-text border-right-0 bg-dark-blue text-white" id="first_name">
                                    <i class="fa-solid fa-id-card"></i>
                                </span>
                                <input type="text" class="clinic-modal-input form-control border-left-0" id="first_name"
                                    style="color:var(--color-dark)" aria-describedby="first_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="clinic_name" class="form-label">Middle name</label>
                            <div class="input-group">
                                <span class="input-group-text border-right-0 bg-dark-blue text-white" id="middle_name">
                                    <i class="fa-solid fa-id-card"></i>
                                </span>
                                <input type="text" class="clinic-modal-input form-control border-left-0"
                                    id="middle_name" style="color:var(--color-dark)" aria-describedby="middle_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="clinic_name" class="form-label">Suffix</label>
                            <div class="input-group mb-3">
                            <span class="input-group-text border-right-0 bg-dark-blue text-white" id="middle_name">
                                    <i class="fa-solid fa-id-card"></i>
                                </span>
                                <select class="form-select new-patient-modal-select clinic-modal-input" >
                                    <option selected>None</option>
                                    <option value="1">Sr.</option>
                                    <option value="2">Jr.</option>
                                    <option value="3">I</option>
                                    <option value="3">II</option>
                                    <option value="3">III</option>
                                    <option value="3">IV</option>
                                </select>
                            </div>
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