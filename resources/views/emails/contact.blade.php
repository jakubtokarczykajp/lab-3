<!DOCTYPE html>
<html>
<head>
    <title>Wiadomość kontaktowa</title>
</head>
<body>
<h1>Nowa wiadomość od {{ $data['name'] }}</h1>
<p>Email: {{ $data['email'] }}</p>
<p>Wiadomość:</p>
<p>{{ $data['message'] }}</p>
</body>
</html>
