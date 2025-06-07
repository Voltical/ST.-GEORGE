<?php include_once 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | ST. George</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="min-h-screen flex flex-col bg-white text-gray-800">

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Inhoud -->
    <main class="flex-grow">

        <!-- Hero Section -->
        <section class="relative text-white text-center h-[500px] flex items-center justify-center overflow-hidden animate-fadeIn">
            <div class="absolute inset-0 bg-[url('assets/img/hero.jpg')] bg-cover bg-center z-0 scale-110 animate-zoom"></div>
            <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
            <div class="relative z-20 px-4 animate-slideUp">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Welkom bij Schutterij St. George</h1>
                <p class="text-lg md:text-xl drop-shadow-md">Sinds 1442 – een rijke traditie in Simpelveld</p>
            </div>
        </section>

        <!-- Over Sectie -->
        <section class="py-20 px-6 bg-white text-center animate-fadeInSlow">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-semibold mb-6 text-blue-900">Over de Schutterij</h2>
                <p class="text-gray-600 leading-relaxed">
                    Schutterij St. George is een warme gemeenschap waar traditie en verbondenheid samenkomen. Al meer dan 5 eeuwen dragen wij ons uniform met trots, vieren wij onze cultuur, en heten wij nieuwe leden welkom in onze rangen. Of je nu jong of oud bent – iedereen is welkom.
                </p>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-blue-600 text-white py-20 px-6 text-center animate-fadeInSlow">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold mb-4">Word lid van onze trotse Schutterij</h2>
                <p class="text-lg mb-6">Sluit je aan bij een broederschap vol traditie, kameraadschap en plezier.</p>
                <a href="<?= $base_url ?>pages/contact.php" class="inline-block bg-white text-blue-700 font-semibold py-3 px-6 rounded hover:bg-gray-100 transition">
                    Meld je aan
                </a>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

</body>
</html>
