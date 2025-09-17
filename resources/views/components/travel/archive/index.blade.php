@php
    $travel = [
        [31, 3273], // DKI Jakarta - Kota Bandung
        [3171, 51], // KOTA JAKARTA SELATAN - Bali
        [3578, 31], // KOTA SURABAYA - DKI Jakarta
        [3302710, 3374], // PURWOKERTO SELATAN - KOTA SEMARANG
        [31, 34], // DKI Jakarta - YOGYAKARTA
        [3212, 31], // KABUPATEN INDRAMAYU - DKI Jakarta
        [31, 3374], // DKI Jakarta - KOTA SEMARANG
        [31, 3578], // DKI Jakarta - KOTA SURABAYA
    ];

@endphp

<div class="my-container text-center">
    <x-sub-heading subTitle='Rute Travel Unggulan'
        description='Kami memiliki beberapa rute travel unggulan yang mungkin anda suka.' />

    <div
        class="grid grid-cols-1 min-[490px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-5 sm:gap-x-6 md:gap-x-7 lg:gap-x-8 gap-y-7 sm:gap-y-8 md:gap-y-9 lg:gap-y-10 text-left">
        {{--  --}}
        @foreach ($travel as $item)
            @php
                $origin = location($item[0]);
                $destination = location($item[1]);
            @endphp

            @if ($origin && $destination)
                @php
                    $params = [
                        'originName' => Str::slug($origin->name),
                        'originId' => $origin->id,
                        'destinationName' => Str::slug($destination->name),
                        'destinationId' => $destination->id,
                    ];
                @endphp
                <x-travel.archive.travel-grid
                    title="Travel {{ Str::title($origin->name) }} {{ Str::title($destination->name) }}"
                    url="{{ route('travel.show', $params) }}" thumbnail="{{ route('travel.show.thumbnail', $params) }}" />
            @endif
        @endforeach
    </div>
</div>
