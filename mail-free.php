<?php
// Requerir la clase PHPMailer
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
require 'path/to/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Recibir datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nameUsfree'];
    $email = $_POST['mailFree'];
    $mensaje = $_POST['cellFree'];
    $pdf = $_POST['cvFree'];


    // Configurar PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurar el servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'live.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'api';
        $mail->Password = 'b266a7809fc2bffce58176d07034c8ae';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configurar el remitente y destinatario
        $mail->setFrom($email, $nombre);
        $mail->addAddress('recruitment@bestworkers.com.mx');

        // Contenido del correo electrónico
        $mail->isHTML(true);
        $mail->Subject = 'Mensaje del formulario de contacto';
        $mail->Body    = 'nameUsfree: ' . $nombre . '<br>mailFree: ' . $email . '<br>cellFree: ' . $mensaje . '<br>ccvfree: ' . $pdf;

        // Enviar el correo
        $mail->send();
        echo '<!DOCTYPE html>
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
        </html>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
 

 
