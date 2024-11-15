<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postulaciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h3 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    <h3>Listado de Postulaciones</h3>
    <table>
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Oferta Laboral</th>
                <th>Fecha de Postulación</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applicants as $applicant)
            <tr>
                <td>{{ $applicant->user->name }}</td>
                <td>{{ $applicant->jobOffer->title }}</td>
                <td>{{ $applicant->application_date->format('d/m/Y H:i') }}</td>
                <td>{{ $applicant->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
