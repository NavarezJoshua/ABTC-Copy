<?php 
    if(isset($_POST['AddnewRecord'])){

        $patientID = $_GET['appointid'];

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
        $d28_30 = $_POST['d-28'];
        $status = $_POST['status-animal'];
        $remarks = $_POST['remarks'];
        $doctor = $_POST['doc'];
        $d0 = $_POST['d-0'];
        $status_rec = $_POST['status_rec'];

        // ADD RECORDS
        $sql3 = "INSERT INTO patient_records(date_expo, place_expo, type_expo, source_expo, cat_expo, post_expo, washing_bite, date_rig, gen_name, brand_name, route, day3, day7, day14_IM, day28_30, Status, remark, doctor, patient_detID, Date_added, day0, status_record) 
        VALUES('$date_expo','$p_expo', '$t_expo','$s_expo','$cat_expo','$post_expo','$wash','$RIG','$gen_name','$brand_name', '$route','$d3','$d7','$d14','$d28_30','$status','$remarks', '$doctor', $patientID, GETDATE(), '$d0', '$status_rec');";
        $res = $conn->prepare($sql3);
        $res->execute();

        if($res){
            echo"<script>window.location.href='patient-details.php?patientid=$patientID'</script>";
        }
        else{
            echo'something went wrong';
        }


    }
    
?>