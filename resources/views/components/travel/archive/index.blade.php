<div class="my-container text-center">
    <x-sub-heading subTitle='Rute Travel Unggulan'
        description='Kami memiliki beberapa rute travel unggulan yang mungkin anda suka' />

    <div
        class="grid grid-cols-1 min-[490px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-5 sm:gap-x-6 md:gap-x-7 lg:gap-x-8 gap-y-7 sm:gap-y-8 md:gap-y-9 lg:gap-y-10">
        {{--  --}}
        <div class="bg-white p-5 rounded-lg shadow-lg border-b-8 border-b-primary">
            <div class="relative">
                <img class="w-full rounded-xl" src="as" alt="Judul" title="Judul" width="" height="" />
                <span
                    class="absolute top-0 bg-primary text-slate-300 font-semibold p-1 px-2 text-xs rounded-br-lg rounded-tl-lg">
                    Unggulan
                </span>
            </div>
            <h3 class="my-4 text-[17px] line-clamp-2" title="Judul">
                Judul
            </h3>
            <div>
                {{-- <FeaturedList icon={Clock} feature="24 jam" />
                <FeaturedList icon={DoorClosed} feature="Door to door" />
                <FeaturedList icon={PackagePlus} feature="Free bagasi 15kg" /> --}}
                <a class="text-sm underline" href="" title="">
                    Baca selengkapnya...
                </a>
                <Button asChild class="w-full mt-4 shadow-lg" title="Pesan ...">
                    <a href="{{ whatsapp(null, 'Saya ingin tanya tentang...') }}" title="{title}" target="_blank">
                        {{-- <MessageCircleMore /> --}} Pesan Travel
                    </a>
                </Button>
            </div>
        </div>
    </div>
</div>
