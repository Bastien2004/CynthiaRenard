<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales | Renard Cynthia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-50 text-slate-800 font-sans antialiased flex flex-col min-h-screen">

<header class="bg-white shadow-sm py-4">
    <div class="max-w-4xl mx-auto px-4 flex justify-between items-center">
        <a href="/" class="flex items-center gap-2 font-extrabold text-slate-900">
            <span class="text-orange-500">🦊</span> Renard Cynthia
        </a>
        <a href="/" class="text-sm font-semibold text-orange-500 hover:text-orange-600 transition-colors">
            <i class="fa-solid fa-arrow-left mr-1"></i> Retour à l'accueil
        </a>
    </div>
</header>

<main class="flex-grow max-w-4xl mx-auto px-4 py-12">
    <div class="bg-white rounded-2xl p-8 md:p-12 shadow-sm border border-gray-100 space-y-8">
        <div>
            <h1 class="text-3xl font-black text-slate-900">Mentions Légales</h1>
            <div class="w-12 h-1 bg-orange-500 mt-3 rounded-full"></div>
        </div>

        <section class="space-y-3">
            <h2 class="text-xl font-bold text-slate-900"><i class="fa-solid fa-user text-orange-500 mr-2"></i>Éditeur du site</h2>
            <p class="text-gray-600 leading-relaxed">
                Le présent site internet est édité et exploité par <strong>Cynthia Renard</strong>, agissant en qualité d'entrepreneur individuel / artisan.<br>
                <strong>Adresse légale :</strong> (Votre adresse postale à renseigner ici)<br>
                <strong>Téléphone :</strong> 06 99 23 38 05 / 03 59 76 78 60<br>
                <strong>E-mail :</strong> cynthiarenard.2104@gmail.com
            </p>
        </section>

        <section class="space-y-3 border-t border-gray-100 pt-6">
            <h2 class="text-xl font-bold text-slate-900"><i class="fa-solid fa-id-card text-orange-500 mr-2"></i>Immatriculation</h2>
            <p class="text-gray-600 leading-relaxed">
                <strong>Numéro SIRET :</strong> 123 456 789 00012 <br>
                <strong>Garantie contractuelle :</strong> Garantie de 5 ans sur les prestations de démoussage et traitements de toiture.
            </p>
        </section>

        <section class="space-y-3 border-t border-gray-100 pt-6">
            <h2 class="text-xl font-bold text-slate-900"><i class="fa-solid fa-server text-orange-500 mr-2"></i>Hébergement du site</h2>
            <p class="text-gray-600 leading-relaxed">
                Le site est hébergé par la société <strong>OVH SAS</strong> (OVHcloud).<br>
                <strong>Adresse de l'hébergeur :</strong> 2 rue Kellermann, 59100 Roubaix, France.<br>
                <strong>Site web :</strong> www.ovhcloud.com
            </p>
        </section>

        <section class="space-y-3 border-t border-gray-100 pt-6">
            <h2 class="text-xl font-bold text-slate-900"><i class="fa-solid fa-copyright text-orange-500 mr-2"></i>Propriété intellectuelle</h2>
            <p class="text-gray-600 leading-relaxed">
                Tout le contenu de ce site (textes, images, structure, logo, illustrations) est la propriété exclusive de Cynthia Renard, sauf mention contraire. Toute reproduction, modification ou publication, même partielle, est interdite sans autorisation écrite préalable.
            </p>
        </section>
    </div>
</main>

<footer class="bg-slate-900 text-gray-400 py-6 text-xs text-center border-t border-slate-800">
    <p>© {{ date('Y') }} Renard Cynthia. Tous droits réservés.</p>
</footer>

</body>
</html>
