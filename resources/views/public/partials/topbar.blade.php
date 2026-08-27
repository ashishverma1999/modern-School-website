<div class="bg-[#07192f] text-xs sm:text-sm text-slate-200 border-b border-white/10">
    <div class="mx-auto flex max-w-7xl flex-col gap-2 px-4 py-2.5 sm:flex-row sm:items-center sm:justify-between">
        <div class="flex flex-wrap items-center gap-x-5 gap-y-1">
            <a href="tel:{{ $school['phone'] }}" class="inline-flex items-center gap-1.5 hover:text-amber-400 transition-colors">
                <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                <span>{{ $school['phone'] }}</span>
            </a>
            <a href="mailto:{{ $school['email'] }}" class="hidden md:inline-flex items-center gap-1.5 hover:text-amber-400 transition-colors">
                <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                <span>{{ $school['email'] }}</span>
            </a>
            <span class="inline-flex items-center gap-1.5 text-slate-300">
                <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span>{{ $school['location'] }}</span>
            </span>
        </div>
        <div class="flex flex-wrap items-center gap-3 self-end sm:self-auto">
            <!-- Language Switcher (English <-> Hindi) -->
            <div class="inline-flex items-center rounded-lg bg-white/10 p-0.5 border border-white/15 text-xs font-bold" data-language-switcher>
                <button type="button" class="lang-btn is-active px-2 py-0.5 rounded transition-all text-amber-400 font-extrabold" data-lang="en" title="English">
                    🇬🇧 EN
                </button>
                <span class="text-white/30 text-[10px]">|</span>
                <button type="button" class="lang-btn px-2 py-0.5 rounded transition-all text-slate-300 hover:text-white" data-lang="hi" title="हिन्दी (Hindi)">
                    🇮🇳 हिन्दी
                </button>
            </div>

            <span class="hidden lg:inline-flex text-slate-300 text-xs font-medium">🕒 {{ $school['timing'] }}</span>
            <a href="https://wa.me/{{ $school['whatsapp'] ?? '917379222286' }}?text=Hello%20Happy%20Model%20Public%20School%2C%20I%20would%20like%20to%20know%20more%20about%20admissions." target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-emerald-400 hover:text-emerald-300 font-semibold text-xs transition-colors">
                <span>💬 WhatsApp</span>
            </a>
            <a href="{{ url('/schoolAdmin') }}" class="inline-flex items-center gap-1 bg-amber-400 hover:bg-amber-300 text-slate-950 font-bold px-2.5 py-0.5 rounded text-xs transition-all shadow-sm">
                <span>Admin</span>
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
    </div>
</div>
