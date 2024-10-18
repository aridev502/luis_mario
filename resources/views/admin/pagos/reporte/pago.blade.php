<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket de Pago</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .content {
            width: 100%;
            /* height: 140px; */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            border: 1px solid #000;
            border-radius: 5px;
            padding: 10px;
        }

        .content h1 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .content p {
            margin: 0;
        }

        .footer {
            width: 100%;
            height: 60px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #000;
            border-top: none;
            border-radius: 5px;
            padding: 10px;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">

            <img src="{{asset('logos/main.png')}}" style="width: 20%;" alt="">

            <h1>Ticket de Pago</h1>
            <p>Dueño: {{ $pago->dueno->nombre }}</p>
            <p>Pago: Q. {{ number_format($pago->pago, 2) }}</p>
            <p>Tipo: {{ $pago->tipo }}</p>
            <p>Deuda: Q. {{ number_format($pago->dueno->asignado, 2) }}</p>
        </div>
        <div class="footer">
            <p>Fecha: {{ date('d/m/Y') }}</p>
            <p>Hora: {{ date('H:i:s') }}</p>
        </div>
    </div>
    <script>
        window.print();
        window.onafterprint = function() {
            window.history.back();
        }
    </script>
</body>

</html>