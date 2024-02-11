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
    <link rel="stylesheet" href="css/manage_user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#search").on("keyup", function(){
                    var value =$(this).val().toLowerCase();
                    $("#mytable tr").filter(function(){
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
                
        </script>
    <title>Manage User</title>
</head>
<body>
    <?php include "nav.php"; ?>
    <?php include 'connection/connection.php'?>

        <main class="main">
            <div id="Manage-Users">
                <div class="manage-box">
                    <div class="title">
                        <h1>Manage Patients</h1>
                    </div>
                    <!-- FORM -->
                    <div class="box-form">
                        <form action="" method="post">
                            <div>
                                <label for="fname">Firstname:</label>
                                <input type="text" name="fname" id="fname" placeholder="Enter firstname" required>
                            </div>
                            
                            <div>
                                <label for="lname">Lastname:</label>
                                <input type="text" name="lname" id="lname" placeholder="Enter lastname" required>
                            </div>
                            
                            <div>
                                <label for="MI">Middle Name:</label>
                                <input type="text" name="MI" id="MI" placeholder="Enter Middle Initial" required>
                            </div>

                            <div>
                                <label for="age">Age:</label>
                                <input type="number" name="age" id="age" required>
                            </div>
                            
                            <div>
                                <label for="gender">Gender:</label>
                                <select name="gender" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="contact_number">Contact Number:</label>
                                <input type="number" name="contact_number" id="contact_number" placeholder="Enter contact Number" required>
                            </div>
                            
                            <div>
                                <label for="address">Address:</label>
                                <textarea name="address" id="address" cols="30" rows="2" required></textarea>
                            </div>

                            <div class="email">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" placeholder="Enter email" onInput="checkEmail()" required>
                                <span id="check_email"></span>
                            </div>
                           
                            <div class="pwd">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" placeholder="Enter password" required >
                                <span onclick='ShowHidepass()'>
                                    <i id="open_pass" class="fa-solid fa-eye"></i>
                                    <i id="close_pass" class="fa-solid fa-eye-slash"></i>
                                </span>
                            </div>
                            
                            <div class="btn">
                                <button type="submit" name="Add-new" id="Add_User">Add New User</button>
                            </div>
                            
                        </form>
                    </div>
                    <!-- END FORM -->

                    <!-- BUTTON - SEACRCH -->
                    <div class="search">
                        <input type="text" name="search" id="search" placeholder="Search">
                    </div>
                    <!-- END BTN - SEARCH -->

                    <!-- USER TABLE -->
                    <div class="box-table">
                        <div id="scroll">
                            <table>
                                <tr>
                                    <th>Account_ID</th>
                                    <th>Firstname</th>
                                    <th>Middle_Name</th>
                                    <th>Lastname</th>
                                    <th>Gender</th>
                                    <th>Adrress</th>
                                    <th>Age</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Access</th>
                                    <th>Date_Registered</th>
                                    <th>Action</th>
                                </tr>

                                <tbody id="mytable">
                                <?php
                                    $sql = "select * from user_accounts where Access = 'user'";
                                    $res = $conn->prepare($sql);
                                    $res->execute();
                                    $rows = $res->fetchAll(PDO::FETCH_ASSOC);
                                    

                                    if(!empty($rows)){ 
                                        $count = 0;
                                       
                                        foreach($rows as $row){
                                            $count++;
                                        ?>
                                            <tr>
                                                <td><a href="v-user.php?id=<?php echo $row['userID'] ?>" id="open-u"><?php echo $row['userID']?></a></td>
                                                <td><?php echo $row['Firstname']?></td>
                                                <td><?php echo $row['Middle_Name']?></td>
                                                <td><?php echo $row['Lastname']?></td>
                                                <td><?php echo $row['Gender']?></td>
                                                <td><?php echo $row['Address']?></td>
                                                <td><?php echo $row['Age']?></td>
                                                <td><?php echo $row['Contact_Number']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['password']?></td>
                                                <td><?php echo $row['Access']?></td>
                                                <td><?php echo $row['Date_Created']?></td>
                                                <td>
                                                    <i class="fa-solid fa-trash" style="color: #eb3824;" id="del" data-userid="<?php echo $row['userID'] ?>"></i>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    }
                                    else{
                                        ?> 
                                        <tr>
                                            <td>0 Results</td>
                                        </tr>
                                        <?php
                                    }
                                ?>

                                </tbody>

                               

                                
                            </table>
                        <!-- END USER TABLE -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
       
        <script src="js/user-admin.js"></script>
        <script>
          const deleteButtons = document.querySelectorAll('#del');

            deleteButtons.forEach((btn) => {
                btn.addEventListener('click', () => {
                    const userId = btn.getAttribute('data-userid');

                    Swal.fire({
                        title: 'Are you sure you want to delete?',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: 'Yes',
                        cancelButtonText: 'No',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = `php/delete-user.php?id=${userId}`;
                        }
                    });
                });
            });
      </script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
        <script>
            function checkEmail() {
                jQuery.ajax({
                url: "checkEmail-user.php",
                data:'email='+$("#email").val(),
                type: "POST",
                success:function(data){
                    $("#check_email").html(data);
                },
                error:function (){}
                });
            };
        </script>
        <?php include 'php/add-user.php'?>
        <?php include 'php/message.php' ?>
</body>
</html>