<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV_Alexandre_Delmotte</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        site: {
                            bg: '#111827',
                            section: '#1a2332',
                            card: '#222f43',
                            blue: '#2563eb',
                            'blue-light': '#3b82f6'
                        }
                    }
                }
            }
        }
    </script>

    <style>
        @page {
            size: A4;
            margin: 0;
        }
        body {
            background-color: #3f3f46;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .a4-page {
            width: 210mm;
            height: 297mm;
            background-color: #111827;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }
        @media print {
            body { background-color: #111827; }
            .a4-page { box-shadow: none; width: 100%; height: 100%; }
        }
    </style>
</head>
<body>

<div class="a4-page text-gray-300">

    <header class="bg-site-section px-10 py-10 border-b border-white/5 flex justify-between items-center">
        <div class="flex items-center gap-6">
            <img src="{{ asset('img/profile.jpg') }}" alt="Alexandre Delmotte" class="w-24 h-24 rounded-full border-4 border-site-bg object-cover shadow-xl">

            <div>
                <h1 class="text-4xl font-extrabold text-white tracking-tight mb-2">
                    Alexandre <span class="text-site-blue-light">Delmotte</span>
                </h1>
                <h2 class="text-xl font-medium text-gray-400">
                    Développeur Web Backend <span class="text-site-blue">|</span> PHP & Laravel
                </h2>
            </div>
        </div>

        <div class="text-right text-sm space-y-1">
            <p class="flex items-center justify-end gap-2">
                +32 471 21 16 03
                <svg class="w-4 h-4 text-site-blue-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            </p>
            <p class="flex items-center justify-end gap-2">
                alexandre.delmotte.dev@gmail.com
                <svg class="w-4 h-4 text-site-blue-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </p>
            <p class="flex items-center justify-end gap-2">
                1360 Perwez, Belgique
                <svg class="w-4 h-4 text-site-blue-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            </p>
            <p class="text-xs text-gray-500 mt-2">Né le 09/12/1999 - Permis B & Véhiculé</p>
        </div>
    </header>

    <div class="flex flex-grow">

        <div class="w-1/3 bg-site-card/50 p-8 border-r border-white/5 space-y-8">

            <div>
                <h3 class="text-lg font-bold text-white mb-4 border-b border-site-blue/30 pb-2 uppercase tracking-wider">Liens Utiles</h3>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-site-blue-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                        <a href="https://alexandredelmotte.site" class="text-gray-300 font-medium truncate">alexandredelmotte.site</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-site-blue-light" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path></svg>
                        <a href="https://github.com/alexandre-delmotte" class="text-gray-300 font-medium truncate">/alexandre-delmotte</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-site-blue-light" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        <a href="www.linkedin.com/in/alexandre-delmotte-dev" class="text-gray-300 font-medium truncate">/alexandre-delmotte-dev</a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-4 border-b border-site-blue/30 pb-2 uppercase tracking-wider">Compétences</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-site-blue-light"></div> PHP & Architecture MVC</li>
                    <li class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-site-blue-light"></div> Laravel & Sail</li>
                    <li class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-site-blue-light"></div> Symfony</li>
                    <li class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-site-blue-light"></div> Base de données (SQL)</li>
                    <li class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-site-blue-light"></div> HTML5, CSS3, Tailwind</li>
                    <li class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-site-blue-light"></div> JavaScript</li>
                    <li class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-site-blue-light"></div> Git & GitHub</li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-4 border-b border-site-blue/30 pb-2 uppercase tracking-wider">Langues</h3>
                <div class="space-y-3 text-sm">
                    <div>
                        <p class="font-semibold text-gray-200">Français</p>
                        <p class="text-xs text-gray-500">Langue maternelle</p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-200">Anglais</p>
                        <p class="text-xs text-gray-500">Très bonne maîtrise technique et courante</p>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-4 border-b border-site-blue/30 pb-2 uppercase tracking-wider">Soft Skills</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-site-bg border border-white/10 rounded text-xs">Résilience</span>
                    <span class="px-2 py-1 bg-site-bg border border-white/10 rounded text-xs">Esprit d'équipe</span>
                    <span class="px-2 py-1 bg-site-bg border border-white/10 rounded text-xs">Discipline</span>
                    <span class="px-2 py-1 bg-site-bg border border-white/10 rounded text-xs">Autonomie</span>
                </div>
            </div>
        </div>

        <div class="w-2/3 p-8 space-y-8">

            <div>
                <h3 class="text-lg font-bold text-site-blue-light mb-3 uppercase tracking-wider">Profil</h3>
                <p class="text-sm leading-relaxed text-justify text-gray-300">
                    Développeur web backend déterminé, j'ai forgé ma résilience et mon éthique de travail sur les terrains de football américain en Europe (Allemagne, France) ainsi qu'au travers d'emplois exigeants. Aujourd'hui diplômé et passionné par l'écosystème Laravel/PHP, je recherche une équipe où investir mon esprit d'analyse, mon esprit d'équipe et ma soif d'apprendre au service de projets ambitieux.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-4 border-b border-white/10 pb-2 uppercase tracking-wider flex items-center gap-2">
                    Expériences Professionnelles
                </h3>

                <div class="space-y-6">
                    <div class="relative pl-4 border-l-2 border-site-blue">
                        <div class="absolute -left-[5px] top-1 w-2 h-2 rounded-full bg-site-blue-light"></div>
                        <h4 class="text-md font-bold text-gray-100">Développeur Web (Stage)</h4>
                        <p class="text-xs font-semibold text-site-blue-light mb-1">Softedge (Namur) | 2024</p>
                        <p class="text-sm text-gray-400">Création d'un site de commande et gestion de l'administration sur-mesure pour un traiteur namurois. Travail sur l'architecture de la base de données et l'optimisation des processus métiers.</p>
                    </div>

                    <div class="relative pl-4 border-l-2 border-white/10">
                        <div class="absolute -left-[5px] top-1 w-2 h-2 rounded-full bg-gray-500"></div>
                        <h4 class="text-md font-bold text-gray-100">Athlète Semi-Professionnel & Missions Intérim</h4>
                        <p class="text-xs font-semibold text-gray-500 mb-1">Allemagne & France (Amiens) / Daoust | 2024 - 2026</p>
                        <p class="text-sm text-gray-400">Joueur de football américain dans des ligues européennes de haut niveau. En parallèle, réalisation de missions variées (plongeur, manutention, ouvrier) exigeant une forte capacité d'adaptation et d'endurance.</p>
                    </div>

                    <div class="relative pl-4 border-l-2 border-white/10">
                        <div class="absolute -left-[5px] top-1 w-2 h-2 rounded-full bg-gray-500"></div>
                        <h4 class="text-md font-bold text-gray-100">Magasinier, Vendeur & Livreur</h4>
                        <p class="text-xs font-semibold text-gray-500 mb-1">Colruyt (Jodoigne) & Tom Kitchen (Bierges) | 2021 - 2024</p>
                        <p class="text-sm text-gray-400">Gestion des commandes, préparation des tournées, livraison de plats à domicile, aide aux clients et gestion des stocks.</p>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-4 border-b border-white/10 pb-2 uppercase tracking-wider flex items-center gap-2">
                    Formation
                </h3>

                <div class="relative pl-4 border-l-2 border-site-blue">
                    <div class="absolute -left-[5px] top-1 w-2 h-2 rounded-full bg-site-blue-light"></div>
                    <h4 class="text-md font-bold text-gray-100">Brevet d'Études Supérieures en Développement Web</h4>
                    <p class="text-xs font-semibold text-site-blue-light mb-1">EAFC Namur | 2021 - 2024</p>
                    <p class="text-sm text-gray-400">Projet de Fin d'Études : Développement complet d'une application d'optimisation de l'administration d'un traiteur indépendant (Laravel, PHP, BDD).</p>
                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>
