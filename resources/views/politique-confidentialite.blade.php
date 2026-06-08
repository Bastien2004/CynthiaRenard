<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de Confidentialité | Renard Cynthia</title>
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
            <h1 class="text-3xl font-black text-slate-900">Politique de Confidentialité</h1>
            <div class="w-12 h-1 bg-orange-500 mt-3 rounded-full"></div>
        </div>

        <section class="space-y-3">
            <h2 class="text-xl font-bold text-slate-900"><i class="fa-solid fa-eye text-orange-500 mr-2"></i>Introduction</h2>
            <p class="text-gray-600 leading-relaxed">
                La protection de vos données personnelles est essentielle. Cette politique vous explique quelles données nous collectons lorsque vous utilisez notre site ou interagissez avec nous par téléphone et par email.
            </p>
        </section>

        <section class="space-y-3 border-t border-gray-100 pt-6">
            <h2 class="text-xl font-bold text-slate-900"><i class="fa-solid fa-database text-orange-500 mr-2"></i>Données collectées</h2>
            <p class="text-gray-600 leading-relaxed">
                Nous collectons uniquement les informations que vous nous transmettez volontairement pour établir vos devis :
            </p>
            <ul class="list-disc pl-5 text-gray-600 space-y-1">
                <li>Nom et Prénom</li>
                <li>Numéro de téléphone</li>
                <li>Adresse e-mail</li>
                <li>Adresse postale (uniquement pour l'établissement ou l'estimation des devis à domicile)</li>
            </ul>
        </section>

        <section class="space-y-3 border-t border-gray-100 pt-6">
            <h2 class="text-xl font-bold text-slate-900"><i class="fa-solid fa-chart-pie text-orange-500 mr-2"></i>Utilisation des données</h2>
            <p class="text-gray-600 leading-relaxed">
                Vos informations sont utilisées exclusivement pour :
            </p>
            <ul class="list-disc pl-5 text-gray-600 space-y-1">
                <li>Vous recontacter suite à votre demande de renseignements.</li>
                <li>Préparer, chiffrer et envoyer vos devis gratuits de nettoyage.</li>
            </ul>
            <p class="text-gray-600 font-medium">Vos données ne sont jamais vendues, partagées ou cédées à des tiers.</p>
        </section>

        <section class="space-y-3 border-t border-gray-100 pt-6">
            <h2 class="text-xl font-bold text-slate-900"><i class="fa-solid fa-lock text-orange-500 mr-2"></i>Conservation et Droits</h2>
            <p class="text-gray-600 leading-relaxed">
                Conformément au RGPD, vos données sont conservées pendant la durée nécessaire au traitement commercial (maximum 3 ans sans interaction). Vous disposez d'un droit d'accès, de rectification et de suppression de vos données sur simple demande par e-mail à : <strong>cynthiarenard.2104@gmail.com</strong>.
            </p>
        </section>
    </div>
</main>

<footer class="bg-slate-900 text-gray-400 py-6 text-xs text-center border-t border-slate-800">
    <p>© {{ date('Y') }} Renard Cynthia. Tous droits réservés.</p>
</footer>

</body>
</html>
