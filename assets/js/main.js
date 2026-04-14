// =========================
// Mobile Menu Toggle
// =========================

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', function(e) {
            // Prevent any default jumpy behavior
            e.stopPropagation(); 
            
            // Toggle classes
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
            
            console.log("Menu toggled: ", navLinks.classList.contains('active'));
        });

        // Close menu if clicking outside of it
        document.addEventListener('click', function(e) {
            if (!menuToggle.contains(e.target) && !navLinks.contains(e.target)) {
                menuToggle.classList.remove('active');
                navLinks.classList.remove('active');
            }
        });
    }
});