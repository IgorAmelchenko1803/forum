<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-secondary-subtle">
    <div class="section-nav">
        
            <x-main.navigation></x-main.navigation>
        
    </div>
    <div class="content">
        <div class="container">
            {{ $slot }}
        </div>
    </div>
</body>
</html>