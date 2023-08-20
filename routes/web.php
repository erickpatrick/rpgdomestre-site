<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

Route::feeds();

Route::get('generate-sitemap-site-pessoal', function() {
    SitemapGenerator::create('https://rpgdomestre.com')
    ->getSitemap()
    ->writeToFile(public_path('sitemap.xml'));
});
