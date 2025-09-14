@extends('app')

@section('content')
    <x-background-hero>
        <a target="_blank" rel="nofollow noindex" title="Hubungi Kami"
            class="no-underline opacity-90 text-text-description-white group bg-primary pt-0.5 w-max px-4 text-sm shadow-sm mx-auto mb-4 flex justify-center items-center rounded-full">
            Hubungi Kami
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="size-3 ml-1.5 group-hover:ml-2.5 group-hover:transition-all">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
        <h1 class="mb-5">Jasa {{ web()->title }}</h1>
        <p class="text-text-description-white">{{ $description }}</p>
        <div class="my-7 flex-col flex sm:flex-row gap-5 justify-center items-center [&>*]:w-full [&>*]:sm:w-auto">
            <a href="{{ whatsapp() }}" target="_blank" rel="nofollow noindex" title="whatsapp"
                class="btn-secondary !bg-background-secondary text-text-description-black hover:text-text-description-white">
                Reservasi
            </a>
            <a href="{{ route('travel.archive') }}#cari-rute" rel="nofollow noindex" title="whatsapp" class="btn-secondary">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>


                Cari rute travel...
            </a>
        </div>
    </x-background-hero>
@endsection
