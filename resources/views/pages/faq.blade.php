@extends('layouts.marketing')

@php
    $summary = [
            ['label' => 'Entreprises', 'href' => '#clients'],
            ['label' => 'Experts indépendants', 'href' => '#experts'],
            ['label' => 'Général', 'href' => '#general'],
        ];

    $sections = [
            [
                'id' => 'clients',
                'eyebrow' => 'Entreprises',
                'title' => 'Process, délais et cadre d’intervention',
                'items' => [
                    ['question' => 'Comment fonctionne le processus chez oppdrag.tech ?', 'answer' => 'Nous commençons par cadrer le besoin, le contexte, les livrables attendus, le niveau de séniorité et les contraintes. Nous revenons ensuite avec une sélection courte et lisible, alignée avec la mission réelle.'],
                    ['question' => 'En combien de temps pouvez-vous proposer un expert ?', 'answer' => 'Oppdrag.tech se positionne sur un déploiement sous 5 jours. Le délai exact dépend de la clarté du besoin, du niveau de spécialisation recherché et de la disponibilité des experts pertinents.'],
                    ['question' => 'Présentez-vous plusieurs profils ou une shortlist courte ?', 'answer' => 'Notre logique est de privilégier une sélection resserrée. L’objectif est de faire gagner du temps aux équipes et d’éviter les envois massifs de profils peu différenciés.'],
                    ['question' => 'Comment gérez-vous la confidentialité et le RGPD ?', 'answer' => 'La confidentialité, le traitement des données et la conformité sont intégrés au cadrage de mission. Nous veillons à limiter l’exposition inutile des informations dès l’amont.'],
                ],
            ],
            [
                'id' => 'experts',
                'eyebrow' => 'Experts indépendants',
                'title' => 'Sélection, mission et collaboration',
                'items' => [
                    ['question' => 'Comment rejoindre le réseau oppdrag.tech ?', 'answer' => 'Nous cherchons moins un volume de profils qu’un niveau réel de crédibilité opérationnelle. La sélection repose sur l’expérience, la spécialisation, la qualité d’échange et la cohérence du parcours.'],
                    ['question' => 'Comment se passe l’évaluation des profils ?', 'answer' => 'L’évaluation porte sur les compétences techniques, la compréhension métier, la capacité à intervenir dans un cadre client exigeant et, lorsque c’est pertinent, sur les références disponibles.'],
                    ['question' => 'Quel type de missions puis-je trouver via oppdrag.tech ?', 'answer' => 'Les missions concernent principalement l’IA, la data et la cybersécurité, sur des formats allant de l’expertise ponctuelle à des interventions plus structurées ou à des équipes dédiées.'],
                    ['question' => 'Que se passe-t-il après la mise en relation ?', 'answer' => 'Selon le format retenu, oppdrag.tech reste un point d’appui pour le suivi, la coordination et la clarté de la relation, afin de limiter les frictions inutiles.'],
                ],
            ],
            [
                'id' => 'general',
                'eyebrow' => 'Général',
                'title' => 'Positionnement, engagement et contact',
                'items' => [
                    ['question' => 'Qu’est-ce qui distingue oppdrag.tech ?', 'answer' => 'Nous combinons réactivité, sélection exigeante, cadre fiable et engagement responsable. L’ambition est d’aller au-delà d’une simple mise en relation.'],
                    ['question' => 'Pourquoi mettez-vous en avant l’impact RSE ?', 'answer' => 'L’engagement responsable fait partie du projet. Oppdrag.tech reverse 3 % de ses bénéfices à l’ONaCVG et défend une approche plus exigeante sur l’inclusion, la sobriété et l’utilité réelle.'],
                    ['question' => 'À qui s’adresse oppdrag.tech ?', 'answer' => 'Oppdrag.tech s’adresse aux entreprises qui ont des sujets sensibles ou critiques en IA, data et cybersécurité, et qui recherchent un cadre plus sélectif et plus lisible qu’une marketplace ouverte.'],
                    ['question' => 'Comment vous contacter ?', 'answer' => 'Vous pouvez nous écrire à contact@oppdrag.tech ou utiliser le formulaire de contact sur la page d’accueil.'],
                ],
            ],
        ];

    $faqSchema = collect($sections)
        ->flatMap(fn (array $section) => $section['items'])
        ->map(fn (array $item) => [
            '@type' => 'Question',
            'name' => $item['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $item['answer'],
            ],
        ])
        ->values()
        ->all();
@endphp

@section('title', 'FAQ missions IA, data et cybersécurité | Oppdrag.tech')
@section('meta_description', 'FAQ Oppdrag.tech : délais, sélection des experts, cadre de mission, conformité RGPD et fonctionnement pour les entreprises comme pour les experts indépendants.')
@section('canonical', route('faq'))

@section('structured_data')
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $faqSchema,
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
@endsection

@section('content')

    <section class="border-b border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">FAQ</p>
                <h1 class="mt-4 text-balance text-4xl font-black tracking-tight text-white md:text-6xl">Les réponses aux questions récurrentes.</h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Cette FAQ répond aux questions les plus fréquentes sur le fonctionnement d’oppdrag.tech, côté entreprises comme côté experts indépendants.
                </p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-[0.72fr_1.28fr]">
            <aside class="card-panel h-max rounded-[2rem] p-6">
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Sommaire</p>
                <nav class="mt-5" aria-label="Sommaire FAQ">
                    <ul class="space-y-3">
                        @foreach ($summary as $item)
                            <li><a href="{{ $item['href'] }}" class="text-sm font-medium text-slate-300 transition hover:text-white">{{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </aside>

            <div class="space-y-8">
                @foreach ($sections as $section)
                    <section id="{{ $section['id'] }}" class="card-panel rounded-[2rem] p-8" aria-labelledby="{{ $section['id'] }}-title">
                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">{{ $section['eyebrow'] }}</p>
                        <h2 id="{{ $section['id'] }}-title" class="mt-3 text-3xl font-bold text-white">{{ $section['title'] }}</h2>
                        <div class="mt-8 space-y-4">
                            @foreach ($section['items'] as $item)
                                <article class="rounded-3xl border border-white/10 bg-slate-950/45 p-5">
                                    <h3 class="text-lg font-semibold text-white">{{ $item['question'] }}</h3>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">{{ $item['answer'] }}</p>
                                </article>
                            @endforeach
                        </div>
                    </section>
                @endforeach

                <section class="glass-panel rounded-[2rem] p-8" aria-labelledby="faq-contact-title">
                    <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Contact</p>
                    <h2 id="faq-contact-title" class="mt-3 text-3xl font-bold text-white">Une question qui mérite un échange direct</h2>
                    <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-300">
                        Si votre question ne figure pas ici, le plus simple est de nous écrire. Un échange rapide permet souvent de clarifier plus efficacement un besoin, une mission ou un cadre d’intervention.
                    </p>
                    <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                        <a href="mailto:contact@oppdrag.tech" class="btn-light">contact@oppdrag.tech</a>
                        <a href="{{ route('home') }}#contact" class="btn-secondary">Aller au formulaire</a>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
