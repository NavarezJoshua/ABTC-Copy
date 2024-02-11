<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/patient_details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Patient Details</title>
</head>
<body>
    <?php include 'php-records/patient.php'?>
    <?php include 'connection/connection.php'?>
    <?php include 'nav.php' ?>
 
        <main>
            <div id="patient-details">
                <?php include 'php-records/patient-view.php' ?>

            <!-- ADD RECORDS MODAL -->
            <dialog class="n-modal">
                <div class="n-modal-content">
                    <h2>Add New Record</h2>
                    <form action="" method="POST" autocomplete="off">

                        <label for="e-date">Date of Exposure</label>
                            <input type="date" name="e-date" id="date">

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
                            <select name="t-expo" id="" required>
                                <option value="BITE">BITE</option>
                                <option value="NON-BITE">NON-BITE</option>
                            </select>

                            <label for="s-expo">Source of Exposure</label>
                            <select name="s-expo" id="">
                                <option value="Stray Dog">Stray Dog</option>
                                <option value="Dog">Pet Dog</option>
                                <option value="Stray Cat">Stray Cat</option>
                                <option value="Cat">Pet Cat</option>
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
                                    <option value="">--Select Category First--</option>
                                </select>
                            
                            <br>
                                <label for="washing-bite">Washing of Bite Wound</label>
                                <select name="washing-bite" id="gender" required>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                
                                <label for="d-rig">Date RIG Given</label>
                                <input type="date" name="d-rig" id="">
                                
                            <h2>Anti-Rabies Vaccine</h2>

                            <label for="generic-name">Generic Name</label>
                            <input type="text" name="generic-name" id="" placeholder="Enter Generic Name" required>

                            <label for="brand-name">Brand Name</label>
                            <input type="text" name="brand-name" id="" placeholder="Enter Brand Name" required>

                            <label for="route">Route</label>
                                <select name="route" id="route" required>
                                    <option value="id">ID</option>
                                    <option value="im">IM</option>
                                </select>

                            <label for="d-3">Day 0</label>
                            <input type="date" name="d-0" id="">

                            <label for="d-3">Day 3</label>
                            <input type="date" name="d-3" id="">

                            <label for="d-7">Day 7</label>
                            <input type="date" name="d-7" id="">

                            <label for="d-14">Day 14 (IM)</label>
                            <input type="date" name="d-14" id="">

                            <label for="d-28">Day 28/30</label>
                            <input type="text" name="d-28" id="" placeholder="YYYY-MM-DD">

                            <p><small style="font-weight: 700; font-size: 10px; margin-left: 5px">Notice: Proceed with day 28/30 if dog is not alive after 14 days of observation</small></p>
                            

                            <label for="remarks">Remarks</label>
                            <textarea name="remarks" id="" cols="40" rows="3"></textarea>

                           
                            <label for="doc">Select Doctor</label>
                            <select name="doc" id="doc" required>
                                <option value="Eleanor Gumiran-Dacir, MD - Medical Officer III ">Eleanor Gumiran-Dacir, MD - Medical Officer III</option>
                                <option value="Cherry H. Navidad, MD - Medical Officer V">Cherry H. Navidad, MD - Medical Officer V</option>
                            </select>
                            

                            <button type="submit" name='AddnewRecord'id="modal-button">Save</button>
                     </form>
                        <i class="fa-solid fa-rectangle-xmark" id="n-close-button"></i>
                </div>
            </dialog>
            
        </div>
    </main>
    <script src="js/v-modal.js"></script>
    <?php include 'php-records/add-new-record.php'?>
    <?php include 'php/message.php' ?>
    <script>
        function goBack(a) {
            window.location.href=a;
        };
    </script>
   <script>
        const btndelete = document.querySelectorAll('#btn-del')

        btndelete.forEach((btn) => {
            btn.addEventListener('click', () => {
                Swal.fire({
                    title: 'Are you sure you want to delete?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No',
                }).then((result) => {
                    if (result.isConfirmed) {
                        const patientrecordID = btn.getAttribute('data-patientrecordID');
                        const patientdetID = btn.getAttribute('data-patientdetID');
                        window.location.href = `php-records/del-records.php?deletepid=${patientrecordID}&patientdetID=${patientdetID}`;
                    }
                });
               
            });
        });

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

<?php
    if(isset($_GET['msg'])){
        ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfuly Deleted',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
        <?php
    }
?>
</body>
</html>