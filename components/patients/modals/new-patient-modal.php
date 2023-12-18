<!-- view clinic details modal -->
<div class="modal animate slideIn" id="new_patient_modal" tabindex="-1" aria-labelledby="new_patient_modal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
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
                <div class="row px-3 py-2 new-patient-modal-label">
                    Personal
                </div>
                <div class="row py-2 px-3">
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="clinic_name" class="form-label">Lastname<span class="input-required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text border-right-0  text-dark" id="last_name">
                                    <i class="fa-solid fa-id-card"></i>
                                </span>
                                <input type="text" class="clinic-modal-input form-control border-left-0" id="last_name"
                                    style="color:var(--color-dark)" aria-describedby="last_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="clinic_name" class="form-label">Firstname<span class="input-required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="first_name">
                                    <i class="fa-solid fa-id-card"></i>
                                </span>
                                <input type="text" class="clinic-modal-input form-control border-left-0" id="first_name"
                                    style="color:var(--color-dark)" aria-describedby="first_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="clinic_name" class="form-label">Middle name<span class="input-required">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="middle_name">
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
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="middle_name">
                                    <i class="fa-solid fa-id-card"></i>
                                </span>
                                <select class="form-select new-patient-modal-select clinic-modal-input animate slideIn">
                                    <option selected>-</option>
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
                <div class="row px-3 py-2">
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender<span class="input-required">*</span></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="gender">
                                    <div class="dropdown-center clinic-dropdown">
                                        <div class="color-brand-darkblue shadow">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-menu p-1 animate slideIn">
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        &nbsp;Male</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        &nbsp;Female</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </span>
                                <input type="text" class="clinic-modal-input form-control" id="gender"
                                    style="color:var(--color-dark)" aria-describedby="gender"
                                    placeholder="Click icon to select">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="civil_status" class="form-label">Civil status<span class="input-required">*</span></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="civil_status">
                                    <div class="dropdown-center clinic-dropdown">
                                        <div class="color-brand-darkblue shadow">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-menu p-1 animate slideIn">
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        &nbsp;Single</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        &nbsp;Married</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        &nbsp;Divorced</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        &nbsp;Widowed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </span>
                                <input type="text" class="clinic-modal-input form-control" id="civil_status"
                                    style="color:var(--color-dark)" aria-describedby="gender"
                                    placeholder="Click icon to select">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="birthday" class="form-label">Birthday<span class="input-required">*</span></label>
                            <div class="input-group date mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="birthday">
                                    <i class="fa-solid fa-cake-candles"></i>
                                </span>
                                <input type="date" class="form-control date">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-3 py-2">
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile<span class="input-required">*</span></label>
                            <div class="input-group date mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="mobile">
                                    <i class="fa-solid fa-plus"></i><i class="fa-solid fa-6"></i><i
                                        class="fa-solid fa-3"></i>
                                </span>
                                <input type="number" class="form-control"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1').slice(0, 11);">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Telephone</label>
                            <div class="input-group date mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="telephone">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <input type="number" class="form-control"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1').slice(0, 11);">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group date mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="email">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="social" class="form-label">Social Media</label>
                            <div class="input-group date mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="social">
                                    <i class="fa-solid fa-arrows-rotate"></i>
                                </span>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-3 py-2">
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <div class="input-group date mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="address">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-3 p-2 new-patient-modal-label">
                    Guardian
                </div>
                <div class="row px-3 py-2">
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-6">
                            <label for="guardian" class="form-label">Guardian name<span class="input-required">*</span></label>
                            <div class="input-group date mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="guardian">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-6">
                            <label for="guardian" class="form-label">Guardian contact<span class="input-required">*</span></label>
                            <div class="input-group date mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="guardian">
                                    <i class="fa-solid fa-hashtag"></i>
                                </span>
                                <input type="text" class="form-control"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1').slice(0, 11);">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-6">
                            <label for="grd_relationship" class="form-label">Relationship<span class="input-required">*</span></label>
                            <div class="input-group date mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue"
                                    id="grd_relationship">
                                    <i class="fa-solid fa-people-arrows"></i>
                                </span>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-3 p-2 new-patient-modal-label">
                    Doctor's notes
                </div>
                <div class="row px-3 py-2">
                    <div class="col-12 col-lg-6 col-md-6 p-1">
                        <div class="mb-6">
                            <label for="doc_notes" class="form-label">Remarks</label>
                            <div class="input-group  mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="tags">
                                    <i class="fa-solid fa-quote-right"></i>
                                </span>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-6">
                            <label for="tags" class="form-label">Tags</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="tags"><i
                                        class="fa-solid fa-user-tag"></i>
                                </span>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 p-1">
                        <div class="mb-3">
                            <label for="gender" class="form-label">How did you hear about us?</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text border-right-0  color-brand-darkblue" id="gender">
                                    <div class="dropdown-center clinic-dropdown">
                                        <div class="color-brand-darkblue shadow">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-menu p-1 animate slideIn">
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        <i class="fa-solid fa-person-walking-arrow-right"></i>
                                                        &nbsp;Walk in</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        <i class="fa-solid fa-person"></i>
                                                        &nbsp;Referred</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        <i class="fa-brands fa-searchengin"></i>
                                                        &nbsp;Search engine</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        <i class="fa-brands fa-facebook"></i>
                                                        &nbsp;Facebook</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        <i class="fa-brands fa-square-instagram"></i>
                                                        &nbsp;Instagram</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        <i class="fa-brands fa-tiktok"></i>
                                                        &nbsp;Tiktok</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        <i class="fa-brands fa-youtube"></i>
                                                        &nbsp;Youtube</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item clinic-dropdown-item" href="#">
                                                        &nbsp;others</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </span>
                                <input type="text" class="clinic-modal-input form-control" id="gender"
                                    style="color:var(--color-dark)" aria-describedby="gender"
                                    placeholder="Click icon to select">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 p-1">
                    <div class="mb-6">
                        <label for="tags" class="form-label">Reffered by</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text border-right-0  color-brand-darkblue" id="tags">
                                <i class="fa-solid fa-person"></i>
                            </span>
                            <input type="text" class="form-control">
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