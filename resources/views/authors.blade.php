<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Author</title>
</head>
<body>
    <h1>Daftar Author Kami</h1>
    @foreach ($authors as $item)
    <ul>
        <li>{{ $item['name'] }}</li>
        <li>{{ $item['bio'] }}</li>
    </ul>
@endforeach
</body>
</html>