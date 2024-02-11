<?php 
  if(!isset($_SESSION)){
    session_start();
  }
  
  if(isset($_SESSION['AdminID'])){
    $name = $_SESSION['Firstname'];
    $lname = $_SESSION['Lastname'];
  } 
  else {
    header("Location: Login.php");
    exit;
  }
?>

<link rel="stylesheet" href="css/navbar.css">

<?php include 'connection/connection.php'; ?>
<?php 
  $qr = "select COUNT(*) as AppointNumber from Appointment WHERE status = 'PENDING'";
  $query = $conn->prepare($qr);
  $query->execute();
  $row = $query->fetch();
?>

<nav class = "sidebar">
  <div class="logo">
    <h2>Welcome!</h2>
    <p><?php echo $name." ".$lname ?></p>
    <hr>
  </div>
  
    <div class="menu-content">

      <ul>
        <li class="item">
          <a href="index.php">Dashboard</a>
        </li>

        <li class="item">
          <a href="appointment.php">Appointment</a>
          <?php if($row['AppointNumber'] > 0) :?>
            <p id="num"><?php echo $row['AppointNumber'] ?></p>
          <?php endif; ?>
        </li>

        <li class="item">
          <a href="patient-records.php">Patient Records</a>
        </li>

        <li class="item">
          <a href="manage-user.php">Manage Patients</a>
        </li>

        <li class="item">
          <a href="manage-admin.php">Manage Admin</a>
        </li>

        <li class="item">
          <a href="function.php">Reports</a>
        </li>
      </ul>

    <button id="logout" type="submit">Logout</button>
  </div>
</nav>
    <script>
      const btn = document.querySelector('#logout')
      btn.addEventListener('click', () =>{
        Swal.fire({
                title: 'Are you sure you want to logout?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                if (result.isConfirmed) {
                  window.location.href="php/logout.php";
                }
            });
      });
    </script>
    <script src="js/navbar.js"></script>
</nav>
  
  
