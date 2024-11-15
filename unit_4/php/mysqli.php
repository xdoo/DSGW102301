<?php

$conn = new mysqli("db", "user", "password", "mydatabase");

// Eingabewerte aus dem Formular holen
$artikelname = $_POST['artikelname'];
$artikelnummer = $_POST['artikelnummer'];
$bestand = $_POST['bestand'];

// Zufällige ID generieren
$id = random_int(10, 1000000);

// SQL-Statement vorbereiten
$insert = "INSERT INTO Artikel (id, artikelname, artikelnummer, bestand) VALUES ($id, '$artikelname', '$artikelnummer', $bestand)";
$eintrag = $conn->query($insert);

// Ergebnis überprüfen und Rückmeldung ausgeben
if ($eintrag === TRUE) {
  echo "Neuer Artikel erfolgreich hinzugefügt!";
} else {
  echo "Fehler beim Speichern: " . $conn->error;
}






