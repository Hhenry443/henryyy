<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/php/config/db.php';

class HateModel extends Dbh
{
  private PDO $db;

  function __construct()
  {
    $this->db = Dbh::getConnection();
  }

  // add a hate message to db
  protected function insertHateMessage($hateMessage, $haterName, $haterEmail)
  {
    $sql = "INSERT INTO `hate`(`hate_message`, `hate_name`, `hate_email`) VALUES (:hateMessage, :haterName, :haterEmail)";

    $stmt = $this->db->prepare($sql);
    $stmt->bindValue(":hateMessage", $hateMessage, PDO::PARAM_STR);
    $stmt->bindValue(":haterName", $haterName, PDO::PARAM_STR);
    $stmt->bindValue(":haterEmail", $haterEmail, PDO::PARAM_STR);

    $stmt->execute();

    return $this->db->lastInsertId();
  } // insertHateMessage
}
