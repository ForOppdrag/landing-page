@props([
    'loading' => 'lazy',
    'fetchpriority' => null,
])

<a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="Retour à l'accueil oppdrag.tech">
    <img
        src="{{ asset('Images/logo-opg2.png') }}"
        alt="Logo oppdrag.tech"
        class="h-10 w-10 object-contain"
        width="40"
        height="40"
        loading="{{ $loading }}"
        decoding="async"
        @if ($fetchpriority)
            fetchpriority="{{ $fetchpriority }}"
        @endif
    >
    <span class="text-lg font-bold tracking-[-0.02em] text-white">oppdrag.tech</span>
</a>
