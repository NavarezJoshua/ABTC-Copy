<?php
include 'connection/connection.php';

if (!empty($_POST['email'])) {
    $email = $_POST['email'];

    // Prepare the query using placeholders to prevent SQL injection
    $query = "SELECT email FROM patient_details WHERE email=:email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (count($result) > 0) {
        echo "<span> Email has already been used! </span>";
        echo "<script>$('#modal-button').prop('disabled', true);</script>";
    } 
    else{
        echo "<script>$('#modal-button').prop('disabled', false);</script>";
    }
}
?>
