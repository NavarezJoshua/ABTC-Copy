<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit-p.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Edit Patient Details</title>
</head>
<body>
<?php include 'nav.php' ?>
<?php include 'php-records/edit-patient.php'?>

<main>
    <div class="update-details">
        <div class="update-box">
            <h1>Patient Details</h1>
            <i class="fa-solid fa-solid fa-arrow-left" id="back"></i>

            <form action="" method="POST">
                <div class="input">
                    <label for="lname">Lastname</label>
                    <input type="text" name="lname" id="" value="<?php echo $row['lname'] ?>">
                </div>
                <div class="input">
                    <label for="fname">Firstname</label>
                    <input type="text" name="fname" id="" value="<?php echo ($row['fname'])?>">
                </div>
                <div class="input">
                    <label for="mname">Middlename</label>
                    <input type="text" name="mname" id="" value="<?php echo $row['mname'] ?>">
                </div>
                <div class="input">
                    <label>Email</label>
                    <input type="email" name="email" id="" value="<?php echo $row['email'] ?>" readonly>
                </div>
                <div class="input">
                    <label for="address">Address</label>
                    <textarea name="address" id="" cols="30" rows="2"><?php echo $row['address'] ?></textarea>
                </div>
                <div class="input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="" value=<?php echo $row['age'] ?>>
                </div>
                <div class="input">
                    <label for="cnum">Contact Number</label>
                    <input type="number" name="cnum" id="" value=<?php echo $row['cnum'] ?>>
                </div>
                <div class="input">
                    <label for="sex">Sex</label>
                    <select name="sex" id="">
                        <option value="Male" <?php echo ($row['Sex'] == "Male")? 'selected' : ''; ?>>Male</option>
                        <option value="Female" <?php echo ($row['Sex'] == "Female")? 'selected' : ''; ?>>Female</option>
                    </select>
                </div>

                <div class="btn">
                    <button type="submit" name="edit" id="btn-save">Save</button>
                </div>
            </form>
        </div>
    </div>
</main>
    <script>
        const backButton = document.querySelector('#back');
            backButton.addEventListener('click', () => {
                window.location.href = `./patient-records.php`;
            });
    </script>
</body>
</html>