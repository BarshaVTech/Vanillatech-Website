document.addEventListener("DOMContentLoaded", function () {
    // Select the navbar collapse element
    const navbarCollapse = document.getElementById('navbarNav');
    
    // Function to apply the event listeners
    function applyNavbarCollapse() {
        // Add click event listener to all navbar links and the "Get in Touch" button
        const navbarItems = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle), .get-in-touch');
        const submenuLinks = document.querySelectorAll('.mega-menu .sub-menu a');

        const clickableElements = [...navbarItems, ...submenuLinks];

        clickableElements.forEach(function (link) {
            link.addEventListener('click', handleNavLinkClick);
        });
    }

    // Function to remove the event listeners
    function removeNavbarCollapse() {
        const navbarItems = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle), .get-in-touch');
        const submenuLinks = document.querySelectorAll('.mega-menu .sub-menu a');

        const clickableElements = [...navbarItems, ...submenuLinks];

        clickableElements.forEach(function (link) {
            link.removeEventListener('click', handleNavLinkClick);
        });
    }

    // Event handler for clicking the nav links
    function handleNavLinkClick() {
        if (window.getComputedStyle(navbarCollapse).display !== 'none') {
            new bootstrap.Collapse(navbarCollapse).toggle();
        }
    }

    // Check screen width and apply or remove event listeners accordingly
    function checkScreenWidth() {
        if (window.innerWidth < 992) {
            applyNavbarCollapse();
        } else {
            removeNavbarCollapse();
        }
    }

    // Initial check on page load
    checkScreenWidth();

    // Reapply event listeners based on window resize
    window.addEventListener('resize', function () {
        checkScreenWidth();
    });
});