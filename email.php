<?php
    use PHPmailer\PHPMailer\PHPMailer;
    use PHPmailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

            //CONFIG
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'testt102301@gmail.com';
            $mail->Password = 'nquzdyqgsanhouug';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';

            //RECIPIENT
            $mail->setFrom($email, $name);
            $mail->addAddress('testt102301@gmail.com');
            $mail->addReplyTo($_POST["email"], $_POST["name"]);

            //CONTENT
            $mail->isHTML(true);
            $mail->Body = $message;
            $mail->send();

            if ($mail->send()) {
                echo"<script>alert('Email Sent Successfully')</script>";
            } else {
                echo 'Message could not be sent. Error: ' . $mail->ErrorInfo;
            }
    }
?>