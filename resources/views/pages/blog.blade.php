@extends('layouts.marketing')

@section('title', 'Veille IA, data et cybersécurité | Oppdrag.tech')
@section('meta_description', 'Consultez la veille Oppdrag.tech sur l’IA, la data et la cybersécurité : ressources utiles, angles opérationnels et enjeux de conformité pour les entreprises.')
@section('canonical', route('blog'))

@section('content')
    @php
        $articles = [
            ['theme' => 'IA & risque', 'title' => 'IA outil à double tranchant', 'excerpt' => 'L’IA générative devient à la fois moteur d’innovation et vecteur de nouvelles cybermenaces, du phishing au ransomware.', 'url' => 'https://elpais.com/suscripciones/profesional/2025-06-27/la-ia-como-herramienta-de-doble-filo-motor-de-innovacion-y-amenaza-emergente.html'],
            ['theme' => 'Cybersécurité', 'title' => 'Pourquoi l’IA va sauver ou fragiliser notre vie numérique', 'excerpt' => 'L’IA transforme la détection des menaces mais renforce aussi le potentiel d’attaques sophistiquées et industrialisées.', 'url' => 'https://www.lepoint.fr/services/cybersecurite-pourquoi-l-ia-va-sauver-ou-detruire-votre-vie-numerique-en-2025--17-06-2025-2592179_4345.php'],
            ['theme' => 'Menaces 2025', 'title' => 'Top 5 des menaces cybersécurité en 2025', 'excerpt' => 'Ransomware, attaques supply chain, phishing assisté par l’IA : les tendances majeures à surveiller de près.', 'url' => 'https://www.crisis24.com/fr/articles/les-5-principales-menaces-de-cybersecurite-a-surveiller-en-2025'],
            ['theme' => 'Régulation', 'title' => 'INESIA : régulation de l’IA en France', 'excerpt' => 'Un repère sur l’encadrement institutionnel de la sécurité de l’IA et les risques algorithmiques en France.', 'url' => 'https://fr.wikipedia.org/wiki/Institut_national_pour_l%27%C3%A9valuation_et_la_s%C3%A9curit%C3%A9_de_l%27intelligence_artificielle'],
            ['theme' => 'Débat mondial', 'title' => 'Sommet de Paris : débat mondial sur la sécurité de l’IA', 'excerpt' => 'Chercheurs et militants appellent à davantage d’encadrement autour des modèles avancés et de leurs externalités.', 'url' => 'https://www.lemonde.fr/economie/article/2024/09/11/a-l-approche-du-sommet-de-paris-les-militants-inquiets-quant-a-la-securite-de-l-ia-cherchent-a-se-faire-entendre_6312979_3234.html'],
            ['theme' => 'Recherche', 'title' => 'CyberSentinel : threat detection for AI security', 'excerpt' => 'Une publication orientée détection unifiée des menaces liées aux environnements IA et aux signaux de compromission.', 'url' => 'https://arxiv.org/abs/2502.14966'],
        ];
    @endphp

    <section class="border-b border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Blog</p>
                <h1 class="mt-4 text-balance text-4xl font-black tracking-tight text-white md:text-6xl">Une veille utile, lisible et orientée décision.</h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Cette sélection éditorialisée prolonge le positionnement d’oppdrag.tech : aider les entreprises à mieux lire les signaux qui comptent en IA, data et cybersécurité.
                </p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="grid gap-4 sm:grid-cols-3">
            <article class="card-panel rounded-[2rem] p-6">
                <p class="text-3xl font-black text-white">6+</p>
                <p class="mt-2 text-sm leading-7 text-slate-300">contenus sélectionnés</p>
            </article>
            <article class="card-panel rounded-[2rem] p-6">
                <p class="text-3xl font-black text-white">3</p>
                <p class="mt-2 text-sm leading-7 text-slate-300">thèmes structurants</p>
            </article>
            <article class="card-panel rounded-[2rem] p-6">
                <p class="text-3xl font-black text-white">B2B</p>
                <p class="mt-2 text-sm leading-7 text-slate-300">lecture orientée entreprise</p>
            </article>
        </div>
    </section>

    <section class="border-y border-white/10 bg-white/[0.03]">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Articles</p>
                <h2 class="mt-4 text-3xl font-bold text-white md:text-5xl">Derniers contenus sélectionnés</h2>
                <p class="mt-5 text-lg leading-8 text-slate-300">
                    Une veille structurée autour des enjeux de conformité, de sécurité et d’exécution pour les entreprises qui avancent sur des sujets sensibles.
                </p>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($articles as $article)
                    <article class="card-panel rounded-[2rem] p-6">
                        <p class="inline-flex rounded-full border border-teal-300/20 bg-teal-300/10 px-3 py-1 text-xs font-semibold text-teal-100">
                            {{ $article['theme'] }}
                        </p>
                        <h3 class="mt-5 text-xl font-bold text-white">{{ $article['title'] }}</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-300">{{ $article['excerpt'] }}</p>
                        <div class="mt-6">
                            <a href="{{ $article['url'] }}" target="_blank" rel="noopener noreferrer" class="text-sm font-semibold text-teal-100 transition hover:text-white">
                                Lire la source
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="glass-panel rounded-[2rem] p-8" id="newsletter">
            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Newsletter</p>
            <h2 class="mt-3 text-3xl font-bold text-white">Recevoir une veille plus utile, moins bruyante.</h2>
            <p class="mt-4 max-w-2xl text-sm leading-8 text-slate-300">
                Si vous voulez recevoir une veille orientée décision sur l’IA, la data et la cybersécurité, vous pouvez vous inscrire directement via le formulaire en pied de page.
            </p>
            <div class="mt-6">
                <a href="#footer-newsletter" class="btn-primary">S’inscrire à la newsletter</a>
            </div>
        </div>
    </section>
@endsection
