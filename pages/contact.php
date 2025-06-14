<?php
include_once '../config/config.php';
include_once '../includes/db.php';

$success = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = trim($_POST['naam'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $bericht = trim($_POST['bericht'] ?? '');

    if ($naam === '' || $email === '' || $bericht === '') {
        $errors[] = 'Vul alle velden in.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Voer een geldig e-mailadres in.';
    }

    if (empty($errors)) {
        // mail('jij@email.com', 'Nieuw contactbericht', "Naam: $naam\nE-mail: $email\n\n$bericht");
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | ST. George</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

<?php include '../includes/navbar.php'; ?>

<main class="flex-1 flex items-center justify-center px-4 py-12">
  <div class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-8 bg-white shadow-md rounded-xl p-8">

    <!-- Kaart -->
    <div>
      <h2 class="text-xl font-semibold mb-4">Onze locatie</h2>
      <div id="map" class="w-full h-[400px] rounded-md border border-gray-300"></div>
    </div>

    <!-- Contactformulier -->
    <div>
      <h1 class="text-3xl font-bold text-center mb-6">Neem contact op</h1>

      <?php if ($success): ?>
        <div class="mb-6 p-4 text-green-800 bg-green-100 border border-green-200 rounded">
          Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.
        </div>
      <?php elseif (!empty($errors)): ?>
        <div class="mb-6 p-4 text-red-800 bg-red-100 border border-red-200 rounded">
          <?= implode('<br>', $errors) ?>
        </div>
      <?php endif; ?>

      <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="space-y-6" novalidate>
        <div>
          <label for="naam" class="block mb-1 font-medium">Naam</label>
          <input type="text" id="naam" name="naam" value="<?= htmlspecialchars($_POST['naam'] ?? '') ?>" required
                 class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
        </div>
        <div>
          <label for="email" class="block mb-1 font-medium">E-mailadres</label>
          <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required
                 class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
        </div>
        <div>
          <label for="bericht" class="block mb-1 font-medium">Bericht</label>
          <textarea id="bericht" name="bericht" rows="5" required
                    class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-orange-400"><?= htmlspecialchars($_POST['bericht'] ?? '') ?></textarea>
        </div>
        <div class="text-center">
          <button type="submit"
                  class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded-md transition duration-200">
            Verstuur
          </button>
        </div>
      </form>
    </div>

  </div>
</main>

<?php include '../includes/footer.php'; ?>

<!-- Leaflet kaart script -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
  var map = L.map('map').setView([50.82713192512124, 5.980997151592829], 13);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Kaartgegevens © <a href="https://www.openstreetmap.org/">OpenStreetMap</a> bijdragers',
    maxZoom: 18
  }).addTo(map);
  L.marker([50.82713192512124, 5.980997151592829]).addTo(map)
    .bindPopup('Schutterij St George Simpelveld')
    .openPopup();
</script>

<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
  const lightbox = GLightbox({ selector: '.glightbox' });
</script>

</body>
</html>
