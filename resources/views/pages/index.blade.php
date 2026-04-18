@extends('layouts.marketing')

@section('title', 'La référence technique de l’ingénierie des données | oppdrag.tech')
@section('meta_description', 'Déploiement rapide. Sélection exigeante. Suivi rigoureux.')
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
                'badge' => 'Idéal pour arbitrer vite',
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
            ['value' => '48 h', 'label' => 'pour cadrer, qualifier et verrouiller le besoin.'],
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
                'items' => ['IA générative', 'Data science', 'Industrialisation IA', 'Ingénierie des données', 'Sécurité cloud', 'IAM / sécurité applicative'],
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
                'title' => 'Développeur IA',
                'text' => "Concevoir et industrialiser des solutions IA end-to-end, du pipeline de données à la mise en production en posant les standards MLOps, LLMOps et d’ingénierie logicielle qui garantissent fiabilité, scalabilité et conformité RGPD.",
                'outcome' => 'Décision plus rapide, dette d’architecture évitée',
            ],
            [
                'label' => 'Data science',
                'title' => 'Data Engineer',
                'text' => "Explorer et analyser des signaux data pour qualifier la faisabilité de nouveaux concepts IA, prototyper les cas d’usage les plus prometteurs, et garantir la transmissibilité des livrables vers les équipes d’industrialisation.",
                'outcome' => 'Capacité d’exécution renforcée sans ralentir les équipes',
            ],
            [
                'label' => 'Cybersécurité',
                'title' => 'Pentester',
                'text' => "Piloter la posture de sécurité opérationnelle via l’analyse de risque, IAM/PAM, tests d’intrusion et sécurisation des migrations cloud AWS/OVH dans un cadre réglementaire exigeant (LPM, DORA et NIST).",
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

        $signals = ['Définition du besoin', 'Sélection exigeante', 'Cadre et conformité RGPD', 'Lancement de la mission'];

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
                'author' => 'Responsable pôle Recherche & Développement, MedTech',
            ],
            [
                'quote' => 'Nous avions besoin d’un niveau senior immédiatement crédible en cybersécurité. La sélection était courte, défendable, et le suivi a évité les frictions classiques des renforts externes.',
                'author' => 'Responsable Gestion des Incidents & Réponse, Secteur bancaire',
            ],
            [
                'quote' => 'Le vrai différenciateur a été la discipline de qualification. Avant de parler de profils, nous avions déjà une hypothèse d’exécution et un cadre de gouvernance clair.',
                'author' => 'Lead Data Scientist, Secteur public',
            ],
        ];

        $faqs = [
            ['question' => 'En combien de temps pouvez-vous proposer un expert ?', 'answer' => 'Oppdrag.tech se positionne sur un déploiement sous 5 jours, selon la clarté du besoin et le niveau de spécialisation attendu.'],
            ['question' => 'Travaillez-vous uniquement avec des freelances ?', 'answer' => 'Le cœur de l’offre repose sur des experts indépendants, mais nous pouvons aussi cadrer des formats plus structurés et des équipes dédiées.'],
            ['question' => 'Comment gérez-vous la confidentialité et le RGPD ?', 'answer' => 'La confidentialité, le traitement des données et la conformité sont intégrés au cadrage de mission avant le démarrage opérationnel.'],
        ];
    @endphp

    <style>
        .home-premium {
            --home-line-soft: rgba(148, 163, 184, 0.1);
            --home-line-strong: rgba(148, 163, 184, 0.14);
        }

        .home-premium .hero-shell {
            border-color: rgba(148, 163, 184, 0.12);
            background:
                linear-gradient(155deg, rgba(8, 17, 31, 0.95), rgba(10, 17, 31, 0.82)),
                radial-gradient(circle at top left, rgba(94, 234, 212, 0.1), transparent 24%);
            box-shadow:
                0 30px 84px rgba(2, 8, 23, 0.38),
                inset 0 1px 0 rgba(255, 255, 255, 0.05);
        }

        .home-premium .hero-grid {
            opacity: 0.34 !important;
        }

        .home-premium .noise-mask {
            opacity: 0.08;
        }

        .home-premium .ambient-orb {
            opacity: 0.42;
            filter: blur(22px);
        }

        .home-premium .bento-card,
        .home-premium .interaction-card,
        .home-premium .card-panel,
        .home-premium .glass-panel,
        .home-premium .governance-card,
        .home-premium .qualification-shell,
        .home-premium .governance-shell {
            border-color: var(--home-line-soft);
            box-shadow: 0 10px 28px rgba(2, 8, 23, 0.12);
        }

        .home-premium .bento-card,
        .home-premium .interaction-card,
        .home-premium .card-panel,
        .home-premium .glass-panel,
        .home-premium .governance-card,
        .home-premium .qualification-shell,
        .home-premium .governance-shell {
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.78), rgba(8, 17, 31, 0.7));
        }

        .home-premium section[aria-labelledby="profiles-title"],
        .home-premium section[aria-labelledby="governance-title"],
        .home-premium section[aria-labelledby="outcomes-title"],
        .home-premium section[aria-labelledby="faq-contact-title"] {
            background: transparent !important;
        }

        .home-premium section[aria-labelledby="manifesto-title"] {
            background:
                linear-gradient(180deg, rgba(255, 255, 255, 0.025), rgba(255, 255, 255, 0.012)),
                radial-gradient(circle at top, rgba(94, 234, 212, 0.05), transparent 34%) !important;
        }

        .home-premium section[aria-labelledby="coverage-title"],
        .home-premium section[aria-labelledby="impact-title"] {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.008)) !important;
        }

        .home-premium .case-study-hero,
        .home-premium .mission-console,
        .home-premium .manifesto-shell {
            background:
                linear-gradient(180deg, rgba(8, 17, 31, 0.9), rgba(15, 23, 42, 0.8)),
                radial-gradient(circle at top left, rgba(94, 234, 212, 0.07), transparent 28%);
            border-color: var(--home-line-strong);
            box-shadow: 0 20px 46px rgba(2, 8, 23, 0.22);
        }

        .home-premium .bento-card:hover,
        .home-premium .bento-card:focus-within,
        .home-premium .profile-card:hover,
        .home-premium .profile-card:focus-within,
        .home-premium .use-case-card:hover,
        .home-premium .use-case-card:focus-within {
            transform: translateY(-1px);
            box-shadow: 0 14px 34px rgba(2, 8, 23, 0.16);
        }

        .home-premium .profile-card {
            border-color: var(--home-line-soft);
            box-shadow: 0 16px 38px rgba(2, 8, 23, 0.16);
        }

        .home-premium .profile-card-image {
            filter: blur(10px) saturate(0.86) brightness(0.82);
        }

        .home-premium .tech-pill-card,
        .home-premium .case-study-pill,
        .home-premium .console-chip,
        .home-premium .use-case-tag {
            border-color: rgba(148, 163, 184, 0.14);
        }

        .home-premium .tech-pill-card,
        .home-premium .case-study-pill,
        .home-premium .console-chip {
            background: rgba(8, 17, 31, 0.58);
        }

        .home-premium .tech-pill-card {
            gap: 0.9rem;
            padding: 0.7rem 1.05rem 0.7rem 0.8rem;
        }

        .home-premium .tech-pill-logo {
            width: 2.75rem;
            height: 2.75rem;
            padding: 0.45rem;
            border-radius: 1rem;
            background: rgb(255 255 255 / 0.98);
        }

        .home-premium .tech-pill-logo-image {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
        }

        .home-premium .btn-primary,
        .home-premium .btn-secondary,
        .home-premium .btn-light {
            box-shadow: none;
        }

        .home-premium .btn-primary:hover,
        .home-premium .btn-primary:focus-visible,
        .home-premium .btn-light:hover,
        .home-premium .btn-light:focus-visible {
            box-shadow: 0 14px 30px rgba(15, 23, 42, 0.2);
        }

        .home-premium .field-input {
            background: rgba(255, 255, 255, 0.04);
        }

        .home-premium .field-input:focus {
            background: rgba(15, 23, 42, 0.84);
        }

        .home-premium .manifesto-raceway {
            position: relative;
            margin-top: 2rem;
            overflow: hidden;
            border-top: 1px solid rgba(148, 163, 184, 0.12);
            padding-top: 1rem;
        }

        .home-premium .manifesto-qualification-stage {
            position: relative;
            margin-top: 2rem;
            min-height: 7rem;
            overflow: hidden;
            border-top: 1px solid rgba(148, 163, 184, 0.12);
            padding-top: 0.75rem;
        }

        .home-premium .manifesto-raceway::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 1.8rem;
            height: 1px;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.08), rgba(94, 234, 212, 0.28), rgba(255, 255, 255, 0.08));
        }

        .home-premium .manifesto-raceway::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 2.15rem;
            height: 0.35rem;
            background-image: radial-gradient(circle, rgba(148, 163, 184, 0.42) 0.08rem, transparent 0.09rem);
            background-size: 1.1rem 0.35rem;
            opacity: 0.5;
        }

        .home-premium .manifesto-racecar {
            position: relative;
            width: 8rem;
            max-width: 24vw;
            color: #d9f8f2;
            filter: drop-shadow(0 10px 18px rgba(8, 145, 178, 0.2));
            transform: translateX(-18%);
            animation: manifesto-racecar-run 3.6s cubic-bezier(0.55, 0.02, 0.78, 0.2) infinite;
            will-change: transform;
        }

        .home-premium .manifesto-racecar svg {
            display: block;
            width: 100%;
            height: auto;
        }

        .home-premium .profiles-scout {
            position: relative;
            margin-top: 2rem;
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.12);
            border-radius: 1.5rem;
            background:
                linear-gradient(180deg, rgba(8, 17, 31, 0.72), rgba(15, 23, 42, 0.6)),
                radial-gradient(circle at top left, rgba(94, 234, 212, 0.08), transparent 32%);
            padding: 1rem 1rem 1.15rem;
        }

        .home-premium .profiles-scout::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(255, 255, 255, 0.03), transparent 22%),
                radial-gradient(circle at 82% 24%, rgba(103, 232, 249, 0.08), transparent 22%);
            pointer-events: none;
        }

        .home-premium .profiles-scout-stage {
            position: relative;
            z-index: 1;
            min-height: 12rem;
        }

        .home-premium .profiles-scout-radar {
            position: relative;
            overflow: hidden;
            width: 9rem;
            height: 9rem;
            border-radius: 9999px;
            border: 1px solid rgba(148, 163, 184, 0.14);
            background:
                radial-gradient(circle, rgba(15, 23, 42, 0.9), rgba(8, 17, 31, 0.75)),
                linear-gradient(180deg, rgba(255, 255, 255, 0.04), transparent);
        }

        .home-premium .profiles-scout-radar::before,
        .home-premium .profiles-scout-radar::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
        }

        .home-premium .profiles-scout-radar::before {
            background:
                radial-gradient(circle, transparent 0 28%, rgba(148, 163, 184, 0.18) 28% 29%, transparent 29% 48%, rgba(148, 163, 184, 0.14) 48% 49%, transparent 49% 68%, rgba(148, 163, 184, 0.12) 68% 69%, transparent 69%),
                linear-gradient(90deg, transparent calc(50% - 0.5px), rgba(148, 163, 184, 0.14) calc(50% - 0.5px) calc(50% + 0.5px), transparent calc(50% + 0.5px)),
                linear-gradient(180deg, transparent calc(50% - 0.5px), rgba(148, 163, 184, 0.14) calc(50% - 0.5px) calc(50% + 0.5px), transparent calc(50% + 0.5px));
        }

        .home-premium .profiles-scout-radar::after {
            background: conic-gradient(from 0deg, rgba(94, 234, 212, 0.34), rgba(94, 234, 212, 0) 18%);
            animation: profiles-scout-sweep 3.6s linear infinite;
            transform-origin: center;
        }

        .home-premium .profiles-scout-ping {
            position: absolute;
            width: 0.55rem;
            height: 0.55rem;
            border-radius: 9999px;
            background: #67e8f9;
            box-shadow: 0 0 0 0 rgba(103, 232, 249, 0.35);
            animation: profiles-scout-ping 2.2s ease-out infinite;
        }

        .home-premium .profiles-scout-ping:nth-child(1) {
            top: 26%;
            left: 58%;
        }

        .home-premium .profiles-scout-ping:nth-child(2) {
            top: 62%;
            left: 34%;
            animation-delay: 0.8s;
        }

        .home-premium .profiles-scout-ping:nth-child(3) {
            top: 42%;
            left: 24%;
            animation-delay: 1.4s;
        }

        .home-premium .profiles-scout-connector {
            position: absolute;
            left: 8.75rem;
            top: 5.2rem;
            right: 1rem;
            height: 1px;
            background: linear-gradient(90deg, rgba(94, 234, 212, 0.5), rgba(94, 234, 212, 0.12));
        }

        .home-premium .profiles-scout-connector::before,
        .home-premium .profiles-scout-connector::after {
            content: '';
            position: absolute;
            width: 0.45rem;
            height: 0.45rem;
            border-radius: 9999px;
            background: #5eead4;
            top: 50%;
            transform: translateY(-50%);
        }

        .home-premium .profiles-scout-connector::before {
            left: 0;
        }

        .home-premium .profiles-scout-connector::after {
            right: 0;
        }

        @keyframes manifesto-racecar-run {
            0% {
                transform: translateX(-18%) translateY(0);
            }

            46% {
                transform: translateX(92%) translateY(-1px);
            }

            50% {
                transform: translateX(92%) scaleX(-1) translateY(-1px);
            }

            99% {
                transform: translateX(-18%) scaleX(-1) translateY(0);
            }

            100% {
                transform: translateX(-18%) translateY(0);
            }
        }

        @keyframes profiles-scout-sweep {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes profiles-scout-ping {
            0%,
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(103, 232, 249, 0.35);
            }

            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 0.9rem rgba(103, 232, 249, 0);
            }
        }

        .home-premium .qualification-shell {
            position: relative;
            overflow: hidden;
        }

        .home-premium .qualification-crash-lane {
            pointer-events: none;
            position: absolute;
            inset: 0;
            z-index: 4;
            overflow: hidden;
        }

        .home-premium .qualification-crash-lane::before {
            content: '';
            position: absolute;
            inset: 0;
            opacity: 0;
            background:
                radial-gradient(circle at 88% 24%, rgba(251, 191, 36, 0.22), transparent 12%),
                radial-gradient(circle at 90% 28%, rgba(251, 146, 60, 0.18), transparent 18%);
            animation: qualification-impact-flash 2.8s linear infinite;
        }

        .home-premium .qualification-crash-car {
            position: absolute;
            top: 1.4rem;
            left: -8.5rem;
            width: 8.5rem;
            color: #d9f8f2;
            filter: drop-shadow(0 14px 20px rgba(8, 145, 178, 0.24));
            animation: qualification-crash-run 2.8s cubic-bezier(0.8, 0, 0.22, 1) infinite;
            transform-origin: center;
            will-change: transform, opacity;
        }

        .home-premium .qualification-crash-car svg {
            display: block;
            width: 100%;
            height: auto;
        }

        .home-premium .qualification-crash-sparks {
            position: absolute;
            top: 0.6rem;
            right: -0.6rem;
            width: 11rem;
            height: 11rem;
            opacity: 0;
            animation: qualification-crash-sparks 2.8s linear infinite;
        }

        .home-premium .qualification-crash-sparks::before,
        .home-premium .qualification-crash-sparks::after {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 50% 50%, rgba(255, 245, 157, 0.95) 0 0.6rem, rgba(251, 191, 36, 0.78) 0.61rem 1.2rem, transparent 1.22rem),
                radial-gradient(circle at 18% 36%, rgba(250, 204, 21, 0.92) 0 0.22rem, transparent 0.24rem),
                radial-gradient(circle at 74% 22%, rgba(251, 146, 60, 0.92) 0 0.24rem, transparent 0.26rem),
                radial-gradient(circle at 80% 68%, rgba(253, 224, 71, 0.9) 0 0.18rem, transparent 0.2rem),
                radial-gradient(circle at 28% 78%, rgba(251, 113, 133, 0.7) 0 0.16rem, transparent 0.18rem);
        }

        .home-premium .qualification-crash-sparks::after {
            background:
                conic-gradient(from 0deg, rgba(251, 191, 36, 0) 0deg 12deg, rgba(251, 191, 36, 0.9) 12deg 20deg, rgba(251, 191, 36, 0) 20deg 50deg, rgba(251, 146, 60, 0.92) 50deg 60deg, rgba(251, 146, 60, 0) 60deg 95deg, rgba(253, 224, 71, 0.9) 95deg 104deg, rgba(253, 224, 71, 0) 104deg 150deg, rgba(251, 113, 133, 0.8) 150deg 158deg, rgba(251, 113, 133, 0) 158deg 220deg, rgba(250, 204, 21, 0.9) 220deg 230deg, rgba(250, 204, 21, 0) 230deg 300deg, rgba(255, 245, 157, 0.85) 300deg 310deg, rgba(255, 245, 157, 0) 310deg 360deg);
            mask: radial-gradient(circle, transparent 0 1rem, black 1.05rem);
            transform: rotate(16deg) scale(1.05);
            opacity: 0.88;
        }

        .home-premium .qualification-crash-smoke {
            position: absolute;
            top: 0.25rem;
            right: -0.8rem;
            width: 12rem;
            height: 7rem;
            opacity: 0;
            filter: blur(2px);
            animation: qualification-crash-smoke 2.8s linear infinite;
        }

        .home-premium .qualification-crash-smoke::before,
        .home-premium .qualification-crash-smoke::after {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 72% 48%, rgba(226, 232, 240, 0.22), transparent 22%),
                radial-gradient(circle at 58% 42%, rgba(148, 163, 184, 0.24), transparent 26%),
                radial-gradient(circle at 82% 54%, rgba(148, 163, 184, 0.18), transparent 20%);
        }

        .home-premium .qualification-crash-smoke::after {
            transform: scale(1.08) translateX(-0.4rem);
            opacity: 0.7;
        }

        @keyframes qualification-crash-run {
            0% {
                transform: translateX(0) translateY(0) rotate(0deg) scale(1);
                opacity: 0;
            }

            8% {
                opacity: 1;
            }

            62% {
                transform: translateX(23rem) translateY(0) rotate(0deg) scale(1);
                opacity: 1;
            }

            76% {
                transform: translateX(31rem) translateY(0.1rem) rotate(6deg) scale(0.98);
                opacity: 1;
            }

            84% {
                transform: translateX(35rem) translateY(0.5rem) rotate(24deg) scale(0.96);
                opacity: 1;
            }

            90% {
                transform: translateX(37.4rem) translateY(0.9rem) rotate(112deg) scale(0.84);
                opacity: 1;
            }

            100% {
                transform: translateX(37.4rem) translateY(0.9rem) rotate(112deg) scale(0.84);
                opacity: 0;
            }
        }

        @keyframes qualification-crash-sparks {
            0%,
            74%,
            100% {
                opacity: 0;
                transform: scale(0.2);
            }

            82% {
                opacity: 1;
                transform: scale(0.7);
            }

            90% {
                opacity: 1;
                transform: scale(1.2);
            }

            100% {
                opacity: 0;
                transform: scale(1.9);
            }
        }

        @keyframes qualification-crash-smoke {
            0%,
            80%,
            100% {
                opacity: 0;
                transform: translateX(0) scale(0.86);
            }

            88% {
                opacity: 0.8;
                transform: translateX(-0.2rem) scale(0.96);
            }

            100% {
                opacity: 0.34;
                transform: translateX(-1.1rem) scale(1.2);
            }
        }

        @keyframes qualification-impact-flash {
            0%,
            82%,
            100% {
                opacity: 0;
            }

            88% {
                opacity: 1;
            }

            94% {
                opacity: 0.65;
            }
        }

        @media (max-width: 768px) {
            .home-premium .case-study-hero,
            .home-premium .mission-console,
            .home-premium .manifesto-shell,
            .home-premium .hero-shell {
                box-shadow: 0 18px 40px rgba(2, 8, 23, 0.22);
            }

            .home-premium .profiles-scout-stage {
                min-height: 15rem;
            }

            .home-premium .profiles-scout-radar {
                width: 7.25rem;
                height: 7.25rem;
            }

            .home-premium .profiles-scout-connector {
                left: 7rem;
                top: 4.2rem;
                right: 0.75rem;
            }

            .home-premium .qualification-crash-car {
                top: 1.1rem;
                width: 6.25rem;
            }

            .home-premium .qualification-crash-sparks {
                top: 0.8rem;
                right: -1rem;
                width: 7rem;
                height: 7rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .home-premium .manifesto-racecar {
                animation: none;
                transform: translateX(0);
            }

            .home-premium .profiles-scout-radar::after,
            .home-premium .profiles-scout-ping {
                animation: none;
            }

            .home-premium .qualification-crash-car,
            .home-premium .qualification-crash-sparks,
            .home-premium .qualification-crash-smoke {
                animation: none;
                opacity: 0;
            }
        }
    </style>

    <div class="home-premium">
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
                            Structurer, sécuriser et déployer
                            <span class="bg-gradient-to-r from-cyan-100 via-white to-teal-100 bg-clip-text text-transparent">vos missions IA, data et cybersécurité avec le niveau d’exigence qu’ils requièrent.</span>
                        </h1>

                        <p class="mt-8 max-w-2xl text-lg leading-8 text-slate-300" data-reveal style="--reveal-delay: 120ms;">
                            Oppdrag.tech s'intercale entre l'urgence opérationnelle et l'exigence de gouvernance dans le but de concilier vitesse et conformité.
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
                                        <h2 class="mt-3 text-2xl font-bold text-white">Un accompagnement de bout en bout, avant, pendant et après la sélection.</h2>
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
                                <p class="mt-3 text-sm leading-7 text-slate-300">Oppdrag.tech reverse 3 % de ses bénéfices à l’ONaCVG et défend une approche liant rigueur d’exécution et responsabilité sociétale en favorisant également l’insertion de profils issus de minorités ou de parcours atypiques.</p>
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
                <h2 id="profiles-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Un vivier pluridisciplinaire d'experts qualifiés.</h2>
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
                    <div class="manifesto-qualification-stage" aria-hidden="true">
                        <div class="qualification-crash-lane">
                            <div class="qualification-crash-car">
                                <svg viewBox="0 0 420 120" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation">
                                    <path d="M77 74H131L168 45H253L287 74H335L352 85H385V98H347L332 109H290L280 98H142L132 109H82L73 98H34V85H62L77 74Z" fill="currentColor"/>
                                    <path d="M171 45L204 21H262L250 45H171Z" fill="#67E8F9"/>
                                    <path d="M153 54H277L296 73H134L153 54Z" fill="#5EEAD4"/>
                                    <path d="M57 74H96L80 90H34L57 74Z" fill="#99F6E4"/>
                                    <path d="M319 74H362L386 90H336L319 74Z" fill="#99F6E4"/>
                                    <rect x="198" y="32" width="40" height="11" rx="5.5" fill="#082F49"/>
                                    <circle cx="108" cy="97" r="18" fill="#020617"/>
                                    <circle cx="108" cy="97" r="9" fill="#94A3B8"/>
                                    <circle cx="306" cy="97" r="18" fill="#020617"/>
                                    <circle cx="306" cy="97" r="9" fill="#94A3B8"/>
                                    <path d="M13 83H48V92H0L13 83Z" fill="#E2E8F0" fill-opacity=".7"/>
                                    <path d="M372 83H407L420 92H372V83Z" fill="#E2E8F0" fill-opacity=".7"/>
                                </svg>
                            </div>
                            <div class="qualification-crash-sparks"></div>
                            <div class="qualification-crash-smoke"></div>
                        </div>
                    </div>
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
        <div class="grid gap-8 lg:grid-cols-[0.84fr_1.16fr] lg:items-start">
            <div class="max-w-2xl" data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Offres</p>
                <h2 id="offers-title" class="mt-4 max-w-2xl text-balance text-3xl font-bold text-white md:text-5xl">Des formats d’intervention pensés pour des sujets qui demandent plus qu’un simple staffing.</h2>
            </div>
            <div class="card-panel rounded-[2rem] p-5 md:p-6" data-reveal style="--reveal-delay: 70ms;">
                <figure class="overflow-hidden rounded-[1.4rem] border border-white/10 bg-white/[0.03] p-2">
                    <img
                        src="{{ asset('Images/pexels-kindelmedia-7651734.jpg') }}"
                        alt="Équipe analysant des graphiques et des documents autour de plusieurs ordinateurs portables"
                        class="h-28 w-full rounded-[1rem] object-cover object-center md:h-32 lg:h-36"
                        loading="lazy"
                        decoding="async"
                        width="1000"
                        height="750"
                    >
                </figure>
                <div class="h-px w-16 bg-gradient-to-r from-teal-300/70 to-transparent" aria-hidden="true"></div>
                <p class="mt-5 max-w-3xl text-lg leading-8 text-slate-300">
                    Chaque format combine vitesse de mobilisation, niveau de seniorité, cadre opérationnel et responsabilité claire. L’objectif n’est pas de vendre une présence, mais de rendre la mission tenable et utile.
                </p>
            </div>
        </div>

        <div class="mt-12 grid gap-6 xl:grid-cols-3">
            @foreach ($offers as $offer)
                <article class="{{ $offer['highlight'] ? 'border-teal-300/30 bg-gradient-to-b from-teal-300/10 to-white/5 ring-1 ring-teal-300/15' : 'card-panel' }} bento-card flex h-full flex-col rounded-[2rem] border p-8 shadow-lg shadow-slate-950/15" data-reveal style="--reveal-delay: {{ $loop->index * 70 }}ms;">
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold text-white">{{ $offer['title'] }}</h3>
                        <p class="mt-3 text-sm font-medium uppercase tracking-[0.18em] text-teal-100">{{ $offer['price'] }}</p>

                        <p class="mt-6 text-sm leading-7 text-slate-300">{{ $offer['description'] }}</p>

                        <ul class="mt-6 space-y-3 text-sm text-slate-200">
                            @foreach ($offer['items'] as $item)
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 h-2.5 w-2.5 rounded-full bg-teal-300" aria-hidden="true"></span>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

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
        @php
            $consoleMeta = [
                'brief' => [
                    'status' => 'Cadrage en cours',
                    'signal' => 'Besoin défini',
                    'clarity' => 'Élevée',
                    'risk' => 'Faible',
                    'compliance' => 'Confidentialité cadrée',
                ],
                'matching' => [
                    'status' => 'Sélection active',
                    'signal' => 'Périmètre clarifié',
                    'clarity' => 'Défendable',
                    'risk' => 'Sous contrôle',
                    'compliance' => 'Exposition minimale',
                ],
                'launch' => [
                    'status' => 'Lancement prêt',
                    'signal' => 'Entrée exploitable',
                    'clarity' => 'Opérationnelle',
                    'risk' => 'Encadré',
                    'compliance' => 'Cadre validé',
                ],
            ];
        @endphp

        <style>
            .mission-console-premium {
                position: relative;
                overflow: hidden;
                isolation: isolate;
            }

            .mission-console-premium::before {
                content: "";
                position: absolute;
                inset: 0;
                border-radius: inherit;
                pointer-events: none;
                background:
                    radial-gradient(circle at 15% 18%, rgba(94, 234, 212, 0.12), transparent 22%),
                    radial-gradient(circle at 84% 14%, rgba(56, 189, 248, 0.12), transparent 26%),
                    linear-gradient(180deg, rgba(255, 255, 255, 0.02), transparent 30%);
                opacity: 0.9;
            }

            .mission-console-premium::after {
                content: "";
                position: absolute;
                inset: 0;
                border-radius: inherit;
                pointer-events: none;
                background-image:
                    linear-gradient(rgba(148, 163, 184, 0.04) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(148, 163, 184, 0.04) 1px, transparent 1px);
                background-size: 34px 34px;
                mask-image: linear-gradient(180deg, rgba(255, 255, 255, 0.42), transparent 88%);
                opacity: 0.45;
            }

            .console-tabs-shell {
                position: relative;
                z-index: 1;
            }

            .console-chip-premium {
                position: relative;
                z-index: 1;
                transition:
                    transform 220ms ease,
                    border-color 220ms ease,
                    background-color 220ms ease,
                    box-shadow 220ms ease,
                    color 220ms ease;
            }

            .console-chip-premium:hover,
            .console-chip-premium:focus-visible {
                transform: translateY(-2px);
            }

            .console-chip-premium[aria-pressed='true'] {
                box-shadow: 0 0 0 1px rgba(94, 234, 212, 0.08), 0 10px 30px rgba(45, 212, 191, 0.12);
            }

            .console-progress {
                position: relative;
                margin-top: 1rem;
                height: 0.4rem;
                overflow: hidden;
                border-radius: 9999px;
                background: rgba(148, 163, 184, 0.12);
            }

            .console-progress::before {
                content: "";
                position: absolute;
                inset: 0;
                background: linear-gradient(90deg, rgba(94, 234, 212, 0.08), rgba(56, 189, 248, 0.06));
            }

            .console-progress-indicator {
                position: absolute;
                top: 0;
                bottom: 0;
                width: calc((100% - 0.5rem) / 3);
                border-radius: inherit;
                background: linear-gradient(90deg, rgba(94, 234, 212, 0.95), rgba(56, 189, 248, 0.72));
                box-shadow: 0 0 20px rgba(45, 212, 191, 0.28);
                transform: translateX(0);
                transition: transform 320ms ease, opacity 220ms ease;
            }

            .mission-console-premium[data-console-stage='matching'] .console-progress-indicator {
                transform: translateX(calc(100% + 0.25rem));
            }

            .mission-console-premium[data-console-stage='launch'] .console-progress-indicator {
                transform: translateX(calc((100% + 0.25rem) * 2));
            }

            .console-topline {
                position: relative;
                z-index: 1;
            }

            .console-status-pill {
                border: 1px solid rgba(94, 234, 212, 0.18);
                background: rgba(94, 234, 212, 0.08);
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.04);
            }

            .console-stage-premium {
                position: relative;
                overflow: hidden;
                transform-origin: top center;
                transition: transform 280ms ease, opacity 220ms ease;
            }

            .console-stage-premium.is-active {
                animation: console-panel-enter 320ms ease;
            }

            .console-stage-premium::before {
                content: "";
                position: absolute;
                inset: 0;
                border-radius: inherit;
                pointer-events: none;
                background:
                    radial-gradient(circle at top right, rgba(94, 234, 212, 0.1), transparent 24%),
                    linear-gradient(180deg, rgba(255, 255, 255, 0.03), transparent 26%);
                opacity: 0.85;
            }

            .console-stage-premium::after {
                content: "";
                position: absolute;
                inset: 1px;
                border-radius: inherit;
                pointer-events: none;
                border: 1px solid rgba(255, 255, 255, 0.04);
            }

            .console-signal-card {
                border: 1px solid rgba(148, 163, 184, 0.1);
                background: linear-gradient(180deg, rgba(2, 6, 23, 0.46), rgba(15, 23, 42, 0.28));
            }

            .console-meta-grid {
                display: grid;
                gap: 0.75rem;
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .console-meta-item {
                border: 1px solid rgba(148, 163, 184, 0.1);
                background: rgba(255, 255, 255, 0.03);
                transition: transform 220ms ease, border-color 220ms ease, background-color 220ms ease;
            }

            .console-stage-premium.is-active .console-meta-item {
                border-color: rgba(94, 234, 212, 0.14);
            }

            .console-output-card {
                position: relative;
                overflow: hidden;
                border: 1px solid rgba(125, 211, 252, 0.14);
                background:
                    linear-gradient(180deg, rgba(8, 17, 31, 0.8), rgba(15, 23, 42, 0.72)),
                    radial-gradient(circle at top left, rgba(56, 189, 248, 0.08), transparent 28%);
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.04);
            }

            .console-output-card::before {
                content: "";
                position: absolute;
                inset: 0;
                pointer-events: none;
                background: linear-gradient(180deg, rgba(125, 211, 252, 0.06), transparent 36%);
            }

            .console-output-item {
                opacity: 0.72;
                transform: translateY(6px);
                transition: opacity 260ms ease, transform 260ms ease;
            }

            .console-stage-premium.is-active .console-output-item {
                opacity: 1;
                transform: translateY(0);
            }

            .console-stage-premium.is-active .console-output-item:nth-child(1) {
                transition-delay: 40ms;
            }

            .console-stage-premium.is-active .console-output-item:nth-child(2) {
                transition-delay: 90ms;
            }

            .console-stage-premium.is-active .console-output-item:nth-child(3) {
                transition-delay: 140ms;
            }

            @keyframes console-panel-enter {
                0% {
                    opacity: 0;
                    transform: translateY(10px) scale(0.992);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            @media (prefers-reduced-motion: reduce) {
                .console-chip-premium,
                .console-progress-indicator,
                .console-stage-premium,
                .console-output-item,
                .console-meta-item {
                    transition: none;
                    animation: none;
                }

                .console-chip-premium:hover,
                .console-chip-premium:focus-visible {
                    transform: none;
                }
            }
        </style>

        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
            <div data-reveal>
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Pilotage de mission</p>
                <h2 id="console-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Une démonstration simple de notre logique d’exécution.</h2>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Cette vue synthétise la façon dont oppdrag.tech transforme un besoin flou en mission exploitable. Le sujet n’est pas d’en faire plus, mais d’éliminer les angles morts avant le lancement.
                </p>
            </div>

            <section class="mission-console mission-console-premium rounded-[2rem] p-6 md:p-8" data-console data-console-stage="brief" data-reveal style="--reveal-delay: 80ms;">
                <div class="console-topline mb-5 flex flex-wrap items-center justify-between gap-3">
                    <div class="flex items-center gap-3">
                        <span class="inline-flex h-2.5 w-2.5 rounded-full bg-teal-300 shadow-[0_0_0_6px_rgba(94,234,212,0.12)]" aria-hidden="true"></span>
                        <p class="text-[11px] font-semibold uppercase tracking-[0.24em] text-slate-300">Cockpit d’exécution</p>
                    </div>
                </div>

                <div class="console-tabs-shell">
                    <div class="flex flex-wrap gap-3">
                    @foreach ($consoleStages as $stage)
                        <button
                            type="button"
                            class="console-chip console-chip-premium rounded-full px-4 py-2 text-sm font-semibold"
                            data-console-trigger="{{ $stage['key'] }}"
                            aria-pressed="{{ $loop->first ? 'true' : 'false' }}"
                        >
                            {{ $stage['label'] }}
                        </button>
                    @endforeach
                    </div>
                    <div class="console-progress" aria-hidden="true">
                        <span class="console-progress-indicator"></span>
                    </div>
                </div>

                <div class="mt-6 grid gap-4 lg:grid-cols-[1.05fr_.95fr]">
                    @foreach ($consoleStages as $stage)
                        @php
                            $meta = $consoleMeta[$stage['key']] ?? [
                                'status' => 'Étape active',
                                'signal' => 'Signal utile',
                                'clarity' => 'Lisible',
                                'risk' => 'Sous contrôle',
                                'compliance' => 'Cadre tenu',
                            ];
                        @endphp
                        <article class="console-stage console-stage-premium {{ $loop->first ? 'is-active' : '' }} rounded-[1.6rem] p-6 lg:col-span-2" data-console-panel="{{ $stage['key'] }}">
                            <div class="grid gap-5 md:grid-cols-[1.15fr_.85fr] md:items-start">
                                <div>
                                    <div class="flex flex-wrap items-center gap-3">
                                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">{{ $stage['metric'] }}</p>
                                        <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.05] px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.18em] text-slate-200">
                                            <span class="h-2 w-2 rounded-full bg-cyan-200" aria-hidden="true"></span>
                                            {{ $meta['status'] }}
                                        </span>
                                    </div>
                                    <h3 class="mt-4 text-2xl font-bold text-white">{{ $stage['title'] }}</h3>
                                    <p class="mt-4 text-sm leading-7 text-slate-300">{{ $stage['text'] }}</p>

                                    <div class="console-signal-card mt-6 rounded-[1.25rem] px-4 py-4">
                                        <div class="flex items-center justify-between gap-3">
                                            <div>
                                                <p class="text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-400">Signal opérationnel</p>
                                                <p class="mt-2 text-sm font-medium text-slate-100">{{ $meta['signal'] }}</p>
                                            </div>
                                            <div class="hidden h-10 w-10 rounded-full border border-cyan-200/12 bg-cyan-200/6 md:flex md:items-center md:justify-center">
                                                <span class="h-2.5 w-2.5 rounded-full bg-cyan-200 shadow-[0_0_18px_rgba(125,211,252,0.45)]" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="console-meta-grid mt-4">
                                        <div class="console-meta-item rounded-[1rem] px-4 py-3">
                                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-slate-500">Clarté</p>
                                            <p class="mt-2 text-sm font-medium text-slate-100">{{ $meta['clarity'] }}</p>
                                        </div>
                                        <div class="console-meta-item rounded-[1rem] px-4 py-3">
                                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-slate-500">Risque</p>
                                            <p class="mt-2 text-sm font-medium text-slate-100">{{ $meta['risk'] }}</p>
                                        </div>
                                        <div class="console-meta-item rounded-[1rem] px-4 py-3 md:col-span-2">
                                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-slate-500">Confidentialité / cadre</p>
                                            <p class="mt-2 text-sm font-medium text-slate-100">{{ $meta['compliance'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="console-output-card rounded-[1.4rem] p-5">
                                    <div>
                                        <div>
                                            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Livrables</p>
                                            <p class="mt-2 text-sm leading-6 text-slate-400">Une matière exploitable pour décider, arbitrer et lancer sans angle mort résiduel.</p>
                                        </div>
                                    </div>
                                    <ul class="mt-4 space-y-3 text-sm text-slate-200">
                                        @foreach ($stage['points'] as $point)
                                            <li class="console-output-item flex items-start gap-3 rounded-2xl border border-white/8 bg-white/[0.03] px-4 py-3">
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

    <script>
        (() => {
            const consoleRoot = document.querySelector('[data-console]');
            if (! consoleRoot) {
                return;
            }

            const syncConsoleStage = () => {
                const active = consoleRoot.querySelector('[data-console-trigger][aria-pressed="true"]');
                if (active?.dataset.consoleTrigger) {
                    consoleRoot.dataset.consoleStage = active.dataset.consoleTrigger;
                }
            };

            syncConsoleStage();

            consoleRoot.querySelectorAll('[data-console-trigger]').forEach((button) => {
                button.addEventListener('click', () => {
                    window.requestAnimationFrame(syncConsoleStage);
                });
            });
        })();
    </script>

    <section class="section-fade mx-auto max-w-7xl px-6 py-24 lg:px-8" aria-labelledby="use-cases-title">
        @php
            $useCaseMeta = [
                'Développeur IA' => [
                    'variant' => 'ai',
                    'tags' => [],
                ],
                'Data Engineer' => [
                    'variant' => 'data',
                    'tags' => [],
                ],
                'Pentester' => [
                    'variant' => 'security',
                    'tags' => [],
                ],
            ];
        @endphp

        <style>
            .use-case-card {
                position: relative;
                overflow: hidden;
                isolation: isolate;
                border: 1px solid rgba(255, 255, 255, 0.08);
                background: linear-gradient(180deg, rgba(15, 23, 42, 0.92), rgba(2, 6, 23, 0.9));
                box-shadow: 0 24px 70px rgba(2, 6, 23, 0.28);
                transition: transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease;
            }

            .use-case-card:hover,
            .use-case-card:focus-within {
                transform: translateY(-4px);
                box-shadow: 0 30px 80px rgba(2, 6, 23, 0.36);
            }

            .use-case-card::before {
                content: "";
                position: absolute;
                inset: 0;
                pointer-events: none;
                background: radial-gradient(circle at top right, rgba(255, 255, 255, 0.05), transparent 32%);
                opacity: 0.8;
            }

            .use-case-card::after {
                content: "";
                position: absolute;
                left: 1.5rem;
                right: 1.5rem;
                top: 0;
                height: 1px;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.18), transparent);
                opacity: 0.9;
            }

            .use-case-card--ai {
                border-color: rgba(125, 211, 252, 0.14);
                background-image:
                    radial-gradient(circle at 82% 18%, rgba(56, 189, 248, 0.12), transparent 26%),
                    linear-gradient(180deg, rgba(15, 23, 42, 0.92), rgba(2, 6, 23, 0.9));
            }

            .use-case-card--data {
                border-color: rgba(45, 212, 191, 0.14);
                background-image:
                    linear-gradient(90deg, rgba(148, 163, 184, 0.04) 1px, transparent 1px),
                    radial-gradient(circle at 18% 82%, rgba(45, 212, 191, 0.1), transparent 30%),
                    linear-gradient(180deg, rgba(15, 23, 42, 0.92), rgba(2, 6, 23, 0.9));
                background-size: 24px 24px, auto, auto;
            }

            .use-case-card--security {
                border-color: rgba(52, 211, 153, 0.14);
                background-image:
                    repeating-linear-gradient(180deg, rgba(148, 163, 184, 0.05) 0 1px, transparent 1px 12px),
                    radial-gradient(circle at 84% 16%, rgba(52, 211, 153, 0.08), transparent 24%),
                    linear-gradient(180deg, rgba(15, 23, 42, 0.94), rgba(2, 6, 23, 0.94));
                background-size: 100% 12px, auto, auto;
            }

            .use-case-tags {
                transition: opacity 220ms ease, transform 220ms ease;
            }

            .use-case-card:hover .use-case-tags,
            .use-case-card:focus-within .use-case-tags {
                opacity: 1;
                transform: translateY(0);
            }

            .use-case-tag {
                border: 1px solid rgba(255, 255, 255, 0.08);
                background: rgba(15, 23, 42, 0.58);
            }

            @media (prefers-reduced-motion: reduce) {
                .use-case-card,
                .use-case-tags {
                    transition: none;
                }

                .use-case-card:hover,
                .use-case-card:focus-within {
                    transform: none;
                }
            }
        </style>

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
                        @php
                            $meta = $useCaseMeta[$case['title']] ?? [
                                'variant' => 'ai',
                                'tags' => ['Expertise', 'Cadrage', 'Exécution'],
                            ];
                        @endphp
                        <article class="use-case-card use-case-card--{{ $meta['variant'] }} group rounded-[2rem] p-6 md:p-7" data-reveal style="--reveal-delay: {{ $loop->index * 70 }}ms;">
                            <div class="relative z-10 flex h-full flex-col">
                                <p class="text-[11px] font-semibold uppercase tracking-[0.24em] text-teal-100/90">{{ $case['label'] }}</p>
                                <h3 class="mt-5 text-2xl font-bold leading-tight text-white">{{ $case['title'] }}</h3>
                                <p class="mt-5 text-sm leading-7 text-slate-300">{{ $case['text'] }}</p>

                                <div class="use-case-tags mt-6 flex flex-wrap gap-2 opacity-90">
                                    @foreach ($meta['tags'] as $tag)
                                        <span class="use-case-tag rounded-full px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.18em] text-slate-200">{{ $tag }}</span>
                                    @endforeach
                                </div>
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
                <h2 id="expertises-title" class="mt-4 text-3xl font-bold text-white md:text-5xl">Des compétences métiers adaptées à vos besoins</h2>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Oppdrag.tech est mobilisé lorsque les enjeux sont sensibles, que l’erreur n’est pas permise et qu’un simple matching ne suffit pas à garantir la bonne exécution.
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
                                            class="tech-pill-logo-image"
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
                    Les équipes nous sollicitent sur des missions sensibles, dans des contextes contraints par le temps, où le coût d’une erreur de casting est trop important. Les preuves attendues portent donc sur notre capacité à intervenir rapidement, cadrer clairement et sécuriser l’exécution.
                </p>
            </div>

            <div class="grid gap-5">
                @foreach ($outcomes as $outcome)
                    <article class="bento-card rounded-[1.9rem] p-6" data-reveal style="--reveal-delay: {{ $loop->index * 70 }}ms;">
                        <p class="text-lg leading-8 text-slate-100">“{{ $outcome['quote'] }}”</p>
                        <div class="mt-6 border-t border-white/10 pt-4">
                            <p class="text-sm font-semibold text-white">{{ $outcome['author'] }}</p>
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
                        <span><strong class="text-amber-200">3 % des bénéfices</strong> reversés à l’ONaCVG dans une logique d’engagement tangible.</span>
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
                        <textarea id="message" name="message" rows="6" required autocomplete="on" class="field-input" placeholder="Décrivez le contexte, les expertises recherchées, les contraintes et le cadre de démarrage.">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn-primary w-full sm:w-auto">
                        Envoyer ma demande
                    </button>
                </form>
            </section>
        </div>
    </section>
    </div>
@endsection
