<!-- resources/views/pdfs/job_offers.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas Laborales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h3 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h4>EcoTech Solutions</h4>
    <h3>Ofertas Laborales</h3>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Sector</th>
            </tr>
        </thead>
        <tbody>
            @foreach($job_offers as $job_offer)
            <tr>
                <td>{{ $job_offer->title }}</td>
                <td>{{ $job_offer->description }}</td>
                <td>{{ $job_offer->start_date->format('d/m/Y') }}</td>
                <td>{{ $job_offer->end_date->format('d/m/Y') }}</td>
                <td>{{ $job_offer->sector->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
