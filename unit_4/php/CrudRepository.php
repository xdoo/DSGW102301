<?php
require 'rb.php';  // RedBeanPHP einbinden

abstract class CRUDRepository {

  protected $table;

  public function __construct($table) {
    $this->table = $table;

    // RedBeanPHP einrichten (die DB-Verbindung)
    R::setup('pgsql:host=localhost;dbname=mydatabase', 'user', 'password');
  }

  public function save($data) {
    $bean = R::dispense($this->table);  // Dynamischer Tabellenname
    foreach ($data as $key => $value) {
      $bean->$key = $value;
    }
    return R::store($bean);  // Speichert den Datensatz und gibt die ID zurück
  }

  public function findById($id) {
    return R::load($this->table, $id);  // Lädt den Datensatz basierend auf der ID
  }

  public function findAll() {
    return R::findAll($this->table);  // Lädt alle Datensätze
  }

  public function delete($id) {
    $bean = R::load($this->table, $id);
    R::trash($bean);  // Löscht den Datensatz
  }
}
