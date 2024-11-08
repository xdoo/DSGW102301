<?php
require '../model/Book.php';
require '../repos/BookRepository.php';

// Überprüfen, ob das Formular abgesendet wurde
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Formulardaten empfangen
  $title = $_POST['title'];
  $author = $_POST['author'];

  // Repository initialisieren
  $repo = new BookRepository();

  // Neues Buch erstellen und speichern
  $newBook = new Book($title, $author);
  $bookId = $repo->save([
    'title' => $newBook->title,
    'author' => $newBook->author
  ]);

  // Erfolgsmeldung anzeigen
  echo "Das Buch mit der ID $bookId wurde erfolgreich gespeichert!";
} else {
  echo "Ungültige Anfrage!";
}

