@php
    $isHome = request()->routeIs('home');
    $homeSection = static fn (string $anchor): string => $isHome ? "#{$anchor}" : route('home') . "#{$anchor}";

    $navigation = [
        ['label' => 'Offres', 'href' => $homeSection('offres'), 'section' => 'offres'],
        ['label' => 'Méthode', 'href' => $homeSection('process'), 'section' => 'process'],
        ['label' => 'Expertises', 'href' => $homeSection('expertises'), 'section' => 'expertises'],
        ['label' => 'Engagement', 'href' => $homeSection('impact'), 'section' => 'impact'],
        ['label' => 'FAQ', 'href' => route('faq'), 'route' => 'faq'],
        ['label' => 'À propos', 'href' => route('a-propos'), 'route' => 'a-propos'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/90 backdrop-blur-md">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8" aria-label="Navigation principale">
        @include('partials.brand-mark', ['loading' => 'eager', 'fetchpriority' => 'high'])

        <div class="hidden items-center gap-7 lg:flex">
            @foreach ($navigation as $item)
                <a
                    href="{{ $item['href'] }}"
                    class="nav-link text-sm font-medium text-slate-300 transition hover:text-white {{ isset($item['route']) && request()->routeIs($item['route']) ? 'is-active' : '' }}"
                    @if (isset($item['section']))
                        data-nav-section="{{ $item['section'] }}"
                    @endif
                    @if (isset($item['route']) && request()->routeIs($item['route']))
                        aria-current="page"
                    @endif
                >
                    {{ $item['label'] }}
                </a>
            @endforeach

            <a href="{{ $homeSection('contact') }}" class="btn-primary px-5 py-2.5">
                Parler à un expert
            </a>
        </div>

        <button
            type="button"
            class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/5 text-white lg:hidden"
            aria-label="Ouvrir le menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
            data-menu-toggle
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" />
            </svg>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden border-t border-white/10 bg-slate-950/95 px-6 py-5 lg:hidden">
        <div class="flex flex-col gap-4">
            @foreach ($navigation as $item)
                <a
                    href="{{ $item['href'] }}"
                    class="menu-link text-sm font-medium text-slate-300 {{ isset($item['route']) && request()->routeIs($item['route']) ? 'is-active' : '' }}"
                    @if (isset($item['section']))
                        data-nav-section="{{ $item['section'] }}"
                    @endif
                    @if (isset($item['route']) && request()->routeIs($item['route']))
                        aria-current="page"
                    @endif
                >
                    {{ $item['label'] }}
                </a>
            @endforeach

            <a href="{{ $homeSection('contact') }}" class="btn-primary mt-2 px-5 py-3">
                Parler à un expert
            </a>
        </div>
    </div>
</header>
