<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
 <h1>Welcome to our application!</h1>
    <p>This is the welcome page.</p>
    <a href="/rezacreative" class="btn mt-4 inline-block">Go to RezaCreative!</a>
    <footer>
        <p>&copy; {{ date('Y') }} My Application. All rights reserved.</p>
    </footer>
</body>
</html>