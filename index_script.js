function logout() {
    $.ajax({
        url: 'logout.php',
        type: 'POST',
        success: function(response) {
            window.location.href = 'index.php';
        }
    });
}