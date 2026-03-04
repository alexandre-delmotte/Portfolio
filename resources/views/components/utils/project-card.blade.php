<div class="bg-site-card rounded-2xl border border-white/5 overflow-hidden shadow-xl transition-all duration-300 group hover:border-site-blue/30 hover:-translate-y-2 flex flex-col">

    <div class="relative overflow-hidden aspect-video border-b border-white/5">
        <img
            src="{{ $source }}"
            alt="{{ $title }}"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 {{ $blur ?? '' }}"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-site-card/80 to-transparent"></div>
    </div>

    <div class="p-6 flex flex-col flex-grow">
        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-site-blue-light transition-colors">
            {{ $title }}
        </h3>

        <p class="text-gray-400 text-sm mb-6 flex-grow leading-relaxed">
            @if($description)
                {{ $description }}
            @else
                Description en cours de rédaction pour ce projet passionnant.
            @endif
        </p>

        <a
            href="{{ $link }}"
            @if($link != '#') target="_blank" @endif
            class="inline-flex items-center justify-center w-full px-5 py-2.5 bg-site-bg border border-gray-700 hover:border-site-blue-light text-gray-300 hover:text-white text-sm font-semibold rounded-lg transition-all duration-300"
        >
            @if($link == '#')
                Bientôt disponible
            @else
                Voir le projet ▹
            @endif
        </a>
    </div>
</div>
