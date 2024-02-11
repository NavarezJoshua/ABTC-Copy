<?php 
    if(isset($_GET['patientid'])){
?>
    <div class="p-1">
    <h2>Patient Name:</h2>
    <h3><?php echo $row1['fname'] . ' ' . $row1['lname']; ?></h3>

    <h2>Patient ID No:</h2>
    <h3><?php echo $row1['patient_detID']; ?></h3>
</div>

<div class="p-2">
    <h1>PATIENT DETAILS</h1>
    <h3>Firstname: <br><span><?php echo $row1['fname']; ?></span></h3>
    <h3>Lastname: <br><span><?php echo $row1['lname']; ?></span></h3>
    <h3>Age: <br><span><?php echo $row1['age']; ?></span></h3>
    <h3>Gender: <br><span><?php echo $row1['Sex']; ?></span></h3>
    <h3>Email: <br><span><?php echo $row1['email']; ?></span></h3>
    <h3>Address: <br><span><?php echo $row1['address']; ?></span></h3>
    <h3>Contact Number: <br><span><?php echo $row1['cnum']; ?></span></h3>
    <h3>Date Registered: <br><span><?php echo $row1['Date_Added']; ?></span></h3>
</div>
<div class="p-3">
<h1>Add Records</h1>
<div class="btn">
    <button type="button" id='btn-nr'><i class="fa-solid fa-plus"></i> Add New Record</button>   
    <i class="fa-solid fa-arrow-left" id="btn-back" onclick="goBack('patient-records.php')"></i>
</div>

<div class="t-3">
    <div id="scroll">
        <table>
            <tr>
                <th>ID</th>
                <th>Category of Exposure</th>
                <th>Remarks</th>
                <th>Date Consulted</th>
                <th>Status</th>
                <th>Action</th>

                <?php
                    $query = "SELECT patient_records.*, patient_details.patient_detID
                            FROM patient_records
                            INNER JOIN patient_details ON patient_records.patient_detID = patient_details.patient_detID
                            WHERE patient_details.patient_detID = $patientID ;";

                    $res = $conn->prepare($query);
                    $res->execute();
                    $rows = $res->fetchAll();

                    if (!empty($rows)) { 
                        foreach ($rows as $row) {
                            
                            ?>
                            <tr>
                                <td><a href="view-records.php?patientid=<?php echo $row['patient_detID'] ?>&recordid=<?php echo $row['patientID'] ?>"><?php echo $row['patientID'] ?></a></td>
                                <td><?php echo $row['cat_expo'] ?></td>
                                <td><?php echo $row['remark'] ?></td>
                                <td><?php echo $row['Date_Added'] ?></td>
                                <td><?php echo $row['status_record'] ?></td>
                                <td>
                                    <i class="fa-solid fa-trash" style="color: #eb3824;" id="btn-del" data-patientrecordID="<?php echo $row['patientID'] ?>" data-patientdetID="<?php echo $row['patient_detID'] ?>"></i>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
        
                        ?>
                        <tr>
                            <td>0 Results</td>
                        </tr>
                        <?php
                    }
                    ?>
        </table>
    </div>
</div>
</div>
<?php
} elseif(isset($_GET['appointID'])){
?>
    <div class="p-1">
    <h2>Patient Name:</h2>
    <h3><?php echo $row1['Firstname'] . ' ' . $row1['Lastname']; ?></h3>

    <h2>Patient ID No:</h2>
    <h3><?php echo $row1['AppointID']; ?></h3>
</div>

<div class="p-2">
    <h1>PATIENT DETAILS</h1>
    <h3>Firstname: <br><span><?php echo $row1['Firstname']; ?></span></h3>
    <h3>Lastname: <br><span><?php echo $row1['Lastname']; ?></span></h3>
    <h3>Age: <br><span><?php echo $row1['Age']; ?></span></h3>
    <h3>Gender: <br><span><?php echo $row1['Gender']; ?></span></h3>
    <h3>Email: <br><span><?php echo $row1['email']; ?></span></h3>
    <h3>Address: <br><span><?php echo $row1['Address']; ?></span></h3>
    <h3>Contact Number: <br><span><?php echo $row1['Contact_Number']; ?></span></h3>
    <h3>Date Registered: <br><span><?php echo $row1['Date_Created']; ?></span></h3>
</div>
<div class="p-3">
<h1>Add Records</h1>
<div class="btn">
    <button type="button" id='btn-nr'><i class="fa-solid fa-plus"></i> Add New Record</button>   
    <i class="fa-solid fa-arrow-left" id="btn-back" onclick="goBack('patient-records.php')"></i>
</div>

<div class="t-3">
    <div id="scroll">
        <table>
            <tr>
                <th>ID</th>
                <th>Category of Exposure</th>
                <th>Remarks</th>
                <th>Date Consulted</th>
                <th>Status</th>
                <th>Action</th>

                <?php
                    $query = "SELECT patient_records.*, Appointment.*
                            FROM patient_records
                            INNER JOIN Appointment ON patient_records.AppointID = Appointment.AppointID
                            WHERE Appointment.AppointID = $appointID ;";

                    $res = $conn->prepare($query);
                    $res->execute();
                    $rows = $res->fetchAll();

                    if (!empty($rows)) { 
                        foreach ($rows as $row) {
                            
                            ?>
                            <tr>
                                <td><a href="view-records.php?appointID=<?php echo $row['AppointID'] ?>&recordid=<?php echo $row['patientID'] ?>"><?php echo $row['patientID'] ?></a></td>
                                <td><?php echo $row['cat_expo'] ?></td>
                                <td><?php echo $row['remark'] ?></td>
                                <td><?php echo $row['Date_Added'] ?></td>
                                <td><?php echo $row['status_record'] ?></td>
                                <td>
                                    <i class="fa-solid fa-trash" style="color: #eb3824;" id="btn-del" data-patientrecordID="<?php echo $row['patientID'] ?>" data-patientdetID="<?php echo $row['patient_detID'] ?>"></i>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
        
                        ?>
                        <tr>
                            <td>0 Results</td>
                        </tr>
                        <?php
                    }
                    ?>
        </table>
    </div>
</div>
</div>
<?php
}
?>
