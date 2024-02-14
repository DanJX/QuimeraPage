<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo Electrónico</title>
</head>

<body>

    <table style="width:100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><strong>Nombre:</strong></td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $datosForm['name'] }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><strong>Correo:</strong></td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $datosForm['email'] }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><strong>Teléfono:</strong></td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $datosForm['phone'] }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><strong>Asunto:</strong></td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $datosForm['subject'] }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><strong>Mensaje:</strong></td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $datosForm['message'] }}</td>
        </tr>
    </table>

</body>

</html>
