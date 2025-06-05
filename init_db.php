<?php
// Verbind met de SQLite database
require_once __DIR__ . '/includes/db.php';

try {
    // Tabel: admins
    $db->exec("CREATE TABLE IF NOT EXISTS admins (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT,
        email TEXT UNIQUE,
        password_hash TEXT,
        role TEXT DEFAULT 'beheerder',
        created_at TEXT DEFAULT CURRENT_TIMESTAMP
    )");

    // Tabel: gallery_photos
    $db->exec("CREATE TABLE IF NOT EXISTS gallery_photos (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT,
        description TEXT,
        image_path TEXT,
        uploaded_at TEXT DEFAULT CURRENT_TIMESTAMP
    )");

    // Tabel: evenementen
    $db->exec("CREATE TABLE IF NOT EXISTS evenementen (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT,
        description TEXT,
        location TEXT,
        event_date TEXT,
        image_path TEXT,
        created_at TEXT DEFAULT CURRENT_TIMESTAMP
    )");

    // Tabel: koningsparen
    $db->exec("CREATE TABLE IF NOT EXISTS koningsparen (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        year INTEGER,
        koning_naam TEXT,
        koningin_naam TEXT,
        foto_path TEXT,
        beschrijving TEXT,
        created_at TEXT DEFAULT CURRENT_TIMESTAMP
    )");

    // Tabel: nieuws
    $db->exec("CREATE TABLE IF NOT EXISTS nieuws (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT,
        content TEXT,
        author TEXT,
        published_at TEXT,
        image_path TEXT,
        created_at TEXT DEFAULT CURRENT_TIMESTAMP
    )");

    // Tabel: historie
    $db->exec("CREATE TABLE IF NOT EXISTS historie (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT,
        content TEXT,
        image_path TEXT,
        created_at TEXT DEFAULT CURRENT_TIMESTAMP
    )");

    echo "✅ Alle tabellen zijn succesvol aangemaakt.";

} catch (PDOException $e) {
    die("❌ Fout bij aanmaken tabellen: " . $e->getMessage());
}
