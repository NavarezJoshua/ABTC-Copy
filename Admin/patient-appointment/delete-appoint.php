<?php 
    if(isset($_GET['delid'])){
        include '../connection/connection.php';
        $id = $_GET['delid'];

        $query1 = "DELETE FROM patient_records WHERE AppointID = ?";
        $res1 = $conn->prepare($query1);
        $res1->execute([$id]); // Pass ID as parameter to avoid SQL injection

        $query2 = "DELETE FROM Appointment WHERE AppointID = ?";
        $res2 = $conn->prepare($query2);
        $res2->execute([$id]); // Pass ID as parameter to avoid SQL injection

        if($res1->rowCount() > 0 || $res2->rowCount() > 0){ // Check rowCount() for affected rows
            echo "<script>window.location.href='../appointment.php?delete=Deleted Successfully'</script>"; 
        }
        else{
            echo "Error occurred: " . $conn->errorInfo()[2]; // Use errorInfo() to fetch error details
        }       
    }
?>