<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

Route::get('/weekly/{week}', function (string $week) {
    return "redirecionar para rpg-na-semana.com/" . $week;
})->where('week', '[0-9]+');

Route::feeds();

Route::get('generate-sitemap-site-pessoal', function() {
    SitemapGenerator::create('https://rpgdomestre.com')
    ->getSitemap()
    ->writeToFile(public_path('sitemap.xml'));
});
