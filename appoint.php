<?php 
if(!isset($_SESSION)){
    session_start();
}

include('Admin/connection/connection.php');

if(isset($_POST['submit']))
{
    $userID = $_SESSION['UserID'];
    $reasons = $_POST['reason'];
    $status = "PENDING";
    $symptoms = $_POST['symptoms'];
    $accidentdate = $_POST['accident-d'];
    $animal = $_POST['animal'];
    $other = $_POST['other_animal'];

    $query_run = $conn->prepare("INSERT INTO Appointment (reason, Status, symptoms, Accident_date, Animal, Other_Animal, userID) VALUES (?,?,?,?,?,?,?)");
    $query_run->execute([$reasons, $status, $symptoms, $accidentdate, $animal, $other, $userID]);
    
    if($query_run)
    {
       echo"<script>window.location.href = 'menu.php?insertap=SuccessfullyAdded';</script>";
    }
    else
    {
        exit(0);
    }
}



?>