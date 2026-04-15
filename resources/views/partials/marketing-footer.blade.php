<footer class="relative isolate overflow-hidden border-t border-white/10 bg-slate-950/90">
    <div class="absolute inset-0 z-0" aria-hidden="true">
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
                style="--video-opacity: 0.22;"
            >
                <source src="{{ asset('Videos/commando.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(2,6,23,0.74),rgba(2,6,23,0.88))]"></div>
        <div class="hero-grid absolute inset-0 opacity-15"></div>
    </div>

    <div class="relative z-10 mx-auto grid max-w-7xl gap-10 px-6 py-14 lg:grid-cols-[1.2fr_.8fr_.8fr_1fr] lg:px-8">
        <div class="space-y-5">
            @include('partials.brand-mark')

            <p class="max-w-sm text-sm leading-7 text-slate-300">
                Nous accompagnons les entreprises pour structurer, sécuriser et déployer leurs projets IA, data et cybersécurité avec le juste niveau d’exigence et dans un cadre fiable et robuste.
            </p>

            <div class="flex flex-wrap gap-2 text-xs">
                <span class="rounded-full border border-teal-300/20 bg-teal-300/10 px-3 py-1 font-semibold text-teal-200">Déploiement rapide</span>
                <span class="rounded-full border border-cyan-300/20 bg-cyan-300/10 px-3 py-1 font-semibold text-cyan-200">Sélection exigeante</span>
                <span class="rounded-full border border-amber-300/20 bg-amber-300/10 px-3 py-1 font-semibold text-amber-200">Démarche RSE</span>
            </div>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.18em] text-white">Contact</p>
            <ul class="mt-5 space-y-3 text-sm text-slate-300">
                <li>26 rue des Monts de Vigne, 21000 Dijon</li>
                <li><a href="mailto:contact@oppdrag.tech" class="transition hover:text-white">contact@oppdrag.tech</a></li>
                <li><a href="tel:+33951218747" class="transition hover:text-white">+33 9 51 21 87 47</a></li>
            </ul>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.18em] text-white">Ressources</p>
            <ul class="mt-5 space-y-3 text-sm text-slate-300">
                <li><a href="{{ route('faq') }}" class="transition hover:text-white">FAQ</a></li>
                <li><a href="{{ route('blog') }}" class="transition hover:text-white">Blog</a></li>
                <li><a href="{{ route('a-propos') }}" class="transition hover:text-white">À propos</a></li>
                <li><a href="{{ route('mentions-legales') }}" class="transition hover:text-white">Mentions légales</a></li>
                <li><a href="{{ route('confidentialite') }}" class="transition hover:text-white">Confidentialité</a></li>
            </ul>
        </div>

        <div id="footer-newsletter">
            <p class="text-sm font-semibold uppercase tracking-[0.18em] text-white">Newsletter</p>
            <p class="mt-5 text-sm leading-7 text-slate-300">
                Recevez une veille experte et décisive sur l’IA, la data et la cybersécurité : des analyses pointues, des tendances émergentes et des insights stratégiques spécialement pensés pour les dirigeants d’entreprises qui veulent transformer l’information en avantage compétitif.
            </p>

            @if (session('newsletter_success'))
                <p class="mt-4 rounded-2xl border border-emerald-400/30 bg-emerald-400/10 px-4 py-3 text-sm font-medium text-emerald-200" role="status">
                    {{ session('newsletter_success') }}
                </p>
            @endif

            @error('newsletter_email', 'newsletter')
                <p class="mt-4 rounded-2xl border border-rose-400/30 bg-rose-400/10 px-4 py-3 text-sm font-medium text-rose-200" role="alert">
                    {{ $message }}
                </p>
            @enderror

            <form method="POST" action="{{ route('newsletter.subscribe') }}" class="mt-5 flex flex-col gap-3">
                @csrf
                <input type="hidden" name="form_started_at" value="{{ now()->timestamp }}">
                <input type="text" name="company_website" value="" tabindex="-1" autocomplete="off" class="sr-only" aria-hidden="true">
                <label for="newsletter_email" class="sr-only">Votre email</label>
                <input
                    id="newsletter_email"
                    name="newsletter_email"
                    type="email"
                    value="{{ old('newsletter_email') }}"
                    required
                    inputmode="email"
                    autocomplete="email"
                    class="field-input"
                    placeholder="Votre email professionnel"
                >
                <button type="submit" class="btn-light">
                    S’inscrire
                </button>
            </form>
        </div>
    </div>

    <div class="relative z-10 border-t border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-8 lg:px-8">
            <div class="flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-xl">
                    <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Écosystème & engagements</p>
                    <p class="mt-3 text-sm leading-7 text-slate-300">
                        Des repères de conformité, d’engagement et d’impact qui soutiennent notre cadre de travail, sans prendre le pas sur l’exécution.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-3 sm:grid-cols-4 lg:min-w-[32rem]">
                    <div class="surface-logo flex h-20 items-center justify-center rounded-2xl px-4 py-3">
                        <img src="{{ asset('Images/cnil.svg') }}" alt="Référence CNIL" class="h-9 w-auto object-contain" loading="lazy" decoding="async" width="110" height="36">
                    </div>
                    <div class="surface-logo flex h-20 items-center justify-center rounded-2xl px-4 py-3">
                        <img src="{{ asset('Images/onacvg.png') }}" alt="Logo ONaCVG" class="h-10 w-auto object-contain" loading="lazy" decoding="async" width="110" height="40">
                    </div>
                    <div class="surface-logo flex h-20 items-center justify-center rounded-2xl px-4 py-3">
                        <img src="{{ asset('Images/envol.jpg') }}" alt="Label EnVol" class="h-10 w-auto object-contain" loading="lazy" decoding="async" width="110" height="40">
                    </div>
                    <div class="surface-logo flex h-20 items-center justify-center rounded-2xl px-4 py-3">
                        <img src="{{ asset('Images/lucie.png') }}" alt="Label Lucie" class="h-10 w-auto object-contain" loading="lazy" decoding="async" width="110" height="40">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative z-10 mx-auto flex max-w-7xl flex-col gap-3 border-t border-white/10 px-6 py-6 text-sm text-slate-400 lg:flex-row lg:items-center lg:justify-between lg:px-8">
        <p>© {{ now()->year }} oppdrag.tech. Tous droits réservés.</p>
        <p>Des experts IA, data et cybersécurité, mobilisés rapidement dans un cadre fiable, responsable et conforme.</p>
    </div>
</footer>
