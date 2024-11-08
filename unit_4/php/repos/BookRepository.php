<?php
require_once '../CrudRepository.php';

class BookRepository extends CRUDRepository
{
  public function __construct() {
    parent::__construct('book');
  }

}
