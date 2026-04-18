<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('sitemap:generate', function () {
    $baseUrl = 'https://oppdrag.tech';
    $paths = [
        '/',
        '/faq',
        '/mentions-legales',
        '/confidentialite',
        '/a-propos',
        '/blog',
    ];

    $sitemap = Sitemap::create();

    foreach ($paths as $path) {
        $absoluteUrl = $path === '/'
            ? "{$baseUrl}/"
            : "{$baseUrl}{$path}";

        $sitemap->add(
            Url::create($absoluteUrl)->setLastModificationDate(now())
        );
    }

    $sitemap->writeToFile(public_path('sitemap.xml'));

    $this->info("Sitemap generated at {$baseUrl}/sitemap.xml");
})->purpose('Generate the public sitemap.xml file');
