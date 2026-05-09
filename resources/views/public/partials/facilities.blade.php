<section id="facilities" class="school-bg py-20">
    <div class="mx-auto max-w-6xl px-4 lg:px-0">
        <div class="mb-12 text-center">
            <h2 class="section-title">Our <span>Facilities</span></h2>
            <div class="section-rule mx-auto mt-3"></div>
        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($facilities as $facility)
                <article id="{{ str($facility['title'])->slug() }}" class="facility-tile">
                    <div class="facility-icon">
                        @switch($facility['title'])
                            @case('Computer Labs')
                            @case('Smart Class')
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16v10H4V5Zm2 2v6h12V7H6Zm3 11h6v2H9v-2Zm-3 2h12v2H6v-2Z"/></svg>
                                @break
                            @case('Science Labs')
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 2h6v2h-1v4.3l5.4 8.9A3.1 3.1 0 0 1 16.7 22H7.3a3.1 3.1 0 0 1-2.7-4.8L10 8.3V4H9V2Zm3 7.1-5.7 9.3A1.1 1.1 0 0 0 7.3 20h9.4a1.1 1.1 0 0 0 1-1.6L12 9.1ZM8.8 16h6.4l1.2 2H7.6l1.2-2Z"/></svg>
                                @break
                            @case('Transportation')
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 3h14a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2v2h-3v-2H8v2H5v-2a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Zm0 7h14V5H5v5Zm3 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm8 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"/></svg>
                                @break
                            @case('Library')
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5.5A4.5 4.5 0 0 1 8.5 1H11v18H8.5A4.5 4.5 0 0 0 4 23V5.5Zm9-4h2.5A4.5 4.5 0 0 1 20 6v17a4.5 4.5 0 0 0-4.5-4H13V1.5Z"/></svg>
                                @break
                            @case('Sports')
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.8 2.2 22 6.4l-2.1 2.1 1.4 1.4-2.8 2.8-1.4-1.4-8.5 8.5-4.2-4.2 8.5-8.5-1.4-1.4 2.8-2.8 1.4 1.4 2.1-2.1ZM5.1 16.9l2 2-2.8 2.8-2-2 2.8-2.8Z"/></svg>
                                @break
                            @case('Medical & First Aid')
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21.4 4.5 14C1.9 11.5 2 7.4 4.6 5a5.6 5.6 0 0 1 7.4.3 5.6 5.6 0 0 1 7.4-.3c2.6 2.4 2.7 6.5.1 9L12 21.4Z"/></svg>
                                @break
                            @case('Security')
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2 20 5v6c0 5-3.2 9.5-8 11-4.8-1.5-8-6-8-11V5l8-3Zm0 3.2L6 7.4V11c0 3.8 2.3 7.1 6 8.7 3.7-1.6 6-4.9 6-8.7V7.4l-6-2.2Zm0 3.3a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Z"/></svg>
                                @break
                            @default
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16v16H4V4Zm2 2v12h12V6H6Z"/></svg>
                        @endswitch
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-white">{{ $facility['title'] }}</h3>
                    <a href="#contact" class="mt-6 inline-flex items-center gap-3 text-base font-semibold text-[#ffd200]">View Details <span>→</span></a>
                </article>
            @endforeach
        </div>
    </div>
</section>
