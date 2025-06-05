<?php include_once '../config/config.php'; ?>
<?php include_once '../includes/db.php'; ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotogalerij</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">
</head>
<body class="flex flex-col min-h-screen bg-gray-50">

    <?php include '../includes/navbar.php'; ?>

    <main class="flex-grow">
        <section class="p-8 text-center">
            <h1 class="text-3xl font-bold mb-4">Fotogalerij</h1>
            <p class="text-gray-600 mb-10">Herinneringen van de schutterij</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <?php
                $stmt = $db->query("SELECT * FROM gallery_photos ORDER BY uploaded_at DESC");
                $photos = $stmt->fetchAll();

                if ($photos):
                    foreach ($photos as $photo): ?>
                        <div class="bg-white rounded shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                            <div class="relative w-full aspect-[4/3] bg-gray-100 flex items-center justify-center">
                                <img src="<?= $base_url . $photo['image_path'] ?>"
                                     alt="<?= htmlspecialchars($photo['title']) ?>"
                                     class="absolute max-h-full max-w-full object-contain p-2">
                            </div>
                            <div class="p-3 text-center">
                                <h3 class="text-base font-semibold break-words"><?= htmlspecialchars($photo['title']) ?></h3>
                            </div>
                        </div>
                    <?php endforeach;
                else: ?>
                    <p class="text-gray-500 col-span-full">Er zijn nog geen foto's toegevoegd.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>

</body>
</html>
