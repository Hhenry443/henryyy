<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/php/api/hate/WriteHate.php';

$action = $_GET['action'];

switch ($action) {
  case "submitHate":
    $hate = new WriteHate();
    $hate->addHate();
    break;

  default:
    echo "something went wrong";
    break;
}
