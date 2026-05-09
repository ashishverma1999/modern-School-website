<section class="school-bg py-16">
    <div class="mx-auto max-w-6xl px-4 lg:px-0">
        <aside class="grid overflow-hidden bg-transparent lg:grid-cols-[360px_1fr]">
            <div class="flex min-h-40 flex-col items-center justify-center bg-[#102f67] px-8 py-8 text-center text-white">
                <h2 class="section-title text-white">Latest <span>News</span></h2>
                <div class="section-rule mt-3"></div>
                <a href="#contact" class="mt-5 inline-flex items-center gap-3 text-sm font-semibold uppercase tracking-wide text-white hover:text-[#ffd200]">See All News <span class="text-2xl">→</span></a>
            </div>
            <div class="grid bg-white/50 lg:grid-cols-2">
                @foreach ($notices as $notice)
                    <article class="grid grid-cols-[72px_1fr] gap-4 border-b border-[#e8e2d3] p-6">
                        <div class="text-center">
                            <time class="block text-6xl font-light leading-none text-[#d8d8d8]">{{ $loop->iteration < 10 ? '0'.$loop->iteration : $loop->iteration }}</time>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-[#707070]">{{ \Illuminate\Support\Carbon::parse($notice['date'])->format('d-M-Y') }}</p>
                            <h3 class="mt-1 text-base font-semibold uppercase leading-6 text-[#252525]">{{ $notice['title'] }}</h3>
                        </div>
                    </article>
                @endforeach
            </div>
        </aside>

        <div id="about-ssic" class="mx-auto max-w-5xl px-4 py-20 text-center">
            <h2 class="section-title">About <span>Us</span></h2>
            <div class="section-rule mx-auto mt-3"></div>
            <div class="mt-8 space-y-5 text-lg leading-8 text-[#313131]">
                <p>Stepping Stone Inter College, nestled in the heart of Maniram, Gorakhpur, stands as a beacon of educational excellence in the region. Affiliated with the U.P. Board, this esteemed institution has been nurturing young minds and shaping futures since its inception.</p>
                <p>Founded on the principles of integrity, innovation and inclusivity, the institution is committed to providing quality education to students from diverse backgrounds.</p>
                <p>At Stepping Stone Inter College, academic rigor is balanced with holistic development. Modern classrooms, laboratories, library resources and activities create a conducive environment for learning and exploration.</p>
            </div>
            <div class="mt-10 grid gap-5 sm:grid-cols-3">
                @foreach ($aboutHighlights as $item)
                    <div class="bg-[#102f67] p-5 text-white shadow-md">
                        <p class="font-extrabold text-white">{{ $item }}</p>
                    </div>
                @endforeach
            </div>
            <a href="#contact" class="mt-10 inline-flex bg-[#102f67] px-8 py-4 text-base font-semibold text-white hover:bg-[#ffd200] hover:text-[#102f67]">Read More</a>
        </div>
    </div>
</section>
