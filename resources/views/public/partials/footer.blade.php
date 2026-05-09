<footer id="contact" class="school-bg text-[#252525]">
    <div class="mx-auto grid max-w-6xl gap-12 px-4 py-16 md:grid-cols-[1.5fr_0.8fr_1.2fr] lg:px-0">
        <div>
            <h2 class="section-title text-4xl">{{ $school['name'] }}</h2>
            <div class="section-rule mt-3"></div>
            <p class="mt-6 max-w-xl text-lg leading-8">Focused on academics, values, discipline and all-round development in Maniram, Gorakhpur.</p>
            <div class="mt-6 space-y-4 text-lg">
                <p class="bg-[#d8d8d8] px-3 py-2 font-bold text-[#102f67]">Head Office</p>
                <p>{{ $school['location'] }}</p>
                <p><strong>For Admission:</strong><br><a href="tel:{{ $school['phone'] }}">{{ $school['phone'] }}</a></p>
                <p><strong>Email:</strong><br><a href="mailto:{{ $school['email'] }}">{{ $school['email'] }}</a></p>
            </div>
        </div>
        <div>
            <h3 class="text-4xl font-black text-[#102f67]">Facilities</h3>
            <div class="mt-8 grid gap-5 text-lg">
                @foreach (array_slice($facilities, 0, 4) as $facility)
                    <a href="#{{ str($facility['title'])->slug() }}" class="hover:text-[#102f67]">{{ $facility['title'] }}</a>
                @endforeach
            </div>
        </div>
        <div class="text-center">
            <h3 class="text-2xl font-black uppercase text-[#102f67]">Stay Connected With {{ $school['short'] }}</h3>
            <p class="mx-auto mt-8 max-w-md text-lg leading-9">Parents can access admissions, gallery updates, facilities and contact information from one place.</p>
            <div class="mx-auto mt-10 inline-grid grid-cols-6 overflow-hidden text-xl font-black">
                @foreach (str_split($school['short']) as $index => $letter)
                    <span class="{{ $index % 2 === 0 ? 'bg-[#ffd200] text-[#102f67]' : 'bg-[#102f67] text-white' }} px-4 py-3">{{ $letter }}</span>
                @endforeach
            </div>
            <p class="mt-3 text-xl font-black uppercase text-[#102f67]">Visitor</p>
            <p class="text-lg text-[#102f67]">1246540</p>
        </div>
    </div>
    <div class="bg-[#102f67] px-4 py-5 text-center text-sm text-white/75">
        Copyrights &copy; {{ now()->year }} {{ $school['name'] }} | All Rights Reserved.
    </div>
</footer>
