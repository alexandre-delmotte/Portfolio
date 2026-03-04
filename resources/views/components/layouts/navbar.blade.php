<nav class="sticky top-0 z-50 bg-site-bg/90 backdrop-blur-md border-b border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <div class="flex-shrink-0">
                <a href="#" class="text-2xl font-extrabold text-white tracking-wider">
                    A<span class="text-site-blue-light">.</span>D
                </a>
            </div>

            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="#home" class="text-gray-300 hover:text-white transition-colors px-3 py-2 rounded-md text-sm font-medium">Accueil</a>
                    <a href="#about" class="text-gray-300 hover:text-white transition-colors px-3 py-2 rounded-md text-sm font-medium">A propos</a>
                    <a href="#competences" class="text-gray-300 hover:text-white transition-colors px-3 py-2 rounded-md text-sm font-medium">Compétences</a>
                    <a href="#projects" class="text-gray-300 hover:text-white transition-colors px-3 py-2 rounded-md text-sm font-medium">Projets</a>
                    <a href="#contact" class="bg-site-blue hover:bg-site-blue-light text-white px-5 py-2 rounded-md text-sm font-medium transition-colors shadow-lg shadow-site-blue/20">Contact</a>
                </div>
            </div>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-400 hover:text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-site-section border-b border-white/5 absolute w-full">
        <div class="px-4 pt-2 pb-4 space-y-2">
            <a href="#home" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Accueil</a>
            <a href="#about" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">A propos</a>
            <a href="#competences" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Compétences</a>
            <a href="#projects" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projets</a>
            <a href="#contact" class="text-site-blue-light font-bold block px-3 py-2 rounded-md text-base">Contact</a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
