<?php
// db.php

// Zet foutmeldingen UIT in productie
ini_set('display_errors', 0);
error_reporting(0);

// === .env variabelen inladen (optioneel) ===
if (file_exists(__DIR__ . '/../.env')) {
    $env = parse_ini_file(__DIR__ . '/../.env');
    foreach ($env as $key => $value) {
        putenv("$key=$value");
    }
}

// === Database instellingen (uit .env of fallback) ===
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_name = getenv('DB_NAME') ?: 'schutterij';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASS') ?: '';

// === Verbinding maken met PDO ===
try {
    $pdo = new PDO(
        "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4",
        $db_user,
        $db_pass,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // foutmeldingen gooien als exceptions
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // standaard array resultaat
            PDO::ATTR_EMULATE_PREPARES   => false                   // echte prepared statements gebruiken
        ]
    );
} catch (PDOException $e) {
    // Veilige foutmelding (geen credentials tonen)
    http_response_code(500);
    die("Databasefout. Neem contact op met de beheerder.");
}
