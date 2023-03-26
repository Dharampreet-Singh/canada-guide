<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>
    Hi,<br>
    You have a new contact email from your site. <br>
    <strong>Details: </strong><br>
    <strong>Name:</strong> {{$data['name']}}<br>
    <strong>Mail-Id:</strong> {{$data['email']}}<br>
    <strong>Message:</strong> {{$data['name']}} <em>{{$data['message']}}</em>
</p>
</body>
</html>
