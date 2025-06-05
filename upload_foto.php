<?php
require_once __DIR__ . '/includes/db.php';

$folder = __DIR__ . '/uploads/gallery';
$relative = 'uploads/gallery';

if (!is_dir($folder)) {
    die("❌ Map bestaat niet: $folder");
}

$images = array_diff(scandir($folder), ['.', '..']);
$count = 0;

foreach ($images as $img) {
    $path = "$relative/$img";

    // Check of het bestand al bestaat in de DB
    $stmt = $db->prepare("SELECT COUNT(*) FROM gallery_photos WHERE image_path = ?");
    $stmt->execute([$path]);
    $exists = $stmt->fetchColumn();

    if (!$exists) {
        $stmt = $db->prepare("INSERT INTO gallery_photos (title, description, image_path) VALUES (?, ?, ?)");
        $stmt->execute([
            pathinfo($img, PATHINFO_FILENAME), // titel = bestandsnaam
            '',                                // lege beschrijving
            $path                              // relatieve pad naar bestand
        ]);
        $count++;
    }
}

echo "✅ $count nieuwe foto's toegevoegd aan de database.";
