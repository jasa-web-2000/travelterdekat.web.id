@extends('app')

@section('content')
    @include('components.home.hero')

    <div class="my-space"></div>

    <x-gallery.index />

    <div class="my-space"></div>

    <x-contact.index />

    <div class="my-space"></div>
@endsection
