const exampleModal = document.getElementById('edit_details_modals')
if (exampleModal) {
    exampleModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const clinicName = button.getAttribute('data-bs-clinicname')
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.
        const modalTitle = exampleModal.querySelector('.modal-title')

        modalTitle.textContent = `Editing branch of: ${clinicName}`
    })
}