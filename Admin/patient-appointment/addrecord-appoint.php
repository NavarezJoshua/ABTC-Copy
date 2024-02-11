<?php 
if(isset($_GET['addid'])){
    include '../connection/connection.php';
    $id = intval($_GET['addid']);

    $sql = "SELECT AppointID FROM patient_records WHERE AppointID = :id";
    $res1 = $conn->prepare($sql);
    $res1->bindParam(':id', $id, PDO::PARAM_INT);
    $res1->execute();

    $row = $res1->fetch(PDO::FETCH_ASSOC);

    if($row){
        echo "<script>window.location.href='../appointment.php?AlreadyInserted=Already Inserted'</script>";
    } 
    else {
        $sql = "INSERT INTO patient_records (AppointID) VALUES (:id)";
        $res = $conn->prepare($sql);
        $res->bindParam(':id', $id, PDO::PARAM_INT);
        $res->execute();

        if($res->rowCount() > 0){
            echo "<script>window.location.href='../appointment.php?insert=Inserted Successfully'</script>"; 
        }
        else{
            echo "Error occurred: " . implode(" ", $res->errorInfo());
        }       
    }
}
?>
