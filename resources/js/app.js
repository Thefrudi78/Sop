import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('[data-collapse-toggle="navbar-default"]');
    const navbar = document.getElementById('navbar-default');
    if (toggleButton && navbar) {
        toggleButton.addEventListener('click', function () {
            navbar.classList.toggle('hidden');
            // Optionally update aria-expanded
            const expanded = toggleButton.getAttribute('aria-expanded') === 'true';
            toggleButton.setAttribute('aria-expanded', !expanded);
        });
    }
});

function fadeOutAndRemove(element) {
    if (!element) return;
    element.classList.remove('animate-fade-in');
    element.classList.add('animate-fade-out');
    setTimeout(function() {
        element.remove();
    }, 500); // match fade-out duration
}
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        fadeOutAndRemove(document.getElementById('notif-success'));
        fadeOutAndRemove(document.getElementById('notif-error'));
    }, 5000);
    var closeBtns = document.querySelectorAll('#notif-success .btn-close, #notif-error .btn-close, #notif-success button[aria-label="Close"], #notif-error button[aria-label="Close"]');
    closeBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            var notif = btn.closest('#notif-success, #notif-error');
            fadeOutAndRemove(notif);
        });
    });
});
