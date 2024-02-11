<?php 
    session_unset();

    if(!isset($_SESSION)){
        session_start();
    }

    include 'connection/connection.php';
    if(isset($_GET['patientid'])){
        $patientID = $_GET['patientid'];
        $query="SELECT patient_details.*, patient_records.*
                FROM patient_records
                INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
                where patient_details.patient_detID = $patientID";
        $res = $conn->prepare($query);
        $res->execute();
        $row1 = $res->fetch();

    } elseif(isset($_GET['appointID'])){
        $appointID = $_GET['appointID'];

        $query="SELECT Appointment.*, user_accounts.*
                FROM Appointment
                INNER JOIN user_accounts
                ON Appointment.userID = user_accounts.userID
                WHERE Appointment.AppointID = $appointID";

        $res = $conn->prepare($query);
        $res->execute();
        $row1 = $res->fetch();
        if(!empty($row)){
            $_SESSION['Name'] = $row1['Firstname'];
            $_SESSION['Lastname'] = $row1['Lastname'];
            $_SESSION['Age'] = $row1['Age'];
            $_SESSION['Gender'] = $row1['Gender'];
            $_SESSION['Email'] = $row1['email'];
            $_SESSION['Address'] = $row1['Address'];
            $_SESSION['Cnum'] = $row1['Contact_Number'];
            $_SESSION['Date_Created'] = $row1['Date_Created'];

            $sql1 = "SELECT Appointment.*, patient_records.*
                     FROM patient_records
                     INNER JOIN Appointment ON Appointment.AppointID = patient_records.AppointID
                     WHERE Appointment.AppointID = $appointID";
            $res = $conn->prepare($sql1);
            $res->execute();
            $row1 = $res->fetch();
        }
    }
?>