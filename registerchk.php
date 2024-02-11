<?php
include 'Admin/connection/connection.php';

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkEmailSql = "SELECT email FROM user_accounts WHERE email = :email";
    $checkEmailStmt = $conn->prepare($checkEmailSql);
    $checkEmailStmt->bindParam(':email', $email);
    $checkEmailStmt->execute();
    $rows = $checkEmailStmt->fetchAll();

    if (!empty($rows)) {
        ?>
        <script>
            Swal.fire(
                'Unsuccessful Registered',
                'Email Already Taken!',
                'error'
            )
        </script>
        <?php
    } else {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $cnum = $_POST['cnum'];
        $address = $_POST['address'];

        $insertSql = "INSERT INTO user_accounts (Firstname, Middle_Name, Lastname, Gender, Address, Age, Contact_Number, password, Access, Date_Created, email) 
        VALUES (:fname, :mname, :lname, :gender, :address, :age, :cnum, :password, 'User', GETDATE(), :email)";
        
        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bindParam(':fname', $fname);
        $insertStmt->bindParam(':mname', $mname);
        $insertStmt->bindParam(':lname', $lname);
        $insertStmt->bindParam(':gender', $gender);
        $insertStmt->bindParam(':address', $address);
        $insertStmt->bindParam(':age', $age);
        $insertStmt->bindParam(':cnum', $cnum);
        $insertStmt->bindParam(':password', $password);
        $insertStmt->bindParam(':email', $email);

        $insertStmt->execute();

        ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Registered',
                showConfirmButton: false,
                timer: 2000
            })
        </script>
        <?php
    }
}
?>
