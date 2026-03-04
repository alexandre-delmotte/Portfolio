<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexandre Delmotte | Développeur Web</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-site-bg text-gray-200 antialiased font-sans min-h-screen flex flex-col">

<x-layouts.navbar />

<main class="flex-grow">
    {{ $slot }}
</main>

<x-layouts.footer />

</body>
</html>
