<?php
        if (isset($_SESSION['AdminID'])) {
            if (!isset($_SESSION['LoginSuccessDisplayed'])) {
                echo "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Login Successfully',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
    
                $_SESSION['LoginSuccessDisplayed'] = true;
            }
        } else {
            header("Location: ../login.php");
            exit;
        }
         include 'connection/connection.php';

        $query = "SELECT COUNT(*) as User_Counts FROM user_accounts WHERE Access = 'User';";
        $res = $conn->prepare($query);
        $res->execute();
        $user_acc = $res->fetch();

        $query = "SELECT COUNT(*) as Appointment FROM Appointment";
        $res = $conn->prepare($query);
        $res->execute();
        $appoint = $res->fetch();

        $query = "SELECT COUNT(*) as total_patients FROM patient_details";
        $res = $conn->prepare($query);
        $res->execute();
        $totappoint = $res->fetch();        

        $query = "SELECT COUNT(*) as total_records FROM patient_records";
        $res = $conn->prepare($query);
        $res->execute();
        $totrecords = $res->fetch();  

    ?>