<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schutterij St. George</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="min-h-screen flex flex-col bg-white text-gray-800">

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Inhoud -->
    <main class="flex-grow">

        <!-- Hero Section met achtergrondafbeelding en overlay -->
        <section class="relative text-white text-center h-[500px] flex items-center justify-center">
            <div class="absolute inset-0 bg-[url('assets/img/hero.jpg')] bg-cover bg-center z-0"></div>
            <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
            <div class="relative z-20 px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Welkom bij Schutterij St. George</h1>
                <p class="text-lg md:text-xl drop-shadow-md">Sinds 1442 – een rijke traditie in Simpelveld</p>
            </div>
        </section>

        <!-- Andere secties kunnen hier -->
        <section class="py-16 px-6 text-center">
            <h2 class="text-2xl font-semibold mb-4">Over de Schutterij</h2>
            <p class="max-w-xl mx-auto text-gray-600">
                Schutterij St. George is een gemeenschap die al eeuwenlang staat voor traditie, broederschap en feestelijke optochten. Ontdek onze geschiedenis, evenementen en koningsparen.
            </p>
        </section>

    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

</body>
</html>
