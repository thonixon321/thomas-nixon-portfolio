<!DOCTYPE html>
<html>
<head>
    <title>thomas-nixon-portfolio.com</title>
</head>
<body>
    <h1>Name: {{ $mailData['name'] }}</h1>
    <h3>Email: {{ $mailData['email'] }}</h3>
    <h4>Subject: {{ $mailData['subject'] }}</h4>
    <p>{{ $mailData['body'] }}</p>
     
    <p>Thank you Thomas</p>
</body>
</html>