<?php
// Fehlerberichterstattung erzwingen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'rb.php';

$name = 'Hans Peter';

try {
  echo 'DB verbindung erstellen';
  // Datenbankverbindung einrichten
  R::setup('pgsql:host=db;dbname=mydatabase', 'user', 'password');

  // Verbindung testen
  if (R::testConnection()) {
    $connectionStatus = "Verbindung zur Datenbank erfolgreich!";

    // Teste einen einfachen SQL-Befehl
    $tables = R::inspect();  // Liefert die Liste der Tabellen in der DB
    $connectionStatus .= "<br>Tabellen in der Datenbank: " . implode(", ", $tables);

  } else {
    $connectionStatus = "Verbindung zur Datenbank fehlgeschlagen!";
  }
} catch (PDOException $e) {
  // Fehler abfangen und anzeigen
  $connectionStatus = "Fehler bei der Datenbankverbindung: " . $e->getMessage();
}
?>

<html>
<head>
  <title>Hello <?php echo $name ?> </title>
</head>
<body>
<h1>Hello <?php echo $name?> </h1>
<p>Connection => <?php echo $connectionStatus; ?></p>  <!-- Verbindungstest anzeigen -->
<p>Test und jetzt?</p>

<h1>Neues Buch speichern</h1>
<form action="controller/save_book.php" method="POST">
  <label for="title">Buchtitel:</label>
  <input type="text" id="title" name="title" required><br><br>

  <label for="author">Autor:</label>
  <input type="text" id="author" name="author" required><br><br>

  <button type="submit">Buch speichern</button>
</form>
</body>
</html>
