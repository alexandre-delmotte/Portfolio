<section id="home" class="relative flex flex-col items-center justify-center min-h-[85vh] px-6 text-center">

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-site-blue/10 rounded-full blur-3xl -z-10"></div>

    <div class="mb-8 relative">
        <div class="absolute inset-0 bg-site-blue-light rounded-full blur-md opacity-50"></div>
        <img
            src="{{ asset('img/profile.jpg') }}"
            alt="Alexandre Delmotte"
            class="relative w-40 h-40 object-cover rounded-full border-4 border-site-bg shadow-xl"
        >
    </div>

    <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight mb-4">
        Alexandre <span class="text-transparent bg-clip-text bg-gradient-to-r from-site-blue-light to-site-blue">Delmotte</span>
    </h1>

    <h2 class="text-xl md:text-2xl text-gray-300 font-medium mb-6">
        {{__('Développeur Web Backend')}} <span class="text-site-blue-light font-bold">|</span> Laravel & PHP
    </h2>

    <p class="max-w-2xl text-gray-400 text-lg mb-10 leading-relaxed">
        {{ __("Déterminé et doté d'une grande capacité d'adaptation, je suis prêt à mettre ma rigueur et ma passion au service de votre entreprise.") }}
    </p>

    <div class="flex flex-col sm:flex-row gap-4">
        <a href="#projects" class="px-8 py-3 bg-site-blue hover:bg-site-blue-light text-white font-semibold rounded-lg shadow-lg shadow-site-blue/30 transition-all duration-300 transform hover:-translate-y-1">
            {{ __("Voir mes projets") }}
        </a>
        <a href="#contact" class="px-8 py-3 bg-transparent border border-gray-600 hover:border-site-blue-light text-gray-300 hover:text-white font-semibold rounded-lg transition-all duration-300">
            {{ __("Me contacter") }}
        </a>
    </div>
</section>
