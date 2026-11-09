<?php
// Fungsi pendukung tampilan yang dipakai bersama.
function h($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function tampilAwal(string $judul, string $bagian, string $prefix = ''): void
{
    $judulAman = h($judul);
    $bagianAman = h($bagian);
    $css = h($prefix . 'assets/style.css');
    $beranda = h($prefix . 'index.php');
    echo <<<HTML
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$judulAman} | Praktikum PHP 7</title>
    <link rel="stylesheet" href="{$css}">
</head>
<body>
<main class="container">
    <header class="site-header">
        <a class="brand" href="{$beranda}">Praktikum 7 <span>PHP</span></a>
        <p class="eyebrow">{$bagianAman}</p>
        <h1>{$judulAman}</h1>
    </header>
    <section class="panel">
HTML;
}

function tampilAkhir(string $prefix = ''): void
{
    $beranda = h($prefix . 'index.php');
    echo <<<HTML
    </section>
    <footer class="site-footer">
        <a href="{$beranda}">&larr; Kembali ke Beranda</a>
        <small>Pemrograman Web &middot; Praktikum 7 &middot; PHP Server-Side</small>
    </footer>
</main>
</body>
</html>
HTML;
}
