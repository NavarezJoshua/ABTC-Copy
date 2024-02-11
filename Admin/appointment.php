<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['AdminID'])){
        echo"<script>
            window.location.href='../Login.php';
        </script>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/appointment.css">
    <title>Appointment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php include 'nav.php' ?>

    <main>
        <div class="appointment-box">
            <h1>Appointment</h1>

            <input type="text" name="search" id="search" placeholder="Search ID:">
            
            <div class="table">
                <table>
                    <?php
                        $sql = "select Appointment.*, user_accounts.*
                        from Appointment
                        INNER JOIN user_accounts ON Appointment.userID = user_accounts.userID";
                        include 'connection/connection.php';
                        $res = $conn->prepare($sql);
                        $res->execute();

                        $rows = $res->fetchAll();
                    ?>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full name</th>
                            <th>Reason</th>
                            <th>Email</th>
                            <th>Symptoms</th>
                            <th>Date of Exposure</th>
                            <th>Remarks</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        if($rows){ 
                        foreach ($rows as $row) { ?>
                            <tr>
                                <td style="color: #0081B4; font-weight: 700; letter-spacing: 1px"><?php echo $row['AppointID'] ?></td>
                                <td><?php echo $row['Firstname'] . " " . $row['Lastname'] ?></td>
                                <td><?php echo $row['reason'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['Symptoms'] ?></td>
                                <td><?php echo $row['Accident_date'] ?></td>
                                <td><?php echo $row['remarks'] ?></td>
                                <td id="status"><?php echo $row['status'] ?></td>
                                <td>
                                    <i class="fa-solid fa-user-plus" id="btn-add" data-appointid="<?php echo $row['AppointID'] ?>"></i>
                                    <i class="fa-solid fa-pen-to-square" style="color: #26ab66;" id="btn-view" data-appointid="<?php echo $row['AppointID'] ?>"></i>
                                    <i class="fa-solid fa-trash" style="color: #eb3824;" id="btn-delete" data-appointid="<?php echo $row['AppointID'] ?>"></i>
                                </td>
                            </tr>
                        <?php } } else { ?>
                            <tr><td colspan="9">No Records</td></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php  include 'php/message.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var viewButtons = document.querySelectorAll('#btn-view');
            viewButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var appointID = button.getAttribute('data-appointid');
                    if (appointID) {
                        window.location.href = "view-appointment.php?appid=" + appointID;
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var viewButtons = document.querySelectorAll('#btn-delete');
            viewButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var appointID = button.getAttribute('data-appointid');
                    if (appointID) {
                        
                    Swal.fire({
                        title: 'Are you sure you want to delete?',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: 'Yes',
                        cancelButtonText: 'No',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "patient-appointment/delete-appoint.php?delid=" + appointID;
                        }
                    });   
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addrec = document.querySelectorAll('#btn-add');
            addrec.forEach(function(button) {
                button.addEventListener('click', function() {
                    var appointID = button.getAttribute('data-appointid');
                    if (appointID) {
                        
                    Swal.fire({
                        title: 'Are you sure you want to add this Record?',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: 'Yes',
                        cancelButtonText: 'No',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "patient-appointment/addrecord-appoint.php?addid=" + appointID;
                        }
                    });   
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function(){
            var statuses = document.querySelectorAll("#status");
            var addRecords = document.querySelectorAll("#btn-add");

            statuses.forEach(function(status, index) {
                if (status.textContent.trim() === "APPROVE") {
                    addRecords[index].style.display = "inline-block";
                }
            });
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function() {
            $("td:contains('APPROVE')").css("background-color", "#0dd157").css("color", "Black");
            $("td:contains('PENDING')").css("background-color", "yellow")
            $("td:contains('FOR REFERRAL')").css("background-color", "#FFA447").css("color", "Black");
        });
        </script>
</body>
</html>