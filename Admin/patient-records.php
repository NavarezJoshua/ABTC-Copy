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
    <link rel="stylesheet" href="css/patient_records.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#search").on("keyup", function(){
                var value = $(this).val().toLowerCase();
                $("#mytable tr").filter(function(){
                    $(this).toggle($(this).find('td:nth-child(2)').text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
   
    <title>Patient Records</title>
</head>
<body>


    <?php include "nav.php";?>

    <main class="main">
        <div id="Patient-Records">
            <div class="patient-box">
                <div class="title">
                    <h1>Patient Records</h1>
                </div>

                <div class="search">
                    <form action="" method="post">
                        <input type="text" name="search" id="search" placeholder="Search:">
                    </form>
                </div>

                <div class="btn"> 
                    <button type="button" id="open-button"><i class="fa-solid fa-user-plus"></i> Add Patient</button>
                </div>

                <?php include 'php-records/showrecords.php' ?>

                <dialog class="modal" id="modal">
                    <div class="modal-content">
                    <h2>Add Patient Record</h2>
                        <form action="" method="post">

                            <label for="name">Lastname</label>
                            <input type="text" name="lname" id="" placeholder="Enter your Lastname" required>

                            <label for="name">Firstname</label>
                            <input type="text" name="fname" id="" placeholder="Enter your Firstname" required>

                            <label for="name">Middle Name</label>
                            <input type="text" name="mname" id="" placeholder="Enter your Middle Name" required>
                            
                            <label>Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" onInput="checkEmail()" required>
                            <span id="check_email"></span>

                            <label for="name">Address</label>
                            <input type="text" name="address" id="" placeholder="Enter your Address" required>

                            <label for="name">Age</label>
                            <input type="text" name="age" id="" placeholder="Enter your Age" required>

                            <label for="contact">Contact Number</label>
                            <input type="text" name="cnum" id="" placeholder="Enter your Contact Number" required>

                            <label for="sex">Sex</label>
                            <select name="sex" id="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>


                            <h2>History of Exposure</h2>
                            
                            <label for="e-date">Date of Exposure</label>
                            <input type="date" name="e-date" id="" value="">

                            <label for="p-expo">Place of Exposure</label>
                            <select name="p-expo" id="p-expo">
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

                            <label for="t-expo">Type of Exposure</label>
                            <select name="t-expo" id="">
                                <option value="BITE">BITE</option>
                                <option value="NON-BITE">NON-BITE</option>
                            </select>

                            <label for="s-expo">Source of Exposure</label>
                            <select name="s-expo" id="">
                                <option value="Stray Dog">Stray Dog</option>
                                <option value="Pet Dog">Pet Dog</option>
                                <option value="Stray Cat">Stray Cat</option>
                                <option value="Pet Cat">Pet Cat</option>
                                <option value="Others">Others</option>
                            </select>

                            <label for="c-expo">Category of Exposure</label>
                                <select name="c-expo" id="expo" onchange="slc1('expo', 'post_expo')">
                                    <option value="">--SELECT CATEGORY--</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                </select>

                            <label for="post-expo">Post Exposure Prophylaxis</label>
                                <select name="post-expo" id="post_expo">
                                    <option value="">--SELECT CATEGORY FIRST--</option>
                                </select>

                            <br>
                                <label for="washing-bite">Washing of Bite Wound</label>
                                <select name="washing-bite" id="" >
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                
                                <label for="d-rig">Date RIG Given</label>
                                <input type="date" name="d-rig" id="">
                                
                            <h2>Anti-Rabies Vaccine</h2>

                            <label for="generic-name">Generic Name</label>
                            <input type="text" name="generic-name" id="" placeholder="Enter Generic Name" >

                            <label for="brand-name">Brand Name</label>
                            <input type="text" name="brand-name" id="" placeholder="Enter Brand Name" >

                            <label for="route">Route</label>
                                <select name="route" id="route" >
                                    <option value="ID">ID</option>
                                    <option value="IM">IM</option>
                                </select>
                            
                            <label for="d-0">Day 0</label>
                            <input type="date" name="d-0" id="">

                            <label for="d-3">Day 3</label>
                            <input type="date" name="d-3" id="">

                            <label for="d-7">Day 7</label>
                            <input type="date" name="d-7" id="">

                            <label for="d-14">Day 14 (IM)</label>
                            <input type="date" name="d-14" id="">

                            <label for="d-28">Day 28/30</label>
                            <input type="text" name="d-28" id="" placeholder="YYYY-MM-DD">

                            <small style="font-weight: 700; font-size: 10px; margin-left: 5px">Notice: Proceed with day 28/30 if dog is not alive after 14 days of observation</small>
                            <br>
                            <label for="staus-animal">Status Animal after D14 of Exposure</label>
                            <select name="status-animal" id="">
                                <option value="">--Choose--</option>
                                <option value="Alive">Alive</option>
                                <option value="Dead">Dead</option>
                            </select>

                            <label for="remarks">Remarks</label>
                            <textarea name="remarks" id="" cols="40" rows="2"></textarea>

                            <label for="doc">Select Doctor</label>
                            <select name="doc" id="doc" required>
                                <option value="Eleanor Gumiran-Dacir, MD - Medical Officer III ">Eleanor Gumiran-Dacir, MD - Medical Officer III</option>
                                <option value="Cherry H. Navidad, MD - Medical Officer V">Cherry H. Navidad, MD - Medical Officer V</option>
                            </select>
                        
                            <input type="submit" name="save" id="modal-button" value="Save">
                        </form>
                        <i class="fa-solid fa-rectangle-xmark" id="close-button"></i>
                    </div>
                </dialog>
            </div>
        </div>
    </main>
    <?php include 'php-records/add-p.php'?>
    <?php include 'php/message.php' ?>
    <script src="js/patient-records.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function checkEmail() {
            jQuery.ajax({
            url: "checkEmail.php",
            data:'email='+$("#email").val(),
            type: "POST",
            success:function(data){
                $("#check_email").html(data);
            },
            error:function (){}
            });
        };

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