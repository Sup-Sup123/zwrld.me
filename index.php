<?php declare(strict_types=1);

$pages = [
    '/' => __DIR__ . '/pages/home.php',
    '/404' => __DIR__ . '/pages/404.php',
    '/about' => __DIR__ . '/pages/about.php',
    '/contact' => __DIR__ . '/pages/contact-form.php',
    '/tour' => __DIR__ . '/pages/tour.php',
    '/songs' => __DIR__ . '/pages/songs.php',
    '/comingsoon' => __DIR__ . '/pages/comingsoon.php'
];

$uri = $_SERVER['REQUEST_URI'];
$page = $pages[$uri] ?? $pages['/404'];

ob_start();
require_once $page;
$content = ob_get_contents();
ob_end_clean();

require_once __DIR__ . '/pages/_layout.php';
