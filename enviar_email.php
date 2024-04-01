<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameUsComp = $_POST["nameUsComp"];
    $email = $_POST["mailComp"];
    $cellComp = $_POST["cellComp"];
    $nameComp = $_POST["nameComp"];
    $description = $_POST["description"];
    $radioemail = $_POST["radioemail"];
    $radiophone = $_POST["radiophone"];
    $radiowhats = $_POST["radiowhats"];


    $destinatario = "recuitment@bestworkers.com.mx";
    $asunto_correo = "Nombre compañia: $nameComp";
    $contenido_correo = "Name: $nameUsComp\n";
    $contenido_correo .= "Correo electrónico: $email\n\n";
    $contenido_correo .= "telefono:\n$cellComp\n";
    $contenido_correo .= "telefono:\n$description\n";
    $contenido_correo .= "telefono:\n$radioemail\n";
    $contenido_correo .= "telefono:\n$radiophone\n";
    $contenido_correo .= "telefono:\n$radiowhats\n";

    // Enviar el correo electrónico
    if (mail($destinatario, $asunto_correo, $contenido_correo)) {
        echo "El mensaje ha sido enviado correctamente.";
    } else {
        echo "Ha ocurrido un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
