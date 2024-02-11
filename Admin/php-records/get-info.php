<?php
if(!isset($_SESSION)){
    session_start();
}

if (isset($_GET['patientid']) && isset($_GET['recordid'])) {
    $patientid = $_GET['patientid'];
    $recordid = $_GET['recordid'];

    // Create a prepared statement with parameter binding
    $query = "SELECT patient_details.*, patient_records.*
    FROM patient_records 
    INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
    WHERE patient_records.patient_detID = $patientid and patient_records.patientid=$recordid ;";

    $res = $conn->prepare($query);
    $res->execute();  
}

elseif(isset($_GET['appointID']) && isset($_GET['recordid'])){
    $appointID = $_GET['appointID'];
    $recordid = $_GET['recordid'];

    $query2 = "SELECT user_accounts.* FROM Appointment
    INNER JOIN user_accounts ON user_accounts.userID = Appointment.userID 
    WHERE Appointment.AppointID = $appointID";
    $result = $conn->prepare($query2);
    $result->execute();
    $rows = $result->fetch();
    $_SESSION['Fname'] = $rows['Firstname'];
    $_SESSION['Lname'] = $rows['Lastname'];

    $query = "SELECT patient_records.*, Appointment.*
    FROM patient_records 
    INNER JOIN Appointment ON patient_records.AppointID = patient_records.AppointID
    WHERE patient_records.AppointID = $appointID";

    $res = $conn->prepare($query);
    $res->execute(); 
}
?>