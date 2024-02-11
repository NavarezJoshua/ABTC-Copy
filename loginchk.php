<?php
if(!isset($_SESSION)){
  session_start(); // Start the session
}

include 'Admin/connection/connection.php';

if(isset($_POST['log'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Use prepared statements to prevent SQL injection
  $sql = "SELECT * FROM user_accounts WHERE email = ?";
  $res = $conn->prepare($sql);
  $res->execute([$email]);
  $row = $res->fetch(PDO::FETCH_ASSOC);

  if($row){

    // USER ACCOUNTS
    if($row['Access'] === 'User'){
      if($password === $row['password']){
        $_SESSION['UserID'] = $row['userID'];
        $_SESSION['Email'] = $row['email'];
        $_SESSION['Firstname'] = $row['Firstname'];
        $_SESSION['Lname'] = $row['Lastname'];
        $_SESSION['Mname'] = $row['Middle_Name'];
        $_SESSION['Cnum'] = $row['Contact_Number'];
        header('Location: Menu.php'); // Fix the 'Location' header
        exit(); // Make sure to exit after setting the session and redirecting
      } else {
        ?>
        <script>
          Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Wrong Password',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
        <?php
      }
    }
    //END USER ACCOUNTS

    // ADMIN ACCOUNTS
    else{
      if($password === $row['password']){
        $_SESSION['AdminID'] = $row['userID'];
        $_SESSION['Firstname'] = $row['Firstname'];
        $_SESSION['Lastname'] = $row['Lastname'];
        header('Location: Admin/index.php'); // Fix the 'Location' header
        exit();
      } else {
        ?>
        <script>
          Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Wrong Password',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
        <?php
      }
    }
  } 
  // END ADMIN ACCOUNTS

  else {
    ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'No User found',
        showConfirmButton: false,
        timer: 2000
      })
    </script>
    <?php
  }
}
?>
