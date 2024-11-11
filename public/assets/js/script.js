
window.confirmDelete = function() {
    document.getElementById('formDestroy').submit();
};

window.hideConfirmModal = function() {
    const confirmModal = bootstrap.Modal.getInstance(document.getElementById('confirmModal'));
    confirmModal.hide();
};

window.showConfirmModal = function() {
    const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
        confirmModal.show();
};
