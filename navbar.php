<link rel="stylesheet" href="./user-css/navbar.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<nav class="navbar">

    <div class="logo">
      <img src="Image/Logo2.png" alt="" srcset="" id="logo">
    </div>

    <ul class="nav-links" id="navLinks">
        <li><a href="Menu.php#Home">Home</a></li>
        <li><a href="Menu.php#Appointment">Appointment</a></li>
        <li><a href="Menu.php#Records">Records</a></li>
        <div class="logout">
          <button type="button" id="btn-log">Logout</button>
        </div>
    </ul>

    <div class="burger-menu" onclick="toggleMenu()">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
</nav>

<script src="UserJS/nav.js"></script>
