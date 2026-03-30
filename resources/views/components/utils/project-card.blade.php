<div class="bg-site-card rounded-2xl border border-white/5 overflow-hidden shadow-xl transition-all duration-300 group hover:border-site-blue/30 hover:-translate-y-2 flex flex-col h-full">

    <div class="relative overflow-hidden aspect-video border-b border-white/5">
        <img
            src="{{ $source }}"
            alt="{{ $title }}"
            class="w-full h-full object-cover {{ $objectPosition }} transition-transform duration-500 group-hover:scale-110 {{ $blur ?? '' }}"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-site-card/90 to-transparent"></div>
    </div>

    <div class="p-6 flex flex-col flex-grow">
        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-site-blue-light transition-colors">
            {{ $title }}
        </h3>

        <p class="text-gray-400 text-sm mb-6 flex-grow leading-relaxed">
            @if($description)
                {{ $description }}
            @endif
        </p>

        <div class="flex flex-row gap-3 mt-auto pt-4 border-t border-white/5">

            @if(isset($link) && $link != '#')
                <a href="{{ $link }}" target="_blank" rel="noopener noreferrer" class="flex-1 inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-site-bg border border-gray-700 hover:border-site-blue-light text-gray-300 hover:text-white text-sm font-semibold rounded-lg transition-all duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    {{__('Voir le projet')}}
                </a>
            @else
                <div class="flex-1 inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-site-bg border border-gray-700 hover:border-site-blue-light text-gray-300 hover:text-white text-sm font-semibold rounded-lg transition-all duration-300">
                    {{ __('Bientôt disponible') }}
                </div>
            @endif

            @if(isset($github) && $github != '#')
                <a href="{{ $github }}" target="_blank" rel="noopener noreferrer" title="Voir le code source" class="inline-flex items-center justify-center px-4 py-2.5 bg-[#1e293b] hover:bg-site-blue border border-gray-700 hover:border-site-blue text-gray-300 hover:text-white rounded-lg transition-all duration-300">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                    </svg>
                </a>
            @endif

        </div>
    </div>
</div>
