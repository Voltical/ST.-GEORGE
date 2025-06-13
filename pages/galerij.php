<?php include_once '../config/config.php'; ?>
<?php include_once '../includes/db.php'; ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotogalerij | ST. George</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
</head>
<body class="flex flex-col min-h-screen bg-gray-50">

    <!-- Navbar -->
    <?php include '../includes/navbar.php'; ?>

    <main class="flex-grow">
        <section class="py-12 px-4 max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-2 text-red-700">Fotogalerij</h1>
                <p class="text-gray-500">Herinneringen van de schutterij door de jaren heen</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Sidebar links -->
                <aside class="lg:col-span-2 hidden lg:block space-y-6">
                    <div class="bg-white p-4 rounded shadow text-sm leading-relaxed border-l-4 border-red-500">
                        <h3 class="font-semibold text-red-700 mb-2">Wist je dat?</h3>
                        <ul class="list-disc pl-5 text-gray-600">
                            <li>Opgericht in 1442</li>
                            <li>Meerdere koningsparen per decennium</li>
                            <li>Altijd in uniform tijdens optochten</li>
                        </ul>
                    </div>

                    <div class="bg-red-100 border-l-4 border-red-500 p-4 rounded">
                        <h3 class="font-semibold text-red-700">Lid worden?</h3>
                        <p class="text-sm text-gray-700 mt-1">Iedereen is welkom bij onze gemeenschap.</p>
                        <a href="<?= $base_url ?>pages/contact.php" class="text-red-700 underline text-sm mt-2 inline-block">Bekijk inschrijfinfo →</a>
                    </div>
                </aside>

                <!-- Galerij -->
                <div class="lg:col-span-8">
                    <?php
                    // PAGINERING
                    $perPage = 12;
                    $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
                    $offset = ($page - 1) * $perPage;

                    // Totaal aantal foto's
                    $totalStmt = $db->query("SELECT COUNT(*) FROM gallery_photos");
                    $totalPhotos = $totalStmt->fetchColumn();
                    $totalPages = ceil($totalPhotos / $perPage);

                    // Haal foto's op voor deze pagina
                    $stmt = $db->prepare("SELECT * FROM gallery_photos ORDER BY uploaded_at DESC LIMIT :limit OFFSET :offset");
                    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
                    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
                    $stmt->execute();
                    $photos = $stmt->fetchAll();
                    ?>
                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <?php
                        if ($photos):
                            foreach ($photos as $photo): ?>
                                <div class="group bg-white rounded shadow hover:shadow-lg transition overflow-hidden border-2 border-red-200">
                                    <a href="<?= $base_url . $photo['image_path'] ?>" class="glightbox" data-gallery="galerij">
                                        <div class="relative w-full aspect-[3/2] overflow-hidden h-64 sm:h-72 md:h-80">
                                            <img src="<?= $base_url . $photo['image_path'] ?>"
                                                 alt=""
                                                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300">
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach;
                        else: ?>
                            <p class="text-gray-500 col-span-full">Er zijn nog geen foto's toegevoegd.</p>
                        <?php endif; ?>
                    </div>

                    <!-- PAGINERING onder de foto's -->
                    <?php if ($totalPages > 1): ?>
                        <div class="flex justify-center mt-8 space-x-2">
                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                <a href="?page=<?= $i ?>"
                                   class="px-4 py-2 rounded border <?= $i == $page ? 'bg-red-600 text-white border-red-600' : 'bg-white text-red-600 border-red-300 hover:bg-red-50' ?>">
                                    <?= $i ?>
                                </a>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Sidebar rechts -->
                <aside class="lg:col-span-2 hidden lg:block space-y-6">
                    <div class="bg-white p-4 rounded shadow text-sm border-l-4 border-red-500">
                        <h3 class="font-semibold text-red-700 mb-2">Filter op jaartal</h3>
                        <select class="w-full border border-gray-300 rounded px-2 py-1 text-sm">
                            <option>Alle jaren</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                        </select>
                    </div>

                    <div class="bg-white p-4 rounded shadow text-sm border-l-4 border-red-500">
                        <h3 class="font-semibold text-red-700 mb-2">Contact</h3>
                        <p class="text-gray-600">Heb je zelf foto's of wil je meedoen met de vereniging? Laat het ons weten!</p>
                        <a href="<?= $base_url ?>pages/contact.php" class="text-red-600 underline text-sm">Stuur een bericht →</a>
                    </div>
                </aside>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- GLightbox script -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        const lightbox = GLightbox({ selector: '.glightbox' });
    </script>
</body>
</html>
