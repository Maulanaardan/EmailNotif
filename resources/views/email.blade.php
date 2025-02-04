<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>Pesan dari {{ $data['name'] }}</h2>
    <p>Email: {{ $data['email'] }}</p>
    <p>Pesan:</p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
