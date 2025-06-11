<?php include_once '../config/config.php'; ?>
<?php include_once '../includes/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | ST. George</title>
     <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
</head>
<body class="flex flex-col min-h-screen bg-gray-50">


<?php include '../includes/navbar.php'; ?>


     <?php include '../includes/footer.php'; ?>
     <!-- GLightbox script -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        const lightbox = GLightbox({ selector: '.glightbox' });
    </script>
</body>
</html>