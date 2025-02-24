document.addEventListener('DOMContentLoaded', function() {
    const deleteButton = document.getElementById('deleteButton');
    
    deleteButton.addEventListener('click', function() {
        const userId = deleteButton.getAttribute('data-userid');
        
        if (confirm("Are you sure you want to delete your profile? This action cannot be undone.")) {
            fetch('delete_profile.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'userid=' + encodeURIComponent(userId)
            })
            .then(response => response.text())
            .then(data => {
                if (data === 'success') {
                    alert("Your profile has been deleted.");
                    window.location.href = 'login.php'; // Redirect to login page after deletion
                } else {
                    alert("There was an error deleting your profile. Please try again.");
                }
            })
            .catch(error => console.error('Error:', error));
        }
    });
});
