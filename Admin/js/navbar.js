
  // Get the current page's URL
let currentURL = window.location.href;

// Get all the navbar links
let navbarLinks = document.querySelectorAll('.sidebar .menu-content ul li a');

// Loop through each navbar link and check if the link's href matches the current URL
navbarLinks.forEach(link => {
if (link.href === currentURL) {
    link.classList.add('active'); // Add 'active' class to the matching link
}
});

