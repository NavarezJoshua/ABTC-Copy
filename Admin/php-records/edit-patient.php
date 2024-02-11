<?php
if (isset($_GET['updateid'])) {
    include 'connection/connection.php';
    $id = $_GET['updateid'];

    // Check if the update is for a patient_details record
    $query = "SELECT * FROM patient_details WHERE patient_detID = $id";
    $res = $conn->prepare($query);
    $res->execute();
    $row = $res->fetch();

    if(empty($row)){
        $query = "SELECT Appointment.*, 
        user_accounts.Firstname as fname,
        user_accounts.Lastname as lname,
        user_accounts.Middle_Name as mname,
        user_accounts.email as email,
        user_accounts.Address as address,
        user_accounts.Age as age,
        user_accounts.Gender as Sex,
        user_accounts.Contact_Number as cnum
        FROM Appointment
        INNER JOIN user_accounts ON user_accounts.userID = Appointment.userID
        WHERE Appointment.AppointID = $id";
        $res = $conn->prepare($query);
        $res->execute();
        $row = $res->fetch();

       
        if(!empty($row)){
            if (isset($_POST['edit'])) {
                $userID = $row['userID'];
                $lname = $_POST['lname'];
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $address = $_POST['address'];
                $age = $_POST['age'];
                $cnum = $_POST['cnum'];
                $sex = $_POST['sex'];
    
                $query = "UPDATE user_accounts
                SET Firstname = :fname, Middle_Name = :mname, Lastname = :lname, Gender = :sex, Age = :age, Contact_Number = :cnum
                WHERE userID = :userID";
                $res = $conn->prepare($query);
                $res->bindParam(':fname', $fname);
                $res->bindParam(':mname', $mname);
                $res->bindParam(':lname', $lname);
                $res->bindParam(':sex', $sex);
                $res->bindParam(':age', $age);
                $res->bindParam(':cnum', $cnum);
                $res->bindParam(':userID', $userID);
                $res->execute();

    
                if (!$res) {
                    die($conn->error);
                } else {
                    echo "<script>window.location.href='patient-records.php?update=Updated Successfully'</script>";
                }
            }
        }
    } elseif(!empty($row)){
        if (isset($_POST['edit'])) {
            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $age = $_POST['age'];
            $cnum = $_POST['cnum'];
            $sex = $_POST['sex'];

            $query = "UPDATE patient_details
                      SET lname = :lname, fname = :fname, mname = :mname, address = :address, age = :age, cnum = :cnum, Sex = :sex
                      WHERE patient_detID = :patient_detID";
            $res = $conn->prepare($query);
            $res->bindValue(':lname', $lname);
            $res->bindValue(':fname', $fname);
            $res->bindValue(':mname', $mname);
            $res->bindValue(':address', $address);
            $res->bindValue(':age', $age);
            $res->bindValue(':cnum', $cnum);
            $res->bindValue(':sex', $sex);
            $res->bindValue(':patient_detID', $id);

            $res->execute();

            if (!$res) {
                die($conn->error);
            } else {
                echo "<script>window.location.href='patient-records.php?update=Updated Successfully'</script>";
            }
        }
    } else{
       die("Error: Update ID not provided");
    }
}
