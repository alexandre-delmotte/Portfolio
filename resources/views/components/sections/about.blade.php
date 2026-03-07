<section id="about" class="py-24 bg-site-bg">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <x-utils.section-title title="Mon Parcours" />

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <div class="lg:col-span-7 space-y-6">
                <h3 class="text-2xl font-bold text-site-blue-light mb-2">Un profil atypique forgé par la discipline</h3>

                <div class="space-y-4 text-gray-300 text-lg leading-relaxed text-justify">
                    <p>
                        Passionné par le développement web, mon stage chez <strong>Softedge</strong> a confirmé ma vocation : je veux faire du code mon métier. Mais avant de m'y consacrer pleinement, je m'étais fait une promesse : aller au bout de ma seconde passion, le football américain.
                    </p>
                    <p>
                        J'ai eu l'opportunité d'être signé en <strong>Allemagne</strong>, dans l'une des meilleures ligues d'Europe. Après une saison intense, j'ai rejoint une équipe à <strong>Amiens</strong> pour jouer avec des coéquipiers de longue date. Ce nouveau rythme me permet aujourd'hui d'allier le sport au plus haut niveau et mon ambition dans le développement.
                    </p>
                    <p class="font-semibold text-white pt-4">
                        Plus qu'un simple profil Junior sorti d'école.
                    </p>
                    <p>
                        Mon parcours en dehors des bancs de l'école est ma plus grande force. Le sport de haut niveau m'a inculqué <span class="text-site-blue-light">l'esprit d'équipe, la résilience et le dépassement de soi</span>. En parallèle, j'ai confronté mon éthique de travail à la réalité du terrain à travers des emplois physiques, répétitifs et parfois ingrats.
                    </p>
                    <p>
                        Ces expériences m'ont forgé un mental solide : je connais la valeur de l'effort et je ne baisse pas les bras à la première difficulté. Si j'ai su m'investir avec rigueur dans des métiers par pure nécessité, imaginez l'énergie et la détermination que je suis prêt à déployer chaque jour pour un métier qui me passionne.
                    </p>
                    <p>
                        Fiable et motivé, je n'attends qu'une entreprise qui saura me donner ma chance pour prouver ma valeur.
                    </p>
                    <div class="pt-6 flex flex-col sm:flex-row gap-4">
                        <a href="{{ asset('img/cv-alexandre-delmotte-dark.pdf') }}" download="CV_Alexandre_Delmotte_Design.pdf" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-site-blue hover:bg-site-blue-light text-white font-bold rounded-lg shadow-lg shadow-site-blue/30 transition-all duration-300 transform hover:-translate-y-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            CV Numérique (Dark)
                        </a>

                        <a href="{{ asset('img/cv-alexandre-delmotte-light.pdf') }}" download="CV_Alexandre_Delmotte_Print.pdf" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-transparent border border-gray-600 hover:border-gray-400 text-gray-300 hover:text-white font-bold rounded-lg transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                            CV Version Imprimable
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-site-blue to-site-blue-light rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition duration-500"></div>

                <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl">
                    <img
                        src="{{ asset('img/footB&W.jpg') }}"
                        alt="Alexandre Delmotte - Football Américain"
                        class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105"
                    >

                </div>
            </div>

        </div>
    </div>
</section>
