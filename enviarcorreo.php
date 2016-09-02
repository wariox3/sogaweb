<?php
date_default_timezone_set('Etc/UTC');
require 'phpmailer/PHPMailerAutoload.php';

if (isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
    $email_to = "sogainformacion@gmail.com";
    $email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
    if (!isset($_POST['nombre']) ||
            !isset($_POST['email']) ||
            !isset($_POST['ciudad']) ||
            !isset($_POST['telefono']) ||
            !isset($_POST['celular']) ||
            !isset($_POST['comentarios'])) {

        echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
        echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
        die();
    }

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Username = "sogainformacion@gmail.com";
    $mail->Password = "70143086";
    $mail->setFrom('sogainformacion@gmail.com', 'First Last');
    //$mail->addReplyTo('replyto@example.com', 'First Last');
    $mail->addAddress('sogainformacion@gmail.com', 'John Doe');
    $mail->Subject = 'PHPMailer GMail SMTP test';
    $mail->msgHTML("Hola");
    $mail->AltBody = 'This is a plain-text message body';
    //$mail->addAttachment('images/phpmailer_mini.png');
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }


    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "E-mail: " . strtolower($_POST['email']) . "\n";
    $email_message .= "Ciudad: " . $_POST['ciudad'] . "\n";
    $email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
    $email_message .= "Celular: " . $_POST['celular'] . "\n";
    $email_message .= "Comentarios: " . $_POST['comentarios'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
    $headers = 'From: ' . $email_from . "\r\n" .
            'Reply-To: ' . $email_from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);

    echo "¡El formulario se ha enviado con éxito!";
}
?>



