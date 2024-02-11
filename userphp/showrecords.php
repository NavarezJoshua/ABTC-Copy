<?php
    if(!isset($_SESSION)){
        session_start();
    };

    if(isset($_GET['pid'])){
        $patientID = $_GET['pid'];
        $email = $_SESSION['Email'];
        $query = "SELECT patient_records.*, patient_details.email
        FROM patient_records
        INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
        WHERE patient_details.email = '$email' AND patient_records.patientID = '$patientID'";
        $result = $conn->prepare($query);
        $result->execute();

        $rows = $result->fetchAll();
    }
?>