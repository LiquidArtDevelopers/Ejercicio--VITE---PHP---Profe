<?php

$navIncludeLang = $lang ?? env('LANG_DEFAULT', 'es');
$navLangs = $GLOBALS['app_langs'] ?? [$navIncludeLang];
$navCurrentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

if ($navCurrentPath !== '/') {
    $navCurrentPath = rtrim($navCurrentPath, '/');
}

$navSegments = explode('/', trim($navCurrentPath, '/'));
$navFirstSegment = $navSegments[0] ?? '';
$navSuffix = '/';
$navSuffixEs = '/';
$navSuffixEu = '/';

if (in_array($navFirstSegment, $navLangs, true)) {
    $navRest = array_slice($navSegments, 1);
    $navSuffix = count($navRest) > 0 ? '/' . implode('/', $navRest) : '/';
}

// Equivalencias sencillas entre rutas. Cuando se cambie una URL en un idioma,
// se cambia aquí también para que el selector ES/EU lleve a la página homóloga.
$rutasEsAEu = [
    '/' => '/',
    '/contacto' => '/kontaktua',
    '/quienes-somos' => '/nortzuk-gara',
    '/productos' => '/produktuak',
    '/producto1' => '/produktua-1',
    '/producto2' => '/produktua-2',
    '/legal' => '/lege-oharra',
];

$rutasEuAEs = [
    '/' => '/',
    '/kontaktua' => '/contacto',
    '/nortzuk-gara' => '/quienes-somos',
    '/produktuak' => '/productos',
    '/produktua-1' => '/producto1',
    '/produktua-2' => '/producto2',
    '/lege-oharra' => '/legal',
];

if ($navIncludeLang === 'es') {
    $navSuffixEs = $navSuffix;
    $navSuffixEu = $rutasEsAEu[$navSuffix] ?? '/';
}

if ($navIncludeLang === 'eu') {
    $navSuffixEu = $navSuffix;
    $navSuffixEs = $rutasEuAEs[$navSuffix] ?? '/';
}

$navIncludePath = app_path('includes/' . $navIncludeLang . '/nav.php');

if (!is_file($navIncludePath)) {
    $navIncludePath = app_path('includes/' . env('LANG_DEFAULT', 'es') . '/nav.php');
}

require $navIncludePath;
