<section class="school-bg mx-auto grid max-w-6xl gap-0 px-4 pb-20 lg:grid-cols-[52%_48%] lg:px-0">
    <div class="relative z-10 bg-white p-4 shadow-lg">
        <div class="image-carousel h-[34rem]" data-carousel>
            @foreach ([$messages[0]['image'], ...$slides] as $image)
                <img src="{{ $image }}" alt="Students at {{ $school['name'] }}" class="carousel-image {{ $loop->first ? 'is-active' : '' }}">
            @endforeach
        </div>
    </div>
    <div id="academics" class="blue-panel mt-10 p-8 text-white shadow-lg lg:mt-12 lg:min-h-[30rem] lg:p-16">
        <h2 class="text-4xl font-semibold">{{ $messages[0]['title'] }}</h2>
        <h3 class="mt-6 text-2xl font-normal">{{ $messages[0]['name'] }}</h3>
        <p class="mt-6 text-base leading-8 text-white/90">{{ $messages[0]['text'] }}</p>
        <p class="mt-4 text-base leading-8 text-white/90">We believe every child carries a distinct promise. Our responsibility is to discover it, encourage it, and shape it through discipline, values, academics, and confident participation in school life.</p>
        <a href="#contact" class="mt-10 inline-flex bg-[#ffd200] px-8 py-4 text-base font-semibold text-[#102f67] hover:bg-white">Read More</a>
    </div>
</section>
