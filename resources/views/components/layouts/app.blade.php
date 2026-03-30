<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ __('Alexandre Delmotte | Développeur Web') }}</title>
    <meta name="description" content="Portfolio d'Alexandre Delmotte, Développeur Web Junior spécialisé en PHP et Laravel. Découvrez mes projets, mon parcours et contactez-moi pour une collaboration.">

    <meta property="og:title" content="Alexandre Delmotte | Développeur Web">
    <meta property="og:description" content="Développeur Web Backend prêt à relever de nouveaux défis.">
    <meta property="og:image" content="{{ asset('img/profile.jpg') }}"> <meta property="og:url" content="https://alexandredelmotte.site">
    <meta property="og:type" content="website">

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="bg-site-bg text-gray-200 antialiased font-sans min-h-screen flex flex-col">

        <x-layouts.navbar />

        <main class="flex-grow">
            {{ $slot }}
        </main>

        <x-layouts.footer />
        <x-utils.toast />
    </body>
</html>
