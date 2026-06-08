<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renard Cynthia | Nettoyage Intérieur & Extérieur de Maison</title>

    <!-- 1. FontAwesome (Icônes) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- 2. Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- 3. Votre style personnalisé (Placé APRÈS Tailwind pour avoir la priorité) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-50 text-slate-800 font-sans antialiased">

<!-- BARRE DE CONTACT RAPIDE (Tout en haut) -->
<div class="bg-slate-900 text-white py-2 px-4 text-xs md:text-sm">
    <div class="max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:0699233805" class="hover:text-orange-500 transition-colors">
                <i class="fa-solid fa-phone text-orange-500 mr-1"></i> 06 99 23 38 05
            </a>
            <a href="tel:0359767860" class="hover:text-orange-500 transition-colors">
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

<!-- EN-TÊTE / NAVIGATION -->
<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo avec texte et emplacement icône/mascotte -->
        <a href="#" class="flex items-center gap-3">
            <!-- Emplacement pour le logo ou l'image de la mascotte Renard -->
            <div class="w-10 h-10 bg-orange-500 rounded-xl flex items-center justify-center text-white font-bold text-xl">
                <!-- Vous pourrez remplacer ce bloc par : <img src="chemin/votre-image-renard.png" alt="Logo Renard"> -->
                🦊
            </div>
            <div>
                <span class="block text-xl font-extrabold tracking-tight text-slate-900">Renard Cynthia</span>
                <span class="block text-[10px] uppercase tracking-widest text-orange-500 font-bold -mt-1">Nettoyage Maison</span>
            </div>
        </a>

        <!-- Menu simple -->
        <nav class="hidden md:flex items-center gap-6 font-semibold text-sm">
            <a href="#prestations" class="hover:text-orange-500 transition-colors">Nos Prestations</a>
            <a href="#engagements" class="hover:text-orange-500 transition-colors">Nos Engagements</a>
            <a href="#contact" class="hover:text-orange-500 transition-colors">Contact & Devis</a>
        </nav>
    </div>
</header>

<!-- SECTION PRINCIPALE (HERO) -->
<section class="bg-white py-12 md:py-20 border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">

        <!-- Texte accroche (gauche) -->
        <div class="space-y-6">
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
                <a href="#contact" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-bold text-center transition-colors">
                    Demander mon Devis Gratuit
                </a>
                <a href="tel:0699233805" class="bg-slate-900 hover:bg-slate-800 text-white px-6 py-3 rounded-lg font-bold text-center transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-phone"></i> 06 99 23 38 05
                </a>
            </div>
        </div>

        <div class="relative flex justify-center">
            <img src="{{ asset('images/Renard1.png') }}"
                 alt="Nettoyage professionnel de maison"
                 class="w-full max-w-md aspect-[4/3] rounded-2xl object-cover shadow-xl border-4 border-white">

            <div class="absolute -top-4 -right-4 bg-orange-500 text-white w-20 h-20 rounded-full flex flex-col items-center justify-center text-center shadow-lg font-bold text-xs p-1 transform rotate-12">
                <span>Garantie</span>
                <span class="text-lg font-extrabold">5 Ans</span>
            </div>
        </div>

    </div>
</section>

<!-- LES PRESTATIONS (Intérieur / Extérieur) -->
<section id="prestations" class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-black text-slate-900">Nos Services de Nettoyage</h2>
            <p class="text-gray-600 mt-2">Découvrez le détail de nos prestations d'entretien à domicile.</p>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- Bloc Nettoyage Intérieur -->
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

            <!-- Bloc Nettoyage Extérieur -->
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

<!-- NOS ENGAGEMENTS & ENGAGEMENTS QUALITÉ (Badges du flyer) -->
<section id="engagements" class="py-16 bg-white border-t border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-black text-slate-900">Pourquoi nous faire confiance ?</h2>
            <p class="text-gray-600 mt-2">Nous garantissons un service de qualité supérieure conforme à vos exigences.</p>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- Grille des 5 points forts / badges du flyer -->
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

        <!-- Encadré Devis Gratuit -->
        <div class="mt-12 bg-orange-500 text-white rounded-2xl p-6 md:p-8 text-center max-w-3xl mx-auto">
            <h4 class="text-xl md:text-2xl font-black uppercase tracking-wider">Devis et échantillons gratuits</h4>
            <p class="text-sm md:text-base text-orange-100 mt-2">Nous nous déplaçons pour vous montrer des échantillons de produits et estimer gratuitement le nettoyage de votre maison.</p>
        </div>

    </div>
</section>

<!-- SECTION CONTACT & INFOS -->
<section id="contact" class="py-16 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4">

        <div class="space-y-6 text-center">
            <div>
                <h2 class="text-3xl font-black text-slate-900">Contactez-nous</h2>
                <p class="text-gray-600 mt-2">Nous répondons à toutes vos questions et demandes de rendez-vous dans les plus brefs délais.</p>
            </div>

            <!-- Téléphone direct et fixe -->
            <div class="grid sm:grid-cols-2 gap-4">
                <a href="tel:0699233805" class="contact-item flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm">
                    <span class="w-10 h-10 bg-orange-100 text-orange-500 rounded-lg flex items-center justify-center text-lg"><i class="fa-solid fa-mobile-screen"></i></span>
                    <div class="text-left">
                        <span class="block text-xs text-gray-400 font-bold uppercase tracking-wide">Mobile direct</span>
                        <span class="text-lg font-bold text-slate-950">06 99 23 38 05</span>
                    </div>
                </a>

                <a href="tel:0359767860" class="contact-item flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm">
                    <span class="w-10 h-10 bg-orange-100 text-orange-500 rounded-lg flex items-center justify-center text-lg"><i class="fa-solid fa-phone"></i></span>
                    <div class="text-left">
                        <span class="block text-xs text-gray-400 font-bold uppercase tracking-wide">Téléphone fixe</span>
                        <span class="text-lg font-bold text-slate-950">03 59 76 78 60</span>
                    </div>
                </a>
            </div>

            <!-- E-mail -->
            <a href="mailto:cynthiarenard.2104@gmail.com" class="contact-item flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm max-w-lg mx-auto">
                <span class="w-10 h-10 bg-orange-100 text-orange-500 rounded-lg flex items-center justify-center text-lg"><i class="fa-solid fa-envelope"></i></span>
                <div class="text-left">
                    <span class="block text-xs text-gray-400 font-bold uppercase tracking-wide">E-mail</span>
                    <span class="text-base font-bold text-slate-950">cynthiarenard.2104@gmail.com</span>
                </div>
            </a>

            <!-- Google review -->
            <div class="google-card bg-orange-100 text-orange-800 p-4 rounded-xl border border-orange-200 flex items-center gap-3 max-w-lg mx-auto">
                <span class="text-2xl text-orange-600"><i class="fa-brands fa-google"></i></span>
                <div class="text-left">
                    <p class="font-bold text-sm">Retrouvez-nous sur Google !</p>
                    <p class="text-xs text-orange-700">Consultez ou laissez un avis sur notre entreprise de nettoyage.</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- PIED DE PAGE & MENTIONS LÉGALES -->
<footer class="bg-slate-900 text-gray-400 pt-10 pb-6 text-xs border-t border-slate-800">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-6">

        <div class="space-y-2 text-center md:text-left">
            <span class="block text-white font-extrabold text-base">Renard Cynthia</span>
            <p>N° SIRET : 123 456 789 00012 </p>
            <p>Garantie contractuelle de 5 ans sur les démoussages de toiture.</p>
        </div>

        <div class="flex flex-col items-center md:items-end gap-2">
            <p>© {{ date('Y') }} Renard Cynthia. Tous droits réservés.</p>
            <div class="flex gap-4">
                <a href="{{ route('legal.mentions') }}" class="hover:text-white transition-colors">Mentions légales</a>
                <span>•</span>
                <a href="{{ route('legal.confidentialite') }}" class="hover:text-white transition-colors">Politique de confidentialité</a>
            </div>
        </div>

    </div>
</footer>

</body>
</html>
