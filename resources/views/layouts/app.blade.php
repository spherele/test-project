<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    @vite('resources/js/app.js')
</head>
<body>
    <x-header />

    <x-main />

    <x-footer />

    @stack('scripts')
</body>
</html>
