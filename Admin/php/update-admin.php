<?php
if (isset($_POST['Update'])) {
    $id = $_GET['id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mi'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $cnum = $_POST['cnum'];
    $email = $_POST['email'];
    $pword = $_POST['pword'];
    $access = 'Admin';

    // Use NOW() for the current date
    $date = 'GETDATE()';

    // Check if the email is being changed
    $queryCheckEmail = "SELECT email FROM user_accounts WHERE userID = :idnew";
    $stmtCheckEmail = $conn->prepare($queryCheckEmail);
    $stmtCheckEmail->bindParam(':idnew', $id, PDO::PARAM_INT);
    $stmtCheckEmail->execute();
    $oldEmail = $stmtCheckEmail->fetchColumn();

    if ($oldEmail == $email) {
        // Email not changed, proceed with the update
        $sql = "UPDATE user_accounts
                SET Firstname = '$fname', Middle_Name  = '$mname', Lastname  = '$lname', Gender  = '$gender', Address = '$address', 
                Age = $age, Contact_Number = $cnum, password = '$pword', Access = '$access', Date_Created = $date
                WHERE userID = '$id';";
        $res = $conn->prepare($sql);
        $res->execute();

        if (!$res) {
            die($conn->error);
        } else {
            echo"<script> window.location.href='manage-user.php?update=Successfully Updated'</script>";
        }
    } else {
        // Email changed, check if it's already taken
        $queryCheckEmail = "SELECT email FROM user_accounts WHERE email = :email";
        $stmtCheckEmail = $conn->prepare($queryCheckEmail);
        $stmtCheckEmail->bindParam(':email', $email, PDO::PARAM_STR);
        $stmtCheckEmail->execute();

        if ($stmtCheckEmail->rowCount() == 0) {
            // Email is not taken, proceed with the update
            $sql = "UPDATE user_accounts
                    SET Firstname = '$fname', Middle_Name  = '$mname', Lastname  = '$lname', Gender  = '$gender', Address = '$address', 
                    Age = $age, Contact_Number = $cnum, email = '$email', password = '$pword', Access = '$access', Date_Created = $date
                    WHERE userID = '$id';";
            $res = $conn->prepare($sql);
            $res->execute();

            if (!$res) {
                die($conn->error);
            } else {
                echo"<script> window.location.href='manage-user.php?update=Successfully Updated'</script>";
            }
        } else {
            // Email is already taken
           echo"<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Email Already Taken',
                        showConfirmButton: false,
                        timer: 2000
                    });
                </script>";
        }
    }
}
?>
