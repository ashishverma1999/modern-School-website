<section id="achievements-birthdays" class="school-bg py-8 lg:py-12">
    <div class="mx-auto grid max-w-7xl gap-0 px-4 lg:grid-cols-[52%_48%] lg:px-0">
        <div class="relative z-10 bg-white p-4 shadow-xl">
            <div
                class="blue-image-panel min-h-[32rem] px-6 py-14 text-center text-white lg:px-12"
                style="background-image: linear-gradient(rgba(16, 47, 103, 0.72), rgba(16, 47, 103, 0.72)), url('/images/background1.jpg')"
            >
                <h2 class="text-4xl font-black md:text-5xl">Toppers 2024-25</h2>
                <div class="section-rule mx-auto mt-3 bg-white/70"></div>

                <div class="mt-10 grid gap-10 md:grid-cols-2">
                    @foreach ($toppers as $topperGroup)
                        <div class="profile-carousel" data-profile-carousel>
                            <h3 class="text-xl font-semibold">{{ $topperGroup['class'] }}</h3>
                            <div class="mt-6 flex items-center justify-center gap-4">
                                <button type="button" class="carousel-control" data-profile-prev aria-label="Previous {{ $topperGroup['class'] }} topper">&larr;</button>
                                <div class="profile-stage">
                                    @foreach ($topperGroup['items'] as $topper)
                                        <article class="profile-slide {{ $loop->first ? 'is-active' : '' }}">
                                            <img src="{{ $topper['image'] }}" alt="{{ $topper['name'] }}" class="profile-photo">
                                            <h4 class="mt-5 text-xl font-semibold uppercase leading-6">{{ $topper['name'] }}</h4>
                                            <p class="text-xl leading-6">{{ $topper['score'] }}</p>
                                        </article>
                                    @endforeach
                                </div>
                                <button type="button" class="carousel-control" data-profile-next aria-label="Next {{ $topperGroup['class'] }} topper">&rarr;</button>
                            </div>
                            <a href="#gallery" class="mt-8 inline-flex bg-[#ffd200] px-9 py-3 text-xl font-semibold text-[#102f67] hover:bg-white">View All</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="blue-panel mt-10 min-h-[32rem] px-6 py-14 text-center text-white shadow-xl lg:mt-12 lg:px-12">
            <h2 class="text-4xl font-black md:text-5xl">Today's <span class="text-[#ffd200]">Birthdays</span></h2>
            <div class="section-rule mx-auto mt-3 bg-white/70"></div>

            <div class="mt-10 grid gap-10 md:grid-cols-2">
                @foreach ($birthdays as $birthdayGroup)
                    <div class="profile-carousel" data-profile-carousel>
                        <h3 class="text-xl font-semibold">{{ $birthdayGroup['group'] }}</h3>
                        <div class="mt-6 flex items-center justify-center gap-4">
                            <button type="button" class="carousel-control" data-profile-prev aria-label="Previous {{ $birthdayGroup['group'] }} birthday">&larr;</button>
                            <div class="profile-stage">
                                @foreach ($birthdayGroup['items'] as $birthday)
                                    <article class="profile-slide {{ $loop->first ? 'is-active' : '' }}">
                                        <img src="{{ $birthday['image'] }}" alt="{{ $birthday['name'] }}" class="profile-photo">
                                        <h4 class="mt-5 text-xl font-normal leading-6">{{ $birthday['name'] }}</h4>
                                        <p class="text-xl leading-6">{{ $birthday['detail'] }}</p>
                                    </article>
                                @endforeach
                            </div>
                            <button type="button" class="carousel-control" data-profile-next aria-label="Next {{ $birthdayGroup['group'] }} birthday">&rarr;</button>
                        </div>
                        <a href="#gallery" class="mt-8 inline-flex bg-[#ffd200] px-9 py-3 text-xl font-semibold text-[#102f67] hover:bg-white">View All</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
