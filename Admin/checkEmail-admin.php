<?php
include 'connection/connection.php';

if (!empty($_POST['email'])) {
    $email = $_POST['email'];

    // Prepare the query using placeholders to prevent SQL injection
    $query = "SELECT email FROM user_accounts WHERE email=:email and Access='Admin'";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (count($result) > 0) {
        echo "<span> Email has already been used! </span>";
        echo "<script>$('#Add_User').prop('disabled', true);</script>";
    } 
    else{
        echo "<script>$('#Add_User').prop('disabled', false);</script>";
    }
}
?>
