<?php
class Schedule
{
  private $db;

  public function __construct(PDO $db)
  {
    $this->db = $db;
  }

  public function getSchedule()
  {
    try {
      $statement = $this->db->prepare("SELECT * FROM `schedules`");
      $statement->execute();
    } catch (PDOException $e) {
      echo $e;
      return [];
    }
    return $statement->fetchAll();
  }
}
