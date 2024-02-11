<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./user-css/register.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>
<body>

    <div class="main-container">
        <div class="box-container">
            <h1>Register</h1>
            <form action="" method="post">
                <div>
                    <label for="fname">Firstname</label>
                    <input type="text" name="fname" id="" placeholder="Enter your Firstname" required>
                </div>

                <div>
                    <label for="mname">Middle Name</label>
                    <input type="text" name="mname" id="" placeholder="Enter your Middlename" required>
                </div>

                <div>
                    <label for="lname">Lastname</label>
                    <input type="text" name="lname" id="" placeholder="Enter your Lastname" required>
                </div>

                <div>
                    <label for="">Birthday</label>
                    <input type="date" name="" id="birthday" onchange="calculateAge()">
                </div>

                <div>
                    <label for="age">Age</label>
                    <input type="text" id="age" name="age" readonly >
                </div>
               

                <div>
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div style="display: grid; grid-column: span 2;">
                    <label for="cnum">Contact Number</label>
                    <input type="number" name="cnum" id="" required> 
                </div>

                <div id="address">
                    <label for="address">Address</label>
                    <textarea name="address" id="" cols="30" rows="3" required></textarea>
                </div>

                <div id="email">
                    <label>Email</label>
                    <input type="email" name="email" id="" placeholder="Enter your email" required>
                </div>

                <div id="pwd">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                    <span onclick='ShowHidepass()'>
                        <i id="open_pass" class="fa-solid fa-eye"></i>
                        <i id="close_pass" class="fa-solid fa-eye-slash"></i>
                    </span>
                </div>

                
                <button type="submit" name="register" id="register">Register</button>
                <p>Already have an accout? <a href="Login.php">Login Here</a></p>
            </form>
        </div>
    </div>
    <script>
        function calculateAge() {
            var birthdayInput = document.getElementById('birthday').value;
            var birthday = new Date(birthdayInput);
            var today = new Date();

            var age = today.getFullYear() - birthday.getFullYear();
            var monthDiff = today.getMonth() - birthday.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthday.getDate())) {
                age--;
            }

            document.getElementById('age').value = age;
        }
    </script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src='UserJS/user.js'></script>
    <?php include 'registerchk.php' ?>
</body>
</html>

