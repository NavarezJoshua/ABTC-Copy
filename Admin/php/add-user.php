<?php
    if(isset($_POST['Add-new'])){
    
        $email = $_POST['email'];

        $sql1="select email from user_accounts where email = '$email'";
        $result= $conn->prepare($sql1);
        $result->execute();
        $rows = $result->fetchAll();
        
        if(!empty($rows)){

            echo"<script>window.location.href='manage-user.php?taken=Username Already Taken'</script>";
            
        }
        else{
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $MI = $_POST['MI'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $cnum = $_POST['contact_number'];
            $address = $_POST['address'];
            $username = $_POST['email'];
            $password = $_POST['password'];

            $sql="insert into user_accounts(Firstname, Middle_Name, Lastname, Gender, Address, Age, Contact_Number,
            email, password, Access, Date_Created) VALUES ('$fname', '$MI', '$lname', '$gender', '$address', $age, 
                                                            $cnum, '$email','$password', 'User', GETDATE())";

            $res = $conn->prepare($sql);
            $res->execute();

            if(!$res){
                die($conn->error);
            }

            else{
                echo"<script>window.location.href='manage-user.php?insert=Succesfuly Registered'</script>";
            }
        }
    }
?>