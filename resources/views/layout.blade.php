<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav> Navbar </nav>

    @yield('conteudo')

    @if (date('N') == 5)
    @yield('disc')
    @else
    <p>Nothing to show</p>
    @endif





    <footer>
        <hr>
        ---Footer here---
    </footer>
</body>

</html>
