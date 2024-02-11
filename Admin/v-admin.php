<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/v-user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Update User</title>
</head>
<body>
<?php include 'nav.php' ?>

<main>
    <div class="update-user">
        <div class="update-box">
            <h1>User Details</h1>
            <i class="fa-solid fa-solid fa-arrow-left" id="back"></i>
            <!-- UPDATE PHP -->
                <?php 
                    include 'connection/connection.php';

                    if(isset($_GET['id'])){

                        $id = $_GET['id'];
                        $sql = "SELECT * FROM user_accounts WHERE userID='$id';";
                        $res = $conn->prepare($sql);
                        $res->execute();
                        $row = $res->fetch();

                        if($row){
                        ?>
                            <form action="v-admin.php?id=<?php echo $_GET['id'] ?>" method="POST">
                                <div>
                                    <label for="fname">Firstname</label>
                                    <input type="text" name="fname" id="fname" value="<?php echo $row['Firstname'] ?>">
                                </div>

                                <div>
                                    <label for="mi">Middle Name</label>
                                    <input type="text" name="mi" id="mi" value="<?php echo $row['Middle_Name'] ?>">
                                </div>

                                <div>
                                    <label for="lname">Lastname</label>
                                    <input type="text" name="lname" id="lname" value="<?php echo $row['Lastname'] ?>">
                                </div>

                                <div>
                                    <label for="gender">Gender</label>
                                        <select name="gender" id="gender">
                                            <option value="Male" <?php echo ($row['Gender'] == "Male")? 'selected' : ''; ?>>Male</option>
                                            <option value="Female" <?php echo ($row['Gender'] == "Female")? 'selected' : ''; ?>>Female</option>
                                        </select>
                                </div>
                                <div id="address">
                                    <label for="address">Address</label>
                                    <textarea name="address" id="address" cols="30" rows="3"><?php echo $row['Address'] ?></textarea>
                                </div>

                                <div>
                                    <label for="age">Age</label>
                                    <input type="number" name="age" id="age" value="<?php echo $row['Age'] ?>">
                                </div>

                                <div>
                                    <label for="cnum">Contact Number</label>
                                    <input type="number" name="cnum" id="cnum" value="<?php echo $row['Contact_Number'] ?>">
                                </div>

                                <div>
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>">
                                </div>

                                <div>
                                    <label for="pword">Password</label>
                                    <input type="text" name="pword" id="pword" value="<?php echo $row['password'] ?>">
                                </div>

                                <div id="btn-u">
                                    <button type="submit" id="btn-update" name="Update">UPDATE</button>
                                </div>
                            </form>
                        <?php
                        }
                    }
                ?>
            <!-- UPDATE USER -->
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php include 'php/update-admin.php' ?>
<script>
    const btnback = document.querySelector('#back')
    btnback.addEventListener('click', () =>{
        window.location.href="manage-admin.php";
    })
</script>

</body>
</html>

