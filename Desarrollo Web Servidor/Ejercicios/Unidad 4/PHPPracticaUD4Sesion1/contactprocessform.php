<?php

// Funciones para filtrar las entradas del usuario
function filterName($field) {
    // Limpiar el nombre del usuario
    $sanitizeField = filter_var(trim($field), FILTER_SANITIZE_STRING);

    // Validate user name
    if (filter_var($sanitizeField, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        return $sanitizeField;
    } else {
        return false;
    }
}

function filterEmail($field) {
    // Limpiar el correo electrónico
    $sanitizeField = filter_var(trim($field), FILTER_SANITIZE_EMAIL);

    // Validar el correo electrónico
    if (filter_var($sanitizeField, FILTER_VALIDATE_EMAIL)) {
        return $sanitizeField;
    } else {
        return false;
    }
}

function filterString($field) {
    // Limpiar una cadena
    $sanitizeField = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if (!empty($sanitizeField)) {
        return $sanitizeField;
    } else {
        return false;
    }
}

// Definimos las variables y las inicializamos con la cadena vacía
$nameErr = $emailErr = $messageErr = "";
$name = $email = $subject = $message = "";

// Procesar los datos del formulario cuando es enviado
if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == "POST") {

    // Validar el nombre de usuario
    if (!filter_has_var(INPUT_POST, "name")) {
        $nameErr = "Por favor introduzca su nombre.";
    } else {
        $name = filterName(filter_input(INPUT_POST, "name"));
        if ($name == FALSE) {
            $nameErr = "Por favor introduzca un nombre válido.";
        }
    }

    // Validar correo electrónico
    if (!filter_has_var(INPUT_POST, "email")) {
        $emailErr = "Por favor introduzca su dirección de correo electrónico.";
    } else {
        $email = filterEmail(filter_input(INPUT_POST, "email"));
        if ($email == FALSE) {
            $emailErr = "Por favor introduzca una dirección de correo electrónico válida.";
        }
    }

    // Validar asunto
    if (!filter_has_var(INPUT_POST, "subject")) {
        $subject = "";
    } else {
        $subject = filterString(filter_input(INPUT_POST, "subject"));
    }

    // Validar comentario
    if (!filter_has_var(INPUT_POST, "message")) {
        $messageErr = "Por favor introduzca su comentario.";
    } else {
        $message = filterString(filter_input(INPUT_POST, "message"));
        if ($message == FALSE) {
            $messageErr = "Por favor introduzca un comentario válido.";
        }
    }

    // Comprobar los errores de entrada antes de enviar el correo electrónico
    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        
        // Recipient email address
        $to = 'webmaster@example.com';

        // Crear las cabeceras del email
        $headers = 'From: ' . $email . "\r\n" .
                'Reply-To: ' . $email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        // Mandar el email
        if (mail($to, $subject, $message, $headers)) {
             echo '<p class="success">¡Su mensaje se ha enviado correctamente! Gracias.</p>';
        } else {
            echo '<p class="error">¡Lo sentimos no se puede enviar el email!. Por favor inténtelo de nuevo</p>';
        } 
    }
}
