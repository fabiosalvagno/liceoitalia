<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo messaggio di contatto</title>
</head>
<body>
    <h2>Nuovo messaggio da {{ $nome }}</h2>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Messaggio:</strong></p>
    <p>{{ $messaggio }}</p>
</body>
</html>
