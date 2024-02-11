<?php
    if(isset($_GET['appid'])){
        $appid=$_GET['appid'];
        include './connection/connection.php';

        $query="select Appointment.*, user_accounts.*
        from Appointment
        INNER JOIN user_accounts ON Appointment.userID = user_accounts.userID
        WHERE Appointment.AppointID = $appid";
        $res = $conn->prepare($query);
        $res->execute();
    }
?>