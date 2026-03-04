<li class="flex items-center group">
    <div class="w-12 h-12 bg-site-bg rounded-lg flex items-center justify-center mr-4 group-hover:bg-site-blue/20 transition-colors border border-white/5">
        {{ $slot }}
    </div>

    <div>
        <p class="text-sm text-gray-500 font-medium">{{ $title }}</p>

        @if($link)
            <a href="{{ $link }}" @if(str_starts_with($link, 'http')) target="_blank" @endif class="text-lg text-gray-200 hover:text-site-blue-light transition-colors font-semibold">
                {{ $value }}
            </a>
        @else
            <p class="text-lg text-gray-200 font-semibold">{{ $value }}</p>
        @endif
    </div>
</li>
