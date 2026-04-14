<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>oppdrag.tech | Déploiement d’experts IA, Data & Cybersécurité</title>
  <meta name="description" content="Oppdrag.tech aide les entreprises à identifier et déployer les bons profils, dans un cadre fiable, responsable et conforme au RGPD.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://oppdrag.tech">
  <link rel="shortcut icon" href="{{ asset('Images/logo.png') }}" type="image/x-icon">
  <meta name="theme-color" content="#020617">

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: '#08111f',
            secondary: '#0f766e',
            accent: '#2dd4bf',
            ink: '#e5eef7',
            muted: '#94a3b8',
            line: 'rgba(255,255,255,0.10)'
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif']
          },
          boxShadow: {
            glow: '0 18px 60px rgba(45, 212, 191, 0.16)',
            soft: '0 10px 40px rgba(2, 6, 23, 0.24)'
          },
          borderRadius: {
            xl2: '1.75rem'
          }
        }
      }
    }
  </script>

  <style>
    :root {
      color-scheme: dark;
    }

    html {
      scroll-padding-top: 6rem;
    }

    body {
      background:
        radial-gradient(circle at top left, rgba(45,212,191,.10), transparent 28%),
        radial-gradient(circle at top right, rgba(14,165,233,.08), transparent 24%),
        #020617;
    }

    .glass {
      background: linear-gradient(180deg, rgba(255,255,255,.10), rgba(255,255,255,.06));
      border: 1px solid rgba(255,255,255,.12);
      box-shadow: 0 10px 35px rgba(2, 6, 23, .22);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
    }

    .hero-overlay {
      background:
        linear-gradient(180deg, rgba(2,6,23,.62) 0%, rgba(2,6,23,.82) 56%, rgba(2,6,23,.96) 100%),
        radial-gradient(circle at 16% 18%, rgba(45,212,191,.16), transparent 24%),
        radial-gradient(circle at 82% 12%, rgba(14,165,233,.12), transparent 22%);
    }

    .grid-noise {
      background-image:
        linear-gradient(rgba(255,255,255,.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.05) 1px, transparent 1px);
      background-size: 34px 34px;
      mask-image: radial-gradient(circle at center, black 48%, transparent 100%);
      opacity: .14;
    }

    .section-shell {
      content-visibility: auto;
      contain-intrinsic-size: 1px 900px;
    }

    .text-balance {
      text-wrap: balance;
    }

    .reveal {
      opacity: 0;
      transform: translateY(18px);
      transition: opacity .7s ease, transform .7s ease;
    }

    .reveal.is-visible {
      opacity: 1;
      transform: translateY(0);
    }

    .pill {
      display: inline-flex;
      align-items: center;
      gap: .5rem;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,.12);
      background: rgba(255,255,255,.08);
      padding: .72rem 1rem;
      font-size: .78rem;
      line-height: 1;
      font-weight: 600;
      color: white;
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
    }

    .card-hover {
      transition: transform .3s ease, border-color .3s ease, box-shadow .3s ease;
    }

    .card-hover:hover {
      transform: translateY(-6px);
      border-color: rgba(45,212,191,.42);
      box-shadow: 0 18px 45px rgba(2,6,23,.30);
    }

    .swiper-wrapper {
      transition-timing-function: linear !important;
    }

    .headline-gradient {
      background: linear-gradient(90deg, #ffffff 0%, #d7fbf4 55%, #a5f3fc 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .kpi-card {
      background: linear-gradient(180deg, rgba(255,255,255,.08), rgba(255,255,255,.04));
      border: 1px solid rgba(255,255,255,.10);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
    }

    @media (prefers-reduced-motion: reduce) {
      html { scroll-behavior: auto; }
      *, *::before, *::after {
        animation-duration: .01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: .01ms !important;
        scroll-behavior: auto !important;
      }
      .reveal {
        opacity: 1;
        transform: none;
      }
    }
  </style>
</head>
<body class="font-sans text-white antialiased overflow-x-hidden">
  <div id="page-content">
    <header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/70 backdrop-blur-xl">
      <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
        <a href="/" class="flex items-center gap-3">
          <img
            src="{{ asset('Images/logo-opg.png') }}"
            alt="Logo oppdrag.tech"
            class="block h-10 w-10 shrink-0 object-contain"
            width="40"
            height="40"
            loading="eager"
            decoding="async"
          >
          <div>
            <span class="block text-sm font-extrabold tracking-[0.08em] text-white">oppdrag.tech</span>
          </div>
        </a>

        <div class="hidden items-center gap-8 lg:flex">
          <a href="#offres" class="text-sm font-medium text-slate-300 transition hover:text-white">Offres</a>
          <a href="#process" class="text-sm font-medium text-slate-300 transition hover:text-white">Process</a>
          <a href="#avantages" class="text-sm font-medium text-slate-300 transition hover:text-white">Avantages</a>
          <a href="#experts" class="text-sm font-medium text-slate-300 transition hover:text-white">Experts</a>
          <a href="#rse" class="text-sm font-medium text-slate-300 transition hover:text-white">RSE</a>
          <a href="#contact" class="inline-flex items-center rounded-full bg-white px-5 py-2.5 text-sm font-semibold text-slate-950 transition hover:scale-[1.02] hover:bg-teal-300">Parler à un expert</a>
        </div>

        <button id="menu-toggle" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/5 text-white lg:hidden" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="mobile-menu">
          <i class="fas fa-bars"></i>
        </button>
      </nav>

      <div id="mobile-menu" class="hidden border-t border-white/10 bg-slate-950/95 px-6 py-4 lg:hidden">
        <div class="flex flex-col gap-4">
          <a href="#offres" class="text-sm font-medium text-slate-300">Offres</a>
          <a href="#process" class="text-sm font-medium text-slate-300">Process</a>
          <a href="#avantages" class="text-sm font-medium text-slate-300">Avantages</a>
          <a href="#experts" class="text-sm font-medium text-slate-300">Experts</a>
          <a href="#rse" class="text-sm font-medium text-slate-300">RSE</a>
          <a href="#contact" class="mt-2 inline-flex items-center justify-center rounded-full bg-white px-5 py-3 text-sm font-semibold text-slate-950">Parler à un expert</a>
        </div>
      </div>
    </header>

    <main>
      <section class="relative isolate overflow-hidden">
        <div class="absolute inset-0 -z-20">
          <div class="bg-video-shell" aria-hidden="true">
            <video autoplay muted loop playsinline preload="metadata" poster="{{ asset('Images/cybernavy.jpg') }}" class="bg-video" data-bg-video style="--video-opacity: 0.34;">
              <source src="{{ asset('Videos/commando.mp4') }}" type="video/mp4">
            </video>
          </div>
          <div class="hero-overlay absolute inset-0"></div>
          <div class="grid-noise absolute inset-0"></div>
        </div>

        <div class="mx-auto grid min-h-[90svh] max-w-7xl items-center gap-12 px-6 py-14 lg:grid-cols-[1.12fr_.88fr] lg:px-8 lg:py-24">
          <div class="reveal">
            <h1 class="max-w-4xl text-balance text-4xl font-extrabold leading-[1.02] tracking-tight md:text-6xl">
              <span class="headline-gradient">Décrivez votre mission,<br>Définissons le plan d’action,<br>Déployons la solution.</span>
            </h1>

            <div class="glass mt-8 max-w-3xl rounded-[28px] p-6 md:p-7 shadow-glow">
              <div class="space-y-6 text-left text-white">
                <div class="space-y-3">
                  <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-300/90">positionnement</p>
                  <p class="text-balance text-2xl font-bold leading-tight text-white md:text-3xl">
                    La référence opérationnelle<br>
                    pour les missions critiques en IA, data et cybersécurité.
                  </p>
                </div>

                <div class="h-px w-full bg-gradient-to-r from-teal-300/35 via-white/12 to-transparent"></div>

                <div class="grid gap-2 text-sm font-medium text-slate-200 md:grid-cols-3 md:gap-4 md:text-base">
                  <p>Profils qualifiés</p>
                  <p>Suivi et pilotage</p>
                  <p>Haute disponibilité</p>
                </div>
              </div>
            </div>

            <p class="mt-8 max-w-2xl text-base leading-8 text-slate-300 md:text-lg">
              Oppdrag.tech aide les entreprises à identifier et déployer les bons profils, dans un cadre fiable, responsable et conforme au RGPD.
            </p>

            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
              <a href="#contact" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-teal-400 to-cyan-400 px-6 py-3.5 text-sm font-semibold text-slate-950 transition hover:scale-[1.02]">Trouver un expert</a>
              <a href="#offres" class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-white hover:text-slate-950">Découvrir les offres</a>
            </div>

            <div class="mt-8 flex flex-wrap items-center gap-3">
              <span class="pill">
                <i class="fas fa-hand-holding-heart text-teal-300" aria-hidden="true"></i>
                impact RSE
              </span>
              <span class="pill border-amber-400/20 bg-amber-400/10">
                <i class="fas fa-shield-heart text-amber-300"></i>
                <span><span class="font-bold text-amber-300">3% des bénéfices</span> reversés à l’ONaCVG</span>
              </span>
            </div>
          </div>

          <div class="reveal lg:justify-self-end">
            <div class="glass relative overflow-hidden rounded-[2rem] p-6 shadow-soft lg:p-7">
              <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/50 to-transparent"></div>
              <div class="flex items-center justify-between border-b border-white/10 pb-4">
                <div>
                  <h2 class="mt-2 text-xl font-bold text-white">Indicateurs clés</h2>
                </div>
                <div class="flex items-center gap-2">
                  <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                  <span class="text-xs text-slate-300">En ligne</span>
                </div>
              </div>

              <div class="mt-6 grid gap-4 sm:grid-cols-2">
                <article class="kpi-card rounded-2xl p-5">
                  <p id="counter-entreprises" class="text-4xl font-extrabold text-white">0</p>
                  <p class="mt-2 text-sm text-slate-300">entreprises accompagnées</p>
                </article>
                <article class="kpi-card rounded-2xl p-5">
                  <p class="text-4xl font-extrabold text-white">5 jours</p>
                  <p class="mt-2 text-sm text-slate-300">pour démarrer une mission</p>
                </article>
                <article class="kpi-card rounded-2xl p-5 sm:col-span-2">
                  <div class="flex items-start gap-3">
                    <div class="mt-1 flex h-10 w-10 items-center justify-center rounded-full bg-teal-400/10 text-teal-300">
                      <i class="fas fa-file-shield"></i>
                    </div>
                    <div>
                      <p class="font-semibold text-white">Environnement securisé</p>
                      <p class="mt-1 text-sm leading-6 text-slate-300">Qualification, contractualisation, confidentialité et conformité RGPD intégrées en amont de l'opération.</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="offres" class="section-shell mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="mx-auto max-w-2xl text-center reveal">
          <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-300">offres</p>
          <h2 class="mt-4 text-3xl font-bold text-white md:text-4xl">Des formats adaptés à vos enjeux</h2>
        </div>

        <div class="mt-14 grid gap-6 lg:grid-cols-3">
          <article class="card-hover reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-8 backdrop-blur-xl">
            <div class="flex items-center justify-between">
              <h3 class="text-xl font-bold">Mission Freelance</h3>
              <span class="rounded-full bg-emerald-400/10 px-3 py-1 text-xs font-semibold text-emerald-300">populaire</span>
            </div>
            <p class="mt-5 text-sm leading-7 text-slate-300">Un expert qualifié pour renforcer rapidement une équipe sur un besoin ciblé.</p>
            <p class="mt-6 text-3xl font-extrabold text-white">~600€/jour</p>
            <ul class="mt-6 space-y-3 text-sm text-slate-300">
              <li><i class="fas fa-check mr-2 text-teal-300"></i>Remplacement prioritaire en cas d’écart</li>
              <li><i class="fas fa-check mr-2 text-teal-300"></i>Accompagnement par un expert senior</li>
              <li><i class="fas fa-check mr-2 text-teal-300"></i>Cadre RGPD et confidentialité</li>
            </ul>
            <a href="#contact" class="mt-8 inline-flex w-full items-center justify-center rounded-full border border-white/10 bg-white px-5 py-3 text-sm font-semibold text-slate-950">Parler à un expert</a>
          </article>

          <article class="card-hover reveal rounded-[1.75rem] border border-teal-300/25 bg-gradient-to-b from-teal-400/10 to-white/5 p-8 shadow-glow backdrop-blur-xl">
            <div class="flex items-center justify-between">
              <h3 class="text-xl font-bold">Pack POC Express</h3>
              <span class="rounded-full bg-amber-400/10 px-3 py-1 text-xs font-semibold text-amber-300">prioritaire</span>
            </div>
            <p class="mt-5 text-sm leading-7 text-slate-300">Un format cadré pour transformer rapidement un besoin en démonstrateur concret.</p>
            <p class="mt-6 text-3xl font-extrabold text-white">500–550€/jour</p>
            <ul class="mt-6 space-y-3 text-sm text-slate-300">
              <li><i class="fas fa-check mr-2 text-teal-300"></i>2 à 6 semaines de mission</li>
              <li><i class="fas fa-check mr-2 text-teal-300"></i>Pilotage centralisé</li>
              <li><i class="fas fa-check mr-2 text-teal-300"></i>Livraison structurée</li>
            </ul>
            <a href="#contact" class="mt-8 inline-flex w-full items-center justify-center rounded-full bg-gradient-to-r from-teal-300 to-cyan-400 px-5 py-3 text-sm font-semibold text-slate-950">Lancer un POC</a>
          </article>

          <article class="card-hover reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-8 backdrop-blur-xl">
            <div class="flex items-center justify-between">
              <h3 class="text-xl font-bold">Team-as-a-Service</h3>
            </div>
            <p class="mt-5 text-sm leading-7 text-slate-300">Une équipe externe structurée pour accélérer un chantier stratégique.</p>
            <p class="mt-6 text-3xl font-extrabold text-white">~45k€/mois</p>
            <ul class="mt-6 space-y-3 text-sm text-slate-300">
              <li><i class="fas fa-check mr-2 text-teal-300"></i>2 à 8 experts mobilisables</li>
              <li><i class="fas fa-check mr-2 text-teal-300"></i>Pilotage mission et reporting</li>
              <li><i class="fas fa-check mr-2 text-teal-300"></i>Engagement minimum 3 mois</li>
            </ul>
            <a href="#contact" class="mt-8 inline-flex w-full items-center justify-center rounded-full border border-white/10 bg-white px-5 py-3 text-sm font-semibold text-slate-950">Déployer une équipe</a>
          </article>
        </div>
      </section>

      <section id="process" class="section-shell border-y border-white/10 bg-white/[0.03] py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl text-center reveal">
            <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-300">process</p>
            <h2 class="mt-4 text-3xl font-bold text-white md:text-4xl">Un mode opératoire éprouvée</h2>
          </div>

          <div class="relative mt-16 grid gap-6 lg:grid-cols-3">
            <article class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-7 backdrop-blur-xl">
              <span class="text-xs font-bold uppercase tracking-[0.24em] text-teal-300">01</span>
              <h3 class="mt-4 text-xl font-bold text-white">Décrivez votre mission</h3>
              <p class="mt-4 text-sm leading-7 text-slate-300">Nous clarifions le besoin, le contexte, le niveau attendu et les contraintes opérationnelles.</p>
            </article>
            <article class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-7 backdrop-blur-xl">
              <span class="text-xs font-bold uppercase tracking-[0.24em] text-teal-300">02</span>
              <h3 class="mt-4 text-xl font-bold text-white">Nous cadrons l’intervention</h3>
              <p class="mt-4 text-sm leading-7 text-slate-300">Sélection, qualification, proposition de profil ou d’équipe, et formalisation du cadre de mission.</p>
            </article>
            <article class="reveal rounded-[1.75rem] border border-white/10 bg-white/5 p-7 backdrop-blur-xl">
              <span class="text-xs font-bold uppercase tracking-[0.24em] text-teal-300">03</span>
              <h3 class="mt-4 text-xl font-bold text-white">Nous déployons</h3>
              <p class="mt-4 text-sm leading-7 text-slate-300">Démarrage rapide, onboarding fluide et suivi de mission avec une logique de delivery lisible.</p>
            </article>
          </div>
        </div>
      </section>

      <section id="avantages" class="section-shell mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="mx-auto max-w-2xl text-center reveal">
          <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-300">avantages</p>
          <h2 class="mt-4 text-3xl font-bold text-white md:text-4xl">Pourquoi oppdrag.tech</h2>
        </div>

        <div class="mt-14 grid gap-6 md:grid-cols-2 xl:grid-cols-5">
          <article class="reveal rounded-[1.5rem] border border-white/10 bg-white/5 p-6 text-center backdrop-blur-xl">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-teal-400/10 text-2xl text-teal-300"><i class="fas fa-stopwatch"></i></div>
            <h3 class="mt-5 text-lg font-bold">Rapidité</h3>
            <p class="mt-3 text-sm leading-7 text-slate-300">Expert qualifié mobilisable en 5 jours maximum.</p>
          </article>
          <article class="reveal rounded-[1.5rem] border border-white/10 bg-white/5 p-6 text-center backdrop-blur-xl">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-teal-400/10 text-2xl text-teal-300"><i class="fas fa-shield"></i></div>
            <h3 class="mt-5 text-lg font-bold">Fiabilité</h3>
            <p class="mt-3 text-sm leading-7 text-slate-300">Cadrage, suivi et continuité de mission sécurisés.</p>
          </article>
          <article class="reveal rounded-[1.5rem] border border-white/10 bg-white/5 p-6 text-center backdrop-blur-xl">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-400/10 text-2xl text-amber-300"><i class="fas fa-hand-holding-heart"></i></div>
            <h3 class="mt-5 text-lg font-bold">Impact</h3>
            <p class="mt-3 text-sm leading-7 text-slate-300">3% des bénéfices reversés aux anciens combattants via l’ONaCVG.</p>
          </article>
          <article class="reveal rounded-[1.5rem] border border-white/10 bg-white/5 p-6 text-center backdrop-blur-xl">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-teal-400/10 text-2xl text-teal-300"><i class="fas fa-graduation-cap"></i></div>
            <h3 class="mt-5 text-lg font-bold">Expertise</h3>
            <p class="mt-3 text-sm leading-7 text-slate-300">Profils qualifiés, évalués et alignés sur le besoin réel.</p>
          </article>
          <article class="reveal rounded-[1.5rem] border border-white/10 bg-white/5 p-6 text-center backdrop-blur-xl">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-teal-400/10 text-2xl text-teal-300"><i class="fas fa-leaf"></i></div>
            <h3 class="mt-5 text-lg font-bold">Éthique</h3>
            <p class="mt-3 text-sm leading-7 text-slate-300">RGPD, sobriété numérique et inclusion intégrés à l’approche.</p>
          </article>
        </div>
      </section>

      <section id="experts" class="section-shell border-y border-white/10 bg-white/[0.03] py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl text-center reveal">
            <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-300">experts</p>
            <h2 class="mt-4 text-3xl font-bold text-white md:text-4xl">Exemples de profils mobilisables</h2>
          </div>

          <div class="reveal mt-14 swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide rounded-[1.5rem] border border-white/10 bg-white/5 p-5 text-center backdrop-blur-xl">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Data Scientist" class="mx-auto h-24 w-24 rounded-full border-4 border-teal-300/40 object-cover" loading="lazy">
                <p class="mt-4 font-semibold text-white">Data Scientist</p>
              </div>
              <div class="swiper-slide rounded-[1.5rem] border border-white/10 bg-white/5 p-5 text-center backdrop-blur-xl">
                <img src="https://randomuser.me/api/portraits/men/47.jpg" alt="Consultant cybersécurité" class="mx-auto h-24 w-24 rounded-full border-4 border-teal-300/40 object-cover" loading="lazy">
                <p class="mt-4 font-semibold text-white">Consultant cybersécurité</p>
              </div>
              <div class="swiper-slide rounded-[1.5rem] border border-white/10 bg-white/5 p-5 text-center backdrop-blur-xl">
                <img src="https://randomuser.me/api/portraits/women/14.jpg" alt="MLOps Engineer" class="mx-auto h-24 w-24 rounded-full border-4 border-teal-300/40 object-cover" loading="lazy">
                <p class="mt-4 font-semibold text-white">MLOps Engineer</p>
              </div>
              <div class="swiper-slide rounded-[1.5rem] border border-white/10 bg-white/5 p-5 text-center backdrop-blur-xl">
                <img src="https://randomuser.me/api/portraits/men/5.jpg" alt="Architecte cloud" class="mx-auto h-24 w-24 rounded-full border-4 border-teal-300/40 object-cover" loading="lazy">
                <p class="mt-4 font-semibold text-white">Architecte cloud</p>
              </div>
              <div class="swiper-slide rounded-[1.5rem] border border-white/10 bg-white/5 p-5 text-center backdrop-blur-xl">
                <img src="https://randomuser.me/api/portraits/women/11.jpg" alt="Formateur IA" class="mx-auto h-24 w-24 rounded-full border-4 border-teal-300/40 object-cover" loading="lazy">
                <p class="mt-4 font-semibold text-white">Formateur IA</p>
              </div>
              <div class="swiper-slide rounded-[1.5rem] border border-white/10 bg-white/5 p-5 text-center backdrop-blur-xl">
                <img src="https://randomuser.me/api/portraits/men/16.jpg" alt="Ethical Hacker" class="mx-auto h-24 w-24 rounded-full border-4 border-teal-300/40 object-cover" loading="lazy">
                <p class="mt-4 font-semibold text-white">Ethical Hacker</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="rse" class="section-shell mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="grid items-center gap-10 lg:grid-cols-2">
          <div class="reveal">
            <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-300">engagement RSE</p>
            <h2 class="mt-4 text-3xl font-bold text-white md:text-4xl">Une croissance responsable et assumée</h2>
            <p class="mt-6 text-base leading-8 text-slate-300">Oppdrag.tech défend un modèle où performance opérationnelle, impact social et rigueur de conformité progressent ensemble.</p>
            <ul class="mt-8 space-y-4 text-sm text-slate-300">
              <li><i class="fas fa-check-circle mr-3 text-teal-300"></i>Engagement volontaire pour l’environnement et la sobriété numérique.</li>
              <li><i class="fas fa-check-circle mr-3 text-teal-300"></i>Inclusion de profils issus de la reconversion, des minorités et des parcours atypiques.</li>
              <li class="rounded-2xl border border-amber-400/20 bg-amber-400/10 p-4 text-white">
                <div class="flex items-start gap-3">
                  <i class="fas fa-shield-heart mt-1 text-amber-300"></i>
                  <div>
                    <p class="font-medium"><span class="text-lg font-bold text-amber-300">3%</span> de nos bénéfices sont reversés à l’ONaCVG.</p>
                    <p class="mt-1 text-xs text-slate-300">Office national des combattants et victimes de guerre</p>
                  </div>
                </div>
              </li>
            </ul>
            <a href="{{ asset('charte-rse.pdf') }}" download class="mt-8 inline-flex items-center rounded-full bg-white px-5 py-3 text-sm font-semibold text-slate-950">Lire notre rapport RSE</a>
          </div>

          <div class="reveal grid grid-cols-2 gap-4">
            <div class="rounded-[1.5rem] border border-white/10 bg-white p-6"><img src="{{ asset('Images/onacvg.png') }}" alt="Logo ONaCVG" class="mx-auto h-24 object-contain" loading="lazy"></div>
            <div class="rounded-[1.5rem] border border-white/10 bg-white p-6"><img src="{{ asset('Images/lucie.png') }}" alt="Label Lucie" class="mx-auto h-24 object-contain" loading="lazy"></div>
            <div class="rounded-[1.5rem] border border-white/10 bg-white p-6"><img src="{{ asset('Images/envol.jpg') }}" alt="Label EnVol" class="mx-auto h-24 object-contain" loading="lazy"></div>
            <div class="rounded-[1.5rem] border border-white/10 bg-white p-6"><img src="{{ asset('Images/cnil.svg') }}" alt="Référence CNIL" class="mx-auto h-24 object-contain" loading="lazy"></div>
          </div>
        </div>
      </section>

      <section id="contact" class="section-shell border-t border-white/10 bg-white/[0.03] py-20">
        <div class="mx-auto max-w-5xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl text-center reveal">
            <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-300">contact</p>
            <h2 class="mt-4 text-3xl font-bold text-white md:text-4xl">Un besoin, une solution</h2>
            <p class="mt-4 text-slate-300">Réservez un échange de 15 minutes avec un responsable oppdrag.tech.</p>
          </div>

          <div class="reveal mt-12 rounded-[2rem] border border-white/10 bg-white p-8 text-slate-900 shadow-2xl md:p-10">
            <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
              @csrf
              <div class="grid gap-6 md:grid-cols-2">
                <div>
                  <label for="name" class="mb-2 block text-sm font-medium">Nom <span class="text-red-500">*</span></label>
                  <input type="text" id="name" name="name" required class="w-full rounded-2xl border border-slate-200 px-4 py-3 outline-none transition focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10">
                </div>
                <div>
                  <label for="email" class="mb-2 block text-sm font-medium">Email <span class="text-red-500">*</span></label>
                  <input type="email" id="email" name="email" required class="w-full rounded-2xl border border-slate-200 px-4 py-3 outline-none transition focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10">
                </div>
              </div>

              <div>
                <label for="need" class="mb-2 block text-sm font-medium">Quel est votre besoin ? <span class="text-red-500">*</span></label>
                <select id="need" name="need" required class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 outline-none transition focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10">
                  <option value="">Sélectionnez une option</option>
                  <option value="freelance">Mission Freelance</option>
                  <option value="poc">Pack POC Express</option>
                  <option value="team">Team-as-a-Service</option>
                  <option value="other">Autres</option>
                </select>
              </div>

              <div>
                <label for="message" class="mb-2 block text-sm font-medium">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Décrivez brièvement votre projet, les technologies, la durée et le niveau d’urgence." class="w-full rounded-2xl border border-slate-200 px-4 py-3 outline-none transition focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10"></textarea>
              </div>

              @if(session('success'))
                <p class="rounded-2xl bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-700">✅ {{ session('success') }}</p>
              @endif

              <button type="submit" class="inline-flex w-full items-center justify-center rounded-full bg-slate-950 px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-teal-700 sm:w-auto">Envoyer</button>
            </form>
          </div>
        </div>
      </section>
    </main>

    <footer class="relative overflow-hidden border-t border-white/10 bg-slate-950 py-16">
      <div class="absolute inset-0 -z-10 opacity-60">
        <div class="hero-grid absolute inset-0 opacity-40"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(45,212,191,0.18),transparent_26%),linear-gradient(180deg,rgba(2,6,23,0.1),rgba(2,6,23,0.82))]"></div>
      </div>

      <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-4 lg:px-8">
        <div>
          <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('Images/logo-opg2.png') }}" alt="Logo oppdrag.tech" class="h-10 w-10 object-contain" loading="lazy">
            <span class="text-lg font-bold text-white">oppdrag.tech</span>
          </a>
          <p class="mt-4 max-w-xs text-sm leading-7 text-slate-300">Bien plus qu’un placement, une force d’intervention experte pour les missions tech critiques.</p>
          <div class="mt-5 flex flex-wrap gap-2 text-xs">
            <span class="rounded-full bg-white px-3 py-1 font-semibold text-slate-950">Déploiement 5 jours</span>
            <span class="rounded-full bg-white px-3 py-1 font-semibold text-slate-950">Impact RSE</span>
            <span class="rounded-full bg-white px-3 py-1 font-semibold text-slate-950">Made in France</span>
          </div>
        </div>

        <div>
          <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-white">Contact</h3>
          <ul class="mt-5 space-y-3 text-sm text-slate-300">
            <li><i class="fas fa-map-marker-alt mr-3 text-teal-300"></i>26 rue des Monts de Vigne, 21000 Dijon</li>
            <li><i class="fas fa-envelope mr-3 text-teal-300"></i><a href="mailto:contact@oppdrag.tech" class="transition hover:text-white">contact@oppdrag.tech</a></li>
            <li><i class="fas fa-phone-alt mr-3 text-teal-300"></i>+33 9 51 21 87 47</li>
          </ul>
        </div>

        <div>
          <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-white">Ressources</h3>
          <ul class="mt-5 space-y-3 text-sm text-slate-300">
            <li><a href="#offres" class="transition hover:text-white">Nos offres</a></li>
            <li><a href="{{ url('faq') }}" class="transition hover:text-white">F.A.Q</a></li>
            <li><a href="{{ url('blog') }}" class="transition hover:text-white">Blog</a></li>
            <li><a href="{{ url('a-propos') }}" class="transition hover:text-white">À propos</a></li>
          </ul>
        </div>

        <div>
          <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-white">Newsletter</h3>
          <p class="mt-5 text-sm leading-7 text-slate-300">Recevez nos actus IA et cybersécurité une fois par mois.</p>
          <form class="mt-5 flex flex-col gap-3 sm:flex-row">
            <input type="email" placeholder="Votre email" required class="w-full rounded-full border border-white/10 bg-white px-4 py-3 text-sm text-slate-950 outline-none">
            <button type="submit" class="rounded-full bg-teal-400 px-5 py-3 text-sm font-semibold text-slate-950">S’inscrire</button>
          </form>
        </div>
      </div>

      <div class="mx-auto mt-12 flex max-w-7xl flex-col items-start justify-between gap-4 border-t border-white/10 px-6 pt-8 text-sm text-slate-400 lg:flex-row lg:items-center lg:px-8">
        <p>© 2026 oppdrag.tech. Tous droits réservés.</p>
        <div class="flex flex-wrap gap-4">
          <a href="{{ url('mentions-legales') }}" class="transition hover:text-white">Mentions légales</a>
          <a href="{{ url('confidentialite') }}" class="transition hover:text-white">Politique de confidentialité</a>
        </div>
      </div>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const menuToggle = document.getElementById('menu-toggle');
      const mobileMenu = document.getElementById('mobile-menu');
      const revealItems = document.querySelectorAll('.reveal');
      const counterElement = document.getElementById('counter-entreprises');
      let counterStarted = false;

      menuToggle?.addEventListener('click', () => {
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', String(!isExpanded));
        mobileMenu.classList.toggle('hidden');
      });

      mobileMenu?.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          mobileMenu.classList.add('hidden');
          menuToggle.setAttribute('aria-expanded', 'false');
        });
      });

      const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            revealObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });

      revealItems.forEach(item => revealObserver.observe(item));

      const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting && !counterStarted) {
            counterStarted = true;
            const target = 43;
            const duration = 1800;
            const start = performance.now();

            const tick = (now) => {
              const progress = Math.min((now - start) / duration, 1);
              counterElement.textContent = Math.floor(progress * target);
              if (progress < 1) {
                requestAnimationFrame(tick);
              } else {
                counterElement.textContent = target;
              }
            };

            requestAnimationFrame(tick);
            counterObserver.unobserve(counterElement);
          }
        });
      }, { threshold: 0.5 });

      if (counterElement) counterObserver.observe(counterElement);

      new Swiper('.mySwiper', {
        loop: true,
        speed: 4500,
        autoplay: {
          delay: 0,
          disableOnInteraction: false,
          pauseOnMouseEnter: true
        },
        allowTouchMove: false,
        freeMode: true,
        freeModeMomentum: false,
        slidesPerView: 2.2,
        spaceBetween: 20,
        breakpoints: {
          640: { slidesPerView: 3 },
          1024: { slidesPerView: 4 },
          1280: { slidesPerView: 5 }
        }
      });
    });
  </script>
</body>
</html>
