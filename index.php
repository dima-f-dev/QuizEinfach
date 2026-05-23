<?php

session_start();
require 'config/db.php';


$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$allowed_pages = ['home','quiz','create','faq','impressum','datenschutz','kontakt']; 


if (!in_array($page, $allowed_pages)) {
    header("HTTP/1.1 404 Not Found");
    $page = '404';
}

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, viewport-fit=cover">
    <title>QuizEinfach</title>
    <link rel="stylesheet" href="/assets/css/output.css">
    <meta name="robots" content="noindex">
</head>
<body class="bg-slate-100">
    <header >
        <?php include 'includes/navbar.php'; ?> 
    </header>


    <div class="mx-auto max-w-7xl px-6 py-8 grid grid-cols-1 md:grid-cols-4 lg:grid-cols-12 gap-8 items-start min-h-[calc(100vh-8rem)]">
       
        <aside class="order-2 md:order-none w-full bg-slate-50 border border-slate-200/60 rounded-xl p-4 md:col-span-1 lg:col-span-3">
            <?php include 'includes/l_sidebar.php'; ?>
        </aside>

        <main class="order-1 md:order-none w-full bg-white border border-slate-200/80 rounded-xl p-6 md:col-span-3 lg:col-span-6 shadow-sm">
            <?php include "pages/{$page}.php"; ?>
        </main>

        <aside class="order-3 md:order-none w-full bg-slate-50 border border-slate-200/60 rounded-xl p-4 md:col-span-4 lg:col-span-3">
            <?php include 'includes/r_sidebar.php'; ?>
        </aside>

    </div>
    

    <footer class="bg-white border-t border-slate-200 px-6">
        <?php include 'includes/footer.php'; ?>
    </footer>

    <script src="/assets/js/main.js"> </script>
</body>
</html>