@extends('layouts.marketing')

@section('title', 'À propos d’Oppdrag.tech | IA, data et cybersécurité')
@section('meta_description', 'Découvrez la mission, le positionnement et les engagements d’Oppdrag.tech, structure spécialisée dans le déploiement d’experts IA, data et cybersécurité pour les missions sensibles.')
@section('canonical', route('a-propos'))

@section('content')
    @php
        $stats = [
            ['value' => '5 jours', 'label' => 'pour lancer une mission'],
            ['value' => 'B2B', 'label' => 'approche pensée pour les entreprises'],
            ['value' => '3%', 'label' => 'des bénéfices reversés à l’ONaCVG'],
        ];

        $values = [
            ['title' => 'Exigence', 'text' => 'Une attention forte portée à la pertinence du profil, à la qualité du cadrage et à la crédibilité opérationnelle.'],
            ['title' => 'Responsabilité', 'text' => 'Une approche qui cherche à concilier performance, conformité, impact social et sobriété numérique.'],
            ['title' => 'Clarté', 'text' => 'Des échanges lisibles, une sélection courte et un cadre de mission explicite dès l’amont.'],
            ['title' => 'Engagement', 'text' => 'La volonté de construire un projet utile, sérieux et cohérent avec les convictions portées par oppdrag.tech.'],
        ];
    @endphp

    <section class="border-b border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">À propos</p>
                <h1 class="mt-4 text-balance text-4xl font-black tracking-tight text-white md:text-6xl">Un partenaire plus sélectif pour les missions technologiques sensibles.</h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Oppdrag.tech aide les entreprises à cadrer un besoin, sécuriser une mission et mobiliser rapidement les bons experts en IA, data et cybersécurité.
                </p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-[0.92fr_1.08fr]">
            <div class="glass-panel rounded-[2rem] p-8">
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Mission</p>
                <h2 class="mt-3 text-3xl font-bold text-white">Faciliter l’accès aux bons experts, sans lourdeur inutile.</h2>
                <p class="mt-5 text-sm leading-8 text-slate-300">
                    Oppdrag.tech ne se limite pas à transmettre des profils. Nous aidons à clarifier le besoin, à sécuriser le cadre d’intervention et à mobiliser des expertises réellement adaptées au contexte.
                </p>
                <p class="mt-4 text-sm leading-8 text-slate-300">
                    L’objectif n’est pas seulement d’aller vite, mais de faire avancer une mission critique dans un cadre lisible, fiable et responsable.
                </p>
            </div>

            <div class="grid gap-4 sm:grid-cols-3">
                @foreach ($stats as $stat)
                    <article class="card-panel rounded-[2rem] p-6">
                        <p class="text-3xl font-black text-white">{{ $stat['value'] }}</p>
                        <p class="mt-2 text-sm leading-7 text-slate-300">{{ $stat['label'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="border-y border-white/10 bg-white/[0.03]">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Positionnement</p>
                <h2 class="mt-4 text-3xl font-bold text-white md:text-5xl">Entre sélection premium et logique d’exécution.</h2>
                <p class="mt-5 text-lg leading-8 text-slate-300">
                    Oppdrag.tech s’adresse aux entreprises qui cherchent plus qu’un simple envoi de CV. La promesse repose sur une sélection resserrée, un cadre de mission plus solide et une lecture plus claire des compétences mobilisées.
                </p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Valeurs</p>
            <h2 class="mt-4 text-3xl font-bold text-white md:text-5xl">Exigence, responsabilité, clarté.</h2>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-2">
            @foreach ($values as $value)
                <article class="card-panel rounded-[2rem] p-6">
                    <h3 class="text-xl font-bold text-white">{{ $value['title'] }}</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-300">{{ $value['text'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="border-y border-white/10 bg-white/[0.03]">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
            <div class="grid gap-8 lg:grid-cols-2">
                <section class="card-panel rounded-[2rem] p-8">
                    <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Vision</p>
                    <h2 class="mt-3 text-3xl font-bold text-white">Construire une structure plus crédible, plus humaine et plus utile.</h2>
                    <p class="mt-5 text-sm leading-8 text-slate-300">
                        Oppdrag.tech défend l’idée qu’un modèle d’intermédiation technologique peut être plus rigoureux, plus transparent et plus responsable. À terme, la structure a vocation à articuler déploiement d’experts, accompagnement et formats d’équipe dédiés.
                    </p>
                </section>

                <section class="glass-panel rounded-[2rem] p-8">
                    <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Ce qui nous distingue</p>
                    <ul class="mt-5 space-y-4 text-sm leading-8 text-slate-300">
                        <li><strong class="text-white">Déploiement sous 5 jours :</strong> une promesse de réactivité alignée avec les sujets urgents.</li>
                        <li><strong class="text-white">Approche sélective :</strong> moins de profils, mais mieux ciblés et mieux compris.</li>
                        <li><strong class="text-white">Cadre responsable :</strong> conformité RGPD, attention portée à l’impact et logique de continuité.</li>
                        <li><strong class="text-white">Engagement tangible :</strong> 3 % des bénéfices reversés à l’ONaCVG.</li>
                    </ul>
                </section>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="glass-panel rounded-[2rem] p-8" id="contact">
            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Contact</p>
            <h2 class="mt-3 text-3xl font-bold text-white">Un besoin à cadrer, une mission à lancer, ou une collaboration à envisager.</h2>
            <p class="mt-4 max-w-2xl text-sm leading-8 text-slate-300">
                Si vous cherchez un expert, une équipe dédiée ou simplement un cadre plus clair pour faire avancer un sujet critique, nous pouvons en parler.
            </p>
            <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('home') }}#contact" class="btn-primary">Parler à un expert</a>
                <a href="mailto:contact@oppdrag.tech" class="btn-secondary">contact@oppdrag.tech</a>
            </div>
        </div>
    </section>
@endsection
