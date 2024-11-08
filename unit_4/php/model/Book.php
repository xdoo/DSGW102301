<?php

class Book {
  public $id;
  public $title;
  public $author;

  public function __construct($title, $author) {
    $this->title = $title;
    $this->author = $author;
  }
}

