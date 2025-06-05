<?php
// Pad naar de SQLite database (past dit aan als je map anders is)
$database_path = __DIR__ . '/../sql/Database/database.sqlite';

try {
    // Maak PDO-verbinding met SQLite
    $db = new PDO('sqlite:' . $database_path);
    
    // Zet foutmelding-modus aan (handig tijdens development)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optioneel: zet fetch-modus standaard op associatieve arrays
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Als de verbinding mislukt: toon fout
    die("Verbinding met database mislukt: " . $e->getMessage());
}
