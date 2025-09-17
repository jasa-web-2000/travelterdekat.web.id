@extends('app')

@section('content')
    @include('components.home.hero')

    <div class="my-space"></div>

    <x-travel.archive.index />

    <div class="my-space"></div>

    <x-home.featured />

    <x-home.partner />

    <div class="my-space"></div>

    <x-gallery.index />

    <div class="my-space "></div>

    <x-home.cta />

    <x-home.faq />

    <div class="my-space"></div>

    <x-contact.index />
@endsection
