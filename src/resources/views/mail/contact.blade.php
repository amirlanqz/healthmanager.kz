<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }
        .strip{
            background: #f2f2f2;
        }
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
<p><strong>Name:</strong> {{ $request->name }}</p>
<p><strong>Email:</strong> {{ $request->email }}</p>
<p><strong>Phone:</strong> {{ $request->phone }}</p>
<p><strong>Message:</strong></p>
<p>{{ $request->message }}</p>
</body>
</html>
