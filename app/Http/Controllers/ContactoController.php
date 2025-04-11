<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class ContactoController extends Controller
{
    //

    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        $mail = new PHPMailer(true);

        try {
            // Configura tu servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'mail.unidevjes.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'contacto@unidevjes.com';
            $mail->Password = 'pN+;#aXE_Xdu';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom($request->email, $request->nombre);
            $mail->addAddress('contacto@unidevjes.com', 'Administrador');

            $mail->isHTML(true);
            $mail->Subject = 'Mensaje desde la página de contacto';
            $mail->Body    = "<strong>Nombre:</strong> {$request->nombre}<br>
                              <strong>Email:</strong> {$request->email}<br>
                              <strong>Mensaje:</strong><br>{$request->mensaje}";

            $mail->send();

            return back()->with('success', '¡Tu mensaje ha sido enviado correctamente!');
        } catch (Exception $e) {
            return back()->with('error', 'Hubo un error al enviar el mensaje: ' . $mail->ErrorInfo);
        }
    }
}
