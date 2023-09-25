<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel : Home II</title>
</head>
<body>
    <h3>Home II</h3>
    <h1>{{ $title}}</h1>
    <p>
        {{ $content }}
    </p>
    <ul>
        @foreach ($services as $service)
            <li>{{ $service }}</li>
        @endforeach
</ul>

</body>
</html>
