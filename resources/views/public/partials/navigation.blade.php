@php
    $leftNavGroups = array_slice($navGroups, 0, 2, true);
    $rightNavGroups = array_slice($navGroups, 2, null, true);
@endphp

<div class="sticky top-0 z-50 bg-[#ffd200] shadow-md">
    <div class="relative mx-auto flex max-w-6xl items-center justify-center px-4 lg:px-0">
        <a href="#home" class="absolute left-1/2 top-1/2 z-10 flex h-28 w-28 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white p-2 shadow-xl">
            <img src="{{ $school['logo'] }}" alt="{{ $school['short'] }} logo" class="h-24 w-24 object-contain">
        </a>

        <nav class="hidden min-h-16 w-full items-stretch justify-between lg:flex">
            <div class="flex items-stretch pr-20">
                <a href="#home" class="px-4 py-5 text-sm font-extrabold uppercase text-[#01315b] hover:bg-[#01315b] hover:text-white">Home</a>
                @foreach ($leftNavGroups as $label => $items)
                    <div class="group relative">
                        <a href="#{{ str($label)->slug() }}" class="block px-4 py-5 text-sm font-extrabold uppercase text-[#01315b] hover:bg-[#01315b] hover:text-white">{{ $label }}</a>
                        <div class="invisible absolute left-0 top-full w-60 border-t-4 border-[#01315b] bg-white py-2 text-left opacity-0 shadow-xl transition group-hover:visible group-hover:opacity-100">
                            @foreach ($items as $item)
                                <a href="#{{ str($item)->slug() }}" class="block px-4 py-2 text-sm font-semibold text-[#333333] hover:bg-[#ffd200] hover:text-[#01315b]">{{ $item }}</a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="flex items-stretch pl-20">
                @foreach ($rightNavGroups as $label => $items)
                    <div class="group relative">
                        <a href="#{{ str($label)->slug() }}" class="block px-4 py-5 text-sm font-extrabold uppercase text-[#01315b] hover:bg-[#01315b] hover:text-white">{{ $label }}</a>
                        <div class="invisible absolute left-0 top-full w-60 border-t-4 border-[#01315b] bg-white py-2 text-left opacity-0 shadow-xl transition group-hover:visible group-hover:opacity-100">
                            @foreach ($items as $item)
                                <a href="#{{ str($item)->slug() }}" class="block px-4 py-2 text-sm font-semibold text-[#333333] hover:bg-[#ffd200] hover:text-[#01315b]">{{ $item }}</a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                <a href="#contact" class="px-4 py-5 text-sm font-extrabold uppercase text-[#01315b] hover:bg-[#01315b] hover:text-white">Contact</a>
            </div>
        </nav>

        <details class="relative w-full lg:hidden">
            <summary class="cursor-pointer list-none px-4 py-4 text-center text-sm font-extrabold uppercase text-[#01315b]">Menu</summary>
            <div class="absolute right-0 mt-2 w-72 border border-[#e2d5b8] bg-white p-3 shadow-xl">
                <a href="#home" class="block px-3 py-2 text-sm font-semibold">Home</a>
                @foreach ($navGroups as $label => $items)
                    <p class="mt-2 px-3 text-xs font-bold uppercase text-[#b72d2d]">{{ $label }}</p>
                    @foreach ($items as $item)
                        <a href="#{{ str($item)->slug() }}" class="block px-3 py-2 text-sm">{{ $item }}</a>
                    @endforeach
                @endforeach
                <a href="#contact" class="block px-3 py-2 text-sm font-semibold">Contact</a>
            </div>
        </details>
    </div>
</div>
