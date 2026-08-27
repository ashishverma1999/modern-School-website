<aside class="fixed bottom-6 right-6 z-30 hidden sm:flex flex-col gap-3" aria-label="Quick Action Shortcuts">
    <!-- WhatsApp Direct Chat Button -->
    <a 
        href="https://wa.me/{{ $school['whatsapp'] ?? '919793856502' }}?text=Hello%20Happy%20Model%20Public%20School%2C%20I%20would%20like%20to%20enquire%20about%20admissions." 
        target="_blank" 
        rel="noopener" 
        class="floating-action-pill bg-emerald-600 hover:bg-emerald-700 text-white shadow-emerald-900/30"
        title="Chat with Admission Desk on WhatsApp"
    >
        <span class="text-base">💬</span>
        <span class="font-bold text-xs">WhatsApp</span>
    </a>

    <!-- Direct Call Button -->
    <a 
        href="tel:{{ $school['phone'] }}" 
        class="floating-action-pill bg-[#0b2545] hover:bg-[#133b68] text-white shadow-slate-950/30"
        title="Call School Office"
    >
        <span class="text-base">📞</span>
        <span class="font-bold text-xs">Call Us</span>
    </a>

    <!-- Apply Online CTA Button -->
    <a 
        href="#admissions" 
        class="floating-action-pill bg-amber-500 hover:bg-amber-600 text-slate-950 shadow-amber-900/30"
        title="Admission Enquiry Form"
    >
        <span class="text-base">✍️</span>
        <span class="font-bold text-xs">Apply Now</span>
    </a>
</aside>
