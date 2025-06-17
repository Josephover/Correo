<?php

require_once __DIR__ . '/../models/Correo.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../libs/vendor/autoload.php';

class CorreoController
{
    public function enviar($correo)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'joseph.sanchez@istvidanueva.edu.ec';
            $mail->Password   = 'djpistntijzuwpeh';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom($correo->remitente, 'Remitente');
            $mail->addAddress($correo->destinatario);

            if ($correo->archivo && $correo->archivo['error'] == UPLOAD_ERR_OK) {
                $mail->addAttachment($correo->archivo['tmp_name'], $correo->archivo['name']);
            }

            $mail->isHTML(true);
            $mail->Subject = $correo->asunto;
            $mail->Body    = $correo->descripcion;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return $mail->ErrorInfo;
        }
    }
}