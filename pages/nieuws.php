<?php include_once '../config/config.php'; ?>
<?php include_once '../includes/db.php'; ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Nieuws - Schutterij</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
</head>
<body class="min-h-screen flex flex-col">

<?php include '../includes/navbar.php'; ?>

<header class="news-hero bg-gray-800 text-white text-center py-10">
    <h1 class="text-4xl font-bold">Laatste Nieuws</h1>
    <p class="text-lg mt-2">Bekijk hier de laatste gebeurtenissen binnen onze schutterij.</p>
</header>

<main class="news-container flex-grow p-6">
    <article class="news-item bg-white rounded shadow overflow-hidden max-w-xl mx-auto">
        <img src="images/koningsschieten.jpg" alt="Koningsschieten 2025" class="w-full h-64 object-cover" />
        <div class="news-content p-4">
            <h2 class="text-xl font-semibold">Koningsschieten 2025: Jan Jansen opnieuw koning</h2>
            <p class="news-date text-sm text-gray-500 mt-1">12 juni 2025</p>
            <p class="mt-2">Onder een stralende zon werd Jan Jansen voor de derde keer koning van onze schutterij...</p>
            <a href="nieuws/koningsschieten-2025.html" class="read-more text-green-700 font-bold inline-block mt-3">Lees meer</a>
        </div>
    </article>
</main>

<?php include '../includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
    const lightbox = GLightbox({ selector: '.glightbox' });
</script>
</body>
</html>
