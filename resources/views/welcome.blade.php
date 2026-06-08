<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>

    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><mask id='circle'><circle cx='50' cy='50' r='50' fill='white'/></mask><g mask='url(%23circle)'><image href='{{ asset('images/favicon-renard.jpg') }}' x='-25' y='-5' width='150' height='150'/></g></svg>">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Balises Principales -->
    <title>Renard Cynthia | Nettoyage Intérieur & Extérieur de Maison</title>
    <meta name="description" content="Entreprise spécialisée dans le nettoyage intérieur et extérieur de maison pour particuliers et professionnels. Produits écologiques et résultat garanti 5 ans.">
    <meta name="keywords" content="nettoyage maison, nettoyage intérieur, nettoyage extérieur, démoussage toiture, traitement façade, entretien terrasse, nettoyage vitres, Renard Cynthia">
    <meta name="author" content="Renard Cynthia">
    <meta name="robots" content="index, follow">
    <link class="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook (Partage Réseaux Sociaux) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Renard Cynthia | Nettoyage Intérieur & Extérieur de Maison">
    <meta property="og:description" content="Entreprise spécialisée dans le nettoyage intérieur et extérieur de maison. Produits écologiques et résultat garanti 5 ans. Demandez votre devis gratuit !">
    <meta property="og:image" content="{{ asset('images/Renard1.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Renard Cynthia | Nettoyage Intérieur & Extérieur de Maison">
    <meta property="twitter:description" content="Entreprise spécialisée dans le nettoyage intérieur et extérieur de maison. Produits écologiques et résultat garanti 5 ans. Demandez votre devis gratuit !">
    <meta property="twitter:image" content="{{ asset('images/Renard1.png') }}">

    <!-- 1. FontAwesome (Icônes) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- 2. Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- 3. Votre style personnalisé (Placé APRÈS Tailwind pour avoir la priorité) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-50 text-slate-800 font-sans antialiased">

<div class="bg-slate-900 text-white py-2 px-4 text-xs md:text-sm">
    <div class="max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:0699233805" title="Appeler le mobile de Cynthia Renard" class="hover:text-orange-500 transition-colors">
                <i class="fa-solid fa-phone text-orange-500 mr-1"></i> 06 99 23 38 05
            </a>
            <a href="tel:0359767860" title="Appeler le téléphone fixe" class="hover:text-orange-500 transition-colors">
                <i class="fa-solid fa-phone text-orange-500 mr-1"></i> 03 59 76 78 60
            </a>
        </div>
        <div class="flex items-center gap-4 text-gray-300">
            <span><i class="fa-solid fa-shield-halved text-orange-500 mr-1"></i> Garantie 5 Ans</span>
            <span class="hidden md:inline">|</span>
            <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> Devis & Échantillons Gratuits</span>
        </div>
    </div>
</div>

<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#" title="Retour en haut de page" class="flex items-center gap-3">
            <div>
                <span class="block text-xl font-extrabold tracking-tight text-slate-900">Renard Cynthia</span>
                <span class="block text-[10px] uppercase tracking-widest text-orange-500 font-bold -mt-1">Nettoyage Maison</span>
            </div>
        </a>

        <nav class="hidden md:flex items-center gap-6 font-semibold text-sm">
            <a href="#prestations" title="Voir nos prestations de nettoyage" class="hover:text-orange-500 transition-colors">Nos Prestations</a>
            <a href="#realisations" title="Découvrir nos photos avant après" class="hover:text-orange-500 transition-colors">Nos Réalisations</a>
            <a href="#engagements" title="Découvrir nos engagements qualité" class="hover:text-orange-500 transition-colors">Nos Engagements</a>
            <a href="#contact" title="Prendre contact ou demander un devis" class="hover:text-orange-500 transition-colors">Contact & Devis</a>
        </nav>
    </div>
</header>

<section class="bg-gradient-to-b from-white to-orange-50/40 py-12 md:py-20 border-b border-gray-100 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">

        <div class="space-y-6 z-10">
            <div class="inline-block bg-orange-100 text-orange-600 font-bold px-3 py-1 rounded-full text-xs uppercase tracking-wide">
                Intervention à domicile
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 leading-tight">
                Spécialisé dans le nettoyage <br>
                <span class="text-orange-500">Intérieur & Extérieur</span>
            </h1>
            <p class="text-gray-600 text-base sm:text-lg">
                Particulier & Professionnel. Nous redonnons de l'éclat à votre maison avec des produits efficaces, écologiques et un résultat impeccable garanti 5 ans.
            </p>

            <div class="flex flex-col sm:flex-row gap-3 pt-2">
                <a href="#contact" title="Aller vers le formulaire de devis gratuit" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-bold text-center transition-all hover:shadow-lg hover:shadow-orange-500/20">
                    Demander mon Devis Gratuit
                </a>
                <a href="tel:0699233805" title="Contacter Cynthia Renard par téléphone" class="bg-slate-900 hover:bg-slate-800 text-white px-6 py-3 rounded-lg font-bold text-center transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-phone"></i> 06 99 23 38 05
                </a>
            </div>
        </div>

        <div class="relative flex justify-center items-center">
            <div class="absolute w-72 h-72 bg-orange-200/60 rounded-full blur-3xl -z-10 animate-pulse"></div>
            <div class="absolute w-48 h-48 bg-slate-200/50 rounded-full blur-2xl translate-x-12 translate-y-12 -z-10"></div>

            <div class="relative p-3 bg-white rounded-3xl shadow-2xl border border-slate-100/80 max-w-md w-full overflow-hidden group">
                <img src="{{ asset('images/Renard1.png') }}"
                     alt="Prestation de nettoyage professionnel de maison par l'entreprise Renard Cynthia"
                     class="w-full h-auto rounded-2xl object-cover transition-transform duration-500 group-hover:scale-102">
            </div>

            <div class="absolute -top-4 -right-3 bg-gradient-to-br from-orange-500 to-red-600 text-white w-20 h-20 rounded-full flex flex-col items-center justify-center text-center shadow-xl shadow-orange-500/30 font-bold text-xs p-1 transform rotate-12 transition-transform hover:scale-110 z-20">
                <span>Garantie</span>
                <span class="text-lg font-extrabold">5 Ans</span>
            </div>
        </div>

    </div>
</section>

<section id="prestations" class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-black text-slate-900">Nos Services de Nettoyage</h2>
            <p class="text-gray-600 mt-2">Découvrez le détail de nos prestations d'entretien à domicile.</p>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-12 h-12 bg-orange-100 text-orange-500 rounded-xl flex items-center justify-center text-xl"><i class="fa-solid fa-house-user"></i></span>
                    <h3 class="text-xl font-extrabold text-slate-900">Nettoyage Intérieur</h3>
                </div>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Pièce à vivre</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Cuisine</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Salle de bain</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Vitres et surfaces</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Dépoussiérage complet</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Nettoyage en profondeur</li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-12 h-12 bg-orange-100 text-orange-500 rounded-xl flex items-center justify-center text-xl"><i class="fa-solid fa-fill-drip"></i></span>
                    <h3 class="text-xl font-extrabold text-slate-900">Nettoyage Extérieur</h3>
                </div>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Traitement toiture</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Façade</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Terrasse</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Allées et cours</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Murs et clôture</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-orange-500"></i> Hydrofuge & Anti-mousse</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section id="realisations" class="py-16 bg-white border-t border-gray-100">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-black text-slate-900">Nos Réalisations Avant / Après</h2>
            <p class="text-gray-600 mt-2">Découvrez les résultats bluffants de nos interventions de nettoyage et traitements protecteurs.</p>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="rounded-xl overflow-hidden bg-white aspect-[4/3] w-full flex items-center justify-center">
                    <img src="{{ asset('images/realisations/toiture-avant-apres.jpg') }}" alt="Traitement hydrofuge de toiture avant après par Renard Cynthia" class="max-w-full max-h-full object-contain">
                </div>
            </div>

            <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="rounded-xl overflow-hidden bg-white aspect-[4/3] w-full flex items-center justify-center">
                    <img src="{{ asset('images/realisations/terrasse-hydrofuge-avant-apres.jpg') }}" alt="Traitement hydrofuge de terrasse en dalles avant après" class="max-w-full max-h-full object-contain">
                </div>
            </div>

            <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="rounded-xl overflow-hidden bg-white aspect-[4/3] w-full flex items-center justify-center">
                    <img src="{{ asset('images/realisations/allees-murs-avant-apres.jpg') }}" alt="Nettoyage d'une allée pavée et murs extérieurs" class="max-w-full max-h-full object-contain">
                </div>
            </div>

            <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="rounded-xl overflow-hidden bg-white aspect-[4/3] w-full flex items-center justify-center">
                    <img src="{{ asset('images/realisations/facade-hydrofuge-avant-apres.jpg') }}" alt="Démonstration de l'effet perlant d'un hydrofuge de façade" class="w-full h-full object-contain">
                </div>
            </div>

            <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="rounded-xl overflow-hidden bg-white aspect-[4/3] w-full flex items-center justify-center">
                    <img src="{{ asset('images/realisations/facade-nettoyage-avant-apres.jpg') }}" alt="Nettoyage et démoussage complet d'un mur de façade" class="w-full h-full object-contain">
                </div>
            </div>

            <div class="bg-gray-50 rounded-2xl p-4 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="rounded-xl overflow-hidden bg-white aspect-[4/3] w-full flex items-center justify-center">
                    <img src="{{ asset('images/realisations/terrasse-bois-avant-apres.jpg') }}" alt="Nettoyage et dégrisement d'une terrasse en bois avant après" class="max-w-full max-h-full object-contain">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="engagements" class="py-16 bg-white border-t border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-black text-slate-900">Pourquoi nous faire confiance ?</h2>
            <p class="text-gray-600 mt-2">Nous garantissons un service de haute qualité, conforme à vos exigences.</p>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center">
            <div class="p-4 flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-spray-can-sparkles"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">Traitement par pulvérisation</span>
            </div>
            <div class="p-4 flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-credit-card"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">Paiement en plusieurs fois</span>
            </div>
            <div class="p-4 flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-leaf"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">Produit biodégradable à 95%</span>
            </div>
            <div class="p-4 flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-user-shield"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">Produits réservés professionnel, artisan</span>
            </div>
            <div class="p-4 flex flex-col items-center col-span-2 md:col-span-1">
                <div class="w-12 h-12 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><span class="text-base font-extrabold text-orange-600">FR</span></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">100% français</span>
            </div>
        </div>

        <div class="mt-12 bg-orange-500 text-white rounded-2xl p-6 md:p-8 text-center max-w-3xl mx-auto">
            <h4 class="text-xl md:text-2xl font-black uppercase tracking-wider">Devis et échantillons gratuits</h4>
            <p class="text-sm md:text-base text-orange-100 mt-2">Nous nous déplaçons pour vous montrer des échantillons de produits et estimer gratuitement le nettoyage de votre maison.</p>
        </div>

    </div>
</section>

<section id="contact" class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4">

        <div class="space-y-6 text-center">
            <div>
                <h2 class="text-3xl font-black text-slate-900">Contactez-nous</h2>
                <p class="text-gray-600 mt-2">Nous répondons à toutes vos questions et demandes de rendez-vous dans les plus brefs délais.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                <a href="tel:0699233805" title="Contacter l'entreprise Renard par mobile" class="contact-item flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <span class="w-10 h-10 bg-orange-100 text-orange-500 rounded-lg flex items-center justify-center text-lg shrink-0"><i class="fa-solid fa-mobile-screen"></i></span>
                    <div class="text-left">
                        <span class="block text-xs text-gray-400 font-bold uppercase tracking-wide">Mobile direct</span>
                        <span class="text-base xl:text-lg font-bold text-slate-950 whitespace-nowrap">06 99 23 38 05</span>
                    </div>
                </a>

                <a href="tel:0359767860" title="Contacter l'entreprise Renard par fixe" class="contact-item flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <span class="w-10 h-10 bg-orange-100 text-orange-500 rounded-lg flex items-center justify-center text-lg shrink-0"><i class="fa-solid fa-phone"></i></span>
                    <div class="text-left">
                        <span class="block text-xs text-gray-400 font-bold uppercase tracking-wide">Téléphone fixe</span>
                        <span class="text-base xl:text-lg font-bold text-slate-950 whitespace-nowrap">03 59 76 78 60</span>
                    </div>
                </a>

                <a href="mailto:cynthiarenard.2104@gmail.com" title="Envoyer un e-mail à Cynthia Renard" class="contact-item flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow col-span-1 sm:col-span-2 lg:col-span-1">
                    <span class="w-10 h-10 bg-orange-100 text-orange-500 rounded-lg flex items-center justify-center text-lg shrink-0"><i class="fa-solid fa-envelope"></i></span>
                    <div class="text-left min-w-0 flex-1">
                        <span class="block text-xs text-gray-400 font-bold uppercase tracking-wide">E-mail</span>
                        <span class="text-xs sm:text-sm xl:text-base font-bold text-slate-950 block whitespace-nowrap">cynthiarenard.2104@gmail.com</span>
                    </div>
                </a>

            </div>
        </div>

    </div>
</section>

<footer class="bg-slate-900 text-gray-400 pt-10 pb-6 text-xs border-t border-slate-800">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-6">

        <div class="space-y-2 text-center md:text-left">
            <span class="block text-white font-extrabold text-base">Renard Cynthia</span>
            <p>N° SIRET :  </p>
            <p>Garantie contractuelle de 5 ans sur les démoussages de toiture.</p>
        </div>

        <div class="flex flex-col items-center md:items-end gap-2">
            <p>© {{ date('Y') }} Renard Cynthia. Tous droits réservés.</p>
            <div class="flex gap-4">
                <a href="{{ route('legal.mentions') }}" title="Consulter les mentions légales" class="hover:text-white transition-colors">Mentions légales</a>
                <span>•</span>
                <a href="{{ route('legal.confidentialite') }}" title="Consulter la politique de confidentialité" class="hover:text-white transition-colors">Politique de confidentialité</a>
            </div>
            <a href="https://guideon.dev" target="_blank" rel="noopener noreferrer" class="text-[11px] hover:text-orange-500 transition-colors mt-1">
                Développé par GuideOn
            </a>
        </div>

    </div>
</footer>

</body>
</html>
