<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Form</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('send') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br>

        <label>Message:</label>
        <textarea name="message" required></textarea>
        <br>

        <button type="submit">Send</button>
    </form>
</body>
</html>
