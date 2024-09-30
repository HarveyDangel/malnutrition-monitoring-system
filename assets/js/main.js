$(document).ready( function () {
    $('#myTable').DataTable();
} );


window.onload = function() {
    var message = document.getElementById('flash-message');
    if (message) {
        setTimeout(function() {
            message.style.display = 'none';
        }, 5000); // Change this value to adjust timeout
    }
};

