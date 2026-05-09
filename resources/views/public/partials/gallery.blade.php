<section id="gallery" class="school-bg py-20">
    <div class="mx-auto grid max-w-6xl gap-0 px-4 lg:grid-cols-[52%_48%] lg:px-0">
        @php($featuredGallery = $galleryItems->first())
        <div class="relative z-10 bg-white p-4 shadow-lg">
            <div class="image-carousel h-[34rem]" data-carousel>
                @foreach ($galleryItems as $item)
                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="carousel-image {{ $loop->first ? 'is-active' : '' }}">
                @endforeach
            </div>
        </div>
        <div class="blue-panel mt-10 p-8 text-center text-white shadow-lg lg:mt-12 lg:min-h-[30rem] lg:p-14">
            <h2 class="section-title text-white">Photo <span>Gallery</span></h2>
            <div class="section-rule mx-auto mt-3"></div>
            <div class="mt-8 grid grid-cols-2 gap-5">
                <div class="image-carousel h-36" data-carousel>
                    @foreach ($galleryItems as $item)
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="carousel-image {{ $loop->first ? 'is-active' : '' }}">
                    @endforeach
                </div>
                <div class="image-carousel h-36" data-carousel>
                    @foreach ($galleryItems->reverse()->values() as $item)
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="carousel-image {{ $loop->first ? 'is-active' : '' }}">
                    @endforeach
                </div>
            </div>
            <div class="mx-auto mt-5 max-w-md text-left">
                <p class="text-base font-semibold">Updated On: {{ now()->format('d-M-Y') }}</p>
                <h3 class="mt-1 text-xl font-semibold uppercase">{{ $featuredGallery['title'] }}</h3>
            </div>
            <a href="#gallery" class="mt-8 inline-flex bg-white px-10 py-4 text-lg font-semibold text-[#102f67] hover:bg-[#ffd200]">View All</a>
        </div>
    </div>
</section>
