function toggleMenu() {
    var navLinks = document.getElementById("navLinks");
    navLinks.classList.toggle("active");
};

const btn = document.getElementById('btn-log');

  btn.addEventListener('click', () => {
    Swal.fire({
      title: 'Are you sure you want to logout?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Yes',
      cancelButtonText: 'No'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href="log.php";
      }
    });
});

let navbarLinks = document.querySelectorAll('.navbar .nav-links a');

function handleLinkClick(event) {
  navbarLinks.forEach(link => {
    link.classList.remove('active');
  });

  event.target.classList.add('active');
}

navbarLinks.forEach(link => {
  link.addEventListener('click', handleLinkClick);
});


