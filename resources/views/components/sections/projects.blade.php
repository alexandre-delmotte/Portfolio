<section id="projects" class="py-24 bg-site-bg">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <x-utils.section-title title="Mes Projets" />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            <x-utils.project-card
                title="Poo Vanilla"
                source="{{ asset('img/kitchen-management.png') }}"
                description="Création d'un mini-framework MVC en PHP pur pour comprendre les concepts de l'Orienté Objet sous Laravel."
                link="https://github.com/votre-user/poo-vanilla"
            />

            <x-utils.project-card
                title="Kitchen Management - MVP Laravel"
                source="{{ asset('img/kitchen-pro.png') }}"
                description="Application Laravel complète pour la gestion intelligente de listes de courses et la planification de repas."
                link="https://github.com/votre-user/kitchen-management"
            />

            <x-utils.project-card
                title="Tom's Kitchen"
                source="{{ asset('img/filament.png') }}"
                description="ERP/CRM pour un traiteur , réalisé dans le cadre de mon TFE."
                link="#"
            />

            <x-utils.project-card
                title="Roule ma poule"
                source="{{ asset('img/rmp.png') }}"
                blur="blur-sm"
                description="Coming soon..."
                link="#"
            />

        </div>
    </div>
</section>
