<div class="t-patient">
    <div id="scroll">
        <table>
            <tr>
                <th>Record ID</th>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Contact No.</th>
                <th>Action</th>
            </tr>
            
            <tbody id="mytable">
            <?php 
                include 'connection/connection.php';
                $sql = "SELECT * FROM patient_records";
                $res = $conn->prepare($sql);
                $res->execute();
                $rows = $res->fetchAll();

                if($rows) { 
                    foreach($rows as $row) {
                        $appointID = $row['AppointID'];
                        $recordID = $row['patient_detID'];

                        if(!empty($appointID)){
                        $sql1 = "select user_accounts.*, Appointment.*
                        from Appointment
                        Inner Join user_accounts ON Appointment.userID = user_accounts.userID
                        WHERE Appointment.AppointID = :appointID";
                        $res1 = $conn->prepare($sql1);
                        $res1->bindParam(':appointID', $appointID, PDO::PARAM_INT);
                        $res1->execute();
                        $appointments = $res1->fetchAll();

                        if(!empty($appointments)) { 
                            foreach($appointments as $appointment) {
            ?>
                <tr>
                    <td><a href="patient-details.php?appointID=<?php echo $appointment['AppointID']?>"><?php echo $row['AppointID']?></a></td>
                    <td><?php echo $appointment['Lastname']?></td>
                    <td><?php echo $appointment['Firstname']?></td>
                    <td><?php echo $appointment['email']?></td>
                    <td><?php echo $appointment['Gender']?></td>
                    <td><?php echo $appointment['Age']?></td>
                    <td><?php echo $appointment['Contact_Number']?></td>
                    <td>
                        <i class="fa-solid fa-pen-to-square" style="color: #26ab66;" id="btn-edit"></i>
                        <i class="fa-solid fa-trash" style="color: #eb3824;" id="btn-delete" data-deleteid="<?php echo $row['patient_detID'] ?>"></i>
                    </td>
                </tr>
            <?php 
                            }
                        } 
                    } elseif(!empty($recordID)){
                        $sql1 = "SELECT * FROM patient_details WHERE patient_detID = :patientID";
                    $res1 = $conn->prepare($sql1);
                    $res1->bindParam(':patientID', $recordID, PDO::PARAM_INT);
                    $res1->execute();
                    $patient_det = $res1->fetchAll();

                    if(!empty($patient_det)) { 
                        foreach($patient_det as $patient) {
        ?>
            <tr>
                <td><a href="patient-details.php?patientid=<?php echo $patient['patient_detID']?>"><?php echo $row['patient_detID']?></a></td>
                <td><?php echo $patient['lname']?></td>
                <td><?php echo $patient['fname']?></td>
                <td><?php echo $patient['email']?></td>
                <td><?php echo $patient['Sex']?></td>
                <td><?php echo $patient['age']?></td>
                <td><?php echo $patient['cnum']?></td>
                <td>
                    <i class="fa-solid fa-pen-to-square" style="color: #26ab66;" id="btn-edit"></i>
                    <i class="fa-solid fa-trash" style="color: #eb3824;" id="btn-delete" data-deleteid="<?php echo $row['patient_detID'] ?>"></i>
                </td>
            </tr>
        <?php
            } } } } }else {
            ?>
                <tr>
                    <td colspan="8">0 Results</td>
                </tr>
            <?php 
                }
            ?>      
            </tbody>
            
        </table>
    </div> 
</div>