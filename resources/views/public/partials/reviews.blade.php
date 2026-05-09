<section id="reviews" class="school-bg py-20">
    <div class="mx-auto max-w-6xl px-4 text-center lg:px-0">
        <h2 class="section-title">Our <span>Reviews</span></h2>
        <div class="section-rule mx-auto mt-3"></div>

        <div class="mx-auto mt-10 max-w-5xl" data-review-carousel>
            @foreach ($reviews as $review)
                <article class="review-slide {{ $loop->first ? 'is-active' : '' }}">
                    <img src="{{ $review['image'] }}" alt="{{ $review['name'] }}" class="mx-auto h-32 w-32 rounded-full border-8 border-[#102f67] object-cover">
                    <p class="mx-auto mt-8 max-w-4xl text-lg leading-8 text-[#252525]">{{ $review['text'] }}</p>
                    <h3 class="mt-6 text-2xl font-black text-[#102f67]">{{ $review['name'] }}</h3>
                    <p class="mt-1 text-base font-semibold text-[#555555]">{{ $review['role'] }}</p>
                    <a href="#reviews" class="mt-8 inline-flex bg-[#ffd200] px-10 py-4 text-lg font-semibold text-[#102f67] shadow-md hover:bg-[#102f67] hover:text-white">Read More</a>
                </article>
            @endforeach
        </div>
    </div>
</section>
