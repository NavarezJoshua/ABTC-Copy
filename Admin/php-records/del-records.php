<?php
if (isset($_GET['deletepid'])&& isset($_GET['patientdetID'])) {
    $pid = $_GET['deletepid'];
    $patientdetID = $_GET['patientdetID'];

    include '../connection/connection.php';

    // Prepare and execute the DELETE query
    $query = "DELETE FROM patient_records WHERE patientID = :pid";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':pid', $pid, PDO::PARAM_INT);

    if ($stmt->execute()) {
        // Use JavaScript to redirect after a successful deletion
        echo "<script>window.location.href='../patient-details.php?patientid=" . $patientdetID . "&msg=successfully deleted';</script>";
    } else {
        // Handle any errors that may occur during deletion
        echo "Error deleting the record.";
    }
}
?>
