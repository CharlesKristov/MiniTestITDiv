<?php
class Lecturer
{
  private $db;

  public function __construct(PDO $db)
  {
    $this->db = $db;
  }

  public function getLecturer()
  {
    try {
      $statement = $this->db->prepare("SELECT * FROM `lecturer`");
      $statement->execute();
    } catch (PDOException $e) {
      echo $e;
      return [];
    }
    return $statement->fetchAll();
  }
}
