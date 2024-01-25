function hideOverlay() {
    var overlay = document.getElementById('overlay');
    if (overlay) {
        overlay.style.display = 'none';
    }
}

function showOverlay() {
    var overlay = document.getElementById('overlay');
    if (overlay) {
        overlay.style.display = 'block';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var icon = document.querySelector('lord-icon');
    icon.addEventListener('mouseleave', hideOverlay);
});