@extends('layouts.marketing')

@section('title', 'oppdrag.tech | Déploiement d’experts IA, data et cybersécurité')
@section('meta_description', 'Oppdrag.tech aide les entreprises à cadrer et déployer des experts IA, data et cybersécurité sous 5 jours, avec une sélection exigeante et un cadre fiable conforme au RGPD.')
@section('canonical', route('home'))

@section('structured_data')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "Organization",
                    "name": "oppdrag.tech",
                    "url": "{{ route('home') }}",
                    "logo": "{{ asset('Images/logo-opg2.png') }}",
                    "email": "contact@oppdrag.tech",
                    "telephone": "+33 9 51 21 87 47",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "26 rue des Monts de Vigne",
                        "postalCode": "21000",
                        "addressLocality": "Dijon",
                        "addressCountry": "FR"
                    },
                    "sameAs": [
                        "https://www.linkedin.com/company/oppdrag-tech",
                        "https://www.tiktok.com/@oppdrag.tech"
                    ]
                },
                {
                    "@type": "WebSite",
                    "name": "oppdrag.tech",
                    "url": "{{ route('home') }}"
                }
            ]
        }
    </script>
@endsection

@section('content')
    @php
        $offers = [
            [
                'title' => 'Mission freelance',
                'price' => 'À partir de 600€/jour',
                'description' => 'Le bon expert pour renforcer rapidement une équipe sur un sujet précis, sensible ou urgent.',
                'badge' => 'Rapide à lancer',
                'items' => ['Sélection resserrée', 'Cadrage de mission et conformité', 'Continuité assurée en cas d’écart'],
                'cta' => 'Parler à un expert',
                'highlight' => false,
            ],
            [
                'title' => 'Pack preuve de concept',
                'price' => 'Format 2 à 6 semaines',
                'description' => 'Un format court pour transformer un besoin en preuve concrète, avec un livrable utile et exploitable.',
                'badge' => 'Idéale pour arbitrer vite',
                'items' => ['Cadrage opérationnel', 'Pilotage centralisé', 'Livrable utile à la décision'],
                'cta' => 'Parler à un expert',
                'highlight' => true,
            ],
            [
                'title' => 'Équipe dédiée pilotée',
                'price' => 'Équipe dédiée',
                'description' => 'Une équipe structurée pour accélérer un chantier IA, data ou cybersécurité à fort enjeu.',
                'badge' => 'Pour les sujets structurants',
                'items' => ['2 à 8 experts mobilisables', 'Pilotage et reporting', 'Cadre clair sur plusieurs mois'],
                'cta' => 'Parler à un expert',
                'highlight' => false,
            ],
        ];

        $expertises = [
            ['title' => 'Intelligence Artificielle', 'text' => 'IA générative, NLP/Machine Learning/Deep Learning, industrialisation de modèles, évaluation des risques et mise en production.'],
            ['title' => 'Data science', 'text' => 'Ingénierie des données, analyse, gouvernance, data mining, pipelines et pilotage de la donnée.'],
            ['title' => 'Cybersécurité', 'text' => 'Audit, gouvernance des risques, sécurité applicative, sécurité cloud, gestion des accès, supervision et réponse à incident.'],
            ['title' => 'Gestion de projet', 'text' => 'RGPD, confidentialité, pilotage de mission, suivi opérationnel et documentation utile.'],
        ];

        $proofs = [
            ['value' => '5 jours', 'label' => 'pour lancer une mission avec le bon expert.'],
            ['value' => '48 h', 'label' => 'pour cadrer, qualifier et verrouiller le bésoin.'],
            ['value' => 'Entreprises', 'label' => 'approche pensée pour TPE/PME, grands comptes et ESN.'],
        ];

        $expertProfiles = [
            [
                'title' => 'Data scientist',
                'context' => 'Analyse avancée et modélisation',
                'stack' => ['Santé', 'Senior', 'Disponible sous 5 jours'],
                'image' => 'Images/blackwomen.jpg',
                'image_position' => 'center 24%',
            ],
            [
                'title' => 'Data engineer',
                'context' => 'Pipelines, qualité et plateforme',
                'stack' => ['Industrie', 'Lead', 'Disponible sous 6 jours'],
                'image' => 'Images/data-scientist.jpg',
                'image_position' => 'center 38%',
            ],
            [
                'title' => 'Architecte data',
                'context' => 'Urbanisation et gouvernance',
                'stack' => ['Finance', 'Expert', 'Mission dédiée'],
                'image' => 'Images/meeting.jpg',
                'image_position' => '18% 32%',
            ],
            [
                'title' => 'Pentester',
                'context' => 'Tests d’intrusion et remédiation',
                'stack' => ['Cybersécurité', 'Senior', 'Disponible sous 4 jours'],
                'image' => 'Images/meeting.jpg',
                'image_position' => '48% 26%',
            ],
            [
                'title' => 'Ingénieur IA',
                'context' => 'Industrialisation et mise en production',
                'stack' => ['IA générative', 'Lead', 'Temps partagé'],
                'image' => 'Images/blackwomen.jpg',
                'image_position' => 'center 46%',
            ],
            [
                'title' => 'Analyste cybersécurité',
                'context' => 'Supervision, détection et réponse',
                'stack' => ['SOC', 'Senior', 'Disponible sous 5 jours'],
                'image' => 'Images/meeting.jpg',
                'image_position' => '82% 34%',
            ],
            [
                'title' => 'Consultant data',
                'context' => 'Cadrage, priorisation et pilotage',
                'stack' => ['Direction métier', 'Expert', 'Disponible sous 7 jours'],
                'image' => 'Images/data-scientist.jpg',
                'image_position' => 'center 20%',
            ],
        ];

        $manifesto = [
            'eyebrow' => 'Manifeste',
            'title' => 'La vitesse n’a de valeur que si elle s’appuie sur un cadre solide.',
            'intro' => 'Oppdrag.tech intervient quand le sujet est exposé, que les décideurs n’ont pas le luxe de tester au hasard, et qu’il faut faire avancer une mission sans sacrifier la conformité, la lisibilité ni la qualité d’exécution.',
            'pillars' => [
                ['title' => 'Précision avant volume', 'text' => 'Nous préférons une sélection courte, défendable et exploitable à une abondance de profils mal calibrés.'],
                ['title' => 'Cadre avant lancement', 'text' => 'Chaque mission est préparée comme un dispositif d’exécution, pas comme une mise en relation opportuniste.'],
                ['title' => 'Exigence sans friction', 'text' => 'Le niveau attendu reste élevé, mais l’expérience doit rester lisible, fluide et soutenable pour les équipes internes.'],
            ],
        ];

        $governancePillars = [
            [
                'title' => 'Contrats et conformité',
                'text' => 'Accords de confidentialité, cadre RGPD, propriété intellectuelle et modalités d’intervention cadrés avant le démarrage.',
            ],
            [
                'title' => 'Accompagnement',
                'text' => 'Rituels, accès, documentation utile, responsabilité de chacun et règles de fonctionnement formalisées dès l’amont.',
            ],
            [
                'title' => 'Suivi d’exécution',
                'text' => 'Suivi de mission, points d’alerte, arbitrages de trajectoire et maintien du niveau attendu pendant l’exécution.',
            ],
            [
                'title' => 'Continuité et remplacement',
                'text' => 'Si le niveau n’est pas au rendez-vous ou si le contexte évolue, nous réajustons rapidement la composition ou le format.',
            ],
        ];

        $coverageGroups = [
            [
                'title' => 'Expertises couvertes',
                'items' => ['IA générative', 'Python', 'Industrialisation IA', 'Ingénierie des données', 'Sécurité cloud', 'IAM / sécurité applicative'],
            ],
            [
                'title' => 'Types de mission',
                'items' => ['Audit ciblé', 'Preuve de concept accélérée', 'Renfort d’équipe', 'Programme structurant', 'Remédiation sécurité', 'Pilotage d’exécution'],
            ],
            [
                'title' => 'Seniorité mobilisable',
                'items' => ['Expert senior', 'Responsable technique', 'Référent', 'Architecte', 'Direction à temps partagé', 'Équipe dédiée'],
            ],
            [
                'title' => 'Modes opératoires',
                'items' => ['À distance', 'Hybride', 'Présentiel ponctuel', 'Temps plein', 'Temps partagé', 'Mode projet ou régie'],
            ],
        ];

        $technologyStack = [
            ['name' => 'Python', 'logo' => 'Images/python.jpg'],
            ['name' => 'AWS', 'logo' => 'Images/aws.png'],
            ['name' => 'Azure', 'logo' => 'Images/azure.png'],
            ['name' => 'GCP', 'logo' => 'Images/gcp.png'],
            ['name' => 'Docker', 'logo' => 'Images/docker.png'],
            ['name' => 'Kubernetes', 'logo' => 'Images/kubernetes.jpg'],
            ['name' => 'TensorFlow', 'logo' => 'Images/tensorflow.png'],
            ['name' => 'PyTorch', 'logo' => 'Images/pytorch.jpg'],
            ['name' => 'Scikit-learn', 'logo' => 'Images/scikit.png'],
            ['name' => 'Spark', 'logo' => 'Images/apachespark.png'],
            ['name' => 'Airflow', 'logo' => 'Images/airflow.png'],
            ['name' => 'Terraform', 'logo' => 'Images/terraform.jpg'],
            ['name' => 'Wireshark', 'logo' => 'Images/wireshark.jpg'],
            ['name' => 'Splunk', 'logo' => 'Images/splunk.png'],
        ];

        $useCases = [
            [
                'label' => 'IA générative',
                'title' => 'Assistant métier sur données sensibles',
                'text' => 'Cadrer un cas d’usage d’IA générative, choisir le bon niveau d’industrialisation et sécuriser l’exposition des données avant mise en production.',
                'outcome' => 'Décision plus rapide, dette d’architecture évitée',
            ],
            [
                'label' => 'Data architecture',
                'title' => 'Refonte d’une chaîne de donnée critique',
                'text' => 'Renforcer une équipe data avec le bon niveau de seniorité pour fiabiliser les pipelines, améliorer la gouvernance et accélérer la lecture métier.',
                'outcome' => 'Capacité d’exécution renforcée sans ralentir les équipes',
            ],
            [
                'label' => 'Cybersécurité',
                'title' => 'Programme IAM ou sécurité applicative sous contrainte',
                'text' => 'Déployer rapidement un expert senior ou une équipe resserrée pour absorber une exigence sécurité qui ne peut pas attendre un cycle de recrutement classique.',
                'outcome' => 'Risque réduit, pilotage plus net, mise en mouvement plus rapide',
            ],
        ];

        $qualificationSteps = [
            [
                'title' => 'Revue du besoin',
                'text' => 'Objectif, contexte métier, dette existante, contraintes d’accès, horizon de décision et niveau de criticité.',
            ],
            [
                'title' => 'Cartographie des contraintes',
                'text' => 'Données sensibles, architecture, exigences de sécurité, gouvernance interne et conditions de collaboration.',
            ],
            [
                'title' => 'Hypothèse d’exécution',
                'text' => 'Format de mission, niveau de seniorité, points de pilotage, risques d’écart et critères de succès attendus.',
            ],
            [
                'title' => 'Ouverture de la sélection',
                'text' => 'La sélection ne démarre qu’une fois le cadre validé. C’est ce qui permet une liste courte et réellement exploitable.',
            ],
        ];

        $steps = [
            ['title' => 'Cadrer la mission', 'text' => 'Nous clarifions le contexte, les livrables, les risques et le niveau réellement attendu.'],
            ['title' => 'Sélectionner les bons experts', 'text' => 'Nous revenons avec une sélection courte, lisible et adaptée à votre niveau d’urgence.'],
            ['title' => 'Lancer dans un cadre fiable', 'text' => 'La mission démarre dans un cadre contractuel, opérationnel et conforme.'],
        ];

        $signals = ['Définition du bésoin', 'Sélection exigeante', 'Cadre et conformité RGPD', 'Lancement de la mission'];

        $consoleStages = [
            [
                'key' => 'brief',
                'label' => '01. Cadrage',
                'title' => 'Le besoin est qualifié avant toute présentation.',
                'text' => 'Nous clarifions le contexte, le niveau attendu, les contraintes de confidentialité et le format d’intervention avant d’ouvrir la sélection.',
                'points' => ['Contexte métier reformulé', 'Périmètre de mission clarifié', 'Exposition des données limitée'],
                'metric' => 'Signal utile',
            ],
            [
                'key' => 'matching',
                'label' => '02. Sélection',
                'title' => 'Une liste courte, lisible et argumentée.',
                'text' => 'La sélection ne repose pas sur des mots-clés. Elle combine expertise, disponibilité, contexte de mission et niveau de fiabilité attendu.',
                'points' => ['Sélection resserrée', 'Risque d’écart réduit', 'Lecture claire pour les décideurs'],
                'metric' => 'Sélection exigeante',
            ],
            [
                'key' => 'launch',
                'label' => '03. Lancement',
                'title' => 'La mission démarre dans un cadre robuste.',
                'text' => 'Contractualisation, confidentialité, pilotage et continuité sont intégrés au démarrage pour éviter les frictions classiques des missions sensibles.',
                'points' => ['Cadre contractuel prêt', 'Conformité intégrée', 'Point d’appui opérationnel maintenu'],
                'metric' => 'Cadre fiable',
            ],
        ];

        $outcomes = [
            [
                'quote' => 'Le sujet n’était pas seulement de trouver un profil. Oppdrag.tech a verrouillé le cadre, réduit le risque d’écart et permis un démarrage propre sur un sujet IA très exposé.',
                'author' => 'DSI, groupe mutualiste',
                'result' => 'Mission cadrée et lancée en moins d’une semaine',
            ],
            [
                'quote' => 'Nous avions besoin d’un niveau senior immédiatement crédible en cybersécurité. La sélection était courte, défendable, et le suivi a évité les frictions classiques des renforts externes.',
                'author' => 'Responsable cybersécurité, ETI industrielle',
                'result' => 'Renfort sécurité opérationnel sans dette administrative',
            ],
            [
                'quote' => 'Le vrai différenciateur a été la discipline de qualification. Avant de parler de profils, nous avions déjà une hypothèse d’exécution et un cadre de gouvernance clair.',
                'author' => 'Directeur data, entreprise en croissance',
                'result' => 'Preuve de concept data lancée avec livrable décisionnel en 4 semaines',
            ],
        ];

        $faqs = [
            ['question' => 'En combien de temps pouvez-vous proposer un expert ?', 'answer' => 'Oppdrag.tech se positionne sur un déploiement sous 5 jours, selon la clarté du besoin et le niveau de spécialisation attendu.'],
            ['question' => 'Travaillez-vous uniquement avec des freelances ?', 'answer' => 'Le cœur de l’offre repose sur des experts indépendants, mais nous pouvons aussi cadrer des formats plus structurés et des équipes dédiées.'],
            ['question' => 'Comment gérez-vous la confidentialité et le RGPD ?', 'answer' => 'La confidentialité, le traitement des données et la conformité sont intégrés au cadrage de mission avant le démarrage opérationnel.'],
        ];
    @endphp

    <section class="premium-section relative overflow-hidden pt-8" aria-labelledby="hero-title">
        <div class="absolute inset-0 -z-20">
            <div class="bg-video-shell -z-10" aria-hidden="true">
                <video
                    class="bg-video"
                    data-bg-video
                    autoplay
                    muted
                    loop
                    playsinline
                    preload="metadata"
                    poster="{{ asset('Images/cybernavy.jpg') }}"
                    style="--video-opacity: 0.28;"
                >
                    <source src="{{ asset('Videos/card.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="hero-grid absolute inset-0 opacity-50"></div>
            <div class="noise-mask absolute inset-0"></div>
            <div class="ambient-orb left-[6%] top-10 h-44 w-44" data-orb="teal" aria-hidden="true"></div>
            <div class="ambient-orb right-[8%] top-20 h-52 w-52" data-orb="cyan" aria-hidden="true"></div>
        </div>

        <div class="mx-auto max-w-7xl px-6 pb-16 lg:px-8 lg:pb-24">
            <div class="hero-shell rounded-[2.25rem] px-6 py-8 md:px-8 md:py-10 xl:px-10 xl:py-12" data-hero-shell>
                <div class="grid gap-10 lg:grid-cols-[1.06fr_.94fr] lg:items-center">
                    <div class="min-w-0">
                        <p class="inline-flex w-fit items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.24em] text-teal-100" data-reveal>
                            <span class="h-2 w-2 rounded-full bg-teal-300" aria-hidden="true"></span>
                            Expert(s) mobilisable(s) sous 5 jours
                        </p>

                        <h1 id="hero-title" class="mt-8 max-w-5xl text-balance text-4xl font-black leading-[0.95] tracking-tight text-white md:text-6xl xl:text-7xl" data-reveal style="--reveal-delay: 60ms;">
                            Structurer, sécuriser et lancer
                            <span class="bg-gradient-to-r from-cyan-100 via-white to-teal-100 bg-clip-text text-transparent">vos missions IA, data et cybersécurité avec le niveau d’exigence qu’elles imposent.</span>
                        </h1>

                        <p class="mt-8 max-w-2xl text-lg leading-8 text-slate-300" data-reveal style="--reveal-delay: 120ms;">
                            Oppdrag.tech agit comme une couche d’exécution premium pour les entreprises qui doivent avancer vite sur un sujet critique, tout en gardant un cadre lisible, gouverné et conforme.
                        </p>

                        <div class="mt-10 flex flex-col gap-4 sm:flex-row" data-reveal style="--reveal-delay: 180ms;">
                            <a href="#contact" class="btn-primary">
                                Parler à un expert
                            </a>
                            <a href="#offres" class="btn-secondary">
                                Voir les offres
                            </a>
                        </div>

                        <dl class="mt-10 grid gap-4 sm:grid-cols-3" data-reveal style="--reveal-delay: 220ms;">
                            @foreach ($proofs as $proof)
                                <div class="hero-kpi-card rounded-[1.75rem] p-5">
                                    <dt class="text-2xl font-black text-white">{{ $proof['value'] }}</dt>
                                    <dd class="mt-2 text-sm leading-6 text-slate-300">{{ $proof['label'] }}</dd>
                                </div>
                            @endforeach
                        </dl>

                    </div>

                    <aside class="min-w-0" aria-label="Résumé de la proposition de valeur">
                        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
                            <section class="interaction-card rounded-[1.9rem] p-6 md:col-span-2 xl:col-span-2" data-reveal style="--reveal-delay: 120ms;">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <div>
                                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Leitmotiv</p>
                                        <h2 class="mt-3 text-2xl font-bold text-white">Un accompagnement de bout en bout, avant pendant et après la sélection.</h2>
                                    </div>
                                    <span class="inline-flex items-center gap-2 rounded-full border border-emerald-400/20 bg-emerald-400/10 px-3 py-1 text-xs font-semibold text-emerald-100">
                                        <span class="h-2 w-2 rounded-full bg-emerald-300" aria-hidden="true"></span>
                                        Service Après Vente
                                    </span>
                                </div>
                            </section>

                            <article class="interaction-card rounded-[1.9rem] p-5" data-reveal style="--reveal-delay: 180ms;">
                                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-teal-100">Sélection</p>
                                <h3 class="mt-3 text-lg font-semibold text-white">Shortlist argumentée</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-300">Une sélection courte, lisible et alignée avec le besoin réel, plutôt qu’un empilement de profils.</p>
                            </article>
                            <article class="interaction-card rounded-[1.9rem] p-5" data-reveal style="--reveal-delay: 220ms;">
                                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-teal-100">Conformité</p>
                                <h3 class="mt-3 text-lg font-semibold text-white">RGPD intégré</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-300">Confidentialité, sécurité contractuelle et exposition minimale de l’information.</p>
                            </article>
                            <article class="interaction-card rounded-[1.9rem] p-5 md:col-span-2 xl:col-span-2" data-reveal style="--reveal-delay: 260ms;">
                                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-teal-100">Responsabilité</p>
                                <h3 class="mt-3 text-lg font-semibold text-white">Démarche RSE</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-300">Oppdrag.tech reverse 3 % de ses bénéfices à l’ONaCVG et porte une approche d’exécution plus exigeante et plus utile.</p>
                            </article>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <section class="section-fade relative overflow-hidden border-y border-white/10 bg-white/[0.03]" aria-label="Signaux de confiance">
        <div class="absolute inset-0 -z-10" aria-hidden="true">
            <div class="bg-video-shell">
                <video
                    class="bg-video"
                    data-bg-video
                    autoplay
                    muted
                    loop
                    playsinline
                    preload="metadata"
                    poster="{{ asset('Images/cybernavy.jpg') }}"
                    style="--video-opacity: 0.18;"
                >
                    <source src="{{ asset('Videos/commando.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(2,6,23,0.82),rgba(2,6,23,0.68))]"></div>
            <div class="hero-grid absolute inset-0 opacity-30"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 py-8 lg:px-8">
            <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($signals as $signal)
                    <li class="bento-card rounded-3xl px-5 py-4 text-center text-sm font-semibold text-slate-200 {{ $loop->even ? 'lg:translate-y-2' : '' }}" data-reveal style="--reveal-delay: {{ $loop->index * 50 }}ms;">
                        {{ $signal }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="section-fade mx-auto max-w-7xl px-6 py-20 lg:px-8" aria-labelledby="profiles-title">
        <div class="grid gap-10 lg:grid-cols-[0.78fr_1.22fr] lg:items-start">
            <div data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Ressources Humaines</p>
                <h2 id="profiles-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Un vivier pluridisciplaines d'experts qualifiés.</h2>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                   Nous ne présentons pas des centaines de candidatures. Nous mettons en avant le type d’experts que nous savons réellement mobilisable sur des missions définies(visuels volontairement floutés pour préserver la confidentialité).
                </p>
            </div>

            <div class="profile-marquee-shell" data-reveal style="--reveal-delay: 80ms;">
                <div class="profile-marquee-track">
                    @foreach ([$expertProfiles, $expertProfiles] as $group)
                        <div class="profile-marquee-group" @if (! $loop->first) aria-hidden="true" @endif>
                            @foreach ($group as $profile)
                                <article class="profile-card">
                                    <div class="profile-card-media">
                                        <img
                                            src="{{ asset($profile['image']) }}"
                                            alt=""
                                            class="profile-card-image"
                                            style="object-position: {{ $profile['image_position'] ?? 'center' }};"
                                            loading="lazy"
                                            decoding="async"
                                            width="320"
                                            height="420"
                                        >
                                        <div class="profile-card-overlay"></div>
                                        <div class="profile-card-badge">
                                            <span class="h-2 w-2 rounded-full bg-emerald-300" aria-hidden="true"></span>
                                            <span>{{ $profile['stack'][2] }}</span>
                                        </div>
                                    </div>
                                    <div class="profile-card-body">
                                        <p class="text-[11px] font-semibold uppercase tracking-[0.2em] text-teal-100">{{ $profile['context'] }}</p>
                                        <h3 class="mt-3 text-xl font-bold text-white">{{ $profile['title'] }}</h3>
                                        <div class="profile-card-meta mt-5">
                                            @foreach (array_slice($profile['stack'], 0, 2) as $item)
                                                <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs font-medium text-slate-200">{{ $item }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-fade premium-section border-y border-white/10 bg-white/[0.03]" aria-labelledby="manifesto-title">
        <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
            <div class="manifesto-shell rounded-[2.25rem] px-6 py-10 md:px-8 md:py-12 xl:px-10 xl:py-14">
                <div class="grid gap-12 lg:grid-cols-[1.05fr_.95fr] lg:items-start">
                <div data-reveal>
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">{{ $manifesto['eyebrow'] }}</p>
                    <h2 id="manifesto-title" class="mt-5 max-w-4xl text-balance text-4xl font-black leading-[0.96] text-white md:text-6xl xl:text-7xl">
                        {{ $manifesto['title'] }}
                    </h2>
                </div>

                <div class="space-y-8" data-reveal style="--reveal-delay: 80ms;">
                    <p class="max-w-2xl text-lg leading-8 text-slate-300">
                        {{ $manifesto['intro'] }}
                    </p>

                    <div class="manifesto-principles">
                        @foreach ($manifesto['pillars'] as $pillar)
                            <article class="manifesto-principle rounded-[1.5rem]" data-reveal style="--reveal-delay: {{ 120 + ($loop->index * 60) }}ms;">
                                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Principe {{ $loop->iteration }}</p>
                                <h3 class="mt-3 text-xl font-bold text-white">{{ $pillar['title'] }}</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-300">{{ $pillar['text'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="section-fade border-y border-white/10 bg-white/[0.03]" aria-labelledby="qualification-title">
        <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-[0.78fr_1.22fr] lg:items-start">
                <div data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Protocole de qualification</p>
                <h2 id="qualification-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Aucune sélection sans protocole de qualification préalable.</h2>
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                        Avant de parler de profils, Oppdrag.tech clarifie ce qui doit être livré, ce qui ne doit pas fuiter, et ce qui ferait échouer la mission si le cadre n’était pas bien posé.
                    </p>
                </div>

                <div class="qualification-shell rounded-[2rem] p-6 md:p-8" data-reveal style="--reveal-delay: 70ms;">
                    <div class="qualification-steps">
                    @foreach ($qualificationSteps as $step)
                        <article class="qualification-step" data-reveal style="--reveal-delay: {{ $loop->index * 60 }}ms;">
                            <span class="qualification-step-index">0{{ $loop->iteration }}</span>
                            <div class="rounded-[1.5rem] border border-white/10 bg-white/[0.03] p-5">
                                <h3 class="text-xl font-bold text-white">{{ $step['title'] }}</h3>
                                <p class="mt-3 text-sm leading-7 text-slate-300">{{ $step['text'] }}</p>
                            </div>
                        </article>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-fade mx-auto max-w-7xl px-6 py-20 lg:px-8" aria-labelledby="governance-title">
        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
            <div data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Cadre de gouvernance</p>
                <h2 id="governance-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Un cadre de gouvernance articulé de bout en bout.</h2>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Oppdrag.tech agit comme couche d’exécution : contrats, onboarding, conformité, pilotage et suivi restent cadrés pour que les équipes internes n’aient pas à reconstruire ce socle à chaque mission.
                </p>
                <a href="#contact" class="btn-secondary mt-8">Demander un cadrage</a>
            </div>

            <div class="governance-shell rounded-[2rem] p-6 md:p-8" data-reveal style="--reveal-delay: 80ms;">
                <div class="governance-header">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Points de contrôle</p>
                        <p class="mt-2 text-sm leading-7 text-slate-300">Un cadre lisible pour sécuriser l’exécution, sans réinventer le socle à chaque mission.</p>
                    </div>
                    <span class="governance-status">
                        <span class="h-2 w-2 rounded-full bg-emerald-300" aria-hidden="true"></span>
                        Gouvernance active
                    </span>
                </div>

                <div class="governance-grid mt-6 md:grid-cols-2">
                @foreach ($governancePillars as $pillar)
                    <article class="governance-card rounded-[1.6rem] p-6" data-reveal style="--reveal-delay: {{ $loop->index * 60 }}ms;">
                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Pilier {{ $loop->iteration }}</p>
                        <h3 class="mt-3 text-xl font-bold text-white">{{ $pillar['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-300">{{ $pillar['text'] }}</p>
                    </article>
                @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="offres" class="section-fade mx-auto max-w-7xl px-6 py-20 lg:px-8" aria-labelledby="offers-title">
        <div class="grid gap-8 lg:grid-cols-[0.88fr_1.12fr] lg:items-end">
            <div data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Offres</p>
                <h2 id="offers-title" class="mt-4 max-w-2xl text-balance text-3xl font-bold text-white md:text-5xl">Des formats d’intervention pensés pour des sujets qui demandent plus qu’un simple staffing.</h2>
            </div>
            <div data-reveal style="--reveal-delay: 70ms;">
                <p class="max-w-3xl text-lg leading-8 text-slate-300">
                    Chaque format combine vitesse de mobilisation, niveau de seniorité, cadre opérationnel et responsabilité claire. L’objectif n’est pas de vendre une présence, mais de rendre la mission tenable et utile.
                </p>
            </div>
        </div>

        <div class="mt-14 grid gap-6 xl:grid-cols-3">
            @foreach ($offers as $offer)
                <article class="{{ $offer['highlight'] ? 'border-teal-300/30 bg-gradient-to-b from-teal-300/10 to-white/5' : 'card-panel' }} bento-card rounded-[2rem] border p-8 shadow-lg shadow-slate-950/15" data-reveal style="--reveal-delay: {{ $loop->index * 70 }}ms;">
                    <div>
                        <h3 class="text-2xl font-bold text-white">{{ $offer['title'] }}</h3>
                        <p class="mt-3 text-sm font-medium uppercase tracking-[0.18em] text-teal-100">{{ $offer['price'] }}</p>
                    </div>

                    <p class="mt-6 text-sm leading-7 text-slate-300">{{ $offer['description'] }}</p>

                    <ul class="mt-6 space-y-3 text-sm text-slate-200">
                        @foreach ($offer['items'] as $item)
                            <li class="flex items-start gap-3">
                                <span class="mt-1 h-2.5 w-2.5 rounded-full bg-teal-300" aria-hidden="true"></span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <a href="#contact" class="{{ $offer['highlight'] ? 'btn-primary' : 'btn-light' }} mt-8 w-full">
                        {{ $offer['cta'] }}
                    </a>
                </article>
            @endforeach
        </div>
    </section>

    <section id="process" class="premium-section section-fade border-y border-white/10 bg-white/[0.03]" aria-labelledby="process-title">
        <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
            <div class="mx-auto max-w-3xl text-center" data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Méthode</p>
                <h2 id="process-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Une méthode simple, exigeante et efficiente</h2>
            </div>

            <div class="process-line mt-14 grid gap-6 lg:grid-cols-3 lg:pl-0">
                @foreach ($steps as $index => $step)
                    <article class="bento-card step-node rounded-[2rem] p-7 lg:pl-8" data-reveal style="--reveal-delay: {{ $index * 80 }}ms;">
                        <p class="text-xs font-bold uppercase tracking-[0.24em] text-teal-100">0{{ $index + 1 }}</p>
                        <h3 class="mt-4 text-2xl font-bold text-white">{{ $step['title'] }}</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-300">{{ $step['text'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-fade mx-auto max-w-7xl px-6 py-20 lg:px-8" aria-labelledby="console-title">
        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
            <div data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Pilotage de mission</p>
                <h2 id="console-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Une démonstration simple de notre logique d’exécution.</h2>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Cette vue synthétise la façon dont oppdrag.tech transforme un besoin flou en mission exploitable. Le sujet n’est pas d’en faire plus, mais d’éliminer les angles morts avant le lancement.
                </p>
            </div>

            <section class="mission-console rounded-[2rem] p-6 md:p-8" data-console data-reveal style="--reveal-delay: 80ms;">
                <div class="flex flex-wrap gap-3">
                    @foreach ($consoleStages as $stage)
                        <button
                            type="button"
                            class="console-chip rounded-full px-4 py-2 text-sm font-semibold"
                            data-console-trigger="{{ $stage['key'] }}"
                            aria-pressed="{{ $loop->first ? 'true' : 'false' }}"
                        >
                            {{ $stage['label'] }}
                        </button>
                    @endforeach
                </div>

                <div class="mt-6 grid gap-4 lg:grid-cols-[1.05fr_.95fr]">
                    @foreach ($consoleStages as $stage)
                        <article class="console-stage {{ $loop->first ? 'is-active' : '' }} rounded-[1.6rem] p-6 lg:col-span-2" data-console-panel="{{ $stage['key'] }}">
                            <div class="grid gap-5 md:grid-cols-[1.15fr_.85fr] md:items-start">
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">{{ $stage['metric'] }}</p>
                                    <h3 class="mt-3 text-2xl font-bold text-white">{{ $stage['title'] }}</h3>
                                    <p class="mt-4 text-sm leading-7 text-slate-300">{{ $stage['text'] }}</p>
                                </div>
                                <div class="hero-kpi-card rounded-[1.4rem] p-5">
                                    <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Sortie attendue</p>
                                    <ul class="mt-4 space-y-3 text-sm text-slate-200">
                                        @foreach ($stage['points'] as $point)
                                            <li class="flex items-start gap-3">
                                                <span class="mt-1 h-2.5 w-2.5 rounded-full bg-teal-300" aria-hidden="true"></span>
                                                <span>{{ $point }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        </div>
    </section>

    <section class="section-fade mx-auto max-w-7xl px-6 py-24 lg:px-8" aria-labelledby="use-cases-title">
        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
            <div data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Cas d’usage</p>
                <h2 id="use-cases-title" class="mt-4 max-w-2xl text-balance text-3xl font-bold text-white md:text-5xl">Une galerie de sujets réels, où la qualité du cadre compte autant que le profil.</h2>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Oppdrag.tech est le plus utile quand le sujet est exposé, transverse, ou suffisamment critique pour qu’une erreur de casting ou de cadrage ralentisse tout le monde.
                </p>
            </div>

            <div class="space-y-5">
                <article class="case-study-hero rounded-[2rem] p-6 md:p-8" data-reveal style="--reveal-delay: 60ms;">
                    <div class="case-study-hero-media">
                        <img
                            src="{{ asset('Images/data-scientist.jpg') }}"
                            alt=""
                            class="case-study-hero-image"
                            loading="lazy"
                            decoding="async"
                            width="880"
                            height="560"
                        >
                        <div class="case-study-hero-overlay"></div>
                    </div>
                    <div class="relative z-10 grid gap-6 lg:grid-cols-[1fr_auto] lg:items-end">
                        <div class="max-w-2xl">
                            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Vue de mission</p>
                            <p class="mt-4 text-lg leading-8 text-slate-100">
                                Des sujets concrets, des équipes exposées, un besoin de clarté immédiate : la mise en mouvement doit être visuelle, lisible et crédible dès les premières secondes.
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-2 lg:max-w-xs lg:justify-end">
                            @foreach ($useCases as $case)
                                <span class="case-study-pill">{{ $case['label'] }}</span>
                            @endforeach
                            @foreach (['Data Engineering', 'Machine Learning', 'Deep Learning', 'Data Analyse', 'Gestion de projet'] as $domain)
                                <span class="case-study-pill">{{ $domain }}</span>
                            @endforeach
                        </div>
                    </div>
                </article>

                <div class="grid gap-5 md:grid-cols-3">
                    @foreach ($useCases as $case)
                        <article class="bento-card rounded-[2rem] p-6" data-reveal style="--reveal-delay: {{ $loop->index * 70 }}ms;">
                            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">{{ $case['label'] }}</p>
                            <h3 class="mt-4 text-2xl font-bold text-white">{{ $case['title'] }}</h3>
                            <p class="mt-4 text-sm leading-7 text-slate-300">{{ $case['text'] }}</p>
                            <div class="mt-8 rounded-2xl border border-white/10 bg-slate-950/50 px-4 py-4">
                                <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-slate-400">Ce que cela permet</p>
                                <p class="mt-2 text-sm text-slate-100">{{ $case['outcome'] }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="expertises" class="section-fade mx-auto max-w-7xl px-6 py-20 lg:px-8" aria-labelledby="expertises-title">
        <div class="grid gap-12 lg:grid-cols-[.95fr_1.05fr] lg:items-start">
            <div data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Expertises</p>
                <h2 id="expertises-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Des compétences métiers adaptées à vos bésoins </h2>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Oppdrag.tech intervient quand le besoin est sensible, qu’il y a peu de marge d’erreur et qu’une simple mise en relation ne suffit pas.
                </p>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                @foreach ($expertises as $expertise)
                    <article class="bento-card rounded-[2rem] p-6" data-reveal style="--reveal-delay: {{ 80 + ($loop->index * 50) }}ms;">
                        <h3 class="text-xl font-bold text-white">{{ $expertise['title'] }}</h3>
                        <p class="mt-4 text-sm leading-7 text-slate-300">{{ $expertise['text'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="mt-12" data-reveal style="--reveal-delay: 120ms;">
            <div class="flex items-center justify-between gap-4">
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Stack technique</p>
                <p class="hidden text-sm text-slate-400 md:block">Un socle visible, couvrant la donnée, l’IA, le cloud et la cybersécurité.</p>
            </div>

            <div class="tech-marquee-shell mt-6">
                <div class="tech-marquee-track">
                    @foreach ([$technologyStack, $technologyStack] as $group)
                        <div class="tech-marquee-group" @if (! $loop->first) aria-hidden="true" @endif>
                            @foreach ($group as $technology)
                                <article class="tech-pill-card">
                                    <span class="tech-pill-logo">
                                        <img
                                            src="{{ asset($technology['logo']) }}"
                                            alt=""
                                            loading="lazy"
                                            decoding="async"
                                            class="h-6 w-auto object-contain"
                                            width="32"
                                            height="24"
                                        >
                                    </span>
                                    <span class="text-sm font-medium text-slate-100">{{ $technology['name'] }}</span>
                                </article>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-fade border-y border-white/10 bg-white/[0.03]" aria-labelledby="coverage-title">
        <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
            <div class="mx-auto max-w-3xl text-center" data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Périmètre couvert</p>
                <h2 id="coverage-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Un périmètre lisible des expertises, des formats et des niveaux de seniorité.</h2>
                <p class="mt-5 text-lg leading-8 text-slate-300">
                    Nous rendons visible ce que nous savons réellement couvrir afin d'éviter des promesses floues ou irréalisables.
                </p>
            </div>

            <div class="mt-14 grid gap-6 xl:grid-cols-4">
                @foreach ($coverageGroups as $group)
                    <article class="bento-card rounded-[1.9rem] p-6" data-reveal style="--reveal-delay: {{ $loop->index * 60 }}ms;">
                        <h3 class="text-xl font-bold text-white">{{ $group['title'] }}</h3>
                        <ul class="mt-5 space-y-3 text-sm leading-7 text-slate-300">
                            @foreach ($group['items'] as $item)
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-2 w-2 rounded-full bg-teal-300" aria-hidden="true"></span>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-fade mx-auto max-w-7xl px-6 py-20 lg:px-8" aria-labelledby="outcomes-title">
        <div class="grid gap-10 lg:grid-cols-[0.84fr_1.16fr] lg:items-start">
            <div data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Preuves d’issue</p>
                <h2 id="outcomes-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Des retours orientés résultat, pas des compliments vagues.</h2>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Les équipes nous sollicitent quand la mission est sensible, que le temps est compté et que l’erreur de casting coûte trop cher. Les preuves doivent donc parler de délai, de cadrage et de stabilité d’exécution.
                </p>
            </div>

            <div class="grid gap-5">
                @foreach ($outcomes as $outcome)
                    <article class="bento-card rounded-[1.9rem] p-6" data-reveal style="--reveal-delay: {{ $loop->index * 70 }}ms;">
                        <p class="text-lg leading-8 text-slate-100">“{{ $outcome['quote'] }}”</p>
                        <div class="mt-6 flex flex-col gap-2 border-t border-white/10 pt-4 md:flex-row md:items-center md:justify-between">
                            <p class="text-sm font-semibold text-white">{{ $outcome['author'] }}</p>
                            <p class="text-sm text-teal-100">{{ $outcome['result'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="impact" class="section-fade border-y border-white/10 bg-white/[0.03]" aria-labelledby="impact-title">
        <div class="mx-auto grid max-w-7xl gap-10 px-6 py-20 lg:grid-cols-[1.05fr_.95fr] lg:px-8">
            <div data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Impact & responsabilité</p>
                <h2 id="impact-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Une exigence opérationnelle, avec une ligne de conduite claire</h2>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Nous défendons une approche où l’exécution, la conformité et l’impact social avancent ensemble, sans posture ni promesse creuse.
                </p>

                <ul class="mt-8 space-y-4 text-sm leading-7 text-slate-200">
                    <li class="flex gap-3">
                        <span class="mt-2 h-2.5 w-2.5 rounded-full bg-teal-300" aria-hidden="true"></span>
                        <span>Cadre RGPD, confidentialité et maîtrise du partage d’information intégrés à la démarche.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-2 h-2.5 w-2.5 rounded-full bg-teal-300" aria-hidden="true"></span>
                        <span>Attention portée à l’inclusion, à la sobriété numérique et à la qualité des dispositifs proposés.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-2 h-2.5 w-2.5 rounded-full bg-amber-300" aria-hidden="true"></span>
                        <span><strong class="text-amber-200">3% des bénéfices</strong> reversés à l’ONaCVG dans une logique d’engagement tangible.</span>
                    </li>
                </ul>
            </div>

            <div class="glass-panel rounded-[2rem] p-8" data-reveal style="--reveal-delay: 100ms;">
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Ce que cela change</p>
                <div class="mt-6 space-y-5">
                    <article class="rounded-3xl border border-white/10 bg-slate-950/50 p-5">
                        <h3 class="text-lg font-semibold text-white">Moins de friction</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-300">Un besoin mieux cadré, des échanges plus clairs et un démarrage plus rapide.</p>
                    </article>
                    <article class="rounded-3xl border border-white/10 bg-slate-950/50 p-5">
                        <h3 class="text-lg font-semibold text-white">Moins d’exposition inutile</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-300">Sélection resserrée, confidentialité mieux tenue et cadre plus robuste qu’une marketplace ouverte.</p>
                    </article>
                    <article class="rounded-3xl border border-white/10 bg-slate-950/50 p-5">
                        <h3 class="text-lg font-semibold text-white">Plus de pilotage</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-300">Oppdrag.tech reste un point d’appui entre le besoin initial, la qualification et la mission réelle.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section-fade mx-auto max-w-7xl px-6 py-20 lg:px-8" aria-labelledby="faq-contact-title">
        <div class="grid gap-6 lg:grid-cols-[1.1fr_.9fr]">
            <div class="min-w-0 card-panel rounded-[2rem] p-8" data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Questions fréquentes</p>
                <h2 id="faq-contact-title" class="mt-4 text-3xl font-bold text-white">Les questions que les entreprises nous posent le plus souvent</h2>

                <div class="mt-8 space-y-4">
                    @foreach ($faqs as $faq)
                        <article class="rounded-3xl border border-white/10 bg-slate-950/60 p-5">
                            <h3 class="text-lg font-semibold text-white">{{ $faq['question'] }}</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-300">{{ $faq['answer'] }}</p>
                        </article>
                    @endforeach
                </div>

                <a href="{{ route('faq') }}" class="btn-light mt-8">
                    Consulter la FAQ complète
                </a>
            </div>

            <section id="contact" class="min-w-0 glass-panel rounded-[2rem] p-8" aria-labelledby="contact-title" data-reveal style="--reveal-delay: 80ms;">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Contact</p>
                <h2 id="contact-title" class="mt-4 text-3xl font-bold text-white">Parlons de votre mission</h2>
                <p class="mt-4 text-sm leading-7 text-slate-300">
                    Décrivez brièvement votre besoin. Nous revenons vers vous avec le bon niveau de cadrage et le format d’intervention adapté.
                </p>

                @if (session('success'))
                    <p class="mt-6 rounded-2xl border border-emerald-400/30 bg-emerald-400/10 px-4 py-3 text-sm font-medium text-emerald-200" role="status">
                        {{ session('success') }}
                    </p>
                @endif

                @if ($errors->contact->any())
                    <div class="mt-6 rounded-2xl border border-rose-400/30 bg-rose-400/10 px-4 py-3 text-sm text-rose-100" role="alert">
                        <p class="font-semibold">Le formulaire contient des informations à corriger.</p>
                        <ul class="mt-2 space-y-1">
                            @foreach ($errors->contact->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}" class="mt-8 space-y-5">
                    @csrf

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="mb-2 block text-sm font-medium text-slate-200">Nom et prénom</label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name" class="field-input" placeholder="Nom et prénom">
                        </div>

                        <div>
                            <label for="email" class="mb-2 block text-sm font-medium text-slate-200">Email professionnel</label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required inputmode="email" autocomplete="email" class="field-input" placeholder="nom@entreprise.fr">
                        </div>
                    </div>

                    <div>
                        <label for="need" class="mb-2 block text-sm font-medium text-slate-200">Votre besoin</label>
                        <select id="need" name="need" required class="field-input">
                            <option value="" disabled {{ old('need') ? '' : 'selected' }}>Sélectionnez une option</option>
                            <option value="Mission freelance" @selected(old('need') === 'Mission freelance')>Mission freelance</option>
                            <option value="Pack preuve de concept" @selected(old('need') === 'Pack preuve de concept')>Pack preuve de concept</option>
                            <option value="Équipe dédiée pilotée" @selected(old('need') === 'Équipe dédiée pilotée')>Équipe dédiée pilotée</option>
                            <option value="Autre besoin" @selected(old('need') === 'Autre besoin')>Autre besoin</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="mb-2 block text-sm font-medium text-slate-200">Décrivez votre contexte</label>
                        <textarea id="message" name="message" rows="6" required autocomplete="on" class="field-input" placeholder="Décrivez le contexte, les expertises recherchées, les contraintes et l’horizon de démarrage.">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn-primary w-full sm:w-auto">
                        Envoyer ma demande
                    </button>
                </form>
            </section>
        </div>
    </section>
@endsection
