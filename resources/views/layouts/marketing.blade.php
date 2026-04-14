<!DOCTYPE html>
<html lang="fr" class="scroll-smooth" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <title>@yield('title', 'Oppdrag.tech | Déploiement')</title>
    <meta name="description" content="@yield('meta_description', 'Oppdrag.tech aide les entreprises à cadrer et déployer des experts IA, data et cybersécurité dans un cadre fiable, rapide et conforme.')">
    <meta name="robots" content="@yield('meta_robots', 'index,follow')">
    <link rel="canonical" href="@yield('canonical', route('home'))">

    <meta name="theme-color" content="#08111f">
    <meta name="color-scheme" content="dark">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="oppdrag.tech">
    <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title', 'Oppdrag.tech | Déploiement')))">
    <meta property="og:description" content="@yield('og_description', trim($__env->yieldContent('meta_description', 'Oppdrag.tech aide les entreprises à cadrer et déployer des experts IA, data et cybersécurité dans un cadre fiable, rapide et conforme.')))">
    <meta property="og:url" content="@yield('canonical', route('home'))">
    <meta property="og:image" content="@yield('og_image', asset('Images/logo-opg2.png'))">
    <meta property="og:image:alt" content="@yield('og_image_alt', 'Logo oppdrag.tech')">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', trim($__env->yieldContent('title', 'Oppdrag.tech | Déploiement')))">
    <meta name="twitter:description" content="@yield('og_description', trim($__env->yieldContent('meta_description', 'Oppdrag.tech aide les entreprises à cadrer et déployer des experts IA, data et cybersécurité dans un cadre fiable, rapide et conforme.')))">
    <meta name="twitter:image" content="@yield('og_image', asset('Images/logo-opg2.png'))">
    <meta name="twitter:image:alt" content="@yield('og_image_alt', 'Logo oppdrag.tech')">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('Images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('Images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('Images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('Images/logo.png') }}">

    <script>
        (() => {
            try {
                const storageKey = 'oppdrag_intro_seen';
                if (!window.localStorage.getItem(storageKey)) {
                    document.documentElement.dataset.intro = 'pending';
                }
            } catch (error) {
                document.documentElement.dataset.intro = 'pending';
            }
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root,
        [data-theme="dark"] {
            color-scheme: dark;
            --page-bg: #07111d;
            --page-bg-soft: #0b1324;
            --surface-1: rgba(15, 23, 42, 0.82);
            --surface-2: rgba(15, 23, 42, 0.66);
            --surface-3: rgba(255, 255, 255, 0.05);
            --line-soft: rgba(148, 163, 184, 0.14);
            --line-strong: rgba(148, 163, 184, 0.2);
            --text-main: #e5eef7;
            --text-muted: #94a3b8;
            --accent-strong: #5eead4;
            --focus-ring: rgba(94, 234, 212, 0.28);
        }

        body {
            background:
                radial-gradient(circle at top left, rgba(45, 212, 191, 0.12), transparent 24%),
                radial-gradient(circle at 80% 10%, rgba(34, 211, 238, 0.08), transparent 22%),
                linear-gradient(180deg, var(--page-bg) 0%, var(--page-bg-soft) 100%);
        }

        [data-intro='pending'] body {
            overflow: hidden;
        }

        .text-balance {
            text-wrap: balance;
        }

        .page-shell {
            transition: opacity 720ms cubic-bezier(0.22, 1, 0.36, 1), filter 720ms cubic-bezier(0.22, 1, 0.36, 1);
        }

        [data-intro='pending'] .page-shell {
            opacity: 0;
            filter: blur(18px);
        }

        .intro-overlay {
            position: fixed;
            inset: 0;
            z-index: 120;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            background:
                radial-gradient(circle at top, rgba(94, 234, 212, 0.14), transparent 28%),
                linear-gradient(180deg, rgba(2, 6, 23, 0.96), rgba(2, 6, 23, 0.92));
            opacity: 0;
            transition: opacity 520ms ease, visibility 520ms ease;
            visibility: hidden;
        }

        [data-intro='pending'] .intro-overlay,
        [data-intro='active'] .intro-overlay,
        [data-intro='closing'] .intro-overlay {
            display: flex;
            visibility: visible;
        }

        [data-intro='active'] .intro-overlay,
        [data-intro='closing'] .intro-overlay {
            opacity: 1;
        }

        [data-intro='closing'] .intro-overlay {
            opacity: 0;
        }

        .intro-card {
            position: relative;
            width: min(32rem, 100%);
            overflow: hidden;
            border-radius: 2rem;
            border: 1px solid rgba(148, 163, 184, 0.16);
            background:
                linear-gradient(180deg, rgba(8, 17, 31, 0.92), rgba(15, 23, 42, 0.84)),
                radial-gradient(circle at top left, rgba(94, 234, 212, 0.12), transparent 34%);
            padding: 2rem;
            text-align: center;
            box-shadow: 0 32px 90px rgba(2, 8, 23, 0.38);
        }

        .intro-card::before {
            content: '';
            position: absolute;
            inset: 1px;
            border-radius: inherit;
            background:
                linear-gradient(180deg, rgba(255, 255, 255, 0.06), transparent 24%);
            pointer-events: none;
        }

        .intro-count {
            font-size: clamp(4rem, 12vw, 7rem);
            font-weight: 900;
            line-height: 1;
            letter-spacing: -0.06em;
            color: #ffffff;
            text-shadow: 0 0 40px rgba(94, 234, 212, 0.12);
        }

        .intro-caption {
            margin-top: 1.25rem;
            font-size: 0.95rem;
            line-height: 1.8;
            color: var(--text-muted);
        }

        section[id] {
            scroll-margin-top: 6rem;
        }

        .hero-grid {
            background-image:
                linear-gradient(rgba(148, 163, 184, 0.06) 1px, transparent 1px),
                linear-gradient(90deg, rgba(148, 163, 184, 0.06) 1px, transparent 1px);
            background-size: 48px 48px;
        }

        .bg-video-shell {
            position: absolute;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .bg-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 360ms ease;
            filter: saturate(0.92) contrast(1.04);
        }

        .bg-video.is-ready {
            opacity: var(--video-opacity, 0.32);
        }

        .bg-video-shell.is-fallback .bg-video {
            opacity: 0;
        }

        .noise-mask {
            background-image:
                radial-gradient(rgba(255, 255, 255, 0.08) 0.6px, transparent 0.6px);
            background-size: 20px 20px;
            opacity: 0.12;
            mix-blend-mode: soft-light;
        }

        .section-fade {
            content-visibility: auto;
            contain-intrinsic-size: 1px 760px;
        }

        .premium-section {
            position: relative;
            overflow: clip;
        }

        .premium-section::before {
            content: '';
            position: absolute;
            inset: 0 auto auto 50%;
            width: min(42rem, 72vw);
            height: 18rem;
            transform: translateX(-50%);
            border-radius: 9999px;
            background: radial-gradient(circle, rgba(94, 234, 212, 0.12), transparent 70%);
            pointer-events: none;
            filter: blur(14px);
            opacity: 0.8;
        }

        .glass-panel {
            background: linear-gradient(180deg, var(--surface-1), var(--surface-2));
            border: 1px solid var(--line-strong);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }

        .card-panel {
            background: linear-gradient(180deg, var(--surface-1), var(--surface-2));
            border: 1px solid var(--line-soft);
        }

        .hero-shell {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.14);
            background:
                linear-gradient(140deg, rgba(8, 17, 31, 0.94), rgba(15, 23, 42, 0.84)),
                radial-gradient(circle at top left, rgba(94, 234, 212, 0.14), transparent 30%);
            box-shadow:
                0 40px 90px rgba(2, 8, 23, 0.42),
                inset 0 1px 0 rgba(255, 255, 255, 0.06);
        }

        .hero-shell::before {
            content: '';
            position: absolute;
            inset: 1px;
            border-radius: inherit;
            background:
                radial-gradient(circle at var(--pointer-x, 50%) var(--pointer-y, 40%), rgba(103, 232, 249, 0.16), transparent 24%),
                linear-gradient(180deg, rgba(255, 255, 255, 0.05), transparent 24%);
            pointer-events: none;
            opacity: 0.9;
        }

        .ambient-orb {
            position: absolute;
            border-radius: 9999px;
            filter: blur(18px);
            pointer-events: none;
            opacity: 0.6;
        }

        .ambient-orb[data-orb='teal'] {
            background: radial-gradient(circle, rgba(94, 234, 212, 0.2), transparent 70%);
        }

        .ambient-orb[data-orb='cyan'] {
            background: radial-gradient(circle, rgba(103, 232, 249, 0.18), transparent 72%);
        }

        .hero-kpi-card,
        .interaction-card {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.14);
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.86), rgba(8, 17, 31, 0.74));
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.04);
        }

        .hero-kpi-card::after,
        .interaction-card::after {
            content: '';
            position: absolute;
            inset: auto 0 0 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(94, 234, 212, 0.55), transparent);
            opacity: 0.75;
        }

        .bento-card {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.12);
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.84), rgba(8, 17, 31, 0.7));
            transition: transform 180ms ease, border-color 180ms ease, box-shadow 180ms ease;
        }

        .bento-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at top right, rgba(94, 234, 212, 0.08), transparent 34%);
            opacity: 0;
            transition: opacity 180ms ease;
            pointer-events: none;
        }

        .bento-card:hover,
        .bento-card:focus-within {
            transform: translateY(-2px);
            border-color: rgba(94, 234, 212, 0.22);
            box-shadow: 0 18px 36px rgba(2, 8, 23, 0.26);
        }

        .bento-card:hover::before,
        .bento-card:focus-within::before {
            opacity: 1;
        }

        .profile-marquee-shell {
            position: relative;
            overflow: hidden;
            mask-image: linear-gradient(90deg, transparent, black 8%, black 92%, transparent);
            -webkit-mask-image: linear-gradient(90deg, transparent, black 8%, black 92%, transparent);
        }

        .profile-marquee-track {
            display: flex;
            width: max-content;
            animation: profile-marquee 46s linear infinite;
            gap: 1.25rem;
            will-change: transform;
        }

        .profile-marquee-group {
            display: flex;
            gap: 1.25rem;
        }

        .profile-card {
            width: min(20rem, 70vw);
            flex: 0 0 auto;
            overflow: hidden;
            border-radius: 1.8rem;
            border: 1px solid rgba(148, 163, 184, 0.14);
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.82), rgba(8, 17, 31, 0.72));
            box-shadow: 0 20px 48px rgba(2, 8, 23, 0.24);
            transition: transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease;
        }

        .profile-card:hover,
        .profile-card:focus-within {
            transform: translateY(-4px) rotate(-0.3deg);
            border-color: rgba(94, 234, 212, 0.22);
            box-shadow: 0 26px 54px rgba(2, 8, 23, 0.3);
        }

        .profile-card-media {
            position: relative;
            aspect-ratio: 4 / 5;
            overflow: hidden;
            background: rgba(15, 23, 42, 0.8);
        }

        .profile-card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: blur(12px) saturate(0.88) brightness(0.84);
            transform: scale(1.08);
        }

        .profile-card-overlay {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(180deg, rgba(2, 6, 23, 0.08), rgba(2, 6, 23, 0.42)),
                radial-gradient(circle at top, rgba(94, 234, 212, 0.08), transparent 30%);
        }

        .profile-card-badge {
            position: absolute;
            left: 1rem;
            top: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            border-radius: 9999px;
            border: 1px solid rgba(148, 163, 184, 0.12);
            background: rgba(8, 17, 31, 0.72);
            padding: 0.45rem 0.7rem;
            font-size: 0.7rem;
            font-weight: 600;
            color: #e5eef7;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .profile-card-body {
            padding: 1.25rem;
        }

        .profile-card-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tech-marquee-shell {
            position: relative;
            overflow: hidden;
            mask-image: linear-gradient(90deg, transparent, black 7%, black 93%, transparent);
            -webkit-mask-image: linear-gradient(90deg, transparent, black 7%, black 93%, transparent);
        }

        .tech-marquee-track {
            display: flex;
            width: max-content;
            gap: 1rem;
            animation: tech-marquee 38s linear infinite;
            will-change: transform;
        }

        .tech-marquee-group {
            display: flex;
            gap: 1rem;
        }

        .tech-pill-card {
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            min-width: max-content;
            border-radius: 9999px;
            border: 1px solid rgba(148, 163, 184, 0.14);
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.82), rgba(8, 17, 31, 0.72));
            padding: 0.7rem 1rem;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.04);
        }

        .tech-pill-logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.25rem;
            height: 2.25rem;
            border-radius: 9999px;
            border: 1px solid rgba(148, 163, 184, 0.14);
            background: rgba(255, 255, 255, 0.96);
            flex: 0 0 auto;
        }

        @keyframes profile-marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(calc(-50% - 0.625rem));
            }
        }

        @keyframes tech-marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(calc(-50% - 0.5rem));
            }
        }

        .case-study-hero {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.14);
            background: linear-gradient(180deg, rgba(8, 17, 31, 0.94), rgba(15, 23, 42, 0.86));
            box-shadow: 0 28px 64px rgba(2, 8, 23, 0.32);
        }

        .case-study-hero-media {
            position: absolute;
            inset: 0;
            overflow: hidden;
        }

        .case-study-hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 38%;
            filter: saturate(0.88) brightness(0.64);
            transform: scale(1.04);
        }

        .case-study-hero-overlay {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(2, 6, 23, 0.88), rgba(2, 6, 23, 0.46)),
                linear-gradient(180deg, rgba(2, 6, 23, 0.2), rgba(2, 6, 23, 0.72));
        }

        .case-study-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 9999px;
            border: 1px solid rgba(148, 163, 184, 0.16);
            background: rgba(8, 17, 31, 0.64);
            padding: 0.5rem 0.85rem;
            font-size: 0.75rem;
            font-weight: 600;
            color: #d9f8f2;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .manifesto-shell {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.14);
            background:
                linear-gradient(135deg, rgba(8, 17, 31, 0.96), rgba(15, 23, 42, 0.82)),
                radial-gradient(circle at top left, rgba(94, 234, 212, 0.12), transparent 28%);
            box-shadow: 0 30px 70px rgba(2, 8, 23, 0.34);
        }

        .manifesto-shell::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(255, 255, 255, 0.03), transparent 28%),
                radial-gradient(circle at 85% 18%, rgba(103, 232, 249, 0.08), transparent 18%);
            pointer-events: none;
        }

        .manifesto-principles {
            display: grid;
            gap: 1rem;
        }

        .manifesto-principle {
            position: relative;
            padding: 1.25rem 1.25rem 1.25rem 1.6rem;
            border-left: 1px solid rgba(94, 234, 212, 0.22);
            background: rgba(255, 255, 255, 0.03);
        }

        .manifesto-principle::before {
            content: '';
            position: absolute;
            left: -0.34rem;
            top: 1.45rem;
            width: 0.65rem;
            height: 0.65rem;
            border-radius: 9999px;
            background: #5eead4;
            box-shadow: 0 0 0 5px rgba(94, 234, 212, 0.12);
        }

        .qualification-shell {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.12);
            background: linear-gradient(180deg, rgba(8, 17, 31, 0.9), rgba(15, 23, 42, 0.76));
        }

        .qualification-steps {
            position: relative;
            display: grid;
            gap: 1rem;
        }

        .qualification-steps::before {
            content: '';
            position: absolute;
            left: 1.05rem;
            top: 1rem;
            bottom: 1rem;
            width: 1px;
            background: linear-gradient(180deg, rgba(94, 234, 212, 0.34), rgba(255, 255, 255, 0.06));
        }

        .qualification-step {
            position: relative;
            padding-left: 3.25rem;
        }

        .qualification-step-index {
            position: absolute;
            left: 0;
            top: 0.25rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.15rem;
            height: 2.15rem;
            border-radius: 9999px;
            border: 1px solid rgba(94, 234, 212, 0.24);
            background: rgba(8, 17, 31, 0.92);
            color: #d5fbf4;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            box-shadow: 0 0 0 6px rgba(94, 234, 212, 0.08);
        }

        .governance-shell {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.14);
            background:
                linear-gradient(180deg, rgba(8, 17, 31, 0.96), rgba(15, 23, 42, 0.82)),
                radial-gradient(circle at top right, rgba(94, 234, 212, 0.12), transparent 24%);
            box-shadow: 0 26px 64px rgba(2, 8, 23, 0.32);
        }

        .governance-shell::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                linear-gradient(180deg, rgba(255, 255, 255, 0.03), transparent 22%);
            pointer-events: none;
        }

        .governance-header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            border-bottom: 1px solid rgba(148, 163, 184, 0.12);
            padding-bottom: 1.25rem;
        }

        .governance-status {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            border-radius: 9999px;
            border: 1px solid rgba(94, 234, 212, 0.2);
            background: rgba(94, 234, 212, 0.1);
            padding: 0.55rem 0.85rem;
            font-size: 0.75rem;
            font-weight: 600;
            color: #d5fbf4;
        }

        .governance-grid {
            display: grid;
            gap: 1rem;
        }

        .governance-card {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.12);
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.78), rgba(8, 17, 31, 0.68));
        }

        .governance-card::after {
            content: '';
            position: absolute;
            inset: 0 auto 0 0;
            width: 2px;
            background: linear-gradient(180deg, rgba(94, 234, 212, 0.7), transparent 80%);
        }

        .surface-logo {
            border: 1px solid var(--line-soft);
            background: rgba(255, 255, 255, 0.96);
        }

        .field-input {
            width: 100%;
            border-radius: 1rem;
            border: 1px solid var(--line-soft);
            background: var(--surface-3);
            color: var(--text-main);
            padding: 0.95rem 1rem;
            outline: none;
            transition: border-color 160ms ease, box-shadow 160ms ease, background-color 160ms ease;
        }

        .field-input::placeholder {
            color: var(--text-muted);
        }

        .field-input:focus {
            border-color: var(--accent-strong);
            box-shadow: 0 0 0 4px var(--focus-ring);
            background: rgba(15, 23, 42, 0.92);
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 9999px;
            background: #5eead4;
            padding: 0.875rem 1.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            color: #08111f;
            transition: background-color 160ms ease, box-shadow 160ms ease;
        }

        .btn-primary:hover,
        .btn-primary:focus-visible {
            background: #67e8f9;
            box-shadow: 0 0 0 1px rgba(103, 232, 249, 0.16), 0 16px 34px rgba(34, 211, 238, 0.14);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 9999px;
            border: 1px solid rgba(255, 255, 255, 0.12);
            background: rgba(255, 255, 255, 0.05);
            padding: 0.875rem 1.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            color: #e5eef7;
            transition: background-color 160ms ease, border-color 160ms ease, color 160ms ease;
        }

        .btn-secondary:hover,
        .btn-secondary:focus-visible {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(94, 234, 212, 0.25);
        }

        .btn-light {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 9999px;
            background: #ffffff;
            padding: 0.875rem 1.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            color: #08111f;
            transition: background-color 160ms ease, box-shadow 160ms ease;
        }

        .btn-light:hover,
        .btn-light:focus-visible {
            background: #ccfbf1;
            box-shadow: 0 16px 32px rgba(12, 74, 110, 0.14);
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -0.45rem;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(94, 234, 212, 0.85), transparent);
            transform: scaleX(0.32);
            opacity: 0;
            transition: transform 160ms ease, opacity 160ms ease;
        }

        .nav-link:hover::after,
        .nav-link:focus-visible::after,
        .nav-link.is-active::after {
            transform: scaleX(1);
            opacity: 1;
        }

        .nav-link.is-active {
            color: #ffffff;
        }

        .menu-link {
            border-radius: 9999px;
            padding: 0.35rem 0.75rem;
            transition: background-color 160ms ease, color 160ms ease, border-color 160ms ease;
            border: 1px solid transparent;
        }

        .menu-link.is-active {
            color: #ffffff;
            border-color: rgba(94, 234, 212, 0.24);
            background: rgba(94, 234, 212, 0.1);
        }

        [data-reveal] {
            opacity: 0;
            transform: translateY(18px) scale(0.985);
            transition:
                opacity 560ms cubic-bezier(0.22, 1, 0.36, 1),
                transform 560ms cubic-bezier(0.22, 1, 0.36, 1);
            transition-delay: var(--reveal-delay, 0ms);
        }

        [data-reveal].is-visible {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .process-line {
            position: relative;
        }

        .process-line::before {
            content: '';
            position: absolute;
            left: 1rem;
            top: 1rem;
            bottom: 1rem;
            width: 1px;
            background: linear-gradient(180deg, rgba(94, 234, 212, 0.35), rgba(255, 255, 255, 0.06));
        }

        .step-node {
            position: relative;
        }

        .step-node::before {
            content: '';
            position: absolute;
            left: -0.2rem;
            top: 0.1rem;
            width: 0.75rem;
            height: 0.75rem;
            border-radius: 9999px;
            background: #5eead4;
            box-shadow: 0 0 0 6px rgba(94, 234, 212, 0.12);
        }

        .mission-console {
            position: relative;
            border: 1px solid rgba(148, 163, 184, 0.14);
            background:
                linear-gradient(180deg, rgba(8, 17, 31, 0.96), rgba(15, 23, 42, 0.88)),
                radial-gradient(circle at top right, rgba(94, 234, 212, 0.12), transparent 22%);
            box-shadow: 0 28px 72px rgba(2, 8, 23, 0.34);
        }

        .console-stage {
            border: 1px solid rgba(148, 163, 184, 0.14);
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.82), rgba(8, 17, 31, 0.72));
        }

        .console-chip {
            border: 1px solid rgba(148, 163, 184, 0.14);
            background: rgba(255, 255, 255, 0.04);
            color: var(--text-main);
            transition: border-color 160ms ease, background-color 160ms ease, color 160ms ease;
        }

        .console-chip[aria-pressed='true'] {
            border-color: rgba(94, 234, 212, 0.34);
            background: rgba(94, 234, 212, 0.14);
            color: #d5fbf4;
        }

        [data-console-panel] {
            display: none;
        }

        [data-console-panel].is-active {
            display: block;
        }

        :is(a, button, input, select, textarea):focus-visible {
            outline: 2px solid transparent;
            box-shadow: 0 0 0 4px var(--focus-ring);
        }

        @supports not ((backdrop-filter: blur(2px)) or (-webkit-backdrop-filter: blur(2px))) {
            .glass-panel {
                background: rgba(15, 23, 42, 0.92);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                transition-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
            }

            [data-reveal] {
                opacity: 1;
                transform: none;
            }

            .bg-video {
                transition: none;
            }

            .page-shell,
            .intro-overlay {
                transition: none;
            }

            .profile-marquee-track {
                animation: none;
            }

            .tech-marquee-track {
                animation: none;
            }
        }

        @media (pointer: coarse) {
            .hero-shell::before {
                background:
                    linear-gradient(180deg, rgba(255, 255, 255, 0.05), transparent 24%);
            }
        }

        @media (max-width: 768px) {
            .profile-marquee-shell {
                mask-image: none;
                -webkit-mask-image: none;
            }

            .tech-marquee-shell {
                mask-image: none;
                -webkit-mask-image: none;
            }

            .profile-card {
                width: min(17rem, 82vw);
            }

            .case-study-hero-overlay {
                background:
                    linear-gradient(180deg, rgba(2, 6, 23, 0.5), rgba(2, 6, 23, 0.84)),
                    linear-gradient(180deg, rgba(2, 6, 23, 0.24), rgba(2, 6, 23, 0.8));
            }
        }
    </style>

    @yield('structured_data')
</head>
<body class="min-h-screen overflow-x-hidden bg-slate-950 font-sans text-slate-100 antialiased">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-full focus:bg-white focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-slate-950">
        Aller au contenu
    </a>

    <div class="intro-overlay" id="intro-overlay" aria-hidden="true">
        <div class="intro-card">
            <div class="relative z-10 flex flex-col items-center gap-8">
                @include('partials.brand-mark', ['loading' => 'eager', 'fetchpriority' => 'high'])
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Mise en mouvement</p>
                    <p class="intro-count" id="intro-count" aria-live="polite">3</p>
                    <p class="intro-caption">Des experts IA, data et cybersécurité, mobilisés dans un cadre lisible, exigeant et premium.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page-shell relative isolate">
        @include('partials.marketing-header')

        <main id="main-content">
            @yield('content')
        </main>

        @include('partials.marketing-footer')
    </div>

    <script>
        document.querySelectorAll('[data-menu-toggle]').forEach((button) => {
            const targetId = button.getAttribute('aria-controls');
            const target = targetId ? document.getElementById(targetId) : null;

            if (!target) {
                return;
            }

            const closeMenu = () => {
                target.classList.add('hidden');
                button.setAttribute('aria-expanded', 'false');
            };

            button.addEventListener('click', () => {
                const expanded = button.getAttribute('aria-expanded') === 'true';
                button.setAttribute('aria-expanded', expanded ? 'false' : 'true');
                target.classList.toggle('hidden');
            });

            target.querySelectorAll('a').forEach((link) => {
                link.addEventListener('click', closeMenu);
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') {
                    closeMenu();
                }
            });

            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1024) {
                    closeMenu();
                }
            });
        });

        const sectionLinks = document.querySelectorAll('[data-nav-section]');
        if (sectionLinks.length && document.body.querySelector('#offres')) {
            const navGroups = new Map();

            sectionLinks.forEach((link) => {
                const section = link.dataset.navSection;
                if (!navGroups.has(section)) {
                    navGroups.set(section, []);
                }

                navGroups.get(section).push(link);
            });

            const clearActiveSections = () => {
                navGroups.forEach((links) => {
                    links.forEach((link) => {
                        link.classList.remove('is-active');
                        link.removeAttribute('aria-current');
                    });
                });
            };

            const setActiveSection = (sectionId) => {
                clearActiveSections();

                const links = navGroups.get(sectionId) ?? [];
                links.forEach((link) => {
                    link.classList.add('is-active');
                    link.setAttribute('aria-current', 'location');
                });
            };

            const observedSections = Array.from(navGroups.keys())
                .map((id) => document.getElementById(id))
                .filter(Boolean);

            if (observedSections.length) {
                const sectionObserver = new IntersectionObserver((entries) => {
                    const visible = entries
                        .filter((entry) => entry.isIntersecting)
                        .sort((a, b) => b.intersectionRatio - a.intersectionRatio);

                    if (visible[0]?.target?.id) {
                        setActiveSection(visible[0].target.id);
                    }
                }, {
                    threshold: [0.2, 0.45, 0.7],
                    rootMargin: '-18% 0px -55% 0px',
                });

                observedSections.forEach((section) => sectionObserver.observe(section));
            }
        }

        const revealItems = document.querySelectorAll('[data-reveal]');
        if (revealItems.length) {
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.14, rootMargin: '0px 0px -8% 0px' });

            revealItems.forEach((item) => revealObserver.observe(item));
        }

        const heroShell = document.querySelector('[data-hero-shell]');
        if (heroShell && window.matchMedia('(pointer:fine)').matches && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            let rafId = null;

            const updatePointer = (event) => {
                const bounds = heroShell.getBoundingClientRect();
                const x = ((event.clientX - bounds.left) / bounds.width) * 100;
                const y = ((event.clientY - bounds.top) / bounds.height) * 100;
                heroShell.style.setProperty('--pointer-x', `${x.toFixed(2)}%`);
                heroShell.style.setProperty('--pointer-y', `${y.toFixed(2)}%`);
                rafId = null;
            };

            heroShell.addEventListener('pointermove', (event) => {
                if (rafId !== null) {
                    return;
                }

                rafId = window.requestAnimationFrame(() => updatePointer(event));
            });

            heroShell.addEventListener('pointerleave', () => {
                heroShell.style.setProperty('--pointer-x', '50%');
                heroShell.style.setProperty('--pointer-y', '40%');
            });
        }

        const consoleRoot = document.querySelector('[data-console]');
        if (consoleRoot) {
            const buttons = consoleRoot.querySelectorAll('[data-console-trigger]');
            const panels = consoleRoot.querySelectorAll('[data-console-panel]');

            const activateStage = (value) => {
                buttons.forEach((button) => {
                    button.setAttribute('aria-pressed', button.dataset.consoleTrigger === value ? 'true' : 'false');
                });

                panels.forEach((panel) => {
                    panel.classList.toggle('is-active', panel.dataset.consolePanel === value);
                });
            };

            buttons.forEach((button) => {
                button.addEventListener('click', () => activateStage(button.dataset.consoleTrigger));
            });

            activateStage(buttons[0]?.dataset.consoleTrigger);
        }

        document.querySelectorAll('[data-bg-video]').forEach((video) => {
            const shell = video.closest('.bg-video-shell');
            const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            if (reducedMotion) {
                shell?.classList.add('is-fallback');
                return;
            }

            const markReady = () => video.classList.add('is-ready');
            const markFallback = () => shell?.classList.add('is-fallback');

            video.muted = true;
            video.playsInline = true;
            video.defaultMuted = true;

            video.addEventListener('loadeddata', markReady, { once: true });
            video.addEventListener('canplay', markReady, { once: true });
            video.addEventListener('error', markFallback, { once: true });
            video.addEventListener('stalled', markFallback, { once: true });

            const playAttempt = video.play();
            if (playAttempt && typeof playAttempt.catch === 'function') {
                playAttempt.catch(() => {
                    markFallback();
                });
            }
        });

        (() => {
            const root = document.documentElement;
            if (root.dataset.intro !== 'pending') {
                return;
            }

            const overlay = document.getElementById('intro-overlay');
            const count = document.getElementById('intro-count');
            const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const storageKey = 'oppdrag_intro_seen';
            const startValue = 3;
            const stepDuration = reducedMotion ? 280 : 620;
            const closeDuration = reducedMotion ? 120 : 520;

            if (!overlay || !count) {
                root.dataset.intro = 'done';
                return;
            }

            root.dataset.intro = 'active';
            overlay.setAttribute('aria-hidden', 'false');

            let current = startValue;
            count.textContent = String(current);

            const finishIntro = () => {
                root.dataset.intro = 'closing';
                window.setTimeout(() => {
                    root.dataset.intro = 'done';
                    overlay.setAttribute('aria-hidden', 'true');
                    try {
                        window.localStorage.setItem(storageKey, '1');
                    } catch (error) {
                        // Ignore storage failures and continue to reveal the page.
                    }
                }, closeDuration);
            };

            const tick = () => {
                current -= 1;
                if (current >= 1) {
                    count.textContent = String(current);
                    window.setTimeout(tick, stepDuration);
                    return;
                }

                finishIntro();
            };

            window.setTimeout(tick, stepDuration);
        })();
    </script>

    @stack('scripts')
</body>
</html>
