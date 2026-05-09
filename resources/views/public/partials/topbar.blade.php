<div class="bg-[#01315b] text-xs font-semibold text-white shadow-sm sm:text-sm">
    <div class="mx-auto flex max-w-6xl flex-col gap-1 px-4 py-3 sm:flex-row sm:items-center sm:justify-between lg:px-0">
        <div class="flex flex-wrap items-center gap-x-5 gap-y-1">
            <a href="tel:{{ $school['phone'] }}" class="hover:text-[#ffd46b]">Contact: {{ $school['phone'] }}</a>
            <a href="mailto:{{ $school['email'] }}" class="hover:text-[#ffd46b]">{{ $school['email'] }}</a>
            <span>{{ $school['location'] }}</span>
        </div>
        <div class="flex flex-wrap items-center gap-4">
            <a href="{{ $school['facebook'] }}" class="hover:text-[#ffd46b]">Facebook</a>
            <a href="{{ $school['instagram'] }}" class="hover:text-[#ffd46b]">Instagram</a>
            <!-- <a href="{{ url('/schoolAdmin') }}" class="rounded bg-white px-3 py-1 font-bold text-[#01315b] hover:bg-[#ffd200]">Admin Login</a> -->
        </div>
    </div>
</div>
