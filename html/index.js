// index.js
// Highlight the current page link
const pageName = window.location.pathname.slice(1).split("/")[0];
const navLinks = document.querySelectorAll('nav a');

navLinks.forEach(link => {
    if (link.getAttribute('href') === pageName) {
        link.classList.add('active');
    }
});

// Example: Dark mode toggle
const toggleDarkMode = document.querySelector('.toggle-dark-mode');

if (toggleDarkMode) {
    toggleDarkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
}
