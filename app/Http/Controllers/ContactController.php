<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    function index()
    {
        return view('contact');
    }

    function sendEmail(Request $request)
    {
        $name           = $request->name;
        $email          = $request->email;
        $phone          = $request->phone;
        $subject        = $request->subject;
        $message        = $request->message;

        $bodyMail = '
        <!DOCTYPE html>
        <html lang="es">            
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mensaje Enviado con éxito</title>
        </head>
        <body> 
            <div>
                <h1 style="text-align: center;">
                    <strong>' . $name . '</strong> desea una cotización especial.
                </h1>
                <h4 style="text-align: center;">
                    Solicitud hecha desde quimeracreativa.mx
                </h4>
                <hr>
                <br>
                <table style="width:100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><strong>Asunto:</strong></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">' . $subject . ' </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><strong>Nombre:</strong></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">' . $name . ' </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><strong>Correo:</strong></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">' . $email . ' </td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;"><strong>Teléfono:</strong></td>
                    <td style="padding: 10px; border: 1px solid #ddd;">' . $phone . ' </td>
                </tr>
            </table>
            <br>
            <h4><strong>Mensaje:</strong></h4>
            <p>
            ' . $message . '
            </p>
            <hr>
        </body>    
        </html>         
        ';

        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                   //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'dannycanul282@gmail.com';               //SMTP username
            $mail->Password   = 'ijlfvcqwhxaierrg';                         //SMTP password
            $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->CharSet = 'UTF-8';

            //Recipients
            $mail->setFrom('dannycanul@hotmail.com', 'Quimera Creativa Page');
            $mail->addAddress('dannycanul@hotmail.com');           //Add a recipient
            $mail->addReplyTo($email);

            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject = 'Cotización Web - Quimera Creativa';
            $mail->Body    = $bodyMail;
            $mail->send();
        } catch (Exception $e) {
            echo $e->errorMessage();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return view('gracias');
    }
}
