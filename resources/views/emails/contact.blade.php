<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Nouveau message contact</title>
</head>
<body style="font-family: Arial, sans-serif; color: #0f172a; line-height: 1.6;">
    <h1 style="font-size: 20px; margin-bottom: 16px;">Nouveau message depuis oppdrag.tech</h1>

    <p><strong>Nom :</strong> {{ $name }}</p>
    <p><strong>Email :</strong> {{ $email }}</p>
    <p><strong>Besoin :</strong> {{ $need }}</p>

    <h2 style="font-size: 16px; margin-top: 24px;">Message</h2>
    <p style="white-space: pre-line;">{{ $message }}</p>
</body>
</html>
