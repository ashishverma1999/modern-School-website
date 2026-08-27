<header class="sticky top-0 z-40 border-b border-slate-200/80 bg-white/95 backdrop-blur-md transition-all shadow-xs">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6">
        <!-- Logo / Brand Identity -->
        <a href="#home" class="flex min-w-0 items-center gap-3.5 group" aria-label="{{ $school['name'] }} home">
            <div class="relative flex h-12 w-12 flex-none items-center justify-center rounded-xl bg-gradient-to-br from-amber-400 to-amber-500 text-[#07192f] shadow-md group-hover:scale-105 transition-transform duration-300">
                <span class="font-black text-xl tracking-tighter">HM</span>
                <span class="absolute -bottom-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#0b2545] text-[9px] font-bold text-amber-400">★</span>
            </div>
            <div class="min-w-0">
                <span class="block font-serif text-lg font-black leading-tight text-[#0b2545] sm:text-xl tracking-tight">{{ $school['name'] }}</span>
                <span class="block truncate text-[11px] font-bold uppercase tracking-wider text-emerald-700">Maniram, Gorakhpur</span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden items-center gap-1 xl:gap-2 lg:flex" aria-label="Primary navigation">
            <a href="#home" class="nav-item">Home</a>
            
            @foreach ($navGroups as $label => $items)
                <div class="relative group">
                    <a href="{{ $items[0]['href'] }}" class="nav-item inline-flex items-center gap-1">
                        <span>{{ $label }}</span>
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-amber-500 group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div class="invisible absolute left-0 top-full w-60 rounded-xl border border-slate-100 bg-white p-2 opacity-0 shadow-xl transition-all duration-200 group-hover:visible group-hover:opacity-100 group-hover:translate-y-1">
                        @foreach ($items as $item)
                            <a href="{{ $item['href'] }}" class="block rounded-lg px-3.5 py-2.5 text-sm font-semibold text-slate-700 hover:bg-amber-50 hover:text-[#0b2545] transition-colors">
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <a href="#gallery" class="nav-item">Gallery ({{ $allImagesCount ?? 37 }})</a>
            <a href="#contact" class="nav-item">Contact</a>

            <a href="#admissions" class="ml-3 inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 px-4 py-2.5 text-sm font-extrabold text-white shadow-md hover:from-amber-600 hover:to-amber-700 hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                <span>Admissions 2026</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
            </a>
        </nav>

        <!-- Mobile Menu Toggle Button -->
        <button type="button" class="menu-toggle flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 text-slate-700 hover:bg-slate-50 lg:hidden" aria-expanded="false" aria-controls="mobile-menu" aria-label="Toggle Navigation">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </div>

    <!-- Mobile Drawer Menu -->
    <nav id="mobile-menu" class="hidden border-t border-slate-200 bg-white px-5 py-6 lg:hidden max-h-[85vh] overflow-y-auto" aria-label="Mobile navigation">
        <div class="grid gap-2">
            <a href="#home" class="block rounded-lg px-3 py-2 text-base font-bold text-[#0b2545] hover:bg-amber-50">Home</a>
            
            @foreach ($navGroups as $label => $items)
                <div class="pt-2">
                    <p class="px-3 text-xs font-black uppercase tracking-wider text-amber-600">{{ $label }}</p>
                    <div class="mt-1 grid gap-1 pl-2">
                        @foreach ($items as $item)
                            <a href="{{ $item['href'] }}" class="block rounded-lg px-3 py-2 text-sm font-semibold text-slate-600 hover:bg-slate-50 hover:text-[#0b2545]">{{ $item['label'] }}</a>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="pt-2">
                <a href="#gallery" class="block rounded-lg px-3 py-2 text-base font-bold text-[#0b2545] hover:bg-amber-50">Photo Gallery ({{ $allImagesCount ?? 37 }})</a>
                <a href="#contact" class="block rounded-lg px-3 py-2 text-base font-bold text-[#0b2545] hover:bg-amber-50">Contact Us</a>
            </div>

            <div class="mt-4 pt-4 border-t border-slate-100 flex flex-col gap-3">
                <a href="#admissions" class="flex items-center justify-center gap-2 rounded-xl bg-amber-500 py-3 text-sm font-bold text-white shadow-md">
                    <span>Apply for Admission</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="tel:{{ $school['phone'] }}" class="flex items-center justify-center gap-2 rounded-xl border border-slate-200 py-2.5 text-sm font-bold text-slate-700 hover:bg-slate-50">
                    <span>Call: {{ $school['phone'] }}</span>
                </a>
            </div>
        </div>
    </nav>
</header>
