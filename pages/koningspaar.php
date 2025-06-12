<?php include_once '../config/config.php'; ?>
<?php include_once '../includes/db.php'; ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koningspaar | ST. George</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
</head>
<body class="flex flex-col min-h-screen bg-gray-50">

<?php include '../includes/navbar.php'; ?>

<div class="text-center py-10 bg-blue-800 text-white">
    <h1 class="text-4xl font-bold mb-2">Koningsgalerij</h1>
    <p class="text-lg">Een overzicht van het koningspaar per jaar</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-10 max-w-screen-xl mx-auto">
  <?php
  $stmt = $db->query('SELECT * FROM koningsparen ORDER BY year DESC');
  foreach ($stmt as $row): ?>
    <div class="bg-white rounded-xl shadow-md overflow-hidden p-4 text-center">
      <h2 class="text-2xl font-semibold text-blue-700 mb-2"><?= htmlspecialchars($row['year']) ?></h2>
      <a href="uploads/gallery<?= htmlspecialchars($row['foto_path']) ?>" class="glightbox block">
        <img src="uploads/<?= htmlspecialchars($row['foto_path']) ?>" alt="Foto <?= $row['year'] ?>" class="w-full h-80 object-cover rounded-lg mb-4 transition hover:scale-105 duration-300">
      </a>
      <p><strong>Koning:</strong> <?= htmlspecialchars($row['koning_naam']) ?></p>
      <p><strong>Koningin:</strong> <?= htmlspecialchars($row['koningin_naam']) ?></p>
      <?php if (!empty($row['beschrijving'])): ?>
        <p class="mt-2 text-gray-600"><?= htmlspecialchars($row['beschrijving']) ?></p>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>

<?php include '../includes/footer.php'; ?>

<!-- GLightbox script -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
    const lightbox = GLightbox({ selector: '.glightbox' });
</script>
</body>
</html>
