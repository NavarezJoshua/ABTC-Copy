<?php   
        if(isset($_GET['idnew']) && isset($_GET['patientid'])){
            $recordid = $_GET['idnew'];
            $patientid = $_GET['patientid'];
            include '../connection/connection.php';

            $date_expo = $_POST['e-date'];
            $p_expo = $_POST['p-expo'];
            $t_expo = $_POST['t-expo'];
            $s_expo = $_POST['s-expo'];
            $cat_expo = $_POST['c-expo'];
            $post_expo = $_POST['post-expo'];
            $wash = $_POST['washing-bite'];
            $RIG = $_POST['d-rig'];

            $gen_name = $_POST['generic-name'];
            $brand_name = $_POST['brand-name'];
            $route = $_POST['route'];
            $d3 = $_POST['d-3'];
            $d7 = $_POST['d-7'];
            $d14 = $_POST['d-14'];
            $d28_30 = $_POST['d-28_30'];
            $status = $_POST['status-animal'];
            $remarks = $_POST['remarks'];
            $doctor = $_POST['doc'];
            $d0 = $_POST['d-0'];
            $status_rec = $_POST['status_rec'];

            $sql = "UPDATE patient_records
            SET date_expo = '$date_expo', place_expo = '$p_expo', type_expo = '$t_expo', source_expo = '$s_expo', cat_expo = '$cat_expo', post_expo = '$post_expo', washing_bite = '$wash', date_rig = '$RIG', 
            gen_name = '$gen_name', brand_name = '$brand_name', route = '$route', day3 = '$d3', day7 = '$d7', day14_IM = '$d14', day28_30 = '$d28_30', Status = '$status', remark = '$remarks', doctor = '$doctor', day0 = '$d0',
            status_record = '$status_rec' WHERE patientID = $recordid";
            $res = $conn->prepare($sql);
            $res->execute();

            if(!$res){
                die($conn->$error);
            }
            else{
                header("Location: ../patient-details.php?patientid=$patientid&update=Update Succefully");
            }
        };
?>