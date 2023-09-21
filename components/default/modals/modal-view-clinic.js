const view_modal = document.getElementById('view_details_modals')
if (view_modal) {
    view_modal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const clinicName = button.getAttribute('data-bs-clinicname')
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.
        const modalTitle = view_modal.querySelector('.modal-title')

        modalTitle.textContent = `Viewing details of: ${clinicName}`
    })
}