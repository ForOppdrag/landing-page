@extends('layouts.marketing')

@section('title', 'Politique de confidentialité | Oppdrag.tech')
@section('meta_description', 'Consultez la politique de confidentialité d’Oppdrag.tech : données collectées, finalités, bases légales, conservation, sécurité, cookies et exercice des droits RGPD.')
@section('canonical', route('confidentialite'))

@section('content')
    @php
        $summary = [
            ['label' => '1. Introduction', 'href' => '#introduction'],
            ['label' => '2. Données collectées', 'href' => '#donnees'],
            ['label' => '3. Finalités', 'href' => '#finalites'],
            ['label' => '4. Bases légales', 'href' => '#base-legale'],
            ['label' => '5. Partage', 'href' => '#partage'],
            ['label' => '6. Conservation', 'href' => '#conservation'],
            ['label' => '7. Sécurité', 'href' => '#securite'],
            ['label' => '8. Cookies', 'href' => '#cookies'],
            ['label' => '9. Transferts', 'href' => '#transferts'],
            ['label' => '10. Vos droits', 'href' => '#droits'],
            ['label' => '11. Modifications', 'href' => '#modifications'],
        ];
    @endphp

    <section class="border-b border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Confidentialité</p>
                <h1 class="mt-4 text-balance text-4xl font-black tracking-tight text-white md:text-6xl">Politique de confidentialité</h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Cette politique explique comment oppdrag.tech collecte, utilise, conserve et protège les données personnelles traitées via le site et ses interactions avec les utilisateurs.
                </p>
                <p class="mt-6 text-sm font-medium uppercase tracking-[0.18em] text-slate-400">Dernière mise à jour : 24 juin 2025</p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-[0.72fr_1.28fr]">
            <aside class="card-panel h-max rounded-[2rem] p-6">
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Sommaire</p>
                <nav class="mt-5" aria-label="Sommaire confidentialité">
                    <ul class="space-y-3">
                        @foreach ($summary as $item)
                            <li><a href="{{ $item['href'] }}" class="text-sm font-medium text-slate-300 transition hover:text-white">{{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </aside>

            <div class="space-y-6">
                <section id="introduction" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">1. Introduction</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Oppdrag.tech s’engage à protéger la vie privée des utilisateurs de son site. La présente politique décrit les principaux traitements de données personnelles liés au site, aux formulaires de contact, aux échanges par email et aux outils strictement nécessaires à son fonctionnement.</p>
                </section>

                <section id="donnees" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">2. Données collectées</h2>
                    <div class="mt-4 space-y-5 text-sm leading-8 text-slate-300">
                        <div>
                            <h3 class="text-lg font-semibold text-white">2.1 Données fournies directement</h3>
                            <ul class="mt-2 list-disc space-y-1 pl-5">
                                <li>Nom, prénom, email, téléphone</li>
                                <li>Fonction, société, informations professionnelles</li>
                                <li>Contenu des messages transmis via formulaire ou email</li>
                                <li>Toute information communiquée volontairement dans le cadre d’une demande</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">2.2 Données collectées automatiquement</h3>
                            <ul class="mt-2 list-disc space-y-1 pl-5">
                                <li>Adresse IP, type d’appareil, navigateur, système d’exploitation</li>
                                <li>Pages consultées, temps de consultation, données techniques de navigation</li>
                                <li>Informations liées aux cookies et technologies similaires, selon leur paramétrage</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="finalites" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">3. Finalités du traitement</h2>
                    <ul class="mt-4 list-disc space-y-2 pl-5 text-sm leading-8 text-slate-300">
                        <li>Répondre aux demandes adressées via le site ou par email</li>
                        <li>Assurer le suivi des échanges commerciaux ou opérationnels</li>
                        <li>Améliorer le fonctionnement, la sécurité et l’ergonomie du site</li>
                        <li>Respecter les obligations légales, réglementaires ou de conformité</li>
                    </ul>
                </section>

                <section id="base-legale" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">4. Bases légales</h2>
                    <ul class="mt-4 list-disc space-y-2 pl-5 text-sm leading-8 text-slate-300">
                        <li>Le consentement, lorsque celui-ci est requis</li>
                        <li>L’exécution de mesures précontractuelles ou contractuelles</li>
                        <li>L’intérêt légitime de oppdrag.tech pour la gestion des demandes, la sécurité et l’amélioration du site</li>
                        <li>Le respect d’obligations légales ou réglementaires</li>
                    </ul>
                </section>

                <section id="partage" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">5. Partage des données</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Les données personnelles peuvent être communiquées, dans la limite du nécessaire, à des prestataires techniques utilisés pour l’hébergement, la sécurité, la gestion du site ou les échanges. Oppdrag.tech ne cède pas les données personnelles à des tiers à des fins de revente.</p>
                </section>

                <section id="conservation" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">6. Conservation</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Les données sont conservées pendant une durée proportionnée aux finalités poursuivies, sous réserve des obligations légales applicables. Lorsqu’elles ne sont plus nécessaires, elles sont supprimées, archivées ou anonymisées selon le cas.</p>
                </section>

                <section id="securite" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">7. Sécurité</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Oppdrag.tech met en œuvre des mesures techniques et organisationnelles raisonnables pour protéger les données contre l’accès non autorisé, la perte, l’altération, la divulgation ou la destruction.</p>
                </section>

                <section id="cookies" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">8. Cookies</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Le site peut utiliser des cookies ou technologies similaires pour assurer son bon fonctionnement, améliorer l’expérience utilisateur, mesurer son audience ou renforcer sa sécurité. Lorsqu’un consentement est requis, celui-ci doit être recueilli selon les règles applicables.</p>
                </section>

                <section id="transferts" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">9. Transferts internationaux</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Si certains prestataires impliquent des traitements hors de l’Espace économique européen, oppdrag.tech veille à ce que des garanties appropriées soient mises en œuvre conformément au cadre applicable.</p>
                </section>

                <section id="droits" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">10. Vos droits</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Vous pouvez exercer vos droits d’accès, de rectification, d’effacement, de limitation, d’opposition ou de portabilité lorsque cela s’applique. Pour toute demande, vous pouvez écrire à <a href="mailto:privacy@oppdrag.tech" class="text-teal-100 hover:text-white">privacy@oppdrag.tech</a> ou <a href="mailto:contact@oppdrag.tech" class="text-teal-100 hover:text-white">contact@oppdrag.tech</a>.</p>
                </section>

                <section id="modifications" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">11. Modifications</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">La présente politique peut être mise à jour pour tenir compte des évolutions légales, techniques ou organisationnelles. La version publiée sur le site est celle qui fait référence à la date de consultation.</p>
                </section>
            </div>
        </div>
    </section>
@endsection
