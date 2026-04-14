@extends('layouts.marketing')

@section('title', 'Mentions légales | Oppdrag.tech')
@section('meta_description', 'Consultez les mentions légales du site Oppdrag.tech : éditeur, hébergement, propriété intellectuelle, données personnelles, droit applicable et informations de contact.')
@section('canonical', route('mentions-legales'))

@section('content')
    @php
        $summary = [
            ['label' => '1. Éditeur', 'href' => '#editeur'],
            ['label' => '2. Publication', 'href' => '#publication'],
            ['label' => '3. Hébergeur', 'href' => '#hebergeur'],
            ['label' => '4. Accès', 'href' => '#acces'],
            ['label' => '5. Utilisation', 'href' => '#conditions'],
            ['label' => '6. Propriété intellectuelle', 'href' => '#propriete'],
            ['label' => '7. Liens', 'href' => '#liens'],
            ['label' => '8. Cookies & données', 'href' => '#cookies'],
            ['label' => '9. Droit applicable', 'href' => '#droit'],
            ['label' => '10. Contact', 'href' => '#contact'],
        ];
    @endphp

    <section class="border-b border-white/10">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-teal-100">Mentions légales</p>
                <h1 class="mt-4 text-balance text-4xl font-black tracking-tight text-white md:text-6xl">Le cadre légal du site oppdrag.tech.</h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    Retrouvez ici les principales informations relatives à l’édition, à l’hébergement, à l’utilisation du site et au cadre applicable à ses contenus.
                </p>
                <p class="mt-6 text-sm font-medium uppercase tracking-[0.18em] text-slate-400">Version mise à jour : 24 juin 2025</p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-[0.72fr_1.28fr]">
            <aside class="card-panel h-max rounded-[2rem] p-6">
                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-teal-100">Sommaire</p>
                <nav class="mt-5" aria-label="Sommaire mentions légales">
                    <ul class="space-y-3">
                        @foreach ($summary as $item)
                            <li><a href="{{ $item['href'] }}" class="text-sm font-medium text-slate-300 transition hover:text-white">{{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </aside>

            <div class="space-y-6">
                <section id="editeur" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">1. Éditeur</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">
                        oppdrag.tech – SAS au capital de 4 500 €, dont le siège social est situé au 26 rue des Monts de Vigne, 21000 Dijon, France.<br>
                        Téléphone : +33 9 51 21 87 47<br>
                        Email : <a href="mailto:contact@oppdrag.tech" class="text-teal-100 hover:text-white">contact@oppdrag.tech</a>
                    </p>
                </section>

                <section id="publication" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">2. Directeur de la publication</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Le directeur de la publication est Monsieur Ralph ZOGO, représentant légal de oppdrag.tech.</p>
                </section>

                <section id="hebergeur" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">3. Hébergeur</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Le site est hébergé par <strong class="text-white">OVH SAS</strong>, 2 rue Kellermann, 59100 Roubaix, France.</p>
                </section>

                <section id="acces" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">4. Accès et service</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">L’accès au site est libre. Oppdrag.tech met en œuvre les moyens raisonnables pour assurer sa fiabilité, sans pouvoir garantir une disponibilité continue ni l’absence d’erreurs ou d’interruptions. Le site peut être modifié, suspendu ou interrompu sans préavis.</p>
                </section>

                <section id="conditions" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">5. Conditions d’utilisation</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">L’utilisateur s’engage à utiliser le site dans le respect des lois et règlements en vigueur. Toute tentative d’altération, de perturbation, d’accès frauduleux ou d’utilisation abusive du site est interdite.</p>
                </section>

                <section id="propriete" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">6. Propriété intellectuelle</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Les textes, éléments graphiques, logos, visuels, vidéos, marques, bases de données et contenus présents sur le site sont protégés par le droit de la propriété intellectuelle. Toute reproduction, représentation ou exploitation sans autorisation préalable est interdite.</p>
                </section>

                <section id="liens" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">7. Liens hypertextes</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Le site peut contenir des liens vers des sites tiers. Oppdrag.tech n’exerce aucun contrôle sur ces contenus externes et décline toute responsabilité quant à leur disponibilité, leur contenu ou leur exactitude.</p>
                </section>

                <section id="cookies" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">8. Cookies & données personnelles</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Les règles applicables aux cookies, aux traitements de données personnelles et à l’exercice des droits des utilisateurs sont détaillées dans la <a href="{{ route('confidentialite') }}" class="text-teal-100 hover:text-white">Politique de confidentialité</a>.</p>
                </section>

                <section id="droit" class="card-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">9. Droit applicable & juridiction</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">Les présentes mentions légales sont soumises au droit français. En cas de litige et à défaut de résolution amiable, les juridictions compétentes seront celles désignées par les règles de procédure applicables.</p>
                </section>

                <section id="contact" class="glass-panel rounded-[2rem] p-7">
                    <h2 class="text-2xl font-bold text-white">10. Contact</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-300">
                        Pour toute question relative au site ou à son contenu, vous pouvez écrire à <a href="mailto:contact@oppdrag.tech" class="text-teal-100 hover:text-white">contact@oppdrag.tech</a>.<br>
                        Pour un signalement d’abus : <a href="mailto:abus@oppdrag.tech" class="text-teal-100 hover:text-white">abus@oppdrag.tech</a>.
                    </p>
                </section>
            </div>
        </div>
    </section>
@endsection
