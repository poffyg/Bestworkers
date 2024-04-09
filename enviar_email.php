<?php

    require 'src/PHPMailer.php';
    require 'src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;

   
    // Configure the PHPMailer instance
    $mail-›isSMTP();
    $mail->Host = 'live.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'api';
    $mail->Password = 'b266a7809fc2bffce58176d07034c8ae';
    $mail->SMTPSecure = PHPMailer:: ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    

    $nameUsComp = $_POST['nameUsComp'];
    $email = $_POST["mailComp"];
    $message = $_POST["cellComp"];
    $message = $_POST["nameComp"];
    $message = $_POST["description"];
    $message = $_POST["radioemail"];
    $message = $_POST["radiophone"];
    $message = $_POST["radiowhats"];

    $mailheader = "From:".$email."<".$nameUsComp.">\r\n"

    $recipient = "bravourb2000@gmail.com";

    $mailer = new PHPMailer();
    var_dump($mailer)

    mail($recipient, $subject, $message, $mailheader);
    or die("Error!");

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Best Workes</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Grotesk:wght@300..700&family=Workbench&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="banner">
                <div class="name-logo">Best Workers</div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#company">Company</a></li>
                        <li><a href="#freelancer">Freelancer</a></li>
                        <li><a href="contacto-empresas.html">Contact Us</a></li>
                    </ul>
                </nav>
                <div class="logo-image">
                    <img src="image-2.png" alt="Company Logo">
                </div>
            </div>
        </header>
        <main class="gobackcomp">
    
          <h1>Thank you for contacting us. We will get back to you as soon as possible!</h1>
            <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
    
        </main>
    
        <footer>
            <div class="footer-logo">
                <img src="image-2.png" alt="Company Logo">
            </div>
            <div class="contact-info">
                <p> <span class="infoFirst">Email:</span> recruitment@bestworkers.com.mx</p>
                <p>  <span class="infoFirst">Phone:</span> (469) 591-7075</p>
            </div>
        </footer>
    
        <script src="bestworkers.js"></script>
    </body>
    </html>
    ';
  
?>

<?php
// Incluir el formulario HTML
include 'contacto-empresas.html';
?>