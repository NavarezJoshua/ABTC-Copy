<?php 
    if(!isset($_SESSION))
    session_start();
    include 'appoint-records/add-records.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/appoint-records.css">
    <title>Appointment-Records</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php include 'nav.php' ?>

    <main>
        <div class="appointrecords-box">
            <?php  
                if(isset($_GET['appointid'])){
                    include 'connection/connection.php';
                    $appointID = $_GET['appointid'];

                    $sql = "SELECT Appointment.* , user_accounts.*
                    FROM Appointment 
                    INNER JOIN user_accounts ON Appointment.userID = user_accounts.userID
                    WHERE AppointID = '$appointID'";
                    $result = $conn->prepare($sql);
                    $result->execute();

                    $row = $result->fetch();
                }; 
            ?>
            <div class="top">
                <h2>Patient Name:</h2>
                <h3><?php echo $row['Firstname'] . ' ' . $row['Lastname'] ?></h3>
                <h2>Appointment ID No:</h2>
                <h3><?php echo $row['AppointID'] ?></h3>
            </div>
            <div class="fillup">
                <div class="title">
                    <h1>Add Records</h1>
                </div>
                
                <hr>
                <form action="appoint-records/add-records.php?appointid=<?php echo $appointID ?>" method="post">
                    <div class="form-label">
                        <label>Firstname</label>
                        <input type="text" name="fname" id="" value="<?php echo $row['Firstname'] ?>" readonly>
                    </div>
                    
                    <div class="form-label">
                        <label>Lastname</label>
                        <input type="text" name="lname" id="" value="<?php echo $row['Lastname'] ?>" readonly>
                    </div>

                    <div class="form-label">
                        <label>Middle Name</label>
                        <input type="text" name="mname" id="" value="<?php echo $row['Middle_Name'] ?>" readonly>
                    </div>

                    <div class="form-label">
                        <label>Contact Number</label>
                        <input type="number" name="cnum" id="" value="<?php echo $row['Contact_Number'] ?>" readonly>
                    </div>
                   
                    <div class="form-label">
                        <label>Address</label>
                        <input type="text" name="address" id="" value="<?php echo $row['Address'] ?>" readonly>
                    </div>
                    
                    <div class="form-label">
                        <label>Age</label>
                        <input type="text" name="age" id="" value="<?php echo $row['Age'] ?>" readonly>
                    </div>
                    
                    <div class="form-label">
                        <label>Sex</label>
                        <input type="text" name="sex" id="" value="<?php echo $row['Gender'] ?>" readonly>
                    </div>
                    
                    <div class="form-label">
                        <label>Email</label>
                        <input type="email" name="email" id="" value="<?php echo $row['email'] ?>" readonly>
                    </div>

                    <div class="title" style="grid-column: span 2">
                        <h1>HISTORY EXPOSURE</h1>
                        <hr>
                    </div>

                    <div class="form-label">
                        <label for="e-date">Date of Exposure</label>
                        <input type="date" name="e-date" id="" value="" required >
                    </div>
                    
                    <div class="form-label">
                        <label for="p-expo">Place of Exposure</label>
                        <select name="p-expo" id="p-expo"  required>
                            <option value="Victoria">Victoria</option>
                            <option value="Tunasan">Tunasa</option>
                            <option value="Poblacion">Poblacion</option>
                            <option value="Southville">Southville</option>
                            <option value="Putatan Main">Putatan Main</option>
                            <option value="Putatan Annex">Putatan Annex</option>
                            <option value="Bayanan Main">Bayanan Main</option>
                            <option value="Bayanan Annex">Bayanan Annex</option>
                            <option value="Alabang">Alabang</option>
                            <option value="Ayala">Ayala</option>
                            <option value="Cupang">Cupang</option>
                            <option value="Buli">Buli</option>
                            <option value="Sucat">Sucat</option>
                            <option value="Bagong Silang">Bagong Silang</option>
                            <option value="Sitio Sto. Niño">Sitio Sto. Niño</option>
                        </select>
                    </div>
                    
                    <div class="form-label">
                        <label for="t-expo">Type of Exposure</label>
                        <select name="t-expo" id="" required>
                            <option value="BITE">BITE</option>
                            <option value="NON-BITE">NON-BITE</option>
                        </select>
                    </div>
                    
                    <div class="form-label">
                        <label for="s-expo">Source of Exposure</label>
                        <select name="s-expo" id="" required>
                            <option value="Stray Dog">Stray Dog</option>
                            <option value="Pet Dog">Pet Dog</option>
                            <option value="Stray Cat">Stray Cat</option>
                            <option value="Pet Cat">Pet Cat</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    
                    <div class="form-label">
                        <label for="">Category Expo</label>
                        <select name="c-expo" id="expo" onchange="slc1('expo', 'post_expo')" required>
                            <option value="">--SELECT CATEGORY--</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                        </select>
                    </div>
                        
                    <div class="form-label">
                        <label for="post-expo">Post Exposure Prophylaxis</label>
                            <select name="post-expo" id="post_expo" required>
                                <option value="">--SELECT CATEGORY FIRST--</option>
                                <option value="III">III</option>
                            </select>
                    </div>
                    
                    <div class="form-label">
                        <label for="washing-bite">Washing of Bite Wound</label>
                            <select name="washing-bite" id=""  required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                    </div>
                       
                    <div class="form-label">
                        <label for="d-rig">Date RIG Given</label>
                        <input type="date" name="d-rig" id="" required>
                    </div>

                    <div class="title">
                        <h1 style="grid-column: span 2; text-align:center">Anti-Rabies Vaccine</h1>
                        <hr>
                    </div>  
                    
                    <div class="form-label">
                        <label for="generic-name">Generic Name</label>
                        <input type="text" name="generic-name" id="" placeholder="Enter Generic Name"  required>
                    </div>

                    <div class="form-label">
                        <label for="brand-name">Brand Name</label>
                        <input type="text" name="brand-name" id="" placeholder="Enter Brand Name"  required>
                    </div>
                 
                    <div class="form-label">
                        <label for="route">Route</label>
                            <select name="route" id="route"  required>
                                <option value="ID">ID</option>
                                <option value="IM">IM</option>
                            </select>
                    </div>

                    <div class="form-label">
                        <label for="d-3">Day 0</label>
                        <input type="date" name="d-0" id="" required>
                    </div>

                    <div class="form-label">
                        <label for="d-3">Day 3</label>
                        <input type="date" name="d-3" id="" required>
                    </div>
                   
                    <div class="form-label">
                        <label for="d-7">Day 7</label>
                        <input type="date" name="d-7" id="" required>
                    </div>

                    <div class="form-label">
                        <label for="d-14">Day 14 (IM)</label>
                        <input type="date" name="d-14" id="" required>
                    </div>

                    <div class="form-label">
                        <label for="d-28">Day 28/30</label>
                        <input type="text" name="d-28" id="" placeholder="YYYY-MM-DD">
                        <small style="font-weight: 700; font-size: 10px; margin-left: 5px">Notice: Proceed with day 28/30 if dog is not alive after 14 days of observation</small>
                    </div>
        
                    <div class="form-label" id="animal">
                        <label for="staus-animal">Status Animal after D14 of Exposure</label>
                        <select name="status-animal" id="option">
                            <option value="">--Choose--</option>
                            <option value="Alive">Alive</option>
                            <option value="Dead">Dead</option>
                        </select>
                    </div>
                   
                    <div class="form-label">
                        <label for="remarks">Remarks</label>
                        <textarea name="remarks" id="" cols="40" rows="2"></textarea>
                    </div>
                   
                    <div class="form-label" id="doctor">
                        <label for="doc">Select Doctor</label>
                        <select name="doc" id="doc" required>
                            <option value="Eleanor Gumiran-Dacir, MD - Medical Officer III ">Eleanor Gumiran-Dacir, MD - Medical Officer III</option>
                            <option value="Cherry H. Navidad, MD - Medical Officer V">Cherry H. Navidad, MD - Medical Officer V</option>
                        </select>
                    </div>

                    <input type="submit" name="save" id="btn" value="Save">

                </form>
            </div>
        </div>
    </main>
    <?php include 'php/message.php' ?>
    <script>
        function slc1(){
            var expo = document.querySelector('#expo');
            var post_expo = document.querySelector('#post_expo');

            post_expo.innerHTML = ""

            if(expo.value == "II"){
                var optionArray = ['TCV ONLY'];
            }
            else if(expo.value = "III"){
                var optionArray = ['TCV + RIG', 'TCV + HRIG'];
            }

            for (var i = 0; i < optionArray.length; i++) {
                var newoption = document.createElement("option");
                newoption.value = optionArray[i];
                newoption.text = optionArray[i];
                post_expo.add(newoption);
            };
        };
    </script>
</body>
</html>