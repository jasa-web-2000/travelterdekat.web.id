@extends('app')

@section('content')
    @include('components.home.hero')

    <div class="my-space"></div>

    <x-travel.archive.index />

    <div class="my-space"></div>

    @include('components.home.featured')

    <div class="my-space"></div>

    <x-gallery.index />

    <div class="my-space"></div>

    <x-contact.index />
@endsection
