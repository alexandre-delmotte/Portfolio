<section id="contact" class="py-24 bg-site-section">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <x-utils.section-title title="{{ __("Contactez-moi") }}" />

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-4">{{ __('Prêt à rejoindre votre équipe') }}</h3>
                    <p class="text-gray-400 text-lg leading-relaxed text-justify">
                        {{ __("Je suis actuellement à la recherche d'une opportunité en tant que ")}} <strong> {{ __("Développeur Web Junior") }}</strong> {{ __("pour intégrer une entreprise dynamique. Mon profil vous intéresse ? Vous avez un poste à pourvoir ? Discutons-en !") }}
                    </p>
                </div>

                <ul class="space-y-6">
                    <x-utils.contact-item title="{{ __('Téléphone') }}" value="0471/21 16 03" link="tel:+32471211603">
                        <svg class="w-6 h-6 text-site-blue-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </x-utils.contact-item>

                    <x-utils.contact-item title="{{ __('Email') }}" value="alexandre.delmotte.dev@gmail.com" link="mailto:alexandre.delmotte.dev@gmail.com">
                        <svg class="w-6 h-6 text-site-blue-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </x-utils.contact-item>

                    <x-utils.contact-item title="{{ __('Localisation') }}" value="1360 Perwez, {{ __('Belgique') }}">
                        <svg class="w-6 h-6 text-site-blue-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </x-utils.contact-item>
                </ul>
            </div>
            <form action="{{ route('contact.send') }}" method="POST" class="bg-site-card p-8 rounded-2xl border border-white/5 shadow-xl space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-400 mb-2">{{ __('Votre nom / Entreprise') }}</label>
                        <input type="text" id="name" name="name" placeholder="Jean Dupont" class="w-full bg-site-bg border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-site-blue focus:ring-1 focus:ring-site-blue transition-colors">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-400 mb-2">{{ __('Votre email') }}</label>
                        <input type="email" id="email" name="email" placeholder="recrutement@entreprise.com" class="w-full bg-site-bg border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-site-blue focus:ring-1 focus:ring-site-blue transition-colors">
                    </div>
                </div>

                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-400 mb-2">{{ __('Sujet') }}</label>
                    <input type="text" id="subject" name="subject" placeholder="{{ __("Proposition d'entretien / Offre d'emploi...") }}" class="w-full bg-site-bg border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-site-blue focus:ring-1 focus:ring-site-blue transition-colors">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-400 mb-2">{{ __('Message') }}</label>
                    <textarea id="message" name="message" rows="5" placeholder="{{ __('Bonjour Alexandre, votre profil a retenu notre attention pour un poste de développeur...') }}" class="w-full bg-site-bg border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-site-blue focus:ring-1 focus:ring-site-blue transition-colors resize-none"></textarea>
                </div>

                <button type="submit" class="w-full py-4 bg-site-blue hover:bg-site-blue-light text-white font-bold rounded-lg shadow-lg shadow-site-blue/30 transition-all duration-300 transform hover:-translate-y-1">
                    {{ __('Envoyer le message') }}
                </button>
            </form>

        </div>
    </div>
</section>
