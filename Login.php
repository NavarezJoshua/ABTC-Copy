<?php 
    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="./user-css/login.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    </head>
    <body>
        <div class="main-container">
            <div class="Login">
                <div class="right-side">
                    <h1>LO<span>GIN</span></h1>
                    <form method="POST">
                        <div class="log-form">
                            <div class="form">
                                <input type="email" name="email" placeholder="Email" id="username" required>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="form">
                                <input type="password" name="password" placeholder="Password" id="password" required>
                                <span onclick='ShowHidepass()'>
                                    <i id="open_pass" class="fa-solid fa-eye"></i>
                                    <i id="close_pass" class="fa-solid fa-eye-slash"></i>
                                </span>
                            </div>
                            <div class="Register">
                                <p>You don't have an account? <a href="Register.php">Register Here</a></p>
                            </div>
                        </div>
                        <div class="log-btn">
                            <input type="submit" name="log" value="Login">
                        </div>
                    </form>
                </div>
                <div class="left-side">
                    <img src="Image/Logo.png" alt="" srcset="">
                </div>
            </div>
        </div>
           
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src='UserJS/user.js'></script>
        <?php include 'loginchk.php'; ?>
    </body>
</html>

        
    
        

