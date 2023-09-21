const archive_modal = document.getElementById('archive_clinic_modals')
if (archive_modal) {
    archive_modal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const clinicName = button.getAttribute('data-bs-clinicname')
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.
        const modalTitle = archive_modal.querySelector('.modal-title')
        const modalHeader = archive_modal.querySelector('h3.archive-clinic-modal-header');

        modalHeader.textContent = `Do you really want to archive ${clinicName}?`;
        modalTitle.textContent = `Archive: ${clinicName}`
    })
}