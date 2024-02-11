<?php
    if(isset($_GET['id'])){
        include '../connection/connection.php';
        $id = $_GET['id'];
        $sql = "DELETE FROM user_accounts WHERE userID = $id";
        $res = $conn->prepare($sql);
        $res->execute();

        if(!$res){
            die($conn->error);
        }
        else{
            echo"<script>window.location.href='../manage-user.php?delete=Deleted Succesfully'</script>";
        }
    }
?>