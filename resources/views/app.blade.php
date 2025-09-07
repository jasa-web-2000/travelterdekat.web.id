<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @php
        $resultTitle = $title ?? web()->title . ' | ' . web()->title;
        $resultDescription = $description ?? web()->tagline . ' | ' . web()->title;
        $resultThumbnail = (object) [
            'url' => $thumbnail['url'] ?? asset(web()->defaultLogo),
            'width' => $thumbnail['width'] ?? 672,
            'height' => $thumbnail['height'] ?? 672,
            'alt' => $thumbnail['alt'] ?? 'Logo ' . web()->title,
        ];
    @endphp

    <link rel="preload" href="{{ asset('/fonts/inter.ttf') }}" as="font" type="font/ttf" crossorigin="anonymous">


    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("/fonts/inter.ttf") format("truetype");
        }
    </style>


    <script>
        document.documentElement.classList.toggle(
            "dark",
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches),
        );
        localStorage.theme = "light";
        // Whenever the user explicitly chooses dark mode
        localStorage.theme = "dark";
        // Whenever the user explicitly chooses to respect the OS preference
        localStorage.removeItem("theme");
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Dev -->
    <link rel="author" href="{{ developer()->url }}">
    <meta name="author" content="{{ developer()->name }}">
    <meta name="creator" content="{{ developer()->name }}">
    <meta name="publisher" content="{{ developer()->name }}">
    <meta name="generator" content="Laravel 12">


    <!-- General -->
    <title>{{ $resultTitle }}</title>
    <meta name="description" content="{{ $resultDescription }}">
    <meta name="application-name" content="{{ web()->title }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">


    <!-- Google Bot -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-video-preview:-1, max-image-preview:large, max-snippet:-1">
    <link rel="canonical" href="{{ request()->url() }}">

    <!-- OG General  -->
    <meta property="og:title" content="{{ $resultTitle }}">
    <meta property="og:description" content="{{ $resultDescription }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:site_name" content="{{ web()->title }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ $resultThumbnail->url }}">
    <meta property="og:image:width" content="{{ $resultThumbnail->width }}">
    <meta property="og:image:height" content="{{ $resultThumbnail->height }}">
    <meta property="og:image:alt" content="{{ $resultThumbnail->alt }}">

    <!-- OG Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $resultTitle }}">
    <meta name="twitter:description" content="{{ $resultDescription }}">
    <meta name="twitter:image" content="{{ $resultThumbnail->url }}">
    <meta name="twitter:image:width" content="{{ $resultThumbnail->width }}">
    <meta name="twitter:image:height" content="{{ $resultThumbnail->height }}">
    <meta name="twitter:image:alt" content="{{ $resultThumbnail->alt }}">



</head>

<body
    class="overflow-y-visible font-inter bg-background-primary text-text-description antialiased w-full h-dvh !overflow-visible">

    <x-header />

    @yield('content')

</body>

</html>
