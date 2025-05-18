<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>

<body>
@include("components.header")
<main>
    @yield('content')
</main>

</body>
</html>
