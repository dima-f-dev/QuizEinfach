<?php

session_start();

// ENV-Datei
require 'config/env.php';
loadEnv(__DIR__ . '/.env');
require 'config/db.php';

// Meta-Daten und Seitenliste laden.
$seo_data = require_once 'config/seo_config.php'; 

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Schlüssel auslesen und daraus eine Liste der Seiten erstellen.
$allowed_pages = array_keys($seo_data); 

// Wenn die angeforderte Seite nicht in der Seitenliste enthalten ist, wird eine 404-Seite angezeigt.
if (!in_array($page, $allowed_pages)) {
    header("HTTP/1.1 404 Not Found");
    $page = '404';
}

// Array mit den Daten der aktuellen Seite
$currentPage = $seo_data[$page];

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, viewport-fit=cover">
    <title><?= htmlspecialchars($currentPage['title']) ?></title>
    <link rel="stylesheet" href="/assets/css/output.css?v=1">
    <link rel="icon" href="favicon.ico" >

    <!-- SEO-Block -->
    <meta name="description" content="<?= htmlspecialchars($currentPage['description']) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($currentPage['keywords']) ?>">
    <meta name="robots" content="index, follow, noodp">
    <meta property="og:locale" content="de_DE">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($currentPage['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($currentPage['description']) ?>">
    <meta property="og:image" content="/assets/img/quizeinfach.jpg">
</head>
<body class="bg-slate-100">
    <header >
        <?php include 'includes/navbar.php'; ?> 
    </header>


    <div class="mx-auto max-w-7xl px-6 py-8 grid grid-cols-1 md:grid-cols-4 lg:grid-cols-12 gap-8 items-start min-h-[calc(100vh-8rem)]">
       
        <aside class="order-2 md:order-none w-full bg-slate-50 border border-slate-200/60 rounded-xl p-4 md:col-span-1 lg:col-span-3">
            <?php include 'includes/l_sidebar.php'; ?>
        </aside>

        <main class="order-1 md:order-none w-full bg-white border border-slate-200/80 rounded-xl p-6 md:col-span-3 lg:col-span-9 shadow-sm">
            <?php include "pages/{$page}.php"; ?>
        </main>
        <!--
        <aside class="order-3 md:order-none w-full bg-slate-50 border border-slate-200/60 rounded-xl p-4 md:col-span-4 lg:col-span-3">
            <?php include 'includes/r_sidebar.php'; ?>
        </aside>
        -->
    </div>
    

    <footer class="bg-white border-t border-slate-200 px-6">
        <?php include 'includes/footer.php'; ?>
    </footer>

    <script src="/assets/js/main.js"> </script>
</body>
</html>