<?php
$host = 'localhost'; // De locatie van je database
$dbname = 'ruben_ligtenstein_db'; // De naam van je database
$username = 'root'; // Gebruikersnaam voor toegang tot de database
$password = ''; // Wachtwoord voor de database (kan leeg zijn bij lokale servers)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Zet foutmeldingen aan
    // Als je hier komt, betekent het dat de verbinding gelukt is
} catch (PDOException $e) {
    echo "Fout bij verbinding: " . $e->getMessage();
}
?>
