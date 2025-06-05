<?php include_once '../config/config.php'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerij</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">
</head>
<body class="flex flex-col min-h-screen">

    <?php include '../includes/navbar.php'; ?>

    <!-- Page content -->
    <main class="flex-grow">
        <section class="p-8 text-center">
            <h1 class="text-3xl font-bold mb-4">Fotogalerij</h1>
            <p class="text-gray-600">Hier komen mooie herinneringen van de schutterij!</p>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>

</body>
</html>
