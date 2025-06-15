<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            max-width: 600px;
            margin: auto;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        p {
            line-height: 1.6;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #888;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Nieuw Contactbericht</h2>

        <p><span class="label">Naam:</span> {{ $name }}</p>
        <p><span class="label">Email:</span> {{ $email }}</p>
        <p><span class="label">Onderwerp:</span> {{ $subject }}</p>

        <p><span class="label">Bericht:</span></p>
        <p>{{ $user_message }}</p>

        <div class="footer">
            Verzonden via het contactformulier op {{ date('d-m-Y H:i:s') }}
        </div>
    </div>
</body>
</html>
