document.getElementById('editProfileBtn').addEventListener('click', function() {
    var editForm = document.querySelector('.edit-profile-form');
    if (editForm.style.display === 'none') {
        editForm.style.display = 'block';
    } else {
        editForm.style.display = 'none';
    }
});
const urlParams = new URLSearchParams(window.location.search);
    const successMessage = urlParams.get('success');

    if (successMessage) {
        // Display an alert with the success message
        alert(successMessage);
    }