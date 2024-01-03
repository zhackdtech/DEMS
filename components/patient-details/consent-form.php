<!-- archive clinic details modal -->
<div class="modal animate slideIn" id="consent_form" tabindex="-1" aria-labelledby="archive_clinic_modals" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white" style="background:#344767">
                <h1 class="modal-title fs-5 clinic-modal-title" id="exampleModalLabel">Patient consent form</h1>
            </div>
            <div class="modal-body clinic-modal-body">
                <!-- <div class="container pt-5">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-handshake text-success clinic-archive-modal-header-icon"></i>
                    </div>
                </div> -->
                <div class="row p-2">
                    <!-- <h3 class="text-center archive-clinic-modal-header py-1">
                        Acknowledgement and Waiver
                    </h3> -->
                </div>
                <div class="row p-2">
                    <div class="mb-3">
                        <label class="form-label">
                            I hereby allow Smile Republic Dental Clinic to</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="waiver1">
                            <label class="form-check-label consent-label" for="waiver1">
                                perform the procedures to me. The doctor explained the nature of the treatment and
                                how it will help me.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="waiver2">
                            <label class="form-check-label consent-label" for="waiver2">
                                administer anesthesia and understands the side effects of the medications given to
                                me.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="waiver3">
                            <label class="form-check-label consent-label" for="waiver3">
                                I understand the risk and complications if I do not follow the instructions given to me
                                after the procedure which involves post-treatment and follow-ups.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="waiver4">
                            <label class="form-check-label consent-label" for="waiver4">
                                I understand that I am not allowed to eat or drink 4-6 hours before the procedure.
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="waiver5">
                            <label class="form-check-label consent-label" for="waiver5">
                                I acknowledge that all information I provided int his form is true and accurate.
                            </label>
                        </div>
                        <!-- <div class="form-text mt-2" id="password_input">For confirmation purposes</div> -->
                    </div>
                    <div class="signature-pad col-12">
                        <label class="form-label">
                            Signature</label>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <canvas id="signature-pad"></canvas>
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center mt-2">
                                <div class="mb-3">
                                    <!-- <label for="birthday" class="form-label">Birthday<span class="input-required">*</span></label> -->
                                    <div class="input-group date mb-3">
                                        <span class="input-group-text border-right-0 color-brand-darkblue">
                                            <!-- <i class="fa-solid fa-cake-candles" aria-hidden="true"></i> -->
                                            DATE:&nbsp;
                                        </span>
                                        <input type="date" class="form-control date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="clinic-modal-button danger px-1" id="clear-btn">Clear</button>
                <button type="button" class="clinic-modal-button primary px-1" data-bs-dismiss="modal">Close</button>
                <button type="button" class="clinic-modal-button success px-1">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- archive clinic details modal end -->
<script src="./components/default/modals/modal-archive-clinic.js"></script>
<script src="../../components/patient-details/js/signature-pad.js"></script>
<script>

</script>