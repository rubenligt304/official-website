<?php
include 'db_connect.php'; // Verbind met de database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verkrijg de gegevens van het formulier
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $geboortedatum = $_POST['geboortedatum'];
    $nationaliteit = $_POST['nationaliteit'];

    // Voeg de rijder toe aan de database
    $sql = "INSERT INTO Rijders (voornaam, achternaam, geboortedatum, nationaliteit) 
            VALUES (:voornaam, :achternaam, :geboortedatum, :nationaliteit)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':voornaam', $voornaam);
    $stmt->bindParam(':achternaam', $achternaam);
    $stmt->bindParam(':geboortedatum', $geboortedatum);
    $stmt->bindParam(':nationaliteit', $nationaliteit);

    $stmt->execute();
    echo "Rijder succesvol toegevoegd!";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Voeg Rijder Toe</title>
</head>
<body>
    <h2>Voeg Rijder Toe</h2>
    <form action="add_rijder.php" method="POST">
        <label for="voornaam">Voornaam:</label>
        <input type="text" id="voornaam" name="voornaam" required><br><br>

        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" required><br><br>

        <label for="geboortedatum">Geboortedatum:</label>
        <input type="date" id="geboortedatum" name="geboortedatum" required><br><br>

        <label for="nationaliteit">Nationaliteit:</label>
        <input type="text" id="nationaliteit" name="nationaliteit" required><br><br>

        <input type="submit" value="Voeg Toe">
    </form>
</body>
</html>
