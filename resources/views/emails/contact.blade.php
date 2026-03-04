<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message depuis le Portfolio</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
<h2>Nouveau message de : {{ $data['name'] }}</h2>
<p><strong>Email :</strong> {{ $data['email'] }}</p>
<p><strong>Sujet :</strong> {{ $data['subject'] }}</p>
<hr>
<h3>Message :</h3>
<p style="white-space: pre-wrap;">{{ $data['message'] }}</p>
</body>
</html>
