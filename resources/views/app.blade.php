<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @php
        $resultTitle = ($title ?? web()->title) . ' | ' . web()->title;
        $resultDescription = ($description ?? web()->tagline) . ' | ' . web()->title;
        $resultThumbnail = (object) [
            'url' => $thumbnail['url'] ?? web()->defaultLogo,
            'width' => $thumbnail['width'] ?? 672,
            'height' => $thumbnail['height'] ?? 672,
            'alt' => $thumbnail['alt'] ?? 'Logo ' . web()->title,
        ];
    @endphp

    <!-- Styles / Scripts -->
    <link rel="preload" fetchpriority="high" as="image" href="{{ asset('images/general/background-hero.webp') }}"
        type="image/webp">
    <link rel="preload" fetchpriority="high" href="{{ asset('fonts/Roboto-Regular.ttf') }}" as="font" type="font/ttf"
        crossorigin="anonymous">


    <style>
        @font-face {
            font-family: 'Poppins';
            src: url('{{ asset('fonts/Roboto-Regular.ttf') }}') format('truetype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
    <link rel="shortcut icon" href="{{ web()->defaultLogo }}">
    <link rel="icon" href="{{ web()->defaultLogo }}">


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
    class="!font-inter bg-background-secondary text-text-description-black tracking-[0.015em] antialiased w-full h-dvh !overflow-visible">

    @include('components.header')

    <main class="">
        @yield('content')
    </main>

    @include('components.footer')

</body>

</html>
