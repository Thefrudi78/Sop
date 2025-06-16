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
